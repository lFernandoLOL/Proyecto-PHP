<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario de Producto</title>
    <style>
        .form-container {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 5px;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-container label {
            display: block;
            margin-bottom: 10px;
        }

        .form-container input[type="text"],
        .form-container input[type="number"],
        .form-container textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        .form-container button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
        }

        .form-container select {
            display: inline-block;
            width: calc(100% - 8px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Formulario de Producto</h2>
        <form enctype="multipart/form-data" action="index.php?controller=ProductController&action=guardarProducto" method="post">

            <label for="nombre_prod">Nombre del Producto:</label>
            <input type="text" id="nombre_prod" name="nombre_prod" required>

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" required></textarea>

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" required>

            <label for="categoria" style="display: inline-block; width: 70px;">Categoría:</label>
            <select name="categoria" id="categoria" style="display: inline-block;">
                <option value="2">Objeto</option>
                <option value="3">Peluche</option>
                <option value="1">Consola</option>
                <option value="4">Otro</option>
            </select>

            <label for="imagen">Imagen (solo PNG):</label><br>
            <input type="file" id="imagen" name="imagen" accept=".png"><br><br>

            <button type="submit">Guardar</button>
        </form>
    </div>
    <br>
</body>
</html>
