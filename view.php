<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Agenda MVC TiDB</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 0 auto; padding: 20px; background-color: #f4f4f9; }
        h2 { color: #333; }
        
        /* Formulário */
        .form-box { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        input { width: 95%; padding: 10px; margin: 5px 0; border: 1px solid #ddd; border-radius: 4px; }
        button { background-color: #28a745; color: white; padding: 10px 15px; border: none; cursor: pointer; border-radius: 4px; }
        button:hover { background-color: #218838; }

        /* Tabela */
        table { width: 100%; border-collapse: collapse; margin-top: 20px; background: white; }
        th, td { padding: 12px; border-bottom: 1px solid #ddd; text-align: left; }
        th { background-color: #007bff; color: white; }
        .btn-delete { color: red; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>

    <h2>📘 Agenda de Contatos (TiDB)</h2>

    <div class="form-box">
        <form action="index.php?acao=salvar" method="POST">
            <input type="text" name="nome" placeholder="Nome Completo" required>
            <input type="email" name="email" placeholder="E-mail">
            <input type="text" name="telefone" placeholder="Telefone">
            <button type="submit">Salvar Contato</button>
        </form>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($contatos) > 0): ?>
                <?php foreach ($contatos as $contato): ?>
                <tr>
                    <td><?php echo $contato['id']; ?></td>
                    <td><?php echo htmlspecialchars($contato['nome']); ?></td>
                    <td><?php echo htmlspecialchars($contato['email']); ?></td>
                    <td><?php echo htmlspecialchars($contato['telefone']); ?></td>
                    <td>
                        <a href="index.php?acao=deletar&id=<?php echo $contato['id']; ?>" class="btn-delete" onclick="return confirm('Tem certeza?');">Excluir</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="5">Nenhum contato cadastrado.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>
</html>