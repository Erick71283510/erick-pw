<?php
// edit.php
require 'conexao.php';

$id = $_GET['id'];
$sql = "SELECT * FROM usuarios WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuário</title>
</head>
<body>
    <h2>Editar Usuário</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
        Nome: <input type="text" name="nome" value="<?= $usuario['nome'] ?>" required><br>
        E-mail: <input type="email" name="email" value="<?= $usuario['email'] ?>" required><br>
        <button type="submit">Salvar Alterações</button>
    </form>
</body>
</html>