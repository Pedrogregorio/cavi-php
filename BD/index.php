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
		<div uk-slider="center: true">

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

        <ul class="uk-slider-items uk-child-width-1-2@s uk-grid">
		
				<?php						
					$sql = "SELECT valor FROM imoveis WHERE ORDER BY id ASC";
					$valor = mysqli_query($conexao,$sql);
					$result_card = "SELECT * FROM imoveis ORDER BY id ASC";
					$resultado_card = mysqli_query($conexao,$result_card);
					while($row_card = mysqli_fetch_assoc($resultado_card)){ 
				?>
				<li>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top">
                        <img src="includes/processos_php/foto/back.jpg" alt="">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Headline</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </li>
				<?php
					}
				?>

		 </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

    </div>

    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

</div>
</section>
	</body>
</html>