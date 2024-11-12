<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Curso</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <h2>Cadastro de Curso</h2>
    <form action="cadastrar_curso.php" method="post">
        <label for="nome">Nome do Curso:</label>
        <input type="text" name="nome" id="nome" required><br>

        <label for="carga_horaria">Carga Horária:</label>
        <input type="number" name="carga_horaria" id="carga_horaria" required><br>

        <input type="submit" value="Cadastrar Curso">
    </form>
</body>
</html>
