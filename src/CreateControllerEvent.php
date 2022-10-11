<?php

namespace stack\events;

use yii\base\Event;

class CreateControllerEvent extends Event
{
    /**
     * 事件名称
     */
    public const EVENT_NAME = 'createController';

    public $route;

    public $controller;

    public function __construct($route)
    {
        parent::__construct([
            'route' => $route
        ]);
    }
}