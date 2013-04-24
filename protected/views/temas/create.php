<?php
$this->breadcrumbs=array(
	'Temas'=>array('index'),
	'Crear',
);

$this->widget('bootstrap.widgets.TbTabs', array(
		'type'=>'pills', // 'tabs' or 'pills'
		'tabs'=>array(
				array('label'=>'Listar Temas','url'=>array('index')),
				array('label'=>'Gestión de Temas','url'=>array('admin')),
		),
));

/*$this->menu=array(
	array('label'=>'Listar Temas','url'=>array('index')),
	array('label'=>'Gestión de Temas','url'=>array('admin')),
);*/
?>

<h1>Crear Temas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
