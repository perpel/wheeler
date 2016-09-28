<?php
namespace home\models;

use Yii;
use yii\base\Model;

class Banner extends Model {

	public function zh_CN() {
		return [
			['src'=>'1.jpg', 'alt'=>'wheeler'],
			['src'=>'2.jpg', 'alt'=>'wheeler'],
			['src'=>'3.jpg', 'alt'=>'wheeler'],
			['src'=>'4.jpg', 'alt'=>'wheeler'],
		];
	}

	public function en() {
		return [
			['src'=>'1.jpg', 'alt'=>'wheeler'],
			['src'=>'4.jpg', 'alt'=>'wheeler'],
			['src'=>'3.jpg', 'alt'=>'wheeler'],
		];
	}

	public function bannerInfo() {
		switch (Yii::$app->language) {
			case 'zh-CN':
				return $this->zh_CN();
				break;
			case 'en':
				return $this->en();
				break;
		}
	}

}
