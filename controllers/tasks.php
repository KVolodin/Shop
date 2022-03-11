<?php
class Tasks extends Controller {
    public function __construct() {
        parent::__construct();
    }
    public function index($p = 0) {
        $this->view->all_task = $this->model->all_task($p);
        $this->view->page_count = $this->model->page_count();
        $this->view->p = $p;
        $this->view->render('tasks/index');
    }
}
?>
