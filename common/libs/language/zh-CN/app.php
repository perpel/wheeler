<?php
return [
	'home' => '蕙勒科技',
	'address' => ' 地址：杭州市萧山路红肯街道33号',
	'tel' => ' 电话：86-571-8369 5836',
	'nav' => [
	    ['label' => '首页', 'url' => ['/site/index']],
	    [
	        'label' => '关于我们', 
	        'items' => [
	            ['label' => '公司介绍', 'url' => ['/site/contact']],
	            ['label' => '企业文化', 'url' => ['/site/contact']],
	            ['label' => '我们的优势', 'url' => ['/site/contact']],
	            ['label' => '市场与营销', 'url' => ['/site/contact']],
	            ['label' => '产品与解决方案', 'url' => ['/site/contact']],
	            ['label' => '企业品牌', 'url' => ['/site/contact']],
	            ['label' => '社会责任', 'url' => ['/site/contact']],
	            ['label' => '招聘信息', 'url' => ['/site/contact']],
	            ['label' => '联系方式', 'url' => ['/site/contact']],
	            ['label' => '大事记', 'url' => ['/site/contact']],
	        ]
	    ],
	    [
	        'label' => '机床设备', 
	        'items' => [
	            ['label' => 'EM系列加工中心', 'url' => ['/product/index']],
	            ['label' => 'EC系列车床', 'url' => ['/product/equipment']],
	            ['label' => 'BS系列车床', 'url' => ['/site/contact']],
	            ['label' => 'BS系列加工中心', 'url' => ['/site/contact']],
	        ]
	    ],
	    [
	        'label' => '自动化系统',
	        'items' => [
	            ['label' => '蕙勒与库卡的合作项目之一', 'url' => ['/site/contact']],
	        ]
	    ],
	    [   
	        'label' => '新闻中心',
	        'items' => [
	            ['label' => '公司动态', 'url' => ['/site/contact']],
	            ['label' => '公司新闻', 'url' => ['/site/contact']],
	            ['label' => '公司行业', 'url' => ['/site/contact']],
	            ['label' => '内部动态', 'url' => ['/site/contact']],
	        ]
	    ],
	    ['label' => '联系方式', 'url' => ['/site/contact']],
	    [
	    	'label' => '企业邮箱', 
	    	'url' => 'http://qiye.163.com/login/',
	    	'linkOptions' => ['target'=>'_blank']
	    ],
	    [
	    	'label' => '语言',
	    	'items' => [
	    		['label'=>'简体中文', 'url'=>['/site/language', 'lgn'=>'zh-CN']],
	    		['label'=>'英文', 'url'=>['/site/language', 'lgn'=>'en']]
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