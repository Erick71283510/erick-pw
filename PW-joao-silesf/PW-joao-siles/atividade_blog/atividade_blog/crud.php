<?php
// Conectar ao banco de dados 
$db = new mysqli ('localhost' , 'root' , '' , 'crud' );
//Funções para CRUD
function getNomes() {
    global $db;
    $sql = "SELECT * FROM nomes";
    $result = $db->query($sql);
    while($row = $result->fetch_assoc()) {
        $nomes[] = $row;
    }

    return $nomes;

}

function adicionarNome($nomes) {
    global $db;
    $sql = "INSERT INTO nomes (nomes) VALUES ('$nomes')";
    $db->query($sql);
}

function editarNome($id, $nomes) {
    global $db;
    $sql = "UPDATE npmes SET nome = '$nomes' WHERE id = $id";
    $db->query($sql);
}

function excluirNomes($id) {
    global $db;
    $sql = "DELETE FROM nomes WHERE id = $id";
    $db->query($sql);
}

// Ações do CRUD
$acao = isset($_GET['açao']) ? $_GET['acao']: null;
$id = isset($_GET['id']) ? intval($_GET['id']): 0;
$nome = isset($_POST['nome']) ? $_POST['nome']; '';

if ($acao === 'adicione') {
    adicionarNome($nome);
    header('Location; crud.php');
    exit();
}
    elseif ($acao === 'editar'){
        $id = intval($_GET['id']);
        
    }
