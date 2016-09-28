<?php
namespace common\widgets;
use Yii;

class Banner extends \yii\bootstrap\Widget {

	public $banner = [];

	public function init() {
		parent::init();
		$banner = new \home\models\Banner();
		$this->banner = $banner->bannerInfo();
	}

    public function run() {
        return $this->render('banner', [
            'banner' => $this->banner
        ]);
    	// echo Html::beginTag('div', ['id'=>'myCarousel', 'class'=>'carousel slide']);
    	// 	// ol
    	// 	echo Html::ol($this->banner, ['item'=>function($item, $index){
    	// 		$active = ($index == 0)?'active':'';
    	// 		return Html::tag('li', '', [
    	// 			'data-target'=>'#myCarousel',
    	// 			'data-slide-to'=>$index,
    	// 			'class'=>$active]);
    	// 	}, 'class'=>'carousel-indicators']);
    		
    	// 	// carousel 轮播（Carousel）项目
    	// 	echo Html::beginTag('div', ['class'=>'carousel-inner']);
    	// 		foreach ($this->banner as $key => $value) {
    	// 			$img = Html::img(
    	// 				Yii::$app->request->hostinfo . '/uploads/banner/' . $value['src'],
    	// 				['alt'=>$value['alt']]
    	// 			);
    	// 			if ($key == 0) {
    	// 				echo Html::tag('div', $img, ['class'=>'item active']);
    	// 			} else {
    	// 				echo Html::tag('div', $img, ['class'=>'item']);
    	// 			}
    	// 		}
    	// 	echo Html::endTag('div');

    	// 	//轮播（Carousel）导航
    	// 	echo Html::a(
    	// 		Html::tag('span', '&lsaquo;') . 
     //            Html::img('#'), 
    	// 		'#myCarousel', 
    	// 		['data-slide'=>'prev', 'class'=>'carousel-control left text-center']);

    	// 	echo Html::a(
    	// 		Html::tag('span', '&rsaquo;') .
     //            Html::img('#'), 
    	// 		'#myCarousel', 
    	// 		['data-slide'=>'next', 'class'=>'carousel-control right text-center']);
      
    	// echo Html::endTag('div');
    }


}



