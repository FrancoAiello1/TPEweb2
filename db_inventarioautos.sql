-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2020 a las 05:57:36
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_inventarioautos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `automotor`
--

CREATE TABLE `automotor` (
  `modelo` varchar(25) NOT NULL,
  `anio` int(255) NOT NULL,
  `kilometraje` varchar(255) NOT NULL,
  `potencia` varchar(999) NOT NULL,
  `peso` varchar(5000) NOT NULL,
  `consumo` varchar(255) NOT NULL,
  `detalles` varchar(400) NOT NULL,
  `id_auto` int(255) NOT NULL,
  `id_vendedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `automotor`
--

INSERT INTO `automotor` (`modelo`, `anio`, `kilometraje`, `potencia`, `peso`, `consumo`, `detalles`, `id_auto`, `id_vendedor`) VALUES
('VW Fox ', 2005, '128000 kms', '101cv', '1200kg', '10.9 l/100km', 'Primera mano, bien cuidado, todos los papeles en regla, puedo permutar por mayor valor.', 1, 1),
('BMW 325i', 1994, '125000 kms', '144cv', '1243kg', '14 l/100km', 'Tercer dueño, muy buen estado general, cubiertas y fluidos nuevos, no permuto.', 2, 2),
('VW Gol', 2001, '224000kms', '78 cv', '1100kg', '10l/100km', 'Todos los papeles en regla, no pierde aceite ni agua, muy economico.', 3, 1),
('VW Amarok', 2013, '74000km', '200cv', '1800kg', '13l/100km', 'Primer dueño, todos los kilometros fueron en ruta, permuto por menor valor.', 4, 1),
('Ford Fiesta', 2013, '24000km', '144cv', '1300kg', '11l/100km', 'Estuvo guardado mucho tiempo en una cochera, recientemente se le cambio la batería y fluidos.', 5, 4),
('Renault Clio', 2005, '138000km', '87cv', '987kg', '8.9l/100km', 'Clio 1.2, muy económico, patentes al dia, se va transferido.', 7, 4),
('Chevrolet Cruze', 2020, '4000km', '176cv', '1200kg', '9l/100km', 'Uso en ciudad, todavía esta en garantia, nada por hacerle.', 8, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$7IjoPSLcBXXVhAEIhL.lCeFZgVZ0/FrEuMMUoT8rxQtLj.MXrhqfy');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE `vendedor` (
  `id_vendedor` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `edad` int(255) NOT NULL,
  `ciudad` text NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vendedor`
--

INSERT INTO `vendedor` (`id_vendedor`, `nombre`, `edad`, `ciudad`, `email`) VALUES
(1, 'Juan Perez', 21, 'Tandil', 'juanperez@gmail.com'),
(2, 'Franco Aiello', 21, 'Tandil', 'franaiello2@gmail.com'),
(3, 'Pepe', 21, 'Tandil', 'pepe@pepe.com'),
(4, 'Martin', 21, 'Tandil', 'martintandil@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `automotor`
--
ALTER TABLE `automotor`
  ADD PRIMARY KEY (`id_auto`),
  ADD KEY `id_vendedor` (`id_vendedor`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`id_vendedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `automotor`
--
ALTER TABLE `automotor`
  MODIFY `id_auto` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `id_vendedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `automotor`
--
ALTER TABLE `automotor`
  ADD CONSTRAINT `automotor_ibfk_1` FOREIGN KEY (`id_vendedor`) REFERENCES `vendedor` (`id_vendedor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
