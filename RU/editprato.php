<?php
include("connected.php");
$banco = Conectar();

  session_start();
   if(isset($_SESSION['op']) and $_SESSION['op'] == 1){
  
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
		$(function(){
    		$("#form1").submit(function(){
        
        var valid=0;
        $(this).find('input[type=text]').each(function(){
            if($(this).val() != "") valid+=1;
        });

        if(valid){
            //document.getElementById('fsub1').disabled = false;
				//$("#submit").removeAttr('disabled');
				 $("#tes").hide();      
            return true;
        }
        else {
           // document.getElementById('fsub1').disabled = true;
            $("#tes").css("color", "red").show();
            return false;
        }
    });
});
	</script>	
	
	
	
	
	<script type="text/javascript">
		$(document).ready(function() {
    		$('#example').DataTable();
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
	 <form id="form1" action="editp.php" method="post" enctype="multipart/form-data">
	<table id="example" class="display table" width="100%">
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

							$query = "Select id,nome,tipo from Pratos order by id";
							$result = mysqli_query($banco, $query);
							if($result){
								if(mysqli_num_rows($result)>0){
										//$consulta = mysqli_fetch_array($result,MYSQLI_ASSOC);
										

										while($row = $result->fetch_assoc()) {
											echo "<tr>
															<td>" . $row['nome'] . "</td>" .
															"<td><input type='text' id='i" . $row['id'] ."' name='i".$row['id']."'  /></td>" .
															"<td>" . $row['tipo'] . "</td>" .
															"<td><input type='text' id='n" . $row['id'] . "' name='n".$row['id']."'   /></td>
																												
													</tr>";

																				
										}

								}




							}

						?>
				 
         </tbody>

	</table>
	<div id="tes" style="display:none"><p>Nada para atualizar</p></div> 
	<div style="position:relative; right:-1250px"><input class="btn btn-success" type="submit" value="Adicionar" name="fsub1" id="fsub1" /> </div>
	</form></div>
<br><br><br><br>

</body>
</html>
<?php
}else {
  header("Location:login.php"); 
}
?>