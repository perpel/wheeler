<?php

namespace common\libs;

use Yii;
use yii\base\Action;
use yii\base\ActionFilter;

class LanguageFilter extends ActionFilter {

    public function beforeAction($action) {
    	$session = Yii::$app->session;
        Yii::$app->language = $session->get("language", "zh-CN");
        return true;
    }

}