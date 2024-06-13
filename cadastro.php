<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<table>
		<form action="cd_recebe.php" method="POST">
			<tr>
				<td>Nome:</td>
				<td><input type="text" name="nome"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Telefone:</td>
				<td><input type="text" name="telefone"></td>
			</tr>
			<tr>
				<td>Curso:</td>
				<td>
					<select name="curso">
						<option>&nbsp;</option>
						<option value="adm">Administracao</option>
						<option value="ds">Desenvolvimento de Sistemas</option>
						<option value="log">Logistica</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>CPF:</td>
				<td><input type="text" name="cpf"></td>
			</tr>
			<tr>
				<td>
					Data de Nascimento:
				</td>
				<td>
					<input type="date" name="data">
				</td>
			</tr>
			<tr>
				<tr>
					<td colspan="2">
						<input type="submit" value="Cadastrar">
					</td>
				</tr>
			</tr>
		</form>
	</table>
</body>
</html>