<?php
namespace common\widgets;

use Yii;
use yii\helpers\Html;

class Section extends \yii\bootstrap\Widget {

	public $info = [];

	public function init() {
		parent::init();
		$banner = new \home\models\Section();
		$this->info = $banner->sectionInfo();
	}

    public function run() {
    	return $this->render('section', [
    		'machine' => $this->info['machine'],
    		'equipment' => $this->info['equipment'],
    		'automent' => $this->info['automent'],
    		'factory' => $this->info['factory'],
    		'news' => $this->info['news'],
    		'case' => $this->info['case']
    	]);
    	
    }

}