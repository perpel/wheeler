<?php
use yii\helpers\Html;
$this->title = $list['name'];
// $this->params['breadcrumbs'][] = ['label'=>'产品展示','url'=>['product/index']];
// $this->params['breadcrumbs'][] = $this->title;
// $this->params['breadcrumbs'][] = '产品列表';
?>

<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading">
				<strong><?= $list['name']?></strong>
			</div>
			<div class="panel-body">
				<div class="col-sm-12">
					<div class="thumbnail-caption" style="height: auto;">
						<h4 class="media-heading"></h4>
		                <p class="content"><?= $list['content']?></p>
		            </div>
				</div>
			</div>
		</div>
	</div>	
</div>