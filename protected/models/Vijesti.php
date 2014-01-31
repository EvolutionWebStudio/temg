<?php

/**
 * This is the model class for table "vijesti".
 *
 * The followings are the available columns in table 'vijesti':
 * @property integer $id
 * @property string $naslov
 * @property string $sadrzaj
 * @property string $autor
 * @property string $datum
 * @property string $jezik
 * @property string $meta_title
 * @property string $meta_keywords
 * @property string $meta_description
 */
class Vijesti extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vijesti';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('naslov, sadrzaj, datum, jezik, meta_title, meta_keywords, meta_description', 'required'),
			array('naslov', 'length', 'max'=>120),
			array('autor, jezik', 'length', 'max'=>45),
			array('meta_title, meta_keywords', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, naslov, sadrzaj, autor, datum, jezik, meta_title, meta_keywords, meta_description', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'naslov' => 'Naslov',
			'sadrzaj' => 'Sadrzaj',
			'autor' => 'Autor',
			'datum' => 'Datum',
			'jezik' => 'Jezik',
			'meta_title' => 'Meta Title',
			'meta_keywords' => 'Meta Keywords',
			'meta_description' => 'Meta Description',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('naslov',$this->naslov,true);
		$criteria->compare('sadrzaj',$this->sadrzaj,true);
		$criteria->compare('autor',$this->autor,true);
		$criteria->compare('datum',$this->datum,true);
		$criteria->compare('jezik',$this->jezik,true);
		$criteria->compare('meta_title',$this->meta_title,true);
		$criteria->compare('meta_keywords',$this->meta_keywords,true);
		$criteria->compare('meta_description',$this->meta_description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Vijesti the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
