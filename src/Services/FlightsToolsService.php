<?php
/**
 * Created by PhpStorm.
 * User: faou
 * Date: 29/09/2014
 * Time: 21:03
 */

namespace App\Services;


class FlightsToolsService
{


    protected $app;

    /**
     * @var Request
     */
    protected $request;

    protected $boxColors = array("bg-green", "bg-orange", "bg-red");

    public function __construct(\Silex\Application $app)
    {
        $this->app = $app;
        $this->request = $app['request'];
        $this->twig = $app['twig'];
    }


    public function getCityFromCode($code)
    {
        $session = $this->app["session"];
        $citiesList = array();
        if ($session->has("lists.cities.code_and_cities")) {
            $citiesList = $session->get("lists.cities.code_and_cities");
        } else {
            $cities = $this->app["mongodb"]->cities->find();

            foreach ($cities as $city) {
                $city = json_decode(json_encode($city));
                $citiesList[$city->code] =
                    $city->name;
                foreach ($city->airports as $airport) {
                    $citiesList[$airport->code] = $city->name;
                }
            }
            $session->set("lists.cities.code_and_cities", $citiesList);
        }

        return $citiesList[$code] ?: "";


    }

    public function formatDateFromServer($date)
    {
        $dateArray = explode('-', $date);
        switch ($this->app['locale']) {
            case('en'):
                return $dateArray[2] . "/" . $dateArray[1] . "/" . $dateArray[0];
                break;
            case('fr'):
            default:
                return $dateArray[2] . "/" . $dateArray[1] . "/" . $dateArray[0];
                break;
        }
    }

    public function formatDateFromServerLC($dateInput, $format="")
    {
        $locale = '';
        if ($this->app['locale'] == 'fr') {
            $locale = 'fr_FR';
        } else if ($this->app['locale'] == 'de') {
            $locale = 'de_DE';
        } else if ($this->app['locale'] == 'es') {
            $locale = 'de_DE';
        }
        else {

            $locale = 'en_GB';
        }

        $formatter = new \IntlDateFormatter($locale, \IntlDateFormatter::FULL, \IntlDateFormatter::FULL);
        if(strlen($dateInput) === 10 ){
            $formatter->setPattern('eee d MMMM yyyy');
        }
        else{
            $formatter->setPattern('MMMM yyyy');
        }
        $date = ($dateInput instanceof \DateTime) ? $dateInput : new \DateTime('@' . strtotime( $dateInput));


        return $formatter->format($date);

        $dateArray = explode('-', $dateInput);
        return strftime("a. %d %b %Y", mktime(0, 0, 0, $dateArray[1], $dateArray[2], $dateArray[0]));
    }


    public
    function formatDateToServer($date)
    {
        $dateArray = explode('/', $date);
        switch ($this->app['locale']) {
            case('en'):
                return $dateArray[2] . "-" . $dateArray[1] . (strlen($date) === 10 ? "-" . $dateArray[0] : "");
                break;
            case('fr'):
            default:
                return $dateArray[2] . "-" . $dateArray[1] .  (strlen($date) === 10 ? "-" . $dateArray[0] : "");
                break;
        }
    }


    public
    function recursiveTrim($element)
    {
        if (is_array($element)) {
            foreach ($element as $key => $value) {
                $element[$key] = FlightsToolsService::recursiveTrim($value);
            }
            return $element;
        } else {
            return trim($element);
        }

    }

    function distance($lat1, $long1, $lat2, $long2)
    {
        $R = 6371; // Earth Radius in Km
        $dLat = deg2rad($lat2 - $lat1);
        $dLong = deg2rad($long2 - $long1);
        $lat1 = deg2rad($lat1);
        $lat2 = deg2rad($lat2);
        $a = sin($dLat / 2) * sin($dLat / 2) + sin($dLong / 2) * sin($dLong / 2) * cos($lat1) * cos($lat2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        $d = $R * $c;
        // Return with the distance
        return $d;
    }

    public function getNextWeekend(){
        $nextSunday = new \ExpressiveDate();
        $nextSunday->setWeekStartDay(1);
        $nextSunday->endOfWeek()->setHour(11);

        $today = new \ExpressiveDate();

        if ($today->getDifferenceInDays($nextSunday) < 4) {
            $nextSunday->addOneWeek();
        }
        $nextFriday = $nextSunday->copy();
        $nextFriday->minusDays(2);

        return ['startDate' => $nextFriday->format('Y-m-d'),'endDate' => $nextSunday->format('Y-m-d')];
    }
}

