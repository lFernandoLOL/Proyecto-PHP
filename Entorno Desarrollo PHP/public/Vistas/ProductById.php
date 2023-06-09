<?php
#include_once('header.php');
#include_once('controllers/ProductController.php');
?>

<html>
    <head>
        <style>
            .tabla {
                border-collapse: collapse;
                margin-bottom: 30px;
                margin-top: 30px;
            }

            .tabla th, .tabla td {
                border: 1px solid black;
                padding: 8px;
            }

            .tabla th {
                background-color: lightgrey;
                color: black;
            }

            .tabla img {
                max-width: 100px;
                max-height: 100px;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <h1 style='color:black; margin-top: 20px;'>Más información del producto seleccionado</h1>

            <div class='table-container'>
                <table class='tabla'>
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Imagen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $data['Nombre_Prod']; ?></td>
                            <td><?php echo $data['Descripcion']; ?></td>
                            <td><?php echo $data['Precio']; ?></td>
                            <td><img src="Vistas/img/<?php echo $data['Nombre_Prod']; ?>.png" alt="Imagen del producto"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>

<?php
#include_once('footer.php');
?>
