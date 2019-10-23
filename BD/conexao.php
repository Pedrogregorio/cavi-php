<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$BD = "Cadastro_user";

	//Criar a conexão com o BD
	$conexao = mysqli_connect($servidor,$usuario,$senha,$BD);

	//Testando conexão
	if(!$conexao){
		print "falha na conexão";
	}
?>