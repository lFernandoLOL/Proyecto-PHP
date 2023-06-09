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
        <h1>Tienda de Objetos de Mario Kart</h1>
        <div class="d-flex justify-content-center">
        <img src="Vistas/img/imageninicio.png" height="300px" style="margin-right: 20px; margin-bottom:40px; margin-top:40px">
            <p style="margin-top:40px">Bienvenido a la tienda de objetos de Mario Kart. Aquí encontrarás una amplia variedad de objetos y potenciadores para mejorar tu experiencia de juego en el mundo de Mario Kart. Prepárate para la emoción de las carreras y obtén los mejores objetos para alcanzar la victoria en Mario Kart. <br><br> Encuentra los clásicos objetos de Mario Kart y cómpralos a tu conveniencia, para su posterior uso en el videojuego.</p>
            
        </div>
        
    </div>
    ';
    require_once("Vistas/footer.php");
}


?>
