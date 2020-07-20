<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$BD = "db_cavi_principal";

	//Criar a conexão com o BD
	$conexao = mysqli_connect($servidor,$usuario,$senha,$BD);
	mysqli_set_charset($conexao,'utf8');
	//Testando conexão
	if(!$conexao){
		print "falha na conexão";
	}
?>