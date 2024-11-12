<!DOCTYPE html>
<html>
<head>
    <title>Relatório de Professores</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ccc;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
    <h2>Relatório de Professores</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Especialidade</th>
        </tr>
        <?php
        include 'conexao.php';
        
        $sql = "SELECT id_professor, nome, especialidade FROM professor";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row["id_professor"]. "</td><td>" . $row["nome"]. "</td><td>" . $row["especialidade"]. "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Nenhum professor encontrado</td></tr>";
        }

        mysqli_close($conn);
        ?>
    </table>
</body>
</html>
