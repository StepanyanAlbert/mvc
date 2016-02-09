<?php

class Bootstrap
{
    public $default_action='about';
    public $index_page='select';
    public function __construct(){
        $files = glob('model/*.php');

        foreach ($files as $file) {
            require($file);

        }
        $fil = glob('components./*.php');

        foreach ($fil as $fi) {
            require($fi);
        }
        $new=new Insert();

        $url=isset($_GET['url'])? $_GET['url'] :null;
        $url=rtrim($url,'/');
        $url=explode('/',$url);
        if(!empty($url[0])){
            $path='controller/'.$url[0].'.php';
            if(file_exists($path)){
                require_once $path;
                $control=ucfirst(($url[0]));
                $obj=new $control;
               if(isset($url[1]) && method_exists($obj,$url[1])){
                 $obj->$url[1]();
                    if(isset($url[1],$url[2])){
                        $obj->{$url[1]}($url[2]);
                    }

                }
               else{
                    $default_action=$this->default_action;
                   $obj->$default_action();
                }
            }

        }
        else{
            require_once 'Controller/'.$this->index_page.'.php';
           $control=ucfirst(($this->index_page));
           $obj=new $control() ;
            $action=$this->default_action;
           $obj->$action();
        }

    }

}