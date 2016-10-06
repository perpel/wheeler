<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Index */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '首页模块', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="index-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确定删除?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            [
                'label' => '图片',
                'format' => 'raw',
                'value' => Html::img(Yii::getAlias("@wheeler") . '/uploads/product/index/' . $model->img, ['width'=>180])
            ],
            'type',
            'limit',
            'lgn_id',
            'order',
        ],
    ]) ?>

</div>
