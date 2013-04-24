<?php

/**
 * This is the model class for table "condor.ejemplos".
 *
 * The followings are the available columns in table 'condor.ejemplos':
 * @property integer $id_ejemplos
 * @property string $nb_ejemplos
 * @property string $ej_ejemplos
 * @property integer $id_leccion
 */
class Ejemplos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Ejemplos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'condor.ejemplos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nb_ejemplos, ej_ejemplos, id_leccion', 'required'),
			array('id_leccion', 'numerical', 'integerOnly'=>true),
			array('nb_ejemplos', 'length', 'max'=>80),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_ejemplos, nb_ejemplos, ej_ejemplos, id_leccion', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_ejemplos' => 'Id Ejemplos',
			'nb_ejemplos' => 'Nb Ejemplos',
			'ej_ejemplos' => 'Ej Ejemplos',
			'id_leccion' => 'Id Leccion',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_ejemplos',$this->id_ejemplos);
		$criteria->compare('nb_ejemplos',$this->nb_ejemplos,true);
		$criteria->compare('ej_ejemplos',$this->ej_ejemplos,true);
		$criteria->compare('id_leccion',$this->id_leccion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}