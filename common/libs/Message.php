<?php
namespace common\libs;

use Yii;
use yii\helpers\Html;

class Message {

	static public function copyright() {
		return '&copy; ' . Yii::t('app', 'home') . ' ' . date('Y');
	}

	static public function address() {
		$add = Html::tag(
				'span', 
				Html::tag('i', ' ', ['class'=>'glyphicon glyphicon-home']) . Yii::t('app', 'address'));
		$phone = Html::tag(
				'span', 
				Html::tag('i', ' ', ['class'=>'glyphicon glyphicon-phone-alt']) . Yii::t('app', 'tel'));
		return $phone . " " . $add;
	}

}