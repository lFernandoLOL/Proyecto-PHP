<?php
#include_once('header.php');
#include_once('controllers/ProductController.php');
?>

<html>
<head>
    <style>
        .tabla {
            border-collapse: collapse;
            margin: 30px auto;
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

        .back-button, .boton-agregar {
            background-color: #808080; 
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            display: inline-block;
            border-radius: 5px;
            margin-bottom: 30px;
        }

        .back-button {
            margin-top: 20px;
        }

        .boton-agregar{
            margin-top: 20px;
            margin-left: 10px; 
            border: none;
            background-color: #4CAF50;
        }
        .form{
            float: right;
        }
        .tabla td.nombre {
            width: 150px;
        }
        
        .cantidad-input{
            margin-top: 28px;
            margin-left: 10px; 
            float: right;
            width:45px;
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
                        <td><?= $data['Nombre_Prod'] ?></td>
                        <td><?= $data['Descripcion'] ?></td>
                        <td><?= $data['Precio'] . " &#128184;" ?></td>
                        <td><img src="Vistas/img/<?= $data['Nombre_Prod'] ?>.png" alt="Imagen del producto"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Botón de flecha hacia atrás -->
        <a class="back-button" href="index.php?controller=ProductController&action=getAllProducts">&#8592; Volver a todos los productos</a>

        <!-- Formulario para agregar al carrito -->
        <form class="form" action="index.php?controller=ProductController&action=aniadirCarrito&id=<?= $data['ID_Producto'] ?>" method="post">
            <input type="number" name="cantidad" id="cantidad" value="1" min="1" max="10" class="cantidad-input">
            <input type="submit" value="Agregar al carrito" class="boton-agregar">
        </form>
    </div>
</body>
</html>

<?php
#include_once('footer.php');
?>
