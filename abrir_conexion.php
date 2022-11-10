<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "bd-tds";


$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conexion) {
	die("Conexión no establecida  " . mysqli_connect_error());
}

#$conexion = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

	#if ($conexion->connect_errno) {
	# echo "Conexión no establecida";
	# exit();
	#}
