<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers\Admin;

use App\Controllers\DefaultController;
use JasonGrimes\Paginator;

/**
 * Description of CrudController
 *
 *
 * @author polo
 */
class CrudController extends DefaultController
{

    public function listAction($collectionName)
    {
        $order_by = $this->request->get('order_by') ?: 'name';
        $order_dir = $this->request->get('order_dir') == 'DESC' ? 'DESC' : 'ASC';
        $limit = (int)($this->request->get('limit') ?: 70);
        $page = (int)($this->request->get('page') ?: 1);
        $offset = ($page - 1) * $limit;
        $object_list = null;
        $sort = [];
        $q = null; //requête faire la recherche
        $query = [];
        if($this->request->query->has('sort')){
            $sort = $this->request->query->get('sort');
        }

        if ($this->request->query->has('q')) {
            $q = $this->request->query->get('q');

            if(is_string($q)){
            $query = ['$or' => [
                ['name' => new \MongoRegex("/" . $q . "/i")],
                ['intl.en.name' => new \MongoRegex("/^" . $q . "/i")],
                ['intl.fr.name' => new \MongoRegex("/^" . $q . "/i")]
            ]
            ];
            }
            else{
                $query = $this->request->query->get('q');
            }
        }
        $object_list = $this->app["mongodb"]->{$collectionName}->find(
        )->skip($offset)->limit($limit)->sort($sort);
        $numResults = $object_list->count();

        $paginator = new Paginator($numResults, $limit, $page, $this->app['url_generator']->generate('admin_crud_list', ['collectionName' => $collectionName]) . '?page=(:num)&limit=' . $limit . '&order_by=' . $order_by . '&order_dir=' . $order_dir
        );

        $collectionSelect = $this->app['mongodb']->listCollections();

        foreach($collectionSelect as $key => $name){
            $collectionSelect[$key] = str_replace($this->app['mongodb.options']['dbname'].".", "", $name);
        }

        $this->twig->disableStrictVariables();
        return $this->twig->render('Crud/list.html.twig', array(
            'collection' => $object_list,
            'collectionName' => $collectionName,
            'q' => $q,
            'collectionSelect' => $collectionSelect,
            'paginator' => $paginator,
        ));
    }

    public function editAction($id, $collectionName)
    {
        $singleItem = null;
        if ($id !== 'new') {
            $singleItem = $this->app["mongodb"]->{$collectionName}->find(array('_id' => new \MongoId($id)))->getNext();
            if (is_null($singleItem)) {
                $this->session->getFlashBag()->add('error', 'Unkown '.$collectionName.' Id ' . $id);
                return $this->app->redirect("/");
            }
        }
        if ($this->request->isMethod('POST')) {
            $data = $this->request->request->get('_' . $collectionName);

            /**
             * unserialize comma separated values
             */

            if (isset($data['tags'])) {
                $data['tags'] = is_string($data['tags']) ? explode(",", $data['tags']) : $data['tags'];
            }
            if (isset($data['countries'])) {
                $data['countries'] = is_array($data['countries']) ? $data['countries'] : explode(",", $data['countries']);
            }
            if (isset($data['enabled'])) {
                $data['enabled'] = isset($data['enabled']) ? true : false;
            }

            if ($singleItem === NULL) {
                $singleItem = $data;
            } else {
                $singleItem = array_merge_recursive_ex($singleItem, $data);
            }

            $singleItem = $this->app["jsonschema.validator"]->cast($singleItem, '/' . ucfirst($collectionName));

            if ($this->app["jsonschema.validator"]->validate($singleItem, '/' . ucfirst($collectionName))) {

                if (isset($singleItem['_id'])) {
                    $this->app["mongodb"]->{$collectionName}->update(array('_id' => $singleItem['_id']), $singleItem);
                    $this->session->getFlashBag()->add('success', 'The collection has been created');
                } else {
                    $this->app["mongodb"]->{$collectionName}->insert($singleItem);
                    $this->session->getFlashBag()->add('success', 'The collection has been modified');
                }
                $this->session->getFlashBag()->add('success', 'The collection has been modified');
                return $this->app->redirect($this->app['url_generator']->generate('admin_crud_view', ['collectionName' => $collectionName, 'id' => $singleItem['_id']]));
            } else {
                foreach ($this->app["jsonschema.validator"]->getErrors() as $error) {
                    $this->session->getFlashBag()->add('error', sprintf("[%s] %s\n", $error['property'], $error['message']));
                }
            }
        }
        $schema = $this->app["jsonschema.store"]['/' . ucfirst($collectionName)];
        $schema = json_decode(json_encode($schema), true);
        if ($singleItem !== NULL) {
            $singleItem['countries'] = (isset($singleItem['countries']) ? implode(",", $singleItem['countries']) : []);
            $singleItem['tags'] = (isset($singleItem['tags']) ? implode(",", $singleItem['tags']) : []);
        }
        return $this->app['twig']->render('Crud/edit.html.twig', array(
            'collectionName' => $collectionName,
            'singleItem' => $singleItem,
            'schema' => $schema
        ));
    }

    public function viewAction($id, $collectionName)
    {
        $singleItem = $this->app["mongodb"]->{$collectionName}->find(array('_id' => new \MongoId($id)))->getNext();
        if (is_null($singleItem)) {
            $this->session->getFlashBag()->add('error', 'unkown Id ' . $id);
            return $this->app->redirect("/");
        }
        $schema = null;
        if (isset($this->app["jsonschema.store"]['/' . ucfirst($collectionName)])) {
            $schema = $this->app["jsonschema.store"]['/' . ucfirst($collectionName)];
            $schema = json_decode(json_encode($schema), true);
        }
        if (isset($object['tags'])) {
            if (is_array($object['tags'])) {
                $object['tags'] =  implode(",", $object['tags']);
            }
        }

        return $this->app['twig']->render('Crud/view.html.twig', array(
            'singleItem' => $singleItem,
            'collectionName' => $collectionName,
            'schema' => $schema
        ));
    }

    public function addAction($collectionName)
    {
        if ($this->request->isMethod('POST')) {
            $singleItem = $this->request->get('_' . $collectionName);
            $singleItem = $this->app["jsonschema.validator"]->cast($singleItem, '/' . ucfirst($collectionName));
            $this->app["mongodb"]->{$collectionName}->insert($singleItem);
            return $this->app->redirect($this->app['url_generator']->generate('admin_crud_list', ['collectionName' => $collectionName]));
        } else {
            $schema = $this->app["jsonschema.store"]['/' . ucfirst($collectionName)];
            $schema = json_decode(json_encode($schema), true);
            return $this->app['twig']->render('Crud/edit.html.twig', array(
                'collectionName' => $collectionName,
                'schema' => $schema
            ));
        }
    }

    public function deleteAction($id, $collectionName)
    {
        $this->app["mongodb"]->{$collectionName}->remove(array('_id' => new \MongoId($id)));
        $this->session->getFlashbag()->add('success', "crud.messages.item.deleted.label");
        return $this->app->redirect($this->app['url_generator']->generate('admin_crud_list', ['collectionName' => $collectionName]));
    }

    public function dispatchAction()
    {
        if ($this->request->query->has('collectionName')) {
            $collectionName = $this->request->query->get('collectionName');
            return $this->app->redirect($this->app['url_generator']->generate('admin_crud_list', array('collectionName' => $collectionName)));
        } else {
            return $this->app->redirect($this->app['url_generator']->generate('admin_crud_list', array('collectionName' => 'user')));
        }
    }

}
