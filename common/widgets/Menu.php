<?php
namespace common\widgets;

use Yii;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

class Menu extends \yii\bootstrap\Widget {

	public function run() {
		NavBar::begin([
		    'brandLabel' => Html::img('img/logo.png'),
		    'brandUrl' => Yii::$app->homeUrl,
		    'options' => [
		        'class' => 'navbar-default navbar-fixed-top',
		    ],
		]);

		echo Nav::widget([
		    'options' => ['class' => 'navbar-nav navbar-right'],
		    'items' => Yii::t('app', 'nav'),
		]);

		NavBar::end();
	}

}