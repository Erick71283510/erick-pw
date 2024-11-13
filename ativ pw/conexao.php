<?php
// conexao.php
$host = 'localhost';
$dbname = 'crud_php';
$user = 'root'; // Substitua pelo seu usuário do MySQL
$password = ''; // Substitua pela sua senha do MySQL

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Erro na conexão: ' . $e->getMessage();
}
?>