<!-- BARRA NAVEGACION -->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top container-fluid d-flex">

  <!-- LOGO E LINK AL HOMEPAGE -->
  <a class="navbar-brand" href="/">
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
          <a class="nav-link active" aria-current="page" href="/">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/views/customer/signinCustomer.php">Registrarse</a>
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