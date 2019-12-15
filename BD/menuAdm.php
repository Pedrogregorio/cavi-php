<div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
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
		<?php

			$emailA = $_SESSION['email'];
			$nome = "SELECT nome FROM usuario WHERE '$emailA' = email";
			$sql = mysqli_query($conexao,$nome);
			while ($exibirRegistros = mysqli_fetch_array($sql)) {
		 ?>
		<h4 class="uk-text-center uk-margin-remove-vertical text-light"><?php echo mb_strtoupper($exibirRegistros["nome"]);?></h4>
		<?php } ?>
		
		
		<div class="uk-position-relative uk-text-center uk-display-block">
		    <a href="#" class="uk-text-small uk-text-muted uk-display-block uk-text-center" data-uk-icon="icon: triangle-down; ratio: 0.7">Admin</a>
		    <!-- user dropdown -->
		    <div class="uk-dropdown user-drop" data-uk-dropdown="mode: click; pos: bottom-center; animation: uk-animation-slide-bottom-small; duration: 150">
		    	<ul class="uk-nav uk-dropdown-nav uk-text-left">
						<li><a href="#"><span data-uk-icon="icon: info"></span> Summary</a></li>
						<li><a href="#"><span data-uk-icon="icon: refresh"></span> Edit</a></li>
						<li><a href="#"><span data-uk-icon="icon: settings"></span> Configuration</a></li>
						<li class="uk-nav-divider"></li>
						<li><a href="#"><span data-uk-icon="icon: image"></span> Your Data</a></li>
						<li class="uk-nav-divider"></li>
						<li><a href="#"><span data-uk-icon="icon: sign-out"></span> Sign Out</a></li>
			    </ul>
		    </div>
		    <!-- /user dropdown -->
		</div>
	</div>
	
	<div class="left-nav-wrap">
		<ul class="uk-nav uk-nav-default uk-nav-parent-icon" data-uk-nav>
			<li class="uk-nav-header">ACTIONS</li>
			<li><a href="#"><span data-uk-icon="icon: comments" class="uk-margin-small-right"></span>Messages</a></li>
			<li><a href="edcao.php"><span data-uk-icon="icon: thumbnails" class="uk-margin-small-right"></span>Imoveis</a></li>
			<li class="uk-parent"><a href="#"><span data-uk-icon="icon: thumbnails" class="uk-margin-small-right"></span>Imoveis</a>
				<ul class="uk-nav-sub">
					<li><a title="Article" href="https://zzseba78.github.io/Kick-Off/article.html">Article</a></li>
					<li><a title="Album" href="https://zzseba78.github.io/Kick-Off/album.html">Album</a></li>
					<li><a title="Cover" href="https://zzseba78.github.io/Kick-Off/cover.html">Cover</a></li>
					<li><a title="Cards" href="https://zzseba78.github.io/Kick-Off/cards.html">Cards</a></li>
					<li><a title="News Blog" href="https://zzseba78.github.io/Kick-Off/newsBlog.html">News Blog</a></li>
					<li><a title="Price" href="https://zzseba78.github.io/Kick-Off/price.html">Price</a></li>
					<li><a title="Login" href="https://zzseba78.github.io/Kick-Off/login.html">Login</a></li>
					<li><a title="Login-Dark" href="https://zzseba78.github.io/Kick-Off/login-dark.html">Login - Dark</a></li>
				</ul>
			</li>
		</ul>
		<div class="left-content-box uk-margin-top">
			
				<h5>Daily Reports</h5>
				<div>
					<span class="uk-text-small">Visualizações <small>(+50)</small></span>
					<progress class="uk-progress" value="50" max="100"></progress>
				</div>
				<div>
					<span class="uk-text-small">Favorito <small>(+78)</small></span>
					<progress class="uk-progress success" value="78" max="100"></progress>
				</div>
				<div>
					<span class="uk-text-small">Feedback <small>(-12)</small></span>
					<progress class="uk-progress warning" value="12" max="100"></progress>
				</div>
			
		</div>
		
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
