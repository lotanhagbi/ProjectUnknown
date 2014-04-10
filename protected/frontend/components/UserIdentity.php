<?php

class UserIdentity extends CUserIdentity {

    private $_id;

    public function authenticate() {
        // fetch data from DB
        $record = User::model()->findByAttributes(array('user_email' => $this->name));

        if ($record === null) {
            // the user has not been found
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } else if ($record->user_pass !== $this->password) {
            // the user's password is incorrect
//        else if($record->user_pass!==crypt($this->password,$record->user_pass))
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        } else {
            // the user has been authenticated
            $this->_id = $record->id;
            $this->errorCode = self::ERROR_NONE;
        }

        return !$this->errorCode;
    }

    public function getId() {
        return $this->_id;
    }

}
