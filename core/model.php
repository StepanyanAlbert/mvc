<?php

class Model
{
    private $host = 'localhost';
    private $u_name = 'root';
    private $pass = '';
    protected $dbname='users';
    public $connect;


    public function __construct()
    {
        try {
            $this->connect = new PDO('mysql:host=' . $this->host, $this->u_name, $this->pass);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sth = $this->connect->prepare("Create database if not exists $this->dbname");
            $sth->execute();
            $db = $this->connect->prepare("use $this->dbname");
            $db->execute();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }


    }
function setAttributs(){

    $sth = $this->connect->query('SHOW COLUMNS FROM ' . $this->tableName);

//Fetch our result.
    $array = $sth->fetchAll(PDO::FETCH_ASSOC);
    foreach($array as $key =>$value){
       $this->attributes[]=$value["Field"];
    }


}
    function getAttributes(){

        return $this->attributes;
    }
    public function __destruct()
    {
        $this->connect = null;
    }
    public function getAll()
    {
        $sth=$this->connect->prepare("Select * from $this->tableName");
        $sth->execute();
        $result=$sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}