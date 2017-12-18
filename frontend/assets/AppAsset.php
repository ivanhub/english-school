<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{

    public function init()
{
 //   $this->js = !YII_DEBUG ? ['param.js'] : [
//'assets/js/cssrefresh.js'
//    ];
    parent::init();
}

    public $basePath = '@webroot';
    public $baseUrl = '@web';
        public $css = [
       // 'assets/css/bootstrap.css',
        'assets/css/custom.css',
        'assets/css/boxes.css',
        'assets/css/allanim.css',
        'assets/css/topmenu.css',
        'assets/css/font-awesome.css',
        /*'assets/css/moto.css',*/
        /*'assets/css/rwd-table.css',*/
        //'assets/css/animate.css',
        //'assets/css/animation.css',
        'assets/css/aos.css'
    ];
    public $js = [
  'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js'
    ];
    public $depends = [
  //      'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',         //bootstrap.css
        'yii\bootstrap\BootstrapPluginAsset' // bootstrap.js
    ];

     public $jsOptions = [
      'position' =>  View::POS_END,
    ];
    
}
