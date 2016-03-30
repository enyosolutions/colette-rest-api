<?php
/**
 * Created by PhpStorm.
 * User: faou
 * Date: 29/09/2014
 * Time: 21:03
 */

namespace App\Services;

use Resty\Resty;


class KwgFlightService
{

    public $baseUrl = '';
    public static $apiKey = "AIzaSyCmA2V_qV1-84089O_cQOxZPW0YStYAljI";

    private $app;

    public function __construct($app)
    {
        $this->app = $app;
        $this->baseUrl = $this->app['kwg.api.host'];

    }

    public function iplocation($ip = null)
    {

        $endPoint = '/geoip/location';
        $request = $this->getRequestSqueleton();
        $request['apiKey'] = $this::$apiKey;
        if ($ip !== NULL) {
            $request["ip"] = $ip;
        }
        if($this->app['debug'] && $request["ip"] === "127.0.0.1"){
            $request['ip'] = '188.29.164.20';
        }
        $apiCall = new Resty();

        $apiCall->setUserAgent("KWG: " . $this->app['request']->headers->get('user-agent'));
        $apiCall->setBaseURL($this->baseUrl . $endPoint);

        $resp = $apiCall->get("", $request);
        $location = $resp["body"];

        return $location;

    }

    public function browseSearch($from, $to, $startDate, $returnDate = null, $passengers = 1, $locale,
                                 $filters)
    {

        $locale = substr($locale, 0, 2);
        if ($locale == 'en') {
            $locale = 'en-GB';
        } else {
            $locale = $locale . '-' . strtoupper($locale);
        }

        $endPoint = '/search/destination';
        $request = $this->getRequestSqueleton();
        $request["passengers"] = $passengers;

        $request["currency"] = $this->app['currency']['code'];

        $request["origin"] = $from;
        $request["destinations"] = $to;
        $request["startDate"] = $startDate;
        $request["endDate"] = $returnDate;
        $request["locale"] = $locale;
        $request["filters"] = $filters;

        $apiCall = new Resty();

        $apiCall->setUserAgent("KWG: " . $this->app['request']->headers->get('user-agent'));
        $apiCall->setBaseURL($this->baseUrl . $endPoint . "?apiKey=" . $this::$apiKey);

        $resp = $apiCall->postJson("", $request);
        $flights = $resp["body"];

        return $flights;
    }

    public function liveSearch($from, $to, $startDate, $returnDate, $passengers = 1, $locale, $silent = false)
    {
        $locale = substr($locale, 0, 2);
        if ($locale == 'en') {
            $locale = 'en-GB';
        } else {
            $locale = $locale . '-' . strtoupper($locale);
        }

        $passengers = is_array($passengers) ? $passengers : explode('-',$passengers);

        $endPoint = '/search/destination';
        $request = $this->getRequestSqueleton();

        $request["engine"] = 'skylive';

        $request["passengers"] = $passengers;
        $request["origin"] = $from;
        $request["destinations"] = $to;
        $request["startDate"] = $startDate;
        $request["endDate"] = $returnDate;
        $request["locale"] = $locale;
        $request["ip"] = $_SERVER['SERVER_ADDR'];
        $request["silent"] = $silent;


        $apiCall = new Resty();

        $apiCall->setUserAgent("KWG: " . $this->app['request']->headers->get('user-agent'));
        $apiCall->setBaseURL($this->baseUrl . $endPoint . "?apiKey=" . $this::$apiKey);

        $resp = $apiCall->postJson("", $request);
        $flights = $resp["body"];

        return $flights;
    }

    public function searchAllWeekends($from, $to, $duration, $passengers = 1)
    {
    }

    public static function getRequestSqueleton()
    {
        $request = array();
        $request['currency'] = 'EUR';
        $request['engine'] = 'skycache';

        $request["ip"] =  getenv('SERVER_ADDR');

        if( ($request["ip"] === "127.0.0.1" || substr($request["ip"], 0, 4) === "10.0") && isset($_SERVER['X-FORWARDED-FOR']) ){
            $request["ip"] = $_SERVER['X-FORWARDED-FOR'] ;
        }

        return $request;
    }
} 