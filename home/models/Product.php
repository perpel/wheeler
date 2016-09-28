<?php
namespace home\models;

use Yii;
use yii\base\Model;

class Product extends Model {

	public function panel_zh_CN() {

		return [

			[
				'title' => 'EM系列加工中心',
				'in' => 'in',
				'elementID' => 0,
				'data' => [
					[
						'label' => '韩国产', 
						'active'=>'active',
						'url' => ['Product/List-5'],
						'items' => [
							['label'=>'车削中心','active'=>'','url'=>['Product/List-5']],
							['label'=>'加工中心','active'=>'','url'=>['Product/List-5']],
							['label'=>'数控镗铣床','active'=>'','url'=>['Product/List-5']],
							['label'=>'龙门加工中心','active'=>'','url'=>['Product/List-5']],
							['label'=>'瑞士型车削中心','active'=>'','url'=>['Product/List-5']],
						]
					]
				]
			],

			[
				'title' => 'EC系列车床',
				'elementID' => 1,
				'data' => [
						['label'=>'热处理设备','active'=>'','url'=>['Product/List-5']],
						['label'=>'清洗机','active'=>'','url'=>['Product/List-5']],
						['label'=>'数控拉床','active'=>'','url'=>['Product/List-5']],
						['label'=>'抛光机','active'=>'','url'=>['Product/List-5']],
						['label'=>'专用设备','active'=>'','url'=>['Product/List-5']],
						['label'=>'试验设备','active'=>'','url'=>['Product/List-5']]
				]
			],

			[
				'title' => 'BS系列车床',
				'elementID' => 2,
				'data' => [
						['label'=>'热处理设备','active'=>'','url'=>['Product/List-5']],
						['label'=>'清洗机','active'=>'','url'=>['Product/List-5']],
						['label'=>'数控拉床','active'=>'','url'=>['Product/List-5']]
				]
			],

			[
				'title' => 'BS系列加工中心',
				'elementID' => 3,
				'data' => [
						['label'=>'热处理设备','active'=>'','url'=>['Product/List-5']],
						['label'=>'清洗机','active'=>'','url'=>['Product/List-5']],
						['label'=>'数控拉床','active'=>'','url'=>['Product/List-5']]
				]
			]

		];

	}

	public function panel_en() {
		return [

			[
				'title' => 'EM系列加工中心',
				'in' => 'in',
				'elementID' => 0,
				'data' => [
					[
						'label' => '韩国产', 
						'active'=>'active',
						'url' => ['Product/List-5'],
						'items' => [
							['label'=>'车削中心','active'=>'','url'=>['Product/List-5']],
							['label'=>'加工中心','active'=>'','url'=>['Product/List-5']],
							['label'=>'数控镗铣床','active'=>'','url'=>['Product/List-5']],
							['label'=>'龙门加工中心','active'=>'','url'=>['Product/List-5']],
							['label'=>'瑞士型车削中心','active'=>'','url'=>['Product/List-5']],
						]
					]
				]
			],

			[
				'title' => 'EC系列车床',
				'elementID' => 1,
				'data' => [
						['label'=>'热处理设备','active'=>'','url'=>['Product/List-5']],
						['label'=>'清洗机','active'=>'','url'=>['Product/List-5']],
						['label'=>'数控拉床','active'=>'','url'=>['Product/List-5']],
						['label'=>'抛光机','active'=>'','url'=>['Product/List-5']],
						['label'=>'专用设备','active'=>'','url'=>['Product/List-5']],
						['label'=>'试验设备','active'=>'','url'=>['Product/List-5']]
				]
			],

			[
				'title' => 'BS Center',
				'elementID' => 2,
				'data' => [
						['label'=>'热处理设备','active'=>'','url'=>['Product/List-5']],
						['label'=>'清洗机','active'=>'','url'=>['Product/List-5']],
						['label'=>'数控拉床','active'=>'','url'=>['Product/List-5']]
				]
			],

			[
				'title' => 'Center',
				'elementID' => 3,
				'data' => [
						['label'=>'热处理设备','active'=>'','url'=>['Product/List-5']],
						['label'=>'清洗机','active'=>'','url'=>['Product/List-5']],
						['label'=>'数控拉床','active'=>'','url'=>['Product/List-5']]
				]
			]

		];
	}

	public function panel() {
		switch (Yii::$app->language) {
			case 'zh-CN':
				return $this->panel_zh_CN();
				break;
			case 'en':
				return $this->panel_en();
				break;
		}
	}

	public function info() {
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