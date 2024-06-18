<?php
/*Se encarga de verificar la conexion de la tabla*/
$host 	= 'localhost';
$nom 	= 'root';
$pass 	= '';
$db 	= 'bdsuggardreams';

$conn = mysqli_connect($host, $nom, $pass, $db);

if (!$conn) 
{
  die("Error en la conexión: " . mysqli_connect_error());
}	
?>