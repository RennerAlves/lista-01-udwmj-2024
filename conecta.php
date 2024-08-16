<?php

class Conecta {

    private $host = "localhost";
    private $user = "projeto";  // Substitua por seu usuário do MySQL
    private $password = "projeto";  // Substitua pela senha do seu MySQL
    private $database = "projeto";

    public function conectar() {
        $con = new mysqli($this->host, $this->user, $this->password, $this->database);

        if ($con->connect_error) {
            die("Conexão falhou: " . $con->connect_error);
        }

        return $con;
    }
}

?>
