<?php
$this->breadcrumbs=array(
	'Marca'=>array('index'),
	'Cadastrar',
);

$this->menu=array(
	array('label'=>'Listar Marcas','url'=>array('index')),

);
?>

<h1>Cadastrar Marca</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>