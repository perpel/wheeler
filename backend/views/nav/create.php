<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Nav */

$this->title = '创建新导航';
$this->params['breadcrumbs'][] = ['label' => '导航列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nav-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
