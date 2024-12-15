<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Calculadora</title>
	</head>
	<body>
		<form action="processa.php" method="post">
			<p>
				Digite o 1º valor: <input type="number" name="n1"/>
			</p>
			<p>
				Digite o 2º valor: <input type="number" name="n2"/>
			</p>
			<p>
				Selecione uma operação: 
				<select name="op">
					<option value="a">Adição</option>
					<option value="s">Subtração</option>
					<option value="m">Multiplicação</option>
					<option value="d">Divisão</option>
				</select>
			</p>
			<p>
				<input type="submit" value="Calcular"/>
			</p>
		</form>
	</body>
</html>