<?php
  include("connected.php");
  session_start();
   if(isset($_SESSION['op']) and $_SESSION['op'] == 1){
  #$conecta = mysql_connect("localhost", "root", "") or print (mysql_error());
  #mysql_select_db("RU", $conecta) or print(mysql_error());

$_SESSION['flag'] = 0;
//require("connect.php");

$banco = Conectar();

if(isset($_POST['fsub'])){

	 $_UP['pasta'] = 'img/';

	$_UP['tamanho'] = 1000000; //Aprox 1mb


	$card = $_POST['inputpra'];
	$tipo = $_POST['inputipo'];

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

				$query = "insert into Pratos (id,nome,tipo,img) values  (NULL, '".$card."','".$tipo."', '".$destino."' )";
				$result = mysqli_query($banco,$query);
				if(!$result){ //se tiver problemas, retorna falso
					print"PROBLEM DETECTED";
					exit;
					//header('Location: tela.php');
				}
				else {echo '<div class="success">Cardápio salvo com sucesso.</div>';
						$_SESSION['flag']=1;
							header('Location: tela.php');
				}


			}

}

}else {
  header("Location:login.php"); 
}
?>

