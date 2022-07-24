-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2022 a las 00:21:02
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
-- Base de datos: `taller_juan`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mecanicos`
--

CREATE TABLE `mecanicos` (
  `id` int(10) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `apellido` varchar(10) NOT NULL,
  `telefono` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mecanicos`
--

INSERT INTO `mecanicos` (`id`, `nombre`, `apellido`, `telefono`) VALUES
(11, 'Carlos', 'Parrales', '0936251447'),
(10, 'Javier', 'Murillo', '0958471425'),
(9, 'Josue', 'Miño', '0927599001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reparacion`
--

CREATE TABLE `reparacion` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `telefono` int(10) NOT NULL,
  `mecanico` varchar(50) NOT NULL,
  `vehiculo` varchar(10) NOT NULL,
  `marca` varchar(10) NOT NULL,
  `modelo` varchar(10) NOT NULL,
  `placa` varchar(10) NOT NULL,
  `fallas` varchar(50) NOT NULL,
  `repuesto` varchar(50) NOT NULL,
  `precio` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reparacion`
--

INSERT INTO `reparacion` (`id`, `nombre`, `cedula`, `telefono`, `mecanico`, `vehiculo`, `marca`, `modelo`, `placa`, `fallas`, `repuesto`, `precio`) VALUES
(17, 'Gabriel', '0927599001', 969144431, 'Parrales', 'Carro', 'Nissan', 'GT-R NISMO', 'GYE 895', 'Cambio del filtro de aceite', '', 0),
(16, 'Marta', '0958361425', 936475928, 'Murillo', 'Carro', 'Chevrolet', 'Aveo', 'GQY 495', 'Problema con los neumáticos (dañados)', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestos`
--

CREATE TABLE `respuestos` (
  `id` int(10) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `descripcion` varchar(25) NOT NULL,
  `stock` int(10) NOT NULL,
  `precio` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `respuestos`
--

INSERT INTO `respuestos` (`id`, `nombre`, `descripcion`, `stock`, `precio`) VALUES
(12, 'Neumático ', 'Los neumáticos del coche ', 50, 100),
(11, 'Ventana', 'Parte del auto que va uni', 20, 90);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mecanicos`
--
ALTER TABLE `mecanicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reparacion`
--
ALTER TABLE `reparacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `respuestos`
--
ALTER TABLE `respuestos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mecanicos`
--
ALTER TABLE `mecanicos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `reparacion`
--
ALTER TABLE `reparacion`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `respuestos`
--
ALTER TABLE `respuestos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
