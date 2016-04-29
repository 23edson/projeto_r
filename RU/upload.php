<?php 
require("connect.php");


if(isset($_POST['fsub'])){

	 $_UP['pasta'] = 'img/';

	$_UP['tamanho'] = 1000000; //Aprox 1mb


	$card = $_POST['inputCard'];

	$nome = $_FILES['input-23']['name'];
		
			$arquivo_tmp = $_FILES['input-23']['tmp_name'];
    
			//$extensao = strtolower(end(explode('.', $_FILES['input-23']['name'])));
			$extensao = strrchr($nome, '.');
			// Pega a extensao
			//$extensao = strrchr($nome, '.');

			// Converte a extensao para minusculo
			$extensao = strtolower($extensao);
			
			
			$novoNome = md5(microtime()) .$extensao;
			
			$destino = $_UP['pasta'] . $novoNome;
			//echo $destino;
			if(move_uploaded_file( $arquivo_tmp, $destino)){

				$query = "insert into Pratos (id,nome,img,id_pessoa) values  (NULL, '".$card."', '".$destino."', '"."3"."')";
				$result = mysql_query($query);
				if(!$result){ //se tiver problemas, retorna falso
					print"erro";
				}
				echo '<div class="success">Cardápio salvo com sucesso.</div>';
				


			}

}

?>
