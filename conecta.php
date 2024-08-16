<?php

class Conecta {

    private $host = "localhost";
    private $user = "projeto"; 
    private $password = "projeto"; 
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
