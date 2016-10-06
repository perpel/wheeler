<?php
namespace home\controllers;

use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{

    public function behaviors() {

        return [
            'language' => [
                'class' => 'common\libs\LanguageFilter'
            ],
            // [
            //     'class' => 'yii\filters\PageCache',
            //     'dependency' => [
            //         'class' => 'yii\caching\ExpressionDependency',
            //         'expression' => Yii::$app->session->get('language')
            //     ] 
            // ],
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
        
        return $this->render('index');
    }

    public function actionLanguage() {
        $lgn = Yii::$app->request->get('lgn', 'zh-CN');
        if (!in_array($lgn, ['zh-CN', 'en'])) $lgn = 'zh-CN';
        Yii::$app->session->set('language', $lgn);
        return $this->redirect(['index']);
    }

    public function actionContact() {
        return $this->render('contact');
    }



   
}
