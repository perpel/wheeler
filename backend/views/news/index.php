<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchNews */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '新闻中心';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('创建新闻', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'name',
            'desc',
            //'content:ntext',
            //'url:url',
            // 'created_at',
            'updated_at',
            // 'order',
            'lgn_id',
            'type_id',
            //'isrecom',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
