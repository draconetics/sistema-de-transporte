-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2015 a las 20:21:14
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `transporte`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
`idcliente` int(11) NOT NULL,
  `nombrecliente` varchar(50) CHARACTER SET latin1 NOT NULL,
  `apellidocliente` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ci` int(11) NOT NULL,
  `idtipo` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nombrecliente`, `apellidocliente`, `ci`, `idtipo`) VALUES
(1, 'irene', 'argollo ', 56555, 3),
(2, 'isabel', 'sarzosañ', 454555, 3),
(3, 'juancito', 'pinto', 505905, 1),
(4, 'Nahizeth', 'Cor', 545455, 1),
(5, 'Sasi', 'sasi', 454545, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
`idempleado` int(11) NOT NULL,
  `nombreempleado` varchar(50) NOT NULL,
  `apellidoempleado` varchar(50) NOT NULL,
  `idtipoempleado` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idempleado`, `nombreempleado`, `apellidoempleado`, `idtipoempleado`) VALUES
(1, 'Juanita', 'Almanza', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recarga`
--

CREATE TABLE IF NOT EXISTS `recarga` (
`idrecarga` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `idtarjeta` int(11) NOT NULL,
  `fecharecarga` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `saldo`
--

CREATE TABLE IF NOT EXISTS `saldo` (
`idsaldo` int(10) NOT NULL,
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `saldo`
--

INSERT INTO `saldo` (`idsaldo`, `saldo`) VALUES
(1, 10),
(2, 20),
(3, 30),
(4, 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjeta`
--

CREATE TABLE IF NOT EXISTS `tarjeta` (
`idtarjeta` int(11) NOT NULL,
  `nombretarjeta` varchar(50) NOT NULL,
  `idsaldo` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tarjeta`
--

INSERT INTO `tarjeta` (`idtarjeta`, `nombretarjeta`, `idsaldo`) VALUES
(1, 'A', 0),
(2, 'B', 0),
(3, 'C', 0),
(4, 'D', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocliente`
--

CREATE TABLE IF NOT EXISTS `tipocliente` (
`idtipo` int(10) NOT NULL,
  `nombretipo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tipocliente`
--

INSERT INTO `tipocliente` (`idtipo`, `nombretipo`) VALUES
(1, 'niÃ±o'),
(2, 'escolar'),
(3, 'universitario'),
(4, 'adulto mayor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoempleado`
--

CREATE TABLE IF NOT EXISTS `tipoempleado` (
`idtipoempleado` int(11) NOT NULL,
  `nombretipoempleo` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipoempleado`
--

INSERT INTO `tipoempleado` (`idtipoempleado`, `nombretipoempleo`) VALUES
(1, 'Administrador'),
(2, 'Vendedor'),
(3, 'Conductor'),
(4, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`idusuario` int(11) NOT NULL,
  `nombreusuario` varchar(50) NOT NULL,
  `apellidousuario` varchar(50) NOT NULL,
  `loginusuario` varchar(50) NOT NULL,
  `claveusuario` varchar(50) NOT NULL,
  `tipousuario` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombreusuario`, `apellidousuario`, `loginusuario`, `claveusuario`, `tipousuario`) VALUES
(1, 'Ariel', 'Miranda', 'miranda', 'miranda', 'a'),
(2, 'DilinÃ±', 'Dosdos', 'dilin', 'dilin', 'b');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
 ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
 ADD PRIMARY KEY (`idempleado`);

--
-- Indices de la tabla `recarga`
--
ALTER TABLE `recarga`
 ADD PRIMARY KEY (`idrecarga`);

--
-- Indices de la tabla `saldo`
--
ALTER TABLE `saldo`
 ADD PRIMARY KEY (`idsaldo`);

--
-- Indices de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
 ADD PRIMARY KEY (`idtarjeta`);

--
-- Indices de la tabla `tipocliente`
--
ALTER TABLE `tipocliente`
 ADD PRIMARY KEY (`idtipo`);

--
-- Indices de la tabla `tipoempleado`
--
ALTER TABLE `tipoempleado`
 ADD PRIMARY KEY (`idtipoempleado`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
MODIFY `idempleado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `recarga`
--
ALTER TABLE `recarga`
MODIFY `idrecarga` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `saldo`
--
ALTER TABLE `saldo`
MODIFY `idsaldo` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
MODIFY `idtarjeta` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tipocliente`
--
ALTER TABLE `tipocliente`
MODIFY `idtipo` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tipoempleado`
--
ALTER TABLE `tipoempleado`
MODIFY `idtipoempleado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
