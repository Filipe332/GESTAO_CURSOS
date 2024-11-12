// atualizar_aluno.php
include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
// outros campos

$sql = "UPDATE alunos SET nome = ?, email = ? WHERE id = ?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("ssi", $nome, $email, $id);
$stmt->execute();

header("Location: relatorio_alunos.php");
exit();
