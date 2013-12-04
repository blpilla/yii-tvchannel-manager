<?php

/**
 * This is the model class for table "tvs".
 *
 * The followings are the available columns in table 'tvs':
 * @property integer $id_tv
 * @property integer $fk_marca
 * @property string $modelo
 * @property integer $tamanho
 *
 * The followings are the available model relations:
 * @property MarcaTv $fkMarca
 */
class Tvs extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tvs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fk_marca, modelo, tamanho', 'required'),
			array('fk_marca, tamanho', 'numerical', 'integerOnly'=>true),
			array('modelo', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tv, fk_marca, modelo, tamanho', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'fkMarca' => array(self::BELONGS_TO, 'MarcaTv', 'fk_marca'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tv' => 'Código',
			'fk_marca' => 'Marca',
			'modelo' => 'Modelo',
			'tamanho' => 'Tamanho',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_tv',$this->id_tv);
		$criteria->compare('fk_marca',$this->fk_marca);
		$criteria->compare('modelo',$this->modelo,true);
		$criteria->compare('tamanho',$this->tamanho);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tvs the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
