<?php

/**
 * This is the model class for table "{{users_skills}}".
 *
 * The followings are the available columns in table '{{users_skills}}':
 * @property integer $id
 * @property string $skill_title
 * @property string $skill_description
 * @property string $skill_user_id
 *
 * The followings are the available model relations:
 * @property Users $skillUser
 */
class UsersSkills extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{users_skills}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, skill_user_id', 'required'),
			array('id', 'numerical', 'integerOnly'=>true),
			array('skill_title', 'length', 'max'=>45),
			array('skill_description', 'length', 'max'=>200),
			array('skill_user_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, skill_title, skill_description, skill_user_id', 'safe', 'on'=>'search'),
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
			'skillUser' => array(self::BELONGS_TO, 'Users', 'skill_user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'skill_title' => 'Skill Title',
			'skill_description' => 'Skill Description',
			'skill_user_id' => 'Skill User',
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
		$criteria->compare('skill_title',$this->skill_title,true);
		$criteria->compare('skill_description',$this->skill_description,true);
		$criteria->compare('skill_user_id',$this->skill_user_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserSkills the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
