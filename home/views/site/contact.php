<?php
use yii\helpers\Html;
use common\widgets\Contact;

$this->title = Yii::t('yii', 'Contact');
$this->params['breadcrumbs'][] = $this->title;
?>


<?= Contact::widget();?>