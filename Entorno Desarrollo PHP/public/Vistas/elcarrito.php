<div class="container">
    <h2 style="text-align: center; margin-top:30px;">Resumen del carrito</h2><br><br>

    <?php
    if (!empty($_SESSION['carrito'])) {
        // Agrupar productos por ID
        $productos_agrupados = [];
        foreach ($data as $producto) {
            $id_producto = $producto['ID_Producto'];
            if (isset($productos_agrupados[$id_producto])) {
                // si está en el carrito incrementa la cantidad
                $productos_agrupados[$id_producto]['Cantidad']++;
            } else {
                // agrega el producto al carrito
                $producto['Cantidad'] = 1;
                $productos_agrupados[$id_producto] = $producto;
            }
        }

        echo "<table class='table'>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th></th>
                </tr>";

        foreach ($productos_agrupados as $producto) {
            echo "<tr>
                    <td style='color: black;'>" . $producto['Nombre_Prod'] . "</td>
                    <td style='color: black;'>" . $producto['Descripcion'] . "</td>
                    <td style='color: black;'>" . $producto['Precio'] . "</td>
                    <td style='color: black;'>" . $producto['Cantidad'] . "</td>
                    <td style='color: black;'>
                        <a href='index.php?controller=ProductController&action=eliminarDelCarrito&id=" . $producto['ID_Producto'] . "' class='btn btn-danger'>Eliminar</a>
                    </td>
                </tr>";
        }
        echo "</table>";
        echo "<div style='text-align: right;'>
        <a href='index.php?controller=OrderController&action=hacerPedido' class='btn btn-success' style='background: linear-gradient(#7ae8a6, #50c878); margin-bottom: 30px; margin-top: 20px;'>Efectuar pedido</a>
      </div>";
    } else {
        echo "<div class='alert alert-danger' style='width: 50%; margin:auto; margin-bottom: 20px;'><p style='text-align: center; margin-bottom:26px; margin-top:25px;'>El carrito está vacío</p></div>";
        echo "<br><br><br><br>";
    }
    ?>
</div>
