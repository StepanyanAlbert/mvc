<?php

class Model
{
    private $host = 'localhost';
    private $u_name = 'root';
    private $pass = '';
    protected $dbname='users';
    public $connect;
    public $tableName;
    public function getAll(){

        $qyer = 'select * from '.$this->tableName;
    }
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

    public function __destruct()
    {
        $this->connect = null;
    }

}