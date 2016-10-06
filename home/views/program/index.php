<?php
use yii\helpers\Html;
$this->title = Yii::t('app', 'programTitle');
// $this->params['breadcrumbs'][] = ['label'=>'产品展示','url'=>['product/index']];
// $this->params['breadcrumbs'][] = $this->title;
// $this->params['breadcrumbs'][] = '产品列表';
$js = <<<JS
	if($(".text-slip").text().length > 80) {
 		$(".text-slip").find('a').text($(".text-slip").text().substring(0, 80) + '.....');
	}
JS;
echo $this->registerJs($js);
?>

<div class="row">

	<div class="col-sm-12">
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
									<td class='text-slip'><?= Html::a($value['desc'], ['program/index', 'detail'=>$value['id']])?></td>
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