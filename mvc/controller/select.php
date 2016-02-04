<?php

class Select extends Controller
{  
    
    private $hasCalled=false;
      function __destruct()
    {
        if(!$this->hasCalled)
        {
           parent::__construct('select');
           $this->view->send_some_view('select/default');
    }
    
        }   
        public function index(){
            
        }
    public function different()
    {
     
       $this->hasCalled=true;
        parent::__construct('select');
        $this->view->send_some_view('select/index',array('aaa'=>1,'ddsadas'=>'ssss','selected_data'=>$this->model->result));
    return 'fgfgfg';
    }
    
    }