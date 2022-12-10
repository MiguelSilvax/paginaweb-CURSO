-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2022 a las 09:01:15
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemweb`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `registrarCliente` (IN `dni` VARCHAR(11), IN `nom` VARCHAR(40), IN `ap` VARCHAR(40), IN `usr` VARCHAR(30), IN `mail` VARCHAR(50), IN `clave` VARCHAR(30), IN `dir` TEXT, IN `tel` VARCHAR(9))  BEGIN
insert into login_cliente(DNI,Usuario,Mail,clave) values(dni,usr,mail,clave);
INSERT into cliente(DNI,Nombres,Apellidos,Direccion,Telefono) values (dni,nom,ap,dir,tel);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `DNI` varchar(11) COLLATE utf8mb4_bin NOT NULL,
  `Nombres` varchar(40) COLLATE utf8mb4_bin NOT NULL,
  `Apellidos` varchar(40) COLLATE utf8mb4_bin NOT NULL,
  `Direccion` text COLLATE utf8mb4_bin NOT NULL,
  `Telefono` varchar(9) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`DNI`, `Nombres`, `Apellidos`, `Direccion`, `Telefono`) VALUES
('75614825', 'yahaira', 'bejar', 'calle los alamos', '994856412');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `numero` char(9) DEFAULT NULL,
  `direccion` varchar(80) DEFAULT NULL,
  `asunto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `nombre`, `mail`, `numero`, `direccion`, `asunto`) VALUES
(1, 'miguel', 'miguel@mail.com', '98654321', 'los alamos', 'Saludos'),
(8, 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdadd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

CREATE TABLE `detalle_pedido` (
  `ID` int(11) NOT NULL,
  `ID_cliente` int(11) NOT NULL,
  `ID_pedido` int(11) NOT NULL,
  `monto_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_cliente`
--

CREATE TABLE `login_cliente` (
  `DNI` varchar(11) COLLATE utf8mb4_bin NOT NULL,
  `Usuario` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `Mail` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `clave` varchar(30) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `login_cliente`
--

INSERT INTO `login_cliente` (`DNI`, `Usuario`, `Mail`, `clave`) VALUES
('75610782', 'miguel', 'miguel@mail.com', 'cliente1'),
('75614825', 'yahaira', 'yaha@mail.com', 'cliente2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `ID` int(11) NOT NULL,
  `ID_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `ID` int(11) NOT NULL,
  `marca` varchar(40) COLLATE utf8mb4_bin NOT NULL,
  `sistema_operativo` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `modelo` varchar(30) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID_pedido` (`ID_pedido`),
  ADD KEY `ID_cliente` (`ID_cliente`);

--
-- Indices de la tabla `login_cliente`
--
ALTER TABLE `login_cliente`
  ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID_producto` (`ID_producto`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`DNI`) REFERENCES `login_cliente` (`DNI`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
