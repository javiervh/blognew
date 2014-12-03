<?php
/* @var $this CustomersController */
/* @var $model Customers */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customers-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'customerNumber'); ?>
		<?php echo $form->textField($model,'customerNumber'); ?>
		<?php echo $form->error($model,'customerNumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'customerName'); ?>
		<?php echo $form->textField($model,'customerName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'customerName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contactLastName'); ?>
		<?php echo $form->textField($model,'contactLastName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'contactLastName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contactFirstName'); ?>
		<?php echo $form->textField($model,'contactFirstName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'contactFirstName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'addressLine1'); ?>
		<?php echo $form->textField($model,'addressLine1',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'addressLine1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'addressLine2'); ?>
		<?php echo $form->textField($model,'addressLine2',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'addressLine2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postalCode'); ?>
		<?php echo $form->textField($model,'postalCode',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'postalCode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model,'country',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salesRepEmployeeNumber'); ?>
		<?php echo $form->textField($model,'salesRepEmployeeNumber'); ?>
		<?php echo $form->error($model,'salesRepEmployeeNumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'creditLimit'); ?>
		<?php echo $form->textField($model,'creditLimit'); ?>
		<?php echo $form->error($model,'creditLimit'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->