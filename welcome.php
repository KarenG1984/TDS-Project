<?php
// Carga información de la sesión
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TDS - Egresado</title>
  <link rel="stylesheet" href="./Css/style.css">
  <link rel="shortcut icon" href="./Assets/Icons/shortcut_icon.png" type="image/x-icon">
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
        <li><a href="./reset-password_casual.php" class="btn-notmember">Cambiar contraseña</a></li>
        <li><a href="logout_casual.php" class="btn-member">Cerrar sesión</a></li>
      </ul>
    </nav>
  </header>
  <!DOCTYPE html>
  <html lang="en">

  <div class="welcome container">
    <h1><?php echo htmlspecialchars($_SESSION["username"]); ?> Te damos la bienvenida, ahora formas parte de la comunidad de Transición Dinámica del Ser.</h1>
    <div class="videoWrapper">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/Nb1VOQRs-Vs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
        <a href="https://www.instagram.com/tdscolombia.oficial/"><img src="./Assets/Icons/Icon_instagram.svg" alt="instagram TDS"></a>
        <a href="https://www.facebook.com/TDSMed"><img src="./Assets/Icons/Icon_facebook-square.svg" alt="Facebook TDS"></a>
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