<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Program */

$this->title = '创建合作项目';
$this->params['breadcrumbs'][] = ['label' => '合作项目列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="program-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
