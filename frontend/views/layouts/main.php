<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;

use yii\bootstrap\ActiveForm;

use yii\base\Widget;



if(isset($_SERVER['HTTP_REFERER'])) {
 if(!isset($_COOKIE['origURL'])) {
  setcookie( 'origURL', $_SERVER['HTTP_REFERER'],  2147483647, "/"); 
//  $_SESSION["origURL"] = $_SERVER["HTTP_REFERER"];
}
   }
else
{
setcookie( 'origURL', 'Прямой заход',  2147483647, "/");   
//$_SESSION["origURL"] = 'Прямой заход';
}



AppAsset::register($this);
$action = Yii::$app->controller->action->id;

//temporary, for testing header("Access-Control-Allow-Origin: *");



$this->beginPage();
$parser = \WyriHaximus\HtmlCompress\Factory::construct();
ob_start();
?>
<!DOCTYPE html>


  <html lang="ru-RU">


<head>
  <!-- IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="font-src 'self' *.ros.academy fonts.gstatic.com fonts.googleapis.com; style-src 'self' 'unsafe-inline' cdn.rawgit.com fonts.googleapis.com maxcdn.bootstrapcdn.com; script-src 'self' 'unsafe-inline' 'unsafe-eval' cdn.rawgit.com www.googleadservices.com www.google-analytics.com mc.yandex.ru *.ros.academy www.google-analytics.com apis.google.com connect.facebook.net connect.ok.ru ajax.googleapis.com api-maps.yandex.ru">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="cleartype" content="on"/>
    <!--[if IE]>
    <meta http-equiv="imagetoolbar" content="no"/>
    <meta http-equiv="MSThemeCompatible" content="no"/>
    <![endif]-->
    <meta name="author" content="Ivan Alexandrov / Ros.Academy"/>
    <meta name="copyright" content="Ros.Academy (c)"> 
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="<?php echo $action; ?>">

<?php $this->beginBody() ?>

<div class="page">

 <?= $this->render('header') ?>

    <div class="container mainb"><div class="backgr">
    <!-- <div id="breadcrumb"> -->
        <?= Breadcrumbs::widget([
              'homeLink' => [ 
                      'label' => Yii::t('yii', 'Главная'),
                      'url' => Yii::$app->homeUrl,
                 ],
               'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
              /* 'options' => ['class' => 'crumbs'],*/
        ]) ?>
<!--         </div> -->
        
        <?= $content ?>
 <?= $this->render('../layouts/footer');?>
</div>   </div>
  <a href="#0" class="cd-top">Вверх</a>

</div>
<?php $this->endBody() ?>
<script type="text/javascript">

 $('#affix').affix({
      offset: {
      top: function () {
      return (this.bottom = $('.header-top').outerHeight(true) + 1)
    }
      }

   });

//$('#affix').affix('checkPosition');

(function($){
    // console.log(navigator.userAgent);
    /* Adjustments for Safari on Mac */
    if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Mac') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
     //console.log('Safari on Mac detected, applying class...');
        $('html').addClass('safari'); // provide a class for the safari-mac specific css to filter with
    }
})(jQuery);


window.addEventListener("load", function() {


<?php  
 
  if(hm('site/index'))
  { ?>
  var loader = setTimeout(function() {
                //document.querySelector(".page-loader").classList.add('loaded');   

            }, 200);


 var mainblok = document.querySelectorAll(".cl-effect-12");

setTimeout(function(){
var j=1;
[].forEach.call(mainblok, function(item) {

   if (document.documentMode===9){
      item.className += ' box' + j ;
    } else {
      item.classList.add('box' + j );
    }


      
    j++;
});
    }, 250);


/* IE10-11 target BEGIN
var ua = window.navigator.userAgent;
var msie = ua.indexOf("MSIE ");

if (!(msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))) // If Internet Explorer, return version number
 {

var j=1;
[].forEach.call(mainblok, function(item) {
      //for IE11
      item.style["opacity"] = "0";
    j++;
});
};
/* IE10-11 target END*/


/* IF not IE all version */
//if (!(window.clipboardData)) { } has been corrected
var j=1;
[].forEach.call(mainblok, function(item) {
      //for IE11
      item.style["opacity"] = "0";
    j++;
});
          

//if ie9 or > var isIE = false; if (window.navigator.msPointerEnabled) {    isIE = true;}
//1 var isIE10 = !!navigator.userAgent.match(/MSIE 10/);
//2 if (Function('/*@cc_on return document.documentMode===10@*/')()){ document.documentElement.className+=' ie10';}
//3 if (/*@cc_on!@*/false && document.documentMode === 10) {}
//4 if(Function('/*@cc_on return 10===document.documentMode@*/')()){document.documentElement.className='ie10';}

    
 <?php } elseif (hm('site/students')) { ?>

var $el = $(".cube");
var rotate = function(index){
  var index = index || 0;
  $el.each(function(e){
    $(this).attr("data-rotate",Math.abs($(this).index() - index));
  });
}
$el.hover(function(e){
  var index = $(this).index();
  rotate(index);
});
    rotate(0);

    <?php }; ?>



 var newspan = document.createElement('span');
 newspan.className = "icos";

var childTag = document.querySelectorAll("#topmen > ul > li > a");
var childTag1 = document.querySelector(".first");


for ( i = 0; i < childTag.length; i++)
{
   childTag[i].parentNode.insertBefore(newspan.cloneNode(true), childTag[i]);

}
var icos = document.getElementsByClassName('icos');

  if (document.documentMode===9){
icos[0].className += ' fa fa-home';
icos[1].className += ' fa fa-graduation-cap hvr-icon-spin';
icos[2].className += ' fa fa-camera';
icos[3].className += ' fa fa-file-text';
icos[4].className += ' fa fa-phone';
    } else {
icos[0].classList.add('fa','fa-home');
icos[1].classList.add('fa','fa-graduation-cap','hvr-icon-spin');
icos[2].classList.add('fa','fa-camera');
icos[3].classList.add('fa','fa-file-text');
icos[4].classList.add('fa','fa-phone');
    }





var blocks = document.querySelectorAll(".blocktitle");

 setTimeout(function(){
 var i=1;
[].forEach.call(blocks, function(item) {
     

      if (document.documentMode===9){
       item.className += ' bounceInLeft';
    } else {
       item.classList.add('bounceInLeft');
    }

    i++;
});
    }, 1000);

//sec var
 /*setTimeout(function(){
for (i = 0; i < blocks.length; i++) {
    blocks[0].classList.add('bounceInLeft');
}
    }, 1500);
*/

 setTimeout(function(){
 //var blocktitles = document.getElementsByClassName("blocktitle");

[].forEach.call(blocks, function(item) { 

      if (document.documentMode===9){
       item.className += ' hvr-bob';
      // remove class ie9
      item.className=item.className.replace(new RegExp('(\\s|^)'+'bounceInLeft'+'(\\s|$)'),' ').replace(/^\s+|\s+$/g, '');

    } else {
        item.classList.remove('bounceInLeft');
        item.classList.add('hvr-bob');
    }

  
  item.style.opacity = "1";
   });
//for (i = 0; i < blocktitles.length; i++) {blocktitles[i].style.opacity = "1";}

    }, 2000);


});
jQuery(document).ready(function($){


  // browser window scroll (in pixels) after which the "back to top" link is shown
  var offset = 300,
    //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
    offset_opacity = 1200,
    //duration of the top scrolling animation (in ms)
    scroll_top_duration = 700,
    //grab the "back to top" link
    $back_to_top = $('.cd-top');

  //hide or show the "back to top" link
  $(window).scroll(function(){
    ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
    if( $(this).scrollTop() > offset_opacity ) { 
      $back_to_top.addClass('cd-fade-out');
    }
  });

  //smooth scroll to top
  $back_to_top.on('click', function(event){
    event.preventDefault();
    $('body,html').animate({
      scrollTop: 0 ,
      }, scroll_top_duration
    );
  });


});




$(document).ready(function () {
  if (location.hash){
    $(location.hash).collapse('show');
    $(location.hash).parents('.accordion-body').collapse('show');
  }


$('#idmodal').on('show.bs.modal', function(e) {
  var which = e.relatedTarget.dataset.which;
        //var newspan = document.createElement('div');
        //newspan.className = "wpacket";
if (which==0) {
 $("#contact-form").append('<div class="form-group field-forma-fromfield required"><input type="hidden" id="forma-fromfield" class="form-control" name="Forma[fromfield]" value="0"><p class="help-block help-block-error"></p></div>');
  } else if (which==1)
  {

 $("#contact-form").append('<div class="form-group field-forma-fromfield required"><input type="hidden" id="forma-fromfield" class="form-control" name="Forma[fromfield]" value="1"><p class="help-block help-block-error"></p></div>');

  }; 

});



});




$('input#fromurl').val('<?php if (isset($_COOKIE['origURL'])) echo $_COOKIE['origURL']; ?>');
$('input#fromurl').val() || $('input#fromurl').val(document.referrer);
</script>


<?php  if(hm('site/b'))
  { ?>


<script src="/assets/js/zingchart.min.js" type="text/javascript" async="async"></script>
<?php };
?>

<?php  if(hm('site/index'))
  { ?>

<script src="/assets/js/jquery.waypoints.js?v=4.0.1"></script>

<?php };
?>


<!--
<script src="/assets/js/flowtype.js"></script>
<script src="/assets/js/jquery.scalem.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FitText.js/1.2.0/jquery.fittext.min.js"></script>
//Yii::$app->view->registerJsFile('/assets/js/jquery.fittext.js',  ['depends' => 'yii\web\JqueryAsset']); -->

</body>
</html>
<?php 
$myHTML = ob_get_contents();
ob_end_clean();
$compressedHtml = $parser->compress($myHTML);
if ($_SERVER['HTTP_HOST']!=="english.loc") echo $compressedHtml; else echo $myHTML;
$this->endPage() 
?>