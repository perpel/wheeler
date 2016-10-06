<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchIndex */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '首页模块';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="index-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('创建新模块', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'type',
            'limit',
            'lgn_id',
            // 'order',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
