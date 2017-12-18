<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);


return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['mobileDetect'],
    'controllerNamespace' => '\frontend\controllers',
    
  
    'components' => [
      'view' => [
            'class' => '\processfast\yii\minify\View',
            //'enableMinify' => !YII_DEBUG,
            'enableMinify' => true,
            'concatCss' => true, // concatenate css
            'minifyCss' => true, // minificate css
            'concatJs' => true, // concatenate js
            'minifyJs' => true, // minificate js
            'minifyOutput' => true, // minificate result html page
            'webPath' => '@web', // path alias to web base
            'basePath' => '@webroot', // path alias to web base
            'minifyPath' => '@webroot/assets/minified', // path alias to save minify result
            'jsPosition' => [ \yii\web\View::POS_END ], // positions of js files to be minified
            'forceCharset' => 'UTF-8', // charset forcibly assign, otherwise will use all of the files found charset
            'expandImports' => true, // whether to change @import on content
            'compressOptions' => ['extra' => true, 'no-comments' => true], // options for compress
            'excludeFiles' => [
                'jquery.js', // exclude this file from minification
                'app-[^.].js', // you may use regexp
                'allanidm.css', // you may use regexp
    ],
    'excludeBundles' => [
            //    \dev\helloworld\AssetBundle::class, // exclude this bundle from minification
    ],
],




    'MyCheck'         => [
            'class' => '\frontend\components\HomeCheck',
        ],
        'MyNav'         => [
            'class' => '\frontend\components\CustomNav',
        ],
         'urlManagerBackend' => [
                'class' => 'yii\web\urlManager',
                'baseUrl' => '/backend/web/img/gallery/',//i.e. $_SERVER['DOCUMENT_ROOT'] .'/yiiapp/web/'
                'enablePrettyUrl' => true,
                'showScriptName' => false,
        ],

         'mobileDetect' => [
         'class' => '\skeeks\yii2\mobiledetect\MobileDetect'
    ],
        //'Growl' => [ 'class' => '\kartik-v\yii2\widget-growl\Growl'],
        'assetManager' => [     
               'class' => 'yii\web\AssetManager',

        'bundles' => [
            'yii\web\JqueryAsset' => [
                'js'=>[
                                YII_DEBUG ? 'jquery.js' : 'jquery.min.js'

                ]
            ],
            'yii\bootstrap\BootstrapPluginAsset' => [
                'js'=>[
                                YII_ENV_DEV ? 'js/bootstrap.js' : 'js/bootstrap.min.js',
                ]
            ],
            'yii\bootstrap\BootstrapAsset' => [
               'css' => [

                                YII_ENV_DEV ? 'css/bootstrap.css' :         'css/bootstrap.min.css',
                ]
            ], 
        ],
        ],
    
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
            'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error'],
                    'logFile' => '@app/runtime/logs/web-error.log'

                ],
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['warning'],
                    'logFile' => '@app/runtime/logs/web-warning.log'
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
