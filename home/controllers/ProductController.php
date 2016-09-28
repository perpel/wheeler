<?php
namespace home\controllers;

use Yii;
use yii\web\Controller;
use home\models\product;

/**
 * Site controller
 */
class ProductController extends Controller
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
    public function actionIndex() {
        $product = new Product();
        return $this->render('index', [
            'panel' => $product->panel(),
        ]);
    }

   
}
