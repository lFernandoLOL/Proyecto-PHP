<?php
#print_r($data);
echo "<table class='table'>
<tr>
    <th>ID Pedido</th>
    <th>Fecha</th>
    <th>ID Usuario</th>
    <th></th>
</tr>";

foreach ($data as $pedido) {
echo "<tr>
    <td style='color: black;'>" . $pedido['ID_Pedido'] . "</td>
    <td style='color: black;'>" . $pedido['fecha'] . "</td>
    <td style='color: black;'>" . $pedido['ID_Usuario'] . "</td>
    <td style='color: black;'><a href='index.php?controller=OrderController&action=GetproductsByPedido&pedido_id=" . $pedido['ID_Pedido'] . "'>Detalles</td>

</tr>";
}
echo "</table>";
echo "<div style='text-align: right;'>";
?>