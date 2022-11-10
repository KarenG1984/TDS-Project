<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Validate username
  if (empty(trim($_POST["username"]))) {
    $username_err = "Por favor ingrese el usuario.";
  } else {
    // Prepare a select statement
    $sql = "SELECT id FROM registro_egresado WHERE username = ?";

    if ($stmt = mysqli_prepare($link, $sql)) {
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "s", $param_username);

      // Set parameters
      $param_username = trim($_POST["username"]);

      // Attempt to execute the prepared statement
      if (mysqli_stmt_execute($stmt)) {
        /* store result */
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) == 1) {
          $username_err = "Este usuario ya fue registrado.";
        } else {
          $username = trim($_POST["username"]);
        }
      } else {
        echo "Existen errores para iniciar sesión.";
      }
    }

    // Close statement
    mysqli_stmt_close($stmt);
  }

  // Validate password
  if (empty(trim($_POST["password"]))) {
    $password_err = "Por favor ingresa una contraseña.";
  } elseif (strlen(trim($_POST["password"])) < 6) {
    $password_err = "La contraseña debe tener mínimo 6 caracteres.";
  } else {
    $password = trim($_POST["password"]);
  }

  // Validate confirm password
  if (empty(trim($_POST["confirm_password"]))) {
    $confirm_password_err = "Confirma tu contraseña.";
  } else {
    $confirm_password = trim($_POST["confirm_password"]);
    if (empty($password_err) && ($password != $confirm_password)) {
      $confirm_password_err = "No coincide la contraseña.";
    }
  }

  // Check input errors before inserting in database
  if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {

    // Prepare an insert statement
    $sql = "INSERT INTO registro_egresado (username, password) VALUES (?, ?)";
    // $sql = "INSERT INTO users (username, password) VALUES (?, ?)";

    if ($stmt = mysqli_prepare($link, $sql)) {
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

      // Set parameters
      $param_username = $username;
      $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

      // Attempt to execute the prepared statement
      if (mysqli_stmt_execute($stmt)) {
        // Redirect to login page
        header("location: login_casual.php");
      } else {
        echo "Algo salió mal, por favor inténtalo de nuevo.";
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
  <title>Document</title>
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

  <section class="register">
    <div class="register__content container">
      <h2>Soy Egresado</h2>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="col-3 <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
          <input class="input__register" type="email" placeholder="Email" name="username" value="<?php echo $username; ?>" required>
          <span class="help-block"><?php echo $username_err; ?></span>
        </div>
        <!-- <div class="col-3">
          <input class="input__register_admin" type="text" placeholder="Nombre completo" name="nombre_admin" required>
          <span class="focus-border"></span>
        </div>
        <div class="col-3">
          <input class="input__register_admin" type="number" placeholder="Móvil" name="movil_admin" required>
          <span class="focus-border"></span>
        </div> -->
        <div class="col-3 <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
          <input class="input__register" type="password" placeholder="Contraseña" name="password" value="<?php echo $password; ?>" required>
          <span class="help-block"><?php echo $password_err; ?></span>
        </div>
        <div class="col-3 <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
          <input class="input__register" type="password" placeholder="Confirmar Contraseña" name="confirm_password" value="<?php echo $confirm_password; ?>" required>
          <span class="help-block"><?php echo $confirm_password_err; ?></span>
        </div>
        <button type="submit" class="btn-register" value="Guardar">Registrarse</button>
        <button type="reset" class="btn-default" value="Borrar">Borrar</button>
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