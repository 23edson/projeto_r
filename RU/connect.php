<?php
	$conecta = mysql_connect("localhost", "root", "") or print (mysql_error());
	mysql_select_db("RU", $conecta) or print(mysql_error());
?>