<?php
function Conectarse(){
	// datos para la conexion a mysql
	$hostname = 'localhost';
	$database = 'fashiontastico';
	$username = 'root';
	$password = '';	
	$mysqli = new mysqli($hostname, $username,$password, $database) or die("no se ha podido establecer la conexion");
	if ($mysqli -> connect_errno) {
	die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
	. ") " . $mysqli -> mysqli_connect_error());
	exit();
	}
	return $mysqli;
}
?>