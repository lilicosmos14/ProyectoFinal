-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2022 a las 07:38:43
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
-- Base de datos: `produc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `idprod` int(11) DEFAULT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `categoria` varchar(40) DEFAULT NULL,
  `descripcion` varchar(400) DEFAULT NULL,
  `existencia` int(11) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`idprod`, `nombre`, `categoria`, `descripcion`, `existencia`, `precio`, `img`) VALUES
(45698, 'Aretes', 'Accesorio', 'Por par, color dorado', 5, 125, 'accesorio5.jpeg'),
(12365, 'Anillo', 'Accesorio', 'Por pieza, diferentes colores', 8, 95, 'accesorio8.jpeg'),
(48793, 'Gorra', 'Accesorio', 'Mediana, rosa, 4, 200, 'accesorio2.jpeg'),
(458712, 'Arracadas', 'Accesorio', 'doradas', 88, 125, 'accesorio7.jpeg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
