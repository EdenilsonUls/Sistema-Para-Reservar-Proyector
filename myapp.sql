-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-11-2016 a las 14:32:01
-- Versión del servidor: 5.5.47-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `myapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(1) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `usernombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`idadmin`, `nombre`, `apellido`, `usernombre`, `email`, `password`) VALUES
(1, 'xavier edenilson', 'hernandez lovos', 'admin', 'edenilsonhernandez@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE IF NOT EXISTS `alumno` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  `apellido` varchar(100) NOT NULL,
  `residencia` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `carnet` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nombre` (`nombre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `nombre`, `apellido`, `residencia`, `email`, `carnet`, `password`, `created_at`, `estado`) VALUES
(1, 'xavier edenilson', 'hernandez lovos', 'olocuilta, el salvador', 'edenilson@gmail.com', 'HL01133112', '12345', '2016-09-15 16:16:57', 1),
(40, 'ronal', 'alberto', '', 'ronal@gmail.com', 'RA01133112', '12345', '2016-09-15 16:15:19', 0),
(42, 'DENNIS ALEXIS', 'VALENCIA', '', 'DENIS@GMAIL.COM', 'DN01133112', '12345', '2016-09-15 16:18:44', 0),
(43, 'steven culero', 'culero', '', 'culero@gmail.com', 'cl000', '1', '2016-09-15 17:58:11', 0),
(44, 'kevin', 'lopes', '', 'kevin@gmail.com', 'kh01133112', '12', '2016-09-22 13:17:05', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyector`
--

CREATE TABLE IF NOT EXISTS `proyector` (
  `idproyector` int(1) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `marca` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `condicion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idproyector`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `proyector`
--

INSERT INTO `proyector` (`idproyector`, `nombre`, `marca`, `condicion`, `estado`) VALUES
(1, 'proyector1', 'epson', 'en funcionamiento', 1),
(2, 'proyector2', 'epson', 'no funciona', 1),
(3, 'proyector3', 'canon', 'en funcionamiento', 1),
(4, 'proyector4', 'LG', 'en funcionamiento', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE IF NOT EXISTS `reserva` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `carnet` varchar(25) DEFAULT NULL,
  `nombre_del_equipo` varchar(50) DEFAULT NULL,
  `fecha_a_reservar` date DEFAULT NULL,
  `hora` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`id`, `nombre`, `apellido`, `carnet`, `nombre_del_equipo`, `fecha_a_reservar`, `hora`, `created_at`, `estado`) VALUES
(1, 'xavier edenilson', 'hernandez lovos', 'HL01133112', 'proyector1', '2016-11-20', '7:00am - 8:45am', '2016-11-11 09:19:12', 1),
(2, 'ronal alberto', 'rivera mejia', 'RM01133112', 'proyector2', '2016-11-20', '9:00am - 10:45am', '2016-11-11 09:19:54', 1),
(3, 'noe neftali', 'garcia salvador', 'NG01133112', 'proyector3', '2016-11-20', '11:00am - 12:00pm', '2016-11-11 09:22:13', 1),
(4, 'kevin josue', 'perez granado', 'KG01133112', 'proyector4', '2016-11-20', '1:00pm - 2:45pm', '2016-11-11 09:23:45', 1),
(6, 'amidia letycia', 'hernandez gonzales', 'LA01133112', 'proyector2', '2016-11-20', '3:00pm - 4:30pm', '2016-11-11 09:28:09', 1),
(7, 'a', 'A', 'aa', 'proyector1', '2017-11-10', '7:00am - 8:45am', '2016-11-18 13:16:45', 0),
(8, 'aaa', 'aaa', 'aaa', 'proyector1', '2017-11-15', '7:00am - 8:45am', '2016-11-18 13:18:38', 0),
(9, 'aa', 'aaa', 'aaa', 'proyector2', '2017-10-31', '7:00am - 8:45am', '2016-11-18 13:21:22', 0),
(10, 'aa', 'aaa', 'aaa', 'proyector1', '0000-00-00', '9:00am - 10:45am', '2016-11-18 14:04:33', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
