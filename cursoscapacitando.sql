-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2015 a las 03:57:59
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cursoscapacitando`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `act`(IN `cod` INT, IN `nombre` VARCHAR(50), IN `horas` INT)
    NO SQL
BEGIN
UPDATE tblcursos
SET titulo_curso=nombre,
nhoras_curso=horas
WHERE codigo_curso = cod;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `comboEmpl`()
    NO SQL
BEGIN
SELECT * FROM tblcargo INNER JOIN tblempleado
on cod_empl_cargo=codempleado;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `comboPago`()
    NO SQL
BEGIN
SELECT * FROM tblformasdepago;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `combo_cargarcursos`()
    NO SQL
BEGIN 
select * from tblcursos;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarCurso`(IN `cod` INT)
    NO SQL
BEGIN
DELETE FROM tblcursos
WHERE codigo_curso=cod;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `grabarCliente`(IN `ced` VARCHAR(35), IN `nombres` VARCHAR(50), IN `edad` INT, IN `tel` INT, IN `dir` VARCHAR(60), IN `empl` VARCHAR(35), IN `pago` VARCHAR(35), IN `matri` VARCHAR(35), IN `curso` VARCHAR(35), IN `cel` INT)
    NO SQL
BEGIN
INSERT INTO tblcliente
VALUES(ced,nombres,edad,tel,
cel,dir,empl);
INSERT INTO tblmatricula(COD_MATRI,CEDCLIENTE_MATRI,COD_EMPL_MATRI,
COD_PAGO_MATRI)
VALUES(matri,ced,empl,pago);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `grabarempleado`(IN `cod` VARCHAR(30) CHARSET utf8, IN `doc` VARCHAR(20) CHARSET utf8, IN `nombre` VARCHAR(50) CHARSET utf8, IN `usu` VARCHAR(50) CHARSET utf8, IN `clave` VARCHAR(25) CHARSET utf8)
    NO SQL
BEGIN
INSERT INTO tblempleado (codempleado,nrodoc_empl,nombre_empl,usuario_prof,clave_prof)
VALUES(cod,doc,nombre,usu,clave);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertarCurso`(IN `nombre` VARCHAR(30), IN `horas` INT)
    NO SQL
BEGIN
INSERT INTO tblcursos(titulo_curso,nhoras_curso)
VALUES(nombre,horas);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `tablaCursos`()
    NO SQL
BEGIN
SELECT * FROM tblcursos;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `validarCedEmpl`(IN `ced` VARCHAR(50))
    NO SQL
BEGIN
SELECT nrodoc_empl FROM tblempleado WHERE nrodoc_empl=ced;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `validarCedula`(IN `ced` INT)
    NO SQL
BEGIN
SELECT Cedula_cli FROM tblcliente WHERE Cedula_cli=ced;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `validarCod`(IN `cod` INT)
    NO SQL
BEGIN
SELECT codigo_curso FROM tblcursos WHERE codigo_curso=cod;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `validarCodempl`(IN `codempl` VARCHAR(50))
    NO SQL
BEGIN
SELECT codempleado FROM tblempleado WHERE codempleado=codempl;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `validarCodMatri`(IN `cod` VARCHAR(30))
    NO SQL
BEGIN
SELECT cod_matri FROM tblmatricula WHERE cod_matri=cod;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcargo`
--

CREATE TABLE IF NOT EXISTS `tblcargo` (
  `codigo_cargo` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion_cargo` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `cod_empl_cargo` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblcargo`
--

INSERT INTO `tblcargo` (`codigo_cargo`, `descripcion_cargo`, `cod_empl_cargo`) VALUES
('10', 'Profesor', '1010'),
('20', 'SECRETARIA', '4040'),
('30', 'DECANO', '20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcliente`
--

CREATE TABLE IF NOT EXISTS `tblcliente` (
  `Cedula_cli` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre_cli` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `Edad_cli` int(4) NOT NULL,
  `Telefono_cli` int(20) DEFAULT NULL,
  `Celular_cli` int(20) NOT NULL,
  `Direccion_cli` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `cod_empl_cli` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblcliente`
--

INSERT INTO `tblcliente` (`Cedula_cli`, `Nombre_cli`, `Edad_cli`, `Telefono_cli`, `Celular_cli`, `Direccion_cli`, `cod_empl_cli`) VALUES
('', '', 0, 0, 0, '', ''),
('1', 'emienm', 19, 23432, 3454, 'calle 50', '10'),
('101723', 'juan esteban', 23, 48744, 12345, 'calle 50', '4322'),
('1017231', 'juan david', 19, 2343, 7665, 'calle 45', '10'),
('10172313', 'juan david', 21, 455, 35345, 'calle 50', '1010'),
('10945', 'angelica', 43, 2343, 3454, 'CALLLE', '10'),
('1433', 'Juan sebastian', 43, 23432, 876, 'calle 43', '10'),
('2', 'KAKA', 20, 3454, 345, 'calle 101 los pinos', '10'),
('2323', 'daniel', 32, 3454, 3454, 'calle 45', '10'),
('234', 'Juan sebastian', 34, 34, 3454, 'calle 50', '10'),
('24554', 'daniel', 34, 34, 345, 'calle 50', '10'),
('43540578', 'ESTELA DUQUE', 30, 8282158, 311388761, 'CALLE 101 LOS PINOS', '2020'),
('8787', 'juan', 2348, 23489, 877, 'calle 45', '10'),
('90876', 'Juan sebastian', 32, 23432, 3454, 'calle 45', '10'),
('950530', 'juan beckam', 12, 34534, 3455464, 'calle 4', '1010'),
('95053022687', 'vanelope', 11, 897630, 3115658, 'street 6666', '10'),
('980722356', 'ANA MARIA ZAPATA', 17, 5878870, 311356753, 'CALLE 45 AVENIDA LAS VEGAS', '1010'),
('98433', 'Juan sebastian', 43, 23432, 876, 'calle 43', '10'),
('9864', 'marco reus', 23, 23432, 3454, 'calle 50', '10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcursos`
--

CREATE TABLE IF NOT EXISTS `tblcursos` (
  `codigo_curso` int(11) NOT NULL,
  `titulo_curso` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `nhoras_curso` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblcursos`
--

INSERT INTO `tblcursos` (`codigo_curso`, `titulo_curso`, `nhoras_curso`) VALUES
(1, 'html5', 130),
(2, 'angular js', 31),
(4, 'Ruby on Rails', 221),
(5, 'Desarrollo en Angular js', 90),
(7, 'python', 300),
(9, 'django', 190),
(11, 'React js', 200),
(13, 'node js', 200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbldetallematricula`
--

CREATE TABLE IF NOT EXISTS `tbldetallematricula` (
  `COD_DETALLE` int(11) NOT NULL,
  `COD_MATRI_DETA` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `DESCRIPCION_DETMATRI` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `VALOR_MATRI_DETA` double NOT NULL,
  `ID_PROG_DETA` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbldetallematricula`
--

INSERT INTO `tbldetallematricula` (`COD_DETALLE`, `COD_MATRI_DETA`, `DESCRIPCION_DETMATRI`, `VALOR_MATRI_DETA`, `ID_PROG_DETA`) VALUES
(1, '1002', 'CURSO DE PROGRAMACION EN ANDROID', 190500, 1),
(2, '1003', 'BACKEND EN RUBY ON RAILS', 3000000, 2),
(3, '1003', 'FRONTEND', 260000, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblempleado`
--

CREATE TABLE IF NOT EXISTS `tblempleado` (
  `codempleado` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `nrodoc_empl` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_empl` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `fechaAnt_empl` datetime NOT NULL DEFAULT '2015-09-20 00:00:00',
  `usuario_prof` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `clave_prof` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblempleado`
--

INSERT INTO `tblempleado` (`codempleado`, `nrodoc_empl`, `nombre_empl`, `fechaAnt_empl`, `usuario_prof`, `clave_prof`) VALUES
('1', '1', 'juan esteban arcila', '2015-09-20 00:00:00', 'donald@gmail.com', '1212'),
('1010', '1017231329', 'JUAN DIEGO ZAPATA DUQUE', '2014-08-19 00:00:00', 'jdzapata', '123juan'),
('1111', '23424', 'david duque', '2015-09-20 00:00:00', 'c.hoyos@pascualbravo.edu.co', 'c.hoyos'),
('1221', '23403', 'esteban', '2015-09-20 00:00:00', 'donald@gmail.com', 'djdjdj'),
('2', '2', 'eminem', '2015-09-20 00:00:00', 'eminem@gmail.com', 'eminem'),
('2020', '71614817', 'CARLOS ALBERTO ZAPATA JIMENEZ', '2015-10-04 00:00:00', 'cajimenez', '123carlos'),
('234', '876', 'skjb', '2015-09-20 00:00:00', 'julianisaza712@hotmail.com', '345'),
('2343', '234234', 'bayron', '2015-09-20 00:00:00', 'bayronw', '2343'),
('234324', '230929', 'julian isaza', '2015-09-20 00:00:00', 'julianisaza712@hotmail.com', 'billete'),
('3030', '12022485', 'ANDRES BENAVIDES', '2015-10-25 00:00:00', 'abenavides', '1233andres'),
('3333', '3453453', 'donald trump', '2015-09-20 00:00:00', 'donald@gmail.com', 'donaldt'),
('3423', '32206911', 'angie', '2015-09-20 00:00:00', 'k.suaza@pascualbravo.edu.co', 'k.suaza'),
('34534', '32403249', 'julian charles', '2015-09-20 00:00:00', 'julianisaza712@hotmail.com', '23423'),
('4040', '33445556', 'KERLY SERNA', '2015-04-26 00:00:00', 'kerlyserna', '123kerly'),
('4345', '3453453', 'madona', '2015-09-20 00:00:00', 'c.hoyos@pascualbravo.edu.co', '90ko'),
('5050', '24234', 'angelica', '2015-09-20 00:00:00', 'anamariazapataduque@gmail.com', 'anazapata');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblformasdepago`
--

CREATE TABLE IF NOT EXISTS `tblformasdepago` (
  `CODIGO_PAGO` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `NOMBRE_PAGO` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `COD_EMPL_PAGO` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblformasdepago`
--

INSERT INTO `tblformasdepago` (`CODIGO_PAGO`, `NOMBRE_PAGO`, `COD_EMPL_PAGO`) VALUES
('1000', 'EFECTIVO', '1010'),
('2000', 'TCREDITO', '4040'),
('3000', 'TDEBITO', '3030'),
('4000', 'CHEQUE', '4040');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblmatricula`
--

CREATE TABLE IF NOT EXISTS `tblmatricula` (
  `cod_matri` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_matri` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cedcliente_matri` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `cod_empl_matri` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `cod_pago_matri` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblmatricula`
--

INSERT INTO `tblmatricula` (`cod_matri`, `fecha_matri`, `cedcliente_matri`, `cod_empl_matri`, `cod_pago_matri`) VALUES
('', '2015-11-06 11:13:14', '', '', ''),
('1', '2015-11-06 00:10:18', '1', '10', '1000'),
('1001', '2015-11-05 23:05:43', '24554', '10', '1000'),
('1003', '2015-10-23 11:55:04', '25431258', '4040', '4000'),
('1111', '2015-10-29 11:17:02', '95053022687', '10', '1000'),
('2092', '2015-10-28 23:47:49', '10172313', '1010', '1111'),
('22', '2015-11-05 22:55:41', '1', '10', '1000'),
('234235', '2015-11-06 11:58:58', '2323', '10', '1000'),
('2343', '2015-11-06 11:13:07', '9864', '10', '1000'),
('57', '2015-11-06 11:21:23', '234', '10', '1000'),
('666', '2015-11-04 23:47:00', '1010', '10', '1000'),
('8290', '2015-10-29 14:44:30', '1313', '10', '1000'),
('90', '2015-11-05 21:13:56', '4343', '10', '1000'),
('9087', '2015-10-28 23:31:39', '1017231', '10', '1000'),
('91', '2015-11-05 22:43:47', '98433', '10', '1000'),
('999', '2015-11-05 21:18:17', '5', '10', '1000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblprerrequisito`
--

CREATE TABLE IF NOT EXISTS `tblprerrequisito` (
  `cod_pre` int(11) NOT NULL,
  `descripcion_pre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `cod_curso_pre` int(11) NOT NULL,
  `cod_empl_pre` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblprerrequisito`
--

INSERT INTO `tblprerrequisito` (`cod_pre`, `descripcion_pre`, `cod_curso_pre`, `cod_empl_pre`) VALUES
(1, 'FRONTEND', 1, '1010'),
(2, 'Desarrollo de software', 5, '1010'),
(3, 'BASES DE DATOS', 6, '2020');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblprogramacion`
--

CREATE TABLE IF NOT EXISTS `tblprogramacion` (
  `ID_PROGR` int(11) NOT NULL,
  `NEDICION_PROGR` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `FECHA_PROGR` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `COD_EMPL_PROG` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `NRODOC_EMPL_PROG` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `COD_CURSO_PROG` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblprogramacion`
--

INSERT INTO `tblprogramacion` (`ID_PROGR`, `NEDICION_PROGR`, `FECHA_PROGR`, `COD_EMPL_PROG`, `NRODOC_EMPL_PROG`, `COD_CURSO_PROG`) VALUES
(1, '2015-2', '2015/07/08', '1010', '1017231329', 1),
(2, '2013-2', '2013/09/20', '2020', '71614817', 4),
(3, '2017-1', '2017/02/05', '4040', '33445556', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbltemas`
--

CREATE TABLE IF NOT EXISTS `tbltemas` (
  `cod_temas` int(11) NOT NULL,
  `descripcion_temas` varchar(4000) COLLATE utf8_spanish_ci NOT NULL,
  `cod_curso_temas` int(11) NOT NULL,
  `cod_empl_temas` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbltemas`
--

INSERT INTO `tbltemas` (`cod_temas`, `descripcion_temas`, `cod_curso_temas`, `cod_empl_temas`) VALUES
(1, 'POO,BD Y MVC PHP', 5, '1010'),
(2, 'POO, BASES DE DATOS EN SQL LITE, WREB SERVICES, NOTIFICACIONES PUSH Y\r\nUSO DEL HARDWARE(CAMARA,GPS)', 1, '3030');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblcargo`
--
ALTER TABLE `tblcargo`
  ADD PRIMARY KEY (`codigo_cargo`);

--
-- Indices de la tabla `tblcliente`
--
ALTER TABLE `tblcliente`
  ADD PRIMARY KEY (`Cedula_cli`);

--
-- Indices de la tabla `tblcursos`
--
ALTER TABLE `tblcursos`
  ADD PRIMARY KEY (`codigo_curso`);

--
-- Indices de la tabla `tbldetallematricula`
--
ALTER TABLE `tbldetallematricula`
  ADD PRIMARY KEY (`COD_DETALLE`);

--
-- Indices de la tabla `tblempleado`
--
ALTER TABLE `tblempleado`
  ADD PRIMARY KEY (`codempleado`);

--
-- Indices de la tabla `tblformasdepago`
--
ALTER TABLE `tblformasdepago`
  ADD PRIMARY KEY (`CODIGO_PAGO`);

--
-- Indices de la tabla `tblmatricula`
--
ALTER TABLE `tblmatricula`
  ADD PRIMARY KEY (`cod_matri`);

--
-- Indices de la tabla `tblprerrequisito`
--
ALTER TABLE `tblprerrequisito`
  ADD PRIMARY KEY (`cod_pre`);

--
-- Indices de la tabla `tblprogramacion`
--
ALTER TABLE `tblprogramacion`
  ADD PRIMARY KEY (`ID_PROGR`);

--
-- Indices de la tabla `tbltemas`
--
ALTER TABLE `tbltemas`
  ADD PRIMARY KEY (`cod_temas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblcursos`
--
ALTER TABLE `tblcursos`
  MODIFY `codigo_curso` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `tbldetallematricula`
--
ALTER TABLE `tbldetallematricula`
  MODIFY `COD_DETALLE` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tblprerrequisito`
--
ALTER TABLE `tblprerrequisito`
  MODIFY `cod_pre` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tblprogramacion`
--
ALTER TABLE `tblprogramacion`
  MODIFY `ID_PROGR` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbltemas`
--
ALTER TABLE `tbltemas`
  MODIFY `cod_temas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
