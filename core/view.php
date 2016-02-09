<?php
class View
{
  
    public function send_view($file_path,$data=[])
    {
         extract($data);
         require_once 'view/header.php';
         require_once 'view/'.$file_path.'.php';
         require_once 'view/footer.php';

    }
}