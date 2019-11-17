<?php  
	session_start();

	include_once 'includes/processos_php/verifica_login.php';
?>
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
		<div class="uk-card uk-align-center uk-card-default uk-card-body uk-width-1-2@m">
		<strong><?php echo $_SESSION['email'];?></strong>
		<br>
		<h2><a href="includes/processos_php/logout.php">sair</a></h2> 
		
		<form method="POST" action="includes/processos_php/uploadImagens.php" enctype="multipart/form-data">
			Nome do Vendedor:<input type="text" name="nome"><br>
			Imagem do imovel: <input type="file" name="arquivo"><br>
			Bairro:<input type="text" name="bairro"><br>
			Rua: <input type="text" name="rua"><br>
			n° da Casa: <input type="number" name="numero"><br>
			Categoria: 
			<select class="uk-select" id="form-stacked-select" name="categoria">
                <option value="Casa"> Casa </option>
                <option value="Apartamento"> Apartamento </option>
                <option value="Terreno"> Terreno </option>
                <option value="Fazenda"> Fazenda </option>
                <option value="Chacara"> Chacara </option>
                <option value="Salão"> Salão </option>
            </select><br>
            Tipo de Anuncio:
            <select class="uk-select" id="form-stacked-select" name="tipo_de_anuncio">
                <option value="Venda"> Venda </option>
                <option value="Aluguel"> Aluguel </option>
            </select><br>
			Valor :<input type="text" name="valor"><br>
			Descrição: <input type="text" name="descricao"><br>
			<input type="submit" class="button is-success is-rounded" name="Cadastrar">
		</form>
	</div>
	</body>