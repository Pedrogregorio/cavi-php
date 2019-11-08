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
		<div class="container gallery-container">
        <div class="tz-gallery">
            <div class="row">
		<?php						
			$result_card = "SELECT * FROM imoveis ORDER BY id ASC";
			$resultado_card = mysqli_query($conexao, $result_card);
			while($row_card = mysqli_fetch_assoc($resultado_card)){ 
		?>
		<!--<section class="section">
			<div class="card mar">
				<div class="card-image">

					<figure class="image is-4by3">
						<img src="includes/processos_php/foto/back.jpg">
					</figure>
					
				</div>
				<div class="card-content">
					
				</div>
				
			</div>
		</section>
		-->
		
	
                <div class="col-sm-6 col-md-4 card-img-top">
                    <a class="lightbox" href="admin/imagens/projetos/projeto1.jpg">
                        <img src="includes/processos_php/foto/back.jpg" alt="Park">
                    </a>
                </div>
              
		<?php
			}
		?>
	</div>
</div>
</div>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    	<script>
        	baguetteBox.run('.tz-gallery');
    	</script>
	</body>
</html>