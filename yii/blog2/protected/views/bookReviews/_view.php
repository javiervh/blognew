<?php
/* @var $this BookReviewsController */
/* @var $data BookReviews */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('isbn')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->isbn), array('view', 'id'=>$data->isbn)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('review')); ?>:</b>
	<?php echo CHtml::encode($data->review); ?>
	<br />


</div>