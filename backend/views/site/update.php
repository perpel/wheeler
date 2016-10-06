<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Index */

$this->title = '更新模块: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '首页模块', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '更新';
?>
<div class="index-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
