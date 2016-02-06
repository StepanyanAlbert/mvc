<?php
class Registration extends  Controller{

    public function about(){
        parent::__construct();
        $this->view->send_view('registration/index');
    }
}