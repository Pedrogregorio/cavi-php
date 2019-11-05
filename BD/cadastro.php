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
		<div class="hero-body">
			<div class="container has-text-centered">
				<div class="column is-4 is-offset-4">
					<div class="card marg">
						<header class="card-header">
							<h1 class="card-header-title">Cadastro de Usuario</h1>
						</header>
						<br>
						<div class="content">
							<form id="login" method="post" action="includes/processos_php/processa.php">
								<!--NOME-->
									<div class="field">
										<p class="control has-icons-left">
											<input class="input" type="text" maxlength="40" name="nome" placeholder="Nome" required autofocus>
											<span class="icon is-small is-left">
												<i class="fas fa-user"></i>
											</span>
										</p>
									</div>
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
											<input class="input" type="password" maxlength="20" name="senha" placeholder="Password" required>
											<span class="icon is-small is-left">
												<i class="fas fa-lock"></i>
											</span>
										</p>
									</div>
								<!--TELEFONE-->
									<div class="field">
										<p class="control has-icons-left has-icons-right">
											<input class="input" type="tel" maxlength="10" name="telefone" placeholder="Numero de Celular" required>
											<span class="icon is-small is-left">
												<i class="fas fa-tty"></i>
											</span>
										</p>
									</div>
								<!--CPF-->
									<div class="field">
										<p class="control has-icons-left has-icons-right">
											<input class="input" type="number" maxlength="10" name="cpf" placeholder="CPF" required>
											<span class="icon is-small is-left">
												<i class="fas fa-address-card"></i>
											</span>
										</p>
									</div>
								<!--BOTAO-->
									<div class="field">
										<p class="">
											<input type="submit" name="" class="button is-dark" value="Cadastrar">
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