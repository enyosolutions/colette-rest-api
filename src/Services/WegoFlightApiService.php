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


class WegoFlightApiService {

    public static $baseUrl = "http://www.wego.com/flights/api/";
    public static $apiKey = "970d30878f56c329a7df";
    public static $tsCode = "1efc2";

    public function getDailyRatesCityToCity($from, $toArray, $startDate, $returnDate, $passengers = 1){
        $request = array();
        $request["key"]= $this::$apiKey;
        $request["ts_code"]= $this::$tsCode;

        $to = implode(",",$toArray);

        $request["from"]= $from;
        $request["to"]= $to;
        $request["currency"]= "EUR";
        $request["dt_start"] = $startDate;
        $request["dt_end"] = $returnDate;
        $apiCall = new Resty();

        $apiCall->setBaseURL($this::$baseUrl);

        $watch = new Stopwatch();
        $watch->start("api call");
        $resp = $apiCall->get("rates/daily/from_city_to_city",$request);
        $flights = $resp["body"];
        print_r($flights);
        echo $watch->stop("api call")->getDuration();

        return $resp;


    }

} 