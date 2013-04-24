<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_leccion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_leccion),array('view','id'=>$data->id_leccion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_leccion')); ?>:</b>
	<?php echo CHtml::encode($data->nb_leccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cont_lecciones')); ?>:</b>
	<?php echo CHtml::encode($data->cont_lecciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tema')); ?>:</b>
	<?php echo CHtml::encode($data->id_tema); ?>
	<br />


</div>