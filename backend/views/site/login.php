<?php

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?php

echo $this->registerCssFile('@web/css/login.css');
?>


<div class="tyg-div">
    <ul>
        <li>让</li>
        <li><div style="margin-left:20px;">数</div></li>
        <li><div style="margin-left:40px;">据</div></li>
        <li><div style="margin-left:60px;">改</div></li>
        <li><div style="margin-left:80px;">变</div></li>
        <li><div style="margin-left:100px;">生</div></li>
        <li><div style="margin-left:120px;">活</div></li>
    </ul>
</div> 
<div id="contPar" class="contPar">
    <div id="page1"  style="z-index:1;">
        <div class="title0">行业智慧能力平台</div>
        <div class="title1">旅游、交通、气象、公共安全、大数据</div>
        <div class="imgGroug">
            <ul>
                <img alt="" class="img0 png" src="./img/page1_0.png">
                <img alt="" class="img1 png" src="./img/page1_1.png">
                <img alt="" class="img2 png" src="./img/page1_2.png">
            </ul>
        </div>

        
        
    </div>
</div>
<div class="tyg-div-denglv">
    <div class="tyg-div-form">
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => false]) ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div class="form-group">
                    <?= Html::submitButton('Login', [
                            'class' => 'btn btn-primary', 
                            'name' => 'login-button'
                    ]) ?>
                </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>