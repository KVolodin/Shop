<?php
class Categories_Model extends Model {
    public function __construct() {
        parent::__construct();
    }

    public function run() {
        if (isset($_POST['categories_name'])) {
            if ($_POST['categories_name'] !="") {
                $sth = $this->db->prepare("INSERT INTO `categories` (`id_categories`, `categories_name`) VALUES (NULL,:categories_name )");
                $sth->execute(array(
                ':categories_name' => $_POST['categories_name']
                ));
            }
            else  return "Вы не ввели данные";
        }
        else  return "Вы не ввели данные";
    }
}