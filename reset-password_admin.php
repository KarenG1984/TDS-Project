<?php
// Initialize the session
session_start();

// Check if the user is logged in, otherwise redirect to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: login_admin.php");
  exit;
}

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Validate new password
  if (empty(trim($_POST["new_password"]))) {
    $new_password_err = "Please enter the new password.";
  } elseif (strlen(trim($_POST["new_password"])) < 6) {
    $new_password_err = "La contraseña al menos debe tener 6 caracteres.";
  } else {
    $new_password = trim($_POST["new_password"]);
  }

  // Validate confirm password
  if (empty(trim($_POST["confirm_password"]))) {
    $confirm_password_err = "Por favor confirme la contraseña.";
  } else {
    $confirm_password = trim($_POST["confirm_password"]);
    if (empty($new_password_err) && ($new_password != $confirm_password)) {
      $confirm_password_err = "Las contraseñas no coinciden.";
    }
  }

  // Check input errors before updating the database
  if (empty($new_password_err) && empty($confirm_password_err)) {
    // Prepare an update statement
    $sql = "UPDATE registro_facilitador SET password = ? WHERE id = ?";

    if ($stmt = mysqli_prepare($link, $sql)) {
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);

      // Set parameters
      $param_password = password_hash($new_password, PASSWORD_DEFAULT);
      $param_id = $_SESSION["id"];

      // Attempt to execute the prepared statement
      if (mysqli_stmt_execute($stmt)) {
        // Password updated successfully. Destroy the session, and redirect to login page
        session_destroy();
        header("location: login_admin.php");
        exit();
      } else {
        echo "Algo salió mal, por favor vuelva a intentarlo.";
      }
    }

    // Close statement
    mysqli_stmt_close($stmt);
  }

  // Close connection
  mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TDS - Cambio de clave</title>
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
        <li><a href="./reset-password_admin.php" class="btn-notmember">Cambiar contraseña</a></li>
        <li><a href="logout_admin.php" class="btn-member">Cerrar sesión</a></li>
      </ul>
    </nav>
  </header>
  <section class="login__reset">
    <div class="login__content--reset">
      <h2>Cambiar contraseña</h2>
      <p>Complete este formulario para restablecer su contraseña.</p>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="col-3 <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
          <label>Nueva contraseña</label>
          <input type="password" name="new_password" class="input__login" value="<?php echo $new_password; ?>">
          <span class="help-block"><?php echo $new_password_err; ?></span>
        </div>
        <div class="col-3 <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
          <label>Confirmar contraseña</label>
          <input type="password" name="confirm_password" class="input__login">
          <span class="help-block"><?php echo $confirm_password_err; ?></span>
        </div>
        <button type="submit" class="btn-login" value="Enviar">Enviar</button>
        <a class="btn-default" href="session_in.html">Cancelar</a>
      </form>
    </div>
  </section>

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