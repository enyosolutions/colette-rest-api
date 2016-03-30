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
);

$app['redis.options'] = [
    'predis.parameters' => [

        'scheme'   => 'tcp',
        'host'     => '178.33.109.131',
        'port'     => 6379,
        'database' => 0,
        'password' => '0vvEFAwXt1crHBg10vbatrYVc0d30'
    ],
    'predis.options'    => [
        'prefix'  => 'kwg:',
        'profile' => '3.0'
    ],
];

$app['kwg.api.host'] = 'http://127.0.0.1:1975/REST';


// include the prod configuration
require __DIR__.'/config.php';

// enable the debug mode
$app['env'] = 'TEST';
$app['debug'] = true;
$app['whoops'] = true;
$app['profiler'] = false;
$app['assetic.enabled'] = false;