<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TDS - Formulario</title>
  <link rel="shortcut icon" href="./Assets/Icons/shortcut_icon.png" type="image/x-icon">
  <link rel="stylesheet" href="./Css/style.css">
  <!-- <link rel="stylesheet" href="./css/app.css"> -->
</head>

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

<div class="root">

  <form action="connection_form.php" class="form-register">
    <h1 class="form-register__title">Formulario - Entrevista</h1>
    <div class="form-register__header">
      <ul class="progressbar">
        <li class="progressbar__option active"></li>
        <li class="progressbar__option"></li>
        <li class="progressbar__option"></li>
        <li class="progressbar__option"></li>
        <li class="progressbar__option"></li>
        <li class="progressbar__option"></li>
      </ul>
    </div>

    <div class="form-register__body">
      <div class="step active" id="step-1">
        <div class="step__header">
          <h2 class="step__title">Información personal <small>(Paso 1)</small></h2>
        </div>
        <div class="step__body">
          <div class="col-4">
            <label>Nombre completo</label>
            <input class="step__input" type="text" name="nombre" required>
          </div>
          <div class="col-4">
            <label>Fecha de nacimiento</label>
            <input class="step__input" type="date" name="fecha_nacimiento" required>
          </div>
          <div class="col-4">
            <label>Lugar de nacimiento</label>
            <input class="step__input" type="text" name="lugar_nacimiento" required>
          </div>
          <div class="col-4">
            <label>Sexo</label>
            <select id="sex" name="sexo">
              <option value=""></option>
              <option value="Femenino">Femenino</option>
              <option value="Masculino">Masculino</option>
            </select>
          </div>
          <div class="col-4">
            <label>Orientación sexual</label>
            <select id="sexual_orientation" name="orientacion_sexual">
              <option value=""></option>
              <option value="Heterosexual">Heterosexual</option>
              <option value="Lesbiana">Lesbiana</option>
              <option value="Bisexual">Bisexual</option>
              <option value="Gay">Gay</option>
              <option value="Asexual">Asexual</option>
              <option value="Ninguno">Ninguno</option>
            </select>
          </div>
          <div class="col-4">
            <label>Identidad de género</label>
            <select id="gender_identity" name="identidad_genero">
              <option value=""></option>
              <option value="Transexual">Transexual</option>
              <option value="Transgénero">Transgénero</option>
              <option value="No Binario">No Binario</option>
              <option value="Ninguno">Ninguno</option>
            </select>
          </div>
          <div class="col-4">
            <label>¿Cuenta con alguna discapacidad?</label>
            <select id="subject" name="discapacidad" required>
              <option value=""></option>
              <option value="Si">Si</option>
              <option value="No">No</option>
            </select>
          </div>
          <div class="col-4">
            <label>Estado Civil</label>
            <select id="marital_status" name="estado_civil">
              <option value=""></option>
              <option value="Soltero(a)">Soltero(a)</option>
              <option value="Casado(a)">Casado(a)</option>
              <option value="Divociado(a)">Divociado(a)</option>
              <option value="Viudo(a)">Viudo(a)</option>
              <option value="Unión Libre">Unión Libre</option>
            </select>
          </div>
          <div class="col-4">
            <label for="">Móvil</label>
            <input class="step__input" type="tel" name="movil" required>
          </div>
          <div class="col-4">
            <label for="">Correo electrónico</label>
            <input class="step__input" type="email" name="email" required>
          </div>
        </div>
        <div class="step__footer">
          <button type="button" class="step__button step__button--next" data-to_step="2" data-step="1">Siguiente</button>
        </div>
      </div>

      <div class="step" id="step-2">
        <div class="step__header">
          <h2 class="step__title">Estudio y empleo <small>(Paso 2)</small></h2>
        </div>
        <div class="step__body">
          <div class="col-4">
            <label>Formación académica</label>
            <select id="subject" name="formacion_academica">
              <option value="Primaria">Primaria</option>
              <option value="Bachiller">Bachiller</option>
              <option value="Técnico">Técnico</option>
              <option value="Tecnólogo">Tecnólogo</option>
              <option value="Universitario">Universitario</option>
              <option value="Maestría">Maestría</option>
              <option value="Doctorado">Doctorado</option>
            </select>
          </div>
          <div class="col-4">
            <label>Ocupación</label>
            <select id="subject" name="ocupacion">
              <option value="Estudiante">Estudiante</option>
              <option value="Empleado">Empleado</option>
              <option value="Independiente">Independiente</option>
              <option value="Jubilado">Jubilado</option>
              <option value="Desempleado">Desempleado</option>
              <option value="Ama de casa">Ama de casa</option>
            </select>
          </div>
        </div>
        <div class="step__footer">
          <button type="button" class="step__button step__button--next" data-to_step="3" data-step="2">Siguiente</button>
          <button type="button" class="step__button step__button--back" data-to_step="1" data-step="2">Regresar</button>
        </div>
      </div>

      <div class="step" id="step-3">
        <div class="step__header">
          <h2 class="step__title">Antecedentes de salud <small>(Paso 3)</small></h2>
        </div>
        <div class="step__body">
          <div class="col-4">
            <label>Enfermedades crónicas</label>
            <select id="subject" name="enfermedades" required>
              <option value=""></option>
              <option value="Si">Si</option>
              <option value="No">No</option>
            </select>
            <textarea name="tipo_enfermedades" id="" cols="30" rows="2" placeholder="¿Cuáles?"></textarea>
          </div>
          <div class="col-4">
            <label>Prescripción de dieta o medicamento</label>
            <select id="subject" name="medicamentos" required>
              <option value=""></option>
              <option value="Si">Si</option>
              <option value="No">No</option>
            </select>
            <textarea name="tipo_medicamentos" id="" cols="30" rows="2" placeholder="¿Cuáles?"></textarea>
          </div>
          <div class="col-4">
            <label>¿Actualmente se encuentra en tratamiento psiquiátrico?</label>
            <select id="subject" name="tratamiento_psico_actual" required>
              <option value=""></option>
              <option value="Si">Si</option>
              <option value="No">No</option>
            </select>
            <textarea name="tipo_tratamiento_actual" id="" cols="30" rows="2" placeholder="¿Cuáles?"></textarea>
          </div>
          <div class="col-4">
            <label>¿Ha estado en tratamiento psiquiátrico?</label>
            <select id="subject" name="tratamiento_psico_antes" required>
              <option value=""></option>
              <option value="Si">Si</option>
              <option value="No">No</option>
            </select>
            <textarea name="tipo_tratamiento_antes" id="" cols="30" rows="2" placeholder="¿Cuáles?"></textarea>
          </div>
          <div class="col-4">
            <label>Grupo sanguíneo</label>
            <select id="subject" name="tipo_sangre" required>
              <option value="O+">O+</option>
              <option value="O-">O-</option>
              <option value="A+">A+</option>
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="B-">B-</option>
              <option value="AB+">AB+</option>
              <option value="AB-">AB-</option>
            </select>
          </div>
          <div class="col-4">
            <label>EPS</label>
            <input class="step__input" type="text" name="eps" required>
          </div>
          <div class="col-4">
            <label>Lugar para atención de Urgencias</label>
            <input class="step__input" type="text" name="emergencias" required>
          </div>
        </div>
        <div class="step__footer">
          <button type="button" class="step__button step__button--next" data-to_step="4" data-step="3">Siguiente</button>
          <button type="button" class="step__button step__button--back" data-to_step="2" data-step="3">Regresar</button>
        </div>
      </div>

      <div class="step" id="step-4">
        <div class="step__header">
          <h2 class="step__title">Antecedentes familiares <small>(Paso 4)</small></h2>
        </div>
        <div class="step__body">
          <div class="col-4">
            <label for="">¿Sus Padres viven?</label>
            <select id="subject" name="familia" required>
              <option value=""></option>
              <option value="Si">Si</option>
              <option value="No">No</option>
            </select>
          </div>
          <div class="col-4">
            <label for="">Si su respuesta es No, ¿Cuál no vive?</label>
            <select id="subject" name="padres_muertos">
              <option value=""></option>
              <option value="Padre">Padre</option>
              <option value="Madre">Madre</option>
            </select>
          </div>
          <div class="col-4">
            <label for="">¿Es hijo adoptivo?</label>
            <select id="subject" name="hijo_adoptivo">
              <option value=""></option>
              <option value="Si">Si</option>
              <option value="No">No</option>
            </select>
          </div>
        </div>
        <div class="step__footer">
          <button type="button" class="step__button step__button--next" data-to_step="5" data-step="4">Siguiente</button>
          <button type="button" class="step__button step__button--back" data-to_step="3" data-step="4">Regresar</button>
        </div>
      </div>

      <div class="step" id="step-5">
        <div class="step__header">
          <h2 class="step__title">Hábitos <small>(Paso 5)</small></h2>
        </div>
        <div class="step__body">
          <div class="col-4">
            <label for="">Fuma</label>
            <select id="subject" name="consumo_tabaco" required>
              <option value=""></option>
              <option value="Si">Si</option>
              <option value="No">No</option>
            </select>
          </div>
          <div class="col-4">
            <label for="">Consume bebida alcohólicas</label>
            <select id="subject" name="consumo_alcohol" required>
              <option value=""></option>
              <option value="Si">Si</option>
              <option value="No">No</option>
            </select>
          </div>
          <div class="col-4">
            <label for="">¿Usa narcóticos?</label>
            <select id="subject" name="consumo_narcoticos" required>
              <option value=""></option>
              <option value="Si">Si</option>
              <option value="No">No</option>
            </select>
          </div>
          <div class="col-4">
            <label for="">¿Usa fármacos?</label>
            <select id="subject" name="consumo_farmacos" required>
              <option value=""></option>
              <option value="Si">Si</option>
              <option value="No">No</option>
            </select>
          </div>
          <div class="col-4">
            <label for="">¿Usa alucinógenos?</label>
            <select id="subject" name="consumo_alucinogeno" required>
              <option value=""></option>
              <option value="Si">Si</option>
              <option value="No">No</option>
            </select>
          </div>
        </div>
        <div class="step__footer">
          <button type="button" class="step__button step__button--next" data-to_step="6" data-step="5">Siguiente</button>
          <button type="button" class="step__button step__button--back" data-to_step="4" data-step="5">Regresar</button>
        </div>
      </div>

      <div class="step" id="step-6">
        <div class="step__header">
          <h2 class="step__title">Referencia <small>(Paso 6)</small></h2>
        </div>
        <div class="step__body">
          <div class="col-4">
            <label>¿Por que medio te enteraste de Transición Dinámica del SER?</label>
            <select id="subject" name="referencia_medio" required>
              <option value=""></option>
              <option value="Instagram">Instagram</option>
              <option value="Facebook">Facebook</option>
              <option value="Un miembro del equipo de TDS">Un miembro del equipo de TDS</option>
              <option value="Alguien me recomendó">Alguien me recomendó</option>
            </select>
            <input class="step__input" type="text" name="referencia_nombre" placeholder="¿Quién?">
          </div>
        </div>
        <div class="step__footer">
          <button type="submit" class="step__button">Enviar</button>
          <button type="button" class="step__button step__button--back" data-to_step="5" data-step="6">Regresar</button>
        </div>
      </div>

    </div>
  </form>
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
<script src="./Js/app.js"></script>
</body>

</html>