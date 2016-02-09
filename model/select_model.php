<?php


class Select_model extends Model
{
    public $result;
public  function __construct()
{
    parent::__construct();


    $sth = $this->connect->prepare('select * from users');
    $sth->execute();
    $this->result = $sth->fetchAll(PDO::FETCH_OBJ);
    return $this->result;

}
}