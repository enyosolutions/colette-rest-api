<?php

$app['db.options'] = array(
    'driver'   => 'pdo_mysql',
    'host'     => 'localhost',
    'dbname'   => 'fly_dev',
    'user'     => 'root',
    'password' => 'toor',
);

$app['mongodb.options'] = array(
    'host'     => '10.0.0.60',
    'dbname'   => 'flyProd',
    'user'     => 'woot',
    'password' => '123Reir992',
);

$app['redis.options'] = [
    'predis.parameters' => [

        'scheme'   => 'tcp',
        'host'     => '10.0.0.50',
        'port'     => 6379,
        'database' => 10,
        'password' => '0vvEFAwXt1crHBg10vbatrYVc0d30'
    ],
    'predis.options'    => [
        'prefix'  => 'kwg:',
        'profile' => '3.0'
    ],
];
$app['kwg.api.host'] = 'http://10.0.0.50:1985/REST';

// include the prod configuration
require __DIR__.'/config.php';

$app['env'] = 'PROD';
// enable the debug mode
$app['debug'] = false;
$app['whoops'] = false;
$app['profiler'] = false;
$app['assetic.enabled'] = false;