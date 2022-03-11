<?php
class Edit extends Controller {
    public function __construct() {
        parent::__construct();
    }
    public function run($id) {
        $this->view->id = $id;
        $this->view->run = $this->model->run($id);
        $this->view->render('edit/index');
    }
    public function delete($id) {
        $this->model->delete($id);
        header('Location: '.URL.'tasks/index');
    }
    public function edit($id) {
        $error = $this->model->edit($id);
        if (is_string($error)) {
            require 'controllers/errors.php';
            $controller = new Errors($error);
            header('Location: '.URL.'edit/run/'.$id);
        }
        else
        header('Location: '.URL.'tasks/index');
    }
    public function ajax() {
        $this->model->ajax();
    }
}
?>
