<?php

/** @var array $params */

return [
    'class' => 'yii\web\UrlManager',
    //'hostInfo' => $params['backendHostInfo'],
    'baseUrl' => '',
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        '' => 'site/index',
        '<_a>' => 'site/<_a>',

    ],
];
