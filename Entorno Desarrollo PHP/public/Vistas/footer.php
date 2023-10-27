
<!DOCTYPE html>
<html>
<head>
	<title>Mi sitio web</title>


	<!--
	<style> 
	footer {
		background-color: #690000;
		color: #fff;
		padding: 50px 0;
	}

	.footer-container {
		display: flex;
		flex-wrap: wrap;
		max-width: 1200px;
		max-height: 200px;
		margin: 0 auto;
	}

	.footer-logo {
		flex: 1 1 300px;
		margin-right: 50px;
		margin-top: 50px;
	}

	.footer-logo img {
		max-width: 100%;
	}

	.footer-links,
	.footer-contact,
	.footer-social {
		flex: 1 1 200px;
		margin-bottom: 30px;
		margin-left: 50px;
	}

	.footer-links h3,
	.footer-contact h3,
	.footer-social h3 {
		margin-bottom: 15px;
	}

	.footer-links ul,
	.footer-social ul {
		padding: 0;
		list-style: none;
	}

	.footer-links li,
	.footer-social li {
		margin-bottom: 10px;
	}

	.footer-links a,
	.footer-social a {
		color: #fff;
		text-decoration: none;
	}

	.footer-contact p {
		margin-bottom: 10px;
	}

	.footer-contact i {
		margin-right: 10px;
	}

	.footer-social i {
		font-size: 24px;
		margin-right: 10px;
	}

	.footer-credits {
		text-align: center;
		margin-top: 50px;
		font-size: 14px;
	}

	.footer-credits a {
		color: #fff;
	}
-->

	</style>


    <link rel="stylesheet" href="Vistas/estilos.css">
	<link rel="stylesheet" href="footer.css">
</head>

<body>
<footer>
	<div class="footer-container">


		<div class="footer-logo">
			<img src="Vistas/img/logofoot.png" alt="Logo de mi sitio web" width="500" height="100">
		</div>


		<div class="footer-links">
			<h3>Enlaces útiles</h3>
			<ul>
				<li><a href="#">Inicio</a></li>
				<li><a href="index.php?controller=ProductController&action=MostrarAcercade">Acerca de</a></li>
				<li><a href="index.php?controller=ProductController&action=MostrarContacto">Contacto</a></li>
				<li><a href="index.php?controller=ProductController&action=MostrarAcercade">Política de privacidad</a></li>
				<!--<li><a href="#">Términos y condiciones</a></li>-->
			</ul>
		</div>


		<div class="footer-contact">
			<h3>Contacto</h3>
			<p><i class="fas fa-map-marker-alt"></i>Dirección:<br> Av. Felipe Corchero, 37, 06800 Mérida, Badajoz</p>
			<p><i class="fas fa-phone-alt"></i> Teléfono:<br> +123 456789</p>
			<p><i class="fas fa-envelope"></i> Correo electrónico: <br> mariokart@nintendo.com</p>
		</div>


		<div class="footer-social">
			<h3>Síguenos en redes sociales</h3>
			<ul>
				<li><a href="https://www.facebook.com/MarioKartESP/"><i class="fab fa-facebook-f"></i>Facebook</a></li>
				<li><a href="https://twitter.com/MKT_ESP"><i class="fab fa-twitter"></i>Twitter</a></li>
				<li><a href="https://www.instagram.com/mario.kart/?hl=es"><i class="fab fa-instagram"></i>Instagram</a></li>
				<li><a href="#"><i class="fab fa-youtube"></i>Youtube</a></li>
			</ul>
		</div>
	</div>
	<div class="footer-credits">
		<p>Derechos de autor &copy; 2023. Todos los derechos reservados.</p>
		<p>Diseñado por <a href="https://www.instagram.com/fernando.acc/?hl=es">Fernando</a></p>
	</div>
</footer>
</body>
