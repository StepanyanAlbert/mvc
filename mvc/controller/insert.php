<?php

class Insert extends Controller{
   
    public function __construct($model_name = null) {
        parent::__construct('insert');
        $this->view->send_some_view('insert/index',array('var'=>$this->model->resu));
    }
      
}
