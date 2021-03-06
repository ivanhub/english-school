<?PHP
use yii\helpers\Html;
/*use yii\bootstrap\Modal;*/

?>
<footer>
  <div class="container"><div class="page-footer bg-gray-lighter">

<div class=" foot1">
 <div class="foot1__preload-hide">
   <img src="../../img/phone_icon.png" width="1" height="1" title="Школа вождения, обучение вождению" alt='Автошкола "Росавтоакадемия" номер телефона' />
 </div>

<div class="row">

        <div class="col-sm-4 col-xs-12">
                <div class="footer-col-1 col1">
                <i class="footer__vline footer__vline_1"></i>
<ul class="footer-links">
<li><a class="kursi">Курсы иностранных языков</a></li>

<li class="indent10"><i class="footer__hline footer__hline_1"></i> <a href="/general-english">Английский язык</a></li>
<li class="indent10"><i class="footer__hline footer__hline_1"></i> <a href="/european-languages">Европейские языки</a></li>
<li class="indent10"><i class="footer__hline footer__hline_1"></i> <a href="/chinese-language">Китайский язык</a></li>
</ul>
                  </div>
        </div>
        <div class="clearfix visible-xs" style="margin-bottom:20px;"></div>
       <div class="col-sm-4 col-xs-12">
                       <div class="footer-col-2 col4">
   


                <i class="footer__vline footer__vline_1"></i>

<ul class="footer-links">
<li><a>Специальные курсы</a></li>

<li class="indent10"><i class="footer__hline footer__hline_1"></i> <a href="/english-for-drivers">Английский для водителей</a></li>
<li class="indent10"><i class="footer__hline footer__hline_1"></i> <a href="/pre-world-cup-preparation">Подготовка к ЧМ по футболу</a></li>
  <li class="indent10"><i class="footer__hline footer__hline_1"></i> <a href="/corporate-training">Корпоративное обучение</a></li>
</ul>     
        </div>
                </div>
        <div class="col-sm-4 col-xs-12">
                        <div class="footer-col-3 my">
<div class="footer-phone" itemscope itemtype="http://schema.org/LocalBusiness">
<p class="phone">
<a href="tel:+78462556999"><i class="footer-phone__pic"></i> <span itemprop="telephone">+7 (846) 255-69-99</span></a></p>
<p class="footer-phone__p" ><time itemprop="openingHours" datetime="Mo, Tu, We, Th 8:00-17:00">пн-чт с 8.00 до 17.00</time></p>
<p class="footer-phone__p"><time itemprop="openingHours" datetime="Fr 8:00-16:00">пт с 8.00 до 16.00</time></p>
</div>
<div class="vk">
<?php    echo Html::a(
   '<div class="wrapperb">
        <p class="buttonn">
            <span class="borderr"></span>
            <span class="topp"></span>
            <span class="rightt"></span>
            <span class="bottomm"></span>
            <span class="leftt"></span>
            <span class="textt">Запись на занятия</span>
        </p>
</div>',
  ['#'],
  [
  'data-toggle' => 'modal',
  'data-target' => '#idmodal',
  'data-which' => '1',
  ]
    ); ?> 


                  </div>

        </div>
<BR/>
</div>
</div>
</div>
<div class="rangelogo range-xs-center range-xs-middle text-center">
<p class="pull-top">&nbsp; Copyright &copy; <span id="copyright-year"><?= date('Y') ?> АНО ЦДПО "Академия". &nbsp;<a href="/privacy" class="privacy">Политика конфиденциальности</a></span>
 <a href="" class="link-decoration-none text-hover-primary text-gray-light">
 </a></p>
</div>
</div></div>
</footer>



<?php 



$this->registerJs(<<<JS


var div = document.createElement('div');
div.className = "greenlinebot";

  document.getElementsByClassName("navbar-header")[0].appendChild(div);
  var allowSubmit = true;
  $('form').on('beforeSubmit', function(e) {

            if (allowSubmit) 
{
    allowSubmit = false; 
    var form = $(this);
    var formData = form.serialize();
    $.ajax({
     // url: form.attr("action"),
        type: form.attr("method"),
        data: formData,
        success: function (result) {

if (typeof window.yaCounter46222497 != 'undefined') {  yaCounter46222497.reachGoal("clickpb123") }

          if (typeof ga == 'function') { ga('send', 'event', 'forma', 'ok');  }
     

var modalContainer = $('#idmodal');
var modalBody = modalContainer.find('.modal-body');
var insidemodalBody = modalContainer.find('#contact-form');
insidemodalBody.html(result).hide(); 
$('.sel').html("<div class='alert alert-success'>");
$('.sel > .alert-success').append("<strong>Спасибо! Заявка отправлена.</strong>");
$('.sel > .alert-success').append('</div>');
//$('.sel').css('visibility', 'visible');

setTimeout(function() { 
$("#idmodal").modal('hide');
//$('#w00').css('visibility', 'hidden');
}, 4000);

        },
        error: function () {
            alert("Something went wrong");
        }
    });

  }
}).on('submit', function(e){
    e.preventDefault();
}); 

/*
"use strict";
function start5() {
    if (jQuery("#specialsignals").hasClass("in")) {
        jQuery("#specialsignals").removeClass("in");
    } else {
        jQuery("#specialsignals").addClass("in").css({
            height: "auto !important"
        });
    }
}*/


JS
, yii\web\View::POS_READY, 'contact-form'); ?>




<?php 
if ($_SERVER['HTTP_HOST']!=="english.loc") { ?>

<script type="text/javascript"> 
var host = window.location.hostname;
if (host != "english.loc")
{
// Google.Analytics counter
//!function(e,t,a,n,c,s,o){e.GoogleAnalyticsObject=c,e[c]=e[c]||function(){(e[c].q=e[c].q||[]).push(arguments)},e[c].l=1*new Date,s=t.createElement(a),o=t.getElementsByTagName(a)[0],s.async=1,s.src=n,o.parentNode.insertBefore(s,o)}(window,document,"script","https://www.google-analytics.com/analytics.js","ga"),ga("create","UA-93157723-1","auto"),ga("send","pageview");
// Yandex.Metrika counter 
var yaParams = {ip: "<? echo $_SERVER['REMOTE_ADDR'];?>", agent: "<? echo $_SERVER['HTTP_USER_AGENT'];?>"};
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter46222497 = new Ya.Metrika({
                    id:46222497,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
        params:window.yaParams
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
  }
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/46222497" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


<!-- Google Code for Conversion Page
In your html page, add the snippet and call
goog_report_conversion when someone clicks on the
phone number link or button. -->
<!-- <script type="text/javascript">
  /* <![CDATA[ */
  goog_snippet_vars = function() {
    var w = window;
    w.google_conversion_id = ;
    w.google_conversion_label = "";
    w.google_remarketing_only = false;
  }
  // DO NOT CHANGE THE CODE BELOW.
  goog_report_conversion = function(url) {
    goog_snippet_vars();
    window.google_conversion_format = "3";
    var opt = new Object();
    opt.onload_callback = function() {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  }
  var conv_handler = window['google_trackConversion'];
  if (typeof(conv_handler) == 'function') {
    conv_handler(opt);
  }
}
/* ]]> */ -->
<!-- </script>
<script type="text/javascript"  src="//www.googleadservices.com/pagead/conversion_async.js"></script> -->

<?php } ?>