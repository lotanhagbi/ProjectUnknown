<?php

/**
 * This is the model class for table "{{user_education}}".
 *
 * The followings are the available columns in table '{{user_education}}':
 * @property integer $id
 * @property string $education_begin
 * @property string $education_end
 * @property string $education_description
 * @property string $education_user_id
 *
 * The followings are the available model relations:
 * @property Users $educationUser
 */
class UserEducation extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{user_education}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('education_description, education_user_id', 'required'),
			array('education_description', 'length', 'max'=>150),
			array('education_user_id', 'length', 'max'=>10),
			array('education_begin, education_end', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, education_begin, education_end, education_description, education_user_id', 'safe', 'on'=>'search'),
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
			'educationUser' => array(self::BELONGS_TO, 'Users', 'education_user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'education_begin' => 'Education Begin',
			'education_end' => 'Education End',
			'education_description' => 'Education Description',
			'education_user_id' => 'Education User',
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
		$criteria->compare('education_begin',$this->education_begin,true);
		$criteria->compare('education_end',$this->education_end,true);
		$criteria->compare('education_description',$this->education_description,true);
		$criteria->compare('education_user_id',$this->education_user_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserEducation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
