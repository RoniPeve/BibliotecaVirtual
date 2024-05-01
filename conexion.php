<?php 

	$host = 'localhost';
	$user = 'root';
	$password ="";
	$db='biblioteca';
	$conexion= @mysqli_connect($host,$user,$password,$db);

	if (!$conexion) {
		echo "error en la conexion";
	}
 ?>