<?php
class Model {
    public function __construct() {
        $this->db = new Database();
        $this->db->query("SET NAMES utf8");
    }
    public function get_categories() {
        $sql= "SELECT * FROM categories";
        $sth = $this->db->query("$sql");
        return $sth->fetchAll();
    }
}
?>
