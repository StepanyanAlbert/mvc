<?php
class Controller
{ public $model;
    public function __construct($model_name=null)
    {
        $this->view = new View();
        $path = 'model/' . $model_name . '_model.php';
        
        if (file_exists($path)) {
            require_once $path;
            $name = ucfirst($model_name . '_model');
            $this->model = new $name();
        }
    }
    /**
     * @param $model_name specifie the model which needs to be loaded
     */

           

}
        