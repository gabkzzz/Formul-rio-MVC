<?php
// 1. Incluir configurações e arquivos
require_once 'config/database.php';
require_once 'controllers/controller.php';

// 2. Iniciar conexão com Banco
$database = new Database();
$db = $database->getConnection();

// 3. Instanciar Controller
$controller = new ContatoController($db);

// 4. Roteamento Simples
$acao = isset($_GET['acao']) ? $_GET['acao'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Decide o que fazer baseado na ação
switch ($acao) {
    case 'salvar':
        $controller->salvar();
        break;
    case 'deletar':
        if ($id) {
            $controller->deletar($id);
        }
        break;
    default:
        $controller->index();
        break;
}
?>