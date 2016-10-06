<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Language;

/* @var $this yii\web\View */
/* @var $model common\models\Index */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="index-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->dropDownList($model->template) ?>

    <?= $form->field($model, 'limit')->textInput() ?>

    <?= $form->field($model, 'lgn_id')->dropDownList(Language::dropDownList()) ?>

    <?= $form->field($model, 'order')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '创建' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
