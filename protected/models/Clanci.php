<?php

/**
 * This is the model class for table "clanci".
 *
 * The followings are the available columns in table 'clanci':
 * @property integer $idclanci
 * @property string $naslov
 * @property string $datum
 * @property string $autor
 * @property string $clanak
 * @property string $baner
 * @property string $slika
 * @property string $kategorija
 * @property string $sekcija
 * @property string $alias
 * @property integer $sortiranje
 * @property string $jezik
 * @property string $meta_title
 * @property string $meta_keywords
 * @property string $meta_description
 */
class Clanci extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'clanci';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sekcija, alias, sortiranje, jezik, meta_title, meta_keywords, meta_description', 'required'),
			array('sortiranje', 'numerical', 'integerOnly'=>true),
			array('naslov', 'length', 'max'=>150),
			array('autor, sekcija, jezik', 'length', 'max'=>45),
			array('baner, slika', 'length', 'max'=>255),
			array('kategorija', 'length', 'max'=>90),
			array('alias', 'length', 'max'=>50),
			array('datum, clanak', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idclanci, naslov, datum, autor, clanak, baner, slika, kategorija, sekcija, alias, sortiranje, jezik, meta_title, meta_keywords, meta_description', 'safe', 'on'=>'search'),
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
			'idclanci' => 'Idclanci',
			'naslov' => 'Naslov',
			'datum' => 'Datum',
			'autor' => 'Autor',
			'clanak' => 'Clanak',
			'baner' => 'Baner',
			'slika' => 'Slika',
			'kategorija' => 'Kategorija',
			'sekcija' => 'Sekcija',
			'alias' => 'Alias',
			'sortiranje' => 'Sortiranje',
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

		$criteria->compare('idclanci',$this->idclanci);
		$criteria->compare('naslov',$this->naslov,true);
		$criteria->compare('datum',$this->datum,true);
		$criteria->compare('autor',$this->autor,true);
		$criteria->compare('clanak',$this->clanak,true);
		$criteria->compare('baner',$this->baner,true);
		$criteria->compare('slika',$this->slika,true);
		$criteria->compare('kategorija',$this->kategorija,true);
		$criteria->compare('sekcija',$this->sekcija,true);
		$criteria->compare('alias',$this->alias,true);
		$criteria->compare('sortiranje',$this->sortiranje);
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
	 * @return Clanci the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
