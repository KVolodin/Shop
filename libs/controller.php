<?php

class Controller {
    public function __construct() {
        $this->view = new View();
    }

    public function loadModel($name) {
        $path = 'models/'.$name.'_model.php';
        if(file_exists($path)) {
            require 'models/'.$name.'_model.php';
            $modelName = $name.'_Model';
            $this->model = new $modelName();
            $this->view->get_categories = $this->model->get_categories();
        }
    }

    public function call($function, $arg = NULL) {
        if(method_exists($this, $function)) {
            if (isset($arg))
            {
                $this->$function($arg);
            }
            else
            {
                $this->$function();
            }
            return true;
        } else {
            return false;
        }
    }
}
?>
