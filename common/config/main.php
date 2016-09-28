<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'i18n' => [ 
	        'translations' => [ 
	            'app' => [ 
	                'class' => 'yii\i18n\PhpMessageSource', 
	                'basePath' => '@common/libs/language',
	                'fileMap' => [
	                     'app' => 'app.php', 
	                     //'app/error' => 'error.php', 
	                ],
	            ],
	            'yii' => [ 
	                'class' => 'yii\i18n\PhpMessageSource', 
	                'basePath' => '@common/libs/language',
	                'fileMap' => [
	                     'yii' => 'yii.php', 
	                ],
	            ],
	            'model' => [ 
	                'class' => 'yii\i18n\PhpMessageSource', 
	                'basePath' => '@common/libs/language',
	                'fileMap' => [
	                     'model' => 'model.php', 
	                ],
	            ],
	        ]
	    ], 
    ],

    

];
