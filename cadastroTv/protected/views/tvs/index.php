<?php
$this->breadcrumbs=array(
	'TVs',
);

$this->menu=array(
	array('label'=>'Cadastrar TVs','url'=>array('create')),
	array('label'=>'Manejar TVs','url'=>array('admin')),
);
?>

<h1>TVs</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
