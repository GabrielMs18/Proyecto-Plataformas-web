-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 19-07-2022 a las 22:08:38
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `taller_juan`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mecanicos`
--

DROP TABLE IF EXISTS `mecanicos`;
CREATE TABLE IF NOT EXISTS `mecanicos` (
  `id_mecanico` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(10) NOT NULL,
  `apellido` varchar(10) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  PRIMARY KEY (`id_mecanico`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reparacion`
--

DROP TABLE IF EXISTS `reparacion`;
CREATE TABLE IF NOT EXISTS `reparacion` (
  `id_reparacion` int(10) NOT NULL,
  `vehiculo` varchar(10) NOT NULL,
  `marca` varchar(10) NOT NULL,
  `modelo` varchar(10) NOT NULL,
  `placa` varchar(10) NOT NULL,
  `fallas` varchar(50) NOT NULL,
  `tipo_de_comprobante` varchar(10) NOT NULL,
  `cliente` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestos`
--

DROP TABLE IF EXISTS `respuestos`;
CREATE TABLE IF NOT EXISTS `respuestos` (
  `id_respuestos` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(10) NOT NULL,
  `descripcion` varchar(25) NOT NULL,
  `stock` int(10) NOT NULL,
  `precio` int(10) NOT NULL,
  PRIMARY KEY (`id_respuestos`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
