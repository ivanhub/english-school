<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


$title = 'Курсы китайского языка';
$this->title = title($title);

/*
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Обучение вождению на автомобиле. Получение прав категории В. Собственный автодром, опытные квалифицированные инструктора, экстремальное и защитное вождение. Доступные цены. Беспроцентная рассрочка! Одна из лучших автошкол в Самаре. Звоните!',
]);

$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'лучшая автошкола Самары, главная автошкола Самары, центральная автошкола Самары, школа вождения, автошкола, услуги автошколы, Обучение вождению, получить права, росавтоакадемия, рос автоакадемия, росавто академия, права на автомобиль, права, категория А, категория В, обучение на права, сдать на права, курсы водителей',
]);*/

$this->params['breadcrumbs'][] = $title;
?>

<div class="siteblock2">
<h1 class="text-center"><?= Html::encode($title) ?></h1>
  <div class="hidden-xs"><br/></div>

<br/><div class="container-fluid doyou-block">
<div class="row vertical-align"  data-aos="flip-right">
<div class="col-sm-6 col-xs-12 text-center ">
<img src="/images/en/chin-11.jpg" class="img-responsive doyou" ></div>
<div class="col-sm-6 col-xs-12 text-left ">
<p class="mtext2 mtext2-chinese" style="clear:both; text-align:justify;line-height:1.1">
Китайский язык сегодня по праву занимает лидирующие позиции в мире иностранных языков. С каждым годом всё большее количество людей переезжает в Китай жить, работать, учить язык. Стремительно развивающаяся китайская экономика позволит в ближайшее время говорить о китайском языке как о языке международного общения.
</p>
</div>
</div><br/><br/>
<div class="linetire"></div>
<br/><br/>
<div class="row vertical-align"  data-aos="flip-right" >
<div class="col-sm-6 col-xs-12 col-sm-push-6 text-center ">
<img src="/images/en/chin-22.jpg" class="img-responsive doyou2 doyou" >
</div>
<div class="col-sm-6 col-xs-12 col-sm-pull-6 text-left ">
<p class="mtext2 mtext2-chinese-right" style="clear:both; text-align:justify;line-height:1.1">
Китай сегодня – один из главных деловых партнеров Российский компаний. Изучение китайского языка позволит не только понимать собеседника без переводчика, но и анализировать деловую документацию, письма, а также поддерживать обсуждение и дискуссию на китайском языке.
</p>
</div>
</div><br/><br/>
<div class="linetire"></div>
<br/><br/>
<div class="row vertical-align"  data-aos="flip-left">
<div class="col-sm-6 col-xs-12 text-center ">
<img src="/images/en/chin-3.jpg" class="img-responsive doyou" >
</div>
<div class="col-sm-6 col-xs-12 text-left ">
<p class="mtext2 mtext2-chinese" style="clear:both; text-align:justify;line-height:1.1">
Изучение китайского языка полезно еще и тем, что китайский развивает память, внимание, волю слушателя, способствует развитию фонематического слуха.
</p>
</div>
</div>
</div> 

</div>
<div class="linetire"></div>
<br/><br/>
<div class="siteblock">
  <h5 style="padding-top:0;margin-top:-10px" class="text-center animated h5style" data-aos="anim-documents"  data-aos-duration="2500">
Почему выбирают нас при изучении китайского языка?</h5> <br/>
 <ul class=" preimul2 lr10 gal4 text-justify" data-aos="fade-up-left" data-aos-delay="250">
 <li style="font-size:115%;animation-duration: 1s; animation-delay: 0;">Курсы китайского языка построены на современной методике, учитывающей различные потребности слушателей.</li>
 <li style="font-size:115%;animation-duration: 1s; animation-delay: .4s;">Мы работаем на результат, используя индивидуальный подход к каждому слушателю.</li>
 <li style="font-size:115%;animation-duration: 1s; animation-delay: 1s;">Интересная подача материала позволяет сделать занятия увлекательными и эффективными.</li>
 <li></li>
 </ul>

<br/>
</div>

<div class="linetire"></div>
<div class="text-center leave-request leave-request-chinese"  data-aos="zoom-out-down" data-aos-duration="500" data-aos-delay="300"><h5>Остались вопросы?</h5><div id="signup-leave" style="padding: 0px 60px 0px 60px;"><h3>Оставьте заявку и Мы свяжемся с Вами в ближайшее время, чтобы ответить
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

AOS.init({
      //offset: 200,
      duration: 600,
      easing: 'ease-in-sine',
      //delay: 20,
    });

//$(".flash-success").animate({opacity: 1.0}, 1000).fadeOut("slow");


//$('#idmodal').on('close.bs.modal', function(e) { 
//setTimeout(function() {  $("#wrapacket").text(''); }, 6000);
//});


$('#idmodal').on('show.bs.modal', function(e) {
  var which = e.relatedTarget.dataset.which;
        //var newspan = document.createElement('div');
        //newspan.className = "wpacket";


var total = '<b>Расчёт стоимости</b><br><b>Теория:</b> '+$('.sub-option .well').find('#f_11 option:selected' ).val()+'<br><b>Тип трансмиссии: </b>'+$('.sub-option .well').find('#f_12 option:selected' ).val()+'<br><b>Практика: </b>'+$('.sub-option .well').find('#f_13 option:selected' ).val()+'<br><b>Автодром: </b>'+$('.sub-option .well').find('#f_14 option:selected').val()+'<br><b>Всего стоимость: </b>'+$('.sub-option .well').find('.total .price').text();

if (which==101) {
$("#contact-form").append('<div class="form-group field-fromfield required"><input type="hidden" id="packet" class="form-control" name="packet" value="Категория B"><p class="help-block help-block-error"></p></div>');
$("#contact-form").children('.field-packet').hide();
$("#contact-form").append('<div class="form-group field-fromfield required"><input type="hidden" id="total" class="form-control" name="total" value="'+total+'"><p class="help-block help-block-error"></p></div>');
}  else if (which==102) {
$("#contact-form").append('<div class="form-group field-fromfield required"><input type="hidden" id="packet" class="form-control" name="packet" value="Категория A"><p class="help-block help-block-error"></p></div>');
$("#contact-form").children('.field-packet').hide();
$("#contact-form").append('<div class="form-group field-fromfield required"><input type="hidden" id="total" class="form-control" name="total" value="'+total+'"><p class="help-block help-block-error"></p></div>');
}
else if (which==5) {
$("#wrapacket").text('Пакет "Дневной"');
$("#contact-form").append('<div class="form-group field-fromfield required"><input type="hidden" id="pack" class="form-control" name="pack" value="Дневной"><input type="hidden" id="packet" class="form-control" name="packet" value="Категория B / Пакет Дневной"><p class="help-block help-block-error"></p></div>');
$("#contact-form").children('.field-packet').hide();
  } else if (which==6)
  {
$("#wrapacket").text('Пакет "Стандарт"');
$("#contact-form").append('<div class="form-group field-fromfield required"><input type="hidden" id="pack" class="form-control" name="pack" value="Стандарт"><input type="hidden" id="packet" class="form-control" name="packet" value="Категория B / Пакет Стандарт"><p class="help-block help-block-error"></p></div>');
$("#contact-form").children('.field-packet').hide();

  } else if (which==7) 
  {
$("#wrapacket").text('Пакет "Индивидуальный"');
$("#contact-form").append('<div class="form-group field-fromfield required"><input type="hidden" id="pack" class="form-control" name="pack" value="Индивидуальный"><input type="hidden" id="packet" class="form-control" name="packet" value="Категория B / Пакет Индивидуальный"><p class="help-block help-block-error"></p></div>');
$("#contact-form").children('.field-packet').hide();

  } else if (which==8) 
  {
$("#wrapacket").text('Пакет "Автомат"');
$("#contact-form").append('<div class="form-group field-fromfield required"><input type="hidden" id="pack" class="form-control" name="pack" value="Автомат"><input type="hidden" id="packet" class="form-control" name="packet" value="Категория B / Пакет Автомат"><p class="help-block help-block-error"></p></div>');
$("#contact-form").children('.field-packet').hide();

  }  else if (which==0 || which==1) 
  {
$("#wrapacket").text('');
$( ".field-forma-packet" ).show();          
$("#contact-form").children('.field-packet').show();

  };

});

JS
, yii\web\View::POS_READY); 

    





