-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2022 a las 07:12:51
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idprod` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `categoria` varchar(60) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `existencia` int(11) NOT NULL,
  `imagen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idprod`, `nombre`, `categoria`, `descripcion`, `precio`, `existencia`, `imagen`) VALUES
(14785, 'Gorra', 'Accesorios', 'ROSA|MED', '145.00', 10, 'gorra.jpeg'),
(36985, 'Bolsa', 'Accesorios', '', '258.50', 7, 'bolsa.jpeg'),
(22458, 'Anillos', 'Accesorios', 'PACK | ORO ', '159.00', 12, 'anillos.webp'),
(32165, 'Aretes', 'Accesorios', 'PACK | ORO ', '198.00', 15, 'arete.jpeg'),
(45698, 'Aretes', 'Accesorios', 'PACK | ORO | PLATA ', '350.00', 24, 'aretes2.webp'),
(75362, 'Arracadas', 'Accesorios', '2PZ | DORADO', '99.00', 6, 'arracadas.webp'),
(11111, 'Cinturon', 'Accesorios', '80cm |DIFERENTES COLORES', '200.00', 10, 'cinturon.webp'),
(45216, 'Pulsera', 'Accesorios', '1PZ | DORADA ', '169.00', 15, 'pulsera.webp'),
(45454, 'Abrigo', 'Hombre', 'GRIS | S-XL', '456.00', 10, 'habrigo.webp'),
(45458, 'Chamarra', 'Hombre', 'ROJO | S-XL ', '614.00', 10, 'hchamarra.webp'),
(46895, 'Pantalon', 'Mujer', 'NEGRO | S-XL', '362.00', 10, 'mpantalon2.webp');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
