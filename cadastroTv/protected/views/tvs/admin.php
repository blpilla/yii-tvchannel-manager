<?php
$this->breadcrumbs=array(
	'TVs'=>array('index'),
	'Manejar',
);

$this->menu=array(
	array('label'=>'Listar TVs','url'=>array('index')),
	array('label'=>'Cadastrar TVs','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tvs-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manejar TVs</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'tvs-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_tv',
		'modelo',
		'tamanho',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
