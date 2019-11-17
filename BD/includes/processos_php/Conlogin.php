<?php 
	session_start();

	include_once ("conexao.php");

	if (empty($_POST['email']) || empty($_POST['senha'])) {
	
		header('location: ../../login.php');
	
		exit();
	
	}

	$email = mysqli_real_escape_string($conexao, $_POST['email']);
	
	$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

	$sql = "SELECT email,senha FROM usuario WHERE email = '$email' and senha = '$senha'";
	
	$result = mysqli_query($conexao, $sql);

	$row = mysqli_num_rows($result);

	if ($row == 1) {
		
		$_SESSION['email'] = $email;
		
		header('location: ../../admin.php');

		exit();

	} else {
		$_SESSION['nao_autenticado'] = true;
		header('location: ../../login.php');
		exit();
	}

?>