<?php

class Bootstrap {
    public $url='index';
    public function __construct() {
       
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url); 
        $path = 'controller/' . $url[0] . '.php';
     
        if(!empty($url[0])){
        if (file_exists($path)){
            require_once $path;
            $control = new $url[0]();
            if (isset($url[1])) {
           if (method_exists($control,$url[1])){
                $control->{$url[1]}();
                    if (isset($url[2])) {
                        $control->{$url[1]}($url[2]);
                    }
                } else { 
                    echo '<br>Unknown method';
                }
            }else{
                $url[1]=$this->url;
            }
        } else{
            require 'controller/error.php';
            $control=new Error();
        }
        }else{
             require 'controller/select.php';
       
            
        }
    }
}
