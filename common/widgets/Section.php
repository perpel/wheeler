<?php
namespace common\widgets;

use Yii;
use yii\helpers\Html;

class Section extends \yii\bootstrap\Widget {

    public function run() {
        $info = new \common\models\Index();
    	return $this->render('section', [
            'type1' => $info->section(1),
            'type2' => $info->section(2),
    		'type3' => $info->section(3),
    		'type4' => $info->section(4),
    	]);
    	
    }

}