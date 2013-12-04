<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Inicio', 'url'=>array('/site/index')),
                array('label'=>'TVs', 'url'=>array('/tvs')),
                array('label'=>'Marcas', 'url'=>array('/marcaTv')),
               ),
        ),
    ),
)); ?>

<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>
    <br>
	<div id="footer">
		Desenvolvido por <a href="mailto:blpilla@yahoo.com.br">Bruno L. Pilla</a> em <a href="http://php.net/">PHP</a> com
        <a href="http://www.yiiframework.com/">Yii Framework</a>, <a href="http://getbootstrap.com/">Bootstrap</a> e <a href="http://www.mysql.com/">MySQL</a> (2013).
	</div><!-- footer -->
<br>
</div><!-- page -->

</body>
</html>
