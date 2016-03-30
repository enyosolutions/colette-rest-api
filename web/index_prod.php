<?php

require_once __DIR__ . '/../vendor/autoload.php';


$app = new Silex\Application();

$app['debug'] = true;
$app['whoops'] = false;
$app['profiler'] = false;

if (isset($_GET['DEBUG']) && $_GET['DEBUG'] === 'thoushallnotpass') {
    $app['debug'] = true;
    $app['whoops'] = true;
    $app['profiler'] = true;
}

require_once __DIR__ . '/../resources/functions.php';
require __DIR__ . '/../resources/config/config.php';

require __DIR__ . '/../resources/bootstrap.php';

require __DIR__ . '/../resources/controllers.php';
require __DIR__ . '/../resources/routes.php';

\Symfony\Component\HttpFoundation\Request::setTrustedProxies(array('127.0.0.1', '::1', '10.0.0.20'));
$app['http_cache']->run();
