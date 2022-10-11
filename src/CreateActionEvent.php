<?php

namespace stack\events;

use yii\base\Action;
use yii\base\Controller;
use yii\base\Event;
use yii\base\InlineAction;

/**
 * 创建 Actoin 的事件
 *
 * @author niqingyang<niqy@qq.com>
 * @date 2022/10/3 02:00
 */
class CreateActionEvent extends Event
{
    /**
     * action id
     *
     * @var string
     */
    public $id;

    /**
     * the controller
     *
     * @var Controller
     */
    public Controller $controller;

    /**
     * 事件创建的 Action
     *
     * @var Action|InlineAction|null
     */
    public $action;

    public function __construct($controller, $id)
    {
        parent::__construct([
            'id' => $id,
            'controller' => $controller,
        ]);
    }
}