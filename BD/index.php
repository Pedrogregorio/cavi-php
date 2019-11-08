<?php  
	include_once("includes/processos_php/conexao.php");

?>
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
		<section class="section">
		<div class="container gallery-container">
			<div class="tz-gallery">
				<div class="row">
				<?php						
					$sql = "SELECT valor FROM imoveis WHERE ORDER BY id ASC"
					$valor = mysqli_query($conexao,$sql)
					$result_card = "SELECT * FROM imoveis ORDER BY id ASC";
					$resultado_card = mysqli_query($conexao,$result_card);
					while($row_card = mysqli_fetch_assoc($resultado_card)){ 
				?>
				<div class="col-sm-6 col-md-4 card-img-top">
					<a class="lightbox" href="admin/imagens/projetos/projeto1.jpg">
						<img src="includes/processos_php/foto/back.jpg" alt="Park">
					</a>
					<p>Valor R$:<?php $valor  ?> </p>
					<br>
					<p>Localização</p>
				</div>

				<?php
					}
				?>
				</div>
			</div>
		</div>
		</section>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
		<script>
			baguetteBox.run('.tz-gallery');
		</script>
	</body>
</html>