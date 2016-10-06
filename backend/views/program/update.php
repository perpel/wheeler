<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Program */

$this->title = '更新合作项目: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '合作项目列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '更新';
?>
<div class="program-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
