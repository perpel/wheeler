<?php
namespace home\models;

use Yii;
use yii\base\Model;

class Section extends Model {

	public function zh_CN() {
		return [

			'machine' => [
				'title' => '蕙勒机床',
				'more' => '更多',
				'url' => '#',
				'items' => [
					[
						'src' => 'machine_4.jpg', 
						'alt' => 'wheeler', 
						'items' => [
							['label' => '韩国产', 'href'=>'#'],
							['label' => '中国产', 'href'=>'#'],
						]
					]
				]
			],

			'equipment' => [
				'title' => '成套设备',
				'more' => '更多',
				'url' => '#',
				'items' => [
					[
						'src' => 'machine_1.jpg', 
						'alt' => 'wheeler', 
						'items' => [
							['label' => '热处理设备', 'href'=>'#'],
							['label' => '清洗机', 'href'=>'#'],
							['label' => '数控拉床', 'href'=>'#'],
						]
					]
				]
			],

			'automent' => [
				'title' => '自动化',
				'more' => '更多',
				'url' => '#',
				'items' => [
					[
						'src' => 'machine_3.jpg', 
						'alt' => 'wheeler', 
						'items' => [
							['label' => '机床&机器人集成', 'href'=>'#'],
							['label' => '自动化装配线', 'href'=>'#'],
						]
					]
				]
			],

			'factory' => [
				'title' => '数字化工厂',
				'more' => '更多',
				'url' => '#',
				'items' => [
					[
						'src' => 'machine_5.jpg', 
						'alt' => 'wheeler', 
						'p' => '主要为制造业工厂智能化、自动化提供整体解决方案，包括各类设备的连接、工厂流程优化、设备集成、设备控制、产品追溯……'
					]
				]
			],


			'news' => [
				'title' => '新闻动态',
				'more' => '更多',
				'url' => '#',
				'items' => [
					[
						'src' => 'news.jpg', 
						'alt' => 'wheeler', 
						'items' => [
							['label' => 'G20 2016 : 智能制造来了，你准备好了吗？', 'href'=>'#'],
							['label' => 'IMTS 2016斗山机床将重点展示VCF 850系列', 'href'=>'#'],
							['label' => '还用老方法生产差速器？OUT啦！看新技术如何降本增效', 'href'=>'#'],
							['label' => '斗山机床打造汽车最强“心”', 'href'=>'#'],
							['label' => '绅名科技 助推齿轮产业转型升级', 'href'=>'#']
						]
					]
				]
			],


			'case' => [
				'title' => '应用案例',
				'more' => '更多',
				'url' => '#',
				'items' => [
					[
						'src' => 'case.jpg', 
						'alt' => 'wheeler', 
						'items' => [
							['label' => '斗山机床', 'href'=>'#'],
							['label' => '机床&机器人集成', 'href'=>'#'],
							['label' => '自动化装配线', 'href'=>'#'],
							['label' => '数字化工厂', 'href'=>'#'],
							['label' => '绅名科技 成套装备', 'href'=>'#']
						]
					]
				]
			],

		];
	}

	public function en() {
		return [

			'machine' => [
				'title' => 'Machine',
				'more' => 'More',
				'url' => '#',
				'items' => [
					[
						'src' => 'machine_4.jpg', 
						'alt' => 'wheeler', 
						'items' => [
							['label' => 'Korean', 'href'=>'#'],
							['label' => 'Chinese', 'href'=>'#'],
						]
					]
				]
			],

			'equipment' => [
				'title' => 'Equipment',
				'more' => 'More',
				'url' => '#',
				'items' => [
					[
						'src' => 'machine_1.jpg', 
						'alt' => 'wheeler', 
						'items' => [
							['label' => 'Heat Treatment Equipment', 'href'=>'#'],
							['label' => 'washing machine', 'href'=>'#'],
							['label' => 'CNC broaching', 'href'=>'#'],
						]
					]
				]
			],

			'automent' => [
				'title' => 'Automent',
				'more' => 'More',
				'url' => '#',
				'items' => [
					[
						'src' => 'machine_3.jpg', 
						'alt' => 'wheeler', 
						'items' => [
							['label' => 'Machine & Robot Integration', 'href'=>'#'],
							['label' => 'Automated Assembly Line', 'href'=>'#'],
						]
					]
				]
			],

			'factory' => [
				'title' => 'Digital Factory',
				'more' => 'More',
				'url' => '#',
				'items' => [
					[
						'src' => 'machine_5.jpg', 
						'alt' => 'wheeler', 
						'p' => 'Mainly manufacturing plant intelligence, automation provide total solutions, including various types of equipment connected to the plant process optimization ......'
					]
				]
			],


			'news' => [
				'title' => 'News',
				'more' => 'More',
				'url' => '#',
				'items' => [
					[
						'src' => 'news.jpg', 
						'alt' => 'wheeler', 
						'items' => [
							['label' => 'G20 2016: intelligent manufacturing coming', 'href'=>'#'],
							['label' => 'IMTS 2016 Doosan machine tool will highlight the VCF 850 series', 'href'=>'#'],
							['label' => 'Still use the old method of producing differential?', 'href'=>'#'],
							['label' => 'Doosan machine tools to create the most powerful car "heart"', 'href'=>'#'],
							['label' => 'Prestigious science and technology to boost industrial restructuring and upgrading gear', 'href'=>'#']
						]
					]
				]
			],


			'case' => [
				'title' => 'Applications',
				'more' => 'More',
				'url' => '#',
				'items' => [
					[
						'src' => 'case.jpg', 
						'alt' => 'wheeler', 
						'items' => [
							['label' => 'Machie', 'href'=>'#'],
							['label' => 'Machine & Robot Integration', 'href'=>'#']
						]
					]
				]
			],

		];
	}

	public function sectionInfo() {
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
