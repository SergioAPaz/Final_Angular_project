-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2016 a las 18:58:04
-- Versión del servidor: 5.7.9
-- Versión de PHP: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `angularproject`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `Galeria` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Costo` double NOT NULL,
  `UrlFile` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `Galeria`, `Nombre`, `Descripcion`, `Costo`, `UrlFile`) VALUES
(25, '1', 'sdcsd', 'sdcsdc', 222, '1479883892.jpg'),
(26, '2', 'hombrees', 'hombres', 9999, '1479884313.jpg'),
(24, '1', 'NIKE METCON 2 AMP', 'Entrenamiento', 1538, '1479873949.jpg'),
(23, '1', 'NIKE METCON 2 ULTD', 'CALZADO DE ENTRENAMI', 2199, '1479873912.jpg'),
(22, '1', 'NIKE METCON 2 AMP', 'CALZADO DE ENTRENAMI', 1500, '1479873893.jpg'),
(21, '1', 'Nike Metcon 2', 'CALZADO DE ENTRENAMI', 2199, '1479873831.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Apellido` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Usuario` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Rol` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `UrlImg` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Usuario` (`Usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `Nombre`, `Apellido`, `Email`, `Usuario`, `Password`, `Rol`, `UrlImg`) VALUES
(1, 'Sergio', 'Paz', 'alejandroax@live.com.mx', 'spazh', 'maya', 'Administrador', 'Vacio'),
(16, 'cecy', 'ornelas', 'alex@gmail.com', 'cecy', 'cecy', 'Usuario', '1479707365.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

DROP TABLE IF EXISTS `ventas`;
CREATE TABLE IF NOT EXISTS `ventas` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Costo` int(100) NOT NULL,
  `UrlFile` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
