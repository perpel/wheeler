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
		<?php foreach($list as $k => $v):?>
			<div class="panel-body">
				<div class='col-sm-5'>
					<div class="thumbnail">
		                <img src="<?= Yii::getAlias('@wheeler')?>/uploads/product/<?= $v['img']?>" 
		                 alt="<?= $v['name']?>">
		            </div>
				</div>
				<div class="col-sm-7">
					<div class="thumbnail-caption">
						<h4 class="media-heading"><?= Html::a($v['name'], [$v['url'], 'detail'=>$v['id'], 'id'=>$v['type_id']]);?></h4>
		                <p class="content"><?= $v['desc']?></p>
		            </div>
				</div>
			</div>
		<?php endforeach;?>
	</div>

</div>	

</div>

