<?php
include("connect.php");
$banco = Conectar();

 ?>

<!DOCTYPE html>
<html  dir="ltr" lang="pt-br" xml:lang="pt-br">


<head>
	 <link href="css/bootstrap1.min.css" rel="stylesheet">
	 <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
       <link rel="stylesheet" type="text/css" href="tela.css" />
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Cardápio Online Restaurante Universitário - Universidade Federal da Fronteira Sul</title>
    <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="pcmaster" />




	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
		<script src="js/dataTables.bootstrap.min.js"></script>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="noindex" />    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript">
		$(document).ready(function() {
    var table = $('#example').DataTable();
 
    $('button').click( function() {
        var data = table.$('input, select').serialize();
        $.get("editp.php", data);
       
        return false;
    } );
} );
	</script>
</head>

<body  id="page-login-index">

<div class="skiplinks">

<header role="banner" class="navbar navbar-fixed-top navbar-inverse moodle-has-zindex" body style="background:#228B21;border:#228B21;padding:2px" >
        <div class="container-fluid" padding="2px">

            <img src="http://uffs.edu.br/images/identidadevisual/Chapeco/IdentidadeVisual_Campus_Chapec_Colorida_para_fundos_Escuros.png" width="100" height="120" alt="Logo UFFS" title="Logo Universidade Federal da Fronteira Sul" />
        </div>
</header>
        </div>
     <br><br>   <br><br>  <br><br>

	<br>
	<div class="table-reponsive">
		<form action="editp.php" method="post">
		<table id="example" class="display" width="100%" cellspacing="0">
			<thead>
            <tr>
                <th>Nome</th>
                <th>Editar nome</th>
					<th>Tipo</th>
					<th>Editar tipo</th>
            </tr>
         </thead>
         <tfoot>
            <tr>
                <th>Nome</th>
                <th>Editar nome</th>
					<th>Tipo</th>
					<th>Editar tipo</th>
            </tr>
        </tfoot>
        <tbody>
        		<?php

							$query = "Select nome,tipo from Pratos order by 1";
							$result = mysqli_query($banco, $query);
							if($result){
								if(mysqli_num_rows($result)>0){
										//$consulta = mysqli_fetch_array($result,MYSQLI_ASSOC);
										$j = 0;

										while($row = $result->fetch_assoc()) {
											echo "<tr>
															<td>" . $row['nome'] . "</td>" .
															"<td><input name='inputn" . $j . "' id='inputn" . $j ."'  /></td>" .
															"<td>" . $row['tipo'] . "</td>" .
															"<td><input name='inputtt" .$j . "' id='inputt" . $j . "'  /></td></tr>";

										$j++;										
										}

								}




							}

						?>
        
        
        
        
        </tbody>
		
		</table>
		<input type="submit" value="ponrw">
		</form>
		 	
		
	
	
	
	</div>
<br><br><br><br>

</body>
</html>