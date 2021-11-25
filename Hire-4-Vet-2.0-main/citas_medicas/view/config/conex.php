<?php
$hostname_conex = "vet.cz0fty9sf0ad.us-west-2.rds.amazonaws.com";
$database_conex = "Vet4ME";
$username_conex = "admin";
$password_conex = "hassassin24";
// creación de la conexión a la base de datos con mysql_connect()
$conex = mysqli_connect($hostname_conex, $username_conex, $password_conex, $database_conex) or 
die ("No se ha podido conectar al servidor de Base de datos"); 

?>
