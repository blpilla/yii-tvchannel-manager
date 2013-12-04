<?php
$this->breadcrumbs=array(
	'Marca'=>array('index'),
	$model->id_marca,
);

$this->menu=array(
	array('label'=>'Listar Marcas','url'=>array('index')),
	array('label'=>'Cadastrar Marca','url'=>array('create')),
);
?>

<h1> Marca #<?php echo $model->id_marca; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_marca',
		'nome',
	),
)); ?>
