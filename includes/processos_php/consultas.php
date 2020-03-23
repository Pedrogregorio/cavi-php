<?php  

	include_once("conexao/conexao.php");

	$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

	$sql = "SELECT * FROM usuario where email like '%$filtro%'";
	$consulta = mysqli_query($conexao,$sql);
	$registro = mysqli_num_rows($consulta);



?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
		<link rel="stylesheet" type="text/css" href="../css/w3.css">
		<link rel="stylesheet" type="text/css" href="../css/estilo_login.css">
		<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
		<title>..:: C A V I ::..</title>
	</head>
	<body class="w3-pale-blue">
		<div class="w3-bar w3-teal item">
  			<a href="../Site/Index.html" class="w3-bar-item w3-button">Inicio</a>
  			<a href="Site/map.html" class="w3-bar-item w3-button">Mapa de Casas</a>
		</div>
		<br>
		<br>
		<br>
		<br>
		<center>	
			<div class="marg">
				<header class="w3-container w3-teal">
      				<h1 class="h1">consultar cadastro</h1>
    			</header>
    			<br>
				<form id="login" method="get" action="">
					<br>

					filtar por nome: <input type="text" name="filtro" class="w3-input" required autofocus><br>
					<input type="submit" class="w3-button w3-teal" value="Pesquisar"><br><br>
					<?php  
						print "$registro registros encontrados com a palavra <b>$filtro</b>.<br><br>";
						
						while ($exibirRegistros = mysqli_fetch_array($consulta)) {

							$codigo = $exibirRegistros[0];
							$nome = $exibirRegistros[1];
							$email = $exibirRegistros[2];

							print "<article class='w3-teal'>";

								print "$codigo<br>";
								print "$nome<br>";
								print "$email<br>";
							print "</article><br>";
						}
						mysqli_close($conexao);
					?>
					
					
				</form>
			</div>
		</center>
	</body>
</html>