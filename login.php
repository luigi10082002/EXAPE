<?php

include 'navbar.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <?php
    if($_GET['r'] == 1) {

        echo"<p>Erro no Login</p>";       

    }?>

    <form action="process_login.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha">
        <input type="submit" value="submit">
    </form>

</body>
</html>