<?php
use yii\helpers\Html;

?>
<div class="row">
	<div class="col-sm-6 col-md-3">
		<div class="thumbnail-title">
			<?= Html::a($machine['title'], $machine['url'], ['class'=>'title'])?>
			<?= Html::a(Html::tag(
    				'span', '', 
    				['class'=>'glyphicon glyphicon-plus']) . ' ' .
    				$machine['more'], $machine['url'], ['class'=>'more'])?>
		</div>

		<?php foreach($machine['items'] as $key => $item):?>
			<div class="thumbnail">
				<?= Html::img(Yii::getAlias("@wheeler") . '/uploads/product/' . $item['src'],
	  					['alt'=>$item['alt']])?>
			</div>
			
			<div class="thumbnail-caption">
				<?= Html::ul($item['items'], ['item'=>function($item, $index){
	  					return Html::tag('li', Html::a($item['label'], $item['href']));
	  				}])?>
			</div>
		<?php endforeach;?>
		
	</div>

	<div class="col-sm-6 col-md-3">
		<div class="thumbnail-title">
			<?= Html::a($equipment['title'], $equipment['url'], ['class'=>'title'])?>
			<?= Html::a(Html::tag(
    				'span', '', 
    				['class'=>'glyphicon glyphicon-plus']) . ' ' .
    				$equipment['more'], $equipment['url'], ['class'=>'more'])?>
		</div>
		<?php foreach($equipment['items'] as $key => $item):?>
			<div class="thumbnail">
				<?= Html::img(Yii::getAlias("@wheeler") . '/uploads/product/' . $item['src'],
	  					['alt'=>$item['alt']])?>
			</div>
			
			<div class="thumbnail-caption">
				<?= Html::ul($item['items'], ['item'=>function($item, $index){
	  					return Html::tag('li', Html::a($item['label'], $item['href']));
	  				}])?>
			</div>
		<?php endforeach;?>
	</div>

	<div class="col-sm-6 col-md-3">
		<div class="thumbnail-title">
			<?= Html::a($automent['title'], $automent['url'], ['class'=>'title'])?>
			<?= Html::a(Html::tag(
    				'span', '', 
    				['class'=>'glyphicon glyphicon-plus']) . ' ' .
    				$automent['more'], $automent['url'], ['class'=>'more'])?>
		</div>
		<?php foreach($automent['items'] as $key => $item):?>
			<div class="thumbnail">
				<?= Html::img(Yii::getAlias("@wheeler") . '/uploads/product/' . $item['src'],
	  					['alt'=>$item['alt']])?>
			</div>
			
			<div class="thumbnail-caption">
				<?= Html::ul($item['items'], ['item'=>function($item, $index){
	  					return Html::tag('li', Html::a($item['label'], $item['href']));
	  				}])?>
			</div>
		<?php endforeach;?>
	</div>

	<div class="col-sm-6 col-md-3">
		<div class="thumbnail-title">
			<?= Html::a($factory['title'], $factory['url'], ['class'=>'title'])?>
			<?= Html::a(Html::tag(
    				'span', '', 
    				['class'=>'glyphicon glyphicon-plus']) . ' ' .
    				$factory['more'], $factory['url'], ['class'=>'more'])?>
		</div>

		<?php foreach($factory['items'] as $key => $item):?>
			<div class="thumbnail">
				<?= Html::img(Yii::getAlias("@wheeler") . '/uploads/product/' . $item['src'],
	  					['alt'=>$item['alt']])?>
			</div>
			
			<div class="thumbnail-caption">
				<?= Html::tag('p', $item['p'])?>
			</div>
		<?php endforeach;?>
	</div>

</div>


<div class="row">
	<div class="col-sm-6 col-md-6">
		<div class="thumbnail-title">
			<?= Html::a($news['title'], $news['url'], ['class'=>'title'])?>
			<?= Html::a(Html::tag(
    				'span', '', 
    				['class'=>'glyphicon glyphicon-plus']) . ' ' .
    				$news['more'], $news['url'], ['class'=>'more'])?>
		</div>

		<?php foreach($news['items'] as $key => $item):?>
			<div class="col-md-6">
				<div class="thumbnail">
					<?= Html::img(Yii::getAlias("@wheeler") . '/uploads/product/' . $item['src'],
		  					['alt'=>$item['alt']])?>
				</div>
			</div>

			<div class="col-md-6">
				<div class="thumbnail-caption auto">
					<?= Html::ul($item['items'], ['item'=>function($item, $index){
	  					return Html::tag('li',
	  						Html::a($item['label'], $item['href']));
	  				}, 'class'=>'out'])?>
				</div>
			</div>
		<?php endforeach;?>
	</div>

	<div class="col-sm-6 col-md-6">
		<div class="thumbnail-title">
			<?= Html::a($case['title'], $case['url'], ['class'=>'title'])?>
			<?= Html::a(Html::tag(
    				'span', '', 
    				['class'=>'glyphicon glyphicon-plus']) . ' ' .
    				$case['more'], $case['url'], ['class'=>'more'])?>
		</div>

		<?php foreach($case['items'] as $key => $item):?>
			<div class="col-md-6">
				<div class="thumbnail">
					<?= Html::img(Yii::getAlias("@wheeler") . '/uploads/product/' . $item['src'],
		  					['alt'=>$item['alt']])?>
				</div>
			</div>

			<div class="col-md-6">
				<div class="thumbnail-caption auto">
					<?= Html::ul($item['items'], ['item'=>function($item, $index){
	  					return Html::tag('li',
	  						Html::a($item['label'], $item['href']));
	  				}, 'class'=>'out'])?>
				</div>
			</div>
		<?php endforeach;?>
	</div>

</div>
