<?php

namespace App\Events;

use Symfony\Component\EventDispatcher\Event;

class KwgEvent extends Event
{
    protected $user;
    protected $properties;

    public function __construct($properties)
    {
        $this->properties = $properties;
        $this->timestamp = time();
        $this->user = $properties['user'];
    }

}
