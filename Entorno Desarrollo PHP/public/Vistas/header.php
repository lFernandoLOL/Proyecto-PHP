<?php if (session_status() == PHP_SESSION_NONE) {
    # La sesión NO está iniciada
	session_start();
} ?>
<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<html>
<head>
	<title>Mi sitio web</title>
	<!--<link rel="stylesheet" href="Vistas/header.css">
	<link rel="stylesheet" href="header.css"> -->
	<style>
		.header-container {
			display: flex;
			align-items: center;
			justify-content: space-between;
			background-color: #690000;
			color: #fff;
			padding: 1rem;
		}

		.logo img {
			height: 40px;
		}

		nav ul {
			list-style: none;
			margin: 0;
			padding: 0;
			display: flex;
		}

		nav a {
			color: #fff;
			text-decoration: none;
		}

		nav a:hover {
			text-decoration: underline;
		}

		nav li {
			margin-right: 1rem;
		}

		.login,
		.cart {
			display: flex;
			align-items: center;
		}

		.login a {
			color: #fff;
			text-decoration: none;
			background-color: blue;
			padding: 0.5rem 1rem;
			border-radius: 5px;
			transition: background-color 0.3s;
			margin-right: 1rem;
			margin-left: 1rem;
		}

		.login a:hover {
			background-color: darkblue;
		}

		.cart a {
			color: #fff;
			text-decoration: none;
			background-color: #333;
			padding: 0.5rem;
			border-radius: 5px;
		}

		.cart a:hover {
			background-color: #444;
		}

		.header-right {
			display: flex;
			align-items: center;
		}
	</style>
</head>
<body>
<header>
	<div class="header-container">
		<div class="logo">
			<a href="index.php"><img src="Vistas/img/logo_header.png " alt="Logo de mi sitio web" height="40px" width="40px"></a>
		</div>
		<nav>
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="index.php?controller=ProductController&action=MostrarAcercade">Acerca de</a></li>
				<li><a href="index.php?controller=ProductController&action=getAllProducts">Productos</a></li>
				<li><a href="index.php?controller=ProductController&action=MostrarContacto">Contacto</a></li>
				<!-- <li><?php echo $_SESSION['username'] ?></li> -->
			</ul>
		</nav>
		<div class="header-right">
			<div class="cart">
			<?php
			if (empty($_SESSION['username'])) {
				echo "<a href='index.php?controller=ProductController&action=verCarrito'><i class='fas fa-shopping-cart'></i> Carrito</a>";
			} else {
				if ($_SESSION['username'] != 'admin@admin.com') {
					echo "<a href='index.php?controller=ProductController&action=verCarrito'><i class='fas fa-shopping-cart'></i> Carrito</a>";
				}
			}
			?>

			</div>
			<?php
			if(empty($_SESSION['username'])){
			echo "<div class='login'>";
			echo	"<a href='index.php?controller=UserController&action=iniciarsesion'>Iniciar sesión</a>";
			#echo	"<a href='Vistas\index_L.php'>Iniciar sesión</a>";
			echo "</div>";
			
			echo "<div class='login'>";
			#echo "<a href='index.php?controller=ProductController&action=guardarProducto'>Añadir Producto</a>";

			echo "</div>";
			}else{
				echo "<div class='login'>";
				echo	"<a href='index.php?controller=UserController&action=cerrarsesion'>Cerrar sesión</a>";
				echo "</div>";
				

				echo "<div class='login'>";
				if($_SESSION['username'] == 'admin@admin.com'){
				echo "<a href='index.php?controller=ProductController&action=guardarProducto'>Añadir Producto</a>";
				echo	"<a href='index.php?controller=OrderController&action=MostrarPedido'>Pedidos</a>";
				}else{
				echo	"<a href='index.php?controller=OrderController&action=MostrarPedidoID'>Mis Pedidos</a>";
				}
				echo "</div>";
			}
			?>
		</div>
	</div>
</header>
</body>
</html>
