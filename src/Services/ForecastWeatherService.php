<?php

namespace App\Services;
use Cmfcmf\OpenWeatherMap;
use Cmfcmf\OpenWeatherMap\Forecast;
use Cmfcmf\OpenWeatherMap\Util\City;
use Cmfcmf\OpenWeatherMap\Util\Sun;
use Cmfcmf\OpenWeatherMap\Util\Temperature;
use Cmfcmf\OpenWeatherMap\Util\Time;
use Cmfcmf\OpenWeatherMap\Util\Unit;
use Cmfcmf\OpenWeatherMap\Util\Weather as WeatherObj;
use Cmfcmf\OpenWeatherMap\Util\Wind;

class ForecastWeatherService
{
    /**
     * A city object.
     *
     * @var Util\City
     */
    public $city;

    /**
     * A sun object
     *
     * @var Util\Sun
     */
    public $sun;

    /**
     * The time of the last update of this weather data.
     *
     * @var \DateTime
     */
    public $lastUpdate;

    /**
     * An array of {@link Forecast} objects.
     *
     * @var Forecast[]
     *
     * @see Forecast The Forecast class.
     */
    public $forecasts;

    public function __construct($xml, $units, $days){
        $city = new City(-1, $xml->location->name, $xml->location->location['longitude'], $xml->location->location['latitude'], $xml->location->country);
        $this->city = (array) $city;
        $sun = new Sun(new \DateTime($xml->sun['rise']), new \DateTime($xml->sun['set']));
        $this->sun = (array) $sun;
        $lastUpdate = new \DateTime($xml->meta->lastupdate);
        $this->lastUpdate = (array) $lastUpdate;

        $counter = 0;
        foreach ($xml->forecast->time as $time) {
            $forecast = array();
            $forecast['city'] = (array) $city;
            $forecast['time']['day'] = (string)$time['day'];
            $tempvalue = ($time->temperature['max'] + $time->temperature['min']) / 2;
            $forecast['temperature']['now']['value'] = (string)$tempvalue;
            $forecast['temperature']['now']['unit'] = "&deg;C";
            $forecast['humidity']['value'] = (string)$time->humidity['value']; 
            $forecast['humidity']['unit'] = (string)$time->humidity['unit'];
            $forecast['pressure']['value'] = (string)$time->pressure['value'];
            $forecast['pressure']['unit'] = (string) $time->pressure['unit'];
            $forecast['wind']['speed']['value'] = (string) $time->windSpeed['mps'];
            $forecast['wind']['speed']['description'] = (string) $time->windSpeed['name'];
            $forecast['wind']['direction']['value'] = (string) $time->windDirection['deg'];
            $forecast['wind']['direction']['description'] = (string) $time->windDirection['name'];
            $forecast['clouds']['value'] = (string) $time->clouds['all'];
            $forecast['clouds']['unit'] = (string) $time->clouds['unit'];
            $forecast['clouds']['description'] = (string) $time->clouds['value'];
            $forecast['precipitation']['value'] = (string) $time->precipitation['value'];
            $forecast['precipitation']['description'] = (string) $time->precipitation['type'];
            $forecast['weather']['id'] = (string) $time->symbol['number'];
            $forecast['weather']['description'] = (string) $time->symbol['name'];
            $forecast['weather']['icon'] = (string) $time->symbol['var'];
            
            $this->forecasts[] = $forecast;

            $counter++;
            // Make sure to only return the requested number of days.
            if ($days <= 5 && $counter == $days * 8) {
                break;
            } elseif ($days > 5 && $counter == $days) {
                break;
            }
            
        }
    }

    public function init(){
        
        
    }
}
