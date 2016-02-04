<?php

class Select_model extends Model {

    public $result;

    public function __construct() {
        parent::__construct();
        $connect = $this->connect->query("select * from users");
        $res = $connect;
        $this->result = $res->fetchAll(PDO::FETCH_ASSOC);
        return $this->result;
    }
}
