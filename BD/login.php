<?php 
	session_start();

 ?>
<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript">
        function mascara(telefone){ 
            if(telefone.value.length == 0)
                telefone.value = '(' + telefone.value; 
            if(telefone.value.length == 3)
                telefone.value = telefone.value + ') 9 '; 
 
            if(telefone.value.length == 11)
                telefone.value = telefone.value + '-';
  
}
    </script>
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
			<h3 class="uk-card-title">Efetuar o Login</h3>
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
					<button class="uk-button uk-button-primary" type="submit">Entrar</button> or
					<a href="#modal-sections" uk-toggle>Fazer um cadastro</button>
				</p>
			</form>
		</div>
		<!-- Modal de cadastro -->

		<div id="modal-sections" uk-modal>
		    <div class="uk-modal-dialog">
		        <button class="uk-modal-close-default" type="button" uk-close></button>
		        <div class="uk-modal-header">
		            <h2 class="uk-modal-title">Cadastrar-se</h2>
		        </div>
		        <div class="uk-modal-body">
		        	<form method="post" action="includes/processos_php/processa.php">
                    <!--NOME-->
						<div class="uk-margin">
							<div class="uk-inline uk-width-1-1">
								<span class="uk-form-icon" uk-icon="icon:  user"></span>
								<input class="uk-input uk-form-large" type="text" maxlength="40" name="nome" placeholder="Isira o nome completo do Usuario" required>
							</div>
						</div>
					<!--EMAIL-->
						<div class="uk-margin">
							<div class="uk-inline uk-width-1-1">
								<span class="uk-form-icon" uk-icon="icon:  mail"></span>
								<input class="uk-input uk-form-large" type="email" maxlength="50" name="email" placeholder="Isira o E-mail Usuario" required>
							</div>
						</div>
					<!--SENHA-->
						<div class="uk-margin">
							<div class="uk-inline uk-width-1-1">
								<span class="uk-form-icon" uk-icon="icon:  lock"></span>
								<input class="uk-input uk-form-large" type="password" maxlength="20" name="senha" placeholder="Isira a senha Usuario" required>
							</div>
						</div>
					<!--TELEFONE-->
						<div class="uk-margin">
							<div class="uk-inline uk-width-1-1">
								<span class="uk-form-icon" uk-icon="icon:  phone"></span>
								<input class="uk-input uk-form-large" id="telefone" placeholder="(XX) X XXXX-XXXX" maxlength="16" type="text" name="telefone" onkeypress="mascara(this)" required>
							</div>
						</div>
					<!--CPF-->
						<div class="uk-margin">
							<div class="uk-inline uk-width-1-1">
								<span class="uk-form-icon" uk-icon="icon:  credit-card"></span>
								<input class="uk-input uk-form-large" type="number" maxlength="11" name="cpf" placeholder="Isira o CPF do Usuario" required>
							</div>
						</div>
					<!--BOTAO-->
						
						<p class="uk-text-right">
		                  <button class="uk-button uk-button-danger uk-modal-close" type="button">Fechar</button>
		                  <button class="uk-button uk-button-primary" type="submit">Criar Conta</button>
		              </p>
	                  </form>
		        </div>
		    </div>
		</div>
      <!-- fim_modal -->
	</body>
</html>