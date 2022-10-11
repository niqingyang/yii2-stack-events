<?php

namespace stack\events;

use yii\base\Event;

/**
 * 创建 Controller 事件
 *
 * @author niqingyang<niqy@qq.com>
 * @date 2022/10/11 23:14
 */
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