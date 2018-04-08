-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-04-2018 a las 23:21:12
-- Versión del servidor: 5.6.37
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `losJavier`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Respuestas`
--

CREATE TABLE IF NOT EXISTS `Respuestas` (
  `respuestasId` int(11) NOT NULL,
  `usuariosId` int(11) NOT NULL,
  `categoria` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `voto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='Esta tabla contiene los votos que irán realizando los votantes';

--
-- Volcado de datos para la tabla `Respuestas`
--

INSERT INTO `Respuestas` (`respuestasId`, `usuariosId`, `categoria`, `voto`, `fecha`) VALUES
(49, 1, 'puntualidad', 'Yecid', '2018-04-08'),
(50, 1, 'puntualidadInv', 'Yosman', '2018-04-08'),
(51, 1, 'mejorEstudiante', 'David', '2018-04-08'),
(52, 1, 'mudoInv', 'Jaider', '2018-04-08'),
(53, 1, 'mejorEstudianteInv', 'Yosman', '2018-04-08'),
(54, 1, 'disculpas', 'Brayan', '2018-04-08'),
(55, 1, 'gigolo', 'Yosman', '2018-04-08'),
(56, 1, 'uniforme', 'Camilo', '2018-04-08'),
(57, 1, 'mudo', 'Jeraldine', '2018-04-08'),
(58, 1, 'uniformeInv', 'David', '2018-04-08'),
(59, 1, 'elevado', 'Estiven', '2018-04-08'),
(60, 1, 'elevadoInv', 'David', '2018-04-08'),
(61, 1, 'asistencia', 'Yecid', '2018-04-08'),
(62, 1, 'asistenciaInv', 'Estiven', '2018-04-08'),
(63, 1, 'veneno', 'Luisa', '2018-04-08'),
(64, 1, 'alegon', 'Gloria', '2018-04-08'),
(65, 1, 'calma', 'Yosman', '2018-04-08'),
(66, 1, 'imprudente', 'Brayan', '2018-04-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE IF NOT EXISTS `Usuarios` (
  `usuariosId` int(11) NOT NULL,
  `codigo` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `fechaInicio` datetime DEFAULT NULL,
  `fechaFin` datetime DEFAULT NULL,
  `preguntaActual` int(11) DEFAULT NULL,
  `nombreUsuario` varchar(45) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='Tabla que contendrá los usuarios que votarán';

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`usuariosId`, `codigo`, `fechaInicio`, `fechaFin`, `preguntaActual`, `nombreUsuario`) VALUES
(1, '123qwe..', NULL, NULL, NULL, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Respuestas`
--
ALTER TABLE `Respuestas`
  ADD PRIMARY KEY (`respuestasId`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`usuariosId`),
  ADD UNIQUE KEY `codigo_UNIQUE` (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Respuestas`
--
ALTER TABLE `Respuestas`
  MODIFY `respuestasId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `usuariosId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
