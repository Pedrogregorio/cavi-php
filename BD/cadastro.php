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
		
		<div class="uk-align-center uk-card-body uk-card uk-width-1-2@m uk-fieldset">
			<h1 class="card-header-title">Cadastro de Usuario</h1>
			<form id="login" method="post" action="includes/processos_php/processa.php">
				<!--NOME-->
					<div class="uk-margin">
						<div class="uk-inline uk-width-1-1">
							<span class="uk-form-icon" uk-icon="icon:  mail"></span>
							<input class="uk-input uk-form-large" type="text" maxlength="40" name="nome" placeholder="Isira o nome completo do Usuario" required>
						</div>
					</div>
				<!--EMAIL-->
					<div class="uk-margin">
						<div class="uk-inline uk-width-1-1">
							<span class="uk-form-icon" uk-icon="icon:  mail"></span>
							<input class="uk-input uk-form-large" type="text" maxlength="50" name="email" placeholder="Isira o E-mail Usuario" required>
						</div>
					</div>
				<!--SENHA-->
					<div class="uk-margin">
						<div class="uk-inline uk-width-1-1">
							<span class="uk-form-icon" uk-icon="icon:  mail"></span>
							<input class="uk-input uk-form-large" type="text" maxlength="20" name="senha" placeholder="Isira a senha Usuario" required>
						</div>
					</div>
				<!--TELEFONE-->
					<div class="uk-margin">
						<div class="uk-inline uk-width-1-1">
							<span class="uk-form-icon" uk-icon="icon:  mail"></span>
							<input class="uk-input uk-form-large" type="text" maxlength="10" name="telefone" placeholder="Isira um telefone valido" required>
						</div>
					</div>
				<!--CPF-->
					<div class="uk-margin">
						<div class="uk-inline uk-width-1-1">
							<span class="uk-form-icon" uk-icon="icon:  mail"></span>
							<input class="uk-input uk-form-large" type="text" maxlength="11" name="cpf" placeholder="Isira o CPF do Usuario" required>
						</div>
					</div>
				<!--BOTAO-->
					<p class="uk-text-right">
						<button class="uk-button uk-button-success" type="submit">Cadastra-se</button>
					</p>
			</form>
		</div>
	</body>
</html>