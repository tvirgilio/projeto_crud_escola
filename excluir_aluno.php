<?php
//Importa o arquivo de conexao
include("conexao.php");

$sql = "DELETE FROM tb_alunos WHERE id = :id";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);

$id = 2; // ID do aluno a ser excluído

try {
    $stmt->execute();
    echo "Aluno excluído com sucesso!";
} catch (PDOException $e) {
    echo 'Erro ao excluir aluno: ' . $e->getMessage();
}
?>
