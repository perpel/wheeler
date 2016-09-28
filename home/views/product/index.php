<?php
use yii\helpers\Html;
use common\widgets\Panel;

$this->title = '斗山机床';
$this->params['breadcrumbs'][] = ['label'=>'产品展示','url'=>['product/index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['breadcrumbs'][] = '产品列表';
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
			<strong>瑞士型车削中心</strong>
		</div>
		<div class="panel-body">
			<div class='col-sm-5'>
				<div class="thumbnail">
	                <img src="<?= Yii::$app->request->hostinfo?>/uploads/product/machine_5.jpg" 
	                 alt="通用的占位符缩略图">
	            </div>
			</div>
			<div class="col-sm-7">
				<div class="thumbnail-caption">
					<h4 class="media-heading"><a href="/Product/55.html">ST 20G，32G，16GS，20GS</a></h4>
	                <p class="content"> ST 20G，32G，16GS，20GS特点：通过在同一级的高速高生产率。最强大的加工能力。各种人机交互与定制为方便操作的MTB屏幕。实现了手表和医疗设备的超细加工</p>
	            </div>
			</div>
		</div>

		<div class="panel-body">
			<div class='col-sm-5'>
				<div class="thumbnail">
	                <img src="<?= Yii::$app->request->hostinfo?>/uploads/product/machine_5.jpg" 
	                 alt="通用的占位符缩略图">
	            </div>
			</div>
			<div class="col-sm-7">
				<div class="thumbnail-caption">
					<h4 class="media-heading"><a href="/Product/55.html">ST 20G，32G，16GS，20GS</a></h4>
	                <p class="content"> ST 20G，32G，16GS，20GS特点：通过在同一级的高速高生产率。最强大的加工能力。各种人机交互与定制为方便操作的MTB屏幕。实现了手表和医疗设备的超细加工</p>
	            </div>
			</div>
		</div>
	</div>

</div>	

</div>

