<html>
<table class="table">
    <tr><th>Nombre</th> <th>Descripcion</th> <th>Precio</th> <th>Procedencia</th> </tr>
    <?php
    foreach($data as $article){
        echo "<tr>
        <td>".$article['nombre']."</td>
        <td>".$article['descripcion']."</td>
        <td>".$article['precio']."</td>
        <td>".$article['procedencia']."</td>
        </tr>";
    }
    ?>
</table>
</html>