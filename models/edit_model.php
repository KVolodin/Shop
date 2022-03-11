<?php
class edit_Model extends Model {
    public function __construct() {
        parent::__construct();
    }
    public function run($id) {
            $sth = $this->db->prepare("SELECT * FROM `shop` WHERE id_shop = :id_shop");
            $sth->execute(array(
                ':id_shop' => (int)$id
            ));
            $count = $sth-> rowCount();
            if($count > 0) {
                return $sth->fetch();
            }
    }
    public function edit($id) {
        if (isset($_POST['name']) && isset($_POST['categories']) &&  isset($_POST['price'])) {
            if ($_POST['name']!="" && $_POST['categories'] !="" && $_POST['price'] !="") {
            echo $_POST['name'];
            echo $_POST['categories'];
            echo $_POST['price'];
            $sth = $this->db->prepare("UPDATE shop SET name = :name, categories = :categories, price = :price WHERE id_shop = :id_shop");
            $sth->execute(array(
                ':id_shop' => (int)$id,
                ':name' => $_POST['name'],
                ':categories' => $_POST['categories'],
                ':price' => $_POST['price']
            ));
            }
            else return "Вы не ввели данные";
        }
        else  return "Вы не ввели данные";
    }
    public function delete($id) {
        $sth = $this->db->prepare('DELETE FROM `shop` WHERE id_shop = :id_shop');
        $sth->execute(array(
            ':id_shop' => (int)$id
        ));
    }
    public function ajax() {
        if ($_POST){
            $id = (int)$_POST['id'];
            $table = $_POST['table'];
            $field = $_POST['field'];
            $value = $_POST['value'];
            echo $sql = "UPDATE `".$table."` SET `".$field."`='".$value."' WHERE id_shop = '".$id."'";
            $sth = $this->db->query($sql);
        }
    }
}
?>
