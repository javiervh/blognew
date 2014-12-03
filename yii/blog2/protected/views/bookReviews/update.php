<?php
/* @var $this BookReviewsController */
/* @var $model BookReviews */

$this->breadcrumbs=array(
	'Book Reviews'=>array('index'),
	$model->isbn=>array('view','id'=>$model->isbn),
	'Update',
);

$this->menu=array(
	array('label'=>'List BookReviews', 'url'=>array('index')),
	array('label'=>'Create BookReviews', 'url'=>array('create')),
	array('label'=>'View BookReviews', 'url'=>array('view', 'id'=>$model->isbn)),
	array('label'=>'Manage BookReviews', 'url'=>array('admin')),
);
?>

<h1>Update BookReviews <?php echo $model->isbn; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>