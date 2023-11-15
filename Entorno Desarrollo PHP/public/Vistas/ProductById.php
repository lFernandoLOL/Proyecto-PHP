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
                margin-left: auto;
                margin-right: auto;
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

            .back-button {
                margin-top: 20px;
                background-color: #808080; /* Cambiado a gris */
                color: white;
                padding: 10px 20px;
                font-size: 16px;
                text-decoration: none;
                display: inline-block;
                border-radius: 5px;
                margin-bottom: 30px;
            }

            /* Añadido para hacer el hueco del nombre un poco más ancho */
            .tabla td.nombre {
                width: 150px;
            }

            /* Añadido para alinear el botón "Agregar" a la derecha */
            .boton-agregar {
                float: right;
                background-color: #4CAF50; /* Verde */
                color: white;
                padding: 10px 20px;
                font-size: 16px;
                text-decoration: none;
                display: inline-block;
                border-radius: 5px;
                margin-top: 20px;
                margin-bottom: 30px;
                margin-left: 10px; /* Espaciado entre los botones */
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
                            <td><?php echo $data['Precio']; echo " &#128184;"?></td>
                            <td><img src="Vistas/img/<?php echo $data['Nombre_Prod']; ?>.png" alt="Imagen del producto"></td>
                        </tr>
                    </tbody>
                </table>
                <!--<br><br><br><br><br><br><br><br><br><br> -->
            </div>

            <!-- Botón de flecha hacia atrás -->
            <a class="back-button" href="index.php?controller=ProductController&action=getAllProducts">&#8592; Volver a todos los productos</a>

            <!-- Botón "Agregar" -->
            <a href="index.php?controller=ProductController&action=aniadirCarrito&id=<?php echo $data['ID_Producto']; ?>" class="boton-agregar">Agregar</a>
        </div>
        
    </body>
</html>

<?php
#include_once('footer.php');
?>
