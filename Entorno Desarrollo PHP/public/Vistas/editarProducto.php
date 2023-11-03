<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edición de Producto</title>
    <style>
        .form-container {
    margin: 0 auto;
    width: 50%;
    background-color: #f2f2f2;
    padding: 20px;
    border-radius: 5px;
    margin-top: 30px;
    }
    </style>

</head>
<link rel="stylesheet" href="Vistas\estilos.css">


<body>
    <div class="form-container">
        <h2>Edición de Producto</h2>
        <form class="form" action="index.php?controller=ProductController&action=editarProducto" method="post">
            <input type="hidden" name="id" value="<?php echo $data['ID_Producto']; ?>">
            <br>
            <label for="nombre_prod">Nombre del Producto:</label>
            <br>
            <input type="text" id="nombre_prod" name="nombre_prod" value="<?php echo $data['Nombre_Prod']; ?>" required>
            <br><br>
            <label for="descripcion">Descripción:</label>
            <br>
            <textarea id="descripcion" name="descripcion" required><?php echo $data['Descripcion']; ?></textarea>
            <br><br>
            <label for="precio">Precio:</label>
            <br>
            <input type="number" id="precio" name="precio" value="<?php echo $data['Precio']; ?>" required>
            <br><br>
            <label for="categoria">Categoría:</label>
            <br>
                <select id="categoria" name="categoria">
                    <option value="1" >Consola</option>
                    <option value="2" >Objeto</option>
                    <option value="3" >Peluche</option>
                    <option value="4" >Otro</option>
                </select>
            <br><br>
            <button type="submit">Guardar cambios</button>
            <br>
        </form>
    </div>
</body>
<br><br>
</html>
