<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tv')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tv),array('view','id'=>$data->id_tv)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_marca')); ?>:</b>
    <?php echo CHtml::encode(MarcaTv::model()->findByPK($data->fk_marca)->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modelo')); ?>:</b>
	<?php echo CHtml::encode($data->modelo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tamanho')); ?>:</b>
	<?php echo CHtml::encode($data->tamanho); ?>
	<hr>


</div>