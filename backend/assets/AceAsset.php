<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AceAsset extends AssetBundle
{
    
    public $sourcePath = '@bower/ace';
    public $css = [
        'assets/css/bootstrap.min.css',
        'assets/font-awesome/4.5.0/css/font-awesome.min.css',
        'assets/css/fonts.googleapis.com.css',
        'assets/css/ace.min.css',
        'assets/css/ace-part2.min.css',
    ];
    public $js = [
    ];
}


