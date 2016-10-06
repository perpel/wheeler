<?php
use yii\helpers\Html;
use common\widgets\Panel;
$this->title = Yii::t('app', 'proudctTitle');
// $this->params['breadcrumbs'][] = ['label'=>'产品展示','url'=>['product/index']];
// $this->params['breadcrumbs'][] = $this->title;
// $this->params['breadcrumbs'][] = '产品列表';

echo $this->registerJs($js);
?>

<div class="row">

<div class="col-sm-4">
	
	<?= Html::beginTag('div', ['class'=>'panel-group','id'=>'accordion']);?>

		<?php foreach($panel as $k => $v):?>
			<!--begin navbar-->
			<?= Panel::widget($v)?>
			<!--end navbar-->
		<?php endforeach;?>

	<?= Html::endTag('div');?>

</div>

<div class="col-sm-8">
	<div class="panel panel-default">
		<!-- Default panel contents -->
		<div class="panel-heading">
			<strong></strong>
		</div>
		<div class="panel-body">
			<div class="col-sm-12">
				<div class="thumbnail-caption" style="height: auto;">
					<h4 class="media-heading"><?= $list['name']?></h4>
	                <p class="content"><?= $list['content']?></p>
	            </div>
			</div>
		</div>
	</div>

</div>	

</div>