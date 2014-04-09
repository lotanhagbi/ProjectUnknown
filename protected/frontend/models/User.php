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
 * @property string $user_pass
 * @property string $user_type
 * @property string $user_phone
 * @property string $user_sec_phone
 * @property string $user_email
 * @property string $user_website
 *
 * The followings are the available model relations:
 * @property UserEducation[] $userEducations
 * @property UserRelStatus $userRelStatus
 * @property UsersSkills[] $usersSkills
 * @property UsersWork[] $usersWorks
 */
class User extends CActiveRecord {
	
	private $id = null;
	
    public $user_terms = false;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{users}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('first_name, last_name, user_birthdate, user_rel_status, user_pass, user_email', 'required'),
            array('first_name, middle_name, last_name, user_phone, user_sec_phone', 'length', 'max' => 50),
            array('user_title', 'length', 'max' => 150),
            array('user_gender', 'length', 'max' => 1),
            array('user_rel_status, user_type', 'length', 'max' => 2),
            array('user_note', 'length', 'max' => 2000),
            array('user_pass', 'length', 'max' => 45),
            array('user_email', 'length', 'max' => 70),
            array('user_website', 'length', 'max' => 100),
            array('user_thumbnail', 'safe'),
            array('user_birthdate', 'date', 'format' => 'd-M-yyyy'),
            array('user_email', 'email'),
            array('user_terms', 'compare', 'compareValue' => '1', 'strict' => true, 'on' => 'register','message'=>'You must agree to the terms of conditions.'),
			array('user_email, user_pass', 'required' , 'on' => 'login'),
			array('user_pass', 'authenticate'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, first_name, middle_name, last_name, user_title, user_birthdate, user_gender, user_rel_status, user_note, user_thumbnail, user_pass, user_type, user_phone, user_sec_phone, user_email, user_website', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'userEducations' => array(self::HAS_MANY, 'UserEducation', 'education_user_id'),
            'userRelStatus' => array(self::BELONGS_TO, 'UserRelStatus', 'user_rel_status'),
            'usersSkills' => array(self::HAS_MANY, 'UsersSkills', 'skill_user_id'),
            'usersWorks' => array(self::HAS_MANY, 'UsersWork', 'work_user_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'user_title' => 'Title',
            'user_birthdate' => 'Birthdate',
            'user_gender' => 'Gender',
            'user_rel_status' => 'Relationship Status',
            'user_note' => 'Personal Note',
            'user_thumbnail' => 'Picture',
            'user_pass' => 'Password',
            'user_type' => 'User Type',
            'user_phone' => 'Phone Number',
            'user_sec_phone' => 'Secondary Phone Number',
            'user_email' => 'Email',
            'user_website' => 'Website',
			'user_terms' => 'By checking this Box I agree to the <a href="#" >Terms of Use </a>',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id, true);
        $criteria->compare('first_name', $this->first_name, true);
        $criteria->compare('middle_name', $this->middle_name, true);
        $criteria->compare('last_name', $this->last_name, true);
        $criteria->compare('user_title', $this->user_title, true);
        $criteria->compare('user_birthdate', $this->user_birthdate, true);
        $criteria->compare('user_gender', $this->user_gender, true);
        $criteria->compare('user_rel_status', $this->user_rel_status, true);
        $criteria->compare('user_note', $this->user_note, true);
        $criteria->compare('user_thumbnail', $this->user_thumbnail, true);
        $criteria->compare('user_pass', $this->user_pass, true);
        $criteria->compare('user_type', $this->user_type, true);
        $criteria->compare('user_phone', $this->user_phone, true);
        $criteria->compare('user_sec_phone', $this->user_sec_phone, true);
        $criteria->compare('user_email', $this->user_email, true);
        $criteria->compare('user_website', $this->user_website, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return User the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
	
	public function authenticate($attribute = null,$params = null) {
        if(!$this->hasErrors())  // we only want to authenticate when no input errors
    {
        $identity=new UserIdentity($this->user_email,$this->user_pass);
        $identity->authenticate();

		switch($identity->errorCode)
		{
			case UserIdentity::ERROR_NONE:
				$duration=$this->rememberMe ? 3600*24*30 : 0; // 30 days
				Yii::app()->user->login($identity,$duration);
				break;
			case UserIdentity::ERROR_USERNAME_INVALID:
				$this->addError('user_email','User email is incorrect.');
				break;
			default: // UserIdentity::ERROR_PASSWORD_INVALID
				$this->addError('user_pass','Password is incorrect.');
				break;
		}
    }
	}

}
