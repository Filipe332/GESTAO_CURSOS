<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Aluno</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <h2>Cadastro de Aluno</h2>
    <form action="cadastrar_aluno.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required><br>

        <input type="submit" value="Cadastrar Aluno">
    </form>
</body>
</html>
