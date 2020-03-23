<div class="uk-section-secondary uk-preserve-color">

    <div uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent uk-light; top: 200">

<nav class="uk-navbar uk-navbar-container uk-margin">
    <div class="uk-navbar-left">
        <a class="uk-navbar-toggle" uk-toggle="target: #offcanvas-overlay">
            <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left" type="button">Menu</span>
        </a>
    </div>
</nav>
</div>
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
            </div>
        </div>

       <!--  <div class=" uk-position-top-center uk-padding">
        </div>  -->   
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



<!-- <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
    <nav class="uk-navbar-container uk-navbar-danger" uk-navbar style="position: relative; z-index: 980;">
        <div class="uk-navbar-left">
         <ul class="uk-navbar-nav">
            <li class="uk-active">
            	<a href="#offcanvas-usage" uk-toggle>
            		<span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
            	</a>
            </li>
        </ul>            
        </div>
    </nav>
</div>  


<div id="offcanvas-usage" uk-offcanvas>

       
<div id="left-col" class="uk-light">
	 <button class="uk-offcanvas-close" type="button" uk-close></button>
	<div class="left-content-box  content-box-dark">
		<img src="img/avatar.svg" alt="" class="uk-border-circle profile-img">
		
		<h4 class="uk-text-center uk-margin-remove-vertical text-light"></h4>
		<?php } ?>
		
		
		
	</div>
	
	<div class="left-nav-wrap">
		<ul class="uk-nav uk-nav-default uk-nav-parent-icon" data-uk-nav>
			<li class="uk-nav-header">ACTIONS</li>
			<li><a href="admin.php"><span data-uk-icon="icon: plus-circle" class="uk-margin-small-right"></span>Cadastrar Imoveis</a></li>
			<li><a href="edcao.php"><span data-uk-icon="icon: thumbnails" class="uk-margin-small-right"></span>Meus Imoveis</a></li>
		</ul>
		
	</div>
	<div class="bar-bottom">
		<ul class="uk-subnav uk-flex uk-flex-center uk-child-width-1-5" data-uk-grid>
			<li>
				<a href="index.php" class="uk-icon-link" data-uk-icon="icon: home" title="Home" data-uk-tooltip></a>
			</li>
			<li>
				<a href="#" class="uk-icon-link" data-uk-icon="icon: settings" title="Settings" data-uk-tooltip></a>
			</li>
			<li>
				<a href="#" class="uk-icon-link" data-uk-icon="icon: social"  title="Social" data-uk-tooltip></a>
			</li>
			
			<li>
				<a href="includes/processos_php/logout.php" class="uk-icon-link" data-uk-tooltip="Sign out" data-uk-icon="icon: sign-out"></a>
			</li>
		</ul>
	</div>
</div>
</div>
 -->