<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Professor</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <h2>Cadastro de Professor</h2>
    <form action="cadastrar_professor.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br>

        <label for="especialidade">Especialidade:</label>
        <input type="text" name="especialidade" id="especialidade" required><br>

        <input type="submit" value="Cadastrar Professor">
    </form>
</body>
</html>
