<?php
// read.php
require 'conexao.php';

$sql = "SELECT * FROM usuarios";
$stmt = $pdo->query($sql);
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuários</title>
</head>
<body>
    <h2>Lista de Usuários</h2>
    <a href="create.php">Cadastrar Novo Usuário</a><br><br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= $usuario['id'] ?></td>
                <td><?= $usuario['nome'] ?></td>
                <td><?= $usuario['email'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $usuario['id'] ?>">Editar</a> |
                    <a href="delete.php?id=<?= $usuario['id'] ?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>