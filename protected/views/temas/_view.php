<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID del Tema')); ?>:</b> <!--/*Linea donde se cambia el nombre de los atributos*/-->
	<?php echo CHtml::link(CHtml::encode($data->id_tema),array('view','id'=>$data->id_tema)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_tema')); ?>:</b>
	<?php echo CHtml::encode($data->nb_tema); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('des_temas')); ?>:</b>
	<?php echo CHtml::encode($data->des_temas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->id_usuario); ?>
	<br />


</div>
