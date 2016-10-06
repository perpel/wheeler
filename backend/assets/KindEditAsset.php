<?php
namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class KindEditAsset extends AssetBundle
{
    public $sourcePath = '@common/assets/kindeditor';
    public $css = [
        'themes/default/default.css',
    ];
    public $js = [
    	'kindeditor-min.js',
    	'lang/zh_CN.js'
    ];
}