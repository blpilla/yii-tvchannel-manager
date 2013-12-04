<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>CHtml::encode(Yii::app()->name),
)); ?>
<br>
<a href="index.php?r=tvs">Listar TVs</a><br>
<a href="index.php?r=tvs/create">Cadastrar TV</a>


<?php $this->endWidget();

?>

<div style="position:absolute; right:150px; top:130px;">
    <i>Modelagem de dados</i>
    <br>
    <?php echo CHtml::image('images/tables.png'); ?><br>
    <a href="javascript:$('#dialog').show();void 0;">Ver SQL</a><br>
    <a href="https://github.com/blpilla/southtech.git" target="_new">Ver código fonte</a>

</div>

<div id="dialog" style="display:none;">
    MySQL
    <pre>
    CREATE TABLE marca_tv(
        id_marca int AUTO_INCREMENT,
        nome varchar(200) NOT NULL,
        PRIMARY KEY (id_marca)
    );

    CREATE TABLE tvs(
        id_tv int AUTO_INCREMENT,
        fk_marca int(8) NOT NULL,
        modelo varchar(200) NOT NULL,
        tamanho int(3) NOT NULL,
        PRIMARY KEY (id_tv),
        FOREIGN KEY (fk_marca) REFERENCES marca_tv(id_marca)
    );
    </pre>
</div>