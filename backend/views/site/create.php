<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Index */

$this->title = '新建模块';
$this->params['breadcrumbs'][] = ['label' => '首页模块', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="index-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
