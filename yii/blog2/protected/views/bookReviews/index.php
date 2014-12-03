<?php
/* @var $this BookReviewsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Book Reviews',
);

$this->menu=array(
	array('label'=>'Create BookReviews', 'url'=>array('create')),
	array('label'=>'Manage BookReviews', 'url'=>array('admin')),
);
?>

<h1>Book Reviews</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
