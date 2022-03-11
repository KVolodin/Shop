<?php
class Record_Model extends Model {
    public function __construct() {
        parent::__construct();
    }

    public function run() {
        echo $_POST['name'];
        echo $_POST['categories'];
        echo $_POST['price'];
        if(preg_match('|^[а-яА-ЯёЁa-zA-Z0-9]+$|i', isset($_POST['name']))) {
            if (isset($_POST['name']) && isset($_POST['categories']) &&  isset($_POST['price'])) {
            if ($_POST['name']!="" && $_POST['categories'] !="" && $_POST['price'] !="") {
            $sth = $this->db->prepare("INSERT INTO `shop` (id_shop, name, categories, price) VALUES (NULL,:name, :categories, :price )");
            $sth->execute(array(
            ':name' => $_POST['name'],
            ':categories' => $_POST['categories'],
            ':price' => $_POST['price']
            ));
            }
            else  return "Вы не ввели данные";
            }
            else  return "Вы не ввели данные";
        }
        else return "В названии есть недопустимые символы";
    }
}
?>
