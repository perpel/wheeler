<?php
use yii\helpers\Html;

?>
<div class="row">
	
	<?php foreach($type1 as $k => $machine):?>
		<div class="col-sm-6 col-md-3">
			<div class="thumbnail-title">
				<?= Html::a($machine['title'], [$machine['url']], ['class'=>'title'])?>
				<?= Html::a(Html::tag(
	    				'span', '', 
	    				['class'=>'glyphicon glyphicon-plus']) . ' ' .
	    				$machine['more'], [$machine['url']], ['class'=>'more'])?>
			</div>

			<?php foreach($machine['items'] as $key => $item):?>
				<div class="thumbnail">

					<?= Html::img(Yii::getAlias("@wheeler") . '/uploads/product/index/' . $item['src'],
		  					['alt'=>$item['alt']])?>
				</div>
				
				<div class="thumbnail-caption">
					<?= Html::ul($item['items'], ['item'=>function($item, $index){
		  					return Html::tag('li', Html::a($item['label'], [$item['href'], 'detail'=>$item['id'], 'id'=>$item['parent_id']]));
		  				}])?>
				</div>
			<?php endforeach;?>
		</div>
	<?php endforeach;?>

	<?php foreach($type2 as $k => $factory):?>
		<div class="col-sm-6 col-md-3">
			<div class="thumbnail-title">
				<?= Html::a($factory['title'], [$factory['url']], ['class'=>'title'])?>
				<?= Html::a(Html::tag(
	    				'span', '', 
	    				['class'=>'glyphicon glyphicon-plus']) . ' ' .
	    				$factory['more'], [$factory['url']], ['class'=>'more'])?>
			</div>

			<?php foreach($factory['items'] as $key => $item):?>
				<div class="thumbnail">
					<?= Html::img(Yii::getAlias("@wheeler") . '/uploads/product/index/' . $item['src'], ['alt'=>$item['alt']])?>
				</div>
				
				<div class="thumbnail-caption">
					<?= Html::tag('p', $item['p'])?>
				</div>
			<?php endforeach;?>
		</div>
	<?php endforeach;?>

</div>


<div class="row">
	<?php foreach($type3 as $k => $news):?>
	<div class="col-sm-6 col-md-6">
		<div class="thumbnail-title">
			<?= Html::a($news['title'], [$news['url']], ['class'=>'title'])?>
			<?= Html::a(Html::tag(
    				'span', '', 
    				['class'=>'glyphicon glyphicon-plus']) . ' ' .
    				$news['more'], [$news['url']], ['class'=>'more'])?>
		</div>

		<?php foreach($news['items'] as $key => $item):?>
			<div class="col-md-6">
				<div class="thumbnail">
					<?= Html::img(Yii::getAlias("@wheeler") . '/uploads/product/index/' . $item['src'], ['alt'=>$item['alt']])?>
				</div>
			</div>

			<div class="col-md-6">
				<div class="thumbnail-caption auto">
					<?= Html::ul($item['items'], ['item'=>function($item, $index){
	  					return Html::tag('li',
	  						Html::a($item['label'], [$item['href'], 'detail'=>$item['id'], 'id'=>$item['parent_id']]));
	  				}, 'class'=>'out'])?>
				</div>
			</div>
		<?php endforeach;?>
	</div>
	<?php endforeach;?>

	<?php foreach($type4 as $k => $program):?>
	<div class="col-sm-6 col-md-6">
		<div class="thumbnail-title">
			<?= Html::a($program['title'], [$program['url']], ['class'=>'title'])?>
			<?= Html::a(Html::tag(
    				'span', '', 
    				['class'=>'glyphicon glyphicon-plus']) . ' ' .
    				$program['more'], [$program['url']], ['class'=>'more'])?>
		</div>

		<?php foreach($program['items'] as $key => $item):?>
			<div class="col-md-6">
				<div class="thumbnail">
					<?= Html::img(Yii::getAlias("@wheeler") . '/uploads/product/index/' . $item['src'], ['alt'=>$item['alt']])?>
				</div>
			</div>

			<div class="col-md-6">
				<div class="thumbnail-caption auto">
					<?= Html::ul($item['items'], ['item'=>function($item, $index){
	  					return Html::tag('li',
	  						Html::a($item['label'], [$item['href'], 'detail'=>$item['id'], 'id'=>$item['parent_id']]));
	  				}, 'class'=>'out'])?>
				</div>
			</div>
		<?php endforeach;?>
	</div>
	<?php endforeach;?>

</div>
