<?php

class UserController extends CController {

    public function actionRegister() {
        $user = new User('register');

        // uncomment the following code to enable ajax-based validation
//        if (isset($_POST['ajax']) && $_POST['ajax'] === 'user-register-form') {
//            echo CActiveForm::validate($model);
//            Yii::app()->end();
//        }

        if (isset($_POST['User'])) {
            $user->attributes = $_POST['User'];
            if ($user->validate() && $user->save()) {
                $this->redirect(array('user/' . $user->id));
            }
        }
        $this->render('register', array('user' => $user));
    }

    public function actionLogin() {
        $user = new User('login');
        
        if (isset($_POST['User'])) {
            $user->attributes = $_POST['User'];
            if ($user->validate() && $user->authenticate()) {
                $this->redirect(Yii::app()->user->returnUrl);
            }
        }
        
        $this->render('login', array('user' => $user));
    }
    
    public function actionLogout(){
        Yii::app()->user->logout();
        $this->redirect('/');
    }

    public function actionGet($id) {
        $id = (int) $id;

        // fetch user by id
        $user = User::model()->find('id=' . $id);

        // render view
        $this->render('get', array('user' => $user));
    }

    public function actionIndex() {
        $this->render('index');
    }

    public function actionUpdate() {
        $this->render('update');
    }

    public function actionThumbnail($id) {
        $id = (int) $id;

        // fetch user by id
        $user = User::model()->find('id=' . $id);

        // return the content as image type
        header('Content-type: image/jpg');
        echo $user->user_thumbnail;
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
