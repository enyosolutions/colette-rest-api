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


class SongkickService
{

    public $baseUrl = "";
    public static $apiKey = "AIzaSyCmA2V_qV1-84089O_cQOxZPW0YStYAljI";

    private $app;

    public function __construct($app)
    {
        $this->app = $app;
        $this->baseUrl = $this->app['kwg.api.host'];
    }

    public function getEvents($cityCode, $startDate = null, $endDate = null)
    {
        $request = array();
        $request['destination'] = $cityCode;
        $request['startDate'] = $startDate;
        $request['endDate'] = $endDate;
        $request['locale'] = $this->app['locale'];

        $apiCall = new Resty();

        $apiCall->setBaseURL($this->baseUrl);
        $resp = $apiCall->get("/destination/events", $request);
        $events = $resp["body"];
        return $events;

    }

}