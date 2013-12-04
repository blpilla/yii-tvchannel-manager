<?php
$this->breadcrumbs=array(
	'TVs'=>array('index'),
	'Cadastrar',
);

$this->menu=array(
	array('label'=>'Listar TVs','url'=>array('index')),
	array('label'=>'Manejar TVs','url'=>array('admin')),
);
?>

<h1>Cadastrar TV</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>