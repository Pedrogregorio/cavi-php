<?php  
	session_start();

	include_once 'includes/processos_php/verifica_login.php'
?>
<head>
		<?php  
			include_once 'head.php';
		?>
		<title>..:: C A V I ::..</title>
	</head>
	<body>
		<?php  
			include_once 'menu.php'
		?>
		<div class="hero-body">
			<div class="container has-text-centered">
				<div class="column is-6 is-offset-4">
					<div class="box">
					  <article class="media">
					    <div class="media-content">
					      <div class="content">
					        <p>
					          <strong><?php echo $_SESSION['email'];?></strong>
					          <br>
					          <h2><a href="includes/processos_php/logout.php">sair</a></h2> 

								<form method="POST" action="includes/processos_php/uploadImagens.php" enctype="multipart/form-data">
							
								Select Img:<input type="file" name="arquivo">
								<input type="submit" class="button is-success is-rounded" name="Cadastrar">

					        </p>
					      </div>
					    </div>
					  </article>
					</div>
				</div>
			</div>
		</div>
</body>