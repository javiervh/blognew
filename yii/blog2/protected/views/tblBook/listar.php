<?php
/* @var $this TblBookController */
/* @var $model TblBook */
/*
$this->breadcrumbs=array(
	'Tbl Books'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblBook', 'url'=>array('index')),
	array('label'=>'Create TblBook', 'url'=>array('create')),
	array('label'=>'View TblBook', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblBook', 'url'=>array('admin')),
);*/
?>


<?php 
	foreach($orders as $var){
		echo $var->author;
	}

?>
