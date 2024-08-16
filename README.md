<hr>
<h1>Página de Login</h1>
<hr>

O presente projeto trata-se de uma página de login que foi desenvolvido em HTML, PHP e JavaScript.
A ideia principal envolveu a construção da estrutura de um banco de dados MySQL, que é consultado quando o usuário busca fazer login na aplicação.

Caso o e-mail e a senha constem no banco de dados, a aplicação emite um ALERT, utilizando JS, que o login foi bem sucedido.
Caso contrário, ela também emite um ALERT, mas indicando que o login não teve sucesso.

Construção do banco de dados:
--> CREATE DATABASE projeto;
--> USE PROJETO;
--> CREATE TABLE projeto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL
);
--> INSERT INTO projeto values("id","email","senha");

Criamos também um usuário que teria acesso a este banco de dados e damos as devidas permissões para ele.

Tendo configurado toda perspectiva do banco de dados, procedeu-se com a criação do arquivo 'conecta.php', responsável por conectar no banco de dados.
Em sequência, foi criado o arquivo 'consulta.php', que utiliza do 'conecta.php' e valida a entrada do usuário, baseado nas credenciais que ele dispõe no banco de dados e procedendo conforme
especificado anteriormente, isto é, com alerts, tanto no caso bem sucedido quanto em casos de falha.
