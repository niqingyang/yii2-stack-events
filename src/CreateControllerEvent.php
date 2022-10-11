<?php

namespace stack\events;

use yii\base\Event;

class CreateControllerEvent extends Event
{
    public $route;

    public $controller;

    public function __construct($route)
    {
        parent::__construct([
            'route' => $route
        ]);
    }
}