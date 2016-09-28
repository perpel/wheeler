<?php
namespace common\widgets;
use Yii;

class Contact extends \yii\bootstrap\Widget {

	public $contact = [];

	public function init() {
		parent::init();
		$contact = new \home\models\Contact();
		$this->contact = $contact->contactInfo();
	}

    public function run() {
        return $this->render('contact', [
            'contact' => $this->contact
        ]);
    }

}