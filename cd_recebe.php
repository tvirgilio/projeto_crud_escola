	<?php
	//Importa o arquivo de conexao
	include_once("conexao.php");

	// Insere os dados no banco de dados 
	$sql = "INSERT INTO tb_alunos (nome, cpf, email, datanascimento, telefone, curso) VALUES (:nome, :cpf, :email, :data, :telefone, :curso)";

	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':nome', $nome);
	$stmt->bindParam(':cpf', $cpf);
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':data', $data);
	$stmt->bindParam(':telefone', $telefone);
	$stmt->bindParam(':curso', $curso);

	//Recebe valores do HTML
	$nome=$_POST['nome'];
	$email=$_POST['email'];
	$telefone=$_POST['telefone'];
	$curso=$_POST['curso'];
	$cpf=$_POST['cpf'];
	$data=$_POST['data'];

	//Verifica se os dados foram cadastrados
	try {
	    $stmt->execute();
	    echo "Aluno inserido com sucesso!";
	} catch (PDOException $e) {
	    echo 'Erro ao inserir aluno: ' . $e->getMessage();
	}


	?>