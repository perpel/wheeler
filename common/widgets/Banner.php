<?php
namespace common\widgets;
use Yii;

class Banner extends \yii\bootstrap\Widget {

	public $banner = [];

	public function init() {
		parent::init();
		$banner = new \common\models\Banner();
		$this->banner = $banner->bannerInfo();
	}

    public function run() {
        return $this->render('banner', [
            'banner' => $this->banner
        ]);
    }


}



