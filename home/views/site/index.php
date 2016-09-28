<?php
use common\widgets\Banner;
use common\widgets\Section;

$this->title = Yii::t('app', 'home');
?>


<div class="site-index">

    <!--begin banner-->
    <?= Banner::widget()?>
    <!--end banner-->
    <?= Section::widget()?>
 
</div>