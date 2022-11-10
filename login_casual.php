<?php
// Inicia sesión
session_start();

// confirma que el usuario esté logueado y accede a la página de bienvenida
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
  header("location: welcome.php");
  exit;
}

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Check if username is empty
  if (empty(trim($_POST["username"]))) {
    $username_err = "Por favor ingrese su usuario.";
  } else {
    $username = trim($_POST["username"]);
  }

  // Check if password is empty
  if (empty(trim($_POST["password"]))) {
    $password_err = "Por favor ingrese su contraseña.";
  } else {
    $password = trim($_POST["password"]);
  }

  // Validate credentials
  if (empty($username_err) && empty($password_err)) {
    // Prepare a select statement
    $sql = "SELECT id, username, password FROM registro_egresado WHERE username = ?";

    if ($stmt = mysqli_prepare($link, $sql)) {
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "s", $param_username);

      // Set parameters
      $param_username = $username;

      // Attempt to execute the prepared statement
      if (mysqli_stmt_execute($stmt)) {
        // Store result
        mysqli_stmt_store_result($stmt);

        // Check if username exists, if yes then verify password
        if (mysqli_stmt_num_rows($stmt) == 1) {
          // Bind result variables
          mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
          if (mysqli_stmt_fetch($stmt)) {
            if (password_verify($password, $hashed_password)) {
              // Password is correct, so start a new session
              session_start();

              // Store data in session variables
              $_SESSION["loggedin"] = true;
              $_SESSION["id"] = $id;
              $_SESSION["username"] = $username;

              // Redirect user to welcome page
              header("location: welcome.php");
            } else {
              // Display an error message if password is not valid
              $password_err = "La contraseña que has ingresado no es válida.";
            }
          }
        } else {
          // Display an error message if username doesn't exist
          $username_err = "No existe cuenta registrada con ese nombre de usuario.";
        }
      } else {
        echo "Algo salió mal, por favor vuelve a intentarlo.";
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
  <title>TDS - Login</title>
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
        <li><a href="./form.php" class="btn-notmember">Quiero participar</a></li>
        <li><a href="./type_userlogin.html" class="btn-member">Inicio de sesión</a></li>
      </ul>
    </nav>
  </header>

  <section class="login">
    <div class="login__content">
      <h2>Egresado</h2>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="col-3 <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
          <input class="input__login" type="email" placeholder="Email" name="username" value="<?php echo $username; ?>" required>
          <span class="help-block"><?php echo $username_err; ?></span>
          <!-- <span class="focus-border"></span> -->
        </div>
        <div class="col-3 <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
          <input class="input__login" type="password" placeholder="Password" name="password" required>
          <span class="help-block"><?php echo $password_err; ?></span>
          <!-- <span class="focus-border"></span> -->
        </div>
        <button type="submit" class="btn-login">Login</button>
        <div class="login__content--remember-me">
          <!-- <label>
            <input type="checkbox" name="recuerdame" id="cbox1" value="checkbox">Recuerdame
          </label> -->
          <a href="./forgot_password.html">Olvide mi contraseña</a>
        </div>
      </form>
      <p class="login__content--register">¿Aún no tienes una cuenta? <a href="./signup_casual.php">Regístrate</a></p>
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