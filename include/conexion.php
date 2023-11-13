<?php
$host = "localhost";
$db = "taxi_seguro";
$user_db = "root";
$pass_db = "root";

$conexion = mysqli_connect($host,$user_db,$pass_db,$db);

if ($conexion) {
	date_default_timezone_set("America/Lima"); 
	$conexion->set_charset("utf8");
	session_set_cookie_params(
		$lifetime = 50000,
		$path = '',
		$domain = '',
		$secure = false,
		$httponly = false,
	);
}else{
	echo "error de conexion a la base de datos";
	
}

?>