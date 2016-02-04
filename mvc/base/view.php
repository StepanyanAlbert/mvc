<?php
class View
{
  public function send_some_view($file_name,$data = [])
    {
        extract($data);
        require_once 'view/header.php';
        require_once 'view/' . $file_name . '.php';
        require_once 'view/footer.php';
    }
}