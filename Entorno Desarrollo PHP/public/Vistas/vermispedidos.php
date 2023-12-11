<?php

// #print_r($data);

if (!empty($data)) {
    echo "<h1 class='text-center mt-4 mb-4'>Mis Pedidos</h1>";
    echo "<table class='table table-striped table-bordered'>";
    echo "
        <tr>
            <th>Identificador del Pedido</th>
            <th>Fecha</th>
            <th></th>
            <th>Estado</th>
        </tr>
    ";

    foreach ($data as $pedido) {
        echo "
            <tr>
                <td class='text-dark'>" . $pedido['ID_Pedido'] . "</td>
                <td class='text-dark'>" . $pedido['fecha'] . "</td>
                <td class='text-dark'><a href='index.php?controller=OrderController&action=GetproductsByPedido&pedido_id=" . $pedido['ID_Pedido'] . "'>Productos</a></td>
                <td class='text-dark'>" . $pedido['Estado'] . "</td>
            </tr>";
    }

    echo "</table>";
    echo "<div class='mb-5'></div>";
} else {
    echo "<br><br><br>";
    echo "<div class='alert alert-danger' style='width: 50%; margin:auto; margin-bottom: 20px;'><p style='text-align: center; margin-bottom:26px; margin-top:25px;'>No existen pedidos registrados</p></div>";
    echo "<br><br><br>";
}

?>
