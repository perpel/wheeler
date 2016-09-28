<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>

<?php
$css = <<<CSS
    body {
        background-image: url(img/error.png);
        background-size:100%;
        background-position: center center;
        background-repeat: no-repeat;
    }
    .site-error {
        padding-top: 30px;
    }
    .site-error h1 {
        text-align: center;
        font-size: 2em;
    }
CSS;

echo $this->registerCss($css);
?>

<div class="site-error">
    <h1><?= Html::encode($this->title) ?></h1>
    <p><?= nl2br(Html::encode($message))?><p>
</div>