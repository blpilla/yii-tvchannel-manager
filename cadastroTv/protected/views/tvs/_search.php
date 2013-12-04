<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<br>
	<?php echo $form->textFieldRow($model,'id_tv',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fk_marca',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'modelo',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'tamanho',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Buscar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
