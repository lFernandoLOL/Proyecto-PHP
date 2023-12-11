<?php

// #print_r($data);

if (isset($data)) {
    echo "<h1 class='text-center mt-4 mb-4'>Resumen del Pedido</h1>";
    echo "<table class='table table-bordered table-striped'>
            <tr>
                <th>Productos</th>
                <th>Cantidad</th>
                <th>Precio</th>
            </tr>";

    $flag = 0;

    foreach ($data as $producto) {
        if ($flag == 1) {
            echo "<p class='text-center mt-4'><b>Número de pedido:</b> " . $producto['ID_Pedido'] . "</p>";
            echo "<p class='text-center mb-4'><b>Usuario:</b> " . $producto['Correo'] . "</p>";
        }
        echo "<tr>
                <td>" . $producto['Nombre_Prod'] . "</td>
                <td>" . $producto['Cantidad'] . "</td>
                <td>" . $producto['Precio'] . "</td>
            </tr>";

        if ($flag == 0) {
            $flag = 1; 
        }
    }

    echo "</table>";
    echo "<div class='mb-5'></div>";


} else {
    echo "<br><br><br>";
    echo "<div class='alert alert-danger' style='width: 50%; margin:auto; margin-bottom: 20px;'><p style='text-align: center; margin-bottom:26px; margin-top:25px;'>No existen pedidos registrados</p></div>";
    echo "<br><br><br>";
}

?>
