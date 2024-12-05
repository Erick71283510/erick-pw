<?php
 require "conn.php";

 $title_notice = filter_input(INPUT_POST, 'notice');
 $description_notice = filter_input(INPUT_POST, 'description');

if(isset($title_notice) && !empty($title_notice) && isset($description_notice) && !empty($description_notice)) {
    $sql = $pdo->prepare("INSERT INTO notices (title_notice, description_notice) VALUES (:notice, :description)");
    $sql->bindValue(':notice', $title_notice);
    $sql->bindValue(':description', $description_notice);
    $sql->execute();

    echo "
    <script>
        alert('Cadastrado com sucesso!');    
        window.location.href = 'index.php';
    </script>
    ";
    exit;
} else {
    echo "
    <script>
        alert('Por favor preencha todos os campos!');    
        window.location.href = 'cadastrar.php';
    </script>
    ";
    exit;
}
 ?>