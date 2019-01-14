-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-01-2019 a las 23:55:50
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `salones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id`, `nombre`) VALUES
(1, 'Licenciatura en Tecnologías Computacionales\r\n'),
(2, 'Ingeniería de Software'),
(3, 'Redes y Servicios de Cómputo'),
(4, 'Estadística'),
(5, 'Ciencias y Técnicas Estadísticas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `experienciaeducativa`
--

CREATE TABLE `experienciaeducativa` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `carrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `experienciaeducativa`
--

INSERT INTO `experienciaeducativa` (`id`, `nombre`, `carrera`) VALUES
(69412, 'Inglés II', 1),
(69413, 'Metodología de la Investigación', 1),
(69416, 'Algebra Lineal para Computación', 1),
(69425, 'Lectura y Redacción', 1),
(69429, 'Programación', 1),
(69482, 'Inglés II', 3),
(69489, 'Principios de Telecomunicaciones', 3),
(71934, 'Fundamentos de Matemáticas', 1),
(74381, 'Programación', 3),
(78954, 'Introducción a la Programación', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `id` int(11) NOT NULL,
  `horariocons` int(11) NOT NULL,
  `experienciaeducativa` int(11) NOT NULL,
  `salon` int(11) NOT NULL,
  `horainicio` time NOT NULL,
  `horafin` time NOT NULL,
  `dia` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`id`, `horariocons`, `experienciaeducativa`, `salon`, `horainicio`, `horafin`, `dia`) VALUES
(1, 1, 69425, 101, '12:00:00', '14:00:00', 'L'),
(2, 1, 69425, 101, '12:00:00', '14:00:00', 'J'),
(6, 2, 69425, 102, '08:00:00', '09:00:00', 'M'),
(7, 2, 69425, 102, '08:00:00', '09:00:00', 'X'),
(8, 2, 69425, 102, '10:00:00', '12:00:00', 'V'),
(9, 3, 69425, 103, '12:00:00', '13:00:00', 'L'),
(10, 3, 69425, 103, '12:00:00', '13:00:00', 'M'),
(11, 3, 69425, 103, '12:00:00', '13:00:00', 'X'),
(12, 4, 74381, 102, '09:00:00', '11:00:00', 'L'),
(13, 4, 74381, 102, '11:00:00', '13:00:00', 'J');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salon`
--

CREATE TABLE `salon` (
  `id` int(11) NOT NULL,
  `intensidad` varchar(20) NOT NULL,
  `conectores` int(11) NOT NULL,
  `lugares` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `salon`
--

INSERT INTO `salon` (`id`, `intensidad`, `conectores`, `lugares`) VALUES
(101, 'MALA', 30, 35),
(102, 'MALA', 30, 35),
(103, 'REGULAR', 30, 35),
(104, 'REGULAR', 30, 35),
(105, 'BUENA', 30, 35),
(106, 'BUENA', 30, 35),
(107, 'REGULAR', 30, 35),
(108, 'REGULAR', 30, 35),
(111, 'REGULAR', 30, 35),
(112, 'MALA', 30, 35),
(113, 'MALA', 30, 35);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `tipo` varchar(1) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `nombre` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `tipo`, `usuario`, `password`, `nombre`) VALUES
(1, 'S', 'lore', '$2y$10$mOWFhQxgz8ynJXd16TlmzOk3I.OgTxYxa51/YxC2zBQw0Md84sJ3K', 'Lorena'),
(3, 'P', 'leyga', '$2y$10$Pu4c2IWnJ1qrDrkTt1fiyu6iCmH6XdBUC.gcQJne/4J1.yUSk5ONi', 'Leydi García Méndez'),
(4, 'S', 'ley123', '$2y$10$Eu2vRAgRrN2SrfKZ4kw6eOsEvGTGDQAQup01P8ZypcL.Ii1TwmoNG', 'Leydi García Méndez'),
(5, 'P', 'revo', '$2y$10$OW/AaQ2v6RiqSBMDa0uAyuyhBt4Zqq0nHZTRkOKjujkEdB489s0bC', 'Juan Carlos');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `experienciaeducativa`
--
ALTER TABLE `experienciaeducativa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_experienciaeducativa_carrera_idx` (`carrera`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_horario_experienciaeducativa_idx` (`experienciaeducativa`),
  ADD KEY `fk_horario_salon_idx` (`salon`);

--
-- Indices de la tabla `salon`
--
ALTER TABLE `salon`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `experienciaeducativa`
--
ALTER TABLE `experienciaeducativa`
  ADD CONSTRAINT `fk_experienciaeducativa_carrera` FOREIGN KEY (`carrera`) REFERENCES `carrera` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `fk_horario_experienciaeducativa` FOREIGN KEY (`experienciaeducativa`) REFERENCES `experienciaeducativa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_horario_salon` FOREIGN KEY (`salon`) REFERENCES `salon` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
