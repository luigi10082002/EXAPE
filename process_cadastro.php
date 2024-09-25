<?php

include 'db.php';

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$confirmsenha = $_POST['confirmsenha'];

if(!empty($nome) || !empty($senha) || !empty($confirmsenha)) {

    if($senha != $confirmsenha){
        header("Location:cadastro.php?r=1");
    } else {

        $conn = new Conexao();

        $sql = "INSERT INTO usuarios (nome, senha) values ('$nome', '$senha')";
        $conn->consulta($sql);

        header("Location:mostra_tenis.php");
    }

} else {

    header("Location:cadastro.php?r=2");

}

?>