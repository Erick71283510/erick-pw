<?php
// store.php
require 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$nome, $email, $senha]);

header("Location: read.php");
exit;
?>