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


class GoogleFlightApiService {

    public static $baseUrl = "https://www.googleapis.com/qpxExpress/v1/trips/search";
    public static $geocodeBaseUrl = "https://maps.googleapis.com/maps/api/geocode/json";
    public static $songkickBaseUrl = "http://api.songkick.com/api/3.0";
    //public static $apiKey = "AIzaSyCmA2V_qV1-84089O_cQOxZPW0YStYAljI";
    public static $apiKey = "AIzaSyAE1SF6V1lzetSXtrpjEZdSw503prKSPhY";
    public static $songkickApiKey = "XmpIOWEoYH68fQp0";

    public function search($from, $to, $startDate, $returnDate, $passengers = 1){
        $request = $this->getRequestSqueleton();
        $request["request"]["passengers"]["adultCount"]= $passengers;

        $request["request"]["slice"][0]["origin"]= $from;
        $request["request"]["slice"][0]["destination"]= $to;
        $request["request"]["slice"][0]["date"]= $startDate;

        $request["request"]["slice"][1]["origin"]= $to;
        $request["request"]["slice"][1]["destination"]= $from;
        $request["request"]["slice"][1]["date"]= $returnDate;
        $apiCall = new Resty();
        $apiCall->setBaseURL($this::$baseUrl."?key=".$this::$apiKey);

     //   echo json_encode($request);
        $watch = new Stopwatch();
        $watch->start("api call");
        $resp = $apiCall->get("",$request);
        $flights = $resp["body"];
      //echo $watch->stop("api call")->getDuration()."<br>";
        return $resp;
    }



    public function geocode($address){
        $apiCall = new Resty();
        $apiCall->setBaseURL($this::$geocodeBaseUrl);
        $data = array('key' => $this::$apiKey,  'address' => "'" . $address . "'");
        $resp = $apiCall->get("", $data);

        return $resp;
    }


    public function songkickLocation($lat, $lon){
        $apiCall = new Resty();
        $apiCall->setBaseURL($this::$songkickBaseUrl);
        $data = array('apikey' => $this::$songkickApiKey,  'location' =>"geo:".$lat.",".$lon);
        $resp = $apiCall->get("/search/locations.json", $data);
        return $resp;
    }

    public static function getRequestSqueleton(){
        $request = array();
        $request["request"]["passengers"]=array(
            "kind" => "qpxexpress#passengerCounts",
            "adultCount" => 1
        );
        $request["request"]["slice"]=array(
            array(
            "kind" => "qpxexpress#sliceInput",
            "origin" => "",
            "destination" =>  "",
            "date"=> ""
            ),
        array(
            "kind" => "qpxexpress#sliceInput",
            "origin" => "",
            "destination" =>  "",
            "date"=> ""
            )

        );
        $request["request"]["solutions"] = 5;

        return $request;
    }
} 