<?php
$this->breadcrumbs=array(
	'Ejemplos',
);
/*
$this->menu=array(
	array('label'=>'Create Ejemplos','url'=>array('create')),
	array('label'=>'Manage Ejemplos','url'=>array('admin')),
);*/
?>

<h1>Ejemplos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
