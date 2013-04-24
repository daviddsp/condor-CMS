<?php

/**
 * This is the model class for table "condor.ejercicios".
 *
 * The followings are the available columns in table 'condor.ejercicios':
 * @property integer $id_ejercicios
 * @property string $nb_ejercicios
 * @property string $des_ejercicio
 * @property string $ej_ejercicios
 * @property integer $id_leccion
 */
class Ejercicios extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Ejercicios the static model class
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
		return 'condor.ejercicios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nb_ejercicios, des_ejercicio, ej_ejercicios, id_leccion', 'required'),
			array('id_leccion', 'numerical', 'integerOnly'=>true),
			array('nb_ejercicios', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_ejercicios, nb_ejercicios, des_ejercicio, ej_ejercicios, id_leccion', 'safe', 'on'=>'search'),
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
			'id_ejercicios' => 'Id Ejercicios',
			'nb_ejercicios' => 'Nb Ejercicios',
			'des_ejercicio' => 'Des Ejercicio',
			'ej_ejercicios' => 'Ej Ejercicios',
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

		$criteria->compare('id_ejercicios',$this->id_ejercicios);
		$criteria->compare('nb_ejercicios',$this->nb_ejercicios,true);
		$criteria->compare('des_ejercicio',$this->des_ejercicio,true);
		$criteria->compare('ej_ejercicios',$this->ej_ejercicios,true);
		$criteria->compare('id_leccion',$this->id_leccion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}