<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-mobileend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
//    'controllerNamespace' => 'backend\controllers',
    'controllerNamespace' => 'mobileend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-mobileend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-mobileend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the mobileend
            'name' => 'advanced-mobileend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
];
