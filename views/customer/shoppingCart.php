<?php
require "./partials/head.php";
?>
<?php
require "./partials/menuBar.php";
?>

<main class="container">
  <h1>Carrito de compras</h1>

  <div class="container">

    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th scope="col">Articulo</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Cerveza IPA 500ml</th>
          <td>
            <input type="number" name="cantidad" id="cantidad" value="1">
          </td>
          <td>
            <button class="btn btn-danger">Eliminar</button>
          </td>
        </tr>
        <tr>
          <th scope="row">Yerba Baldo 1Kg</th>
          <td>
            <input type="number" name="cantidad" id="cantidad" value="1">
          </td>
          <td>
            <button class="btn btn-danger">Eliminar</button>
          </td>
        </tr>
      </tbody>
    </table>

  </div>
</main>

<?php
require "./partials/footer.php";
?>