<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TDS - Consulta</title>
  <link rel="stylesheet" href="./Css/style.css">
  <link rel="shortcut icon" href="./Assets/Icons/shortcut_icon.png" type="image/x-icon">

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> -->
</head>

<body>
  <header>
    <div class="topbar">
      <a href="./contact.html">Contáctanos</a>
      <a>|</a>
      <a href="https://wa.link/i8d6bc">Whatsapp</a>
    </div>
    <input type="checkbox" class="hide" id="overlay-input" />
    <label for="overlay-input" class="hide" id="overlay-button"><span></span></label>
    <a href="#" class="logom"><img class="nav__logo" src="./Assets/Icons/Recurso 1.png" alt=""></a>
    <nav id="overlay" class="navigation">
      <a href="./index.html" class="logod"><img class="nav__logo" src="./Assets/Icons/Recurso 1.png" alt="logo TDS"></a>
      <ul>
        <li><a href="./index.html" class="anchor">Inicio</a></li>
        <li><a href="./aboutus.html" class="anchor">Quiénes somos</a></li>
        <li><a href="./community.html" class="anchor">Noticias</a></li>
        <li><a href="./reset-password_admin.php" class="btn-notmember">Cambiar contraseña</a></li>
        <li><a href="logout_admin.php" class="btn-member">Cerrar sesión</a></li>
      </ul>
    </nav>
  </header>

  <div class="session-in container">
    <h1>Consultar</h1>
    <div class="session-in__content">
      <form action="session_in.php" method="POST">
        <div class="col-5">
          <label for="asunto">Asunto</label>
          <select name="asunto">
            <option value=""></option>
            <option name="informacion" value="informacion">Información</option>
            <option name="requisitos" value="requisitos">Requisitos</option>
            <option name="solicitudes" value="solicitudes">Solicitudes</option>
          </select>
        </div>
        <button type="submit" value="Consultar" name="btn_consultar" class="btn_consultar">Consultar</button>
        <button type="submit" value="Eliminar" name="btn_eliminar" class="btn_eliminar">Eliminar</button>

        <!-- <div class="col-1">
          <label for="fecha_actual">información a buscar (mes)</label>
          <input class="input__session-in" type="text" name="fecha_actual" id="fecha_actual">
        </div> -->
        <!-- <div class="col-1">
          <label for="nombre">Nombre</label>
          <input class="input__session-in" type="text" name="nombre">
          <span class="focus-border"></span>
        </div>
        <div class="col-1">
          <label for="movil">Móvil</label>
          <input class="input__session-in" type="tel" name="movil">
          <span class="focus-border"></span>
        </div>
        <div class="col-1">
          <label for="email">Correo electrónico</label>
          <input class="input__session-in" type="email" name="email">
          <span class="focus-border"></span>
        </div>
        <div class="col-1">
          <label for="asunto">Asunto</label>
          <input class="input__session-in" type="text" name="asunto">
          <span class="focus-border"></span>
        </div>
        <div class="col-1">
          <label for="mensaje_contacto">Mensaje</label>
          <input class="input__session-in" type="text" name="mensaje_contacto">
        </div> -->

        <!-- <div class="form-group">
          <label for="doc">Documento</label>
          <input type="text" name="doc" class="form-control" id="doc">
        </div> -->
        <!-- <div class="form-group">
          <label for="nombre">Nombre </label>
          <input type="text" name="nombre" class="form-control" id="nombre">
        </div>
        <div class="form-group">
          <label for="dir">Direccion </label>
          <input type="text" name="dir" class="form-control" id="dir">
        </div>
        <div class="form-group">
          <label for="tel">Telefono </label>
          <input type="text" name="tel" class="form-control" id="tel">
        </div> -->

        <!-- <input type="submit" value="Registrar" class="btn btn-success" name="btn_registrar"> -->

        <!-- <input type="submit" value="Actualizar" class="btn btn-primary" name="btn_actualizar"> -->
        <!-- <input type="submit" value="Eliminar" class="btn btn-danger" name="btn_eliminar"> -->

      </form>
      <?php
      include("abrir_conexion.php");


      //INSERTAR DATOS
      // if (isset($_POST['btn_registrar'])) {
      //   $doc = $_POST['doc'];
      //   $nombre = $_POST['nombre'];
      //   $dir = $_POST['dir'];
      //   $tel = $_POST['tel'];
      //   if ($doc == "" || $nombre == "" || $dir == "") {
      //     echo "Campos obligatorios";
      //   } else {

      //     $result = $conexion->prepare("INSERT INTO
      //       propietario(doc,nombre, direccion, telefono) VALUES(?, ?, ?, ?);");
      //     $result->bind_param("ssss", $doc, $nombre, $dir, $tel);
      //     $result->execute();
      //   }
      // }

      //CONSULTAR DATOS
      if (isset($_POST['btn_consultar'])) {

        $asunto = $_POST['asunto'];
        $existe = 0;

        if ($asunto == "") {
          echo "Debe seleccionar una opción de búsqueda";
        } else {
          if ($asunto == 'informacion') {
            $resultados = mysqli_query($conexion, "SELECT * FROM contacto where asunto ='informacion'");
            while ($consulta = mysqli_fetch_array($resultados)) {
              echo "
                <table width = '100%' border = '1'>
                  <tr>
                    <td><b><center>Nombre</center></b></td>
                    <td><b><center>Móvil</center></b></td>
                    <td><b><center>Email</center></b></td>
                    <td><b><center>Asunto</center></b></td>
                    <td><b><center>Mensaje</center></b></td>
                    </tr>
                    <tr>
                    <td>" . $consulta['nombre'] . "</td>
                    <td>" . $consulta['movil'] . "</td>
                    <td>" . $consulta['email'] . "</td>
                    <td>" . $consulta['asunto'] . "</td>
                    <td>" . $consulta['mensaje_contacto'] . "</td>
                    </tr>
                </table>
                ";
              $existe++;
            }
          } elseif ($asunto == 'requisitos') {
            $resultados = mysqli_query($conexion, "SELECT * FROM contacto where asunto='requisitos'");
            while ($consulta = mysqli_fetch_array($resultados)) {
              echo "
                <table width = '100%' border = '1'>
                  <tr>
                    <td><b><center>Nombre</center></b></td>
                    <td><b><center>Móvil</center></b></td>
                    <td><b><center>Email</center></b></td>
                    <td><b><center>Asunto</center></b></td>
                    <td><b><center>Mensaje</center></b></td>
                    </tr>
                    <tr>
                    <td> " . $consulta['nombre'] . "</td>
                    <td> " . $consulta['movil'] . "</td>
                    <td> " . $consulta['email'] . "</td>
                    <td> " . $consulta['asunto'] . "</td>
                    <td> " . $consulta['mensaje_contacto'] . "</td>
                    </tr>
                </table>
                ";
              $existe++;
            }
          } else {
            $resultados = mysqli_query($conexion, "SELECT * FROM contacto where asunto='solicitudes'");
            while ($consulta = mysqli_fetch_array($resultados)) {
              echo "
                <table width = '100%' border = '1'>
                  <tr>
                    <td><b><center>Nombre</center></b></td>
                    <td><b><center>Móvil</center></b></td>
                    <td><b><center>Email</center></b></td>
                    <td><b><center>Asunto</center></b></td>
                    <td><b><center>Mensaje</center></b></td>
                    </tr>
                    <tr>
                    <td> " . $consulta['nombre'] . "</td>
                    <td> " . $consulta['movil'] . "</td>
                    <td> " . $consulta['email'] . "</td>
                    <td> " . $consulta['asunto'] . "</td>
                    <td> " . $consulta['mensaje_contacto'] . "</td>
                    </tr>
                </table>
                ";
              $existe++;
            }
          }
        }
      }


      // $doc = $_POST['doc'];
      // $fecha_actual = $_POST['fecha_actual'];
      // $existe = 0;
      // if ($fecha_actual == "") {
      //   echo "Debe escribir mes a consultar";
      // } else {
      // $resultados = mysqli_query($conexion, "SELECT * FROM contacto
      // WHERE fecha_actual= '$fecha_actual'");

      // $resultados = mysqli_query($conexion, "SELECT * FROM contacto where fecha_actual='Julio'");

      // $resultados = mysqli_query($conexion, "SELECT * FROM contacto");

      // $existe++;


      #echo $consulta['doc']."<br>";
      #echo $consulta['nombre']."<br>";
      #echo $consulta['direccion']."<br>";
      #echo $consulta['telefono']."<br>";
      #$existe++;


      // }
      // if ($existe == 0) {
      //   echo "El documento no existe";



      //ACTUALIZAR DATOS
      // if (isset($_POST['btn_actualizar'])) {
      //   $doc = $_POST['doc'];
      //   $nombre = $_POST['nombre'];
      //   $dir = $_POST['dir'];
      //   $tel = $_POST['tel'];

      //   if ($doc == "" || $nombre == "" || $dir == "") {
      //     echo "Campos obligatorios";
      //   } else {
      //     $existe = 0;
      //     $resultados = mysqli_query($conexion, "SELECT * FROM propietario WHERE doc= '$doc'");
      //     while ($consulta = mysqli_fetch_array($resultados)) {
      //       $existe++;
      //     }
      //     if ($existe == 0) {
      //       echo "El documento no existe";
      //     } else {
      //       $_UPDATE_SQL = "UPDATE propietario Set
      //     doc='$doc',
      //     nombre='$nombre',
      //     direccion='$dir',
      //     telefono='$tel'
      //     WHERE doc='$doc'";
      //       mysqli_query($conexion, $_UPDATE_SQL);
      //     }
      //   }
      // }


      //ELIMINAR DATOS
      // if ($asunto == "") {
      //   echo "Debe seleccionar una opción de búsqueda";
      // } else {
      //   if ($asunto == 'informacion') {
      //     $resultados = mysqli_query($conexion, "SELECT * FROM contacto where asunto ='informacion'");
      //     while ($consulta = mysqli_fetch_array($resultados)) {}
      //   }
      // }

      if(isset($_POST['btn_eliminar'])) {
      // $asunto = $_POST['asunto'];

        $existe = 0;
        // if($asunto==""){
        //   echo "Debe escribir el documento";
        // }else{
          $resultados = mysqli_query($conexion,"SELECT * FROM contacto WHERE asunto= 'informacion'");
          while($consulta = mysqli_fetch_array($resultados))
          {   
            // echo "
            //     <table width = '100%' border = '1'>
            //       <tr>
            //         <td><b><center>Nombre</center></b></td>
            //         <td><b><center>Móvil</center></b></td>
            //         <td><b><center>Email</center></b></td>
            //         <td><b><center>Asunto</center></b></td>
            //         <td><b><center>Mensaje</center></b></td>
            //         </tr>
            //         <tr>
            //         <td> " . $consulta['nombre'] . "</td>
            //         <td> " . $consulta['movil'] . "</td>
            //         <td> " . $consulta['email'] . "</td>
            //         <td> " . $consulta['asunto'] . "</td>
            //         <td> " . $consulta['mensaje_contacto'] . "</td>
            //         </tr>
            //     </table>
            //     ";
            $existe++;
        }
        if($existe==0){
          echo "El documento no existe";
        }else{       
          $_DELETE_SQL =  "DELETE FROM contacto WHERE asunto= 'informacion'";
          mysqli_query($conexion,$_DELETE_SQL); 
        }
      }
    // }

      // if (isset($_POST['btn_eliminar'])) {
      //   $asunto = $_POST['asunto'];
      //   $existe = 0;

      //   // if ($asunto == "") {
      //   //   echo "Debe seleccionar una opción de búsqueda";
      //   // } else {
      //     // if ($asunto == 'informacion') {
      //       // $resultados = mysqli_query($conexion, "SELECT * FROM contacto where asunto ='informacion'");
      //       while ($consulta = mysqli_fetch_array($resultados)) {
      //         $existe++;
      //       }
      //       if ($existe == 0) {
      //         echo "Consulta no existe";
      //       } else {
      //         $_DELETE_SQL =  "DELETE FROM contacto WHERE asunto ='informacion'";
      //         mysqli_query($conexion, $_DELETE_SQL);
      //         echo "Archivo eliminado";
      //       }
      //     } 
      //   // }
      // // }


      //     $resultados = mysqli_query($conexion, "SELECT * FROM propietario
      //     WHERE doc= '$doc'");
      //     while ($consulta = mysqli_fetch_array($resultados)) {
      //       $existe++;
      //     }
      //     if ($existe == 0) {
      //       echo "El documento no existe";
      //     } else {
      //       $_DELETE_SQL =  "DELETE FROM propietario WHERE doc = '$doc'";
      //       mysqli_query($conexion, $_DELETE_SQL);
      //     }
      //   }
      // }


      include("cerrar_conexion.php");
      ?>
    </div>
  </div>

  <footer>
    <div class="footer__content container">
      <div class="footer__politics">
        <a href="#">Términos y condiciones</a>
        <a href="#">Privacidad</a>
        <a href="#">Tratamiento de datos</a>
      </div>
      <div class="footer__socialmedia">
        <a href="https://www.instagram.com/tdscolombia.oficial/"><img src="./Assets/Icons/Icon_instagram.svg"
            alt="instagram TDS"></a>
        <a href="https://www.facebook.com/TDSMed"><img src="./Assets/Icons/Icon_facebook-square.svg"
            alt="Facebook TDS"></a>
        <a href="https://wa.link/i8d6bc"><img src="./Assets/Icons/Icon_whatsapp.svg" alt="WhastApp TDS"></a>
      </div>
    </div>
    <div class="footer__author container">
      <hr>
      <p>2022 | Transición Dinámica del Ser - Desarrollada por Karen Gómez con fines educativos</p>
    </div>
  </footer>

</body>

</html>