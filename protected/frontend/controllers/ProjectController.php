<?php

class ProjectController extends CController {

    public function actionCreate() {
        $project = new Project('create');

        // uncomment the following code to enable ajax-based validation
//        if (isset($_POST['ajax']) && $_POST['ajax'] === 'user-register-form') {
//            echo CActiveForm::validate($model);
//            Yii::app()->end();
//        }

        if (isset($_POST['Project'])) {
            $project->attributes = $_POST['Project'];
            if ($project->validate() && $project->save()) {
                $this->redirect(array('project/'.$project->id));
            }
        }
        $this->render('create', array('project' => $project));
    }

    public function actionGet($id) {
        $id = (int) $id;

        // fetch user by id
        $project = Project::model()->find('id=' . $id);

        // render view
        $this->render('get', array('project' => $project));
    }

    public function actionIndex() {
        $this->render('index');
    }

    public function actionUpdate() {
        $this->render('update');
    }

    // Uncomment the following methods and override them if needed
    /*
      public function filters()
      {
      // return the filter configuration for this controller, e.g.:
      return array(
      'inlineFilterName',
      array(
      'class'=>'path.to.FilterClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }

      public function actions()
      {
      // return external action classes, e.g.:
      return array(
      'action1'=>'path.to.ActionClass',
      'action2'=>array(
      'class'=>'path.to.AnotherActionClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }
     */
}
