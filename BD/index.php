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
  			<a href="Site/Index.html" class="w3-bar-item w3-button">Inicio</a>
  			<a href="Site/map.html" class="w3-bar-item w3-button">Mapa de Casas</a>
		</div>
		<br>
		<br>
		<br>
		<br>
		<center>	
			<div class="marg">
				<header class="w3-container w3-teal">
      				<h1 class="h1">Cadastro de Usuario</h1>
    			</header>
    			<br>
				<form id="login" method="post" action="processa.php">
					<input type="text" name="nome" maxlength="40" placeholder="Nome" class="w3-input" required>
					<br>
					<input type="email" name="email" placeholder="E-mail" maxlength="50" class="w3-input" required>
					<br>
					<input type="password" name="senha" placeholder="Senha" maxlength="10" class="w3-input" required>
					<br>
					<br>
					<input type="submit" class="w3-button w3-teal" value="Cadastrar">
				</form>
			</div>
		</center>
	</body>
</html>