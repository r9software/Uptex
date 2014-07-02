-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-07-2014 a las 19:03:27
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `uptex`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `academia`
--

CREATE TABLE IF NOT EXISTS `academia` (
  `idacademia` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `idmaestro` int(11) NOT NULL,
  PRIMARY KEY (`idacademia`,`idmaestro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `academiacarrera`
--

CREATE TABLE IF NOT EXISTS `academiacarrera` (
  `idacademia` int(11) NOT NULL,
  `idcarrera` int(11) NOT NULL,
  PRIMARY KEY (`idacademia`,`idcarrera`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrativo`
--

CREATE TABLE IF NOT EXISTS `administrativo` (
  `idadministrativos` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `estado` varchar(200) DEFAULT NULL,
  `municipio` varchar(200) DEFAULT NULL,
  `idusuario` int(11) NOT NULL,
  `idperfil` int(11) NOT NULL,
  PRIMARY KEY (`idadministrativos`,`idusuario`,`idperfil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrativodocumento`
--

CREATE TABLE IF NOT EXISTS `administrativodocumento` (
  `idadministrativo` int(11) NOT NULL,
  `iddocumento` int(11) NOT NULL,
  PRIMARY KEY (`idadministrativo`,`iddocumento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE IF NOT EXISTS `alumno` (
  `idalumno` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `municipio` varchar(200) DEFAULT NULL,
  `estado` varchar(200) DEFAULT NULL,
  `matricula` varchar(45) NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `idusuario` int(11) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `estadocivil` varchar(45) DEFAULT NULL,
  `datoslaborales` varchar(200) DEFAULT NULL,
  `secundaria` varchar(45) DEFAULT NULL,
  `preparatoria` varchar(45) DEFAULT NULL,
  `genero` int(45) DEFAULT NULL,
  `groposanguineo` varchar(45) DEFAULT NULL,
  `capacidadesdiferentes` varchar(45) DEFAULT NULL,
  `rehabilitacion` varchar(200) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `curp` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idalumno`,`idusuario`),
  UNIQUE KEY `matricula_UNIQUE` (`matricula`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`idalumno`, `nombre`, `direccion`, `municipio`, `estado`, `matricula`, `status`, `idusuario`, `telefono`, `email`, `estadocivil`, `datoslaborales`, `secundaria`, `preparatoria`, `genero`, `groposanguineo`, `capacidadesdiferentes`, `rehabilitacion`, `edad`, `curp`) VALUES
(1, 'Rodolfo Abarca', 'calle falsa 123', 'Ecatepec', 'Estado de Mexico', 'AARR920807', 1, 1, '5548164161', 'rodolfo.abarca@outlook.com', 'Soltero', 'No trabaja', 'Esc 577 ', 'Cecyt 3', 1, 'OH-', NULL, NULL, 21, 'AARR920807HMCBD01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnocarrera`
--

CREATE TABLE IF NOT EXISTS `alumnocarrera` (
  `idalumno` int(11) NOT NULL,
  `idcarrera` int(11) NOT NULL,
  PRIMARY KEY (`idalumno`,`idcarrera`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnodocumento`
--

CREATE TABLE IF NOT EXISTS `alumnodocumento` (
  `idalumno` int(11) NOT NULL,
  `iddocumento` int(11) NOT NULL,
  PRIMARY KEY (`idalumno`,`iddocumento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencias`
--

CREATE TABLE IF NOT EXISTS `asistencias` (
  `idalumno` int(11) NOT NULL,
  `idmaestro` int(11) NOT NULL,
  `idmateria` int(11) NOT NULL,
  `idgrupo` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `asistencia` tinyint(4) DEFAULT NULL,
  `idperiodo` int(11) NOT NULL,
  PRIMARY KEY (`idalumno`,`idmaestro`,`idmateria`,`idgrupo`,`fecha`,`idperiodo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cambioshistorial`
--

CREATE TABLE IF NOT EXISTS `cambioshistorial` (
  `idcambioshistorial` int(11) NOT NULL,
  `idadministrativo` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `valoranterior` varchar(45) DEFAULT NULL,
  `valornuevo` varchar(45) DEFAULT NULL,
  `fecha` varchar(45) DEFAULT NULL,
  `columna` varchar(45) DEFAULT NULL,
  `idaprobacion` int(11) NOT NULL,
  `urloficio` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idcambioshistorial`,`idadministrativo`,`idaprobacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE IF NOT EXISTS `carrera` (
  `idcarrera` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcarrera`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concepto`
--

CREATE TABLE IF NOT EXISTS `concepto` (
  `idconcepto` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) DEFAULT NULL,
  `costo` double DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idconcepto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE IF NOT EXISTS `documento` (
  `iddocumento` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`iddocumento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estancia`
--

CREATE TABLE IF NOT EXISTS `estancia` (
  `idalumno` int(11) NOT NULL,
  `idmaestro` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `empresa` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `responsable` varchar(45) DEFAULT NULL,
  `tipo` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idalumno`,`idmaestro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacionmaestro`
--

CREATE TABLE IF NOT EXISTS `evaluacionmaestro` (
  `idmaestro` int(11) NOT NULL,
  `idalumno` int(11) NOT NULL,
  `comentario` varchar(500) DEFAULT NULL,
  `calificacion` int(11) DEFAULT NULL,
  `evaluacionmaestrocol` varchar(45) DEFAULT NULL,
  `idmateria` int(11) NOT NULL,
  `idperiodo` int(11) NOT NULL,
  PRIMARY KEY (`idmaestro`,`idalumno`,`idmateria`,`idperiodo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `excepcionpago`
--

CREATE TABLE IF NOT EXISTS `excepcionpago` (
  `idexcepcion` int(11) NOT NULL,
  `idconcepto` int(11) NOT NULL,
  `fechapago` date DEFAULT NULL,
  `idadministrativo` int(11) NOT NULL,
  `idautorizacion` int(11) NOT NULL,
  `fechadesolicitud` date DEFAULT NULL,
  `idalumno` int(11) NOT NULL,
  `idperiodo` int(11) NOT NULL,
  `descuentoaplicado` double DEFAULT NULL,
  PRIMARY KEY (`idexcepcion`,`idconcepto`,`idadministrativo`,`idautorizacion`,`idalumno`,`idperiodo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fecha`
--

CREATE TABLE IF NOT EXISTS `fecha` (
  `idfechas` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `idperiodo` int(11) NOT NULL,
  PRIMARY KEY (`idfechas`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `fecha`
--

INSERT INTO `fecha` (`idfechas`, `fecha`, `descripcion`, `idperiodo`) VALUES
(1, '2014-06-28', 'Inicio de Cuatrimestre Sep Dic 2014', 1),
(2, '2014-06-28', 'Reinscripción May Ago 2014 Ingeniería  Robótica y Nuevo Ingreso', 1),
(3, '2014-06-28', 'Reinscripción May Ago 2014 Ingeniería en Electrónica y Telecomunicaciones', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE IF NOT EXISTS `grupo` (
  `idgrupo` int(11) NOT NULL,
  `clave` varchar(45) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  `turno` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idgrupo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupomateriahorario`
--

CREATE TABLE IF NOT EXISTS `grupomateriahorario` (
  `idmateria` int(11) NOT NULL,
  `idgrupo` int(11) NOT NULL,
  `idhorario` int(11) NOT NULL,
  PRIMARY KEY (`idmateria`,`idgrupo`,`idhorario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE IF NOT EXISTS `historial` (
  `idmateria` int(11) NOT NULL,
  `idgrupo` int(11) NOT NULL,
  `idhorario` int(11) NOT NULL,
  `idmaestro` int(11) NOT NULL,
  `idalumno` int(11) NOT NULL,
  `idperiodo` int(11) NOT NULL,
  `calificacion` int(11) DEFAULT NULL,
  PRIMARY KEY (`idmateria`,`idgrupo`,`idhorario`,`idmaestro`,`idalumno`,`idperiodo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE IF NOT EXISTS `horario` (
  `idhorario` int(11) NOT NULL,
  `dia` varchar(45) DEFAULT NULL,
  `hora` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idhorario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `idlog` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `valor` varchar(45) DEFAULT NULL,
  `fecha` varchar(45) DEFAULT NULL,
  `idusuario` int(11) NOT NULL,
  `ip` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idlog`,`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestro`
--

CREATE TABLE IF NOT EXISTS `maestro` (
  `idmaestro` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `estado` varchar(200) DEFAULT NULL,
  `idusuario` int(11) NOT NULL,
  `genero` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `licenciatura` varchar(45) DEFAULT NULL,
  `maestria` varchar(45) DEFAULT NULL,
  `evaluaciones` float DEFAULT NULL,
  `comentarios` varchar(200) DEFAULT NULL,
  `categoria` varchar(45) DEFAULT NULL,
  `maestrocol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idmaestro`,`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestroacademia`
--

CREATE TABLE IF NOT EXISTS `maestroacademia` (
  `idmaestro` int(11) NOT NULL,
  `idacademia` int(11) NOT NULL,
  PRIMARY KEY (`idmaestro`,`idacademia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestrodocumento`
--

CREATE TABLE IF NOT EXISTS `maestrodocumento` (
  `idmaestrodomaterigrupo` int(11) NOT NULL,
  `iddocumento` int(11) NOT NULL,
  PRIMARY KEY (`idmaestrodomaterigrupo`,`iddocumento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestroevualuamaestro`
--

CREATE TABLE IF NOT EXISTS `maestroevualuamaestro` (
  `idmaestro` int(11) NOT NULL,
  `idmaestroevalua` int(11) NOT NULL,
  `comentario` varchar(45) COLLATE big5_bin DEFAULT NULL,
  `calificacion` int(11) DEFAULT NULL,
  `idperiodo` int(11) NOT NULL,
  PRIMARY KEY (`idmaestro`,`idmaestroevalua`,`idperiodo`)
) ENGINE=InnoDB DEFAULT CHARSET=big5 COLLATE=big5_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestromateriagrupo`
--

CREATE TABLE IF NOT EXISTS `maestromateriagrupo` (
  `idmaestro` int(11) NOT NULL,
  `idmateria` int(11) NOT NULL,
  `idgrupo` int(11) NOT NULL,
  `idperiodo` int(11) NOT NULL,
  `idmaestromateriagrupo` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idmaestromateriagrupo`,`idmaestro`,`idperiodo`,`idgrupo`,`idmateria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE IF NOT EXISTS `materia` (
  `idmateria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` text,
  `idcarrera` int(11) NOT NULL,
  PRIMARY KEY (`idmateria`,`idcarrera`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivobaja`
--

CREATE TABLE IF NOT EXISTS `motivobaja` (
  `idmotivobaja` int(11) NOT NULL,
  `idalumno` int(11) NOT NULL,
  `motivo` varchar(500) DEFAULT NULL,
  `idautorizacion` int(11) NOT NULL,
  `idadministracion` int(11) NOT NULL,
  `fecha` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`idmotivobaja`,`idalumno`,`idadministracion`,`idautorizacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `idperfil` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  PRIMARY KEY (`idperfil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE IF NOT EXISTS `periodo` (
  `idperiodo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `clave` varchar(10) NOT NULL,
  PRIMARY KEY (`idperiodo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `periodo`
--

INSERT INTO `periodo` (`idperiodo`, `nombre`, `clave`) VALUES
(1, 'Periodo Septiembre-Diciembre', '201403');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibo`
--

CREATE TABLE IF NOT EXISTS `recibo` (
  `idrecibo` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(45) DEFAULT NULL,
  `idconcepto` int(11) NOT NULL,
  `referencia` varchar(45) DEFAULT NULL,
  `idadministrativo` int(11) NOT NULL,
  `costo` double DEFAULT NULL,
  `idalumno` int(11) NOT NULL,
  `idperiodo` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `descuentoaplicado` double DEFAULT NULL,
  PRIMARY KEY (`idrecibo`,`idconcepto`,`idadministrativo`,`idalumno`,`idperiodo`),
  UNIQUE KEY `codigo_UNIQUE` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `foto` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `usuario`, `password`, `correo`, `telefono`, `foto`) VALUES
(1, 'r9software', '0cc175b9c0f1b6a831c399e269772661', 'rodolfo.abarca@outlook.com', '5548164161', 'r9software2806.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
