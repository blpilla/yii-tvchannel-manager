<?php
$this->breadcrumbs=array(
	'TVs'=>array('index'),
	$model->id_tv=>array('view','id'=>$model->id_tv),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar TVs','url'=>array('index')),
	array('label'=>'Cadastrar TVs','url'=>array('create')),
	array('label'=>'Ver TV','url'=>array('view','id'=>$model->id_tv)),
	array('label'=>'Manejar TVs','url'=>array('admin')),
);
?>

<h1>Editar TV <?php echo $model->id_tv; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>