<?php

class User_model extends  Model{
    public function del($id){
     parent::__construct();
            $sth = $this->connect->prepare("DELETE FROM `users` WHERE `user_id`='$id' LIMIT 1");
            $sth->execute();
$this->tableName='user_';
     parent::__destruct();
      }




}