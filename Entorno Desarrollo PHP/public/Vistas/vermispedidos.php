<?php
#print_r($data);


if(!empty($data)){
    echo "<table class='table'>
<tr>
    <th>Identificador de tu Pedido</th>
    <th>Fecha</th>
    <th></th>
    <th>Estado</th>
</tr>";
foreach ($data as $pedido) {
    echo "<tr>
        <td style='color: black;'>" . $pedido['ID_Pedido'] . "</td>
        <td style='color: black;'>" . $pedido['fecha'] . "</td>
        <td style='color: black;'><a href='index.php?controller=OrderController&action=GetproductsByPedido&pedido_id=" . $pedido['ID_Pedido'] . "'>Detalles</td>
        <td style='color: black;'>" . $pedido['Estado'] . "</td>

    
    
    </tr>";
    }
}else {
    echo "<br><br><br>";
    echo "<div class='alert alert-danger' style='width: 50%; margin:auto; margin-bottom: 20px;'><p style='text-align: center; margin-bottom:26px; margin-top:25px;'>No existen pedidos registrados</p></div>";
    echo "<br><br><br>";
}
echo "</table>";
    
?>