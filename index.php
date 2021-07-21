<?php
require "./views/partials/head.php";
?>

<?php
require "./views/partials/menuBar.php";
?>

<!-- BUSCADOR -->
<section id="buscador" class="container mt-3 mb-3">
  <form class="d-flex mx-auto" style="max-width: 38rem;">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Buscar</button>
  </form>
</section>

<!-- CAMINO PARA NAVEGAR MAS FACILMENTE -->
<nav class="container p-3" style="--bs-breadcrumb-divider: ' |';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Inicio</li>
    <!-- <li class="breadcrumb-item"><a href="#">Library</a></li> -->
    <!-- <li class="breadcrumb-item">Data</li> -->
  </ol>
</nav>

<!-- SECCION DE CARRUSEL DE OFERTAS -->
<section id="ofertas" class="container">
  <h2>OFERTAS</h2>
  <!-- CAROUSEL -->
  <div id="carouselOfertas" class="carousel slide" data-bs-ride="carousel">
    <!-- INDICADORES DEL CAROUSEL -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselOfertas" data-bs-slide-to="0" class="active" aria-current="true"
        aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselOfertas" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselOfertas" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <!-- CONTENIDO DEL CAROUSEL -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://picsum.photos/id/32/200/70" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Primer Oferta</h5>
          <p>No la dejes pasar</p>
          <button class="btn btn-primary">Comprar</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://picsum.photos/id/13/200/70" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Segunda Oferta</h5>
          <p>No la dejes pasar</p>
          <button class="btn btn-primary">Comprar</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://picsum.photos/id/132/200/70" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Tercera Oferta</h5>
          <p>No la dejes pasar</p>
          <button class="btn btn-primary">Comprar</button>
        </div>
      </div>
    </div>
    <!-- BOTON PREVIO -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselOfertas" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <!-- BOTON PROXIMO -->
    <button class="carousel-control-next" type="button" data-bs-target="#carouselOfertas" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<!-- SECCION PRODUCTOS DESTACADOS -->
<section id="destacados" class="container mt-3">
  <h3 class="text-center">DESTACADOS</h3>

  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
    <div class="col">
      <!-- tarjeta del producto -->
      <div class="card border-2 border-warning mb-3 mx-auto" style="max-width: 20rem;">

        <!-- este input hidden es para pasarle a la carta el id del producto para hacer click en el titulo y que lleve al usuario a la pagina del producto -->
        <!-- <input type="hidden" name="id" value="id"> -->

        <div class="position-box">
          <img src="https://picsum.photos/200/200" alt=" Imagen del producto" class="card-img-top">
          <div class="card-img-overlay">
            <h4><span class="badge rounded-pill bg-success">NEW</span></h4>
            <div class="position-price">
              <h3 class="card-text"><span class="badge rounded-pill bg-primary">$ 15555</span></h3>
            </div>
            <div class="position-button">
              <button class="btn btn-danger"><i class="fas fa-cart-plus"></i></button>
            </div>
          </div>
        </div>
        <div class="card-body">
          <h4 class="card-title"><a href="#">Titulo del producto</a></h4>
          <p class="card-text">Breve descripcion del producto, lorem ipsum, lorem ipsum, lorem ipsum.</p>
        </div>
      </div>
    </div>

    <div class="col">
      <!-- tarjeta del producto -->
      <div class="card border-2 border-warning mb-3 mx-auto" style="max-width: 20rem;">
        <div class="position-box">
          <img src="https://picsum.photos/200/200" alt=" Imagen del producto" class="card-img-top">
          <div class="card-img-overlay">
            <!-- <h4><span class="badge rounded-pill bg-success">NEW</span></h4> -->
            <div class="position-price">
              <h3 class="card-text"><span class="badge rounded-pill bg-primary">$ 15555</span></h3>
            </div>
            <div class="position-button">
              <button class="btn btn-danger"><i class="fas fa-cart-plus"></i></button>
            </div>
          </div>
        </div>
        <div class="card-body">
          <h4 class="card-title">Titulo del producto</h4>
          <p class="card-text">Breve descripcion del producto, lorem ipsum, lorem ipsum, lorem ipsum.</p>
        </div>
      </div>
    </div>

    <div class="col">
      <!-- tarjeta del producto -->
      <div class="card border-2 border-warning mb-3 mx-auto" style="max-width: 20rem;">
        <div class="position-box">
          <img src="https://picsum.photos/200/200" alt=" Imagen del producto" class="card-img-top">
          <div class="card-img-overlay">
            <h4><span class="badge rounded-pill bg-success">NEW</span></h4>
            <div class="position-price">
              <h3 class="card-text"><span class="badge rounded-pill bg-primary">$ 15555</span></h3>
            </div>
            <div class="position-button">
              <button class="btn btn-danger"><i class="fas fa-cart-plus"></i></button>
            </div>
          </div>
        </div>
        <div class="card-body">
          <h4 class="card-title">Titulo del producto</h4>
          <p class="card-text">Breve descripcion del producto, lorem ipsum, lorem ipsum, lorem ipsum.</p>
        </div>
      </div>
    </div>
  </div>


  <div class="d-flex justify-content-end">
    <button class="btn btn-primary">Ver todos los produtos --></button>
  </div>
</section>

<!-- SECCION CATEGORIAS DE PRODUCTOS -->
<!-- <section id="categorias">
  <h3>Categorias</h3>
  <ul class="navbar-nav">
    <div class="row justify-content-around m-2">
      <div class="col-2">
        <li>
          <a href=""><img src="https://via.placeholder.com/45" alt="Cocina"></img>
          </a>
        </li>
      </div>
      <div class="col-2">
        <li>
          <a href=""><img src="https://via.placeholder.com/45" alt="Vestimenta"></img>
          </a>
        </li>
      </div>
      <div class="col-2">
        <li>
          <a href=""><img src="https://via.placeholder.com/45" alt="Baño"></img>
          </a>
        </li>
      </div>
      <div class="col-2">
        <li>
          <a href=""><img src="https://via.placeholder.com/45" alt="Living"></img>
          </a>
        </li>
      </div>
    </div>
    <div class="row justify-content-around m-2">
      <div class="col-2">
        <li>
          <a href=""><img src="https://via.placeholder.com/45" alt="Comedor"></img>
          </a>
        </li>
      </div>
      <div class="col-2">
        <li>
          <a href=""><img src="https://via.placeholder.com/45" alt="Dormitorio"></img>
          </a>
        </li>
      </div>
      <div class="col-2">
        <li>
          <a href=""><img src="https://via.placeholder.com/45" alt="Jardin"></img>
          </a>
        </li>
      </div>
      <div class="col-2">
        <li>
          <a href=""><img src="https://via.placeholder.com/45" alt="Otros"></img>
          </a>
        </li>
      </div>
    </div>
  </ul>
</section> -->

<!-- SECCION LISTADO DE PRODUCTOS -->
<!-- <section id="productos">
  <h2>Lista de productos</h2>
  <div class="catalogo-productos">
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col">
        <div class="card border-dark">
          <img src="https://via.placeholder.com/40" alt="Imagen del producto" class="card-img-top">
          <div class="card-body">
            <h4 class="card-title">Titulo</h4>
            <p class="card-text">Descripcion</p>
            <p class="card-text">$ Precio</p>
            <a href="#" class="btn btn-success">Agregar al Carrito</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card bg-dark text-white">
          <img src="https://via.placeholder.com/40" alt="Imagen del producto" class="card-img">
          <div class="card-img-overlay">
            <h4 class="card-title">Titulo</h4>
            <p class="card-text">Descripcion</p>
            <p class="card-text">$ Precio</p>
            <a href="#" class="btn btn-success">Agregar al Carrito</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<?php
require "./views/partials/footer.php";
?>