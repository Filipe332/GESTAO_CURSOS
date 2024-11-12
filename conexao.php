<?php
$host = "localhost";
$user = "root";  // Usuário padrão do XAMPP
$password = "";  // Senha padrão do XAMPP (geralmente em branco)
$dbname = "sistema_gestao_cursos";  // Nome do banco de dados

// Criar a conexão
$conn = mysqli_connect($host, $user, $password, $dbname);

// Verificar a conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>
