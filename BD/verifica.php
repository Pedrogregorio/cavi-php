<?php  

?>
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
	<div class="uk-card uk-center uk-card-default uk-card-body uk-width-1-2@m">
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
	          		<button class="uk-button uk-button-success" type="button">Entrar</button>
	          		Nao tem cadastro?<button class="uk-button uk-button-text" href="#modal-sections">Criar conta</button>
	      		</p>
	          </form>
			</div>
	</body>