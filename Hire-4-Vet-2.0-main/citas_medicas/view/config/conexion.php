<?php
	
	$mysqli = new mysqli('vet.cz0fty9sf0ad.us-west-2.rds.amazonaws.com', 'admin', 'hassassin24', 'Vet4ME');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>