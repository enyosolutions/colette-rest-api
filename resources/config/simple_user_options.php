<?php
/**
 * User: faouzane for enyosolutions
 * Date: 27/09/2014
 * Time: 00:10
 */

$app['user.options'] = array(

    'templates' => array(
        'register-confirmation-sent' => 'User/register-confirmation-sent.html.twig',
        'login' => '@user/login.twig',
        'list' => 'User/listUsers.html.twig',
        'login-confirmation-needed' => 'User/login-confirmation-needed.html.twig',
        'forgot-password' => 'User/forgot-password.html.twig',
        'reset-password' => 'User/reset-password.html.twig',
    ),
    // Configure the user mailer for sending password reset and email confirmation messages.
    'mailer' => array(
        'enabled' => true, // When false, email notifications are not sent (they're silently discarded).
        'fromEmail' => array(
            'address' => 'noreply@kenweego.com',
            'name' => 'Kenweego'
        ),
    ),

    'emailConfirmation' => array(
        'required' => false, // Whether to require email confirmation before enabling new accounts.
        'template' => 'Email/confirm-email.twig',
    ),

    'passwordReset' => array(
        'template' => 'Email/reset-password.html.twig',
        'tokenTTL' => 432000, // How many seconds the reset token is valid for. Default: 1 day.
    ),





);

