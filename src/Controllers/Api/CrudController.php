<?php

namespace App\Controllers\Api;



/**
 *
 *
 */
class CrudController extends \App\Controllers\DefaultController
{

    public function listAction($collectionName)
    {
        $response = ['status' => 200, 'statusCode' => 200, 'errors' => [], 'body' => []];
        $page = (int)($this->request->query->get('page') ?: 1);
        $limit = 30;
        $offset = ($page - 1) * $limit;
        $query = $this->request->query->get('query');
        $sort = $this->request->query->has('sort') ? $this->request->query->get('sort') : [];
        $object_list = $this->app["mongodb"]->{$collectionName}->find(
        )->skip($offset)->limit($limit)->sort($sort);
        $numResults = $object_list->count();
        $objects = $this->em->{$collectionName}->find($query)->skip($offset)->limit($limit)->sort(array('score'=>-1));

        foreach ($objects as $object) {
            $object['_id'] .= '';
            $response['body'][] = $object;
        }
        return $this->app->json($response, $response['statusCode']);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function createAction($collectionName)
    {
        $response = ['status' => 200, 'statusCode' => 200, 'errors' => [], 'body' => []];


        //array containing a search query, complete with filters.
        $data = $this->request->request->all();


        $elementSkeleton = $this->app["jsonschema.validator"]->generate('/'.ucfirst($collectionName));
        $element = array_merge_recursive_ex($elementSkeleton, $data);
        $element['createdAt'] = time();
        if ($this->app["jsonschema.validator"]->validate($element, '/'.ucfirst($collectionName))) {

            $this->em->{$collectionName}->insert($element);

        } else {
            $response['statusCode'] = 400;
            $response['status'] = "malformed.request";
            foreach ($this->app["jsonschema.validator"]->getErrors() as $error) {
                $response['errors'][] = sprintf("[%s] %s\n", $error['property'], $error['message']);
            }
        }

        return $this->app->json($response, $response['statusCode']);
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function editAction($collectionName, $id)
    {
        $response = ['status' => 200, 'statusCode' => 200, 'errors' => [], 'body' => []];
        $objectId = new \MongoId($id);
        $object = $this->em->{$collectionName}->find(['_id' => $objectId])->getNext();

        //array containing a search query, complete with filters.
        $skeleton = $this->app["jsonschema.validator"]->generate('/'.ucfirst($collectionName));
        $data = $this->request->request->all();
        $data = array_merge_recursive_ex($skeleton, $data);
        $object = array_merge_recursive_ex($object, $data);

        $element['lastModifiedAt'] = time();

        if ($this->app["jsonschema.validator"]->validate($object, '/'.ucfirst($collectionName))) {
            $this->em->{$collectionName}->update(array('_id' => $objectId), $object);
            $object['_id']=(string)$object['_id'];
            $response['body'] = $object;
        } else {
            $response['statusCode'] = 400;
            $response['status'] = "malformed.request";
            foreach ($this->app["jsonschema.validator"]->getErrors() as $error) {
                $response['errors'][] = sprintf("[%s] %s\n", $error['property'], $error['message']);
            }
        }


        return $this->app->json($response, $response['statusCode']);
    }


    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function deleteAction($collectionName, $id)
    {
        $response = ['status' => 200, 'statusCode' => 200, 'errors' => [], 'body' => []];
        $objectId = new \MongoId($id);

        $object = $this->em->{$collectionName}->find(['_id' => $objectId])->getNext();
        if ($object == NULL) {
            $response['statusCode'] = 404;
            $response['errors'][] = "object.does.not.exist";
        } else {
            $this->em->{$collectionName}->remove(['_id' => $object['_id']]);
            $response['status'] = $this->translator->trans('api.crud.delete');
        }

        return $this->app->json($response, $response['statusCode']);
    }

}

