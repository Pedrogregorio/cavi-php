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

	<div class="hero-body">
		<div class="container has-text-centered">
			<div class="column is-4 is-offset-4">
				<?php  
					if (isset($_SESSION['nao_autenticado'])):
				?>
				<div class="notification is-danger">
					<p>ERRO: Usuario ou Senha Invalidos</p>
				</div>
				<?php  
					endif;
					unset($_SESSION['nao_autenticado']);
				?>
				<div class="card marg">
					<header class="card-header">
						<h1 class="card-header-title">Login de Usuario</h1>
					</header>
					<br>
					<div class="content">
						<form id="login" method="post" action="Conlogin.php">
							<!--EMAIL-->
								<div class="field">
									<p class="control has-icons-left has-icons-right">
										<input class="input" type="email" maxlength="50" name="email" placeholder="Email" required>
										<span class="icon is-small is-left">
											<i class="fas fa-envelope"></i>
										</span>
										<span class="icon is-small is-right">
											<i class="fas fa-check"></i>
										</span>
									</p>
								</div>
							<!--SENHA-->
								<div class="field">
									<p class="control has-icons-left">
										<input class="input" type="password" maxlength="10" name="senha" placeholder="Password" required>
										<span class="icon is-small is-left">
											<i class="fas fa-lock"></i>
										</span>
									</p>
								</div>
							<!--BOTAO-->
							<div class="field">
								<p class="">
									<input type="submit" name="" class="button is-dark" value="Efetuar login">
								</p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	</body>
</html>