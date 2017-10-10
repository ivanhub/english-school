<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
//use yii\bootstrap\ActiveForm;
//use yii\captcha\Captcha;

//use frontend\components\Leftmenu;


$title = 'Подготовка к ЧМ по футболу';
$this->title = title($title);

$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Специальные программы: Курс "Спецсигналы". Курс "Допог". Обучаем инструкторов по вождению. Аренда автодрома. Индивидуальные занятия с инструктором. Звоните!',
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'автошкола, мотошкола, росавтоакадемия, спецсигналы, ДОПОГ, обучение, обучение инструкторов по вождению, аренда автодрома, центральная автошкола Самары, обучение вождению, услуги автошколы, школа вождения, права, рос автоакадемия, права на автомобиль, главная автошкола Самары'
    ]);



/* $this->params['breadcrumbs'][] = [ /* 'template' => "<li><b>{link}</b></li>\n", 
                                    'label' => 'Автомотошкола', 
                                    'url' => ['/automotoschool'] 
                                 ]; */
$this->params['breadcrumbs'][] = $title;
?>






<!--  --> 
<div class=" siteblock">
   

 <div class="row"><!-- 
<div class="col-sm-12 col-md-3">


Leftmenu::widget() 



 <?= leoshtika\bootstrap\NavSidebar::widget([
    'items' => [
        [
            'url' => ['site/index'],
            'label' => 'Запись на обучение',
            'icon' => 'home' // This is a bootstrap icon name
        ],
        [
            'url' => ['site/about'],
            'label' => 'Расписание занятий',
            'icon' => 'info-sign' // This is a bootstrap icon name
        ],
        [
            'url' => ['site/about'],
            'label' => 'Наши преимущества',
            'icon' => 'info-sign' // This is a bootstrap icon name
        ],
        [
            'url' => ['/dop-uslugi'],
            'label' => 'Дополнительные услуги',
            'icon' => 'info-sign', // This is a bootstrap icon name
            'active' => $this->context->route == 'site/dopuslugi',

'activeCssClass' => 'active'
        ],
    ],
]);
?>  


<ul class="left">
    <li><a href="/raspisanie">Расписание</a></li>
    <li><a href="#">Доп.&nbsp;услуги</a></li>
    <li><a href="/students">Учащимся</a></li>
    <li><a href="/postupayushchim">Поступающим</a></li>
    <li><a href="#">Условия&nbsp;обучения</a></li>  
</ul>
</div> -->






<h1 class="text-center"><?= Html::encode($title) ?></h1>


<br/>


<!-- 
<h5 class=" text-center" style="font-size:28px;padding-bottom:15px;margin-top:-10px;" data-ros="anim-documents"   data-options="delay:100;infinite:false;animationClass:animated;duration: 900;callback:;">
Подготовка к Чемпионату Мира по футболу</h5> -->
<div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 flex-center"><img src="/images/en/worldcup.jpg" class="good-img"></div>
<div class="visible-xs"><p>&nbsp;</p></div><p class="indent50">Еще одна возможность <b>«подтянуть»</b> язык и снять языковой барьер – это <b>Английский клуб</b>, проводимый нашей школой каждые выходные.
 Принимая участие в интересных, разнообразных, познавательных формах общения Вы незаметно шаг за шагом станете:</p>
 <ul class=" preimul2  gal text-justify">
 <li style="text-indent:50px;font-size:115%;animation-duration: 1s; animation-delay: 0;">Грамотно выражать свои мысли на английском языке</span></li>
 <li style="text-indent:50px;font-size:115%;animation-duration: 1s; animation-delay: .4s;">Слушать собеседника и вступать в дискуссию по интересующим Вас вопросам</li>
 <li style="text-indent:50px;font-size:115%;animation-duration: 1s; animation-delay: .7s;">Лучше понимать специфику кросс-культурного общения</li>
 <li style="text-indent:50px;font-size:115%;animation-duration: 1s; animation-delay: 1.1s;padding-top:15px">Все это позволит Вам уверенно чувствовать себя в английском языке, что даст возможность беспрепятственно
  общаться с иностранными гостями на <b>Чемпионате Мира по футболу.</b></li>
 </ul>
 <p class="indent50" style="margin-top:-20px">
  Работа клуба проходит по специальным методическим разработкам преподавателей нашей школы, содержащим лексический минимум, популярные английские идиомы, стимулирующие английскую речь. 
  Обязательным элементом <b>Английского клуба</b> является просмотр видеофрагмента из британского или американского кинематографа с предварительным изучением новых слов и выражений и увлекательным 
  и заинтересованным обсуждением после просмотра.
 </p>
 <p class="indent50">
Необычна сама технология <strong>Английского клуба</strong>, которая делает возможным и интересным участие в ней любого человека даже при достаточно раннем уровне владения иностранным языком.
 </p>
<p class="indent50">Организуемый нами телемост с гостями из <b>США, Великобритании, Канады</b> позволит не только улучшить английский язык, но и получить много новой интересной страноведческой и кросскультурной информации.</p>
<div class="row">
    <p align="center" class="poryadok green" style="padding-top:25px;padding-bottom:15px">Темы английского клуба</p>
<div class="col-sm-4 text-center"><img src="/images/en/worldcup2.png" class="doyou3 eclub-pic1" width="82%"></div>
<div class="col-sm-4">
    <div class="centertext-block">
<p><em style="font-size:81%">07.10.2017 Countries and cities in the world</em></p>
<p><em style="font-size:81%">14.10.2017 What makes an ideal holiday?</em></p>
    <p><em style="font-size:81%">21.10.2017 Talking politics</em></p></div>
</div>

<div class="col-sm-4 text-center"><img src="/images/en/worldcup3.png" class="img-responsive eclub-pic2"></div>
</div>
<br/>
<p style="text-align:center;color:green;font-weight:700">Стоимость 350 руб. Начало заседания Английского клуба – 12.00</p>


 


<!--
<img src="../images/pics/q1.png">
<p><img src="../images/pics/q3.png"> Консультации по приобретению, эксплуатации, хранению мотоцикла, выбору запчастей.</p>
<p><img src="../images/pics/q4.png">Обучение инструкторов по вождению.</p>
-->


<br/>

</div>

</div>

<?php 

//peremotka vverh to active accordion, after click
$this->registerJs(<<<JS

var lanopt = $(".panel-group");

lanopt.on("show.bs.collapse",".collapse", function(){
   lanopt.find(".collapse.in").collapse("hide");
   
    var offset = $(this).find('.collapse.in').prev('.panel-heading');
        if(offset) {
            $('html,body').animate({
                scrollTop: $('.panel-title a').offset().top -50
            }, 500); 
        }
});

JS
, yii\web\View::POS_READY); ?>



