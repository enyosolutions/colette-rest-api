<?php
/**
 * Created by PhpStorm.
 * User: faou
 * Date: 29/09/2014
 * Time: 21:03
 */

namespace App\Services;

use Resty\Resty;
use Symfony\Component\Stopwatch\Stopwatch;


class PanoramioService
{

    public $baseUrl = "http://www.panoramio.com/map/get_panoramas.php";
    public static $apiKey = "AIzaSyCmA2V_qV1-84089O_cQOxZPW0YStYAljI";

    private $app;

    public function __construct($app)
    {
        $this->app = $app;
    }


    /**
     * @param $cityCode of the city
     * @param string $size of the picture
     * @return mixed array of pictures for a city.
     *
     */
    public function getPictures($cityCode, $size='original')
    {
        $cityCollection = $this->app['mongodb']->city->find(array('code' => $cityCode));
        $city = $cityCollection->getNext();
        $request = $this->getRequestSqueleton();
        $request['size'] = $size;
        $delta = 10 * (360/40075);
        $lon = $city['geo']['lon'];
        $lat = $city['geo']['lat'];

        //$request["tag"] = $destination;
        $request["minx"] = $lon - $delta;
        $request["maxx"] = $lon + $delta;

        $request["miny"] = $lat - $delta;
        $request["maxy"] = $lat + $delta;
        $apiCall = new Resty();

        $apiCall->setBaseURL($this->baseUrl);
        $resp = $apiCall->get("", $request);
        $images = $resp["body"];
        return $images;

    }

    public static function getRequestSqueleton()
    {
        $request = array();
        $request['mapfilter'] = true;
        $request['set'] = 'public';
        $request['size'] = 'original';//original, medium (default value), small, thumbnail, square, mini_square
        $request['width'] = '500';
        $request['height'] = '400';
        $request['from'] = '0';
        $request['to'] = '72';

        return $request;
    }
} 