<?php

include 'db.php';

session_start();

$nome = $_POST['nome'];
$preco = $_POST['preco'];

if(empty($nome)) {
    header("Location:cadastro_tenis.php?r=1");
} else if(empty($preco)) {
    header("Location:cadastro_tenis.php?r=2");
} else {
    $conn = new Conexao();

    $id = $_SESSION['id'];

    $sql = "INSERT INTO tenis (nome, preco, id_usuario) values ('$nome', $preco, $id)";
    $conn->consulta($sql);

    header("Location:mostra_tenis.php");
}

?>