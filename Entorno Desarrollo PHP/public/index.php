<?php
#session_start();
if (isset($_REQUEST['action']) && isset($_REQUEST['controller'])) {
    include("controllers/ProductController.php");
    include("controllers/UserController.php");
    include("controllers/OrderController.php");
    $act = $_REQUEST['action'];
    $cont = $_REQUEST['controller'];

    $controller = new $cont();
    $controller->$act();
} else {
    include_once("Vistas/header.php");
    #echo $_SESSION['ID_Usuario'];
    // Página de entrada - Tienda de Objetos de Mario Kart
    echo '
    <div class="container mt-3">
        <h1>Tienda de Nintendo</h1>
        <div class="d-flex justify-content-center">
        <img src="Vistas/img/imageninicio.png" height="300px" style="margin-right: 20px; margin-bottom:40px; margin-top:40px">
        <p style="margin-top:40px">¡Bienvenido a la tienda de productos de Nintendo! Aquí encontrarás una amplia variedad de productos relacionados con las populares franquicias de Nintendo, que incluyen desde adorables peluches hasta objetos usables en los juegos, consolas y muchos más artículos coleccionables. Prepárate para sumergirte en la diversión y emoción de los juegos de Nintendo, adquiriendo los mejores productos que tenemos para ofrecer. Nuestra tienda se enorgullece de presentar una colección exclusiva de artículos de alta calidad, diseñados para satisfacer los gustos de los fanáticos más exigentes. <br><br> Explora nuestra selección única de productos de tus franquicias favoritas de Nintendo y adquiérelos para disfrutar de momentos inolvidables con tus personajes favoritos en la comodidad de tu hogar o mientras estás en movimiento.</p>
        </div>
        <br>
    </div>
            
        </div>
        
    </div>
    ';

    #llamada a la pagina de pruebas:
    #echo "<a href='index.php?controller=ProductController&action=prueba'>Prueba</a>";
    require_once("Vistas/footer.php");
}


?>
