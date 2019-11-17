<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<?php  
			include_once ("head.php");
		?>
	</head>
	<body>
		<?php  
			include_once 'menu.php';
		?>

		<?php  
			if (isset($_SESSION['nao_autenticado'])):
		?>
				<div class="uk-alert-danger" uk-alert>
				    <a class="uk-alert-close" uk-close></a>
				    <p>Email ou senha Invalidos</p>
				</div>
		<?php  
			endif;
			unset($_SESSION['nao_autenticado']);
		?>
		<div class="uk-card uk-align-center uk-card-default uk-card-body uk-width-1-2@m">
			<h3 class="uk-card-title">Default</h3>
			<form method="post" action="includes/processos_php/Conlogin.php">
				<div class="uk-margin">
					<div class="uk-inline uk-width-1-1">
						<span class="uk-form-icon" uk-icon="icon:  mail"></span>
						<input class="uk-input uk-form-large" placeholder="Email" type="text" maxlength="50" name="email" placeholder="Email">
					</div>
				</div>
				<div class="uk-margin">
					<div class="uk-inline uk-width-1-1">
						<span class="uk-form-icon" uk-icon="icon: lock"></span>
						<input class="uk-input uk-form-large" placeholder="Senha"  type="password" maxlength="20" name="senha" placeholder="Password">  
					</div>
				</div>
				<p class="uk-text-right">
					<button class="uk-button uk-button-success" type="submit">Entrar</button><br>
					<a href="cadastro.php">Fazer um cadastro</a>
				</p>
			</form>
		</div>
	</body>
</html>