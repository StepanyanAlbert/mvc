<?php
class Insert_model extends Model{
    public $resu;
    public function __construct() {
        parent::__construct();
       // if($param1!==null){
           $sth=$this->connect->query("Insert into users  (name,surname) values ('jack','Kain')");
           
          return $this->resu='inserted!!!';
       // }
    }
}
