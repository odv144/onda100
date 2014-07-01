-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-07-2014 a las 23:34:35
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `odontologia`
--
CREATE DATABASE IF NOT EXISTS `odontologia` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `odontologia`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authassignment`
--

CREATE TABLE IF NOT EXISTS `authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `authassignment`
--

INSERT INTO `authassignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('Administrador', '1', NULL, 'N;'),
('Visitante', '8', NULL, 'N;'),
('Cliente', '7', NULL, 'N;'),
('Distribuidor', '23', NULL, 'N;'),
('Visitante', '6', NULL, 'N;'),
('Visitante', '12', NULL, 'N;'),
('Visitante', '13', NULL, 'N;');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authitem`
--

CREATE TABLE IF NOT EXISTS `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `authitem`
--

INSERT INTO `authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('Administrador', 2, 'Rol de maxima jerarquia', NULL, 'N;'),
('Cliente', 2, 'Rol de maxima jerarquia', NULL, 'N;'),
('Distribuidor', 2, 'Rol de maxima jerarquia', NULL, 'N;'),
('Visitante', 2, 'Rol de maxima jerarquia', NULL, 'N;');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authitemchild`
--

CREATE TABLE IF NOT EXISTS `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorianivel1`
--

CREATE TABLE IF NOT EXISTS `categorianivel1` (
  `idCategoria1` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`idCategoria1`),
  UNIQUE KEY `icat1_cat1` (`idCategoria1`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `categorianivel1`
--

INSERT INTO `categorianivel1` (`idCategoria1`, `nombre`) VALUES
(1, 'Operatoria'),
(2, 'Equipamiento'),
(3, 'Endodocia'),
(4, 'Ortodoncia'),
(5, 'Descartables'),
(6, 'Periodencia'),
(7, 'Blanqueamiento Dental'),
(8, 'Fox-Tex'),
(9, 'Radiologia'),
(10, 'Protesis'),
(11, 'Material de Impresion'),
(12, 'Cementos'),
(13, 'Higiene'),
(14, 'Prevencion'),
(15, 'Cirugia'),
(16, 'Piedras y Fresas'),
(17, 'Anestesicos'),
(18, 'Bioclean(Estetica)'),
(19, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorianivel2`
--

CREATE TABLE IF NOT EXISTS `categorianivel2` (
  `idCategoria2` int(3) NOT NULL AUTO_INCREMENT,
  `idCat1` int(3) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`idCategoria2`),
  UNIQUE KEY `icat2_cat2` (`idCategoria2`) USING BTREE,
  KEY `icat2_cat1` (`idCat1`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `categorianivel2`
--

INSERT INTO `categorianivel2` (`idCategoria2`, `idCat1`, `nombre`) VALUES
(1, 1, 'Acidos'),
(2, 1, 'Adhesivos'),
(3, 1, 'Amalgamas'),
(4, 1, 'Barniz'),
(5, 1, 'Composites'),
(6, 1, 'Coronas'),
(7, 1, 'Gafas Protectoras'),
(8, 1, 'Ionomeros'),
(9, 1, 'Instrumentos'),
(10, 1, 'Obturacion Provisoria'),
(11, 1, 'Pinceles'),
(12, 1, 'Pulidos'),
(13, 1, 'Varios'),
(15, 10, 'Ducha'),
(16, 2, 'Duchas'),
(17, 2, 'Accesorios Sillon');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE IF NOT EXISTS `marca` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `marca` varchar(255) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id`, `marca`, `imagen`) VALUES
(1, 'DENTSPLY', '1537DENTSPLY.jpg'),
(2, 'EURONDA', '3012EURONDA.jpg'),
(3, 'coxo', '34COXO.jpg'),
(4, 'ADITEK', '04ADITEK.jpg'),
(5, 'EURONDA', '12EURONDA.jpg'),
(6, '3M ESPE', '293m ESPE.jpg'),
(7, 'ANGELUS', '52ANGELUS.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `usuarios_id` int(5) unsigned NOT NULL,
  `entregado` tinyint(1) DEFAULT NULL,
  `fechaPedido` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pedidos_FKIndex1` (`usuarios_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `usuarios_id`, `entregado`, `fechaPedido`) VALUES
(1, 1, 0, '2012-05-25'),
(2, 1, 0, '0000-00-00'),
(3, 2, 1, '2012-08-10'),
(4, 2, 1, '2012-08-10'),
(5, 2, 1, '2012-08-10'),
(6, 1, 0, '2012-08-10'),
(7, 1, 0, '2012-08-10'),
(8, 2, 0, '2012-08-10'),
(9, 1, 1, '2012-08-11'),
(10, 1, 0, '2012-08-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos_has_productos`
--

CREATE TABLE IF NOT EXISTS `pedidos_has_productos` (
  `pedidos_id` int(8) unsigned NOT NULL,
  `productos_id` int(5) unsigned NOT NULL,
  PRIMARY KEY (`pedidos_id`,`productos_id`),
  KEY `pedidos_has_productos_FKIndex1` (`pedidos_id`),
  KEY `pedidos_has_productos_FKIndex2` (`productos_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedidos_has_productos`
--

INSERT INTO `pedidos_has_productos` (`pedidos_id`, `productos_id`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) DEFAULT NULL,
  `detalle` text,
  `cantidad` int(3) unsigned DEFAULT NULL,
  `precio` float(10,2) DEFAULT NULL,
  `marca` varchar(20) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  `imagen` text,
  `archivo1` varchar(255) DEFAULT NULL,
  `archivo2` varchar(255) DEFAULT NULL,
  `canVendida` int(2) unsigned DEFAULT NULL,
  `categoriaNivel1` int(3) DEFAULT NULL,
  `categoriaNivel2` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idPro` (`id`),
  KEY `idCat1` (`categoriaNivel1`),
  KEY `idCat2` (`categoriaNivel2`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `titulo`, `detalle`, `cantidad`, `precio`, `marca`, `activo`, `imagen`, `archivo1`, `archivo2`, `canVendida`, `categoriaNivel1`, `categoriaNivel2`) VALUES
(16, 'Tercer Producto', 'Producto de listado para limpiar dientes, esmalte protector de caries, regenerador de capaz de proteccion', 34, 50.00, '1', 1, '/imagen/27022012016.jpg', NULL, NULL, 3, 3, 5),
(17, 'cargando imagen', 'aca ira el detalle en lineas', 333, 4.00, '4', 1, '', NULL, NULL, 2, 2, 6),
(18, 'nuemamente cargando', 'mas datos', 2, 33.00, '2', 1, '310314-110328Captura de pantalla 2013-08-21 a la(s) 14.35.59.png', NULL, NULL, 2, 8, 8),
(21, 'DUCHA BUCAL ACQUAFIT 3 PUNTAS (nuevo diseño)', 'Diseño portatil inalambrico.\nEquipado con 3 boquillas intercambiables.Dos modos de presion de agua.Mango antideslizante.Dos opciones de carga de agua.Masajea suavemente y estimula las encias.Remueve la placa bacteriana, elimina la inflamacion gingival.Previene caries.El agua fluye por las cavidades interdentales removiendo todo tipo de residuos.', 3, 33.00, '1', 2, '010414-110400ducha bucal acquafit.jpg', NULL, NULL, 2, 3, 3),
(22, 'ACIDO FOSFORICO SDI JERINGA * 12 GRS.', 'Grabado rapido y seguro.\r\nTixotropico.\r\nFacilita la adhesión.\r\nColor azul.\r\nNo interfiere con el adhesivo.', 3, 164.11, '2', 1, '030414-050447acidofosforico_sdni_jeringa_12.jpg', NULL, NULL, 0, 1, 1),
(23, 'ACIDO FOSFORICO 3m JERINGA * 9 GRS.', 'Grabado rapido y seguro.\r\nTixotropico.\r\nFacilita la adhesión.\r\nColor azul.\r\nNo interfiere con el adhesivo.', 3, 164.11, '2', 1, '030414-050447acidofosforico_sdni_jeringa_12.jpg', NULL, NULL, 0, 1, 1),
(24, 'sadfasdf', 'sdfsadfasdfa', 3, 3.00, '1', 3, '130514-04050535_evita.jpg', NULL, NULL, 4, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `top20`
--

CREATE TABLE IF NOT EXISTS `top20` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idPro` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `top20`
--

INSERT INTO `top20` (`id`, `idPro`) VALUES
(1, 17),
(2, 18),
(3, 23),
(4, 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `nick` varchar(10) DEFAULT NULL,
  `password_2` text,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `tip` enum('admin','user') DEFAULT NULL,
  `session` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nick`, `password_2`, `nombre`, `apellido`, `direccion`, `telefono`, `email`, `tip`, `session`) VALUES
(1, 'odv144', '41fd0a87b7e0f500a9dc9a37ae54b885', 'omar dario', 'virili', 'urquiza', '1350', 'omar_virili@hot.com', 'admin', '4fe8e5f40591d9.56527194'),
(11, 'jo', 'eef48c61b60ab7dc8ff201314e9fc44f', 'ojo', 'jojo', 'joj', '4234', 'jkjklj@dd.com', '', '5354f4a8d3e752.51726003'),
(10, 'asdfasdfa', 'eece7ab2879f673299a25e35ac487dd3', 'kljkl', 'jlkj', 'lkjjlk', '8798', 'jlkjl@sda.com', '', '5354f478d6a233.56089809'),
(9, 'lkjlk', '6574efc79500a135a86095270a0aa5af', 'klj', 'lkjlk', 'jlkj', '4234', 'jkjklj@dd.com', NULL, '5354f41a679966.05440188'),
(8, 'cdp', 'dab777e489748d4a2603646c6564b258', 'Carlos', 'Perez', 'Ameguino', '', 'cdp@gmail.com', NULL, '5348068a505282.01632663'),
(12, 'jo', '7ad0c079205ff483544de08895e5eff7', 'ojo', 'jojo', 'joj', '4234', 'jkjklj@dd.com', '', '5354f4bdc13547.86027772'),
(13, 'toto', '8d8e1aff97d0f728a710411a1bc058f1', 'toto', 'toto', 'toto', '444', 'toto@gmail.com', '', '5354f4f7043ff9.76768251');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE IF NOT EXISTS `venta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `detalle` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id`, `detalle`) VALUES
(1, '{"detalles":[{"id":"1","titulo":"MI Producto","detalle":"detalles","cantidad":"6","precio":"45.00","marca":"3m","activo":"1","imagen":"\\/imagen\\/geringa.jpg","canVendida":"3"},{"id":"10","titulo":"algo","detalle":"asfdljasdlfjlk","cantidad":"6","precio":"49.00","marca":"sdjlkf","activo":"1","imagen":null,"canVendida":"3"}],"fechaPedido":"2012-11-13","entregado":0,"user":{"id":"1","nick":"odv144","password_2":"41fd0a87b7e0f500a9dc9a37ae54b885","nombre":"omar dario","apellido":"virili","direccion":"urquiza","telefono":"1350","email":"omar_virili@hot.com","tip":"admin","session":"4fe8e5f40591d9.56527194"},"fechaEntrega":"2012-11-16"}'),
(2, '{"detalles":[{"id":"1","titulo":"MI Producto","detalle":"detalles","cantidad":"6","precio":"45.00","marca":"3m","activo":"1","imagen":"\\/imagen\\/geringa.jpg","canVendida":"3"},{"id":"10","titulo":"algo","detalle":"asfdljasdlfjlk","cantidad":"6","precio":"49.00","marca":"sdjlkf","activo":"1","imagen":null,"canVendida":"3"}],"fechaPedido":"2012-11-13","entregado":1,"user":{"id":"1","nick":"odv144","password_2":"41fd0a87b7e0f500a9dc9a37ae54b885","nombre":"omar dario","apellido":"virili","direccion":"urquiza","telefono":"1350","email":"omar_virili@hot.com","tip":"admin","session":"4fe8e5f40591d9.56527194"},"fechaEntrega":"2012-11-23"}'),
(3, '{"detalles":[{"id":"1","titulo":"MI Producto","detalle":"detalles","cantidad":"6","precio":"45.00","marca":"3m","activo":"1","imagen":"\\/imagen\\/geringa.jpg","canVendida":"3"},{"id":"10","titulo":"algo","detalle":"asfdljasdlfjlk","cantidad":"6","precio":"49.00","marca":"sdjlkf","activo":"1","imagen":null,"canVendida":"3"}],"fechaPedido":"2012-11-13","entregado":0,"user":{"id":"1","nick":"odv144","password_2":"41fd0a87b7e0f500a9dc9a37ae54b885","nombre":"omar dario","apellido":"virili","direccion":"urquiza","telefono":"1350","email":"omar_virili@hot.com","tip":"admin","session":"4fe8e5f40591d9.56527194"},"fechaEntrega":"2012-11-16"}'),
(4, '{"detalles":[{"id":"1","titulo":"MI Producto","detalle":"detalles","cantidad":"6","precio":"45.00","marca":"3m","activo":"1","imagen":"\\/imagen\\/geringa.jpg","canVendida":"3"},{"id":"10","titulo":"algo","detalle":"asfdljasdlfjlk","cantidad":"6","precio":"49.00","marca":"sdjlkf","activo":"1","imagen":null,"canVendida":"3"}],"fechaPedido":"2012-11-13","entregado":1,"user":{"id":"1","nick":"odv144","password_2":"41fd0a87b7e0f500a9dc9a37ae54b885","nombre":"omar dario","apellido":"virili","direccion":"urquiza","telefono":"1350","email":"omar_virili@hot.com","tip":"admin","session":"4fe8e5f40591d9.56527194"},"fechaEntrega":"2012-11-16"}'),
(5, '{"detalles":[{"id":"1","titulo":"MI Producto","detalle":"detalles","cantidad":"6","precio":"45.00","marca":"3m","activo":"1","imagen":"\\/imagen\\/geringa.jpg","canVendida":"3"},{"id":"10","titulo":"algo","detalle":"asfdljasdlfjlk","cantidad":"6","precio":"49.00","marca":"sdjlkf","activo":"1","imagen":null,"canVendida":"3"}],"fechaPedido":"2012-11-13","entregado":1,"user":{"id":"1","nick":"odv144","password_2":"41fd0a87b7e0f500a9dc9a37ae54b885","nombre":"omar dario","apellido":"virili","direccion":"urquiza","telefono":"1350","email":"omar_virili@hot.com","tip":"admin","session":"4fe8e5f40591d9.56527194"},"fechaEntrega":"2012-11-16"}'),
(6, '{"detalles":[{"id":"1","titulo":"MI Producto","detalle":"detalles","cantidad":"7","precio":"45.00","marca":"3m","activo":"1","imagen":"\\/imagen\\/geringa.jpg","canVendida":"3"},{"id":"11","titulo":"asdfasd","detalle":"asdfasdf","cantidad":"9","precio":"3.00","marca":"3","activo":"1","imagen":"","canVendida":"22"},{"id":"16","titulo":"asdfasdf","detalle":"asdfasdfasdf","cantidad":"10","precio":"33.00","marca":"33","activo":"1","imagen":"\\/imagen\\/25022012005.jpg","canVendida":"3"}],"fechaPedido":"2012-11-14","entregado":"0","user":{"id":"1","nick":"odv144","password_2":"41fd0a87b7e0f500a9dc9a37ae54b885","nombre":"omar dario","apellido":"virili","direccion":"urquiza","telefono":"1350","email":"omar_virili@hot.com","tip":"admin","session":"4fe8e5f40591d9.56527194"}}'),
(7, '{"detalles":[{"id":"1","titulo":"MI Producto","detalle":"detalles","cantidad":"7","precio":"45.00","marca":"3m","activo":"1","imagen":"\\/imagen\\/geringa.jpg","canVendida":"3"},{"id":"11","titulo":"asdfasd","detalle":"asdfasdf","cantidad":"9","precio":"3.00","marca":"3","activo":"1","imagen":"","canVendida":"22"},{"id":"16","titulo":"asdfasdf","detalle":"asdfasdfasdf","cantidad":"10","precio":"33.00","marca":"33","activo":"1","imagen":"\\/imagen\\/25022012005.jpg","canVendida":"3"}],"fechaPedido":"2012-11-14","entregado":0,"user":{"id":"1","nick":"odv144","password_2":"41fd0a87b7e0f500a9dc9a37ae54b885","nombre":"omar dario","apellido":"virili","direccion":"urquiza","telefono":"1350","email":"omar_virili@hot.com","tip":"admin","session":"4fe8e5f40591d9.56527194"},"fechaEntrega":"2012-11-16"}'),
(8, '{"detalles":[{"id":"1","titulo":"MI Producto","detalle":"detalles","cantidad":"7","precio":"45.00","marca":"3m","activo":"1","imagen":"\\/imagen\\/geringa.jpg","canVendida":"3"},{"id":"11","titulo":"asdfasd","detalle":"asdfasdf","cantidad":"9","precio":"3.00","marca":"3","activo":"1","imagen":"","canVendida":"22"},{"id":"16","titulo":"asdfasdf","detalle":"asdfasdfasdf","cantidad":"10","precio":"33.00","marca":"33","activo":"1","imagen":"\\/imagen\\/25022012005.jpg","canVendida":"3"}],"fechaPedido":"2012-11-14","entregado":1,"user":{"id":"1","nick":"odv144","password_2":"41fd0a87b7e0f500a9dc9a37ae54b885","nombre":"omar dario","apellido":"virili","direccion":"urquiza","telefono":"1350","email":"omar_virili@hot.com","tip":"admin","session":"4fe8e5f40591d9.56527194"},"fechaEntrega":"2012-11-16"}'),
(9, '{"detalles":[{"id":"1","titulo":"MI Producto","detalle":"detalles","cantidad":"7","precio":"45.00","marca":"3m","activo":"1","imagen":"\\/imagen\\/geringa.jpg","canVendida":"3"},{"id":"11","titulo":"asdfasd","detalle":"asdfasdf","cantidad":"9","precio":"3.00","marca":"3","activo":"1","imagen":"","canVendida":"22"},{"id":"16","titulo":"asdfasdf","detalle":"asdfasdfasdf","cantidad":"10","precio":"33.00","marca":"33","activo":"1","imagen":"\\/imagen\\/25022012005.jpg","canVendida":"3"}],"fechaPedido":"2012-11-14","entregado":"0","user":{"id":"1","nick":"odv144","password_2":"41fd0a87b7e0f500a9dc9a37ae54b885","nombre":"omar dario","apellido":"virili","direccion":"urquiza","telefono":"1350","email":"omar_virili@hot.com","tip":"admin","session":"4fe8e5f40591d9.56527194"}}'),
(10, '{"detalles":[{"id":"1","titulo":"MI Producto","detalle":"detalles","cantidad":"2","precio":"45.00","marca":"3m","activo":"1","imagen":"\\/imagen\\/geringa.jpg","canVendida":"3"}],"fechaPedido":"2012-11-22","entregado":"0","user":{"id":"1","nick":"odv144","password_2":"41fd0a87b7e0f500a9dc9a37ae54b885","nombre":"omar dario","apellido":"virili","direccion":"urquiza","telefono":"1350","email":"omar_virili@hot.com","tip":"admin","session":"4fe8e5f40591d9.56527194"}}');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categorianivel2`
--
ALTER TABLE `categorianivel2`
  ADD CONSTRAINT `fkcat2_cat1` FOREIGN KEY (`idCat1`) REFERENCES `categorianivel1` (`idCategoria1`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
