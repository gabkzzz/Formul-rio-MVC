<?php
class ContatoModel {
    private $conn;
    private $table_name = "contatos";

    public function __construct($db) {
        $this->conn = $db;
    }

    // CREATE
    public function criar($nome, $email, $telefone) {
        $query = "INSERT INTO " . $this->table_name . " (nome, email, telefone) VALUES (:nome, :email, :telefone)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":telefone", $telefone);

        return $stmt->execute();
    }

    // READ
    public function listar() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY id DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // DELETE
    public function excluir($id) {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }
}
?>