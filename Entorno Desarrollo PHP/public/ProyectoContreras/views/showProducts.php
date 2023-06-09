<div class="container">
  <h1>Listado de productos</h1>

  <table class="table">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data as $product): ?>
        <tr>
          <td><?= $product['nombre'] ?></td>
          <td><?= $product['descripcion'] ?></td>
          <td>
            <a href="index.php?controller=ProductController&action=verProduct&id=<?= $product['id'] ?>" class="btn btn-primary">Ver más</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>
