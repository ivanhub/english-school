<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
//use yii\bootstrap\ActiveForm;
//use yii\captcha\Captcha;
//use phpnt\yandexMap\YandexMaps;
//$agent=$_SERVER['HTTP_USER_AGENT'];
//dd($agent);
//if(agent($_SERVER['HTTP_USER_AGENT'])) echo '555';


$title = 'Дистанционное обучение';
$this->title = title($title);

$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Возможность дистанционного обучения теории по всем направлениям школы вождения: Права на авто и мото технику. Права на квадроцикл, снегоход, трактор, погрузчик, квадроцикл, гидроцикл, катер, снегоход и т.д. Лучшая автошкола в Самаре. Звоните!',
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'автошкола, мотошкола, права, дистанционное обучение, заочно, на дому, обучение дома, удаленное, обучение вождению, росавтоакадемия, центральная автошкола Самары, рос автоакадемия, школа вождения, права на автомобиль, услуги автошколы, главная автошкола Самары, самоходная техника, гидроцикл, права катер'
    ]);


$this->params['breadcrumbs'][] = $title;
?>


<!-- 
<div class="" id="full-widthid">
<div class="container-fluid mainblock text-center contacts">
  <div class="text-center contacts">  <div class="row">
  <div class="col-md-3 col-sm-3 col-xs-6  col-big-6  box1  cl-effect-12">
  <img class="hvr-grow1" src="../images/new_car.png" width="180px">
  <p class="blocktitlec anim_one  hvr-bob1 ">Автомотошкола</p>
  </div>
  <div class="col-md-3 col-sm-3 col-xs-6  col-big-6  box2 cl-effect-12">
  <img class="hvr-grow1" src="../images/two.png" width="150px" style="margin-top: 0;">
  <p class="blocktitlec anim_two  hvr-bob1">Самоходная техника</p>
  </div>
  <div class="col-md-3 col-sm-3 col-xs-6  col-big-6 box3  cl-effect-12">
  <img class="hvr-grow1" src="../images/boat_t2.png" width="160px">
  <p class="blocktitlec anim_three hvr-bob1">Судовождение</p>
  </div>
  <div class="col-md-3 col-sm-3 col-xs-6  col-big-6 box4  cl-effect-12">
  <img class="hvr-grow1" src="../images/new_car.png" width="180px" style="margin-top: 0;">
  <p class="blocktitlec anim_four hvr-bob1">Защитное вождение</p>
  </div>
  </div> 
  </div></div></div>
 -->

<!-- <?= Html::encode($this->title) ?> -->
<div class="site-distance  siteblock">
   
<h1 class="text-center"><?= Html::encode($title) ?></h1>
<br/>
<p> Существенное преимущество дистанционных занятий 
- это возможность обучения в любое время и в любом месте. </p>
<p>Можно выбрать комбинированный вариант, включающий дистанционное обучение и живое общение с преподавателем
 в лекционном зале. Таким образом система удаленных лекций и традиционные методы преподавания будут гармонично
  дополнять друг друга.</p>

<p>При  прохождении дистанционного обучение действует скидка на теоретический курс. </p>
<br/>


</div>

