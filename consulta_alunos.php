<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Consulta Alunos</title>
		<style type="text/css">
	        body{
	            font-family: verdana;
	            color: #000;
	            font-size: 24px;
	        }
	    </style>
	</head>
	<body>
	<?php
		//Importa o arquivo de conexao
		include_once("conexao.php");

		$sql = "SELECT * FROM tb_alunos";

		try {
		    $stmt = $pdo->query($sql);
		    $alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);
		    
		    foreach ($alunos as $aluno) {
		    	echo '######################### ID:'. $aluno['id'] . '######################### <br>';
		        echo 'Nome: ' . $aluno['nome'] . '<br>';
		        echo 'CPF: ' . $aluno['cpf'] . '<br>';
		        echo 'Email: ' . $aluno['email'] . '<br>';
		        echo 'Data de Nascimento: ' . $aluno['datanascimento'] . '<br>';
		        echo 'Telefone: ' . $aluno['telefone'] . '<br>';
		        echo 'Curso: ' . $aluno['curso'] . '<br><br>';
		    }
		} catch (PDOException $e) {
		    echo 'Erro ao consultar alunos: ' . $e->getMessage();
		}
	?>
	</body>
</html>