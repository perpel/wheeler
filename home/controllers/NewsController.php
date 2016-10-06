<?php
namespace home\controllers;

use Yii;
use yii\web\Controller;
use common\models\News;

/**
 * Site controller
 */
class NewsController extends Controller
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
        $news = new News();
        $type = Yii::$app->request->get('type', 1);

        // $list = $news->newsList($type);
        // var_dump($list);die;

        if ($detail = Yii::$app->request->get('detail')) {
            return $this->render('detail', [
                'list'  => $news->newsDetail($detail)
            ]);
        } else {
            return $this->render('index', [
                'list'  => $news->newsList($type)
            ]);
        }
    }

}
