<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Modal;
use frontend\components\Freetest;

$title = 'Корпоративное обучение иностранным языкам';

$this->title = title($title);


/*$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Обучение вождению на автомобиле. Получение прав категории В. Собственный автодром, опытные квалифицированные инструктора, экстремальное и защитное вождение. Доступные цены. Беспроцентная рассрочка! Одна из лучших автошкол в Самаре. Звоните!',
]);

$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'лучшая автошкола Самары, главная автошкола Самары, центральная автошкола Самары, школа вождения, автошкола, услуги автошколы, Обучение вождению, получить права, росавтоакадемия, рос автоакадемия, росавто академия, права на автомобиль, права, категория А, категория В, обучение на права, сдать на права, курсы водителей',
]);*/



$this->params['breadcrumbs'][] = $title;

echo Freetest::widget(['link'=> '']);
?>




<div class="siteblock">
<h1 class="text-center"><?= Html::encode($title) ?></h1>
<br/>

<div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 flex-center"><img src="/images/en/corporate.jpg" class="taxi-img" style="width:80%"></div>
<div class="visible-xs"><p>&nbsp;</p></div>
<p class="indent50">Мир постоянно меняется, каждый день приходится сталкиваться с новыми вызовами. Сегодня вследствие открытости границ, международных конференций и семинаров, работы с зарубежными партнерами успешное ведение бизнеса невозможно без знания иностранных языков. Используемая коммуникативная методика и самые современные учебные пособия позволят в кратчайшие сроки не только повысить уровень иностранного языка сотрудников Вашей компании, но и позволят говорить на иностранном языке легко и свободно.</p>
<p>Перед началом занятий проводится 
<?=         Html::a( 'БЕСПЛАТНОЕ тестирование', $url = null, $options = [
    // other options
    'class' => 'link',
    'data' => [
        'toggle' => 'modal',
        'target' => '#testlink',
   ],] )
 ?>.
   <br/>Занятия могут проходить как в аудиториях нашей школы, так и в офисе заказчика.</p>
<br/>



<div class="linetire"></div><br/>
<div class="forsafari">
<div class="row text-center"  data-ros="flipInX"   data-options="infinite:false;animationClass:animated;duration:1500;callback:;" >
  <div class=" col-sm-2 text-center vc"><img src="../../images/en/time1.png" alt="Теория. Автошкола в Самаре" title="Теория: 134 ч." width="100"></div>
  <div class="col-sm-12 centerxs vc "><p><b>Экономия времени</b></p>
  <p>Преподаватели нашей школы могут проводить занятия в офисе заказчика, что позволяет сэкономить время и силы на дорогу, максимально эффективно использовав его для обучения.</p>
<br/>
   </div>
 </div></div><div class="forsafari">
<div class="row text-center "  data-ros="flipInX"   data-options="delay:100;infinite:false;animationClass:animated;duration:1500;callback:;" >
  <div class="col-sm-2 text-center vc"><img src="../../images/en/lamp.png" alt="Вождение. Автошкола в Самаре" title="Вождение: 18 ч"  width="100"></div>
  <div class="col-sm-12 centerxs vc"><p><b>Новая авторская методика</b></p>
  <p>Занятия проводятся по уникальной авторской методике, позволяющей в кратчайшие сроки повысить уровень владения языком и грамотно выражать свои мысли на иностранном языке</p>
<br/>
  </div>
  </div></div>

<div class="forsafari">
<div class="row text-center"  data-ros="flipInX"   data-options="delay:300;infinite:false;animationClass:animated;duration:1500;callback:;" >
<div class="col-sm-2 text-center vc"><img src="../../images/en/handshake.png" alt="Экзамен в ГИБДД. Автошкола в Самаре" title="Экзамен в ГИБДД"  width="100"></div>
<div class="col-sm-12 centerxs vc"> <p><b>Повышение лояльности сотрудников</b></p> <p>Многие в современном мире хотят изучать иностранный язык. Сегодня особой популярностью пользуются китайский, испанский, итальянский языки. В то же время первенство все-таки занимает английский язык. Далеко не каждая компания готова платить за обучение своих сотрудников. Включив изучение английского языка в социальный пакет, Вы получите по-настоящему лояльных сотрудников, готовых достигать новых результатов.</p>
<br/>
</div>
  </div></div>
<div class="forsafari">
<div class="row text-center"  data-ros="flipInX"   data-options="delay:200;infinite:false;animationClass:animated;duration:1500;callback:;" >
  <div class="col-sm-2 text-center vc"><img src="../../images/en/galka.png" alt="Срок обучения. Автошкола в Самаре" title="Срок обучения: 3 мес."  width="100"></div>
  <div class="col-sm-12 centerxs vc"><p><b>Индивидуальный подход</b></p> <p>В зависимости от специфики деятельности Вашей компании мы разработаем индивидуальную программу с необходимой лексикой, дадим рекомендации по изучению иностранного языка.</p></div>
  <br/>
  </div></div>
<br/>

<p>Ежемесячно заказчик получает отчет о посещаемости слушателей курсов, отчет об уровне освоения учебной программы. По окончании уровня обучения слушателям выдаются сертификаты с указанием количества прослушанных часов и достигнутого уровня владения иностранным языком.</p>
<br/><br/>
</div>





<?php
Yii::$app->view->registerJsFile('/assets/js/jquery.ros.js',  ['depends' => 'yii\web\JqueryAsset']); 

$this->registerJs(<<<JS

ros.init(); 

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

    





