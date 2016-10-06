<?php

use backend\assets\LoginAsset;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = Yii::t('model', 'loginTitle');

LoginAsset::register($this);
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
<body class="login-layout">
<?php $this->beginBody() ?>

        <div class="main-container">
            <div class="main-content">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="login-container">
                            <div class="center">
                                <h1>
                                    <i class="ace-icon fa fa-leaf green"></i>
                                    <span class="red">
                                        <?= Yii::t('app', 'home')?>
                                    </span>
                                    <span class="white" id="id-text2">
                                        <?= Yii::t('model', 'loginTitle')?>
                                    </span>
                                </h1>
                                <h4 class="blue" id="id-company-text">
                                    &copy; <?= Yii::t('app', 'home')?>
                                </h4>
                            </div>

                            <div class="space-6"></div>

                            <div class="position-relative">
                                <div id="login-box" class="login-box visible widget-box no-border">
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <h4 class="header blue lighter bigger">
                                                <i class="ace-icon fa fa-coffee green"></i>
                                                <?= Yii::t('model', 'loginMsg')?>
                                            </h4>

                                            <div class="space-6"></div>

            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <fieldset>

                <?= $form->field($model, 'username', ['template'=> "<label class=\"block clearfix\">\n<span class=\"block input-icon input-icon-right\">{input}<i class=\"ace-icon fa fa-user\"></i></span>\n{error}</label>"])->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password', ['template'=> "<label class=\"block clearfix\">\n<span class=\"block input-icon input-icon-right\">{input}<i class=\"ace-icon fa fa-lock\"></i></span>\n{error}</label>"])->passwordInput() ?>

                <div class="space"></div>

               <div class="clearfix">
                   <?= $form->field($model, 'rememberMe', [
                        'options' => [
                            'class' => 'inline'
                        ]
                   ])->checkbox() ?>
                    
                    <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                        <i class="ace-icon fa fa-key"></i>
                        <span class="bigger-110"><?= Yii::t('model', 'loginSubmitTitle')?></span>
                    </button>
                </div>
                <div class="space-4"></div>

            </fieldset>
            <?php ActiveForm::end(); ?>

                                    
                <!-- <div class="social-or-login center">
                    <span class="bigger-110">Or Login Using</span>
                </div> -->

                <div class="space-6"></div>

                <div class="social-login center">
                    <!-- <a class="btn btn-primary">
                        <i class="ace-icon fa fa-facebook"></i>
                    </a>

                    <a class="btn btn-info">
                        <i class="ace-icon fa fa-twitter"></i>
                    </a>

                    <a class="btn btn-danger">
                        <i class="ace-icon fa fa-google-plus"></i>
                    </a> -->
                </div>
            </div><!-- /.widget-main -->

                        <div class="toolbar clearfix">
                            <!-- <div>
                                <a href="#" data-target="#forgot-box" class="forgot-password-link">
                                    <i class="ace-icon fa fa-arrow-left"></i>
                                    I forgot my password
                                </a>
                            </div>

                            <div>
                                <a href="#" data-target="#signup-box" class="user-signup-link">
                                    I want to register
                                    <i class="ace-icon fa fa-arrow-right"></i>
                                </a>
                            </div> -->
                        </div>
                    </div><!-- /.widget-body -->
                </div><!-- /.login-box -->

                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.main-content -->
        </div><!-- /.main-container -->

    <?php
        $js = <<<JS
    
            $(document).on('click', '.toolbar a[data-target]', function(e) {
                e.preventDefault();
                var target = $(this).data('target');
                $('.widget-box.visible').removeClass('visible');//hide others
                $(target).addClass('visible');//show target
             });
            });
            
            
            
            //you don't need this, just used for changing background
            jQuery(function($) {
             $('#btn-login-dark').on('click', function(e) {
                $('body').attr('class', 'login-layout');
                $('#id-text2').attr('class', 'white');
                $('#id-company-text').attr('class', 'blue');
                
                e.preventDefault();
             });
             $('#btn-login-light').on('click', function(e) {
                $('body').attr('class', 'login-layout light-login');
                $('#id-text2').attr('class', 'grey');
                $('#id-company-text').attr('class', 'blue');
                
                e.preventDefault();
             });
             $('#btn-login-blur').on('click', function(e) {
                $('body').attr('class', 'login-layout blur-login');
                $('#id-text2').attr('class', 'white');
                $('#id-company-text').attr('class', 'light-blue');
                
                e.preventDefault();
             });

          
JS;

       echo $this->registerJs($js);
    ?>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>