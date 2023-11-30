<?php
#print_r($data);
if (isset($data)) {
    echo "
    <h1>Resumen del pedido</h1>
    <table class='table'>
    <tr>
        <th>Productos</th>
        <th>Cantidad</th>
        <th>Precio</th>
    </tr>";
    
    $flag = 0;

    foreach ($data as $producto) {
        echo "<tr>
            <td>" . $producto['Nombre_Prod'] . "</td>
            <td>" . $producto['Cantidad'] . "</td>
            <td>" . $producto['Precio'] . "</td>
        </tr>";

        if ($flag == 0) {
            echo "<b>Número de pedido: </b>" .$producto['ID_Pedido'] . "<br>";
            echo "<b>Usuario: </b>" .$producto['Correo'];
            $flag = 1; 
        }

    }

    echo "</table>";
} else {
    echo "No se encontraron productos en el pedido.";
}
?>
