-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2020 a las 02:51:15
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
('VW Fox ', 2005, '128000 kms', '101cv', '1200kg', '10.9 l/100km', 'Primera mano, bien cuidado, todos los papeles en regla, puedo permutar por mayor valor.', 1, 2),
('BMW 325i', 1994, '125000 kms', '144cv', '1243kg', '14 l/100km', 'Tercer dueño, muy buen estado general, cubiertas y fluidos nuevos, no permuto.', 2, 1),
('VW Amarok', 2013, '74000km', '200cv', '1800kg', '13l/100km', 'Primer dueño, todos los kilometros fueron en ruta, permuto por menor valor.', 4, 1),
('Ford Fiesta', 2013, '24000km', '144cv', '1300kg', '11l/100km', 'Estuvo guardado mucho tiempo en una cochera, recientemente se le cambio la batería y fluidos.', 5, 3),
('Renault Clio', 2005, '138000km', '87cv', '987kg', '8.9l/100km', 'Clio 1.2, muy económico, patentes al dia, se va transferido.', 7, 4),
('Chevrolet Cruze', 2020, '4000km', '177cv', '1200kg', '9l/100km', 'Uso en ciudad, todavía esta en garantia, nada por hacerle.', 8, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `id_auto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `puntaje` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id`, `comentario`, `id_auto`, `id_usuario`, `puntaje`) VALUES
(1, 'Buenisimo', 1, 6, 5),
(7, 'Muy cuidado', 2, 11, 5),
(19, 'non', 1, 1, 1),
(23, 'anda?', 1, 1, 5),
(25, 'ay', 1, 1, 1),
(27, 'Me gusta mucho, color original', 2, 1, 5),
(28, 'Tiene sus detalles', 4, 1, 1),
(29, 'No me gusta el color', 4, 11, 3),
(30, 'Impecable!', 5, 11, 5),
(31, 'Bastante golpeado', 7, 11, 5),
(32, 'Ni un detalle', 8, 11, 5),
(33, 'Como de fabrica', 8, 10, 1),
(34, 'No vale la pena', 7, 10, 1),
(35, 'Golpe en el capot', 5, 10, 3),
(36, 'No me gusto', 4, 10, 2),
(37, 'Deja mucho que desear', 2, 14, 3),
(38, 'Vale la pena', 2, 14, 4),
(39, 'No se si esta bueno', 7, 13, 2),
(40, 'Puede ser q si, depende para que', 7, 6, 4),
(41, 'El motor muy bueno', 1, 6, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `prioridad` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `password`, `admin`, `prioridad`) VALUES
(1, 'admin', '$2y$10$7IjoPSLcBXXVhAEIhL.lCeFZgVZ0/FrEuMMUoT8rxQtLj.MXrhqfy', 1, 1),
(6, 'Fran', '$2y$10$Yqt2QvDy.tL3bJhYKM8mXOBK0Mj1gnP8ggyrJY9p6nEd7TC7GcJB2', 0, 2),
(10, 'Usuario', '$2y$10$86AMaJ469JjSCGR0qB8.M.hJOqc1hXq8eNCY3bkvzERYDRqLUYpk2', 0, 0),
(11, 'PP', '$2y$10$h1bfKaOQnismJDJEnv3eYO5LhTOwOxOurDSLICXokDphji7IY0EbC', 0, 0),
(13, '123', '$2y$10$0iB2MYksKD0O8awWGzMUDeIOBgYStNT42RMs21VK.8znHXa6obB.i', 0, 0),
(14, 'mi', '$2y$10$9AwLDYynOeDLbZ1pEBVSne.OWU5x0LEHZYysQ90VNbUTUltAEkkgG', 0, 0);

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
(1, 'Juan Perez', 22, 'Tandil', 'juanperez@gmail.com'),
(2, 'Franco Aiello', 21, 'Tandil', 'franaiello2@gmail.com'),
(3, 'Pepe', 22, 'Tandil', 'pp@gmail.com'),
(4, 'Martin', 21, 'Tandil', 'martintandil@gmail.com'),
(11, 'Nicolas', 33, 'Tandil', 'nicolastandil@gmail.com');

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
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_auto` (`id_auto`),
  ADD KEY `id_usuario` (`id_usuario`);

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
  MODIFY `id_auto` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `id_vendedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `automotor`
--
ALTER TABLE `automotor`
  ADD CONSTRAINT `automotor_ibfk_1` FOREIGN KEY (`id_vendedor`) REFERENCES `vendedor` (`id_vendedor`) ON DELETE CASCADE;

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comentario_ibfk_3` FOREIGN KEY (`id_auto`) REFERENCES `automotor` (`id_auto`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
