<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $especialidade = $_POST['especialidade'];

    $sql = "INSERT INTO Professor (nome, especialidade) VALUES ('$nome', '$especialidade')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Professor cadastrado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
