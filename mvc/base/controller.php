<?php

class Controller
{
    public $model;
    function __construct($model_name=null,$param_one=null){
        $this->view = new View();
        if($model_name !== null){
        require_once "model/".$model_name ."_model.php";
        $model_nam=$model_name.'_model';
        $this->model=new $model_nam();
        
        }
       
    }
  
}