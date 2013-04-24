<?php
$this->breadcrumbs=array(
	'Temases'=>array('index'),
	$model->id_tema=>array('view','id'=>$model->id_tema),
	'Actualizar',
);

$this->widget('bootstrap.widgets.TbTabs', array(
		'type'=>'pills', // 'tabs' or 'pills'
		'tabs'=>array(
				array('label'=>'Listar Temas','url'=>array('index')),
				array('label'=>'Crear Temas','url'=>array('create')),
				array('label'=>'Vista de Temas','url'=>array('view','id'=>$model->id_tema)),
				array('label'=>'Gestión de Temas','url'=>array('admin')),
			),
));

/*$this->menu=array(
	array('label'=>'Listar Temas','url'=>array('index')),
	array('label'=>'Crear Temas','url'=>array('create')),
	array('label'=>'Vista de Temas','url'=>array('view','id'=>$model->id_tema)),
	array('label'=>'Gestión de Temas','url'=>array('admin')),
);*/
?>

<h1>Actualizar Temas <?php echo $model->id_tema; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
