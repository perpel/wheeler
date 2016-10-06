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
    public $sourcePath = '@common/assets/ace/assets';
    //public $sourcePath = '@wheeler-assets/ace';
    public $css = [
        'font-awesome/4.5.0/css/font-awesome.min.css',
        'css/fonts.googleapis.com.css',
        'css/ace.min.css',
        'css/ace-rtl.min.css'
    ];
    public $js = [];
}


