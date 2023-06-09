<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web de Productos Informáticos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .navbar-brand {
            font-size: 2rem;
            font-weight: bold;
        }
        .nav-link {
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
<!--
  Página de cabecera estática. Contiene el menú de la aplicación con enlaces que apuntan a la página
  index con el controlador y acción apropiado.
-->
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="index.php" class="navbar-brand me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        Web de Productos Informáticos
      </a>
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php?controller=ProductController&action=aniadirProduct" class="nav-link active" aria-current="page">Añadir Producto</a></li>
        <li class="nav-item"><a href="index.php?controller=ProductController&action=getAllProducts" class="nav-link">Listar Productos</a></li>
       <!-- <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About</a></li>-->
      </ul>
    </header>
  </div>
