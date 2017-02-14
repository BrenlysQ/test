-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-01-2017 a las 17:28:38
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `solicitudes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desarrollo`
--

CREATE TABLE `desarrollo` (
  `Interfaz` varchar(25) NOT NULL,
  `Bases de datos` varchar(25) NOT NULL,
  `Nombre del sistema` varchar(100) NOT NULL,
  `Tipo` varchar(100) NOT NULL,
  `Descripcion` varchar(500) NOT NULL,
  `Nombre del contacto` varchar(100) NOT NULL,
  `Numero del contacto` varchar(25) NOT NULL,
  `Responsable del Proyecto(Coordinador)` varchar(100) NOT NULL,
  `Programadores` varchar(250) NOT NULL,
  `Estatus` varchar(25) NOT NULL,
  `Ruta de acceso` varchar(250) NOT NULL,
  `Requerimientos funcionales` varchar(500) NOT NULL,
  `Requerimientos no funcionales` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `desarrollo`
--

INSERT INTO `desarrollo` (`Interfaz`, `Bases de datos`, `Nombre del sistema`, `Tipo`, `Descripcion`, `Nombre del contacto`, `Numero del contacto`, `Responsable del Proyecto(Coordinador)`, `Programadores`, `Estatus`, `Ruta de acceso`, `Requerimientos funcionales`, `Requerimientos no funcionales`) VALUES
('', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `tipo de evento` varchar(250) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `soporte`
--

CREATE TABLE `soporte` (
  `Tipo de equipo` varchar(100) NOT NULL,
  `Descripcion` varchar(500) NOT NULL,
  `Ubicacion` varchar(100) NOT NULL,
  `Serial o inventario` varchar(100) NOT NULL,
  `Fecha de salida` varchar(100) NOT NULL,
  `Fecha de retorno` varchar(100) NOT NULL,
  `Por UST` varchar(250) NOT NULL,
  `Autorizado Por` varchar(250) NOT NULL,
  `Por PIPSUC` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
