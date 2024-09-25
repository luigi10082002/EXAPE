<?php
class Conexao {

    private $conn;

    public function conecta() {

        try {
            $this->conn = new PDO('mysql:host=localhost;dbname=db_php', "root", "");
        } catch (PDOException $e) {
            print_r($e);
        }

    }

    public function consulta($sql) {

        if($this->conn == null) {
            $this->conecta();
        }

        return $this->conn->query($sql);
        
    }
}

/*$conn = new Conexao();
$conn = $conn->conecta();*/


?>