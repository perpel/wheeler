<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Language;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchProductCategory */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '产品分类列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新建产品分类', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'name',
            'url:url',
            'parent_id',
            'order',
            // 'type',
            [
                'label' => '语言',
                'format' => 'raw',
                'value' => function ($data) {
                    return Html::tag('i', Language::findNameByID($data->lgn_id));
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
