-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-07-2022 a las 18:51:19
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
(7, 'pepito', 'tomala', '7894651320'),
(4, 'Josué', 'montesdeoc', '0927599001'),
(5, 'Diana', 'Campaña', '0965471825'),
(8, 'pepito', 'pancracio', '0965841651');

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
(2, 'juansad', '0927599001', 969144431, 'juan pueblo', 'carro', 'la calle', 'gucci', 'gye 1234', 'ya enciende', 'rueda', 15);

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
(10, 'ventana', 'pa cubrirse', 80, 100),
(9, 'puerta', 'pa cerrarla', 20, 500),
(8, 'rueda', 'centro del carro', 20, 15);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `reparacion`
--
ALTER TABLE `reparacion`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `respuestos`
--
ALTER TABLE `respuestos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
