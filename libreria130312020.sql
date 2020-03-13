-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-03-2020 a las 12:01:14
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `libreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casaeditorial`
--

CREATE TABLE `casaeditorial` (
  `id_casaEditorial` bigint(20) NOT NULL,
  `Clavecasedit` varchar(8) NOT NULL,
  `Desccasedit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `casaeditorial`
--

INSERT INTO `casaeditorial` (`id_casaEditorial`, `Clavecasedit`, `Desccasedit`) VALUES
(1, '123', 'Editorial Bersunsa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_claveCliente` bigint(8) NOT NULL,
  `Razsocial` varchar(50) NOT NULL,
  `Apepat` varchar(30) NOT NULL,
  `Apemat` varchar(30) NOT NULL,
  `Nombre` varchar(35) NOT NULL,
  `Domicilio` varchar(35) NOT NULL,
  `Codpostal` varchar(5) NOT NULL,
  `Municipio` varchar(30) NOT NULL,
  `Colonia` varchar(30) NOT NULL,
  `Estado` varchar(30) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `RFC` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Fecalta` date NOT NULL,
  `Fecultventa` date NOT NULL,
  `Diascre` int(3) NOT NULL,
  `Limitecre` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descuentos`
--

CREATE TABLE `descuentos` (
  `id_descuento` bigint(20) NOT NULL,
  `TipoDesc` varchar(8) NOT NULL,
  `Tipocli` varchar(8) NOT NULL,
  `Descuento` int(3) NOT NULL,
  `Usralta` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devolucion`
--

CREATE TABLE `devolucion` (
  `id_devolucion` int(11) NOT NULL,
  `fk_emtrada_detalle` bigint(20) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fechaDevolucion` date NOT NULL,
  `quien` int(11) NOT NULL,
  `dinero` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `devolucion`
--

INSERT INTO `devolucion` (`id_devolucion`, `fk_emtrada_detalle`, `cantidad`, `fechaDevolucion`, `quien`, `dinero`) VALUES
(2, 6, 10, '2020-03-01', 6, '2311.22'),
(3, 7, 1, '2020-03-01', 6, '100.00'),
(4, 6, 2, '2020-03-01', 6, '2311.22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE `entradas` (
  `id_entrada` bigint(20) NOT NULL,
  `ClaveEnt` varchar(55) NOT NULL,
  `Fecrecepcion` date NOT NULL,
  `Fecenvio` date NOT NULL,
  `Totalfac` int(15) NOT NULL,
  `Referencia` varchar(30) NOT NULL,
  `Clavetipent` bigint(20) NOT NULL,
  `Observaciones` varchar(60) NOT NULL,
  `Claveprov` bigint(10) NOT NULL,
  `Usrrecibio` varchar(10) NOT NULL,
  `Fecfiniquito` date NOT NULL,
  `fecfinconsigna` date NOT NULL,
  `Usralta` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `entradas`
--

INSERT INTO `entradas` (`id_entrada`, `ClaveEnt`, `Fecrecepcion`, `Fecenvio`, `Totalfac`, `Referencia`, `Clavetipent`, `Observaciones`, `Claveprov`, `Usrrecibio`, `Fecfiniquito`, `fecfinconsigna`, `Usralta`) VALUES
(16, '16-2020-03-01', '2020-03-01', '2020-03-01', 380, 'asd', 1, 'asd', 3, '', '2020-03-01', '2020-03-01', ''),
(17, '17-2020-03-01', '2020-03-01', '2020-03-01', 380, 'asd', 1, 'asd', 3, '', '2020-03-01', '2020-03-01', ''),
(18, '18-2020-03-01', '2020-03-01', '2020-03-01', 380, 'asd', 1, 'asd', 3, '', '2020-03-01', '2020-03-01', ''),
(19, '19-2020-03-01', '2020-03-01', '2020-03-01', 380, 'asd', 1, 'asd', 3, '', '2020-03-01', '2020-03-01', ''),
(20, '20-2020-03-01', '2020-03-01', '2020-03-01', 380, 'asd', 1, 'asd', 3, '', '2020-03-01', '2020-03-01', ''),
(21, '21-2020-03-01', '2020-03-01', '2020-03-01', 380, 'asd', 1, 'asd', 3, '', '2020-03-01', '2020-03-01', ''),
(22, '22-2020-03-01', '2020-03-01', '2020-03-01', 380, 'asd', 1, 'asd', 3, '', '2020-03-01', '2020-03-01', ''),
(23, '23-2020-03-01', '2020-03-01', '2020-03-01', 380, 'asd', 1, 'asd', 3, '', '2020-03-01', '2020-03-01', ''),
(24, '24-2020-03-01', '2020-03-01', '2020-03-01', 57911, '123', 1, '3434', 3, '', '2020-03-01', '2020-03-01', ''),
(25, '25-2020-03-01', '2020-03-01', '2020-03-01', 24591, '123', 1, '3434', 3, '', '2020-03-01', '2020-03-01', ''),
(26, '26-2020-03-01', '2020-03-01', '2020-03-01', 532, '123', 2, 'sdf', 4, '', '2020-03-01', '2020-03-01', ''),
(27, '27-2020-03-01', '2020-03-01', '2020-03-01', 2734, '123', 3, 'asd', 4, '', '2020-03-01', '2020-03-01', ''),
(28, '28-2020-03-01', '2020-03-01', '2020-03-01', 430, 'asdasdasd', 1, 'sadsad', 3, '', '2020-03-01', '2020-03-01', ''),
(32, '32-2020-03-01', '2020-03-01', '2020-01-29', 888, '', 1, '', 3, '', '2020-03-01', '2020-03-02', ''),
(33, '33-2020-03-01', '2020-03-01', '2020-03-01', 678, '', 1, '', 3, '', '2020-03-01', '2020-03-01', ''),
(34, '34-2020-03-01', '2020-03-01', '2020-03-01', 400, '', 1, '', 3, '', '2020-03-01', '2020-03-01', ''),
(35, '35-2020-03-01', '2020-03-01', '2020-03-01', 400, '', 1, '', 3, '', '2020-03-01', '2020-03-01', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas_detalle`
--

CREATE TABLE `entradas_detalle` (
  `id_detallleEntrada` bigint(20) NOT NULL,
  `Claveent` bigint(20) NOT NULL,
  `Codigobarr` bigint(20) NOT NULL,
  `Cantidad` bigint(20) NOT NULL,
  `Preciolista` decimal(10,2) DEFAULT NULL,
  `Descprov` decimal(10,2) NOT NULL,
  `Claveprov` decimal(10,2) DEFAULT NULL,
  `Observación` varchar(30) DEFAULT NULL,
  `fechaColofon` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `entradas_detalle`
--

INSERT INTO `entradas_detalle` (`id_detallleEntrada`, `Claveent`, `Codigobarr`, `Cantidad`, `Preciolista`, `Descprov`, `Claveprov`, `Observación`, `fechaColofon`) VALUES
(4, 23, 2, 9, '20.00', '0.00', '0.00', '', NULL),
(5, 23, 1, 2, '100.00', '0.00', '0.00', '', NULL),
(6, 24, 2, 40, '2311.22', '0.00', '0.00', '', NULL),
(7, 24, 1, 556, '100.00', '60.00', '0.00', '', NULL),
(8, 25, 2, 40, '2311.22', '0.00', '0.00', '', NULL),
(9, 25, 1, 557, '100.00', '60.00', '0.00', '', NULL),
(10, 26, 2, 2, '300.00', '40.00', '10.00', 'as', NULL),
(11, 26, 1, 2, '123.00', '30.00', '15.00', 'asd', NULL),
(12, 27, 2, 11, '333.00', '40.00', '40.00', '', NULL),
(13, 27, 1, 8, '100.00', '33.00', '33.00', '', NULL),
(14, 28, 2, 3, '200.00', '40.00', '30.00', '', NULL),
(15, 28, 1, 1, '100.00', '30.00', '30.00', '', NULL),
(19, 32, 2, 5, '200.00', '40.00', '30.00', 'as', '2020-03-03'),
(20, 32, 1, 3, '123.00', '22.00', '22.00', 's', '2020-03-31'),
(21, 33, 2, 3, '200.00', '30.00', '20.00', 'sdasd', '2020-03-03'),
(22, 33, 1, 3, '123.00', '30.00', '10.00', '', NULL),
(23, 34, 2, 5, '400.00', '0.00', '0.00', '', NULL),
(24, 35, 2, 5, '400.00', '0.00', '0.00', '', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id_libro` bigint(20) NOT NULL,
  `Codbarras` varchar(18) NOT NULL,
  `Clavecasedit` bigint(20) NOT NULL,
  `Titulo` varchar(200) NOT NULL,
  `Autor` varchar(50) NOT NULL,
  `ClaveInterna` varchar(18) NOT NULL,
  `ISBN` varchar(18) NOT NULL,
  `Inventariable` tinyint(1) NOT NULL,
  `Claveunimed` bigint(20) NOT NULL,
  `Existencia` int(12) NOT NULL,
  `Puntoreorden` int(12) NOT NULL,
  `Costo` decimal(10,2) NOT NULL,
  `Preciolista` decimal(10,2) NOT NULL,
  `Peso` decimal(10,2) NOT NULL,
  `Numeropag` int(6) NOT NULL,
  `fecedicion` date DEFAULT NULL,
  `Tema` varchar(30) NOT NULL,
  `fecalta` date NOT NULL,
  `Descuento` decimal(10,2) NOT NULL,
  `Ultimoprov` varchar(8) DEFAULT NULL,
  `Sinopsis` varchar(250) NOT NULL,
  `Ubicacion` varchar(30) NOT NULL,
  `Usralta` varchar(10) DEFAULT NULL,
  `fotoportada` char(250) NOT NULL,
  `fechaColofon` date DEFAULT NULL,
  `descatalogado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libro`, `Codbarras`, `Clavecasedit`, `Titulo`, `Autor`, `ClaveInterna`, `ISBN`, `Inventariable`, `Claveunimed`, `Existencia`, `Puntoreorden`, `Costo`, `Preciolista`, `Peso`, `Numeropag`, `fecedicion`, `Tema`, `fecalta`, `Descuento`, `Ultimoprov`, `Sinopsis`, `Ubicacion`, `Usralta`, `fotoportada`, `fechaColofon`, `descatalogado`) VALUES
(1, 'asdasd1', 1, 'asdas', 'asd', 'asd', 'asd', 1, 2, 2, 123, '123.00', '123.00', '123.00', 123, NULL, 'asd', '2020-02-13', '10.00', NULL, 'asd', 'asd', NULL, 'portadas/asdasd/02a78975bd89601f92bb9e6d8f6fb5bf.png', '2020-02-12', NULL),
(2, 'asdasd', 1, 'asdasd', 'asdasd', 'asdasd', 'asdasdasd', 1, 2, 1, 33, '0.00', '400.00', '121.22', 222, NULL, '222', '2020-02-12', '0.00', NULL, '21212', '22', NULL, 'portadas/asdasd/0e1214e07e0cf0341f7d8d62e8bf48f5.jpg', '2020-02-05', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medidas`
--

CREATE TABLE `medidas` (
  `id_medida` bigint(20) NOT NULL,
  `Clavemed` varchar(8) NOT NULL,
  `Descmed` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medidas`
--

INSERT INTO `medidas` (`id_medida`, `Clavemed`, `Descmed`) VALUES
(1, 'PZ', 'PIEZA'),
(2, 'LB', 'Libro'),
(3, 'SERV', 'SERVICIO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` bigint(20) NOT NULL,
  `Claveprov` varchar(8) DEFAULT NULL,
  `Empresa` varchar(50) DEFAULT NULL,
  `Contacto` varchar(50) DEFAULT NULL,
  `Domicilio` varchar(50) DEFAULT NULL,
  `Codpostal` varchar(5) DEFAULT NULL,
  `Municipio` varchar(40) DEFAULT NULL,
  `Ciudad` varchar(40) DEFAULT NULL,
  `Estado` int(40) DEFAULT NULL,
  `Telefono` varchar(10) DEFAULT NULL,
  `RFC` varchar(15) DEFAULT NULL,
  `Curp` varchar(18) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Fecultcomp` date DEFAULT NULL,
  `Montoactual` int(15) DEFAULT NULL,
  `Fecalta` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `Claveprov`, `Empresa`, `Contacto`, `Domicilio`, `Codpostal`, `Municipio`, `Ciudad`, `Estado`, `Telefono`, `RFC`, `Curp`, `Email`, `Fecultcomp`, `Montoactual`, `Fecalta`) VALUES
(3, NULL, 'CEPHCIS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, 'COMERICAL LUJOAN S.A. DE C.V.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocliente`
--

CREATE TABLE `tipocliente` (
  `id_tipoCliente` bigint(20) NOT NULL,
  `TipoCli` varchar(8) NOT NULL,
  `Desctipo` varchar(30) NOT NULL,
  `Usralta` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipocliente`
--

INSERT INTO `tipocliente` (`id_tipoCliente`, `TipoCli`, `Desctipo`, `Usralta`) VALUES
(1, 'C1', 'ALUMNOS UNIVERSITARIOS', NULL),
(2, 'C2', 'TRABAJADORES UNIV', NULL),
(3, 'C3', 'MAESTROS UNIV', NULL),
(4, 'C4', 'DISTRIBUIDORES', NULL),
(5, 'C5', 'AUTORES', NULL),
(6, 'C6', 'ALUMNOS INCOPORADOS', NULL),
(7, 'C7', 'MAESTROS INCORPORADOS', NULL),
(8, 'C8', 'PUBLICO GENERAL', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocobro`
--

CREATE TABLE `tipocobro` (
  `id_tipoCobro` bigint(20) NOT NULL,
  `TipoCobro` varchar(8) NOT NULL,
  `Desccobro` varchar(10) DEFAULT NULL,
  `Usralta` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipocobro`
--

INSERT INTO `tipocobro` (`id_tipoCobro`, `TipoCobro`, `Desccobro`, `Usralta`) VALUES
(1, '1', 'Efectivo', NULL),
(2, '2', 'TC BANAMEX', NULL),
(3, '3', 'TC BANCOME', NULL),
(4, '4', 'VALES', NULL),
(5, '5', 'CHEQUE', NULL),
(6, '6', 'TC BANORTE', NULL),
(7, '7', 'TC HSBC', NULL),
(8, '8', 'TC OTROS', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoentrada`
--

CREATE TABLE `tipoentrada` (
  `id_tipoEntrada` bigint(20) NOT NULL,
  `Tipoent` varchar(8) NOT NULL,
  `Desctipent` varchar(255) NOT NULL,
  `Usralta` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipoentrada`
--

INSERT INTO `tipoentrada` (`id_tipoEntrada`, `Tipoent`, `Desctipent`, `Usralta`) VALUES
(1, '1', 'Compra', ''),
(2, '2', 'Consigna', ''),
(3, '3', 'Ajuste', ''),
(4, '4', 'Donaci', ''),
(5, '5', 'Produc', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` bigint(20) NOT NULL,
  `Claveusr` varchar(55) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `contraseña` varchar(255) NOT NULL,
  `Numempleado` varchar(8) DEFAULT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Nivel` int(2) DEFAULT NULL,
  `Fecalta` date DEFAULT NULL,
  `Fecbaja` date DEFAULT NULL,
  `Huella` varchar(100) DEFAULT NULL,
  `Usralta` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `Claveusr`, `email`, `password`, `contraseña`, `Numempleado`, `Nombre`, `Nivel`, `Fecalta`, `Fecbaja`, `Huella`, `Usralta`) VALUES
(6, 'asd', 'asd@asd.asd', '$2y$10$cOVWVlvcQ/rLuRUmoen0xuzNpKnt2tAlwYpj38Uf6fWnE18RCtr6e', 'asdasdasd', NULL, 'aaron', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` bigint(20) NOT NULL,
  `Clavevent` varchar(8) NOT NULL,
  `Fecventa` date NOT NULL,
  `Horaventa` time NOT NULL,
  `Usrventa` varchar(10) DEFAULT NULL,
  `Subtotal` int(12) DEFAULT NULL,
  `IVA` int(12) DEFAULT NULL,
  `Totalventa` int(12) DEFAULT NULL,
  `Cobrado` int(12) DEFAULT NULL,
  `Descuento` int(12) DEFAULT NULL,
  `Tipocli` bigint(20) DEFAULT NULL,
  `TipoCobro` bigint(20) DEFAULT NULL,
  `Credencial` varchar(10) DEFAULT NULL,
  `Nombrecli` varchar(30) DEFAULT NULL,
  `Dependencia` varchar(30) DEFAULT NULL,
  `Fecbaja` date DEFAULT NULL,
  `horabaja` time DEFAULT NULL,
  `Usrbaja` varchar(10) DEFAULT NULL,
  `Observaciones` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_detalle`
--

CREATE TABLE `ventas_detalle` (
  `id_detalleVenta` bigint(20) NOT NULL,
  `Clavevent` bigint(20) NOT NULL,
  `CodigoBar` varchar(18) NOT NULL,
  `Cantidad` int(12) NOT NULL,
  `Clavecasa` varchar(8) NOT NULL,
  `Precioventa` int(12) NOT NULL,
  `Costo` int(12) NOT NULL,
  `Descuento` int(12) NOT NULL,
  `IVA` int(12) NOT NULL,
  `Claveprov` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `casaeditorial`
--
ALTER TABLE `casaeditorial`
  ADD PRIMARY KEY (`id_casaEditorial`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_claveCliente`);

--
-- Indices de la tabla `descuentos`
--
ALTER TABLE `descuentos`
  ADD PRIMARY KEY (`id_descuento`);

--
-- Indices de la tabla `devolucion`
--
ALTER TABLE `devolucion`
  ADD PRIMARY KEY (`id_devolucion`),
  ADD KEY `fk_detalledevolucion` (`fk_emtrada_detalle`);

--
-- Indices de la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`id_entrada`),
  ADD KEY `catalogoProveedor` (`Claveprov`),
  ADD KEY `catalogoTipoEntrada` (`Clavetipent`);

--
-- Indices de la tabla `entradas_detalle`
--
ALTER TABLE `entradas_detalle`
  ADD PRIMARY KEY (`id_detallleEntrada`),
  ADD KEY `entradaPrincipal` (`Claveent`),
  ADD KEY `catalogoLibro` (`Codigobarr`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libro`),
  ADD KEY `editorialCatalogo` (`Clavecasedit`),
  ADD KEY `medidaCatalogo` (`Claveunimed`);

--
-- Indices de la tabla `medidas`
--
ALTER TABLE `medidas`
  ADD PRIMARY KEY (`id_medida`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`),
  ADD UNIQUE KEY `Claveprov` (`Claveprov`) USING BTREE;

--
-- Indices de la tabla `tipocliente`
--
ALTER TABLE `tipocliente`
  ADD PRIMARY KEY (`id_tipoCliente`);

--
-- Indices de la tabla `tipocobro`
--
ALTER TABLE `tipocobro`
  ADD PRIMARY KEY (`id_tipoCobro`);

--
-- Indices de la tabla `tipoentrada`
--
ALTER TABLE `tipoentrada`
  ADD PRIMARY KEY (`id_tipoEntrada`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `Claveusr` (`Claveusr`) USING BTREE;

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `tipoCobroCatalogo` (`TipoCobro`),
  ADD KEY `tipoClienteCatalogo` (`Tipocli`);

--
-- Indices de la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  ADD PRIMARY KEY (`id_detalleVenta`),
  ADD KEY `ventaPrincipal` (`Clavevent`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `casaeditorial`
--
ALTER TABLE `casaeditorial`
  MODIFY `id_casaEditorial` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_claveCliente` bigint(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `descuentos`
--
ALTER TABLE `descuentos`
  MODIFY `id_descuento` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `devolucion`
--
ALTER TABLE `devolucion`
  MODIFY `id_devolucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `entradas`
--
ALTER TABLE `entradas`
  MODIFY `id_entrada` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `entradas_detalle`
--
ALTER TABLE `entradas_detalle`
  MODIFY `id_detallleEntrada` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libro` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `medidas`
--
ALTER TABLE `medidas`
  MODIFY `id_medida` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipocliente`
--
ALTER TABLE `tipocliente`
  MODIFY `id_tipoCliente` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tipocobro`
--
ALTER TABLE `tipocobro`
  MODIFY `id_tipoCobro` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tipoentrada`
--
ALTER TABLE `tipoentrada`
  MODIFY `id_tipoEntrada` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  MODIFY `id_detalleVenta` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `devolucion`
--
ALTER TABLE `devolucion`
  ADD CONSTRAINT `fk_detalledevolucion` FOREIGN KEY (`fk_emtrada_detalle`) REFERENCES `entradas_detalle` (`id_detallleEntrada`);

--
-- Filtros para la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD CONSTRAINT `catalogoProveedor` FOREIGN KEY (`Claveprov`) REFERENCES `proveedor` (`id_proveedor`),
  ADD CONSTRAINT `catalogoTipoEntrada` FOREIGN KEY (`Clavetipent`) REFERENCES `tipoentrada` (`id_tipoEntrada`);

--
-- Filtros para la tabla `entradas_detalle`
--
ALTER TABLE `entradas_detalle`
  ADD CONSTRAINT `catalogoLibro` FOREIGN KEY (`Codigobarr`) REFERENCES `libros` (`id_libro`),
  ADD CONSTRAINT `entradaPrincipal` FOREIGN KEY (`Claveent`) REFERENCES `entradas` (`id_entrada`);

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `editorialCatalogo` FOREIGN KEY (`Clavecasedit`) REFERENCES `casaeditorial` (`id_casaEditorial`),
  ADD CONSTRAINT `medidaCatalogo` FOREIGN KEY (`Claveunimed`) REFERENCES `medidas` (`id_medida`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `tipoClienteCatalogo` FOREIGN KEY (`Tipocli`) REFERENCES `tipocliente` (`id_tipoCliente`),
  ADD CONSTRAINT `tipoCobroCatalogo` FOREIGN KEY (`TipoCobro`) REFERENCES `tipocobro` (`id_tipoCobro`);

--
-- Filtros para la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  ADD CONSTRAINT `ventaPrincipal` FOREIGN KEY (`Clavevent`) REFERENCES `ventas` (`id_venta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
