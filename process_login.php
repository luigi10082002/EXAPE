<?php

include 'db.php';

session_start();

$nome = $_POST['nome'];
$senha = $_POST['senha'];

$conn = new Conexao();

$sql = "SELECT id FROM usuarios WHERE nome = '$nome' AND senha = '$senha'";

$stmt = $conn->consulta($sql);

foreach ($stmt as $row) {
    $id = $row['id'];
}

if(!empty($id)) {

    $_SESSION['id'] = $id;
    header("Location:cadastro_tenis.php");

} else {
    header("Location:login.php?r=1");
}


?>