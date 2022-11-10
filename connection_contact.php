<?php
// include("abre_conexion.php");

// $fecha_actual = getdate();
// $fecha_actual = $_POST['fecha'];

$connection = mysqli_connect("localhost", "root", "", "bd-tds") or die("Problemas con la conexión");

// $sql = "insert into contacto(nombre, movil, email, asunto, mensaje_contacto)values('$_REQUEST[nombre]',$_REQUEST[movil],'$_REQUEST[email]','$_REQUEST[asunto]','$_REQUEST[mensaje_contacto]')";
// $ejecutado = mysqli_query($connection, $sql);
// mysqli_query($connection, $sql) or die("Problemas en el select" . mysqli_error($connection));
// mysqli_close($connection);

// mysqli_query($connection, "insert into contacto(fecha_actual,nombre,movil,email,asunto,mensaje_contacto)values('$_REQUEST[fecha_actual]','$_REQUEST[nombre]',$_REQUEST[movil],'$_REQUEST[email]','$_REQUEST[asunto]','$_REQUEST[mensaje_contacto]')") or die("Problemas en el select" . mysqli_error($connection));
mysqli_query($connection, "insert into contacto(nombre,movil,email,asunto,mensaje_contacto)values('$_REQUEST[nombre]',$_REQUEST[movil],'$_REQUEST[email]','$_REQUEST[asunto]','$_REQUEST[mensaje_contacto]')") or die("Problemas en el select" . mysqli_error($connection));

header("location: index.html");

mysqli_close($connection);
