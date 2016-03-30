<?php

namespace App\Services;


use JsonSchema\Validator;
use Silex\Application;


class JsonSchemaValidator extends Validator
{
    private $_schemas = array();

    public function __construct($schemas)
    {

        $this->_schemas = $schemas;
    }

    public function validate($jsonObject, $schema)
    {
        if (!is_object($jsonObject)) {
            if (is_array($jsonObject)) {
                $jsonObject = json_decode(json_encode($jsonObject));
            } else {
                throw new \Exception('The arg is not an object');
            }
        }

        if (!is_string($schema) || $schema === "") {
            throw new \Exception('The schema arg is missing or empty');
        }
        if (!isset($this->_schemas[$schema]) || $this->_schemas[$schema] === NULL) {
            throw new \Exception('The schema arg is not found or not loaded');
        }

        parent::check($jsonObject, $this->_schemas[$schema]);
        return $this->isValid();
    }


    public function generate($schema)
    {
        if (!is_string($schema) || $schema === "") {
            throw new \Exception('The schema arg is missing or empty');
        }
        if (!isset($this->_schemas[$schema]) || $this->_schemas[$schema] === NULL) {
            throw new \Exception('The schema arg is not found or not loaded');
        }
        $schema = json_decode(json_encode($this->_schemas[$schema]), true);
        return $this->__generate($schema);
    }


    public function cast($object, $schema)
    {
        if (!is_string($schema) || $schema === "") {
            throw new \Exception('The schema arg is missing or empty');
        }
        if (!isset($this->_schemas[$schema]) || $this->_schemas[$schema] === NULL) {
            throw new \Exception('The schema arg is not found or not loaded');
        }
        $schema = json_decode(json_encode($this->_schemas[$schema]), true);
        return $this->__cast($object, $schema);
    }


    /**
     * Private recursive function to generate blocks
     * @param $node subschema to use to generate the content
     * @return array|bool
     */
    private function __generate($node)
    {
        //!isset($node['id']) || !isset($node['type']) ||
        if (is_string($node)) {
            return "";
        }

        switch ($node['type']) {
            case 'string':
            case 'default':
            case 'date':
                return "";
                break;
            case 'number':
            case 'integer':
                return 0;
                break;
            case 'boolean':
                return false;
                break;
            case 'object':
                try {
                    $out = [];
                    foreach ($node['properties'] as $key => $val) {
                        $out[$key] = $this->__generate($val);
                    }
                    return $out;
                } catch (\Exception $e) {
                    s($e->getMessage());
                    s($e->getTraceAsString());
                    s($node['properties']);
                    sd($node);
                }
                break;
            case 'array':
                if (isset($node['items']['type']) && $node['items']['type'] == 'string') {
                    return [];
                    //s($output);
                } else {
                    return [$this->__generate($node['items'])];
                }

                break;
        }
        return false;
    }


    /**
     * Private recursive function to generate blocks
     * @param $node subschema to use to generate the content
     * @param $object the object to use to generate the content
     * @return array|bool
     */
    private function __cast($object, $node)
    {
        //!isset($node['id']) || !isset($node['type']) ||
        if (is_string($node)) {
            return "";
        }
        if (!isset($node['type'])) {
            $node['type'] = 'string';
        }

        switch ($node['type']) {
            case 'string':
                return (string)$object;
                break;
            case 'date':
            case 'default':
                return $object;
                break;
            case 'number':
                return floatval($object);
                break;
            case 'integer':
                return intval($object);
                break;
            case 'boolean':
                return (bool) $object;
                break;
            case 'object':
                try {
                    $out = [];
                    foreach ($node['properties'] as $key => $val) {
                        if (isset($object[$key])) {
                            $out[$key] = $this->__cast($object[$key], $node['properties'][$key]);
                        }

                    }
                    return array_merge($object, $out);
                } catch (\Exception $e) {
                    s($e->getMessage());
                    s($e->getTraceAsString());
                    s($node['properties']);
                    s($object);
                    sd($node);
                }
                break;
            case 'array':
                try {
                    $out = [];
                    foreach ($object as $key => $val) {
                        $out[$key] = $this->__cast($object[$key], $node['items']);
                    }
                    return $out;
                } catch (\Exception $e) {
                    s($e->getMessage());
                    s($e->getTraceAsString());
                    s($node['properties']);
                    sd($node);
                }
                break;
        }
        return false;
    }
}