<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'tvs-form',
	#'enableAjaxValidation'=>true,
    'enableClientValidation' => true,

)); ?>

	<p class="help-block">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

    <?php echo $form->dropDownList($model,'fk_marca', CHtml::listData(MarcaTv::model()->findAll(array('order' => 'id_marca')),'id_marca','nome'));?>

	<?php echo $form->textFieldRow($model,'modelo',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'tamanho',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Cadastrar' : 'Salvar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
