<?php  
	include_once("conexao.php");
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$telefone = $_POST['telefone'];
	$cpf = $_POST['cpf'];

	$sql = "INSERT INTO usuario(nome, email, senha, telefone, cpf) VALUES ('$nome','$email','$senha','$telefone','$cpf')";
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
	<body>
		<?php  
			include_once 'menu.php'
		?>
		<div class="hero-body">
			<div class="container has-text-centered">
				<div class="column is-4 is-offset-4">
					<div class="card marg">
						<header class="card-header">
								<?php  
									if ($linha == 1) {
										print "<h1 class='card-header-title has-text-centered'>Bem Vindo!!</h1>";
										print"</header>";
										print"<br>";
										print"<div class='content'>";
										print"<form id='login'>";
										print"<br>";
										print "Cadastro efetuado com sucesso<br><br>";
										print "<a href='../../login.php' class='button is-dark'>Fazer Login</a>";
										
									}else{
										print "<h1 class='card-header-title has-text-centered'>Ops!</h1>";
										print"</header>";
										print"<br>";
										print"<div class='content'>";
										print"<form id='login'>";
										print"<br>"	;
										print "Cadastro nao efetuafo.<br>Email ja existente<br><br>";
										print "<a href='../../cadastro.php' class='button is-dark'>Cadastra-se</a>";
									}
								?>

								
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>