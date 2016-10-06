<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ProductCategory */

$this->title = '新建产品分类';
$this->params['breadcrumbs'][] = ['label' => '产品分类列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
