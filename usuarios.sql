-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 10-12-2022 a las 19:41:16
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
-- Base de datos: `id19992557_usuarios`
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
(0, 'AlexanderV', '', '', '$2y$10$nhRyPdWsaqWJdaLBB5r7.uQ4YGk6BpvoThML.Q1nHB9mUPJcmMnT2', 0),
(321746, 'Alejandro Durán Plascencia', 'AlexanderV', 'eldesturtor@gmail.com', '$2y$10$R05ny/eeiKnooRJzM14ICORe.RNCCcr6rmef6Kv1lFJu4wjzDuEeW', 1),
(573459, 'Ariadna Judith Rosas Aguilar', 'ari', 'rariadnajudith@gmail.com', '$2y$10$WoQS9j1h2s6stg2NQal9muAyzG.a8MaibAYnI30xKz5MbAiOJlPma', 1),
(92958, 'andres', 'afuhsl', 'andresfuhsl@gmail.com', '$2y$10$CyPVST3KhvP73/kCDKZlveAYe/Bcn1SsGyT1Lruu68ziXdIpPYXRK', 1),
(767052, 'Alejandro Duran Plascencia', 'ALEX', 'eldesturtor@hotmail.com', '$2y$10$fPjUiUQCOaIc9UDrOP0yFuJMX4.0S6s/SL5TjZ7/ujYYXyO9Lvc6C', 1),
(198267, 'Ejemplo de cuenta', 'ejem', 'ejemplo@gmail.com', '$2y$10$Q5xUMzQ9tCyEpVOfufao.O8brVhNo7Ppf4uqeOfQzdE1SdbX5cAd6', 1),
(804521, 'Alejandro Durán Plascencia', 'VI', 'eldesturtor@gmail.com', '$2y$10$R05ny/eeiKnooRJzM14ICORe.RNCCcr6rmef6Kv1lFJu4wjzDuEeW', 1),
(38442, 'Administrador', 'Administrador', 'andresfuhsl@gmail.com', '$2y$10$tXuMGPs5tUnqmlvmwvBg2O4pqzEARwm6/eylTUd9KTmB0VgtCdiAq', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
