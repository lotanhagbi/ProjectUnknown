<?php

class PostController extends CController {

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $this->render('index');
    }

    public function actionTest($id) {
        $id = (int) $id;
        $this->render('test', array('ID' => $id));
    }

}

?>