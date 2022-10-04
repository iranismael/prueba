<?php

	//Conexion base de datos:
	$servername = "162.241.2.162";
	$database = "ismaelfl_cotizador";
	$username = "ismaelfl_usercotiza";
	$password = "t}K]gr}BZhMy";
	$conn = mysqli_connect($servername, $username, $password, $database);
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
?>