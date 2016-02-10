<?php

class User_model extends  Model{
    public $tableName = 'users';
    public function __construct()
    {
        parent::__construct();
        parent::setAttributs();

    }

    public function del($id)
    {

        $sth = $this->connect->prepare("DELETE FROM `users` WHERE `user_id`='$id' LIMIT 1");
        $sth->execute();
        $this->tableName = 'user_';
        parent::__destruct();
    }




}