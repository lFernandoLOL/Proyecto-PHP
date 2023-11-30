<?php
echo "<br><br>";
echo "<form action='index.php?controller=OrderController&action=guardarCambiosEstado' method='post'>";
echo "<table class='table'>
<tr>
    <th>ID Pedido</th>
    <th>Fecha</th>
    <th>ID Usuario</th>
    <th>Correo</th> 
    <th>Productos</th>
    <th>Estado Actual</th>
    <th>Nuevo Estado</th>
    <th></th>
</tr>";

foreach ($data as $pedido) {
    echo "<tr>
        <td style='color: black;'>" . $pedido['ID_Pedido'] . "</td>
        <td style='color: black;'>" . $pedido['fecha'] . "</td>
        <td style='color: black;'>" . $pedido['ID_Usuario'] . "</td>
        <td style='color: black;'>" . $pedido['Correo'] . "</td> 
        <td style='color: black;'><a href='index.php?controller=OrderController&action=GetproductsByPedido&pedido_id=" . $pedido['ID_Pedido'] . "'>Productos</a></td>
        <td style='color: black;'>" . $pedido['Estado'] . "</td>
        <td style='color: black;'>
            <select name='" . $pedido['ID_Pedido'] . "'>";

    if ($pedido['Estado'] == 'En proceso') {
        echo "<option value='En proceso' selected>En proceso</option>";
        echo "<option value='Enviado'>Enviado</option>";
        echo "<option value='Entregado'>Entregado</option>";
        echo "<option value='Cancelado'>Cancelado</option>";
        echo "<td><button type='submit' formaction='index.php?controller=OrderController&action=borrarPedido' class='btn btn-danger' name='borrarPedido' onclick='return ConfirmDelete()' value='" . $pedido['ID_Pedido'] . "'>Borrar</button></td>";
    } elseif ($pedido['Estado'] == 'Pedido Creado') {
        echo "<option value='Pedido Creado' selected>Pedido Creado</option>";
        echo "<option value='En proceso'>En proceso</option>";
        echo "<option value='Enviado'>Enviado</option>";
        echo "<option value='Entregado'>Entregado</option>";
        echo "<option value='Cancelado' >Cancelado</option>";
        echo "<td><button type='submit' formaction='index.php?controller=OrderController&action=borrarPedido' class='btn btn-danger' name='borrarPedido' onclick='return ConfirmDelete()' value='" . $pedido['ID_Pedido'] . "'>Borrar</button></td>";
    } elseif ($pedido['Estado'] == 'Enviado') {
        echo "<option value='En proceso'>En proceso</option>";
        echo "<option value='Enviado' selected>Enviado</option>";
        echo "<option value='Entregado'>Entregado</option>";
        echo "<option value='Cancelado'>Cancelado</option>";
        echo "<td><button type='submit' formaction='index.php?controller=OrderController&action=borrarPedido' class='btn btn-danger' name='borrarPedido' onclick='return ConfirmDelete()' value='" . $pedido['ID_Pedido'] . "'>Borrar</button></td>";
    } elseif ($pedido['Estado'] == 'Entregado') {
        echo "<option value='En proceso'>En proceso</option>";
        echo "<option value='Enviado'>Enviado</option>";
        echo "<option value='Entregado' selected>Entregado</option>";
        echo "<option value='Cancelado'>Cancelado</option>";
        echo "<td><button type='submit' formaction='index.php?controller=OrderController&action=borrarPedido' class='btn btn-danger' name='borrarPedido' onclick='return ConfirmDelete()' value='" . $pedido['ID_Pedido'] . "'>Borrar</button></td>";
    } elseif ($pedido['Estado'] == 'Cancelado') {
        echo "<option value='En proceso'>En proceso</option>";
        echo "<option value='Enviado'>Enviado</option>";
        echo "<option value='Entregado'>Entregado</option>";
        echo "<option value='Cancelado' selected>Cancelado</option>";
        echo "<td><button type='submit' formaction='index.php?controller=OrderController&action=borrarPedido' class='btn btn-danger' name='borrarPedido' onclick='return ConfirmDelete()' value='" . $pedido['ID_Pedido'] . "'>Borrar</button></td>";
    }

    echo "</select></td></tr>";
    
}

echo "</table>";
echo "<button type='submit'>Guardar cambios</button>";
echo "</form>";
echo "<br>";
echo "<div style='text-align: right;'>";
?>
<script type="text/javascript">
    function ConfirmDelete() {
        var respuesta = confirm("¿Estás seguro de que deseas borrar el pedido?");
        if (respuesta == true){
            return true;
        } else {
            return false;
        }
    }
</script>

