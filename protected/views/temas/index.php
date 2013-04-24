<?php
$this->breadcrumbs=array(
	'Temas',
);
/*
$this->menu=array(
	array('label'=>'Create Temas','url'=>array('create')),
	array('label'=>'Manage Temas','url'=>array('admin')),
);*/

$this->widget('bootstrap.widgets.TbTabs', array(
		'type'=>'pills', // 'tabs' or 'pills'
		'tabs'=>array(
				array('label'=>'Crear Temas','url'=>array('create')),
				array('label'=>'Gestión de Temas','url'=>array('admin')),
		),
));

?>

<h1>Lista de Temas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
