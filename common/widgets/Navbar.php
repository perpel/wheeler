<?php
namespace common\widgets;

use Yii;
use yii\helpers\Html;

class Navbar extends \yii\bootstrap\Widget {

	public $list = [];

	public function run() {
		return $this->render('navbar', [
			'list' => $this->list
		]);
	}

}