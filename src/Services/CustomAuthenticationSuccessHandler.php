<?php

namespace App\Services;


use Silex\Application;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler;

class CustomAuthenticationSuccessHandler extends DefaultAuthenticationSuccessHandler
{
    protected $app = null;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {

        $redirect_url = '/' . $this->app['session']->get("locale") . '/user/dashboard';
        if (isset($_COOKIE['kwg_redirect_url'])) {
            $redirect_url = urldecode($_COOKIE["kwg_redirect_url"]);
            $response = new Response();
            $response->headers->clearCookie('kwg_redirect_url');
            $response->sendHeaders();
        }
        $response = new RedirectResponse($redirect_url);
        return $response;
    }
}
