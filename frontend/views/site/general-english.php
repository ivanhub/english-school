<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use frontend\components\Freetest;
//use yii\captcha\Captcha;
//use phpnt\yandexMap\YandexMaps;

$title = 'Общий английский';
$this->title = title($title);


/*$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Обучение вождению на автомобиле и мотоцикле (категории: А, В). Собственный автодром, опытные квалифицированные инструктора, экстремальное и защитное вождение. Доступные цены. Беспроцентная рассрочка! Одна из лучших автомотошкол в Самаре.',
]);

$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'центральная автошкола Самары, школа вождения, автошкола, мотошкола, услуги автошколы, Обучение вождению, получить права, росавтоакадемия, рос автоакадемия, росавто академия, мотоцикл, права на автомобиль, права, мото, лучшая автошкола Самары, главная автошкола Самары, категория А,  категория В, обучение на права, сдать на права, курсы водителей, автомотошкола',
]);*/



$this->params['breadcrumbs'][] = $title;

//Modal for free english test quiz.
echo Freetest::widget(['link'=> '']);

?>




<!-- <ul class="left2">
        <li><a href="/postupayushchim">Поступающим</a></li>
    <li><a href="/students">Учащимся</a></li>
    <li><a href="/raspisanie">Расписание</a></li>
    <li><a href="/dop-uslugi">Доп.&nbsp;услуги</a></li>
    
  
</ul> -->
<div class="siteblock">

<h1 class="text-center"><?= Html::encode($title) ?></h1>

<div class="hidden-xs"></div>


<!-- 
<h5 class=" text-center hideme h5style" data-ros="fadeInUp"   data-options="infinite:false;animationClass:animated;duration: 500;callback:;"><b>Общий английский</b></h5> -->


<p style="text-indent:50px" data-aos="zoom-out" data-aos-duration="600"><span style="font-weight:bold">Центр иностранных языков «Академия»</span> приглашает на занятия по многоуровневым программам английского языка для взрослых. 
    Учебная программа разработана с учетом уровня владения английским языком и подбирается после прохождения 
<?=         Html::a( 'БЕСПЛАТНОГО тестирования', $url = null, $options = [
    // other options
    'class' => 'link',
    'data' => [
        'toggle' => 'modal',
        'target' => '#testlink',
   ],] )
 ?>
, которое состоит из письменной и устной части. 
   <!--  Первую (письменную) часть тестирования можно пройти прямо сейчас – <a href="#">он-лайн тестирование (нажмите на ссылку)</a>. -->
</p>



    <div class="hidden-xs"><br/></div>
<div class="row rowm flex-d"  data-aos="fade-up-right"  data-aos-offset="70" data-aos-duration="600" data-aos-delay="400">

<div class="col-md-5 col-lg-4 col-xs-12 box1  cl-effect-12">
<div class="fill">

<a> <div class="block-mestoONLY block-mestoONLY-1 block-mestoONLY-english"><div class="block-mestoONLY-podlozhka"><p class="text-center giri">ОБЩИЙ КУРС</p></div></div>
<div class="aa">
 <!--  <img class="img-responsive" src="../images/en/first6.png" alt="Автошкола г. Самара" title="Автошкола" width="150px"> -->
</div>
</a>
</div>
</div>


<div class="col-md-7 col-lg-8 col-xs-12">

<p>В нашей школе Вы сможете успешно овладеть английским языком с любого уровня владения. Курс рассчитан на углубление знаний по английскому языку, совершенствование навыков
общения и свободного восприятия на слух английского языка.
</p>

</div>
</div>



    <div class="hidden-xs"><br/></div>
<div class="row rowm flex-d"  data-aos="fade-up-left"  data-aos-offset="70">

<div class="col-md-5 col-lg-4 col-xs-12 box1  cl-effect-12">
<div class="fill">

<a> <div class="block-mestoONLY block-mestoONLY-2 block-mestoONLY-english"><div class="block-mestoONLY-podlozhka"><p class="text-center giri">ДЕЛОВОЙ АНГЛИЙСКИЙ</p></div></div>
<div class="aa">
<!--   <img class="img-responsive" src="../images/en/first6.png" alt="Автошкола г. Самара" title="Автошкола" width="150px">
 --></div>
</a>
</div>
</div>

<div class="col-md-7 col-lg-8 col-xs-12">

<p>Курс делового английского языка подойдет руководителям и менеджерам среднего звена. Программа включает в себя специализированную лексику, деловые дискуссии и обсуждения, а также развития навыков деловой переписки.
</p>

</div>
</div>


    <div class="hidden-xs"><br/></div>
<div class="row rowm flex-d"  data-aos="fade-up-right" >

<div class="col-md-5 col-lg-4 col-xs-12 box1  cl-effect-12">
<div class="fill">

<a> <div class="block-mestoONLY block-mestoONLY-3 block-mestoONLY-english"><div class="block-mestoONLY-podlozhka"><p class="text-center giri">ИНТЕНСИВНЫЙ КУРС</p></div></div>
<div class="aa">
<!--   <img class="img-responsive" src="../images/en/first6.png" alt="Автошкола г. Самара" title="Автошкола" width="150px">
 --></div>
</a>
</div>
</div>

<div class="col-md-7 col-lg-8 col-xs-12">

<p>Курс предназначен для занятых людей, которым нужно в кратчайшие сроки развить языковые навыки перед поездкой за рубеж, сдачей экзамена, стажировкой за границей. Интенсивность программы зависит от сроков и от уровня владения иностранным языком.
</p>

</div>
</div>



    <div class="hidden-xs"><br/></div>
<div class="row rowm flex-d"  data-aos="fade-up-left">

<div class="col-md-5 col-lg-4 col-xs-12 box1  cl-effect-12">
<div class="fill">

<a> <div class="block-mestoONLY block-mestoONLY-4 block-mestoONLY-english"><div class="block-mestoONLY-podlozhka"><p class="text-center giri" style="margin-top:8px">ТУРИСТИЧЕСКИЙ АНГЛИЙСКИЙ</p></div></div>
<div class="aa">
<!--   <img class="img-responsive" src="../images/en/first6.png" alt="Автошкола г. Самара" title="Автошкола" width="150px">
 --></div>
</a>
</div>
</div>

<div class="col-md-7 col-lg-8 col-xs-12">

<p>Данный курс необходим любителям путешествовать, выезжать за границу. Туристический английский позволит легко ориентироваться в аэропорту, спросить дорогу, показать достопримечательности. Туристический английский необходим тем, кто не представляет свою жизнь без путешествий.
</p>
</div>
</div>
    <div><div class="hidden-xs"><br/><br/></div>
<div class="linetire"></div>
<h5 style="" class="text-center animated h5style"  data-aos="flInX" data-aos-duration="2500" >Как проходит обучение</h5>  
 <ul class=" preimul2 lr10 gal text-justify">
 <li style="font-size:115%;animation-duration: 1s; animation-delay: 0;"   data-aos="fade-in" data-aos-duration="1000" data-aos-offset="100">Тестирование с методистом для определения уровня владения языком <span style="color:green;font-weight:bold">БЕСПЛАТНО</span>.</li>
 <li style="font-size:115%;animation-duration: 1s; animation-delay: .4s;" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="100"type="">Шесть месяцев увлекательных занятий с высококвалифицированными преподавателями.</li>
 <li style="font-size:115%;animation-duration: 1s; animation-delay: .7s;" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="250" data-aos-offset="100">Результат – Вы говорите по-английски легко 
 и свободно.</li>
 <li style="font-size:115%;text-indent:50px" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100" data-aos-easing="ease-in-out-back"><br/><p>Обучение английскому для взрослых направлено на развитие всех аспектов языка: говорение, чтение, письмо, восприятие речи на слух. Вы сможете свободно общаться, путешествовать, сдать международные экзамены, больше зарабатывать. На наших занятиях говорите Вы, а не преподаватель.</p>
 </li>
 </ul>



<h5 class="poryadok green text-center h5style animated" style="padding-bottom:15px;padding-top:0" data-aos="anim-documents" data-aos-duration="900" data-aos-delay="100" data-aos-easing="ease-in-out-back">
Порядок зачисления в группы</h5>
<div class="block-poryadok lr10 preimul2" style="font-size:110%" data-aos="flip-down" data-aos-duration="600" >
<p>1.  &nbsp;&nbsp;Запись на <span style="color:green;font-weight:600">БЕСПЛАТНОЕ</span> тестирование по телефону <b>255-69-99</b>.</p>
<p>2.  &nbsp;&nbsp;Заполнение заявления на обучение с указанием удобного времени и дней занятий.</p>
<p>3.  &nbsp;&nbsp;Оплата курса (помесячно по системе предоплаты или полностью со скидкой в 10%).</p>

</div>

    <div class="hidden-xs"><br/></div> </div>
<div class="linetire"></div>
<br/>
<div data-aos="zoom-out-up">
<h5 class=" text-center" style="font-size:28px;padding-bottom:15px;margin-top:-10px;font-weight:bold" data-ros="anim-documents"   data-options="delay:100;infinite:false;animationClass:animated;duration: 900;callback:;">
Расписание занятий</h5>
<table cellspacing="0" cellpadding="0" border="0" class="timetable  table-responsive" align="center"  data-ros="fadeIn"   data-options="delay:200;infinite:false;animationClass:animated;duration:1200;callback:;">
    <thead>
        <tr>
            <th><p>Адрес&nbsp;<wbr>учебного&nbsp;<wbr>класса</p></th>
          <?php if (Yii::$app->mobileDetect->isMobile()) {  ?> 
            <th class="last"><p>Дни&nbsp;и&nbsp;время<wbr>&nbsp;занятий в&nbsp;учебной&nbsp;группе</p></th><?php } ?>
          <?php if (!Yii::$app->mobileDetect->isMobile()) {  ?> 
            <th><p>Дни&nbsp;и&nbsp;время&nbsp;занятий в&nbsp;учебной&nbsp;<wbr>группе</p></th>
             <th class="last"><p>Свободные места</p></th> <?php } ?>
        </tr>
    </thead>
    <tbody>
        <tr>

            <td>ул. Молодо&shy;гвардейская, 33<br>т.: 255-69-99</td>
            <td>
                <span class="span2" style="color: #223f14;">ПН,СР: <br class="visible-xs" />16.30-18.00</span>
            
            </td>
             <?php if (!Yii::$app->mobileDetect->isMobile()) {  ?> 
            <td><div id="advanced-circle" class="circle fl"></div><span class="fl "  style="text-shadow: #363636 0 1px 1px;color:#7ae346;margin-top:-1px">ЕСТЬ</span></td><?php } ?>
        </tr>
        
        <tr>

            <td>ул. Осипенко, 11<br>т.: 255-69-99</td>
            <td>
                <span class="span2"  style="color: #223f14;">ПН-ЧТ:<br class="visible-xs" /> 18.00-19.30, 19.30-21.00</span>
            </td>
             <?php if (!Yii::$app->mobileDetect->isMobile()) {  ?> 
            <td><div id="advanced-circle" class="circle fl"></div><span class="fl " style="text-shadow: #363636 0 1px 1px;color:#7ae346;margin-top:-1px">ЕСТЬ</span></td><?php } ?>
        </tr>
                        

   

    </tbody>
    </table>
</div>
    <br/><br/>


</div>
<div class="linetire"></div>
<div class="text-center leave-request leave-request-ge" data-aos="zoom-out-down" data-aos-duration="500"><h5>Остались вопросы?</h5><div id="signup-leave" style="padding: 0px 60px 0px 60px;"><h3>Оставьте заявку и Мы свяжемся с Вами в ближайшее время, чтобы ответить
 на все интересующие Вас вопросы или позвоните по телефону <strong>+7 (846) 255-69-99</strong>.</h3>
 <?php    echo Html::a(
    'Оставить заявку',
  ['#'],
  [ 'data-toggle' => 'modal',
    'data-target' => '#idmodal',
    'data-which' => '4',
    'class' => 'signup'
  ]
    ); ?>
<p>&nbsp;</p><br/></div></div>



<?php 
//Yii::$app->view->registerJsFile('/assets/js/jquery.ros.min.js',  ['depends' => 'yii\web\JqueryAsset']);

$this->registerJs(<<<JS

window.addEventListener("load", function() {
         AOS.init();
         //ros.init();
});


JS
, yii\web\View::POS_READY); ?>


