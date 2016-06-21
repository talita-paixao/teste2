<!DOCTYPE html>
<html>
<head>
	<title> Calcule seu IMC</title>
	<meta charset="utf-8"/>
	<meta name="author" content="Talita Paixão">
	<meta name="description" content="Calcule se Peso Ideal">
	<meta name="keywords" content="peso, ideal, imc, altura, situação, gordura">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="conteudo">
		<div id="conteudo-texto">
			<h1>Calcule seu Peso Ideal</h1>
			<h2>O que é?</h2>
				<p>IMC é uma sigla utilizada para Índice de Massa Corporal. O Índice de Massa Corporal é 
					uma medida utilizada para medir a obesidade adotada pela Organização Mundial de Saúde 
					(OMS). É o padrão internacional para avaliar o grau de obesidade.</p>
			<h2 caption>Tabela de Resultados</h2></br>
				<table>
					<tr>
						<th class="ce">Resultado</th>
						<th class="cd">Situação</th>
					</tr>
					<tr>
						<td class="ce">Abaixo de 18.5</td>
						<td class="cd">Muito abaixo do peso</td>
					</tr>
					<tr>
						<td class="ce">Entre 18.5 e 24.9</td>
						<td class="cd">Peso Ideal</td>
					</tr>
					<tr>
						<td class="ce">Entre 25 e 29.9</td>
						<td class="cd">Sobrepeso</td>
					</tr>
					<tr>
						<td class="ce">Entre 30 e 34.9</td>
						<td class="cd">Obesidade Grau I</td>
					</tr>
					<tr>
						<td class="ce">Entre 35 e 39.9</td>
						<td class="cd">Obesidade Grau II</td>
					</tr>
					<tr>
						<td class="ce">Acima de 40</td>
						<td class="cd">Obesidade Grau III</td>
					</tr>
				</table>
			<div id="conteudo-calculadora">
				<div id="logo">
					<img src="img/logo.png"/>
				</div>
				<div id="calculadora">
					<form name="calc" method="get" enctype="multipart/form-data" action="resultado.php" class="form">
						<label for="peso">Peso:</label></br>
						<input type="text" name="peso" id="peso"></br>
						<label for="altura">Altura (Ex.: 1.60 em metros):</label></br>
						<input type="text" name="altura" id="altura"></br>
						<div id="botao">
							<input type="submit" name="enviar" value="Calcular" id="enviar">
						</div>
					</form>
				</div>
			</div>
		</div>
		<div id="rodape">
			<p>&copy; 2016 | Todos os Direitos Reservados | Desenvolvido por<a href="http://www.behance.net/talitapaixao"> Talita Paixão</a></p>
		</div>
	</div>
</body>
</html>