<?php
class Success extends Controller {
    public function __construct($message="Успешно") {
        parent::__construct();

        $this->view->msg = $message;
        $this->view->render('success/index',true);
    }
}
?>
