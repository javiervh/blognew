<?php
/* @var $this TblBookController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Books',
);

$this->menu=array(
	array('label'=>'Create TblBook', 'url'=>array('create')),
	array('label'=>'Manage TblBook', 'url'=>array('admin')),
);
?>

<h1>Tbl Books</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
