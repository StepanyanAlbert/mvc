<?php

session_start();
if(isset($_POST['language'])){
    $_SESSION['lang']=$_POST['language'];
    switch ($_POST['language']){
        case '1':$_SESSION['lang']='arm';break;
        case '2':$_SESSION['lang']='ru';break;
        case '0': $_SESSION['lang']='en';break;
        default: $_SESSION['lang']='en';

    }

    }
require_once 'core/bootstrap.php';
require_once 'core/controller.php';
require_once 'core/model.php';
require_once 'core/view.php';


$control =new Bootstrap();

?>