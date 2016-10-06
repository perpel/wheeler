<?php
namespace common\widgets;

use Yii;
use yii\helpers\Html;

class Panel extends \yii\bootstrap\Widget {

	public $title = '';
	public $elementID = 0;
	public $in = '';

	public $data = [];

	protected function gengerateID ($prefix = '') {
		return $prefix . 'collapse' . $this->elementID;
	}

	protected function renderTitle() {
		return Html::tag('div', 
				Html::tag('h4', 
					Html::a($this->title, 
						$this->gengerateID('#'),
						['data-toggle'=>'collapse','data-parent'=>'#accordion']),
				['class'=>'panel-title']),
			['class'=>'panel-heading']);
	}

	protected function renderBody() {
		return Html::tag('div', 
			$this->renderUl(), 
		['class'=>'panel-body']);
	}

	public function run() {
		//return $this->render('panel');
		echo Html::beginTag('div', ['class'=>'panel panel-default']);
			echo $this->renderTitle();
			echo Html::beginTag('div', ['class'=>'panel-collapse collapse ' . $this->in, 'id'=>$this->gengerateID()]);
			echo $this->renderBody();
			echo Html::endTag('div');
		echo Html::endTag('div');
	}

	protected function renderUl() {
		return Html::ul($this->data, ['item'=>function($item, $index){
			if (isset($item['items'])) {
				return Html::tag('li', 
				Html::a(
					Html::tag('i', '', ['class'=>'glyphicon glyphicon-chevron-down']) . ' ' . $item['label'], 
					$item['url']) . 
				Html::ul($item['items'], ['item'=>function($item, $index){
							return Html::tag('li', 
								Html::a(
									Html::tag('i', '', ['class'=>'glyphicon glyphicon-chevron-right']) . ' ' . $item['label'], 
									$item['url']),
								['class'=>$item['active']]);
					}]),
				['class'=>$item['active']]);
			} else {
				return Html::tag('li', 
				Html::a(
					Html::tag('i', '', ['class'=>'glyphicon glyphicon-chevron-right']) . ' ' . $item['label'], 
					$item['url']),
				['class'=>$item['active']]);
			}
		}]);
	}


}