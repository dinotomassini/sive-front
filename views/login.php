<?php
require "./partials/head.php";
?>

<?php
require "./partials/menuBar.php";
?>

<main class="container mb-5">

  <h1>LOGIN WORKS</h1>

  <div class="card mx-auto" style="max-width: 26rem;">

    <!-- row rows-column-sm-1 m-5 -->
    <div class="row m-3">
      <div class="col">
        <img src="/assets/images/logo.png" alt="IMAGEN" width="80px" class="d-block mx-auto">
      </div>
    </div>

    <div class="row">
      <div class="col">
        <h2 class="text-center text-muted mt-2">SIVE</h2>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <form id="loginForm" action="#" method="post" class="m-3">
          <!-- esto de que entre como empresa que lo que pide es el rut en vez del mail, se puede hacer con js para que saque la parte del email y ponga el campo del rut -->
          <!--
              <a href="./loginEmpresa.php">
                <span class="badge bg-warning">Ingrese como empresa -></span>
              </a>
            -->
          <div class="form-group">
            <div class="form-floating m-3">
              <input type="email" name="mail" id="mail" placeholder="Ingrese su email" class="form-control" autofocus
                required>
              <label for="mail">Email</label>
              <!-- En este input de tipo email, es valido ingresar algo@algo , no es necesario agregar el .algo , esto habria que verlo con JS -->
            </div>
          </div>
          <div class="form-group">
            <div class="form-floating m-3">
              <input type="password" name="pass" id="pass" minlength="6" placeholder="Ingrese su contraseña"
                class="form-control" required>
              <label for="pass">Contraseña</label>
            </div>
          </div>
          <div class="form-group d-flex justify-content-center">
            <button type="submit" id="btnSubmitLogin" class="btn btn-primary w-50 mt-3">Ingresar</button>
          </div>
        </form>
      </div>
    </div>

  </div>
  </div>
</main>

<?php
require "./partials/footer.php";
?>