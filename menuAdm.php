<div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
    <nav class="uk-navbar-container" uk-navbar style="position: relative; z-index: 980;">
        <div class="uk-navbar-left">
          <ul class="uk-navbar-nav">
            <a class="uk-navbar-toggle" uk-toggle="target: #offcanvas-overlay">
	            <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left" type="button">Menu</span>
	        </a>
          </ul>
        </div>
    </nav>
</div>		

<div id="offcanvas-overlay" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar uk-width-medium">

        <button class="uk-offcanvas-close" type="button" uk-close></button>
        <div class="uk-grid-small uk-flex-middle uk-margin" uk-grid>
            <div class="uk-width-auto">
                <img class="uk-comment-avatar" src="img/avatar.svg" width="80" height="80" alt="">
            </div>
            <div class="uk-width-expand">
            	<?php

					$emailA = $_SESSION['email'];
					$nome = "SELECT nome FROM usuario WHERE '$emailA' = email";
					$sql = mysqli_query($conexao,$nome);
					while ($exibirRegistros = mysqli_fetch_array($sql)) {
				 ?>
                <h3 class="uk-card-title uk-margin-remove-bottom"><?php echo mb_strtoupper($exibirRegistros["nome"]);?></h3>
            <?php } ?>
            </div>
        </div> 
        <div class="left-nav-wrap">
			<ul class="uk-nav uk-nav-default uk-nav-parent-icon" data-uk-nav>
				<li class="uk-nav-header">ACTIONS</li>
				<li><a href="index.php"><span data-uk-icon="icon: home" class="uk-margin-small-right"></span>Inicio</a></li>
				<li><a href="admin.php"><span data-uk-icon="icon: plus-circle" class="uk-margin-small-right"></span>Cadastrar Imoveis</a></li>
				<li><a href="edcao.php"><span data-uk-icon="icon: thumbnails" class="uk-margin-small-right"></span>Meus Imoveis</a></li>
				<li><a href="includes/processos_php/logout.php"><span data-uk-icon="icon: sign-out" class="uk-margin-small-right"></span>Sair</a></li>
			</ul>
			
		</div>
        </div>
</div>

