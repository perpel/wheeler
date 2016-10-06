<?php
use yii\helpers\Html;

?>

<div id="myCarousel" class="carousel slide">
	<!-- 轮播（Carousel）指标 -->
	<?= Html::ol($banner, ['item'=>function($item, $index){
 		$active = ($index == 0)?'active':'';
		return Html::tag('li', '', [
 			'data-target'=>'#myCarousel',
 			'data-slide-to'=>$index,
 			'class'=>$active]);
 	}, 'class'=>'carousel-indicators']); ?>
	<!-- 轮播（Carousel）项目 -->
	<div class="carousel-inner">
		<?php foreach($banner as $key => $value):?>
			<div class="item<?= ($key==0)?' active':''?>">
				<?= Html::img(
					Yii::getAlias("@wheeler") . '/uploads/banner/' . $value['src'], 
					['alt'=>$value['alt']]);
				?>
			</div>
		<?php endforeach;?>
	</div>
	<!-- 轮播（Carousel）导航 -->
	<?= Html::a(Html::tag('span', '&lsaquo;') . Html::img('#'), '#myCarousel', 
    			['data-slide'=>'prev', 'class'=>'carousel-control left text-center']);
    ?>

    <?= Html::a(Html::tag('span', '&rsaquo;') . Html::img('#'), '#myCarousel', 
    			['data-slide'=>'next', 'class'=>'carousel-control right text-center']);
    ?>
</div>