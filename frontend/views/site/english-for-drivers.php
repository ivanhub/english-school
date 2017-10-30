<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;



$title = 'Языковые курсы для водителей такси';
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

?>




<div class="siteblock">
 <div class="row">

<h1 class="text-center"><?= Html::encode($title) ?></h1>

<br/><!-- <h5 class="poryadok green text-center h5style" style="padding-bottom:15px;padding-top:0" data-ros="anim-documents"   data-options="delay:100;infinite:false;animationClass:animated;duration: 900;callback:;">
Английский для водителей</h5> -->
<div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 flex-center"><img src="/images/en/taxi-1.jpg" class="taxi-img"></div>
<div class="visible-xs"><p>&nbsp;</p></div>
<p class="indent50"><b class= "green">Центр иностранных языков «Росакадемия»</b> - единственная в регионе школа иностранных языков, осуществляющая языковую подготовку водителей для работы на 
  <strong>Чемпионате Мира по футболу 2018 года.</strong> Специально разработанная программа позволит в кратчайший срок освоить базовые приемы и принципы общения с иностранными гостями. Используя новую уникальную методику обучения, 
  нам удается разговорить даже самых неразговорчивых! Хотите встречать гостей на Чемпионате Мира по футболу и поддержать с ними диалог, тогда записывайтесь на
<b class="green">курс английского языка для водителей.</b>
</p>
<p class="indent50" style="padding-top:8px"><b class= "green">Цель программы</b> – за достаточно короткий срок обеспечить качественное общение на английском языке в соответствии с поставленной задачей клиента.</p>
<p class="indent50 green" style="font-weight:bold;padding-top:8px">Задачи обучения:</p>
<div class="indent50"><img src="/images/en/taxi-yes.jpg" style="float:right;border-radius: 20% 35%;margin-top: 10px; padding: 7px 7px 7px 7px">

<p style="text-indent:50px">1.  Определить уровень владения языком.</p>
<p style="text-indent:50px">2.  В соответствии с уровнем подобрать оптимальную программу обучению.</p>
<p style="text-indent:50px">3.  Контролировать процесс и качество обучения.</p>
<p style="text-indent:50px">4.  Выдать сертификат, подтверждающий владение языком на определенном уровне.</p>
 </div>

   <p align="center" style="font-size:165%;margin-top:35px"> Запись на <span class="green" style="font-weight:bold">БЕСПЛАТНОЕ</span> тестирование по телефону <b class='green'>255-69-99</b></p>
<br/><br/>
        </div>    




  </div>

<!-- <div class="wrapetap"></div> -->






<?php
$this->registerJs(<<<JS
( function( window ) {

'use strict';


function classReg( className ) {
  return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
}

// classList support for class management
// altho to be fair, the api sucks because it won't accept multiple classes at once
var hasClass, addClass, removeClass;

if ( 'classList' in document.documentElement ) {
  hasClass = function( elem, c ) {
    return elem.classList.contains( c );
  };
  addClass = function( elem, c ) {
    elem.classList.add( c );
  };
  removeClass = function( elem, c ) {
    elem.classList.remove( c );
  };
}
else {
  hasClass = function( elem, c ) {
    return classReg( c ).test( elem.className );
  };
  addClass = function( elem, c ) {
    if ( !hasClass( elem, c ) ) {
      elem.className = elem.className + ' ' + c;
    }
  };
  removeClass = function( elem, c ) {
    elem.className = elem.className.replace( classReg( c ), ' ' );
  };
}

function toggleClass( elem, c ) {
  var fn = hasClass( elem, c ) ? removeClass : addClass;
  fn( elem, c );
}

var classie = {
  // full names
  hasClass: hasClass,
  addClass: addClass,
  removeClass: removeClass,
  toggleClass: toggleClass,
  // short names
  has: hasClass,
  add: addClass,
  remove: removeClass,
  toggle: toggleClass
};

// transport
if ( typeof define === 'function' && define.amd ) {
  // AMD
  define( classie );
} else {
  // browser global
  window.classie = classie;
}

})( window );


var ModalEffects = (function() {

  function init() {

    var overlay = document.querySelector( '.md-overlay' );

    [].slice.call( document.querySelectorAll( '.md-trigger' ) ).forEach( function( el, i ) {

      var modal = document.querySelector( '#' + el.getAttribute( 'data-modal' ) ),
        close = modal.querySelector( '.md-close' );

      function removeModal( hasPerspective ) {
        classie.remove( modal, 'md-show' );

        if( hasPerspective ) {
          classie.remove( document.documentElement, 'md-perspective' );
        }
      }

      function removeModalHandler() {
        removeModal( classie.has( el, 'md-setperspective' ) ); 
      }

      el.addEventListener( 'click', function( ev ) {
        classie.add( modal, 'md-show' );
        overlay.removeEventListener( 'click', removeModalHandler );
        overlay.addEventListener( 'click', removeModalHandler );

        if( classie.has( el, 'md-setperspective' ) ) {
          setTimeout( function() {
            classie.add( document.documentElement, 'md-perspective' );
          }, 25 );
        }
      });

      close.addEventListener( 'click', function( ev ) {
        ev.stopPropagation();
        removeModalHandler();
      });

    } );

  }

  init();

})();
JS
, yii\web\View::POS_READY); 
?>






</div>
<!-- <div class="linetire"></div>
 -->




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

    





