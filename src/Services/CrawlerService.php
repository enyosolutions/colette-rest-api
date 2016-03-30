<?php
/**
 * Created by PhpStorm.
 * User: faou
 * Date: 29/09/2014
 * Time: 21:03
 */

namespace App\Services;

use Resty\Resty;
use Sunra\PhpSimple\HtmlDomParser;

class CrawlerService
{

    private $app;

    private $base_url;
    private $site_links;
    private $max_depth;
    private $stop_links = array(//returned deadlinks
        '@^javascript\:void\(0\)$@',
        '@^#.*@'
    );

    public function __construct($app)
    {
        $this->app = $app;
        $this->baseUrl = $this->app['kwg.api.host'];

    }


    public function init($base_url, $max_depth = 10)
    {
        if (strpos($base_url, 'http') === false) { // http protocol not included, prepend it to the base url
            $base_url = 'http://' . $base_url;
        }

        $this->base_url = $base_url;
        $this->site_links = array();
        $this->max_depth = $max_depth;
        return $this;
    }

    /**
     * checks the uri if can be crawled or not
     * in order to prevent links like "javascript:void(0)" or "#something" from being crawled again
     * @param string $uri
     * @return boolean
     */
    protected function checkIfCrawlable($uri)
    {
        if (empty($uri)) {
            return false;
        }

        foreach ($this->stop_links as $ptrn) {
            if (preg_match($ptrn, $uri)) {
                return false;
            }
        }

        return true;
    }

    /**
     * normalize link before visiting it
     * currently just remove url hash from the string
     * @param string $uri
     * @return string
     */
    protected function normalizeLink($uri)
    {
        $uri = preg_replace('@#.*$@', '', $uri);

        return $uri;
    }


    public function crawl($url_to_traverse = null)
    {
        if (is_null($url_to_traverse)) {
            $url_to_traverse = $this->base_url;

            $this->site_links[$url_to_traverse] = array(//initialize first element in the site_links
                'links_text' => array("BASE_URL"),
                'absolute_url' => $url_to_traverse,
                'frequency' => 1,
                'visited' => false,
                'external_link' => false,
                'original_urls' => array($url_to_traverse),
            );
        }

        $this->_crawlSingle($url_to_traverse, $this->max_depth);
        return $this;
    }

    protected function _crawlSingle($url_to_traverse, $depth)
    {
        //echo $url_to_traverse . chr(10);

        try {
            $resty = new Resty();
            $resty->setUserAgent('Resty KWG');
            $response = $resty->get($url_to_traverse, null, null, ['max_redirects' => 2]);

            $headers = $response['headers'];
            $status_code = $response['status'];
            $this->site_links[$url_to_traverse]['status_code'] = $status_code;

            if ($status_code === 200) { // valid url and not reached depth limit yet
                $contentHeader = (count($headers['Content-Type']) > 1? $headers['Content-Type'][count($headers['Content-Type'])-1]:$headers['Content-Type']);
                if (strpos($contentHeader, 'text/html') !== false) { //traverse children in case the response in HTML document
                    $content = HtmlDomParser::str_get_html($response['body']);
                    $this->extractTitleInfo($content, $url_to_traverse);

                    $current_links = array();
                    if (@$this->site_links[$url_to_traverse]['external_link'] == false) { // for internal uris, get all links inside
                        $current_links = $this->extractLinksInfo($content, $url_to_traverse);
                    }

                    $this->site_links[$url_to_traverse]['visited'] = true; // mark current url as visited
                    $this->crawlChildLinks($current_links, $depth - 1);
                }
            }

        } catch (\Exception $ex) {
            error_log("error retrieving data from link: " . $url_to_traverse);
            $this->site_links[$url_to_traverse]['status_code'] = '404';
        }
    }


    protected function crawlChildLinks($current_links, $depth)
    {
        if ($depth == 0) {
            return;
        }

        foreach ($current_links as $uri => $info) {
            if (!isset($this->site_links[$uri])) {
                $this->site_links[$uri] = $info;
            } else {
                $this->site_links[$uri]['original_urls'] = isset($this->site_links[$uri]['original_urls']) ? array_merge($this->site_links[$uri]['original_urls'], $info['original_urls']) : $info['original_urls'];
                $this->site_links[$uri]['links_text'] = isset($this->site_links[$uri]['links_text']) ? array_merge($this->site_links[$uri]['links_text'], $info['links_text']) : $info['links_text'];
                if (@$this->site_links[$uri]['visited']) { //already visited link)
                    $this->site_links[$uri]['frequency'] = @$this->site_links[$uri]['frequency'] + @$info['frequency'];
                }
            }

            if (!empty($uri) &&
                !$this->site_links[$uri]['visited'] &&
                !isset($this->site_links[$uri]['dont_visit'])
            ) { //traverse those that not visited yet
                $this->_crawlSingle($this->normalizeLink($current_links[$uri]['absolute_url']), $depth);
            }
        }
    }


    protected function extractLinksInfo($content, $url_to_traverse)
    {
        $current_links = array();
        //,img,script,link
        $tags = $content->find('a');
        array_map(function ($node) use (&$current_links) {

            $node_text = trim($node->plaintext);

            $node_url = (isset($node->attr['href']) ? $node->attr['href'] : (isset($node->attr['src']) ? $node->attr['src'] : ""));

            $hash = $this->normalizeLink($node_url);

            if (!isset($this->site_links[$hash])) {
                $current_links[$hash]['original_urls'][$node_url] = $node_url;
                $current_links[$hash]['links_text'][$node_text] = $node_text;

                if (!$this->checkIfCrawlable($node_url)) {

                } elseif (!preg_match("@^http(s)?@", $node_url)) { //not absolute link
                    $current_links[$hash]['absolute_url'] = $this->base_url . $node_url;
                } else {
                    $current_links[$hash]['absolute_url'] = $node_url;
                }

                if (!$this->checkIfCrawlable($node_url)) {
                    $current_links[$hash]['dont_visit'] = true;
                    $current_links[$hash]['external_link'] = false;
                } elseif ($this->checkIfExternal($current_links[$hash]['absolute_url'])) { // mark external url as marked
                    $current_links[$hash]['external_link'] = true;
                } else {
                    $current_links[$hash]['external_link'] = false;
                }
                $current_links[$hash]['visited'] = false;

                $current_links[$hash]['frequency'] = isset($current_links[$hash]['frequency']) ? $current_links[$hash]['frequency']++ : 1; // increase the counter
            }

        }, $tags);

        if (isset($current_links[$url_to_traverse])) { // if page is linked to itself, ex. homepage
            $current_links[$url_to_traverse]['visited'] = true; // avoid cyclic loop
        }

        return $current_links;
    }

    protected function extractTitleInfo($content, $url)
    {
        $this->site_links[$url]['title'] = $content->find("title", 0)->plaintext;

        $h1_count = count($content->find('h1'));
        $this->site_links[$url]['h1_count'] = $h1_count;
    }

    /**
     * getting information about links crawled
     * @return array
     */
    public function getLinksInfo()
    {
        return $this->site_links;
    }

    /**
     * check if the link leads to external site or not
     * @param string $url
     * @return boolean
     */
    public function checkIfExternal($url)
    {
        $base_url_trimmed = str_replace(array('http://', 'https://'), '', $this->base_url);

        if (preg_match("@http(s)?\://$base_url_trimmed@", $url)) { //base url is not the first portion of the url
            return false;
        } else {
            return true;
        }
    }


}
