<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;

$title = 'Галерея';
$this->title = title($title);
$this->params['breadcrumbs'][] = $title;


Yii::$app->view->registerCssFile('/assets/css/slick/slick.css'); 
Yii::$app->view->registerCssFile('/assets/css/slick/slick-lightbox.css'); 
Yii::$app->view->registerCssFile('/assets/css/slick/slick-theme.css'); 


?>
   
<h1 class="text-center"><?= Html::encode($title) ?></h1>

<center><h4>Фотографии наших учебных классов</h4></center><br/>
<div class="gallery-container">
<div class="gallery-slider">    
<?php 
 
if ($dir = opendir('images/gallery-slider/')) {
 
    while (false !== ($file = readdir($dir))) { 
       if($file == '.' || $file == '..' || is_dir('images/gallery-slider/' . $file) || substr($file, strrpos($file, '.') + 1) != 'jpg'){
        continue;
    }
    //echo $file;
?>     
         <div><div><a href="/images/gallery-slider/<?=$file?>"> <img src="/images/gallery-slider/tn/<?=preg_replace('/\.\w+$/', '', $file);?>_tn.jpg" ></a></div></div>
<?php 
     }
}

?>



</div>
</div>

<br/>
<br/>
<br/>


<?php 
$this->registerJs(<<<JS

 jQuery('.gallery-slider').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3,
  arrows: true,
//          prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left fa-3x' aria-hidden='true'></i></button>",
//nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right fa3-x' aria-hidden='true'></i></button>"     
draggable:true,
responsive: [
  {
      breakpoint: 1199,
      settings: {
        slidesToShow:3,
        slidesToScroll: 3,
        infinite: true,
        //dots: true
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow:2,
        slidesToScroll: 2,
        infinite: true,
        //dots: true
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
   
  
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
             });

jQuery('.gallery-slider').slickLightbox({
  itemSelector        : 'a',
  navigateByKeyboard  : true
}).fadeTo(1200,1);
JS
, yii\web\View::POS_READY); 


Yii::$app->view->registerJsFile('/assets/js/slick.min.js',  ['depends' => 'yii\web\JqueryAsset']); 
Yii::$app->view->registerJsFile('/assets/js/slick-lightbox.js',  ['depends' => 'yii\web\JqueryAsset']); 
