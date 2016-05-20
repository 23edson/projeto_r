<?php
	function Conectar() {
	$conecta = mysqli_connect("localhost", "root", "","RU") or print (mysqli_error());
	return $conecta;
	}
	//mysqli_select_db($conecta) or print(mysqli_error());
?>