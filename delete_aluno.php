// delete_aluno.php
include 'conexao.php';
$id = $_GET['id'];

$sql = "DELETE FROM alunos WHERE id = ?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: relatorio_alunos.php");
exit();
