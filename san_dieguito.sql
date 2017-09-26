-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 26-09-2017 a las 22:49:22
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `san_dieguito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camiones`
--

CREATE TABLE `camiones` (
  `placas_camion` varchar(20) NOT NULL,
  `numero_camion` varchar(20) DEFAULT NULL,
  `modelo_camion` varchar(50) DEFAULT NULL,
  `id_permisionario` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `camiones`
--

INSERT INTO `camiones` (`placas_camion`, `numero_camion`, `modelo_camion`, `id_permisionario`) VALUES
('LB42021', 'TC17', NULL, 1),
('LB72135', 'S/N', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id_empresa` int(11) NOT NULL,
  `nombre_empresa` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id_empresa`, `nombre_empresa`) VALUES
(1, 'EPCCOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `id_material` int(11) NOT NULL,
  `nombre_material` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`id_material`, `nombre_material`) VALUES
(1, 'DESPERDICIO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operadores`
--

CREATE TABLE `operadores` (
  `id_operador` int(11) NOT NULL,
  `nombre_operador` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `operadores`
--

INSERT INTO `operadores` (`id_operador`, `nombre_operador`) VALUES
(1, 'ALEJANDRO RAMOS'),
(2, 'EMMANUEL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisionarios`
--

CREATE TABLE `permisionarios` (
  `id_permisionario` int(11) NOT NULL,
  `nombre_permisionario` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permisionarios`
--

INSERT INTO `permisionarios` (`id_permisionario`, `nombre_permisionario`) VALUES
(1, 'ASTRAC'),
(2, 'ARTURO CHAVEZ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `remisiones`
--

CREATE TABLE `remisiones` (
  `no_remision` int(11) NOT NULL,
  `fecha_remision` date NOT NULL,
  `hora_llegada_origen` datetime NOT NULL,
  `hora_salida_origen` datetime NOT NULL,
  `lugar_carga` int(11) NOT NULL,
  `obra` varchar(200) NOT NULL,
  `material` varchar(200) NOT NULL,
  `unidad_m3` int(11) NOT NULL,
  `id_operador` int(11) NOT NULL,
  `placas_camion` varchar(20) NOT NULL,
  `recibido_obra` date NOT NULL,
  `placas_gondola` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `remisiones`
--

INSERT INTO `remisiones` (`no_remision`, `fecha_remision`, `hora_llegada_origen`, `hora_salida_origen`, `lugar_carga`, `obra`, `material`, `unidad_m3`, `id_operador`, `placas_camion`, `recibido_obra`, `placas_gondola`) VALUES
(589, '2017-09-19', '2017-09-19 08:00:00', '2017-09-19 09:00:00', 1, 'obra de prueba', '1', 19, 2, 'LB72135', '2017-09-19', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viajes`
--

CREATE TABLE `viajes` (
  `no_viaje` int(11) NOT NULL,
  `dia_viaje` date NOT NULL,
  `no_remision` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `camiones`
--
ALTER TABLE `camiones`
  ADD PRIMARY KEY (`placas_camion`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`id_material`);

--
-- Indices de la tabla `operadores`
--
ALTER TABLE `operadores`
  ADD PRIMARY KEY (`id_operador`);

--
-- Indices de la tabla `permisionarios`
--
ALTER TABLE `permisionarios`
  ADD PRIMARY KEY (`id_permisionario`);

--
-- Indices de la tabla `remisiones`
--
ALTER TABLE `remisiones`
  ADD PRIMARY KEY (`no_remision`);

--
-- Indices de la tabla `viajes`
--
ALTER TABLE `viajes`
  ADD PRIMARY KEY (`no_viaje`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `materiales`
--
ALTER TABLE `materiales`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `operadores`
--
ALTER TABLE `operadores`
  MODIFY `id_operador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `permisionarios`
--
ALTER TABLE `permisionarios`
  MODIFY `id_permisionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `viajes`
--
ALTER TABLE `viajes`
  MODIFY `no_viaje` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
