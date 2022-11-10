<?php

$tipo_usuario = $_POST['tipo_usuario'];

if ($tipo_usuario == 'Facilitador') {

  header("location: login_admin.php");
} else {

  header("location: login_casual.php");
}
