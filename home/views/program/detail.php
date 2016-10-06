<?php
use yii\helpers\Html;
$this->title = Yii::t('app', 'programTitle');
// $this->params['breadcrumbs'][] = ['label'=>'产品展示','url'=>['product/index']];
// $this->params['breadcrumbs'][] = $this->title;
// $this->params['breadcrumbs'][] = '产品列表';
?>

<div class="row">

<div class="col-sm-12">
	<div class="panel panel-default">
		<!-- Default panel contents -->
		<div class="panel-heading">
			<strong><?= $this->title?> ： <?= $list['name']?>（<?= date('Y-m-d H:i:s', $list['updated_at'])?>）</strong>
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