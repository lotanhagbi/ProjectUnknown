<?php

/**
 * This is the model class for table "{{users}}".
 *
 * The followings are the available columns in table '{{users}}':
 * @property string $id
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $user_title
 * @property string $user_birthdate
 * @property string $user_gender
 * @property string $user_rel_status
 * @property string $user_note
 * @property string $user_thumbnail
 *
 * The followings are the available model relations:
 * @property UserRelStatus $userRelStatus
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{users}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, last_name, user_rel_status', 'required'),
			array('first_name, middle_name, last_name', 'length', 'max'=>50),
			array('user_title', 'length', 'max'=>150),
			array('user_gender', 'length', 'max'=>1),
			array('user_rel_status', 'length', 'max'=>2),
			array('user_note', 'length', 'max'=>2000),
			array('user_birthdate, user_thumbnail', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, first_name, middle_name, last_name, user_title, user_birthdate, user_gender, user_rel_status, user_note, user_thumbnail', 'safe', 'on'=>'search'),
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
			'userRelStatus' => array(self::BELONGS_TO, 'UserRelStatus', 'user_rel_status'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'first_name' => 'First Name',
			'middle_name' => 'Middle Name',
			'last_name' => 'Last Name',
			'user_title' => 'User Title',
			'user_birthdate' => 'User Birthdate',
			'user_gender' => 'User Gender',
			'user_rel_status' => 'User Rel Status',
			'user_note' => 'User Note',
			'user_thumbnail' => 'User Thumbnail',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('middle_name',$this->middle_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('user_title',$this->user_title,true);
		$criteria->compare('user_birthdate',$this->user_birthdate,true);
		$criteria->compare('user_gender',$this->user_gender,true);
		$criteria->compare('user_rel_status',$this->user_rel_status,true);
		$criteria->compare('user_note',$this->user_note,true);
		$criteria->compare('user_thumbnail',$this->user_thumbnail,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
