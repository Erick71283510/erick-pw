<?php
// update.php
require 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "UPDATE usuarios SET nome = ?, email = ? WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$nome, $email, $id]);

header("Location: read.php");
exit;
?>