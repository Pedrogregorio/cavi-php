<?php  
	session_start();
	include_once 'includes/processos_php/verifica_login.php';
	include_once 'includes/processos_php/conexao.php';
?>
<html style="background: radial-gradient(circle, rgba(2,0,36,1) 0%, rgba(89,0,255,1) 0%, rgba(44,9,121,1) 100%);">
	<head>
		<link rel="stylesheet" type="text/css" href="css/dashboard.css">
		<?php include_once 'head.php';?>
		<!-- Scripit da pagina -->
		<script type="text/javascript" src="includes/processos_php/script.js"></script>
	</head>
	<body>
		<?php include_once 'menuAdm.php' ?>
		

		<div class="uk-container uk-margin">
		<!-- Mesnsagem -->
			<?php 
				if (isset($_SESSION['msg'])) {
					if ($_SESSION['msg'] == "Imovel cadastrado com Sucesso!") {
						$stl = "success";
					}else{
						$stl = "danger";
					}
			?>
				<div class="uk-alert-<?php echo $stl;?>" uk-alert>
				    <a class="uk-alert-close" uk-close></a>
				    <p><?php echo $_SESSION['msg']; ?></p>
				</div>
			<?php
				}
				unset($_SESSION['msg']);
			?>
		<!-- fimMensagem -->
			<!-- <div class="uk-card uk-align-center uk-card-default uk-card-body uk-width-1-2@m">
			<div class="uk-align-rigth">
			<img class="uk-border-circle" src="IMAGENS/avatar.jpg" width="80" height="80">
			</div>
			<?php 

			$emailA = $_SESSION['email'];
			$nome = "SELECT nome FROM usuario WHERE '$emailA' = email";
			$sql = mysqli_query($conexao,$nome);
			while ($exibirRegistros = mysqli_fetch_array($sql)) {
			?>
			<strong><?php echo mb_strtoupper($exibirRegistros["nome"]);?></strong>
			<?php } ?>
			<a href="includes/processos_php/logout.php">sair</a>

			</div> -->

			<div class="uk-card uk-align-center uk-card-default uk-card-body uk-width-1-2@m">
				<h3 class="uk-text-center">Preencre as informações do Imovel</h3>
				<p class="uk-text-justify">Para que o usuario possa tem uma otima visão do imovel, é nessesario que os dados seja preenchidos corretamente, e que a descrição(se nescessario) esteje bem clara.</p>
				<form method="POST" action="includes/processos_php/uploadImagens.php" enctype="multipart/form-data">
					<div class="uk-margin">
						<div class="uk-inline uk-width-1-1">
							<span class="uk-form-icon" uk-icon="icon:  user"></span>
							<input class="uk-input uk-form-large"  placeholder="Nome do Vendedor" type="text" maxlength="50" name="nome" required>
						</div>
					</div>
					<div uk-form-custom="target: true">
						<input type="file" name="arquivo">
						<input class="uk-input uk-form-width-medium" type="text" placeholder="Selecione uma Imagem" disabled>
					</div>
					<!-- Imagem do imovel: <input type="file" name="arquivo"><br> -->
					<div class="uk-margin">
						<div class="uk-inline uk-width-1-1">
							<span class="uk-form-icon" uk-icon="icon:  location"></span>
							<input class="uk-input uk-form-large" id="cep" placeholder="CEP" onblur="pesquisacep(this.value);" type="text" maxlength="17" name="cep">
						</div>
					</div>
					<div class="uk-margin">
						<div class="uk-inline uk-width-1-1">
							<span class="uk-form-icon" uk-icon="icon:  location"></span>
							<input class="uk-input uk-form-large" id="bairro" placeholder="Bairro do Imovel" type="text" maxlength="17" name="bairro" required>
						</div>
					</div>
					<div class="uk-margin">
						<div class="uk-inline uk-width-1-1">
							<span class="uk-form-icon" uk-icon="icon:  location"></span>
							<input class="uk-input uk-form-large" id="rua" placeholder="Rua do Imovel" type="text" maxlength="20" name="rua" required>
						</div>
					</div>
					<div class="uk-margin">
						<div class="uk-inline uk-width-1-1">
							<span class="uk-form-icon" uk-icon="icon:  home"></span>
							<input class="uk-input uk-form-large" placeholder="Numero de Imovel" type="tel" maxlength="6" name="numero" required>
						</div>
					</div>
					<div class="uk-margin">
						<select class="uk-select" id="form-stacked-select" name="categoria">
			                <option disabled="" class="uk-text-bold">-- Residencial/urbano --</option>
			                <option value="Casa"> Casa </option>
			                <option value="Casa - condomínio"> Casa - condomínio </option>
			                <option value="Casa - kitnet"> Casa - kitnet</option>
			                <option value="Sobrado"> Sobrado </option>
			                <option value="Apartamento"> Apartamento </option>
			                <option value="Terreno"> Terreno </option>
			                <option value="Terreno - condomínio"> Terreno - condomínio </option>

			                <option disabled="" class="uk-text-bold">-- Residencial/Rural --</option>
			                <option value="Terreno"> Terreno </option>
			                <option value="Fazenda"> Fazenda </option>
			                <option value="Chacara"> Chacara </option>
			                <option value="Sitio"> Sitio </option>

			                <option disabled="" class="uk-text-bold">-- Comercial --</option>
			                <option value="Area"> Area </option>
			                <option value="Casa - Comercial"> Casa Comercial </option>
			                <option value="Sala"> Sala </option>
			                <option value="Salão"> Salão </option>
			            </select>					
					</div>
					<div class="uk-margin">
						<select class="uk-select" id="form-stacked-select" name="tipo_de_anuncio">
							<option value="Venda"> Venda </option>
							<option value="Aluguel"> Aluguel </option>
						</select>
					</div>
					<div class="uk-margin">
						<div class="uk-inline uk-width-1-1">
							<input class="uk-input uk-form-large" placeholder="Valor do Imovel R$:" type="text" name="valor" onKeyPress="return(moeda(this,'.',',',event))" required>
						</div>
					</div>
					<div class="uk-margin">
						<div class="uk-inline uk-width-1-1">
							<span class="uk-form-icon" uk-icon="icon:  phone"></span>
							<input class="uk-input uk-form-large" id="telefone" placeholder="(XX) X XXXX-XXXX" maxlength="16" type="text" name="telefone" onkeypress="mascara(this)" required>
						</div>
					</div>
					<div class="uk-margin">
						<textarea class="uk-textarea" rows="5" name="descricao" placeholder="Breve Descrição(Possiveis acordos, Requisitos para a posse do Imovel, caracteristicas mais detaladas, etc...)" required></textarea>
					</div>
					<input type="submit" class="uk-button uk-button-primary" value="Cadastrar">
				</form>
			</div>

		</div>
	</body>
</html>