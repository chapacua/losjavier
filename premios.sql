-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-09-2018 a las 02:06:51
-- Versión del servidor: 5.6.37
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `premios`
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
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='Esta tabla contiene los votos que irán realizando los votantes';

--
-- Volcado de datos para la tabla `Respuestas`
--

INSERT INTO `Respuestas` (`respuestasId`, `usuariosId`, `categoria`, `voto`, `fecha`) VALUES
(67, 1, 'puntualidad', 'Yecid', '2018-09-02'),
(68, 1, 'puntualidadInv', 'Alejandro Mira', '2018-09-02'),
(69, 1, 'mejorEstudiante', 'Alejandro Mira', '2018-09-02'),
(70, 1, 'mudoInv', 'Alejandro Mira', '2018-09-02'),
(71, 1, 'mejorEstudianteInv', 'Alejandro Mira', '2018-09-02'),
(72, 1, 'disculpas', 'Alejandro Mira', '2018-09-02'),
(73, 1, 'gigolo', 'Alejandro Mira', '2018-09-02'),
(74, 1, 'uniforme', 'Alejandro Mira', '2018-09-02'),
(75, 1, 'mudo', 'Alejandro Mira', '2018-09-02'),
(76, 1, 'uniformeInv', 'Alejandro Mira', '2018-09-02'),
(77, 1, 'elevado', 'Alejandro Mira', '2018-09-02'),
(78, 1, 'elevadoInv', 'Alejandro Mira', '2018-09-02'),
(79, 1, 'asistencia', 'Alejandro Mira', '2018-09-02'),
(80, 1, 'asistenciaInv', 'Alejandro Mira', '2018-09-02'),
(81, 1, 'veneno', 'Alejandro Mira', '2018-09-02'),
(82, 1, 'alegon', 'Alejandro Mira', '2018-09-02'),
(83, 1, 'calma', 'Alejandro Mira', '2018-09-02'),
(84, 1, 'simpatia', 'Alejandro Mira', '2018-09-02'),
(85, 1, 'imprudente', 'Alejandro Mira', '2018-09-02'),
(86, 1, 'nea', 'Alejandro Mira', '2018-09-02'),
(87, 1, 'guapo', 'Alejandro Mira', '2018-09-02');

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
  MODIFY `respuestasId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `usuariosId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
