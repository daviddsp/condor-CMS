<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_usuario'); ?>
		<?php echo $form->textField($model,'id_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nb_usuario'); ?>
		<?php echo $form->textField($model,'nb_usuario',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ap_usuario'); ?>
		<?php echo $form->textField($model,'ap_usuario',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_usuario'); ?>
		<?php echo $form->textField($model,'pf_usuario',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'log_usuario'); ?>
		<?php echo $form->textField($model,'log_usuario',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pass_usuario'); ?>
		<?php echo $form->textField($model,'pass_usuario',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'st_usuario'); ?>
		<?php echo $form->checkBox($model,'st_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tp_usuarios'); ?>
		<?php echo $form->textField($model,'tp_usuarios',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->