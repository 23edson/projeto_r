<?php
	header("Content-Type: text/html; charset=ISO-8859-1", true);
	function db_conecta(){	
		if(!isset($conecta)){	
			$config = parse_ini_file('config.ini'); 
			$conecta = mysqli_connect("localhost", $config['username'], $config['password'], $config['dbname']) or print (mysqli_error());
		
		}
		return $conecta;
	}
	
	function db_query($query){
		$conecta = db_conecta();
		return mysqli_query($conecta,$query);
	}

	function db_select($query) {
        	$rows = array();
		$res = db_query($query);
        	if($res=== false)
            		return false;
		$i=0;
        	while ($row = mysqli_fetch_row($res))
            		$rows[$i++] = $row[0];
        	return $rows;
    	}


		function db_select2($query) {
        	$rows = array();
		$res = db_query($query);
        	if($res=== false)
            		return false;
		$i=0;
        	while ($row = mysqli_fetch_row($res)){
				for($j=0; $j<2; $j++)
            		$rows[$i*2+$j] = $row[$j];
				$i++;
			}
        	return $rows;
    	}	

	db_conecta();
?>
