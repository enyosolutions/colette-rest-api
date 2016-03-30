<?php

namespace App\Controllers;

/**
 *
 *
 */
class PageController extends \Kwg\Controllers\DefaultController
{

    public function listAction()
    {
        $cities = $this->app["mongodb"]->city->find();
        $cities->sort(array('name' => 1));
        return $this->app['twig']->render('Admin/City/404.list.html.twig', array(
            'cities' => $cities
        ));
    }


    public function editAction($id)
    {
        $mongoId = new \MongoId($id);
        $city = $this->app["mongodb"]->city->find(array('_id' => $mongoId))->getNext();

        if ($this->request->isMethod('POST')) {
            $data = $this->request->request->get('_city');

            //unserialize array like values
            $data['tags'] = explode(",", $data['tags']);
            foreach ($data['intl'] as $intlKey => $intl) {
                foreach ($intl['sights'] as $key => $sight) {
                    $data['intl'][$intlKey]['sights'][$key] = explode(",", $sight);
                }
            }
            unset($data['_id']);
            $city = array_merge($city, $data);
            $this->app["mongodb"]->city->update(array('_id' => $mongoId), $data);
        }

        foreach ($city['intl'] as $intlKey => $intl) {
            foreach ($intl['sights'] as $key => $sight) {
                $city['intl'][$intlKey]['sights'][$key] = implode(",", $sight);

            }
        }
        $city['tags'] = implode(",", $city['tags']);
        return $this->app['twig']->render('Admin/City/city.edit.html.twig', array(
            'city' => $city,
            'schema' => file_get_contents(__DIR__ . '/../../Models/City.json')
        ));
    }


    public function contactAction()
    {
        return $this->app['twig']->render(
            'Page/contact.html.twig',
            array()
        );
    }


    public function defaultAction()
    {
        $route = $this->request->get('_route');
        $page = $this->app["mongodb"]->page->find(array('code' => $route))->getNext();

        $this->app['locale'] = $page['lang'];

        return $this->app['twig']->render(
            'Page/default.html.twig',
            array('page' => $page,
                'seo' => $page['seo'],
            )
        );
    }


    public function privacyAction()
    {
        return $this->app['twig']->render(
            'Page/privacy.html.twig',
            array()
        );
    }


    public function destinationPageAction()
    {
        return $this->app['twig']->render(
            'Page/privacy.html.twig',
            array()
        );
    }



    public function recentSearchesAction()
    {

        $searches = $this->app["mongodb"]->searches->find();
      //  $searches->sort(array('date' => '1'));
        $searches->limit(10);

        return $this->app['twig']->render(
            'Page/recentSearches.html.twig',
            array('searches' => $searches)
        );
    }



    public function generateRoutesAction(){

        $pages = $this->app["mongodb"]->page->find(array('enabled' => true, 'slug' => array('$ne' => '')));

        $this->logger->addInfo(' number of pages ' . $pages->count());
        $routes_cms = DOCUMENT_ROOT."/resources/routes_cms.php";
        $fileContent = "<?php"  . PHP_EOL;

        foreach ($pages as $page) {
            if(substr($page["slug"],0,1) !== '/'){
                $page["slug"] .= '/';
            }
            $fileContent  .= '$app->get("/' . $page["lang"] .$page["slug"] .'","page.controller:defaultAction")->bind("'.$page["code"].'");' . PHP_EOL;
        }

        file_put_contents($routes_cms, $fileContent);
        $this->session->getFlashBag()->add('info', ' Regénération des routes du cms : OK ');
        return $this->app->redirect('/');
    }


}
