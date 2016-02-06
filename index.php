<?php
session_start();
if(isset($_POST['language'])){
    $_SESSION['lang']=$_POST['language'];
    switch ($_POST['language']){
    case 'arm':$_SESSION['lang']='arm';break;
    case 'rus':$_SESSION['lang']='rus'  ;break;
    case 'en': $_SESSION['lang']='en'   ;break;
    default: $_SESSION['lang']='en';

        
}
}

require_once 'core/bootstrap.php';
require_once 'core/controller.php';
require_once 'core/model.php';
require_once 'core/view.php';
require_once 'components/lang.php';

$control =new Bootstrap();

?>