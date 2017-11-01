<?php
namespace frontend\components;
		
//use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\bootstrap\Modal;

//use yii\web\View;



class Freetest extends Widget{
	public $link;
	public function init(){
		parent::init();
         if ($this->link === null) {
            $this->link = 'БЕСПЛАТНОЕ тестирование';
        }
	}
	
	public function run(){

            return $this -> render('Freetestview',  ['link' => $this->link]);

	}
}

