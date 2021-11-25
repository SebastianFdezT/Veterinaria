<?php
	$contrasena = 'hassassin24';
	$usuario = 'admin';
	$nombrebd= 'Vet4ME';

	try {
		$bd = new PDO(
			'mysql:host=vet.cz0fty9sf0ad.us-west-2.rds.amazonaws.com;
			dbname='.$nombrebd,
			$usuario,
			$contrasena,
			array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
		);
	} catch (Exception $e) {
		echo "Error de conexión ".$e->getMessage();
	}

?>
