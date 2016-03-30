<?php
namespace App\Services;


use Silex\Application;
use JsonSchema\Validator;



class UserEmailService
{
    private $_schemas = array();
    protected $app;

    public function __construct(\Silex\Application $app)
    {
        $this->app = $app;
    }

    public function sendWelcome($locale){
    }


}