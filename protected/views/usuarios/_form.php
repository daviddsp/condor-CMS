<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuarios-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nb_usuario'); ?>
		<?php echo $form->textField($model,'nb_usuario',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'nb_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ap_usuario'); ?>
		<?php echo $form->textField($model,'ap_usuario',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'ap_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pf_usuario'); ?>
		<?php echo $form->textField($model,'pf_usuario',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'pf_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'log_usuario'); ?>
		<?php echo $form->textField($model,'log_usuario',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'log_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pass_usuario'); ?>
		<?php echo $form->textField($model,'pass_usuario',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'pass_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'st_usuario'); ?>
		<?php echo $form->checkBox($model,'st_usuario'); ?>
		<?php echo $form->error($model,'st_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tp_usuarios'); ?>
		<?php echo $form->textField($model,'tp_usuarios',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'tp_usuarios'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->