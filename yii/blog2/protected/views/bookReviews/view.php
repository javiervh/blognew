<?php
/* @var $this BookReviewsController */
/* @var $model BookReviews */

$this->breadcrumbs=array(
	'Book Reviews'=>array('index'),
	$model->isbn,
);

$this->menu=array(
	array('label'=>'List BookReviews', 'url'=>array('index')),
	array('label'=>'Create BookReviews', 'url'=>array('create')),
	array('label'=>'Update BookReviews', 'url'=>array('update', 'id'=>$model->isbn)),
	array('label'=>'Delete BookReviews', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->isbn),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BookReviews', 'url'=>array('admin')),
);
?>

<h1>View BookReviews #<?php echo $model->isbn; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'isbn',
		'review',
	),
)); ?>
