<?php
/* @var $this UsuariosController */
/* @var $data Usuarios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_usuario), array('view', 'id'=>$data->id_usuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->nb_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ap_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->ap_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->pf_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('log_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->log_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pass_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->pass_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('st_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->st_usuario); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tp_usuarios')); ?>:</b>
	<?php echo CHtml::encode($data->tp_usuarios); ?>
	<br />

	*/ ?>

</div>