<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\About */

$this->title = '创建 About';
$this->params['breadcrumbs'][] = ['label' => '关于我们', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
