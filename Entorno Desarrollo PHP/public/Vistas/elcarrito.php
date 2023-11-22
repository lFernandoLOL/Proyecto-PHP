<div class="container">
    <h2 style="text-align: center; margin-top:30px;">Resumen del carrito</h2><br><br>

    <?php
    if (!empty($_SESSION['carrito'])) {
        echo "<table class='table'>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th></th>
                </tr>";

        foreach ($data as $producto) {
            echo "<tr>
                    <td style='color: black;'>" . $producto['Nombre_Prod'] . "</td>
                    <td style='color: black;'>" . $producto['Descripcion'] . "</td>
                    <td style='color: black;'>" . $producto['Precio'] . "</td>
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
