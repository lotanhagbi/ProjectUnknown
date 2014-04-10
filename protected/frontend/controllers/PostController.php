<?php

class PostController extends CController {

    /**
     * Lists all models.
     */
    public function actionIndex() {
        
        $videoProjects = Project::model()->findAll('project_media_type=3');
        $topProjects = Project::model()->findAll('project_media_type=2');
        
        $this->render('index',array(
            'videoProjects' => $videoProjects,
            'topProjects' => $topProjects
        ));
    }

}

?>