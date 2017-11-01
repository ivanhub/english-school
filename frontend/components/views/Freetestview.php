<?php
namespace frontend\components;

use Yii; 
use yii\helpers\Html;
use yii\bootstrap\Modal;


Modal::begin([
    'options' => ['id' => 'testlink', ],
    'header' => '<h3 style="text-align:center;margin: 8px 0 0;">Онлайн тестирование уровня английского языка</h3>',
    'footer' => 'После прохождения тестирование, запишитесь на устное тестирвоание по тел.: <b>+7 (846) 205-77-66</b>',
    'toggleButton' => ['label' => $link, 'tag' => 'a', 'class' => 'link'],
]);

echo '<p style="line-height:1.4">Вам будет предложено 50 вопросов, для определения Вашего уровня английского языка.</p>
<p class="startbutton link">Начать</p>';



$this->registerJs(<<<JS
jQuery(document).ready(function($){
  jQuery( ".startbutton" ).click(function() {
  jQuery('#testlink .modal-body').html('<iframe src="/ostest/generatequiz.php" width="100%" height="230" frameborder="0" sandbox="allow-same-origin allow-scripts allow-popups allow-forms allow-top-navigation" allowtransparency="true"></iframe>');
});
});
JS
, yii\web\View::POS_READY); 

Modal::end();


?>
