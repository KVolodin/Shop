<?php
    class Errors extends Controller {
    public function __construct($message="Обработчик ошибок") {
        parent::__construct();

        $this->view->msg = $message;
        $this->view->render('error/index',true);
    }
}
?>
