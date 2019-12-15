<?php  
	session_start();

	include_once("conexao.php");

			$id = $_GET['id'];

			// Apagar Imovel

			$sql = "SELECT imagem FROM imoveis WHERE id_imovel = '$id'";
			
			$img = mysqli_query($conexao,$sql);

			$ft_imovel = mysqli_fetch_array($img);

			if (is_file('foto/'.$ft_imovel['imagem'])) {
				$deletar = unlink('foto/'.$ft_imovel['imagem']);
			}
			
			$query = mysqli_query($conexao, "DELETE FROM `imoveis` WHERE id_imovel = '$id'");
			
			if ($query) {
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TCC-CAVI2/BD/edcao.php'>
					<script type=\"text/javascript\">
						alert(\"Imovel deletado com Sucesso.\");
					</script>
				";	
			}else{
				//Upload não efetuado com sucesso, exibe a mensagem
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TCC-CAVI2/BD/edcao.php'>
					<script type=\"text/javascript\">
						alert(\"Nao foi possivel Atualizar o Imovel.\");
					</script>
				";
			}
			
?>