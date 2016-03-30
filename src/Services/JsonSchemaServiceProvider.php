<?php

namespace App\Services;


use Silex\Application;
use Silex\ServiceProviderInterface;


class JsonSchemaServiceProvider implements ServiceProviderInterface
{
    public function boot(Application $app)
    {

        $app["jsonschema.store"] = $this->loadSchemas($app, $app["jsonschema.options"]['schemas_directory']);

        $app["jsonschema.validator"] = $app->share(function () use ($app) {
            return new JsonSchemaValidator($app["jsonschema.store"]);
        });
    }

    public function register(Application $app)
    {
        if (
            !isset($app["jsonschema.options"]['schemas_directory']) ||
            !is_dir($app["jsonschema.options"]['schemas_directory'])
        ) {
            echo $app["jsonschema.options"]['schemas_directory'];
            die("MISSING OR WRONG JSON SCHEMA DIRECTORY");
        }
        if (!isset($app["jsonschema.options"]['schemas_directory'])) {
            $app["jsonschema.options"]['base_namespace'] = "/";
        }
    }


    private function loadSchemas(Application $app, $dir)
    {
        $schemasFiles = array_diff(scandir($dir), array('..', '.'));
        $store = [];
        foreach ($schemasFiles as $file) {
            $file = $dir . '/' . $file;
            $infos = pathinfo($file);
            if ($infos['extension'] === 'json') {
                $store[$app["jsonschema.options"]['base_namespace'] . $infos['filename']] = json_decode(file_get_contents($file)) ;
            }
        }

        return $store;
    }
}