-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2019 a las 04:39:57
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
  `idmedida` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `iddepartamento` int(11) NOT NULL,
  `departamento` varchar(50) DEFAULT NULL,
  `idmunicipio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medida`
--

CREATE TABLE `medida` (
  `idmedida` int(11) NOT NULL,
  `medida` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `idmunicipio` int(11) NOT NULL,
  `municipio` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planta`
--

CREATE TABLE `planta` (
  `idplanta` int(11) NOT NULL,
  `planta` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `idusuario` int(11) DEFAULT NULL
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
  ADD PRIMARY KEY (`idmunicipio`);

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
  ADD KEY `fkidregion` (`idregion`),
  ADD KEY `fkiddetallevale` (`iddetallevale`),
  ADD KEY `fkidrechazo` (`idrechazo`),
  ADD KEY `fkidusuario` (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoriaprecio`
--
ALTER TABLE `categoriaprecio`
  MODIFY `idcatprecio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `iddepartamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detallevale`
--
ALTER TABLE `detallevale`
  MODIFY `iddetallevale` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `invernadero`
--
ALTER TABLE `invernadero`
  MODIFY `idinvernadero` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `medida`
--
ALTER TABLE `medida`
  MODIFY `idmedida` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `idmunicipio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `planta`
--
ALTER TABLE `planta`
  MODIFY `idplanta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `idprovee` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `idtipouser` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `fkiddetallevale` FOREIGN KEY (`iddetallevale`) REFERENCES `detallevale` (`iddetallevale`),
  ADD CONSTRAINT `fkidprovee` FOREIGN KEY (`idprovee`) REFERENCES `proveedor` (`idprovee`),
  ADD CONSTRAINT `fkidrechazo` FOREIGN KEY (`idrechazo`) REFERENCES `rechazo` (`idrechazo`),
  ADD CONSTRAINT `fkidregion` FOREIGN KEY (`idregion`) REFERENCES `region` (`idregion`),
  ADD CONSTRAINT `fkidusuario` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
