<?php

use Silex\Application;


class HomepageTest extends  Silex\WebTestCase
{
    protected $app;
    public function createApplication()
    {
        putenv('ENVIRONMENT=TEST');
        $app=null;
        require __DIR__ . '/../../web/index_test.php';
       // $this->app = $app;
        return $app;
    }

    public function testHome()
    {
        $client = $this->createClient();
        $client->followRedirects(true);
        $crawler = $client->request('GET', $this->app['frontend.url']. '/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertTrue($client->getResponse()->isOk());
        $this->assertCount(1, $crawler->filter('.home-title.row'));
    }

    public function testDestinationRoundtripSearch()
    {
        $client = $this->createClient();
        $client->followRedirects(true);

        $nextSunday = new \ExpressiveDate();
        $nextSunday->setWeekStartDay(1);
        $nextSunday->endOfWeek();
        $today = new \ExpressiveDate();

        if ($today->getDifferenceInDays($nextSunday) < 4) {
            $nextSunday->addOneWeek();
        }

        $nextFriday = $nextSunday->copy();
        $nextFriday->minusDays(2);
        $params['_locale'] = 'fr';
        $params['from'] = 'PAR';
        $params['to'] = 'anywhere';
        $params['startDate'] = $nextFriday->format('Y-m-d');
        $params['endDate'] = $nextSunday->format('Y-m-d');
        $params['passengers'] = '1-1-1';


        $url  = $this->app['url_generator']->generate('search_destination_roundtrip', $params);
        $crawler = $client->request('GET', $this->app['frontend.url'] . $url);
        $this->assertTrue($client->getResponse()->isOk());
        $this->assertGreaterThan(0,$crawler->filter('.search-result')->count());
    }
}
