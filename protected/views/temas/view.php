<?php
$this->breadcrumbs=array(
	'Temas'=>array('index'),
	$model->id_tema,
);

$this->widget('bootstrap.widgets.TbTabs', array(
		'type'=>'pills', // 'tabs' or 'pills'
		'tabs'=>array(
			array('label'=>'Listar Temas','url'=>array('index')),
			array('label'=>'Crear Temas','url'=>array('create')),
			array('label'=>'Actualizar Temas','url'=>array('update','id'=>$model->id_tema)),
			array('label'=>'Borrar Temas','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tema),'Acepta'=>'Esta seguro de eliminar este campo?')),
			array('label'=>'Gestión de Temas','url'=>array('admin')),
		),
));

/*$this->menu=array(
	array('label'=>'Listar Temas','url'=>array('index')),
	array('label'=>'Crear Temas','url'=>array('create')),
	array('label'=>'Actualizar Temas','url'=>array('update','id'=>$model->id_tema)),
	array('label'=>'Borrar Temas','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tema),'Acepta'=>'Esta seguro de eliminar este campo?')),
	array('label'=>'Gestión de Temas','url'=>array('admin')),
);*/
?>

<h1>Vista de Temas #<?php echo $model->id_tema; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_tema',
		'nb_tema',
		'des_temas',
		'id_usuario',
	),
)); ?>
