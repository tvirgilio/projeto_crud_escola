<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body>

    <?php
    //Importa o arquivo de conexao
    include("conexao.php");

    $sql = "UPDATE tb_alunos SET nome = :nome, cpf = :cpf, email = :email, datanascimento = :datanascimento, telefone = :telefone, curso = :curso WHERE id = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':datanascimento', $datanascimento);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':curso', $curso);

    $id = 1; // ID do aluno a ser atualizado
    $nome = 'João Silva Alves';
    $cpf = '12345678901';
    $email = 'joao.silva.alves@gamil.com';
    $datanascimento = '2000-01-01';
    $telefone = '11987654421';
    $curso = 'Administração';

    try {
        $stmt->execute();
        echo "Aluno atualizado com sucesso!";
    } catch (PDOException $e) {
        echo 'Erro ao atualizar aluno: ' . $e->getMessage();
    }
    ?>

    </body>
</html>
