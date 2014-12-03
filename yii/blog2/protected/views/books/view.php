<?php
/* @var $this BooksController */
/* @var $model Books */

$this->breadcrumbs=array(
	'Books'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Books', 'url'=>array('index')),
	array('label'=>'Create Books', 'url'=>array('create')),
	array('label'=>'Update Books', 'url'=>array('update', 'id'=>$model->isbn)),
	array('label'=>'Delete Books', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->isbn),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Books', 'url'=>array('admin')),
);
?>

<h1>View Books #<?php echo $model->isbn; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'isbn',
		'author',
		'title',
		'price',
	),
)); ?>
