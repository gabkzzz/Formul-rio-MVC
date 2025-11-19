<?php
require_once 'models/model.php';

class ContatoController {
    private $model;

    public function __construct($db) {
        $this->model = new ContatoModel($db);
    }

    public function index() {
        // Busca os dados e carrega a view
        $stmt = $this->model->listar();
        $contatos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        include 'views/view.php';
    }

    public function salvar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];

            $this->model->criar($nome, $email, $telefone);
        }
        // Redireciona para evitar reenvio de formulário
        header('Location: index.php');
    }

    public function deletar($id) {
        $this->model->excluir($id);
        header('Location: index.php');
    }
}
?>