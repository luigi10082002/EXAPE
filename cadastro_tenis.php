<?php

include 'navbar.php';

session_start();

if($_SESSION['id'] == null || empty($_SESSION['id'])){
    header("Location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Tênis</title>
</head>
<body>
    <?php
    
    if($_GET['r'] == 1) {

        echo"<p>Digite um nome para o tênis</p>";       

    } else if($_GET['r'] == 2) {
    
        echo"<p>Digite um preço para o tênis</p>";

    }?>
    <form action="process_cadastro_tenis.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <label for="preco">Preco</label>
        <input type="number" name="preco" id="preco">
        <input type="submit" value="submit">
    </form>
</body>
</html>