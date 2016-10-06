<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Language;
use backend\assets\EditAsset;

EditAsset::register($this);

/* @var $this yii\web\View */
/* @var $model common\models\News */
/* @var $form yii\widgets\ActiveForm */
$js = <<<JS
    var editor;
    KindEditor.ready(function(K) {
        editor = K.create('.KindEditor', {
            resizeType : 1,
            width: '100%',
            allowPreviewEmoticons : false,
            allowImageUpload : true,
            items : ['source', '|', 'fullscreen', '|', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
                'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
                'insertunorderedlist', '|', 'emoticons', 'image', 'link']
        });
    });
JS;

echo $this->registerJS($js);
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6, 'class'=>'KindEditor']) ?>

    <?= $form->field($model, 'order')->textInput() ?>

    <?= $form->field($model, 'lgn_id')->dropDownList(Language::dropDownList()) ?>

    <?= $form->field($model, 'isrecom')->dropDownList($model->recomList()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '创建' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>