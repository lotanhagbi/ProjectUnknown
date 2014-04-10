<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WebUser
 *
 * @author Lotan
 */
class WebUser extends CWebUser {

    // Store model to not repeat query.
    private $_user;

    function __construct(User $user = null) {
//        parent::__construct();

        if ($this->_user !== NULL) {
            $this->_user = $user;
        }
    }

// Return first name.
// access it by Yii::app()->user->first_name
    function getFirst_Name() {
        $user = $this->loadUser(Yii::app()->user->id);
        return $user->first_name;
    }

// This is a function that checks the field 'role'
// in the User model to be equal to 1, that means it's admin
// access it by Yii::app()->user->isAdmin()
    function isAdmin() {
        $user = $this->loadUser(Yii::app()->user->id);
        return intval($user->role) == 0;
    }

    // Load user model.
    protected function loadUser($id = null) {
        if ($this->_user === null && $id !== null) {
            $this->_user = User::model()->find('id=' . $id);
        }
        return $this->_user;
    }

}
?>