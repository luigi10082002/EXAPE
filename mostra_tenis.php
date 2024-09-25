<?php

include 'db.php';
include 'navbar.php';

$conn = new Conexao();

$sql = "SELECT * FROM tenis";
$stmt = $conn->consulta($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mostra</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Preço</th>

    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($stmt as $row) {
        echo"<tr>";
        echo"<td>" . $row['nome'] . "</td>";
        echo"<td>" . $row['preco'] . "</td>";
        echo"</tr>";
    }
    
    ?>
  </tbody>
</table>
</body>
</html>