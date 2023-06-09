<?php
#print_r($data);
if (isset($data)) {
    echo "
    <h1>Resumen de tu pedido</h1>
    <table class='table'>
    <tr>
        <th>Producto</th>
        <th>Cantidad</th>
        <th>Precio</th>
    </tr>";

    foreach ($data as $producto) {
        echo "<tr>
            <td>" . $producto['Nombre_Prod'] . "</td>
            <td>" . $producto['Cantidad'] . "</td>
            <td>" . $producto['Precio'] . "</td>
        </tr>";
    }

    echo "</table>";
} else {
    echo "No se encontraron productos en el pedido.";
}
?>