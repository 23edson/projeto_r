<?php  
	require 'connectgui.php'; 
	require 'functions.php';
	session_start();
   if(isset($_SESSION['op']) and $_SESSION['op'] == 1){
  

	function getvalues(){
			
	}
?>
<script>
	function manter(){
		<?php
			if(isset($_POST['calendario'])){
				$a = dateFromCalendar($_POST['calendario']);
				//unset($_POST['calendario']);
				//unset($_POST['innerCadastro']);
				$query = db_select("select * from Cardapio where Data='".$a."'");
				$found = $query? 1:0;
			}
			else{
		?>
					document.getElementById('innerCadastro').submit();
					return;
		<?php  
			}
		?>
		document.getElementById('cadCard').innerHTML = '<?php echo $found? "Editar" : "Cadastrar" ?>'+' Cardápio';
		document.getElementById('cadCard').value='<?php echo $_POST['calendario'];?>';
	}
</script>
<?php
	function formAddItem($val, $tabela){
		$rows = db_select('select tipo from TipoPratos where id='.$val); 
		echo "<p>$rows[0]: <select name='TipPrat".$val."' id= 'TipPrat".$val."'>";   
		$rows = db_select2('select id, nome from '.$tabela.' where tipo='.$val.' order by nome asc'); 
		for($i=0; $i<sizeof($rows); $i++){ 
			echo "<option value =".$rows[$i++];
			echo "> ".$rows[$i]."</option>"; 
		}
		echo"</select></p>";		
	}
?>

<!DOCTYPE html>
<html  dir="ltr" lang="pt-br" xml:lang="pt-br">
	<head>
    	<link rel="stylesheet" type="text/css" href="tela.css" />
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<title>Cardápio Online Restaurante Universitário - Universidade Federal da Fronteira Sul</title>
		<meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
	    <meta name="author" content="pcmaster" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<link rel="stylesheet" href="css/datepicker.css">
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
		<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
		<meta name="description" content="">
		<meta name="author" content="pcmaster" >
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
		<script src="js/jquery.min.js"></script>
		<script src="js/fileinput.js" type="text/javascript"></script>
		<script src="js/fileinput_locale_fr.js" type="text/javascript"></script>
		<script src="js/fileinput_locale_es.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="robots" content="noindex" />    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<div class="skiplinks">
			<header role="banner" class="navbar navbar-fixed-top navbar-inverse moodle-has-zindex" body style="background:#228B22">
				<div class="container-fluid">
					<img src="http://uffs.edu.br/images/identidadevisual/Chapeco/IdentidadeVisual_Campus_Chapec_Colorida_para_fundos_Escuros.png" width="100" height="120" alt="Logo UFFS" title="Logo Universidade Federal da Fronteira Sul" />
				</div>
			</header>
		</div>
    	<br/><br/><br/><br/><br/><br/>
	</head>
	<body  id="page-login-index" onload="manter();">    
		<h2 align="center" id="cadCard">Manter Cardápio</h2>  
		<div class="container">
			<title>Calendário jQuery</title>    
			<table align='center' border="2" cellpadding="10">
				<th>
					<form name='innerCadastro' id='innerCadastro' method='post'>
						<p>Data: 
							<input type="text" name = "calendario" id="calendario" onchange="this.form.submit();" value=
								"<?php 
									if(isset($_POST['calendario'])){
										//unset($_POST['calendario']);
										//unset($_POST['innerCadastro']);
										echo $_POST['calendario'];
									}
									else
										echo date('m/d/Y');
								?>"
							/>
						</p>
					</form>
				</th>
				<th>
					<form name="cadastro" method="post" action="cadastrar.php">						
						<?php for($i=1; $i<=9; $i++)
							formAddItem($i, "Pratos");
						?> 
						</br></br>
						<input type="submit" name="Submit" value="Enviar" /> <br />
						<input type="hidden" name = "calendar" id="calendar" />
					</form>
				</th>
			</table>
		</div>
        <div class="footnote text-center"><div class="text_to_html"><p style="text-align:center;"></p></div>     
			<img id="comida" src="comida.jpg" width="400" height="120"  alt="Logo UFFS" title="Logo Universidade Federal da Fronteira Sul"/>
      
		</div>
	</body>
</html>

<script>
$(function() {
    $( "#calendario" ).datepicker();
});

$(function() {
    $( "#calendario" ).datepicker({
        showOn: "button",
        buttonImage: "calendario.png",
        buttonImageOnly: true
    });
});

$(function() {
    $( "#calendario" ).datepicker({
        showButtonPanel:true
    });
});

$(function() {
    $("#calendario").datepicker({dateFormat: 'dd-mm-yy'});
});
</script>
 <?php
}else {
  header("Location:login.php"); 
}
?>


