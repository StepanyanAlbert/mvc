<?php
class Insert_data_model extends Model{
    private $name;
    private $lastname;
    private $email;
    private $password;
    public function __construct()
    {
        parent::__construct();

    }

    public function  set_data($name,$lastname,$email,$password){
        $this->name=$name;
        $this->lastname=$lastname;
        $this->email=$email;
        $this->password=$password;
        var_dump($name,$lastname,$email,$password);
    }

}