-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2019 a las 06:17:40
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aloeverapalki`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoriaprecio`
--

CREATE TABLE `categoriaprecio` (
  `idcatprecio` int(11) NOT NULL,
  `categoriaprecio` varchar(50) DEFAULT NULL,
  `idmedida` int(11) DEFAULT NULL,
  `valor` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoriaprecio`
--

INSERT INTO `categoriaprecio` (`idcatprecio`, `categoriaprecio`, `idmedida`, `valor`) VALUES
(1, 'Minorista', 1, 0.45);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `iddepartamento` int(11) NOT NULL,
  `departamento` varchar(50) DEFAULT NULL,
  `idmunicipio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`iddepartamento`, `departamento`, `idmunicipio`) VALUES
(1, 'GUATEMALA', NULL),
(2, 'GUATEMALA', NULL),
(3, 'EL PROGRESO', NULL),
(4, 'EL PROGRESO', NULL),
(5, 'SACATEPEQUEZ', NULL),
(6, 'SACATEPEQUEZ', NULL),
(7, 'CHIMALTENANGO', NULL),
(8, 'CHIMALTENANGO', NULL),
(9, 'ESCUINTLA', NULL),
(10, 'ESCUINTLA', NULL),
(11, 'SANTA ROSA', NULL),
(12, 'SANTA ROSA', NULL),
(13, 'SOLOLA', NULL),
(14, 'SOLOLA', NULL),
(15, 'TOTONICAPAN', NULL),
(16, 'TOTONICAPAN', NULL),
(17, 'QUETZALTENANGO', NULL),
(18, 'QUETZALTENANGO', NULL),
(19, 'SUCHITEPEQUEZ', NULL),
(20, 'SUCHITEPEQUEZ', NULL),
(21, 'RETALHULEU', NULL),
(22, 'RETALHULEU', NULL),
(23, 'SAN MARCOS', NULL),
(24, 'SAN MARCOS', NULL),
(25, 'HUEHUETENANGO', NULL),
(26, 'HUEHUETENANGO', NULL),
(27, 'QUICHE', NULL),
(28, 'QUICHE', NULL),
(29, 'BAJA VERAPÁZ', NULL),
(30, 'BAJA VERAPÁZ', NULL),
(31, 'ALTA VERAPÁZ', NULL),
(32, 'ALTA VERAPÁZ', NULL),
(33, 'PETEN', NULL),
(34, 'PETEN', NULL),
(35, 'IZABAL', NULL),
(36, 'IZABAL', NULL),
(37, 'ZACAPA', NULL),
(38, 'ZACAPA', NULL),
(39, 'CHIQUIMULA', NULL),
(40, 'CHIQUIMULA', NULL),
(41, 'JALAPA', NULL),
(42, 'JALAPA', NULL),
(43, 'JUTIAPA', NULL),
(44, 'JUTIAPA', NULL),
(45, 'MEXICO', NULL),
(46, 'MEXICO', NULL),
(47, 'HONDURAS', NULL),
(48, 'HONDURAS', NULL),
(49, 'EL SALVADOR', NULL),
(50, 'EL SALVADOR', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallevale`
--

CREATE TABLE `detallevale` (
  `iddetallevale` int(11) NOT NULL,
  `numvale` int(11) DEFAULT NULL,
  `idmedida` int(11) DEFAULT NULL,
  `idinvernadero` int(11) DEFAULT NULL,
  `idcatprecio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invernadero`
--

CREATE TABLE `invernadero` (
  `idinvernadero` int(11) NOT NULL,
  `invernadero` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `invernadero`
--

INSERT INTO `invernadero` (`idinvernadero`, `invernadero`) VALUES
(1, 'Principal/Central');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medida`
--

CREATE TABLE `medida` (
  `idmedida` int(11) NOT NULL,
  `medida` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medida`
--

INSERT INTO `medida` (`idmedida`, `medida`) VALUES
(1, '6 cms');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `idmunicipio` int(11) NOT NULL,
  `municipio` varchar(50) DEFAULT NULL,
  `iddepartamento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`idmunicipio`, `municipio`, `iddepartamento`) VALUES
(1, 'GUATEMALA', 1),
(2, 'SANTA CATARINA PINULA', 1),
(3, 'SAN JOSÉ PINULA', 1),
(4, 'SAN JOSÉ DEL GOLFO', 1),
(5, 'PALENCIA', 1),
(6, 'CHINAUTLA', 1),
(7, 'SAN PEDRO AYMPUC', 1),
(8, 'MIXCO', 1),
(9, 'SAN PEDRO SACATEPEQUEZ', 1),
(10, 'SAN JUAN SACATEPEQUEZ', 1),
(11, 'SAN RAYMUNDO', 1),
(12, 'CHUARRANCHO', 1),
(13, 'FRAIJANES', 1),
(14, 'AMATITLÁN', 1),
(15, 'VILLA NUEVA', 1),
(16, 'VILLA CANALES', 1),
(17, 'PETAPA', 1),
(18, 'GUASTATOYA', 2),
(19, 'MORAZÁN', 2),
(20, 'SAN AGUSTÍN ACASAGUASTLÁN', 2),
(21, 'SAN CRISTOBAL ACASAGUASTLÁN', 2),
(22, 'EL JÍCARO', 2),
(23, 'SANSARE', 2),
(24, 'SANARATE', 2),
(25, 'SAN ANTONIO LA PAZ', 2),
(26, 'ANTIGUA GUATEMALA', 3),
(27, 'JOCOTENANGO', 3),
(28, 'PASTORES', 3),
(29, 'SUMPANGO', 3),
(30, 'SANTO DOMINGO XENACOJ', 3),
(31, 'SANTIAGO SACATEPEQUEZ', 3),
(32, 'SAN BARTOLOME MILPAS ALTAS', 3),
(33, 'SAN LUCAS SACATEPEQUEZ', 3),
(34, 'SANTA LUCIA MILPAS ALTAS', 3),
(35, 'MAGDALENA MILPAS ALTAS', 3),
(36, 'SANTA MARIA DE JESUS', 3),
(37, 'CIUDAD VIEJA', 3),
(38, 'SAN MIGUEL DUEÑAS', 3),
(39, 'ALOTENANGO', 3),
(40, 'SAN ANTONIO AGUAS CALIENTES', 3),
(41, 'SANTA CATARINA BARAHONA', 3),
(42, 'CHIMALTENANGO', 4),
(43, 'SAN JOSE POAQUIL', 4),
(44, 'SAN MARTIN JILOTEPEQUE', 4),
(45, 'COPMALAPA', 4),
(46, 'SANTA APOLONIA', 4),
(47, 'TECPAN GUATEMALA', 4),
(48, 'PATZUN', 4),
(49, 'POCHUTA', 4),
(50, 'PATZICIA', 4),
(51, 'SANTA CRUZ BALANYA', 4),
(52, 'ACATENANGO', 4),
(53, 'YEPOCAPA', 4),
(54, 'SAN ANDRES ITZAPA', 4),
(55, 'PARRAMOS', 4),
(56, 'ZARAGOZA', 4),
(57, 'EL TEJAR', 4),
(58, 'ESCUINTLA', 5),
(59, 'SANTA LUCIA COTZUMALGUAPA', 5),
(60, 'LA DEMOCRACIA', 5),
(61, 'SIQUINALA', 5),
(62, 'MASAGUA', 5),
(63, 'TIQUISATE', 5),
(64, 'LA GOMERA', 5),
(65, 'GUANAGAZAPA', 5),
(66, 'SAN JOSE', 5),
(67, 'IZTAPA', 5),
(68, 'PALIN', 5),
(69, 'SAN VICENTE PACAYA', 5),
(70, 'NUEVA CONCEPCION', 5),
(71, 'CUILAPA', 6),
(72, 'BARBERENA', 6),
(73, 'SANTA ROSA DE LIMA', 6),
(74, 'CASILLAS - AYARZA', 6),
(75, 'SAN RAFAEL LAS FLORES', 6),
(76, 'ORATORIO', 6),
(77, 'SAN JUAN TECUACO', 6),
(78, 'CHIQUIMULILLA', 6),
(79, 'TAXISCO', 6),
(80, 'SANTA MARÍA IXHUATÁN', 6),
(81, 'GUAZACAPÁN', 6),
(82, 'SANTA CRUZ NARANJO', 6),
(83, 'PUEBLO NUEVO VIÑAS', 6),
(84, 'NUEVA SANTA ROSA', 6),
(85, 'SOLOLA', 7),
(86, 'SAN JOSE CHACAYA', 7),
(87, 'SANTA MARIA VISITACION', 7),
(88, 'SANTA LUCIA UTATLAN', 7),
(89, 'NAHUALA', 7),
(90, 'SANTA CATARINA IXTAHUACAN', 7),
(91, 'SANTA CLARA LA LAGUNA', 7),
(92, 'CONCEPCION', 7),
(93, 'SAN ANDRES SEMETABAJ', 7),
(94, 'PANAJACHEL', 7),
(95, 'SANTA CARARINA PALOPO', 7),
(96, 'SAN ANTONIO PALOPO', 7),
(97, 'SAN LUCAS TOLIMAN', 7),
(98, 'SANTA CRUZ LA LAGUNA', 7),
(99, 'SAN PABLO LA LAGUNA', 7),
(100, 'SAN MARCOS LA LAGUNA', 7),
(101, 'SAN JUAN LA LAGUNA', 7),
(102, 'SAN PEDRO LA LAGUNA', 7),
(103, 'SANTIAGO ATITLAN', 7),
(104, 'TOTONICAPAN', 8),
(105, 'SAN CRISTOBAL TOTONICAPAN', 8),
(106, 'SAN FRANCISCO EL ALTO', 8),
(107, 'SAN ANDRES XECUL', 8),
(108, 'MOMOSTENANGO', 8),
(109, 'SANTA MARIA CHIQUIMULA', 8),
(110, 'SANTA LUCIA LA REFORMA', 8),
(111, 'SAN BARTOLO', 8),
(112, 'QUETZALTENANGO', 9),
(113, 'SALCAJA', 9),
(114, 'OLINTEPEQUE', 9),
(115, 'SAN CARLOS SIJA', 9),
(116, 'SIBILIA', 9),
(117, 'CABRICAN', 9),
(118, 'CAJOLA', 9),
(119, 'SAN MIGUEL SIGUILA', 9),
(120, 'OSTUNCALCO', 9),
(121, 'SAN MATEO', 9),
(122, 'CONCEPCION CHIQUIRICHAPA', 9),
(123, 'SAN MARTIN SACATEPEQUEZ', 9),
(124, 'ALMOLONGA', 9),
(125, 'CANTEL', 9),
(126, 'HUITAN', 9),
(127, 'ZUNIL', 9),
(128, 'COLOMBA', 9),
(129, 'SAN FRANCISCO LA UNION', 9),
(130, 'EL PALMAR', 9),
(131, 'COATEPEQUE', 9),
(132, 'GENOVA', 9),
(133, 'FLORES COSTA CUCA', 9),
(134, 'LA ESPERANZA', 9),
(135, 'PALESTINA DE LOS ALTOS', 9),
(136, 'MAZATENANGO', 1),
(137, 'CUYOTENANGO', 1),
(138, 'SAN FRANCISCO ZAPOTITLAN', 1),
(139, 'SAN BERNARDINO', 1),
(140, 'SAN JOSE EL IDOLO', 1),
(141, 'SANTO DOMINGO SUCHITEPEQUEZ', 1),
(142, 'SAN LORENZO', 1),
(143, 'SAMAYAC', 1),
(144, 'SAN PABLO JOCOPILAS', 1),
(145, 'SAN ANTONIO SUCHITEPEQUEZ', 1),
(146, 'SAN MIGUEL PANAN', 1),
(147, 'SAN GABRIEL', 1),
(148, 'CHICACAO', 1),
(149, 'PATULUL', 1),
(150, 'SANTA BARBARA', 1),
(151, 'SAN JUAN BAUTISTA', 1),
(152, 'SANTO TOMAS LA UNION', 1),
(153, 'ZUNILITO', 1),
(154, 'PUEBO NUEVO', 1),
(155, 'RIO BRAVO', 1),
(156, 'RETALHULEU', 1),
(157, 'SAN SEBASTIAN', 1),
(158, 'SANTA CRUZ MULUA', 1),
(159, 'SAN MARTIN ZAPOTITLAN', 1),
(160, 'SAN FELIPE', 1),
(161, 'SAN ANDRES VILLA SECA', 1),
(162, 'CHAMPERICO', 1),
(163, 'NUEVO SAN CARLOS', 1),
(164, 'EL ASINTAL', 1),
(165, 'SAN MARCOS', 1),
(166, 'SAN PEDRO SACATEPEQUEZ', 1),
(167, 'SAN ANTONIO SACATEPEQUEZ', 1),
(168, 'COMITANCILLO', 1),
(169, 'SAN MIGUEL IXTAHUACAN', 1),
(170, 'CONCEPCION TUTAPA', 1),
(171, 'TACAPA', 1),
(172, 'SIBINAL', 1),
(173, 'TAJUMULCO', 1),
(174, 'TEJUTLA', 1),
(175, 'SAN RAFAEL PIE DE LA CUESTA', 1),
(176, 'NUEVO PROGRESO', 1),
(177, 'EL TUMBADOR', 1),
(178, 'EL RODEO', 1),
(179, 'MALACATAN', 1),
(180, 'CATARINA', 1),
(181, 'AYUTLA', 1),
(182, 'OCOS', 1),
(183, 'SAN PABLO', 1),
(184, 'EL QUETZAL', 1),
(185, 'LA REFORMA', 1),
(186, 'PAJAPITA', 1),
(187, 'IXCHIGUAN', 1),
(188, 'SAN JOSE OJETENAM', 1),
(189, 'SAN CRISTOBAL CUCHO', 1),
(190, 'SIPACAPA', 1),
(191, 'ESUIPULAS PALO GORDO', 1),
(192, 'RIO BLANCO', 1),
(193, 'SAN LORENZO', 1),
(194, 'HUEHUETENANGO', 1),
(195, 'CHIANTLA', 1),
(196, 'MALACATANCITO', 1),
(197, 'CUILCO', 1),
(198, 'NETON', 1),
(199, 'SAN PEDRO NECTA', 1),
(200, 'JACALTENANGO', 1),
(201, 'SOLOMA', 1),
(202, 'IXTAHUACAN', 1),
(203, 'SANTA BARBARA', 1),
(204, 'LA LIBERTAD', 1),
(205, 'LA DEMOCRACIA', 1),
(206, 'SAN MIHUEL ACATAN', 1),
(207, 'SAN RAFAEL LA INDEPENDENCIA', 1),
(208, 'TODOS SANTOS CUCHUMATAN', 1),
(209, 'SAN JUAN ATITAN', 1),
(210, 'SANTA EULALIA', 1),
(211, 'SAN MATEO IXTATAN', 1),
(212, 'COLOTENANGO', 1),
(213, 'SAN SEBASTIAN HUEHUETENANGO', 1),
(214, 'TECTITAN', 1),
(215, 'CONCEPCION', 1),
(216, 'SAN JUAN IXCOY', 1),
(217, 'SAN ANTONIO HUISTA', 1),
(218, 'SAN SEBASTIAN COATAN', 1),
(219, 'BARILLAS', 1),
(220, 'AGUACATAN', 1),
(221, 'SAN RAFAEL PETZAL', 1),
(222, 'SAN GASPAR IXCHIL', 1),
(223, 'SANTIAGO CHIMALTENANGO', 1),
(224, 'SANTA ANA HUISTA', 1),
(225, 'UNION CANTINIL', 1),
(226, 'SANTA CRUZ DEL QUICHE', 1),
(227, 'CHICHE', 1),
(228, 'CHINIQUE', 1),
(229, 'ZACUALPA', 1),
(230, 'CHAJUL', 1),
(231, 'CHICHICASTENANGO', 1),
(232, 'PATZITE', 1),
(233, 'SAN ANTONIO LLOTENANGO', 1),
(234, 'SAN PEDRO JOCOPILAS', 1),
(235, 'CUNEN', 1),
(236, 'SAN JUAN COTZAL', 1),
(237, 'JOYABAJ', 1),
(238, 'NEBAJ', 1),
(239, 'SAN ANDRES SAJCABAJA', 1),
(240, 'USPANTAN', 1),
(241, 'SACAPULAS', 1),
(242, 'SAN BARTOLOME JOCOTENANGO', 1),
(243, 'CANILLA', 1),
(244, 'CHICAMAN', 1),
(245, 'IXCAN', 1),
(246, 'PACHALUM', 1),
(247, 'SALAMÁ', 1),
(248, 'SAN MIGUEL CHICAJ', 1),
(249, 'RABINAL', 1),
(250, 'CUBULCO', 1),
(251, 'GRANADOS', 1),
(252, 'EL CHOL', 1),
(253, 'SAN JERÓNIMO', 1),
(254, 'PURULHÁ', 1),
(255, 'COBÁN', 1),
(256, 'SANTA CRUZ VERAPÁZ', 1),
(257, 'SAN CRISTÓBAL VERAPÁZ', 1),
(258, 'TACTIC', 1),
(259, 'TAMAHÚ', 1),
(260, 'TUCURÚ', 1),
(261, 'PANZÓS', 1),
(262, 'SENAHÚ', 1),
(263, 'SAN PEDRO CARCHÁ', 1),
(264, 'SAN JUAN CHAMELCO', 1),
(265, 'LANQUÍN', 1),
(266, 'CAHABÓN', 1),
(267, 'CHISEC', 1),
(268, 'CHAHAL', 1),
(269, 'FRAY BARTOLOMÉ DE LAS CASAS', 1),
(270, 'SANTA CATALINA LA TINTA', 1),
(271, 'FLORES', 1),
(272, 'SAN JOSE', 1),
(273, 'SAN BINITO', 1),
(274, 'SAN ANDRES', 1),
(275, 'LA LIBERTAD', 1),
(276, 'SAN FRANCISCO', 1),
(277, 'SANTA ANA', 1),
(278, 'DOLORES', 1),
(279, 'SAN LUIS', 1),
(280, 'SAYAXCHE', 1),
(281, 'MELCHOR DE MENCOS', 1),
(282, 'POPTUN', 1),
(283, 'PUERTO BARRIOS', 1),
(284, 'LIVINGSTON', 1),
(285, 'EL ESTOR', 1),
(286, 'MORALES', 1),
(287, 'LOS AMATES', 1),
(288, 'ZACAPA', 1),
(289, 'ESTANZUELA', 1),
(290, 'RÍO HONDO', 1),
(291, 'GUALÁN', 1),
(292, 'TECULUTÁN', 1),
(293, 'USUMATLÁN', 1),
(294, 'CABAÑAS', 1),
(295, 'SAN DIEGO', 1),
(296, 'LA UNIÓN', 1),
(297, 'HUITÉ', 1),
(298, 'CHIQUIMULA', 2),
(299, 'SAN JOSÉ LA ARADA', 2),
(300, 'SAN JUAN ERMITA', 2),
(301, 'JOCOTÁN', 2),
(302, 'CAMOTÁN', 2),
(303, 'OLOPA', 2),
(304, 'ESQUIPULAS', 2),
(305, 'CONCEPCIÓN LAS MINAS', 2),
(306, 'QUETZALTEPEQUE', 2),
(307, 'SAN JACINTO', 2),
(308, 'IPALA', 2),
(309, 'JALAPA', 2),
(310, 'SAN PEDRO PINULA', 2),
(311, 'SAN LUIS JILOTEPEQUE', 2),
(312, 'SAN MANUEL CHAPARRÓN', 2),
(313, 'SAN CARLOS ALZATATE', 2),
(314, 'MONJAS', 2),
(315, 'MATAQUESCUINTLA', 2),
(316, 'JUTIAPA', 2),
(317, 'EL PROGRESO', 2),
(318, 'SANTA CATARINA MITA', 2),
(319, 'AGUA BLANCA', 2),
(320, 'ASUNCIÓN MITA', 2),
(321, 'YUPILTEPEQUE', 2),
(322, 'ATESCATEMPA', 2),
(323, 'JERÉZ', 2),
(324, 'EL ADELANTO', 2),
(325, 'ZAPOTITLÁN', 2),
(326, 'COMAPA', 2),
(327, 'JALPATAGUA', 2),
(328, 'CONGUACO', 2),
(329, 'MOYUTA', 2),
(330, 'PASACO', 2),
(331, 'SAN JOSÉ ACATEMPA', 2),
(332, 'QUEZADA', 2),
(333, 'MEXICO', 2),
(334, 'HONDURAS', 2),
(335, 'EL SALVADOR', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planta`
--

CREATE TABLE `planta` (
  `idplanta` int(11) NOT NULL,
  `planta` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `planta`
--

INSERT INTO `planta` (`idplanta`, `planta`) VALUES
(1, 'Aloe Vera'),
(2, 'Euphorbias');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `idprovee` int(11) NOT NULL,
  `nombre1` varchar(50) DEFAULT NULL,
  `nombre2` varchar(50) DEFAULT NULL,
  `apellido1` varchar(50) DEFAULT NULL,
  `apellido2` varchar(50) DEFAULT NULL,
  `nit` varchar(20) NOT NULL DEFAULT 'NULL',
  `dpi` varchar(20) NOT NULL DEFAULT 'NULL',
  `direccion` varchar(50) DEFAULT NULL,
  `iddepartamento` int(11) DEFAULT NULL,
  `idmunicipio` int(11) DEFAULT NULL,
  `telefono1` varchar(10) DEFAULT NULL,
  `telefono2` varchar(10) DEFAULT NULL,
  `idcatprecio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rechazo`
--

CREATE TABLE `rechazo` (
  `idrechazo` int(11) NOT NULL,
  `rechazo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE `region` (
  `idregion` int(11) NOT NULL,
  `region` varchar(50) DEFAULT NULL,
  `iddepartamento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `idtipouser` int(11) NOT NULL,
  `usuario` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`idtipouser`, `usuario`) VALUES
(1, 'Administrador'),
(2, 'OperadorDigitador'),
(3, 'Analista Compra'),
(4, 'DespachadorExportacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre1` varchar(50) DEFAULT NULL,
  `nombre2` varchar(50) DEFAULT NULL,
  `apellido1` varchar(50) DEFAULT NULL,
  `apellido2` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contrasena` varchar(8) DEFAULT NULL,
  `imagen` varchar(60) DEFAULT NULL,
  `idtipouser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `username`, `email`, `contrasena`, `imagen`, `idtipouser`) VALUES
(1, 'Caleb', 'Humberto', 'Loarca', 'Morales', 'cloarca', 'caleb@palki.com.gt', 'admin', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vale`
--

CREATE TABLE `vale` (
  `numvale` int(11) NOT NULL,
  `fechacompra` date DEFAULT NULL,
  `pedido` varchar(5) DEFAULT NULL,
  `idprovee` int(11) DEFAULT NULL,
  `idregion` int(11) DEFAULT NULL,
  `iddetallevale` int(11) DEFAULT NULL,
  `idrechazo` int(11) DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL,
  `idplanta` int(11) DEFAULT NULL,
  `iddepartamento` int(11) DEFAULT NULL,
  `idmunicipio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoriaprecio`
--
ALTER TABLE `categoriaprecio`
  ADD PRIMARY KEY (`idcatprecio`),
  ADD KEY `fkidmedida` (`idmedida`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`iddepartamento`),
  ADD KEY `fkidmunicipio` (`idmunicipio`);

--
-- Indices de la tabla `detallevale`
--
ALTER TABLE `detallevale`
  ADD PRIMARY KEY (`iddetallevale`),
  ADD KEY `fkidmedida2` (`idmedida`),
  ADD KEY `fkidinver` (`idinvernadero`),
  ADD KEY `fkcatprecio` (`idcatprecio`);

--
-- Indices de la tabla `invernadero`
--
ALTER TABLE `invernadero`
  ADD PRIMARY KEY (`idinvernadero`);

--
-- Indices de la tabla `medida`
--
ALTER TABLE `medida`
  ADD PRIMARY KEY (`idmedida`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`idmunicipio`),
  ADD KEY `fkiddepartamento3` (`iddepartamento`);

--
-- Indices de la tabla `planta`
--
ALTER TABLE `planta`
  ADD PRIMARY KEY (`idplanta`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idprovee`),
  ADD KEY `fkiddepto2` (`iddepartamento`),
  ADD KEY `fkidmuni2` (`idmunicipio`),
  ADD KEY `fkidcatprecio2` (`idcatprecio`);

--
-- Indices de la tabla `rechazo`
--
ALTER TABLE `rechazo`
  ADD PRIMARY KEY (`idrechazo`);

--
-- Indices de la tabla `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`idregion`),
  ADD KEY `fkidepto` (`iddepartamento`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`idtipouser`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `fkidtipouser` (`idtipouser`);

--
-- Indices de la tabla `vale`
--
ALTER TABLE `vale`
  ADD PRIMARY KEY (`numvale`),
  ADD KEY `fkidprovee` (`idprovee`),
  ADD KEY `fkiddetallevale` (`iddetallevale`),
  ADD KEY `fkidrechazo` (`idrechazo`),
  ADD KEY `fkidusuario` (`idusuario`),
  ADD KEY `fkipplanta` (`idplanta`),
  ADD KEY `fkiddepartamento2` (`iddepartamento`),
  ADD KEY `fkidmunicipio2` (`idmunicipio`),
  ADD KEY `idregion` (`idregion`),
  ADD KEY `idregion_2` (`idregion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoriaprecio`
--
ALTER TABLE `categoriaprecio`
  MODIFY `idcatprecio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `iddepartamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `detallevale`
--
ALTER TABLE `detallevale`
  MODIFY `iddetallevale` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `invernadero`
--
ALTER TABLE `invernadero`
  MODIFY `idinvernadero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `medida`
--
ALTER TABLE `medida`
  MODIFY `idmedida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `idmunicipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=336;

--
-- AUTO_INCREMENT de la tabla `planta`
--
ALTER TABLE `planta`
  MODIFY `idplanta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `idprovee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=715;

--
-- AUTO_INCREMENT de la tabla `rechazo`
--
ALTER TABLE `rechazo`
  MODIFY `idrechazo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `region`
--
ALTER TABLE `region`
  MODIFY `idregion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `idtipouser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `vale`
--
ALTER TABLE `vale`
  MODIFY `numvale` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categoriaprecio`
--
ALTER TABLE `categoriaprecio`
  ADD CONSTRAINT `fkidmedida` FOREIGN KEY (`idmedida`) REFERENCES `medida` (`idmedida`);

--
-- Filtros para la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD CONSTRAINT `fkidmunicipio` FOREIGN KEY (`idmunicipio`) REFERENCES `municipio` (`idmunicipio`);

--
-- Filtros para la tabla `detallevale`
--
ALTER TABLE `detallevale`
  ADD CONSTRAINT `fkcatprecio` FOREIGN KEY (`idcatprecio`) REFERENCES `categoriaprecio` (`idcatprecio`),
  ADD CONSTRAINT `fkidinver` FOREIGN KEY (`idinvernadero`) REFERENCES `invernadero` (`idinvernadero`),
  ADD CONSTRAINT `fkidmedida2` FOREIGN KEY (`idmedida`) REFERENCES `medida` (`idmedida`);

--
-- Filtros para la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD CONSTRAINT `fkiddepartamento3` FOREIGN KEY (`iddepartamento`) REFERENCES `departamento` (`iddepartamento`);

--
-- Filtros para la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD CONSTRAINT `fkidcatprecio2` FOREIGN KEY (`idcatprecio`) REFERENCES `categoriaprecio` (`idcatprecio`),
  ADD CONSTRAINT `fkiddepto2` FOREIGN KEY (`iddepartamento`) REFERENCES `departamento` (`iddepartamento`),
  ADD CONSTRAINT `fkidmuni2` FOREIGN KEY (`idmunicipio`) REFERENCES `municipio` (`idmunicipio`);

--
-- Filtros para la tabla `region`
--
ALTER TABLE `region`
  ADD CONSTRAINT `fkidepto` FOREIGN KEY (`iddepartamento`) REFERENCES `departamento` (`iddepartamento`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fkidtipouser` FOREIGN KEY (`idtipouser`) REFERENCES `tipousuario` (`idtipouser`);

--
-- Filtros para la tabla `vale`
--
ALTER TABLE `vale`
  ADD CONSTRAINT `fkiddepartamento2` FOREIGN KEY (`iddepartamento`) REFERENCES `departamento` (`iddepartamento`),
  ADD CONSTRAINT `fkiddetallevale` FOREIGN KEY (`iddetallevale`) REFERENCES `detallevale` (`iddetallevale`),
  ADD CONSTRAINT `fkidmunicipio2` FOREIGN KEY (`idmunicipio`) REFERENCES `municipio` (`idmunicipio`),
  ADD CONSTRAINT `fkidprovee` FOREIGN KEY (`idprovee`) REFERENCES `proveedor` (`idprovee`),
  ADD CONSTRAINT `fkidrechazo` FOREIGN KEY (`idrechazo`) REFERENCES `rechazo` (`idrechazo`),
  ADD CONSTRAINT `fkidregion` FOREIGN KEY (`idregion`) REFERENCES `region` (`idregion`),
  ADD CONSTRAINT `fkidusuario` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`),
  ADD CONSTRAINT `fkipplanta` FOREIGN KEY (`idplanta`) REFERENCES `planta` (`idplanta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
