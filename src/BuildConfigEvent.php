<?php

namespace stack\events;

use yii\base\Event;

/**
 * 应用配置构建事件
 *
 * @author niqingyang<niqy@qq.com>
 * @date 2022/10/11 22:30
 */
class BuildConfigEvent extends Event
{
    public array $config;

    public function __construct($config = [])
    {
        parent::__construct([
            'config' => $config
        ]);
    }
}