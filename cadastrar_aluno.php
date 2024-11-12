<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "INSERT INTO Aluno (nome, email) VALUES ('$nome', '$email')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Aluno cadastrado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
