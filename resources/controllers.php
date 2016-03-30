<?php
/*
 * This is where you register your controllers as services. If you need to inject services, you can do so here
 */

use App\Controllers;
use App\Services;
use DrewM\MailChimp\MailChimp;
use Symfony\Component\Validator\Constraints as Assert;



loadClasses('controller',  DOCUMENT_ROOT . '/src/Controllers', $app);
loadClasses('service',  DOCUMENT_ROOT . '/src/Services', $app);
//loadServiceClasses( DOCUMENT_ROOT . '/lib/kwg/Services', $app);


$app['mailchimp.service'] = $app->share(function () use ($app) {
    return new MailChimp($app['mailchimp.apikey']);
});


$app['sendgrid.service'] = $app->share(function () use ($app) {
    return new SendGrid($app['config']['sendgrid']['apiKey']);
});

