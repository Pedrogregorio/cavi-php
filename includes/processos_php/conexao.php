<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$BD = "cadastro_user";

	//Criar a conexão com o BD
	$conexao = mysqli_connect($servidor,$usuario,$senha,$BD);
	mysqli_set_charset($conexao,'utf8');
	//Testando conexão
	if(!$conexao){
		print "falha na conexão";
	}
?>