<?php
use yii\helpers\Html;
$this->title = Yii::t('app', 'newsTitle');
// $this->params['breadcrumbs'][] = ['label'=>'产品展示','url'=>['product/index']];
// $this->params['breadcrumbs'][] = $this->title;
// $this->params['breadcrumbs'][] = '产品列表';
$js = <<<JS
	if($(".text-slip").text().length > 30) {
 		$(".text-slip").find('a').text($(".text-slip").text().substring(0, 30) + '.....');
	}
JS;
echo $this->registerJs($js);
?>

<div class="row">

	<div class="col-sm-4">
		<div id="accordion" class="panel-group">
			<!--begin navbar-->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a href="#collapse1" data-toggle="collapse" data-parent="#accordion">新闻中心</a>
					</h4>
				</div>
				<div id="collapse1" class="panel-collapse collapse in">
					<div class="panel-body">
						<ul>
							<li class="active">
								<?= Html::a(
									Html::tag('i', '', ['class'=>'glyphicon glyphicon-chevron-right']) . '公司动态', 
									['news/index', 'type'=> 1]);?>
							</li>
							<li class="active">
								<?= Html::a(
									Html::tag('i', '', ['class'=>'glyphicon glyphicon-chevron-right']) . 
									'公司新闻', 
									['news/index', 'type'=> 2]);?>
							</li>
							<li class="active">
								<?= Html::a(
									Html::tag('i', '', ['class'=>'glyphicon glyphicon-chevron-right']) . 
									'公司行业', 
									['news/index', 'type'=> 3]);?>
							</li>
							<li class="active">
								<?= Html::a(
									Html::tag('i', '', ['class'=>'glyphicon glyphicon-chevron-right']) . 
									'内部动态', 
									['news/index', 'type'=> 4]);?>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!--end navbar-->	
		</div>
	</div>

	<div class="col-sm-8">
		<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading">
				<strong><?= $this->title?></strong>
			</div>
			<div class="panel-body">
				<div class="col-sm-12">
					<div class="thumbnail-caption" style="height: auto;">
						<table class="table">
							<?php foreach ($list as $key => $value):?>
								<tr>
									<td class='text-slip'><?= Html::a($value['desc'], ['news/index', 'detail'=>$value['id']])?></td>
									<td class="text-right"><?= date('Y-m-d H:i:s', $value['updated_at'])?></td>
								</tr>
							<?php endforeach;?>
						</table>
		            </div>
				</div>
			</div>
		</div>
	</div>	

</div>