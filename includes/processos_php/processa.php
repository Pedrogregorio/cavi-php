<?php  
	include_once("conexao.php");
	session_start();
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$telefone = $_POST['telefone'];
	$cpf = $_POST['cpf'];
	// echo "
	// 	<script>
	// 		function TestaCPF(strCPF) {
	// 		    var Soma;
	// 		    var Resto;
	// 		    Soma = 0;
	// 		  if (strCPF == '00000000000') return 'cpf invalido';
			     
	// 		  for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
	// 		  Resto = (Soma * 10) % 11;
			   
	// 		    if ((Resto == 10) || (Resto == 11))  Resto = 0;
	// 		    if (Resto != parseInt(strCPF.substring(9, 10)) ) return 'cpf invalido';
			   
	// 		  Soma = 0;
	// 		    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
	// 		    Resto = (Soma * 10) % 11;
			   
	// 		    if ((Resto == 10) || (Resto == 11))  Resto = 0;
	// 		    if (Resto != parseInt(strCPF.substring(10, 11) ) ) return 'cpf invalido';
	// 		    return 'cpf valido';
	// 		}
	// 		var strCPF = '$cpf';
	// 		alert(TestaCPF(strCPF));
	// 	</script>
	// ";

	$sql = "INSERT INTO `usuario`(`nome`, `email`, `senha`, `telefone`, `cpf`) VALUES ('$nome','$email','$senha','$telefone','$cpf')";
	$salvar = mysqli_query($conexao,$sql);

	if ($salvar) {
		$_SESSION['mensagem'] = "Usuario cadastrado com Sucesso!";
		header('location: ../../login.php');
	}else{
		$_SESSION['mensagem'] = "ERRO: Usuario Nao cadastrado";
		header('location: ../../login.php');
	}

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
			include_once 'menu.php';
		?>
		<div class="uk-card uk-align-center uk-card-default uk-card-body uk-width-1-2@m">
		<?php  
			if ($linha == 1) {
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TCC-CAVI2/BD/login.php'>
				<script type=\"text/javascript\">
					alert(\"Cadastro Efetuado.\");
				</script>
				";
			}else{
				echo "

				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TCC-CAVI2/BD/login.php'>
				<script type=\"text/javascript\">
					alert(\"Cadastro nao Efetuado.\");
				</script>
				";
			}

		?>
		</div>
	</body>
</html>