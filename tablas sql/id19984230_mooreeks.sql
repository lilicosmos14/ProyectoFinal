-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 12-12-2022 a las 06:11:17
-- Versión del servidor: 10.5.16-MariaDB
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id19984230_mooreeks`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito_usuarios`
--

CREATE TABLE `carrito_usuarios` (
  `id_sesion` varchar(255) NOT NULL,
  `id_producto` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrito_usuarios`
--

INSERT INTO `carrito_usuarios` (`id_sesion`, `id_producto`) VALUES
('unghbri8ruiq61v6v3snsle4pm', 46895),
('unghbri8ruiq61v6v3snsle4pm', 14785),
('avige8veu3uphb77kvmes3c7ab', 36985),
('avige8veu3uphb77kvmes3c7ab', 45458),
('semapgbt1phas925ddcpkf8t4b', 36985),
('', 14785),
('', 14785),
('4qv6s647ncjbidh9irfr7c0iev', 14785),
('4qv6s647ncjbidh9irfr7c0iev', 36985),
('19vjnp15n3rf3om82nacabgrl6', 45458),
('19vjnp15n3rf3om82nacabgrl6', 45216),
('clm9ujd9hdhsl2p0dk58jf1o30', 32165),
('njq9e6hlvvc8gpsc4j6cih14hl', 75362),
('r63898buep4md8qcufoamof8hi', 45454),
('clm9ujd9hdhsl2p0dk58jf1o30', 45454),
('hfp8093m3btqgcvirqkrjp4foe', 45458),
('r63898buep4md8qcufoamof8hi', 45458),
('clm9ujd9hdhsl2p0dk58jf1o30', 45216),
('r63898buep4md8qcufoamof8hi', 45216),
('clm9ujd9hdhsl2p0dk58jf1o30', 12346),
('hfp8093m3btqgcvirqkrjp4foe', 45216),
('hfp8093m3btqgcvirqkrjp4foe', 45897),
('r63898buep4md8qcufoamof8hi', 45898),
('clm9ujd9hdhsl2p0dk58jf1o30', 45898),
('hfp8093m3btqgcvirqkrjp4foe', 45789);

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
(45216, 'Pulsera', 'Accesorios', '1PZ | DORADA ', 169.00, 15, 'pulsera.webp'),
(45454, 'Abrigo', 'Hombre', 'GRIS | S-XL', 456.00, 10, 'habrigo.webp'),
(45458, 'Chamarra', 'Hombre', 'ROJO | S-XL ', 614.00, 10, 'hchamarra.webp'),
(46895, 'Pantalon', 'Mujer', 'NEGRO | S-XL', 362.00, 10, 'mpantalon2.webp'),
(12345, 'Bolsa', 'Accesorio', 'Blanco | Grande', 450.00, 10, 'bolsablanca.jpg'),
(12346, 'Bolsa', 'Accesorio', 'Negro | Grande', 450.00, 11, 'bolsanegra.jpg'),
(23456, 'Bufanda', 'Mujer', 'Rosa | 60cm', 148.00, 12, 'bufandarosa.jpg'),
(45897, 'Gorro', 'Accesorio', 'Blanco | Tejido', 200.00, 8, 'bun (2).jpg'),
(45898, 'Falda Cambio', 'Mujer', 'Blanco | Bordado', 250.00, 10, 'mfalda.webp'),
(23654, 'Guantes', 'Accesorios', 'Par | Negro | Gris', 99.00, 14, 'guante.jpg'),
(45789, 'Pulsera', 'Accesorio', 'Negro', 56.00, 25, 'hpulsera.jpg'),
(23547, 'Leggins', 'Mujer', 'Negro | xs-xl', 389.00, 10, 'leggingsPunto.jpg'),
(12347, 'Lentes', 'Accesorio', '', 158.00, 10, 'lentes.jpg'),
(123458, 'Pantalon', 'Hombre', 'Cafe | Cargo', 358.00, 10, 'hpantalon.webp'),
(98453, 'Chamarra', 'Mujer', 'AZUL | XS-XL', 654.00, 12, 'mhamarraazul.jpg'),
(45672, 'Vestido', 'Mujer', '', 432.00, 10, 'vestido.jpg'),
(45621, 'Top', 'Mujer', '', 324.00, 12, 'top.jpg'),
(23456, 'Playera', 'Hombre', 'playera color negro', 123.00, 3, 'playera1.jpg'),
(123, 'Vestido', 'Mujer', 'vestido para mujer xd', 123.00, 1, 'vestido2.jpg'),
(123, 'Vestido', 'Mujer', 'vestido para mujer xd', 123.00, 1, 'vestido2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(10) NOT NULL,
  `Nombre` text NOT NULL,
  `Cuenta` text NOT NULL,
  `Correo` text NOT NULL,
  `Contraseña` varchar(255) NOT NULL,
  `Bloqueo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Nombre`, `Cuenta`, `Correo`, `Contraseña`, `Bloqueo`) VALUES
(0, 'AlexanderV', '', '', '', 0),
(321746, 'Alejandro Durán Plascencia', 'AlexanderV', 'eldesturtor@gmail.com', '$2y$10$yWoj28YrTosWHXjQKuy44O9WK/r2odV2K6fcLM64KtCU1o2TTxgxq', 1),
(158376, 'Andres Noriega', 'andres', 'andres_noriega6@outlook.es', '$2y$10$e8CExQP4H27KK3Rh0aVhkewPUMcly8.02yK296yeUr9JvgxEU2sUG', 1),
(862212, '', '', '', '$2y$10$XM6vwpRyi1oCbT4Z/CGaHesMP.liBzEulSrGPv35NKUr1OmZLscjK', 1),
(578547, 'Andres Noriega', 'afuhsl', 'andres_noriega6@outlook.es', '$2y$10$BihZHO1d/xrakyLsUEXe3.5b/6ukGPtMW.OzMddwT2z0o5kww1zpy', 1),
(526833, 'test', 'test', 'test@test.com', '$2y$10$kLzRdoFAroxqL9iRTZJ5yuwZqDW0BYVhkmDLxb4GQ6JDrE90REnsm', 1),
(493353, 'Administrador', 'Administrador', 'reeksmoo@gmail.com', '$2y$10$Voctpp5MtaX7tkzwGSDr4.BRm/Vlf0lq7doW8.SX0aCB6vP1f3R4S', 1),
(347821, 'Andres Noriega V', 'andres123', 'andres_noriega6@outlook.es', '$2y$10$lRAUexVXqPFFIu57ZMcHKu8HP1EJjoGJhL2H7rQAg6WtTcjWUWpOW', 1),
(387673, 'Kenya Garcia', 'Kenyaa', 'kenyasalazar26@gmail.com', '$2y$10$s2trNOb6rauOq3/rYlsbRuWN8Y.KotIPkqKEUdBzEl5/.w2vQSfru', 1),
(727120, 'Jesus Eduardo', 'lalo2910', 'eduardo13tapia@gmail.com', '$2y$10$jshpqFxoIH6QcLXEDQyekOViMtEOosryr4.t5vcMcEcLur/eJo.5i', 1),
(618310, 'Cecilia Liliana Pedroza Casillas', 'liliana', 'pedroza.cecilia1cm@gmail.com', '$2y$10$JMX3R7XC4BWICmJII1WNauYqULTA9yRZwaCdUyDLJYeiUOmhTB4XW', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
