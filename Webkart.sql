-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.10.2-MariaDB-1:10.10.2+maria~ubu2204 - mariadb.org binary distribution
-- SO del servidor:              debian-linux-gnu
-- HeidiSQL Versión:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para database
CREATE DATABASE IF NOT EXISTS `database` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
USE `database`;

-- Volcando estructura para tabla database.Categoria
CREATE TABLE IF NOT EXISTS `Categoria` (
  `ID_Cat` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_Cat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla database.Categoria: ~4 rows (aproximadamente)
REPLACE INTO `Categoria` (`ID_Cat`, `Nombre`) VALUES
	(1, 'Consola'),
	(2, 'Objeto'),
	(3, 'Peluche'),
	(4, 'Otro');

-- Volcando estructura para tabla database.Pedidos
CREATE TABLE IF NOT EXISTS `Pedidos` (
  `ID_Pedido` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `ID_Usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Pedido`),
  KEY `id_usuario` (`ID_Usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla database.Pedidos: ~4 rows (aproximadamente)
REPLACE INTO `Pedidos` (`ID_Pedido`, `fecha`, `ID_Usuario`) VALUES
	(1, '2023-05-15', 1),
	(15, '2023-06-06', 2),
	(16, '2023-06-06', 2),
	(17, '2023-06-09', 2);

-- Volcando estructura para tabla database.Perfil
CREATE TABLE IF NOT EXISTS `Perfil` (
  `ID_Perfil` int(11) NOT NULL AUTO_INCREMENT,
  `Tipo_Perfil` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_Perfil`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla database.Perfil: ~2 rows (aproximadamente)
REPLACE INTO `Perfil` (`ID_Perfil`, `Tipo_Perfil`) VALUES
	(1, 'Admin'),
	(2, 'User');

-- Volcando estructura para tabla database.Productos
CREATE TABLE IF NOT EXISTS `Productos` (
  `ID_Producto` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Prod` varchar(50) NOT NULL DEFAULT '0',
  `Descripcion` varchar(5100) NOT NULL DEFAULT '0',
  `Precio` int(11) DEFAULT NULL,
  `ID_Cat` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Producto`),
  KEY `ID_Cat` (`ID_Cat`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla database.Productos: ~30 rows (aproximadamente)
REPLACE INTO `Productos` (`ID_Producto`, `Nombre_Prod`, `Descripcion`, `Precio`, `ID_Cat`) VALUES
	(1, 'CaparazonVerde', 'Linea recta al pulsar L1 porueba', 100, 2),
	(2, 'CaparazonRojo', 'Sigue a el enemigo de enfrente. Prueba4', 200, 2),
	(3, 'CaparazonAzul', 'Se dirije directo al primer puesto y estalla', 500, 2),
	(4, 'Platano', 'Cuando se impacta contra él, el conductor se desliza aturdido', 50, 2),
	(5, 'BillLaBala', 'Si vas muy atrasado, te ayuda a alcanzar al pelotón', 1000, 2),
	(6, 'Rayo', 'Enchiquece a todos los usuarios que van por delante tuya', 3000, 2),
	(7, 'TripleCaparazonVerde', 'Tres caparazones verdes rodean al usuario que usa el objeto. Cuando el usuario vaya pulsando L1, los caparazones se lanzarán de uno en uno.', 300, 2),
	(8, 'TripleCaparazonRojo', 'Tres caparazones rojos rodean al usuario que usa el objeto. Cuando el usuario vaya pulsando L1, los caparazones se lanzarán de uno en uno.', 600, 2),
	(14, 'TriplePlatano', 'Tres plátanos rodean al usuario que usa el objeto. Cuando el usuario vaya pulsando L1, los caparazones se lanzarán de uno en uno.', 150, 2),
	(23, 'NintendoSwitch', 'Nintendo Switch es una consola de videojuegos desarrollada por Nintendo. Conocida en el desarrollo por su nombre código «NX», se dio a conocer en octubre de 2016 y fue lanzada mundialmente el 3 de marzo de 2017.', 2500, 1),
	(26, 'Nintendo DS', 'Nintendo DS es una videoconsola portátil de la multinacional de origen japonés, Nintendo, creada para suceder a la Game Boy Advance. Permitía la reproducción de videojuegos y multimedia, pertenece a la séptima generación cuyo rival directo fue la PlayStation Portable.', 2000, 1),
	(28, 'Peluche Mario', 'Suave peluche del famoso personaje Mario Bros', 400, 3),
	(29, 'Peluche Luigi', 'Suave peluche de el hermano verde de los fontaneros conocidos como Mario Bros.', 400, 3),
	(30, 'Peluche Yoshi', 'Yoshi se encuentra entre los mejores amigos de Super Mario y también es uno de los personajes más populares del legendario videojuego.', 400, 3),
	(32, 'Peluche Link', 'Link es descrito generalmente como un joven Hyliano que reside en el Reino de Hyrule. Ya sea que seas un apasionado jugador de videojuegos o simplemente amante de los peluches, este suave juguete de Link será el compañero perfecto.', 400, 3),
	(33, 'Peluche Bokoblin', 'Este peluche es uno de los enemigos del videojuego Zelda, un Bokoblin. Una extraña criatura que el héroe Link debe eliminar.', 400, 3),
	(34, 'Peluche Kirby', 'Kirby es el personaje principal de la serie de videojuegos Kirby de Nintendo creada por Masahiro Sakurai y desarrollada por HAL Laboratory. La serie Kirby es una de las muchas franquicias de juegos conocidas de Nintendo, que abarca casi veinte juegos desde 1992.', 400, 3),
	(35, 'Peluche SocratesAC', 'Peluche del personaje que lleva el museo en el popular juego de Animal Crossing.', 400, 3),
	(36, 'Peluche TommyAC', 'Peluche del personaje que lleva la tienda del pueblo en Animal Crossing', 400, 3),
	(37, 'Peluche CanelaAC', 'Peluche de la popular recepcionista del videjuego Animal Crossing.', 400, 3),
	(39, 'Gamecube', 'Nintendo GameCube y abreviada como GCN en América y NGC en Japón, es la quinta consola descontinuada de sobremesa hecha por Nintendo. Fue la sucesora del Nintendo 64 y la predecesora del Wii.', 5000, 1),
	(40, 'Nintendo Wii', 'Nintendo Wii  es la sexta videoconsola descontinuada producida por Nintendo y estrenada el 19 de noviembre de 2006 en Norteamérica y el 8 de diciembre del mismo año en Europa. Perteneciente a la séptima generación de videoconsolas.', 3000, 1),
	(41, 'GameBoy AdvanceSP', 'La Game Boy Advance SP, frecuentemente abreviada como GBA SP, es una consola de videojuegos portátil fabricada por Nintendo y lanzada al mercado en marzo de 2003. Básicamente es un rediseño de la Game Boy Advance, con varias funciones añadidas como batería o pantalla iluminada. Es totalmente compatible con todas sus antecesoras.', 2500, 1),
	(42, 'GameBoy Color', 'La Game Boy es una videoconsola portátil de 8 bits de cuarta generación desarrollada y fabricada por Nintendo. Salió a la venta por primera vez en Japón el 21 de abril de 1989, en Norteamérica más tarde ese mismo año y en Europa a finales de 1990.', 2500, 1),
	(43, 'Nintendo Switch Oled', 'Te presentamos la última consola que se une a la familia Nintendo Switch\r\nLa nueva consola cuenta con una vibrante pantalla OLED de 7 pulgadas (17.78 cm), un soporte ajustable y amplio, una base con puerto LAN para conexión por cable, almacenamiento interno de 64 GB y audio mejorado.', 3500, 1),
	(45, 'Guia Coleccionista Tears Of The Kingdom', 'Compra la guía oficial coleccionista de The Legend of Zelda: Tears of the Kingdom que ofrece un vasto mundo repleto de misiones variadas, rompecabezas desafiantes, monstruos feroces y paisajes únicos.\r\nEsta guía explora todas las características y facetas de The Legend of Zelda: Tears of the Kingdom con una sola misión: ayudar a descubrir y disfrutar cada momento del juego.', 1000, 4),
	(46, 'Pack Figuras Pokémon', 'Increible set de regalo con 6 figuras iconicas de la region de Kanto. En este multipack podrás encontrar a los personajes con increibles acabados y listos para el combate. Recrea todas las aventuras.En este set incluye  Personajes:Pikachu, Squirtle, Charmander, Bulbasaur, Mimikyu y Toxel Revise siempre bien el etiquetado y compruebe que los juguetes cumplen las normas de seguridad CE.', 500, 4),
	(47, 'Pokemon Rojo Fuego', 'Pokémon Rojo Fuego y Pokémon Verde Hoja son las ediciones reeditadas de los videojuegos originales Pokémon Rojo y Pokémon Verde (Rojo y Azul fuera de Japón), con las novedades de los videojuegos para Game Boy Advance de Pokémon Rubí y Pokémon Zafiro. También llamados "Pokémon Edición Rojo Fuego" y "Pokémon Edición Verde Hoja", ambas ediciones fueron lanzadas a las tiendas europeas el 1 de octubre de 2004.', 6000, 4),
	(48, 'Mini Nes', 'Nintendo Classic Mini: Nintendo Entertainment System es una versión en miniatura de la rompedora NES lanzada en Europa originalmente en 1986.\r\n\r\nEnchufa la consola Nintendo Classic Mini: Nintendo Entertainment System a la televisión, coge el mando gris y redescubre la diversión de los juegos de NES, ¡con alta definición de 60 Hz!', 2000, 1),
	(49, 'Muñeco Waluigi', 'Figura de Colección de alta calidad', 300, 4);

-- Volcando estructura para tabla database.Prod_Pedidos
CREATE TABLE IF NOT EXISTS `Prod_Pedidos` (
  `Cantidad` int(11) DEFAULT NULL,
  `ID_Pedido` int(11) DEFAULT NULL,
  `ID_Producto` int(11) DEFAULT NULL,
  KEY `ID_Pedido` (`ID_Pedido`,`ID_Producto`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla database.Prod_Pedidos: ~4 rows (aproximadamente)
REPLACE INTO `Prod_Pedidos` (`Cantidad`, `ID_Pedido`, `ID_Producto`) VALUES
	(1, 15, 2),
	(1, 16, 2),
	(1, 16, 8),
	(1, 17, 1);

-- Volcando estructura para tabla database.Usuarios
CREATE TABLE IF NOT EXISTS `Usuarios` (
  `ID_Usuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Contraseña` varchar(50) DEFAULT NULL,
  `ID_Perfil` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Usuario`),
  KEY `ID_Perfil` (`ID_Perfil`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci COMMENT='Tabla de los users\r\n';

-- Volcando datos para la tabla database.Usuarios: ~5 rows (aproximadamente)
REPLACE INTO `Usuarios` (`ID_Usuario`, `Nombre`, `Apellido`, `Correo`, `Contraseña`, `ID_Perfil`) VALUES
	(1, 'Admin', 'Admin', 'admin@admin.com', 'admin', 1),
	(2, 'Prueba', 'Prueba1', 'Prueba@gmail.com', '12345', 2),
	(3, 'Pedro', 'Mitidiri', 'pedro@gmail.com', 'pedro1234', 2),
	(4, 'ana', 'pelae', 'anapelae@gmail.com', '12345', 2),
	(6, 'Fernando', 'Agudo', 'fernandoagudo99@gmail.com', 'ejemplo10', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
