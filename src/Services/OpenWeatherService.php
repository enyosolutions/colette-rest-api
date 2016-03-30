<?php

namespace App\Services;
use Cmfcmf\OpenWeatherMap;
use Cmfcmf\OpenWeatherMap\CurrentWeather;
use Cmfcmf\OpenWeatherMap\Util\City;
use Cmfcmf\OpenWeatherMap\Util\Sun;
use Cmfcmf\OpenWeatherMap\Util\Temperature;
use Cmfcmf\OpenWeatherMap\Util\Time;
use Cmfcmf\OpenWeatherMap\Util\Unit;
use Cmfcmf\OpenWeatherMap\Util\Weather as WeatherObj;
use Cmfcmf\OpenWeatherMap\Util\Wind;

class OpenWeatherService
{
    public $time;

    public $openWeather;

    public function __construct($app){

    }

    public function init($xml, $units){

        $this->openWeather = new CurrentWeather($xml,  $units);

        $this->openWeather->city = new City($xml->city['id'], $xml->city['name'], $xml->city->coord['lon'], $xml->city->coord['lat'], $xml->city->country);
        if ($units == 'metric') {
            $temperatureUnit = "&deg;C";
        } else {
            $temperatureUnit = 'F';
        }
        $xml->temperature['value'] = ($xml->temperature['max'] + $xml->temperature['min']) / 2;
        $this->openWeather->temperature = new Temperature(new Unit($xml->temperature['value'], $temperatureUnit), new Unit($xml->temperature['min'], $temperatureUnit), new Unit($xml->temperature['max'], $temperatureUnit));
        $this->openWeather->humidity = new Unit($xml->humidity['value'], $xml->humidity['unit']);
        $this->openWeather->pressure = new Unit($xml->pressure['value'], $xml->pressure['unit']);
       
        if ($units == 'metric') {
            $windSpeedUnit = 'm/s';
        } else {
            $windSpeedUnit = 'mps';
        }
        $this->openWeather->wind = new Wind(new Unit($xml->windSpeed['mps'], $windSpeedUnit, $xml->windSpeed['name']), new Unit($xml->windDirection['value'], $xml->windDirection['code'], $xml->windDirection['name']));
        $this->openWeather->clouds = new Unit($xml->clouds['all'], $xml->clouds['unit'], $xml->clouds['value']);
        $this->openWeather->precipitation = new Unit($xml->precipitation['value'], null, $xml->precipitation['type']);
        $this->openWeather->sun = new Sun(new \DateTime($xml->city->sun['rise']), new \DateTime($xml->city->sun['set']));
        $this->openWeather->weather = new WeatherObj($xml->symbol['number'], $xml->symbol['name'], $xml->symbol['var']);
        $this->openWeather->lastUpdate = new \DateTime($xml->lastupdate['value']);
        if (isset($xml['from'])) {
            $this->openWeather->time = new Time($xml['from'], $xml['to']);
        } else {
            $this->openWeather->time = new Time($xml['day']);
        }
    }
}
