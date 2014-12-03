<?php
/* @var $this TblBookController */
/* @var $model TblBook */

$this->breadcrumbs=array(
	'Tbl Books'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblBook', 'url'=>array('index')),
	array('label'=>'Manage TblBook', 'url'=>array('admin')),
);
?>

<h1>Create TblBook</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>