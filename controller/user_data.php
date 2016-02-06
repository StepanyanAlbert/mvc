<?php


class User_data extends Controller
{
  private $name;
  private $lastname;
  private $email;
  private $password;
    public function  about(){
        if(preg_match('/[a-zA-Z]{4,}/',$_POST['name'])){
            $this->name=$_POST['name'];
            $this->view->send_view('registration/default_',array('check'=>1));
            $this->lastname=$_POST['last'];
            $this->email=$_POST['email'];
            $this->password=$_POST['password'];
            parent::__construct('insert_data');
            $this->model->set_data($this->name,$this->lastname,$this->email,$this->password);


        }  else{
            parent::__construct();
            $this->view->send_view('registration/default_',array('check'=>0));

        }



    }
}
