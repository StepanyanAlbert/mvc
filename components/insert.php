<?php
require_once 'get_user_info.php';
class Insert extends Model
{

    public  function __construct(){

    $this->dbname='users_info';
    parent::__construct();

    $new=new Get_user_info();
    $ip=$new->ip;
    $browser=$new->browser;
    $this->connect->prepare("CREATE table if not EXISTS users_inf(
id int(11)  not null PRIMARY key AUTO_INCREMENT,
    users_id   varchar(16) ,
    users_browser  text
)");
        //$sth=$this->connect->prepare("insert into users_inf (users_id,users_browser) values ('$ip','$browser')");
        //$sth->execute();
    parent::__destruct();
}
}