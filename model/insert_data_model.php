<?php
class Insert_data_model extends Model{
    public function __construct()
    {
        parent::__construct();

    }

    public function  set_data($name,$lastname,$email,$password){
        $this->name=$name;
        $this->lastname=$lastname;
        $this->email=$email;
        $this->password=$password;
        $sth=$this->connect->prepare("Insert into users (`user_firstname`,`user_lastname`,`user_email`,`user_password`) values ('$name','$lastname','$email','$password')");
        $sth->execute();

    }

}