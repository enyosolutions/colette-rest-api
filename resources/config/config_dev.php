<?php

$app['db.options'] = array(
    'driver'   => 'pdo_mysql',
    'host'     => 'localhost',
    'dbname'   => 'fly_dev',
    'user'     => 'root',
    'password' => 'toor',
);

$app['mongodb.options'] = array(
    'host'     => 'localhost',
    'dbname'   => 'fly',
    'user'     => 'flydb',
    'password' => 'password',
    'port' => 27017
);

$app['redis.options'] = array(
    'predis.parameters' => array(
        'scheme'   => 'tcp',
        'host'     => '192.168.1.40',
        'port'     => 6379,
        'database' => 0,
        'password' => '0vvEFAwXt1crHBg10vbatrYVc0d'
    ),
    'predis.options' => array(
        'prefix'  => 'kwg:',
        'profile' => '3.0'
    ),
);


$app['kwg.api.host'] = 'http://178.33.109.131:1975/REST';
$app['kwg.api.host'] = 'http://localhost:1975/REST';
$app['backend.url'] = 'http://fly.dev';
$app['frontend.url'] = 'http://fly.admin';

// enable the debug mode
$app['env'] = 'DEV';
$app['debug'] = true;
$app['whoops'] = true;
$app['profiler'] = true;



$app['backend.url'] = 'http://fly.admin';
$app['frontend.url'] = 'http://fly.dev';
// include the prod configuration
require __DIR__.'/config.php';




