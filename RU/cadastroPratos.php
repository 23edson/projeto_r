

<!DOCTYPE html>
<html  dir="ltr" lang="pt-br" xml:lang="pt-br">
<head>
	 <link href="css/bootstrap.min.css" rel="stylesheet">
       <link rel="stylesheet" type="text/css" href="tela.css" />
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Cardápio Online Restaurante Universitário - Universidade Federal da Fronteira Sul</title>
    <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="pcmaster" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
	<link rel="stylesheet" href="css/datepicker.css">

    <meta name="description" content="">
    <meta name="author" content="pcmaster" >
 
   
    <link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
    <script src="js/jquery.min.js"></script>
    <script src="js/fileinput.js" type="text/javascript"></script>
   
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/bootstrap-datepicker.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


	<script type="text/javascript">
	
		
		function getpos() {
			
		
		var div = document.getElementById('div3');
		div.style.top = '120px';
		//print("rwinreireionoineionenoinoinro3in")
		}
	</script>


<meta name="robots" content="noindex" />    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body  id="page-login-index">

<div class="skiplinks">

<header role="banner" class="navbar navbar-fixed-top navbar-inverse moodle-has-zindex" body style="background:#228B22">
        <div class="container-fluid">
	     
            <img src="http://uffs.edu.br/images/identidadevisual/Chapeco/IdentidadeVisual_Campus_Chapec_Colorida_para_fundos_Escuros.png" border="000" width="100" height="120" alt="Logo UFFS" title="Logo Universidade Federal da Fronteira Sul" /></div></header>
     <br><br>   <br><br>  <br><br>      
     <div class="container">

	


	<section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper" style="color: #228B22">
                        <div id="login"  class="animate form">

      				<form action="upload.php" method="post" enctype="multipart/form-data">
		
        			 <header><h1 style="color: #228B22" ><span>Cadastrar Prato</span></h1></header>

				 <p> 
                                    <label for="inputCard" style="color: #228B22" data-icon="" >Nome</label>
                                    <input id="inputCard" name="inputCard" placeholder="" required="true"/>
                                </p>
				
				
    				<input id="input-23" name="input-23" type="file" multiple="false" class="file-loading" Onclick="getpos()" >
    				<script>
    					$(document).on('ready', function() {
        					$("#input-23").fileinput({
            						showUpload: false,
									minFileCount: 1,
	     						allowedFileExtensions: ["jpg", "gif", "png", "jpeg"],
                       					browseClass: "btn btn-success",
        						browseLabel: "Inserir imagem",
        						browseIcon: "<i class=\"glyphicon glyphicon-picture\"></i> ",
            						layoutTemplates: {
                						main1: "{preview}\n" +
               								 "<div class=\'input-group {class}\'>\n" +
               								 "   <div class=\'input-group-btn\'>\n" +
                						"       {browse}\n" +
                       
                
                						"   </div>\n" +
                						"   {caption}\n" +
               							 "</div>"
            						}
       						 });
							 
    						});
    				</script>
				<br><br>
				
			
      				<p >
                                    <input class="btn btn-success" type="submit" value="Adicionar" name="fsub" id="fsub" Onclick="<?php $_SESSION['atualiza'] = 0;?>" /> 
				</p>

			</form>


	         </div>
		
		
        	</div>
			</div>
		
	
        </section>
	
        
     
  

    </div> <!-- /container -->


</div>

 <div id="div3"><p style="text-align:center;"><b>
        	<br><br>
        	
        	<br>
        	
        	<img id="comida" src="comida.jpg" width="400" height="120" alt="Logo UFFS" title="Logo Universidade Federal da Fronteira Sul"/>
        </div>
        

</body>
</html>


