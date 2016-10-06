<?php
namespace home\controllers;

use Yii;
use yii\web\Controller;
use common\models\Program;

/**
 * Site controller
 */
class ProgramController extends Controller
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
    
    /**
     * Displays homepage.
     * 
     * @return mixed
     */
    public function actionIndex() 
    {
        $news = new Program();

        if ($detail = Yii::$app->request->get('detail')) {
            return $this->render('detail', [
                'list'  => $news->programDetail($detail)
            ]);
        } else {
            return $this->render('index', [
                'list'  => $news->programList()
            ]);
        }
    }

}
