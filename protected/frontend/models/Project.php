<?php

/**
 * This is the model class for table "{{projects}}".
 *
 * The followings are the available columns in table '{{projects}}':
 * @property string $id
 * @property string $project_name
 * @property string $project_title
 * @property string $project_description
 * @property string $project_publish_date
 * @property string $project_lastupdate
 * @property string $project_whatisit
 * @property string $project_users
 * @property string $project_needs
 * @property string $project_insight
 * @property string $project_opportunity
 * @property string $project_competition
 * @property string $project_value_creation
 * @property string $project_feasibility
 * @property string $project_media_type
 * @property string $project_media_link
 *
 * The followings are the available model relations:
 * @property Users[] $tblUsers
 * @property ProjcetMediaType $projectMediaType
 */
class Project extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{projects}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('project_name, project_title, project_description', 'required'),
            array('project_name', 'length', 'max' => 30),
            array('project_title,project_media_link', 'length', 'max' => 150),
            array('project_description', 'length', 'max' => 4000),
            array('project_media_type', 'length', 'max' => 2),
            array('project_whatisit, project_users, project_needs, project_insight, project_opportunity, project_competition, project_value_creation, project_feasibility', 'length', 'max' => 200),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, project_name, project_title, project_description, project_publish_date, project_lastupdate, project_whatisit, project_users, project_needs, project_insight, project_opportunity, project_competition, project_value_creation, project_feasibility', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'projectOwners' => array(self::MANY_MANY, 'User', '{{project_owners}}(project_id, user_id)'),
            'projectMediaType' => array(self::BELONGS_TO, 'ProjectMediaType', 'project_media_type'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'project_name' => 'Project Name',
            'project_title' => 'Title',
            'project_description' => 'Description',
            'project_publish_date' => 'Publish Date',
            'project_lastupdate' => 'Lastupdate',
            'project_whatisit' => 'What is it?',
            'project_users' => 'Users',
            'project_needs' => 'Needs',
            'project_insight' => 'Insight',
            'project_opportunity' => 'Opportunity',
            'project_competition' => 'Competition',
            'project_value_creation' => 'Value Creation',
            'project_feasibility' => 'Feasibility',
            'project_media_type' => 'Media Type',
            'project_media_link' => 'Media Link',
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
        $criteria->compare('project_name', $this->project_name, true);
        $criteria->compare('project_title', $this->project_title, true);
        $criteria->compare('project_description', $this->project_description, true);
        $criteria->compare('project_publish_date', $this->project_publish_date, true);
        $criteria->compare('project_lastupdate', $this->project_lastupdate, true);
        $criteria->compare('project_whatisit', $this->project_whatisit, true);
        $criteria->compare('project_users', $this->project_users, true);
        $criteria->compare('project_needs', $this->project_needs, true);
        $criteria->compare('project_insight', $this->project_insight, true);
        $criteria->compare('project_opportunity', $this->project_opportunity, true);
        $criteria->compare('project_competition', $this->project_competition, true);
        $criteria->compare('project_value_creation', $this->project_value_creation, true);
        $criteria->compare('project_feasibility', $this->project_feasibility, true);
        $criteria->compare('project_media_type', $this->project_media_type, true);
        $criteria->compare('project_media_link', $this->project_media_link, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Project the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
