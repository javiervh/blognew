<?php
/* @var $this TblBookController */
/* @var $model TblBook */

$this->breadcrumbs=array(
	'Tbl Books'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TblBook', 'url'=>array('index')),
	array('label'=>'Create TblBook', 'url'=>array('create')),
	array('label'=>'Update TblBook', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblBook', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblBook', 'url'=>array('admin')),
);
?>

<h1>View TblBook #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'book',
		'author',
	),
)); ?>
