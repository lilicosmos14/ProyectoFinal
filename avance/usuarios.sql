-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2022 a las 04:00:28
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
-- Base de datos: `usuarios`
--

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
(321746, 'Alejandro Durán Plascencia', 'AlexanderV', 'eldesturtor@gmail.com', '$2y$10$Vwpnjdqs7wj2ifIvvvLPBuv28jyLQgQq1A8nygisz3.uiRlXD8TRC', 1),
(111149, 'Ariadna Judith Rosas Aguilar', 'ari', 'ejemplo@gmail.com', '$2y$10$nQDQe/LaWc/DtS08.2NjmuKqsxBu5p5qDi4gVTvnMj6NT14.lKD8i', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
