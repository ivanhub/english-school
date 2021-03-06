<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

use yii\bootstrap\ActiveForm;
use frontend\components\ModalForm;
use frontend\models\Forma;
use yii\base\Widget;
use yii\helpers\Url;



$des = Yii::$app->mobileDetect->isDesktop();
$mobi = Yii::$app->mobileDetect->isMobile();
$tablet = Yii::$app->mobileDetect->isTablet();

//<?= Yii::$app->params['homechecker'] = false; 

?>

<header class="page-header1">



<div class="navbar-panel-inner container"><div class="backgr">
<div class="header-top row ">


<div class="col-md-2 col-lg-3 col-sm-2 col-xs-1 forlogo" >


<?php $forma = new Forma(); ?>
<?= ModalForm::widget(['model' => $forma]) ?>

<?php  
//  echo ModalWidget::widget();
  



  if(hm('site/index'))
  {
    echo '<a href="/" ><div class="logo-akademia hvr-up onload-logo" ></div></a>';
    
  }else
  { 
   echo '<a href="/"><div class="logo-akademia hvr-up animated fadeIn" ></div></a>';

  } ?>

 
</div>
<div class="col-md-6 col-lg-6 col-sm-6 col-xs-7 mob">

<img class="logotop anilogo fadeIn" src="/img/rostop7.png" alt="Центр иностранных языков «Росакадемия» г. Самара" title="Центр иностранных языков «Росакадемия» г. Самара">
 <p class="logotextbottom hidemobi">Лицензия № 6955 от 31.10.2016 г.</p> 


  <div class="justmobi">
    <div class="row">
      
      <p class="phone"><a href="tel:+78462556999"> +7 (846) 255-69-99</a></p>
<span class="take">
<?php    echo Html::a(
    'Заявка ОН-ЛАЙН',
  ['#'],
  [ 'data-toggle' => 'modal',
    'data-target' => '#idmodal',
    'data-which' => '0',
    'class' => 'hvr-wobble-horizontal'
  ]
    ); ?>

</span>

    </div>
  </div>


</div>
<div class="col-lg-3 col-lg-offset-1 col-md-4 col-sm-4 col-xs-4 text-right rightblock hidemobi"><p class="phone"><a href="tel:+78462556999"> +7 (846) 255-69-99</a></p>
<p class="take">
<?php    echo Html::a(
    'Запись ОН-ЛАЙН',
  ['#'],
  [ 'data-toggle' => 'modal',
    'data-target' => '#idmodal',
    'data-which' => '0',
    'class' => 'hvr-wobble-horizontal'
  ]
    ); ?>

</p>
</div>


</div>






<div class="wrap  animated fadeIn" data-spy="" id="affix">

<a href="/"><div class="logo46"></div></a>


    <?php
    NavBar::begin([
     //   'brandLabel' => 'Учебный центр "Академия"',
        'brandUrl' => Yii::$app->homeUrl,
                    'containerOptions' => ['id' => 'topmen'],

        'options' => [
            'class' => 'navbar navbar-default navshadow skew-menu centering treeview',


        ],
    ]);
    $menuItems = [
         ['label' => 'Главная', 'url' => ['/'], 'active' => $this->context->route == 'site/index'],
/*         ['label' => 'Курсы', 'url' => ['/our-courses'], 'active' => $this->context->route == 'site/our-courses'],
*/         ['label' => 'Курсы',  'url' => ['/our-courses'],
/*        'template' => '<a href="{url}" >{label}<i class="fa fa-angle-left pull-right"></i></a>',
*/        'items' => [
            ['label' => 'Английского языка', 'url' => '/general-english'],
            ['label' => 'Европейских языков', 'url' => '/european-languages'],
            ['label' => 'Китайского языка', 'url' => '/chinese-language'],
            ['label' => 'Для водителей', 'url' => '/english-for-drivers'],
            ['label' => 'Подготовка к ЧМ', 'url' => '/pre-world-cup-preparation'],
            ['label' => 'Корпоративное обучение', 'url' => '/corporate-training'],
        ],],
        ['label' => 'Галерея', 'url' => ['/gallery'], 'active' => $this->context->route == 'site/gallery'],
        ['label' => 'О нас', 'url' => ['/about-us'], 'active' => $this->context->route == 'site/aboutus'],
        ['label' => 'Контакты', 'url' => ['/contact'], 'active' => $this->context->route == 'site/contact']];
   
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right interface'],
        'items' => $menuItems,
    ]);

    NavBar::end();
    ?>

    
</div> 
</div>  </div>


</header>



<script type="text/javascript">

var str = '<div id="hamburger"><span></span><span></span><span></span></div><span class="menu-span">МЕНЮ</span>'; 
document.getElementsByClassName("navbar-toggle")[0].innerHTML=str;

var items = document.querySelectorAll(".navbar-collapse > ul > li");
 var lastchild = items[items.length-1];

   // if ie9
if (document.documentMode===9){
   lastchild.className += ' last';
   items[0].className += ' first';  
    } else {
   lastchild.classList.add('last');
   items[0].classList.add('first');
   
    }
   



var links = document.querySelectorAll('.navbar-collapse > ul > li');
var i=1;
[].forEach.call(links, function(item) {


  if (document.documentMode===9){
   item.className += ' fadeInUp1';
   item.className += ' animated' + i;  
    } else {
      item.classList.add('fadeInUp1');
      item.classList.add('animated' + i );
    }


    i++;
});




  </script>


