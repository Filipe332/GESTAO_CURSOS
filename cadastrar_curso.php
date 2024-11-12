<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $carga_horaria = $_POST['carga_horaria'];

    $sql = "INSERT INTO Curso (nome, carga_horaria) VALUES ('$nome', '$carga_horaria')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Curso cadastrado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
