--
-- Base de datos: `solicitudes`
--
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitante`
--

CREATE TABLE `solicitante` (
  `Nombre` varchar(100) NOT NULL,
  `Dependencia` varchar(100) NOT NULL,
  `Tipo de Solicitud` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `Programador1` varchar(250) NOT NULL,
  `Programador2` varchar(250) NOT NULL,
  `Estatus` varchar(25) NOT NULL,
  `Ruta de acceso` varchar(250) NOT NULL,
  `Requerimientos funcionales` varchar(500) NOT NULL,
  `Requerimientos no funcionales` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `desarrollo`
--

INSERT INTO `desarrollo` (`Interfaz`, `Bases de datos`, `Nombre del sistema`, `Tipo`, `Descripcion`, `Nombre del contacto`, `Numero del contacto`, `Responsable del Proyecto(Coordinador)`, `Programador1`, `Programador2`, `Estatus`, `Ruta de acceso`, `Requerimientos funcionales`, `Requerimientos no funcionales`) VALUES
('', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `tipo de evento` varchar(250) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `Lugar` varchar(250) NOT NULL,
  `Recurso` varchar(250) NOT NULL,
  `fecha inicio` varchar(250) NOT NULL,
  `fecha culminaciòn` varchar(250) NOT NULL,
  `facilitador1` varchar(250) NOT NULL,
  `facilitador2` varchar(250) NOT NULL,
  `Tecnico de apoyo` varchar(250) NOT NULL,
  `tipo de participacion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`tipo de evento`, `descripcion`, `Lugar`, `Recurso`, `fecha inicio`, `fecha culminaciòn`, `facilitador1`, `facilitador2`, `Tecnico de apoyo`, `tipo de participacion`) VALUES
('Foro', 'dsf', 'dsfsd', 'Camara', '03/01/2017', '11/01/2017', 'dsfsd', 'sdfs', 'sdfds', 'presencial');

-- --------------------------------------------------------


-- Estructura de tabla para la tabla `soporte`
--

CREATE TABLE `soporte` (
  `Tipo de equipo` varchar(100) NOT NULL,
  `Descripcion` varchar(500) NOT NULL,
  `diagnostico` varchar(250) NOT NULL,
  `Ubicacion` varchar(100) NOT NULL,
  `Serial o inventario` varchar(100) NOT NULL,
  `Tecnico recibe` varchar(100) NOT NULL,
  `Tecnico repara` varchar(100) NOT NULL,
  `Fecha de entrada` varchar(100) NOT NULL,
  `Fecha de salida` varchar(100) NOT NULL,
  `Trabajo realizado` varchar(250) NOT NULL,
  `Por UST` varchar(250) NOT NULL,
  `Autorizado Por` varchar(250) NOT NULL,
  `Por PIPSUC` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `soporte`
--

INSERT INTO `soporte` (`Tipo de equipo`, `Descripcion`, `diagnostico`, `Ubicacion`, `Serial o inventario`, `Tecnico recibe`, `Tecnico repara`, `Fecha de entrada`, `Fecha de salida`, `Trabajo realizado`, `Por UST`, `Autorizado Por`, `Por PIPSUC`) VALUES
('', 'sdewed', 'erwr', 'ewrew', 'erer', 'erewr', 'erewr', '03/01/2017', '11/01/2017', 'mantenimiento', 'asxa', 'sds', 'd'),
('', 'sdewed', 'erwr', 'ewrew', 'erer', 'erewr', 'erewr', '03/01/2017', '11/01/2017', 'mantenimiento', 'asxa', 'sds', 'd'),
('', 'gfh', 'dfgfdg', 'fgg', 'fgdf', 'fdgfd', 'dfg', '02/01/2017', '03/01/2017', 'mantenimiento', 'gfh', 'gfh', 'gfh');

-- --------------------------------------------------------

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
