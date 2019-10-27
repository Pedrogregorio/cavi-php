<?php  
	include_once("conexao.php");
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$telefone = $_POST['telefone'];
	$cpf = $_POST['cpf'];

	$sql = "INSERT INTO usuario (nome,email,senha,telefone,cpf) VALUES ('$nome','$email','$senha','$telefone','$cpf')";
	$salvar = mysqli_query($conexao,$sql);

	$linha = mysqli_affected_rows($conexao);

	mysqli_close($conexao);

?>

<!DOCTYPE html>
<html>
	<head>
		<?php  
			include_once 'head.php';
		?>
		<title>..:: C A V I ::..</title>
	</head>
	<body class="w3-pale-blue">
		<?php  

			include_once 'menu.php'

		?>
		<center>
			<div class="card marg">
				<header class="card-header">
      				<h1 class="h1">Bem Vindo!!</h1>
    			</header>
    			<br>
    			<div class="content">
					<form id="login">
						<br>
						<?php  
							if ($linha == 1) {
								print "Cadastro efetuado com sucesso<br><br>";
								print "<a href='login.php' class='button is-dark'>Fazer Login</a>";
								
							}else{
								print "Cadastro nao efetuafo.<br>Email ja existente<br><br>";
								print "<a href='cadastro.php' class='button is-dark'>Cadastra-se</a>";
							}
						?>

						
					</form>
				</div>
			</div>
		</center>
	</body>
</html>