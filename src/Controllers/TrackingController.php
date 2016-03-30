<?php

namespace App\Controllers;



/**
 * DefaultController is here to help you get started.
 *
 * You would probably put most of your actions in other more domain specific
 * controller classes.
 *
 * Controllers are completely separated from Silex, any dependencies should be
 * injected through the constructor. When used with a smart controller resolver,
 * the Request object can be automatically added as an argument if you use type
 * hinting.
 *
 * @author Gunnar Lium <gunnar@aptoma.com>
 */
class TrackingController extends \Kwg\Controllers\DefaultController
{


    public function optoutAction()
    {
            setcookie('kwg_tracking_donottrack', true, (2000000000),'/');
        return $this->app->json(isset($_COOKIE['kwg_tracking_donottrack'])? $_COOKIE['kwg_tracking_donottrack'] : []);
    }

    public function segmentIoAction()
    {
        $event = json_decode($this->request->getContent(), true);

        $this->app['mongodb']->vyvopTracking->insert($event);
        if (isset($event['event']) && in_array($event['event'], ['Clicked DestinationFlights', 'Clicked DestinationDetails', 'Clicked DestinationAccommodation'])) {
            $evt2 = [];
            if (isset($event['properties']['destinationCode'])) {
                $evt2['destinationCode'] = $event['properties']['destinationCode'];
                $evt2['query'] = $event['properties']['query'];
                $evt2['userId'] = isset($event['userId']) ? $event['userId'] : $event['anonymousId'];
                $this->app['mongodb']->vytopTrackingDestinations->insert($evt2);
            }
        }
        return $this->app->json($event);
    }



    public function errorAction()
    {
        $event = [];
        $event['type'] = $this->request->request->get('type');
        $event['event'] = $this->request->request->get('event');
        $event['properties'] = $this->request->request->get('properties');
        $event['userId'] = $this->request->request->get('userId');
        $event['timestamp'] = $this->request->request->get('timestamp');

        $this->app['mongodb']->vyvopTracking->insert($event);
        $this->sendMail('JAVASCRIPT ERROR', $this->request->request->get('properties'), $toEmail='faouzane@kenweego.com');

        return $this->app->json(array());
    }


    public function sherlogAction()
    {
        $event = [];
        $event['type'] = $this->request->query->get('t');
        $event['properties'] = json_decode($this->request->query->get('d'), true);
        $event['timestamp'] = $this->request->query->get('ts');
        $event['cookie'] = json_encode($_COOKIE);

        $event['event'] = isset($event['properties']['_event']) ?
            $event['properties']['_event'] :
            (isset($event['properties']['event']) ?
                $event['properties']['event'] : '');
        if ($this->app['user'] !== NULL) {
            $event['userId'] = $this->app['user']->getId();
        }

        $event["ip"] = $_SERVER['SERVER_ADDR'];
        if (($event["ip"] === "127.0.0.1" || substr($event["ip"], 0, 4) === "10.0")) {
            $event["ip"] = isset($_SERVER['X-FORWARDED-FOR']) ? $_SERVER['X-FORWARDED-FOR'] : '';
        }

        $this->app['mongodb']->vyvopSherlogTracking->insert($event);

        return $this->app->json(array());
    }

}
