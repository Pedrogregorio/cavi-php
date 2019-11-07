<?php  
	include_once("includes/processos_php/conexao.php")
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
						<?php						
							$result_card = "SELECT * FROM imoveis ORDER BY id ASC";
							$resultado_card = mysqli_query($conexao, $result_card);
							while($row_card = mysqli_fetch_assoc($resultado_card)){ 
						?>
						<section class="section">
							<div class="venue-showcase" v-show="premiumVisible">
								<div class="level is-hidden-mobile">
									<div class="level-left">
										<div class="level-item">
											<h2 class="title is-6 has-text-left">Sponsor Venues</h2>
										</div>
									</div>
								</div>
								<div class="columns is-multiline">
									<div class="column is-12-mobile is-4-tablet is-4-desktop">

										<div class="card is-shadowless is-slightly-rounded">

											<div class="card-image">
												<figure class="image">
													<a href="https://www.receptionhalls.com/venue/park-savoy-florham-park-nj">
														<img src="/media/NJ/148/park-savoy-florham-park-nj_3x2.jpg" alt="Park Savoy" class="is-slightly-rounded" />
													</a>
												</figure>
											</div>
										</div>
									</div>
								</div>
								<div class="card-content">
									<div class="content">
										<p>
											<span class="title is-4 is-capitalized">
											<a class="has-text-black" href="https://www.receptionhalls.com/venue/park-savoy-florham-park-nj">Park Savoy</a>
											</span>
											<br>
											<span class="m-t-tiny block">Florham Park, NJ</span>
										</p>
										<p class="venue-data-sm">
											Welcome to The Park Savoy. Since 1982, we have pursued a single goal: to create a setting for weddings warmed by...
										</p>
									</div>
								</div>
							</div>

						</section>
					
						<?php
							}
						?>

	</body>
</html>