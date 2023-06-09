-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.10.2-MariaDB-1:10.10.2+maria~ubu2204 - mariadb.org binary distribution
-- SO del servidor:              debian-linux-gnu
-- HeidiSQL Versión:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando datos para la tabla database.Pedidos: ~2 rows (aproximadamente)
REPLACE INTO `Pedidos` (`ID_Pedido`, `fecha`, `ID_Usuario`) VALUES
	(1, '2023-05-15', 1),
	(15, '2023-06-06', 2),
	(16, '2023-06-06', 2);

-- Volcando datos para la tabla database.Productos: ~10 rows (aproximadamente)
REPLACE INTO `Productos` (`ID_Producto`, `Nombre_Prod`, `Descripcion`, `Precio`) VALUES
	(1, 'CaparazonVerde', 'Linea recta al pulsar L1', 100),
	(2, 'CaparazonRojo', 'Sigue a el enemigo de enfrente', 200),
	(3, 'CaparazonAzul', 'Se dirije directo al primer puesto y estalla', 500),
	(4, 'Platano', 'Cuando se impacta contra él, el conductor se desliza aturdido', 50),
	(5, 'BillLaBala', 'Si vas muy atrasado, te ayuda a alcanzar al pelotón', 1000),
	(6, 'Rayo', 'Enchiquece a todos los usuarios que van por delante tuya', 3000),
	(7, 'TripleCaparazonVerde', 'Tres caparazones verdes rodean al usuario que usa el objeto. Cuando el usuario vaya pulsando L1, los caparazones se lanzarán de uno en uno.', 300),
	(8, 'TripleCaparazonRojo', 'Tres caparazones rojos rodean al usuario que usa el objeto. Cuando el usuario vaya pulsando L1, los caparazones se lanzarán de uno en uno.', 600),
	(14, 'TriplePlatano', 'Tres plátanos rodean al usuario que usa el objeto. Cuando el usuario vaya pulsando L1, los caparazones se lanzarán de uno en uno.', 150);

-- Volcando datos para la tabla database.Prod_Pedidos: ~3 rows (aproximadamente)
REPLACE INTO `Prod_Pedidos` (`Cantidad`, `ID_Pedido`, `ID_Producto`) VALUES
	(1, 15, 2),
	(1, 16, 2),
	(1, 16, 8);

-- Volcando datos para la tabla database.Usuarios: ~1 rows (aproximadamente)
REPLACE INTO `Usuarios` (`ID_Usuario`, `Nombre`, `Apellido`, `Correo`, `Contraseña`) VALUES
	(1, 'Admin', 'Admin', 'admin@admin.com', 'admin'),
	(2, 'Prueba', 'Prueba1', 'Prueba@gmail.com', '12345'),
	(3, 'Pedro', 'Mitidiri', 'pedro@gmail.com', 'pedro1234'),
	(4, 'ana', 'pelae', 'anapelae@gmail.com', '12345');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
