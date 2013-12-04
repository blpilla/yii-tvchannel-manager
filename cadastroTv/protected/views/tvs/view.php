<?php
$this->breadcrumbs=array(
	'TVs'=>array('index'),
	$model->id_tv,
);

$this->menu=array(
	array('label'=>'Listar TVs','url'=>array('index')),
	array('label'=>'Cadastrar TV','url'=>array('create')),
	array('label'=>'Editar TV','url'=>array('update','id'=>$model->id_tv)),
	array('label'=>'Deletar TV','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tv),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manejar TVs','url'=>array('admin')),
);
?>

<h1>TV #<?php echo $model->id_tv; ?></h1>

<?php

$model->fk_marca = MarcaTv::model()->findByPK($model->fk_marca)->nome;

$this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_tv',
		'fk_marca',
		'modelo',
		'tamanho',
	),
)); ?>
