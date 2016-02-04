<?php


class Error extends Controller{
   
    public function __construct(){
        parent::__construct();
        $this->view->send_some_view('error/index');
    }
}
