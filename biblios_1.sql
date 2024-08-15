-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-08-2022 a las 10:19:29
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `biblios_1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE IF NOT EXISTS `autor` (
  `id_autor` int(11) NOT NULL AUTO_INCREMENT,
  `nom_autor` varchar(100) NOT NULL,
  `ape_autor` varchar(100) NOT NULL,
  PRIMARY KEY (`id_autor`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `autor`
--

INSERT INTO `autor` (`id_autor`, `nom_autor`, `ape_autor`) VALUES
(1, 'Paulo', 'Cohelo'),
(2, 'Oscar', 'Wilde'),
(3, 'Michael', 'Ende');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editorial`
--

CREATE TABLE IF NOT EXISTS `editorial` (
  `id_ed` int(11) NOT NULL AUTO_INCREMENT,
  `nom_ed` varchar(25) NOT NULL,
  PRIMARY KEY (`id_ed`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `editorial`
--

INSERT INTO `editorial` (`id_ed`, `nom_ed`) VALUES
(1, 'Obelisco'),
(2, 'Alfaguara'),
(3, 'Planeta'),
(4, 'Alianza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE IF NOT EXISTS `libro` (
  `isbn` bigint(20) NOT NULL DEFAULT '0',
  `titulo_lib` varchar(200) NOT NULL,
  `autor_lib` int(11) NOT NULL,
  `edit_lib` int(11) NOT NULL,
  `año` int(4) NOT NULL,
  PRIMARY KEY (`isbn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `libro`
--

INSERT INTO `libro` (`isbn`, `titulo_lib`, `autor_lib`, `edit_lib`, `año`) VALUES
(8420464988, 'Momo', 3, 2, 1982);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `id_per` int(11) NOT NULL AUTO_INCREMENT,
  `nom_per` varchar(200) NOT NULL,
  `tel_per` int(10) NOT NULL,
  PRIMARY KEY (`id_per`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_per`, `nom_per`, `tel_per`) VALUES
(1, 'Ginés Soriano', 555221122),
(2, 'Julia Ibáñez', 555123456),
(3, 'Cristina Prats', 555987654),
(4, 'Eva Andrés', 555654321);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE IF NOT EXISTS `prestamo` (
  `id_prestamo` int(11) NOT NULL AUTO_INCREMENT,
  `id_persona` int(11) NOT NULL,
  `id_libro` bigint(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_prestamo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `prestamo`
--

INSERT INTO `prestamo` (`id_prestamo`, `id_persona`, `id_libro`, `fecha`) VALUES
(3, 3, 8420464988, '2022-08-17 10:58:29');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
