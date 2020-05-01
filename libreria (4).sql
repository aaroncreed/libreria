-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-05-2020 a las 07:41:55
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
  `Desccasedit` varchar(30) NOT NULL,
  `estatusm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `casaeditorial`
--

INSERT INTO `casaeditorial` (`id_casaEditorial`, `Clavecasedit`, `Desccasedit`, `estatusm`) VALUES
(1, '123', 'Editorial Bersunsa', 1),
(2, '23', 'prueba1', 1),
(3, '24', 'prueba2', 1),
(4, '23', 'p4u3gq', 2),
(5, '33', 'prueba3', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_claveCliente` bigint(8) NOT NULL,
  `Razsocial` varchar(50) DEFAULT NULL,
  `Apepat` varchar(30) DEFAULT NULL,
  `Apemat` varchar(30) DEFAULT NULL,
  `Nombre` varchar(35) DEFAULT NULL,
  `Domicilio` varchar(35) DEFAULT NULL,
  `Codpostal` varchar(30) DEFAULT NULL,
  `Municipio` varchar(30) DEFAULT NULL,
  `Colonia` varchar(30) DEFAULT NULL,
  `Estado` varchar(30) DEFAULT NULL,
  `Telefono` varchar(10) DEFAULT NULL,
  `RFC` varchar(15) DEFAULT NULL,
  `Email` varchar(60) DEFAULT NULL,
  `Fecalta` date DEFAULT NULL,
  `Fecultventa` date DEFAULT NULL,
  `Diascre` int(3) DEFAULT NULL,
  `Limitecre` int(10) DEFAULT NULL,
  `estatusm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_claveCliente`, `Razsocial`, `Apepat`, `Apemat`, `Nombre`, `Domicilio`, `Codpostal`, `Municipio`, `Colonia`, `Estado`, `Telefono`, `RFC`, `Email`, `Fecalta`, `Fecultventa`, `Diascre`, `Limitecre`, `estatusm`) VALUES
(1, 'asdasd', 'asdasd', 'asdasd', 'aaron jesus navarro gutierrez', 'calle 31', '96350', 'asdasd', 'asdasd', 'asdasd', '9999999', 'asdasd', 'asdasd@asdad.com', '2020-03-16', '2020-03-31', 4, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cobroventa`
--

CREATE TABLE `cobroventa` (
  `id_cobroVenta` bigint(20) NOT NULL,
  `fk_venta` bigint(20) NOT NULL,
  `TipoCobro` int(11) NOT NULL,
  `Monto` decimal(10,2) NOT NULL,
  `detallepago` varchar(255) NOT NULL,
  `fechavencimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cobroventa`
--

INSERT INTO `cobroventa` (`id_cobroVenta`, `fk_venta`, `TipoCobro`, `Monto`, `detallepago`, `fechavencimiento`) VALUES
(4, 10, 1, '1670.40', '', '2020-04-08'),
(5, 12, 1, '231.14', '', '2020-04-10'),
(6, 13, 1, '231.14', '', '2020-04-11'),
(7, 14, 1, '231.14', '', '2020-04-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descuentos`
--

CREATE TABLE `descuentos` (
  `id_descuento` bigint(20) NOT NULL,
  `TipoDesc` varchar(30) NOT NULL,
  `Tipocli` bigint(20) NOT NULL,
  `Descuento` int(3) NOT NULL,
  `Usralta` bigint(20) NOT NULL,
  `estatusm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `descuentos`
--

INSERT INTO `descuentos` (`id_descuento`, `TipoDesc`, `Tipocli`, `Descuento`, `Usralta`, `estatusm`) VALUES
(1, 'premiaum2', 1, 10, 6, 1),
(2, 'especial Alumnos', 2, 10, 6, 1),
(3, 'maestros univ', 3, 10, 6, 1),
(4, 'distribui', 4, 10, 6, 1),
(5, 'autores', 5, 10, 6, 1),
(6, 'alumnos incorporados', 6, 10, 6, 1),
(7, 'maestros incorporados', 7, 10, 6, 1),
(8, 'publico general', 8, 0, 6, 1);

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
(7, 4, 0, '2020-03-01', 6, '180.00'),
(8, 5, 0, '2020-03-01', 6, '200.00'),
(9, 6, 0, '2020-03-01', 6, '92448.80'),
(10, 7, 0, '2020-03-01', 6, '55600.00'),
(11, 10, 0, '2020-03-01', 6, '600.00'),
(12, 11, 0, '2020-03-01', 6, '246.00'),
(13, 8, 0, '2020-03-01', 6, '92448.80'),
(14, 9, 0, '2020-03-01', 6, '55700.00');

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
  `Usralta` varchar(10) NOT NULL,
  `estatusEntrada` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `entradas`
--

INSERT INTO `entradas` (`id_entrada`, `ClaveEnt`, `Fecrecepcion`, `Fecenvio`, `Totalfac`, `Referencia`, `Clavetipent`, `Observaciones`, `Claveprov`, `Usrrecibio`, `Fecfiniquito`, `fecfinconsigna`, `Usralta`, `estatusEntrada`) VALUES
(23, '23-2020-03-01', '2020-03-01', '2020-03-01', 380, 'asd', 1, 'asd', 3, '', '2020-03-01', '2020-03-01', '', 1),
(24, '24-2020-03-01', '2020-03-01', '2020-03-01', 57911, '123', 1, '3434', 3, '', '2020-03-01', '2020-03-01', '', 1),
(25, '25-2020-03-01', '2020-03-01', '2020-03-01', 24591, '123', 1, '3434', 3, '', '2020-03-01', '2020-03-01', '', 1),
(26, '26-2020-03-01', '2020-03-01', '2020-03-01', 532, '123', 2, 'sdf', 4, '', '2020-03-01', '2020-03-01', '', 1),
(27, '27-2020-03-01', '2020-03-01', '2020-03-01', 2734, '123', 3, 'asd', 4, '', '2020-03-01', '2020-03-01', '', 0),
(28, '28-2020-03-01', '2020-03-01', '2020-03-01', 430, 'asdasdasd', 1, 'sadsad', 3, '', '2020-03-01', '2020-03-01', '', 0),
(32, '32-2020-03-01', '2020-03-01', '2020-01-29', 888, '', 1, '', 3, '', '2020-03-01', '2020-03-02', '', 0),
(33, '33-2020-03-01', '2020-03-01', '2020-03-01', 678, '', 1, '', 3, '', '2020-03-01', '2020-03-01', '', 0),
(34, '34-2020-03-01', '2020-03-01', '2020-03-01', 400, '', 1, '', 3, '', '2020-03-01', '2020-03-01', '', 0),
(35, '35-2020-03-01', '2020-03-01', '2020-03-01', 400, '', 1, '', 3, '', '2020-03-01', '2020-03-01', '', 0),
(36, '36-2020-04-12', '2020-04-12', '2020-04-12', 2400, '', 1, '', 3, '', '2020-04-12', '2020-04-12', '', 0);

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
(24, 35, 2, 5, '400.00', '0.00', '0.00', '', NULL),
(25, 36, 3, 12, '200.00', '0.00', '0.00', '', NULL);

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
(1, 'asdasd1', 1, 'asdas', 'asd', 'asd', 'asd', 1, 2, 2, 123, '123.00', '123.00', '123.00', 123, NULL, 'asd', '2020-02-13', '10.00', NULL, 'asd', 'asd', NULL, 'portadas/asdasd/escudo.png', '2020-02-12', NULL),
(2, 'asdasd', 1, 'asdasd', 'asdasd', 'asdasd', 'asdasdasd', 1, 2, 2, 33, '0.00', '400.00', '121.22', 222, NULL, '222', '2020-02-12', '0.00', NULL, '21212', '22', NULL, 'portadas/asdasd/escudo.png', '2020-02-05', NULL),
(3, '123123123', 3, 'la luna', 'yo', '123', '12323fff', 1, 2, 22, 2, '0.00', '200.00', '0.33', 500, NULL, 'asd', '2020-04-11', '0.00', NULL, 'asd 123 assd 123', '44', NULL, 'portadas/123123123/78168156_p0.jpg', '2020-04-11', NULL),
(4, '123556', 5, 'la odisea del programador', 'yo', '345', '4556', 1, 2, 30, 12, '100.00', '100.00', '0.11', 222, NULL, 'fkkfk', '2020-04-11', '0.01', NULL, 'dkdk', '2', NULL, 'portadas/123556/__amiya_doctor_and_swire_arknights_drawn_by_ikeda_cpt__sample-eb2d1c779b3edea5dd99f491d39c8b41.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medidas`
--

CREATE TABLE `medidas` (
  `id_medida` bigint(20) NOT NULL,
  `Clavemed` varchar(8) NOT NULL,
  `Descmed` varchar(50) NOT NULL,
  `estatusm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medidas`
--

INSERT INTO `medidas` (`id_medida`, `Clavemed`, `Descmed`, `estatusm`) VALUES
(1, 'PZ', 'PIEZA', 1),
(2, 'LB', 'LIBRO', 1),
(3, 'SERV', 'SERVICIO', 1),
(4, 'MT', 'METROS PLANOS', 0);

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
  `Fecalta` date DEFAULT NULL,
  `estatusm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `Claveprov`, `Empresa`, `Contacto`, `Domicilio`, `Codpostal`, `Municipio`, `Ciudad`, `Estado`, `Telefono`, `RFC`, `Curp`, `Email`, `Fecultcomp`, `Montoactual`, `Fecalta`, `estatusm`) VALUES
(3, NULL, 'CEPHCIS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4, NULL, 'COMERICAL LUJOAN S.A. DE C.V.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(5, '13', 'prueba1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-16', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocliente`
--

CREATE TABLE `tipocliente` (
  `id_tipoCliente` bigint(20) NOT NULL,
  `TipoCli` varchar(8) NOT NULL,
  `Desctipo` varchar(30) NOT NULL,
  `Usralta` varchar(10) DEFAULT NULL,
  `estatusm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipocliente`
--

INSERT INTO `tipocliente` (`id_tipoCliente`, `TipoCli`, `Desctipo`, `Usralta`, `estatusm`) VALUES
(1, 'C1', 'ALUMNOS UNIVERSITARIOS', NULL, 1),
(2, 'C2', 'TRABAJADORES UNIV', NULL, 1),
(3, 'C3', 'MAESTROS UNIV', NULL, 1),
(4, 'C4', 'DISTRIBUIDORES', NULL, 1),
(5, 'C5', 'AUTORES', NULL, 1),
(6, 'C6', 'ALUMNOS INCOPORADOS', NULL, 1),
(7, 'C7', 'MAESTROS INCORPORADOS', NULL, 1),
(8, 'C8', 'PUBLICO GENERAL', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocobro`
--

CREATE TABLE `tipocobro` (
  `id_tipoCobro` bigint(20) NOT NULL,
  `TipoCobro` varchar(8) NOT NULL,
  `Desccobro` varchar(10) DEFAULT NULL,
  `Usralta` varchar(10) DEFAULT NULL,
  `estatusm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipocobro`
--

INSERT INTO `tipocobro` (`id_tipoCobro`, `TipoCobro`, `Desccobro`, `Usralta`, `estatusm`) VALUES
(1, '1', 'Efectivo', NULL, 0),
(2, '2', 'TC BANAMEX', NULL, 0),
(3, '3', 'TC BANCOME', NULL, 0),
(4, '4', 'VALES', NULL, 0),
(5, '5', 'CHEQUE', NULL, 0),
(6, '6', 'TC BANORTE', NULL, 0),
(7, '7', 'TC HSBC', NULL, 0),
(8, '8', 'TC OTROS', NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoentrada`
--

CREATE TABLE `tipoentrada` (
  `id_tipoEntrada` bigint(20) NOT NULL,
  `Tipoent` varchar(8) NOT NULL,
  `Desctipent` varchar(255) NOT NULL,
  `Usralta` varchar(10) DEFAULT NULL,
  `estatusm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipoentrada`
--

INSERT INTO `tipoentrada` (`id_tipoEntrada`, `Tipoent`, `Desctipent`, `Usralta`, `estatusm`) VALUES
(1, '1', 'Compra', '', 0),
(2, '2', 'Consigna', '', 0),
(3, '3', 'Ajuste', '', 0),
(4, '4', 'Donaci', '', 0),
(5, '5', 'Produc', '', 0),
(6, '7', 'Solicitud Especial', '6', 0);

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
(6, 'asd', 'asd@asd.asd', '$2y$10$cOVWVlvcQ/rLuRUmoen0xuzNpKnt2tAlwYpj38Uf6fWnE18RCtr6e', 'asdasdasd', NULL, 'aaron', 1, NULL, NULL, NULL, NULL),
(7, 'vendedor1', 'aa@aa.com', '$2y$10$lFNPDFLZcXhIC0/LG9AxWO6D7F63dYgfsH3iEsf3NWY8XIgKUQU.S', 'asdasd', NULL, 'asd', 2, NULL, NULL, NULL, NULL),
(8, 'vendedor3', 'kkkk@kk.com', '$2y$10$GbFK1jlBLQuYhMd66VHW1.7/cbzxy1ydTRHqEFAc6chNDgyiSvYE6', 'vendedor', NULL, 'kfkfk', 2, NULL, NULL, NULL, NULL),
(9, 'prueba1', 'preba@prueba.com', '$2y$10$rU8LdmvLs9EVpp968ZNrje/NAfQ2Htn1tGARV2wtFUIM7O42Op.lO', 'prueba1', NULL, 'prueba3', 3, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` bigint(20) NOT NULL,
  `Clavevent` varchar(25) DEFAULT NULL,
  `Fecventa` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Horaventa` time NOT NULL DEFAULT current_timestamp(),
  `Usrventa` varchar(10) DEFAULT NULL,
  `Subtotal` decimal(10,2) DEFAULT NULL,
  `IVA` decimal(10,2) DEFAULT NULL,
  `Totalventa` decimal(10,2) DEFAULT NULL,
  `Cobrado` decimal(10,2) DEFAULT NULL,
  `Descuento` decimal(10,2) DEFAULT NULL,
  `Tipocli` bigint(20) DEFAULT NULL,
  `Credencial` varchar(10) DEFAULT NULL,
  `Nombrecli` varchar(30) DEFAULT NULL,
  `Dependencia` varchar(30) DEFAULT NULL,
  `Fecbaja` date DEFAULT NULL,
  `horabaja` time DEFAULT NULL,
  `Usrbaja` varchar(10) DEFAULT NULL,
  `Observaciones` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_venta`, `Clavevent`, `Fecventa`, `Horaventa`, `Usrventa`, `Subtotal`, `IVA`, `Totalventa`, `Cobrado`, `Descuento`, `Tipocli`, `Credencial`, `Nombrecli`, `Dependencia`, `Fecbaja`, `horabaja`, `Usrbaja`, `Observaciones`) VALUES
(10, NULL, '2020-04-08 13:33:02', '08:33:02', '6', '1600.00', '16.00', '1670.40', '0.00', '10.00', 1, '', '', '', NULL, NULL, NULL, NULL),
(12, NULL, '2020-04-10 15:28:29', '10:28:29', '6', '221.40', '16.00', '231.14', '0.00', '10.00', 1, '', '', '', NULL, NULL, NULL, NULL),
(13, NULL, '2020-04-11 02:22:13', '21:22:13', '6', '221.40', '16.00', '231.14', '0.00', '10.00', 1, '', '', '', NULL, NULL, NULL, NULL),
(14, NULL, '2020-04-11 02:30:59', '21:30:59', '6', '221.40', '16.00', '231.14', '0.00', '10.00', 1, '', '', '', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_detalle`
--

CREATE TABLE `ventas_detalle` (
  `id_detalleVenta` bigint(20) NOT NULL,
  `Clavevent` bigint(20) NOT NULL,
  `CodigoBar` varchar(18) NOT NULL,
  `Cantidad` int(12) NOT NULL,
  `Clavecasa` varchar(8) DEFAULT NULL,
  `Precioventa` decimal(10,2) NOT NULL,
  `Costo` decimal(10,2) NOT NULL,
  `Descuento` decimal(10,2) NOT NULL,
  `IVA` int(12) NOT NULL,
  `Claveprov` varchar(8) DEFAULT NULL,
  `fk_libro` bigint(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas_detalle`
--

INSERT INTO `ventas_detalle` (`id_detalleVenta`, `Clavevent`, `CodigoBar`, `Cantidad`, `Clavecasa`, `Precioventa`, `Costo`, `Descuento`, `IVA`, `Claveprov`, `fk_libro`) VALUES
(1, 10, 'asdasd', 4, NULL, '1600.00', '400.00', '0.00', 16, NULL, 2),
(2, 12, 'asdasd1', 2, NULL, '221.40', '123.00', '12.30', 16, NULL, 1),
(3, 13, 'asdasd1', 2, NULL, '221.40', '123.00', '12.30', 16, NULL, 1),
(4, 14, 'asdasd1', 2, NULL, '221.40', '123.00', '12.30', 16, NULL, 1);

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
-- Indices de la tabla `cobroventa`
--
ALTER TABLE `cobroventa`
  ADD PRIMARY KEY (`id_cobroVenta`),
  ADD KEY `fk_ventacobrorealizado` (`fk_venta`);

--
-- Indices de la tabla `descuentos`
--
ALTER TABLE `descuentos`
  ADD PRIMARY KEY (`id_descuento`),
  ADD KEY `catalogotipocliente` (`Tipocli`);

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
  MODIFY `id_casaEditorial` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_claveCliente` bigint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cobroventa`
--
ALTER TABLE `cobroventa`
  MODIFY `id_cobroVenta` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `descuentos`
--
ALTER TABLE `descuentos`
  MODIFY `id_descuento` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `devolucion`
--
ALTER TABLE `devolucion`
  MODIFY `id_devolucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `entradas`
--
ALTER TABLE `entradas`
  MODIFY `id_entrada` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `entradas_detalle`
--
ALTER TABLE `entradas_detalle`
  MODIFY `id_detallleEntrada` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libro` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `medidas`
--
ALTER TABLE `medidas`
  MODIFY `id_medida` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipocliente`
--
ALTER TABLE `tipocliente`
  MODIFY `id_tipoCliente` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tipocobro`
--
ALTER TABLE `tipocobro`
  MODIFY `id_tipoCobro` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tipoentrada`
--
ALTER TABLE `tipoentrada`
  MODIFY `id_tipoEntrada` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  MODIFY `id_detalleVenta` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cobroventa`
--
ALTER TABLE `cobroventa`
  ADD CONSTRAINT `fk_ventacobrorealizado` FOREIGN KEY (`fk_venta`) REFERENCES `ventas` (`id_venta`);

--
-- Filtros para la tabla `descuentos`
--
ALTER TABLE `descuentos`
  ADD CONSTRAINT `catalogotipocliente` FOREIGN KEY (`Tipocli`) REFERENCES `tipocliente` (`id_tipoCliente`);

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
  ADD CONSTRAINT `tipoClienteCatalogo` FOREIGN KEY (`Tipocli`) REFERENCES `tipocliente` (`id_tipoCliente`);

--
-- Filtros para la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  ADD CONSTRAINT `ventaPrincipal` FOREIGN KEY (`Clavevent`) REFERENCES `ventas` (`id_venta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
