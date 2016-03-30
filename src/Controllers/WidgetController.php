<?php

namespace App\Controllers;


class WidgetController extends \Kwg\Controllers\DefaultController
{

    public function generatorAction()
    {

        return $this->app['twig']->render(
            'Widget/widgetGenerator.html.twig',
            array('affCode' => $this->request->query->get('affCode')
            )
        );
    }



    /**
     * flights landing page
     */
    public function flightSearchAction()
    {
        $nextSunday = new \ExpressiveDate();
        $nextSunday->setWeekStartDay(1);
        $nextSunday->endOfWeek()->setHour(11);

        $today = new \ExpressiveDate();

        if ($today->getDifferenceInDays($nextSunday) < 4) {
            $nextSunday->addOneWeek();
        }

        $nextFriday = $nextSunday->copy();
        $nextFriday->minusDays(2);

        if ($this->app['locale'] == 'fr') {
            setlocale(LC_ALL, 'fr_FR.UTF-8');
            setlocale(LC_TIME, 'fr_FR.UTF-8');
        }

        $nextSundayLc = $this->app['flightstools.service']->formatDateFromServerLC($nextSunday);
        $nextFridayLc = $this->app['flightstools.service']->formatDateFromServerLC($nextFriday);

        $closestCityCode = 'PAR';
        if (isset($this->app['user.location']['cityCode'])) {
            $closestCityCode = $this->app['user.location']['cityCode'];
        }

        return $this->app['twig']->render(
            'Widget/flightSearch.html.twig',
            array('friday' => $nextFriday,
                'fridayLocale' => $nextFridayLc,
                'sunday' => $nextSunday,
                'sundayLocale' => $nextSundayLc,
                'closestCityCode' => $closestCityCode
            )
        );
    }


    /**
     * displays a list widget prices with flights included
     * @param origin the origin city
     * @param destination
     * @param destinaitions
     * @param detectOrigin
     *
     */
    public function cachedFlightAction()
    {
        $params = $this->request->query->all();
        if ($this->app['locale'] === 'fr') {
            setlocale(LC_ALL, 'fr_FR.UTF-8');
            setlocale(LC_TIME, 'fr_FR.UTF-8');
        }
        if ($this->request->query->has('detectOrigin') && $this->request->query->get('detectOrigin') == true && isset($this->app['user.location']['code'])) {
            $params['origin'] = $this->app['user.location']['cityCode'];
        }
        $cheapestFares = $this->app['api.fare.controller']->listAction($params)->getContent();
        $cheapestFares = json_decode($cheapestFares, true);
        if (!empty($cheapestFares)) {
            $cheapestFares = $cheapestFares['body'];
        }
        if (count($params) === 0 && count($cheapestFares) === 0) {
            $cheapestFares = $this->app['api.fare.controller']->listAction([])->getContent();
            $cheapestFares = json_decode($cheapestFares, true);
            $cheapestFares = $cheapestFares['body'];
        }
        foreach ($cheapestFares as $key => $fare) {
            $params = ['destination' => isset($fare['city']['data']['hotelsCombined']['placeFileName']) ? $fare['city']['data']['hotelsCombined']['placeFileName']: null,
                'cityCode' => $fare['city']['code'],
                'checkin' => $fare['query']['startDate'],
                'checkout' => isset($fare['query']['endDate']) ? $fare['query']['endDate'] : null,
            ];
            $cheapestFares[$key]['hotelsUrl'] = $this->app['accommodation.controller']->generatePlaceRoute($params);
        }

        $context['cheapestFares'] = $cheapestFares;
        $this->logger->addInfo("[WIDGET] FLIGHT CACHE - loading time : " . (microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"]) . 's');
        $page = ['class' => $this->request->query->get('affCode')];

        return $this->app['twig']->render(
            'Widget/faresList.html.twig',
            array('cheapestFares' => $cheapestFares,
                'page' => $page
            )
        );
    }


    /**
     * displays a button  widget prices with flights included
     * @param origin the origin city
     * @param destination
     * @param destinaitions
     * @param detectOrigin
     *
     */
    public function livePriceButtonAction()
    {

        $origin = $this->request->query->has('origin') ? $this->request->query->get('origin') : isset($this->app['user.location']['cityCode']) ? $this->app['user.location']['cityCode'] : 'PAR';
        $destinations = ($this->request->query->has('destinations') ? $this->request->query->get('destinations') : array());
        $filters = null;

        if (count($destinations) === 0) {
            $destinations = array('anywhere');
        }
        $startDate = $this->request->query->get('startDate');
        $endDate = $this->request->query->get('endDate');

        $parsedStartDate = (strtotime($startDate));
        $parsedEndDate = (strtotime($endDate));
        $now = (strlen($startDate) === 10 ? date('Y-m-d') : date('Y-m-01'));
        $now = strtotime($now);
        if ($parsedStartDate < $now || ($endDate !== NULL && $parsedEndDate < ($now))) {
            $wkd = $this->app['flightstools.service']->getNextWeekend();
            $startDate = $wkd['startDate'];
            $endDate = $wkd['endDate'];
        }

        $passengers = $this->request->query->get('passengers');
        $filters = $this->request->query->get('filters');

        $query = array(
            'origin' => $origin,
            //  'fromName' => $city['infos']['name'],
            // 'originLabel' => $city['infos']['name'],
            'destinations' => array_values($destinations),
            'startDate' => $startDate,
            'startDateLocale' => $this->app['flightstools.service']->formatDateFromServerLC($startDate),
            'endDate' => ($endDate !== NULL) ? $endDate : null,
            'endDateLocale' => ($endDate !== NULL) ? $this->app['flightstools.service']->formatDateFromServerLC($endDate) : null,
            'singleTrip' => $endDate == NULL || $this->request->query->has('tripOption'),
            'passengers' => $passengers,
            'filters' => $filters
        );
        $page = ['class' => $this->request->query->get('affCode')];

        return $this->app['twig']->render(
            'Widget/livePriceButton.html.twig',
            array('query' => $query,
                'page' => $page
            )
        );
    }


    /**
     * displays a button widget to go t with flights included
     * @param origin the origin city
     * @param destination
     * @param destinaitions
     * @param detectOrigin
     *
     */
    public function kwgFlightsPageButtonAction()
    {

        $origin = $this->request->query->has('origin') ? $this->request->query->get('origin') : $this->app['user.location']['cityCode'];
        $destinations = ($this->request->query->has('destinations') ? $this->request->query->get('destinations') : array('anywhere'));
        $filters = null;

        $startDate = $this->request->query->get('startDate');
        $endDate = $this->request->query->get('endDate');

        $parsedStartDate = (strtotime($startDate));
        $parsedEndDate = (strtotime($endDate));

        $now = (count($startDate) === 10 ? date('Y-m-d') : date('Y-m-01'));
        $now = strtotime($now);
        if ($parsedStartDate < $now || ($endDate !== NULL && $parsedEndDate < ($now))) {
            $wkd = $this->app['flightstools.service']->getNextWeekend();
            $startDate = $wkd['startDate'];
            $endDate = $wkd['endDate'];
        }

        $passengers = $this->request->query->has('passengers') ? $this->request->query->get('passengers') : [1, 0, 0];

        if (!((strlen($origin) === 3 || strlen($origin) === 4) && strlen($startDate) === 10 && (strlen($endDate) === 10 || $endDate === NULL) && count($passengers) > 0 && count($destinations) > 0)) {
            return 'missing.parameters';
        }

        $filters = [];
        $params = "";
        if ($this->request->query->has('filters')) {
            $filters = $this->request->query->get('filters');
            if (is_string($filters['moods']) && $filters['moods'] != "") {
                $filters['moods'] = explode(",", $filters['moods']);
            } else {
                $filters['moods'] = [];
            }
            $params = "?" . http_build_query(['filters' => $filters]);
        }


        $url = "";
        if ($endDate === NULL) {
            //si c'est une recherche aller simple
            $url = $this->app['url_generator']->generate('search_flights_singletrip',
                    array('origin' => $origin, 'destinations' => implode('-', $destinations), 'startDate' => $startDate, 'passengers' => implode('-', $passengers))
                ) . $params;
        } else {
            //ou aller/retour
            $url = $this->app['url_generator']->generate('search_flights_roundtrip',
                    array('origin' => $origin, 'destinations' => implode('-', $destinations), 'startDate' => $startDate, 'endDate' => $endDate, 'passengers' => implode('-', $passengers))
                ) . $params;

        }
        $page = ['class' => $this->request->query->get('affCode')];

        return $this->app['twig']->render(
            'Widget/kwgFlightsPageButton.html.twig',
            array('url' => $url,
                'page' => $page
            )
        );
    }


    /**
     * displays a button widget to go the hotels pages
     * @param origin the origin city
     * @param destination
     * @param destinaitions
     * @param detectOrigin
     *
     */
    public function kwgHotelsPageButtonAction()
    {

        $destination = ($this->request->query->has('destination') ? $this->request->query->get('destination') : "");
        $filters = null;

        $checkin = $this->request->query->get('checkin');
        $checkout = $this->request->query->get('checkout');

        $parsedStartDate = (strtotime($checkin));
        $parsedEndDate = (strtotime($checkout));

        if (!(strlen($checkin) === 10 && (strlen($checkout) === 10) && strlen($destination) > 0)) {
            return 'missing.parameters';
        }


        $params = [
            'cityCode' => $destination,
            'checkin' => $checkin,
            'checkout' => $checkout,
        ];
        $url = $this->app['accommodation.controller']->generatePlaceRoute($params);
        $page = ['class' => $this->request->query->get('affCode')];

        return $this->app['twig']->render(
            'Widget/kwgHotelsPageButton.html.twig',
            array('url' => $url,
                'page' => $page
            )
        );
    }
}

