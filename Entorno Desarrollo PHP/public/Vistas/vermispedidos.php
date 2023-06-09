<?php
#print_r($data);

echo "<table class='table'>
<tr>
    <th>Identificador de tu Pedido</th>
    <th>Fecha</th>
    <th></th>
</tr>";
foreach ($data as $pedido) {
    echo "<tr>
        <td style='color: black;'>" . $pedido['ID_Pedido'] . "</td>
        <td style='color: black;'>" . $pedido['fecha'] . "</td>
        <td style='color: black;'><a href='index.php?controller=OrderController&action=GetproductsByPedido&pedido_id=" . $pedido['ID_Pedido'] . "'>Detalles</td>

    
    
    </tr>";
    }
echo "</table>";
    
?>