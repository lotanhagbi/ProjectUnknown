<?php

class UserController extends CController {

    public function actionCreate() {
        $this->render('create');
    }

    public function actionGet($id) {
        $id = (int) $id;

        $user = User::model()->findByPk($id);

        $this->render('get',array('user'=>$user));
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
