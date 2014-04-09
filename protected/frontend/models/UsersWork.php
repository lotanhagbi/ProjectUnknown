<?php

/**
 * This is the model class for table "{{users_work}}".
 *
 * The followings are the available columns in table '{{users_work}}':
 * @property string $id
 * @property string $work_begin
 * @property string $work_end
 * @property string $work_title
 * @property string $work_description
 * @property string $work_user_id
 *
 * The followings are the available model relations:
 * @property Users $workUser
 */
class UsersWork extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{users_work}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('work_begin, work_title, work_user_id', 'required'),
			array('work_title', 'length', 'max'=>45),
			array('work_description', 'length', 'max'=>150),
			array('work_user_id', 'length', 'max'=>10),
			array('work_end', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, work_begin, work_end, work_title, work_description, work_user_id', 'safe', 'on'=>'search'),
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
			'workUser' => array(self::BELONGS_TO, 'Users', 'work_user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'work_begin' => 'Work Begin',
			'work_end' => 'Work End',
			'work_title' => 'Work Title',
			'work_description' => 'Work Description',
			'work_user_id' => 'Work User',
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
		$criteria->compare('work_begin',$this->work_begin,true);
		$criteria->compare('work_end',$this->work_end,true);
		$criteria->compare('work_title',$this->work_title,true);
		$criteria->compare('work_description',$this->work_description,true);
		$criteria->compare('work_user_id',$this->work_user_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UsersWork the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
