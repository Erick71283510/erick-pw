<?php
// delete.php
require 'conexao.php';

$id = $_GET['id'];
$sql = "DELETE FROM usuarios WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);

header("Location: read.php");
exit;
?>