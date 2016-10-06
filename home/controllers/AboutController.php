<?php
namespace home\controllers;

use Yii;
use yii\web\Controller;
use common\models\News;

use common\models\About;

/**
 * Site controller
 */
class AboutController extends Controller
{

     public function behaviors() {

        return [
            'language' => [
                'class' => 'common\libs\LanguageFilter'
            ]
        ];

    }

    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ]
        ];
    }

    public function actionCompany() {
        return $this->render('index', [
            'list' => About::findByType(1)
        ]);
    }


    public function actionCulture() {
        return $this->render('index', [
            'list' => About::findByType(2)
        ]);
    }

    public function actionAdvantage() {
        return $this->render('index', [
            'list' => About::findByType(3)
        ]);
    }

    public function actionMarketing() {
        return $this->render('index', [
            'list' => About::findByType(4)
        ]);
    }

    public function actionCase() {
        return $this->render('index', [
            'list' => About::findByType(5)
        ]);
    }

    public function actionBrand() {
        return $this->render('index', [
            'list' => About::findByType(6)
        ]);
    }

    public function actionDuty() {
        return $this->render('index', [
            'list' => About::findByType(7)
        ]);
    }

    public function actionLocation() {
        return $this->render('index', [
            'list' => About::findByType(8)
        ]);
    }

    public function actionRecruitment() {
        return $this->render('index', [
            'list' => About::findByType(9)
        ]);
    }

    public function actionMemorabilia() {
        return $this->render('index', [
            'list' => About::findByType(10)
        ]);
    }

}
    