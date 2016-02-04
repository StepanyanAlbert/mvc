<?php

class Model
{
    private $host='localhost';
    private $u_name='root';
    private $pass='';
    public  $dbname='users';
    public  $connect;

    public function __construct()
{

    try{
        $this->connect=new PDO('mysql:host='.$this->host.';dbname='.$this->dbname,$this->u_name,$this->pass);
        $this->connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    }
    catch(PDOException $ex){
        echo $ex->getMessage();
    }
}
public function __destruct()
{
 $this->connect=null;
}
}