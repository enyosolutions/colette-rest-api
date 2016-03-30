<?php
/*
 * This where you register all your service providers.
 */

use Binfo\Silex\MobileDetectServiceProvider;
use Silex\Provider\HttpCacheServiceProvider;
use Silex\Provider\MonologServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\SessionServiceProvider;
use Silex\Provider\SwiftmailerServiceProvider;
use Silex\Provider\TranslationServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\UrlGeneratorServiceProvider;
use Silex\Provider\ValidatorServiceProvider;
use Silex\Provider\WebProfilerServiceProvider;
use Symfony\Component\Translation\Loader\YamlFileLoader;

$app->register(new HttpCacheServiceProvider());
$app->register(new Silex\Provider\HttpFragmentServiceProvider());
//$app->register(new Silex\Provider\SecurityServiceProvider());
//$app->register(new Silex\Provider\RememberMeServiceProvider());
$app->register(new SessionServiceProvider(), array('session.storage.options' => array('cookie_lifetime' => 1209600)));
$app->register(new ValidatorServiceProvider());
//$app->register(new FormServiceProvider());
$app->register(new MobileDetectServiceProvider());
$app->register(new UrlGeneratorServiceProvider());
$app->register(new ServiceControllerServiceProvider());
$app->register(new SwiftMailerServiceProvider());
$app->register(new \App\Services\JsonSchemaServiceProvider());

$app['mailer'] = $app->share(function ($app) {
    $transport = \Swift_SmtpTransport::newInstance($app['smtp.options']['host'], $app['smtp.options']['port'])
        ->setUsername($app['smtp.options']['username'])
        ->setPassword($app['smtp.options']['password'])->setAuthMode($app['smtp.options']['auth_mode'])->setEncryption($app['smtp.options']['encryption']);
    return \Swift_Mailer::newInstance($transport);
});

$app['sendgrid.mailer'] = $app->share(function ($app) {
    return new \SendGrid($app['config']['sendgrid']['apiKey']);
});


// ...

//
// Controllers
//


$app->register(new TranslationServiceProvider(), array(
    'locale_fallbacks' => array('fr')));
$app['translator'] = $app->share($app->extend('translator', function ($translator, $app) {
    $translator->addLoader('yaml', new YamlFileLoader());
    $translator->addResource('yaml', __DIR__ . '/locales/fr.yml', 'fr');

    return $translator;
}));

if ($app['session']->has('locale')) {
    $app['locale'] = $app['session']->get('locale');
}
//Injecting default locale
$app['session.default_locale'] = $app['locale'];
$app['translator']->setLocale($app['locale']);

// I18N aka LOCALIZATION


$app->before(function () use ($app) {
    //LOCALE
    if (!in_array($app['locale'], $app["supported_locales"]) || strlen($app['locale']) <> 2) {
        $loc = '';
        try {
            if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
                $loc = Locale::acceptFromHttp($_SERVER['HTTP_ACCEPT_LANGUAGE']);
                $loc = isset($loc) ? substr($loc, 0, 2) : 'fr';
                if (!in_array($loc, $app["supported_locales"])) {
                    $loc = 'fr';
                }
            }
        } catch (Exception $e) {
            $loc = 'fr';
        }

        $url = str_replace($app['locale'], $loc, $app['request']->getRequestUri());
        return $app->redirect($url);
    }

    if ('fr' !== $app['locale']) {
        $loc = $app['locale'] . '_' . strtoupper($app['locale']) . '.UTF-8';
        setlocale(LC_ALL, $loc);
        setlocale(LC_TIME, $loc);
    }


    //Injecting default locale
    $app['session.default_locale'] = $app['locale'];
    $app['translator']->setLocale($app['locale']);
    $app['session']->set('locale', $app['locale']);

    //Converting JSON content to json
    if (0 === strpos($app['request']->headers->get('Content-Type'), 'application/json')) {
        $data = json_decode($app['request']->getContent(), true);
        $app['request']->request->replace(is_array($data) ? $data : array());
    }

});

$app->after(function (\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\HttpFoundation\Response $response) use ($app) {

    $url = $_SERVER['REQUEST_URI'];

    if (preg_match("/\/api/i", $url) === 1) {
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Credentials', false);
        $response->headers->set('Access-Control-Allow-Methods', 'POST, GET, PUT, DELETE, OPTIONS');
        $response->headers->set("Access-Control-Allow-Headers", "Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    }
});

$app->register(new TwigServiceProvider(), array(
    'twig.options' => array(
        'cache' => isset($app['twig.options.cache']) ? $app['twig.options.cache'] : false,
        'strict_variables' => false
    ),
    'twig.form.templates' => array('form_div_layout.html.twig', 'common/form_div_layout.html.twig'),
    'twig.path' => array(__DIR__ . '/../src/Views')
));


$app['twig'] = $app->share($app->extend('twig', function ($twig, $app) {
    $twig->addExtension(new Teraone\Twig\Extension\StrftimeExtension());
    $twig->addExtension(new \App\Services\AutoAB\AB());
    $twig->addFilter(new Twig_SimpleFilter("slugify", 'slugify'));
    return $twig;
}));


$app->register(new MonologServiceProvider(), array(
    'monolog.logfile' => __DIR__ . '/logs/app.log',
    'monolog.name' => 'app',
    'monolog.level' => \Monolog\Logger::DEBUG,
    'monolog.permission' => 0777

));


$app['monolog.factory'] = $app->protect(function ($name) use ($app) {
    $log = new $app['monolog.logger.class']($name);
    $log->pushHandler($app['monolog.handler']);

    return $log;
});


$app['notifyService'] = $app->share(function () use ($app) {
    $dispatcher = new Symfony\Component\EventDispatcher\EventDispatcher();
    //$dispatcher->addListener('notify.success', $callable1);
    // $dispatcher->addListener('notify.unable_to_start', $callable2);

    return $dispatcher;
});


if ($app['debug'] && $app['whoops']) {
    $app->register(new Whoops\Provider\Silex\WhoopsServiceProvider);

    $handler = new Whoops\Handler\PrettyPageHandler;
    $handler->setEditor('sublime');
}


if ((isset($app['app.test']) && $app['app.test']) || ($app['debug'] && $app['profiler'] && isset($app['cache.path']))) {
    $app->register(new WebProfilerServiceProvider(), array(
        'profiler.cache_dir' => $app['cache.path'] . '/profiler',
        'profiler.mount_prefix' => '/_profiler' // this is the default
    ));
}


//@todo This should be in the bootstrap ...
try {
    $conn = new MongoClient("mongodb://" . $app['mongodb.options']['user'] . ":"
        . $app['mongodb.options']['password'] . "@"
        . $app['mongodb.options']['host']
        . "/" . $app['mongodb.options']['dbname']);
    $db = $conn->selectDB($app['mongodb.options']['dbname']);
    $app['mongodb'] = $db;
} catch (MongoConnectionException $e) {
    die($e->getMessage()); // TODO:: In production you might want to turn this off.

}

return $app;
