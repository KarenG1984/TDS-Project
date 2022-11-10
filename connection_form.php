<?php
// include("abre_conexion.php");

// $fecha_actual = getdate();
// $fecha_actual = $_POST['fecha'];

$connection = mysqli_connect("localhost", "root", "", "bd-tds") or die("Problemas con la conexión");

mysqli_query($connection, "insert into participante(nombre,fecha_nacimiento,lugar_nacimiento,sexo,orientacion_sexual,identidad_genero,discapacidad,estado_civil,movil,email,formacion_academica,ocupacion,enfermedades,tipo_enfermedades,medicamentos,tipo_medicamentos,tratamiento_psico_actual,tipo_tratamiento_actual,tratamiento_psico_antes,tipo_tratamiento_antes,tipo_sangre,eps,emergencias,familia,padres_muertos,hijo_adoptivo,consumo_tabaco,consumo_alcohol,consumo_narcoticos,consumo_farmacos,consumo_alucinogeno,referencia_medio,referencia_nombre)values('$_REQUEST[nombre]','$_REQUEST[fecha_nacimiento]','$_REQUEST[lugar_nacimiento]','$_REQUEST[sexo]','$_REQUEST[orientacion_sexual]','$_REQUEST[identidad_genero]','$_REQUEST[discapacidad]','$_REQUEST[estado_civil]',$_REQUEST[movil],'$_REQUEST[email]','$_REQUEST[formacion_academica]','$_REQUEST[ocupacion]','$_REQUEST[enfermedades]','$_REQUEST[tipo_enfermedades]','$_REQUEST[medicamentos]','$_REQUEST[tipo_medicamentos]','$_REQUEST[tratamiento_psico_actual]','$_REQUEST[tipo_tratamiento_actual]','$_REQUEST[tratamiento_psico_antes]','$_REQUEST[tipo_tratamiento_antes]','$_REQUEST[tipo_sangre]','$_REQUEST[eps]','$_REQUEST[emergencias]','$_REQUEST[familia]','$_REQUEST[padres_muertos]','$_REQUEST[hijo_adoptivo]','$_REQUEST[consumo_tabaco]','$_REQUEST[consumo_alcohol]','$_REQUEST[consumo_narcoticos]','$_REQUEST[consumo_farmacos]','$_REQUEST[consumo_alucinogeno]','$_REQUEST[referencia_medio]','$_REQUEST[referencia_nombre]')") or die("Problemas en el select" . mysqli_error($connection));

header("location: index.html");

mysqli_close($connection);
