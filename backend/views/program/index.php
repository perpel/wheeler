<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchProgram */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '合作项目列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="program-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('创建项目', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'desc',
            'content:ntext',
            'url:url',
            // 'created_at',
            // 'updated_at',
            // 'order',
            // 'type_id',
            // 'lgn_id',
            // 'isrecom',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
