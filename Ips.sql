-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 10-03-2020 a las 19:22:52
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Ips`
--
CREATE DATABASE IF NOT EXISTS `Ips` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Ips`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ipss`
--

DROP TABLE IF EXISTS `Ipss`;
CREATE TABLE `Ipss` (
  `Ipss` text NOT NULL,
  `Servicio` text NOT NULL,
  `Puerto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Ipss`
--

INSERT INTO `Ipss` (`Ipss`, `Servicio`, `Puerto`) VALUES
('80.80.80.80', 'HTML', 80);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Ipss`
--
ALTER TABLE `Ipss`
  ADD UNIQUE KEY `enserio` (`Ipss`(30));
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
