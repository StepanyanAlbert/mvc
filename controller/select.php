<?php


class Select extends Controller
{
    public function news(){
        parent::__construct('select');
        $this->view->send_view('general_index/home',array('selected'=>$this->model->result));
    }
     public function all_select(){
     parent::__construct('select');
   $this->view->send_view('select/index',array('selected'=>$this->model->result));
 }
public function about(){
    parent::__construct('select');
    $this->view->send_view('select/about');
}

}