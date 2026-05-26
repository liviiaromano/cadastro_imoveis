<?php

require_once 'Database.php';

class Imoveis {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function adicionarImoveis($nome, $localizacao, $valor, $tipo) {
        $sql = "INSERT INTO imovel (nome, localizacao, valor, tipo) VALUES (:nome, :localizacao, :valor, :tipo)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'nome' => $nome,
            'localizacao' => $localizacao,
            'valor' => $valor,
            'tipo' => $tipo
        ]);
    }

        public function listarImovel() {
        $sql = "SELECT * FROM imovel";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}