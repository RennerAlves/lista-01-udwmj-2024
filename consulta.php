<?php
// Incluindo o arquivo que contém a classe Conecta
require_once 'conecta.php';

class Consulta {

    public function login($email, $senha) {
        $conn = new Conecta();
        $con = $conn->conectar();

        // Utilização de prepared statement para evitar SQL Injection
        $stmt = $con->prepare("SELECT * FROM Clientes WHERE email = ? AND senha = ?");
        $stmt->bind_param("ss", $email, $senha);
        $stmt->execute();

        $result = $stmt->get_result();
        $user = $result->fetch_array(MYSQLI_ASSOC);

        // Fechar a declaração e a conexão
        $stmt->close();
        $con->close();

        return $user;
    }
}

// Processamento do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['login'];
    $senha = $_POST['senha'];

    $consulta = new Consulta();
    $user = $consulta->login($email, $senha);

    if ($user) {
        // Sucesso no login, exibir mensagem de sucesso
        echo "<script>alert('Login bem-sucedido!');</script>";
        echo "<script>window.location.href = 'bemvindo.php';</script>"; // Opcional: Redireciona para outra página
    } else {
        // Falha no login, exibir mensagem de erro
        echo "<script>alert('Senha incorreta ou usuário não encontrado');</script>";
        echo "<script>window.history.back();</script>"; // Volta para a página anterior
    }
}
?>
