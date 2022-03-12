<?php
class Categories extends Controller {
    public function __construct() {
        parent::__construct();
    }

    public function run() {
        $error = $this->model->run();
        if (isset($error)) {
            require 'controllers/errors.php';
            $controller = new Errors($error);
        }
        else {
            require 'controllers/success.php';
            $controller = new Success("Задача создана");
            header('Location: '.URL.'tasks/index');
        }
    }
    public function index() {
        $this->view->render('categories/index');
    }
}
?>
