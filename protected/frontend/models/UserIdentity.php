<?php

class UserIdentity extends CUserIdentity
{
    private $id;
    public function authenticate()
    {
        $record=User::model()->findByAttributes(array('user_email'=>$this->username));
        if($record===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if($record->user_pass!==crypt($this->password,$record->user_pass))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->id=$record->id;
            $this->errorCode=self::ERROR_NONE;
        }
        return !$this->errorCode;
    }
 
    public function getId()
    {
        return $this->id;
    }
}
