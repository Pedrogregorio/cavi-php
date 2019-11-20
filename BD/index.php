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
		
			<div uk-slider="center: true" class="uk-align-center">
				<div class="uk-align-center uk-visible-toggle uk-light" tabindex="-1">
					<ul class="uk-slider-items uk-child-width-1-2@s uk-grid">
						
						<!--
							//Laço de repetição
							<?php						
								$result_card = "SELECT * FROM imoveis ORDER BY id ASC LIMIT 4";
								$resultado_card = mysqli_query($conexao,$result_card);
								while($row_card = mysqli_fetch_assoc($resultado_card)){ 
							?>
							
							<?php
							}
							?>
						-->
						<li>
							<div class="uk-card uk-card-default">
								<div class="uk-card-media-top">
									<img src="IMAGENS/banner(1).png" alt="">
								</div>
							</div>
						</li>
						<li>
							<div class="uk-card uk-card-default">
								<div class="uk-card-media-top">
									<img src="IMAGENS/banner.png" alt="">
								</div>
							</div>
						</li>
						
					</ul>
					<a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
					<a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
				</div>
				<ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
			</div>
		<hr class="uk-divider-icon">
		<div class="uk-child-width-1-4@m" uk-grid>
			<?php  
				$sql = "SELECT * FROM imoveis";
				$consulta = mysqli_query($conexao,$sql);
				while ($exibirRegistros = mysqli_fetch_array($consulta)) {
						/*
							$id = $exibirRegistros["id"];
							$nome = $exibirRegistros["nome_do_vendedor"];
							$bairro = $exibirRegistros["bairro"];
							$rua = $exibirRegistros["rua"];
							$publicacao = $exibirRegistros["publicação"];
							$imagem = $exibirRegistros["imagem"];
							$categoria = $exibirRegistros["categoria"];
							$tipo = $exibirRegistros["tipo_de_anuncio"];
							$valor = $exibirRegistros["valor"];
							$descricao = $exibirRegistros["descricao"];
							*/
			?>
			<div>
		        <div class="uk-card uk-card-default">
		            <div class="uk-card-media-top">
		                <img src="includes/processos_php/foto/<?php echo $exibirRegistros["imagem"]; ?>" style="width:100%;height: 200px;">
		            </div>
		            <div class="uk-card-body">
		                <p class="uk-text-bold uk-text-truncate" ><?php echo mb_strtoupper($exibirRegistros["bairro"]); ?></p>
		                <p> <?php echo $exibirRegistros["categoria"]; ?><br><?php echo $exibirRegistros["tipo_de_anuncio"]; ?> : R$<?php echo $exibirRegistros["valor"]; ?></p>
		                	<button class="uk-button" href="#modal-full" uk-toggle>Saiba Mais</button>	
		            </div>
		        </div>
		    </div>

			<?php } ?>
		
		</div>
		<div id="modal-full" class="uk-modal-full" uk-modal>
		    <div class="uk-modal-dialog">
		        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
		        <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
		            <div class="uk-background-cover" style="background-image: url('includes/processos_php/foto/<?php echo $exibirRegistros["imagem"]; ?>');" uk-height-viewport></div>
		            <div class="uk-padding-large">
		                <h1><?php echo mb_strtoupper($exibirRegistrosi["bairro"]);  ?></h1>
		                <p>Nome do Vendedor: <?php echo $exibirRegistrosi["nome_do_vendedor"];?></p>
		                <p>Rua: <?php echo $exibirRegistrosi["rua"];?></p>
		                <p>Categoria: <?php echo $exibirRegistrosi["categoria"];?></p>
		                <p>Tipo de Anuncio: <?php echo $exibirRegistrosi["tipo_de_anuncio"];?></p>
		                <p>R$: <?php echo $exibirRegistrosi["valor"];?></p>
		                <p><?php echo $exibirRegistrosi["descricao"];?></p>
		            </div>
		        </div>
		    </div>
		</div>
	</body>
</html>