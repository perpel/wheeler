<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Nav;
use common\models\Language;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchNav */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '导航管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nav-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新建导航', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            [
                'label' => '上级导航',
                // 'filter' => Html::activeTextInput($searchModel, 'parent_id', ['class' => 'form-control']),
                'format' => 'raw',
                'value' => function ($data) {
                    return Html::tag('i', Nav::findNameByID($data->parent_id));
                },
            ],
            [
                'label' => '语言',
                'format' => 'raw',
                'value' => function ($data) {
                    return Html::tag('i', Language::findNameByID($data->lgn_id));
                },
            ],
            'url:url',
            // 'des',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
