<?php
class Tasks_Model extends Model {
    public function __construct() {
    parent::__construct();
    }

    public function all_task($p) {
    $p=$p*PER_PAGE;
    $sql= "SELECT * FROM shop LIMIT $p,".PER_PAGE;
    $sth = $this->db->query("$sql");
    return $sth->fetchAll();
    }
    public function page_count() {
        $sth = $this->db->query("SELECT count(*) FROM shop")->fetchColumn();
        $sth = ceil($sth/PER_PAGE);
        return  $sth;
    }
}
?>
