<?php

include 'navbar.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <?php
    
    if($_GET['r'] == 1) {

        echo"<p>Senhas são diferentes</p>";       

    } else if($_GET['r'] == 2) {
    
        echo"<p>Preencha todos os campos</p>";

    }?>
    <form action="process_cadastro.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha">
        <label for="senha">Confirmar senha</label>
        <input type="password" name="confirmsenha" id="confirmsenha">
        <input type="submit" value="submit">
    </form>

</body>
</html>