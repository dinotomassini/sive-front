<?php
require "./partials/head.php";
?>

<?php
require "./partials/menuBar.php";
?>

<main class="container">

  <h1>LOGIN EMPRESA WORKS</h1>

  <div class="card mx-auto" style="max-width: 48rem;">

    <div class="row m-5">

      <div class="col-5 align-self-center p-5">
        <img src="/assets/images/logo" alt="IMAGEN" class="d-block mx-auto">
        <h2 class="text-center text-muted">SIVE</h2>
      </div>

      <div class="col-7 borde-izq">
        <form id="loginForm" action="#" method="post" class="container p-4 m-3">
          <div class="form-group">
            <label for="rut">RUT:</label>
            <!-- pattern="/^([0-9])*$/" -->
            <input type="text" name="rut" id="rut" minlength="12" maxlength="12" placeholder="Ingrese su RUT"
              class="form-control">
            <small id="rutHelper" class="form-text text-muted">Solo se aceptan números.</small>
          </div>
          <div class="form-group">
            <label for="pass">Contraseña:</label>
            <input type="password" name="pass" id="pass" minlength="6" placeholder="Ingrese su contraseña"
              class="form-control" required>
          </div>
          <div class="form-group d-flex justify-content-center">
            <button type="submit" id="btnSubmitLogin" class="btn btn-primary w-50 mt-3">Ingresar</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</main>

<?php
require "./partials/footer.php";
?>