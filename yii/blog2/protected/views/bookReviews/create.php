<?php
/* @var $this BookReviewsController */
/* @var $model BookReviews */

$this->breadcrumbs=array(
	'Book Reviews'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BookReviews', 'url'=>array('index')),
	array('label'=>'Manage BookReviews', 'url'=>array('admin')),
);
?>

<h1>Create BookReviews</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>