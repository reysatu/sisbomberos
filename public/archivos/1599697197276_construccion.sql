-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-08-2020 a las 04:23:15
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `construccion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcionamiento`
--

CREATE TABLE `funcionamiento` (
  `Id` int(11) NOT NULL,
  `Id_Servicios` int(11) NOT NULL,
  `Nombre` varchar(200) DEFAULT NULL,
  `Estado` int(1) DEFAULT NULL,
  `Fecha_Registro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habilidad`
--

CREATE TABLE `habilidad` (
  `Id` int(11) NOT NULL,
  `Id_Servicios` int(11) NOT NULL,
  `Nombre` varchar(200) DEFAULT NULL,
  `Estado` int(1) DEFAULT NULL,
  `Fecha_Registro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `habilidad`
--

INSERT INTO `habilidad` (`Id`, `Id_Servicios`, `Nombre`, `Estado`, `Fecha_Registro`) VALUES
(1, 1, 'Habilidad 1', 1, '2020-07-02'),
(2, 1, 'Habilidad 2', 1, '2020-07-02'),
(3, 2, 'habilidad 3', 1, '2020-07-07'),
(4, 1, 'Habilidad 4', 1, '2020-07-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `Titulo` varchar(200) DEFAULT NULL,
  `Descripcion` varchar(1000) DEFAULT NULL,
  `Nombre_Foto` varchar(200) DEFAULT NULL,
  `Estado` int(1) NOT NULL,
  `Fecha_Registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`Id`, `Nombre`, `Titulo`, `Descripcion`, `Nombre_Foto`, `Estado`, `Fecha_Registro`) VALUES
(1, 'RENOVACIÓN', 'SERVICIOS DE RENOVACIÓN', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nstrud exercitation ullamco laboris nisi ut aliquip', '5.jpg', 1, '2020-06-29'),
(2, 'ARCHITECT', 'architect form', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nstrud exercitation ullamco laboris nisi ut aliquip', '6.jpg', 1, '2020-06-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios_inicio`
--

CREATE TABLE `servicios_inicio` (
  `Id` int(11) NOT NULL,
  `Id_Servicios` int(11) DEFAULT NULL,
  `Nombre_Foto` varchar(200) DEFAULT NULL,
  `Fecha_Registro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider_inicio`
--

CREATE TABLE `slider_inicio` (
  `Id` int(11) NOT NULL,
  `Titulo_Peque` varchar(200) NOT NULL,
  `Titulo_Grande` varchar(200) NOT NULL,
  `Descripcion` varchar(200) DEFAULT NULL,
  `Nombre_Foto` varchar(200) DEFAULT NULL,
  `Estado` int(1) NOT NULL,
  `Fecha_Registro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `slider_inicio`
--

INSERT INTO `slider_inicio` (`Id`, `Titulo_Peque`, `Titulo_Grande`, `Descripcion`, `Nombre_Foto`, `Estado`, `Fecha_Registro`) VALUES
(1, 'ELLA', 'CASA SOÑADA', 'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie <br>consequat  vel illum dolore eu feugiat nulla facilisis at vero eros.', '1.jpg', 1, '2020-06-27'),
(2, 'CONSTRUIMOS TU', 'PROYECTO', 'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie <br>consequat  vel illum dolore eu feugiat nulla facilisis at vero eros.', '2.jpg', 1, '2020-06-27');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `funcionamiento`
--
ALTER TABLE `funcionamiento`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Servicios` (`Id_Servicios`);

--
-- Indices de la tabla `habilidad`
--
ALTER TABLE `habilidad`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Servicios` (`Id_Servicios`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `servicios_inicio`
--
ALTER TABLE `servicios_inicio`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Servicios` (`Id_Servicios`);

--
-- Indices de la tabla `slider_inicio`
--
ALTER TABLE `slider_inicio`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `funcionamiento`
--
ALTER TABLE `funcionamiento`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `habilidad`
--
ALTER TABLE `habilidad`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `servicios_inicio`
--
ALTER TABLE `servicios_inicio`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `slider_inicio`
--
ALTER TABLE `slider_inicio`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `funcionamiento`
--
ALTER TABLE `funcionamiento`
  ADD CONSTRAINT `funcionamiento_ibfk_1` FOREIGN KEY (`Id_Servicios`) REFERENCES `servicios` (`Id`);

--
-- Filtros para la tabla `habilidad`
--
ALTER TABLE `habilidad`
  ADD CONSTRAINT `habilidad_ibfk_1` FOREIGN KEY (`Id_Servicios`) REFERENCES `servicios` (`Id`);

--
-- Filtros para la tabla `servicios_inicio`
--
ALTER TABLE `servicios_inicio`
  ADD CONSTRAINT `servicios_inicio_ibfk_1` FOREIGN KEY (`Id_Servicios`) REFERENCES `servicios` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
