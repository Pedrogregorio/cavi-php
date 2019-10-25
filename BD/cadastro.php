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
		<center>
			<div class="card marg">
				<header class="card-header">
					<h1 class="card-header-title">Cadastro de Usuario</h1>
				</header>
    			<br>
    			<div class="content">
					<form id="login" method="post" action="processa.php">
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
						    </button>
						  </p>
						</div>
					</form>
				</div>
			</div>
		</center>
	</body>
</html>