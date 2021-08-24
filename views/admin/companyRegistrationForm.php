<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- ESTILOS BOOTSTRAP -->
  <link rel="stylesheet" href="/assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
  <!-- ICONOS FONT AWESOME -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!-- ESTILOS PROPIOS -->
  <link rel="stylesheet" href="/assets/css/styles.css">
  <!-- <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"> -->
  <title>S.I.V.E.</title>
</head>

<body>
  <!-- BARRA NAVEGACION -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top container-fluid d-flex">

    <!-- LOGO E LINK AL HOMEPAGE -->
    <a class="navbar-brand" href="/sive-front">
      <img src="/assets/images/logo.png" alt="LOGO SIVE" width="30" height="30" class="d-inline-block align-text-top">
      S.I.V.E.
    </a>

    <!-- !! El menu aparece desplegado revisarlo -->

    <!-- MENU TIPO HAMBURGUESA (faltan agregar mas y ver con php si ya esta logueado o no para cambiar alunos links)-->
    <div class="justify-self-end">
      <!-- EL BOTON QUE MUESTRA U OCULTA EL MENU CUANDO ESTA COLAPSADO -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu"
        aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- ESTE ES EL MENU EN SI, EL CUAL SE COLAPSARA PARA DISPOSITIVOS MOVILES Y TABLET -->
      <div id="navbarMenu">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/sive-front">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/views/customer/customerRegistrationForm.php">Registrarse</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/views/login.php">Ingresar</a>
          </li>
          <!-- <li class="nav-item">
          <a class="nav-link" href="#">Ofertas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Categorias</a>
        </li> -->
          <li class="nav-item">
            <a class="nav-link" href="/views/customer/shoppingCart.php">Carrito</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/views/customer/contactForm.php">Contacto</a>
          </li>
        </ul>
      </div>

    </div>
  </nav>
  <main class="container">
    <h1 class="text-center mb-3">Formulario de empresa</h1>

    <div class="card mx-auto" style="max-width: 42rem;">
      <form id="signupForm" action="#" method="post" class="container mb-3 mt-3">
        <div class="form-group">
          <label for="name">Nombre de la empresa:</label>
          <input type="text" name="name" id="name" placeholder="Ingrese el nombre" class="form-control" autofocus
            required>
        </div>

        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="rut">RUT:</label>
              <!-- pattern="/^([0-9])*$/" -->
              <input type="text" name="rut" id="rut" minlength="12" maxlength="12" placeholder="Ingrese su RUT"
                class="form-control">
              <small id="rutHelper" class="form-text text-muted">Solo se aceptan números.</small>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="razon">Razón social:</label>
              <input type="text" name="razon" id="razon" placeholder="Ingrese la razon social" class="form-control"
                autofocus required>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="mail">Email de la empresa:</label>
          <input type="email" name="mail" id="mail" placeholder="Ingrese el email" class="form-control" autofocus
            required>
          <!-- En este input de tipo email, es valido ingresar algo@algo , no es necesario agregar el .algo , esto habria que verlo con JS -->
        </div>
        <div class="form-group">
          <label for="pass">Contraseña:</label>
          <input type="password" name="pass" id="pass" minlength="6" placeholder="Ingrese su contraseña"
            class="form-control" required>
          <small id="passHelp" class="form-text text-muted">Mínimo 6 caracteres.</small>
        </div>
        <div class="form-group">
          <label for="repass">Confirme su contraseña:</label>
          <input type="password" name="repass" minlength="6" id="repass" placeholder="Ingrese nuevamente su contraseña"
            class="form-control" required>
        </div>

        <div class="form-group">
          <label for="celular">Celular de contacto:</label>
          <!-- pattern="/^([0-9])*$/" -->
          <input type="text" name="celular" id="celular" placeholder="Ingrese su celular" class="form-control">
          <small id="celularHelp" class="form-text text-muted">Solo se aceptan números.</small>
        </div>
        <div class="form-group">
          <label for="departamento">Departamento:</label>
          <select name="departamento" id="departamento" class="form-control">
            <option value="artigas">Artigas</option>
            <option value="canelones">Canelones</option>
            <option value="cerroLargo">Cerro Largo</option>
            <option value="colonia">Colonia</option>
            <option value="durazno">Durazno</option>
            <option value="flores">Flores</option>
            <option value="florida">Florida</option>
            <option value="lavalleja">Lavalleja</option>
            <option value="maldonado">Maldonado</option>
            <option value="montevideo">Montevideo</option>
            <option value="paysandu">Paysandú</option>
            <option value="rioNegro">Río Negro</option>
            <option value="rivera">Rivera</option>
            <option value="rocha">Rocha</option>
            <option value="salto">Salto</option>
            <option value="sanJose">San José</option>
            <option value="soriano">Soriano</option>
            <option value="tacuarembo">Tacuarembó</option>
            <option value="treintaYtres">Treinta y Tres</option>
          </select>
        </div>
        <div class="form-group">
          <label for="direccion">Dirección casa central:</label>
          <input type="text" name="direccion" id="direccion" placeholder="Ingrese su direccion" class="form-control">
        </div>

        <div class="form-group">
          <label for="pickupcenter">Dirección del pickup center:</label>
          <input type="text" name="pickupcenter" id="pickupcenter" placeholder="Ingrese un pickup center"
            class="form-control">
        </div>
        <div class="form-group d-flex justify-content-center">
          <button type="submit" id="btnSubmitSignupEmpresa" class="btn btn-primary w-50 mt-3">Registrarse</button>
        </div>
      </form>
    </div>

  </main>

  <!-- FOOTER -->
  <footer class="bg-warning container-fluid">
    <p class="text-muted text-center">
      | Grupo <strong>bit&bit</strong> | Proyecto S.I.V.E. | 2021 |
    </p>
  </footer>

  <!-- SCRIPTS BOOTSTRAP -->
  <script src="/assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
  <!-- SCRIPTS JQUERY -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <!-- SCRIPTS PROPIOS -->
  <script src="/assets/js/main.js"></script>
</body>

</html>