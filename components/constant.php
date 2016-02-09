<?php

class Constant
{
    public    $project_name;
    public    $host;
    public    $req_scheme;
    public   function __construct(){
     $this->req_scheme=$_SERVER['REQUEST_SCHEME'].'://';
    $this->host=$_SERVER['HTTP_HOST'];
    $this->project_name='/mvc2_multilanguage/';
       return $this->host;
    }
}