<?php
function conectar(){
$conexion=null;
$host='vet.cz0fty9sf0ad.us-west-2.rds.amazonaws.com';
$db='Vet4ME';
$user = "admin";
$pass= "hassassin24";
try {
  $conexion= new PDO('mysql:host='.$host.';dbname='.$db, $user,$pass);


} catch (PDOException $e) {
  echo '<p> No se puede conectar a la base de datos </p>';
  exit;
}
return $conexion;


}

 ?>
