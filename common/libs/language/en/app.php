<?php
return [
	'home' => 'Wheeler Technology',
	'address' => ' No.33,Hongken Road,Xiaoshan District,Hangzhou,P.R.China',
	'tel' => ' 86-571-8369 5836',
	'nav' => [
		['label' => 'Home', 'url' => ['/site/index']],
		[
			'label' => 'About Us',
			'items' => [
				['label' => 'Company', 'url' => ['/site/contact']],
				['label' => 'Corporate culture', 'url' => ['/site/contact']],
				['label' => 'Our strengths', 'url' => ['/site/contact']],
				['label' => 'Sales and Marketing', 'url' => ['/site/contact']],
				['label' => 'products and solutions', 'url' => ['/site/contact']],
				['label' => 'brand', 'url' => ['/site/contact']],
				['label' => 'social responsibility', 'url' => ['/site/contact']],
				['label' => 'Job', 'url' => ['/site/contact']],
				['label' => 'Information', 'url' => ['/site/contact']],
				['label' => 'Events', 'url' => ['/site/contact']],
			]
		],
		[
			'label' => 'Machine Tools',
			'items' => [
				['label' => 'EM Series Lathe', 'url' => ['/product/index']],
				['label' => 'EC Series Lathe', 'url' => ['/product/equipment']],
				['label' => 'BS Series Lathe', 'url' => ['/site/contact']],
				['label' => 'BS Series Lathe', 'url' => ['/site/contact']],
			]
		],
		[
			'label' => 'Automated Systems',
			'items' => [
				[
					'label' => 'of cooperation projects with the library card LOH Le', 
					'url' => ['/site/contact']
				],
			]
		],
		[
			'label' => 'News',
			'items' => [
				['label' => 'News', 'url' => ['/site/contact']],
				['label' => 'Company Industry', 'url' => ['/site/contact']],
				['label' => 'Internal Dynamics', 'url' => ['/site/contact']],
			]
		],
		['label' => 'Information', 'url' => ['/site/contact']],
		[
			'label' => 'E-mail',
			'url' => 'http://qiye.163.com/login/',
			'linkOptions' => ['target' => '_ blank']
		],
		[
			'label' => 'Language',
			'items' => [
				['label' => 'Simplified Chinese', 'url' => ['/site/language', 'lgn' => 'zh-CN']],
				['label' => 'English', 'url' => ['/site/language', 'lgn' => 'en']]
			]
		]
	],

	'categoryMachineBed' => [
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
		],
		[
			'label' => '中国产', 
			'active'=>'active',
			'url' => ['Product/List-5'],
			'items' => [
				['label'=>'数控车床','active'=>'','url'=>['Product/List-5']],
				['label'=>'加工中心','active'=>'','url'=>['Product/List-5']],
			]
		]
	],

	'categoryEquipment' => [
		['label'=>'热处理设备','active'=>'','url'=>['Product/List-5']],
		['label'=>'清洗机','active'=>'','url'=>['Product/List-5']],
		['label'=>'数控拉床','active'=>'','url'=>['Product/List-5']],
		['label'=>'抛光机','active'=>'','url'=>['Product/List-5']],
		['label'=>'专用设备','active'=>'','url'=>['Product/List-5']],
		['label'=>'试验设备','active'=>'','url'=>['Product/List-5']],
	],

	'categoryAuto' => [
		['label'=>'机床&机器人集成','active'=>'','url'=>['Product/List-5']],
		[
			'label' => '自动化装配线', 
			'active'=>'active',
			'url' => ['Product/List-5'],
			'items' => [
				['label'=>'adsf','active'=>'','url'=>['Product/List-5']],
				['label'=>'adsf','active'=>'','url'=>['Product/List-5']],
				['label'=>'adsf','active'=>'','url'=>['Product/List-5']],
			]
		],
	],

	'categoryFactory' => [
		['label'=>'asdfSDFA','active'=>'','url'=>['Product/List-5']],
		['label'=>'sadfdsaf','active'=>'','url'=>['Product/List-5']],
		['label'=>'fdasf','active'=>'','url'=>['Product/List-5']],
	],





];