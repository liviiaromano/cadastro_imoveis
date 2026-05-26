<?php

require_once 'Database.php';

class Imovel {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

        public function listarImovel() {
        $sql = "SELECT * FROM imovel";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}