<?php

namespace App\Controllers;

use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;


class HomeController extends \App\Controllers\DefaultController
{


    public function maintenanceAction()
    {
        return $this->app['twig']->render(
            'maintenance.html.twig',
            array(
                "query" => null,
                "results" => null,
                "asyncSearch" => false
            )
        );
    }


    public function dispatchAction()
    {
        $locale = '';
        if (isset($this->app['user']) && !is_null($this->app['user'])) {
            $settings = $this->app['user']->getSettings();
            $locale = $settings['lang'];
        } else {
            $locale = (isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']) : "en");
            $locale = substr($locale, 0, 2);
        }


        $crawler = 0;
        if (!isset($_SERVER["HTTP_USER_AGENT"]) || preg_match('/(bot|spider|crawl|slurp|yahoo)/i', $_SERVER["HTTP_USER_AGENT"]))
            $crawler = 1;

        if ($crawler === 0) {
            $this->logger->addInfo("[HOME]  locale " . $locale);
            if (!in_array($locale, $this->app['supported_locales'])) {
                $locale = 'en';
            }
            $this->logger->addInfo("[HOME]  URL " . $this->app['url_generator']->generate('homepage', array('_locale' => $locale)));
            $this->logger->addInfo("[HOME]  locale " . $locale);
            $this->logger->addInfo("[HOME]  locale " . print_r($_SERVER["HTTP_USER_AGENT"], true));
            return new RedirectResponse($this->app['url_generator']->generate('homepage', array('_locale' => $locale)), 301);
        } else {
            $this->app['locale'] = 'en';
            $this->logger->addInfo("[HOME]  URL " . $this->app['url_generator']->generate('homepage', array('_locale' => 'en')));
            return new RedirectResponse($this->app['url_generator']->generate('homepage', array('_locale' => 'en')), 301);
            // return $this->indexAction();
        }
    }

    public function changeLocaleAction($locale)
    {
        $url = $this->request->server->get('HTTP_REFERER');
        $host = $this->request->getRequestUri();

        $supportedLocales = implode("|", $this->app['supported_locales']);

        if ((!is_null($url) && stripos($url, $host) !== false) || preg_match("/\/(" . $supportedLocales . ")/i", $url) === 1) {
            return new RedirectResponse(preg_replace("/\.com\/(" . $supportedLocales . "\/)/i", '.com/' . $locale . '/', $url, 1), 301);

        } else {
            return new RedirectResponse($this->app['url_generator']->generate('homepage', array('_locale' => $locale)), 301);
        }
    }

    public function changeCurrencyAction($currency)
    {
        $url = $this->request->server->get('HTTP_REFERER');
        $host = $this->request->getHttpHost();


        $currency = (in_array($currency, array('EUR', 'GBP', 'USD')) ? $currency : 'EUR');

        $currencies = json_decode(file_get_contents(DOCUMENT_ROOT . '/resources/json/short_currencies.json'), true);
        $this->session->set('currency', $currencies[$currency]);

        $response = new Response();
        $response->headers->setCookie(
            new Cookie(
                'locale',
                $currencies[$currency]['code'],
                time() + 600));
        $response->sendHeaders();
        if ((!is_null($url) && stripos($url, $host) !== false)) {
            return new RedirectResponse($url . '?currency=' . $currency, 301);

        } else {
            return new RedirectResponse($this->app['url_generator']->generate('homepage', array('_locale' => $this->app['locale'])) . '?' . $currency, 301);
        }
    }


    public function getHeaderAction()
    {
        return $this->app['twig']->render(
            'common/navTop-v2.html.twig',
            array('type' => $this->request->query->get('type'),
                'absoluteurls' => $this->request->query->has('absoluteurls')

            )
        );
    }

    public function getFooterAction()
    {
        return $this->app['twig']->render(
            'common/footerV1.html.twig',
            array('type' => $this->request->query->get('type'),
                'absoluteurls' => $this->request->query->has('absoluteurls')
            )
        );
    }

    public function indexAction()
    {

        if ($this->app['locale'] == 'fr') {
            setlocale(LC_ALL, 'fr_FR.UTF-8');
            setlocale(LC_TIME, 'fr_FR.UTF-8');
        }

        return $this->app['twig']->render(
            'home.html.twig',
            array()
        );
    }


    public function contactAction()
    {
        $response = array("errors" => array());

        if ($this->request->isMethod('POST')) {
            $email = $this->request->get('email');
            $message = $this->request->get('message');
            $firstname = $this->request->get('firstname');
            $lastname = $this->request->get('lastname');
            $locale = $this->request->get('locale');
            $subject = $this->request->get('status')?:'';
            // $sec = $this->request->get('sec');
            $properties = $this->request->get('properties');
            $message .= "<br><br> $firstname  $lastname  [$locale] <br><hr/>" . $properties;

            if (strlen($email) == 0) {
                $response['errors'][] = 'Aucun email fourni';
            }
            if (strlen($message) == 0) {
                $response['errors'][] = 'Aucun message fourni';
            }

            /*
            if ($sec <> 109) {
                $response['errors'][] = 'Erreur sur le code de sécurité';
            }
            */
            if (count($response['errors']) == 0) {
                $data = $this->request->request->all();
                $data['createdAt'] =  new \MongoDate();
                $this->app['mongodb']->vyvopMessage->insert($data);

                $message = \Swift_Message::newInstance()
                    ->setSubject('[VYVOP] new action on landing page '  . $subject)
                    ->setFrom(array($email))
                    ->setTo(array('contact@kenweego.com'))
                    ->setBody($message, 'text/html');

                $mailer = \Swift_MailTransport::newInstance();
                if ($mailer->send($message)) {
                    $responseJson ['message'] = "Votre Message a bien été envoyé";
                    $responseJson ['success'] = true;
                    $this->session->getFlashbag()->add('success', $responseJson ['message']);
                }
                if ($this->request->isXmlHttpRequest()) {
                    return $this->app->json($responseJson);
                } else {
                    $referrer = $this->request->headers->get('referer');
                    return new RedirectResponse($referrer);
                }
            } else {
                $response['success'] = false;
                $response['message'] = implode($response['errors'], ', ');
                if ($this->request->isXmlHttpRequest()) {
                    return $this->app->json($response);
                } else {
                    $referrer = $this->request->headers->get('referer');
                    $this->session->getFlashbag()->add('error', $response['message']);
                    return new RedirectResponse('/');
                }
            }

        } else {
            return new RedirectResponse('/');
        }
    }


    public function removeTrailingSlashAction($url)
    {

        $patterns = array(//returned deadlinks
            '/.jpg\/$/i',
            '/.png\/$/i',
            '/.gif\/$/i',
            '/.js\/$/i',
            '/.css\/$/i',
            '/.font\/$/i',
        );

        $requestUri = $this->request->getRequestUri();
        $match = false;
        foreach ($patterns as $ptrn) {
            if (preg_match($ptrn, $url)) {
                $match = true;
                break;
            }
        }

        if ($match
            || isset($this->app['app.test']) || $this->request->query->has("kredirected")
            || strpos($url, "kredirected") !== false
        ) {
            return new Response($this->app['twig']->render(
                'common/404.html.twig',
                array()
            ), 404);
        } else {
            $pathInfo = $this->request->getPathInfo();
            $url = str_replace($pathInfo, rtrim($pathInfo, ' /'), $requestUri);
            if ($this->request->query->count() > 0) {
                $url .= "&kredirected=true";
            } else {
                $url .= "?kredirected=true";
            }
            return new RedirectResponse($url, 301, ['kredirected' => 1]);
        }
    }


    /**
     * generate an asset file (css, js etc) based on a template
     * @param $type asset type {js | css}
     * @param $file asset filename
     * @return Response
     */
    public function getAssetAction($type, $file)
    {
        return new Response($this->app['twig']->render(
                $type . '/' . $file . '.twig', []),
            200, array(
                'Cache-Control' => 's-maxage=5',
            )
        );
    }

    public function get404Action()
    {
        return new Response($this->app['twig']->render(
            'common/404.html.twig',
            array()
        ), 404);
    }


    public function getAsset404Action()
    {

        return new Response($this->app['twig']->render(
            'common/404.html.twig',
            array()
        ), 404);
    }
}

