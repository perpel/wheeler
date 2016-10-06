<?php
namespace home\controllers;

use Yii;
use yii\web\Controller;
use common\models\ProductCategory;

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
    public function actionMachine() 
    {
        $product = new ProductCategory();
        $id = Yii::$app->request->get('id', $product->defaultCategory());
        $product->getRootById($id);
        $in = $product->rootIn;
        $js = "$('#collapse{$in}').addClass('in')";
        if ($detail = Yii::$app->request->get('detail')) {
            return $this->render('detail', [
                'panel' => $product->menus('machine'),
                'list'  => $product->productDetail($detail),
                'js' => $js
            ]);
        } else {
            return $this->render('index', [
                'panel' => $product->menus('machine'),
                'list'  => $product->productList($id),
                'js' => $js
            ]);
        }
    }

   
}
