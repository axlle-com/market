<?php

/** @var array $params */

return [
    'class' => 'yii\web\UrlManager',
    //'hostInfo' => $params['frontendHostInfo'],
    'baseUrl' => '',
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'cache' => false,
    'rules' => [
        '' => 'site/index',
        '<_a>' => 'site/<_a>',
    ],
];