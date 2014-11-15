<?php

$config = [
    'components' => [
        'assetManager'=>[
            'linkAssets' => true,
        ],
    ],
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';
    $config['modules']['gii'] = [
        'class'      => 'yii\gii\Module',
    ];
}

return $config;
