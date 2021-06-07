-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2021 a las 16:19:26
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `balam`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_cat` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `editado` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_cat`, `nombre`, `editado`) VALUES
(1, 'Bicicletas', '2021-04-28 11:40:36'),
(2, 'Accesorios', '2021-04-28 11:40:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_pro` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` varchar(60) NOT NULL,
  `url_foto` varchar(50) NOT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `nombre_cat` varchar(50) DEFAULT NULL,
  `url_mercado_libre` varchar(60) NOT NULL,
  `url_amazon` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_pro`, `nombre`, `precio`, `url_foto`, `id_categoria`, `nombre_cat`, `url_mercado_libre`, `url_amazon`) VALUES
(1, 'Explorer 27.5', '$ 8,015.00', 'EXPLORER.png', NULL, 'bicicletas', 'https://n9.cl/305f9', ''),
(2, 'GTR 27.5', '$ 9,312.00', 'GTR.png', NULL, 'bicicletas', 'https://n9.cl/dom8m', ''),
(3, 'Plegable 26', '$ 6,921.00', 'PLEGABLE.png', NULL, 'bicicletas', 'https://n9.cl/2kco7', ''),
(4, 'Electrica SD 27.5', '$ 33,049.00', 'ELECTRICa.png', NULL, 'bicicletas', 'https://n9.cl/eyb0h', ''),
(5, 'Trail Amarilla 26', '$ 9, 597.00', 'TRAIL-AMARILLO.png', NULL, 'bicicletas', 'https://n9.cl/udbns', ''),
(6, 'Casco Patrones', '$ 737.00', 'CASCO PATRON LADO2.png', NULL, 'accesorios', '', ''),
(7, 'Casco Liso', '$ 3,439.00 ', 'CASCO LISO TRASERO.png', NULL, 'accesorios', '', ''),
(8, 'Rodilleras', '$ 2,948.36', 'RODILLERA Y CODERA CONJUNTO FRENTE.png', NULL, 'accesorios', '', ''),
(9, 'Guantes', '$ 552.00', 'GUANTES ARRIBA2.png', NULL, 'accesorios', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usr` int(11) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `contrasena` varchar(60) NOT NULL,
  `editado` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usr`, `correo`, `nombre`, `contrasena`, `editado`) VALUES
(130, 'cacosta@awsoftware.mx', 'Christian Acosta ', '$2y$12$sk6B6k87JOFVVDuQ9vZWceV.sreEOhTDsNBN1F8X8z4M3XseX.Xo.', '2021-04-12 17:13:00'),
(132, 'ijaramillo@awsoftware.mx', 'Isabel Jaramillo', '$2y$12$A3iod6fv3W3EEzE2oMLZN.kmHagMA7CEGGP3UTs6A6GvhaJUoCSz2', '2021-04-30 09:52:31');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_cat`),
  ADD KEY `nombre` (`nombre`),
  ADD KEY `nombre_2` (`nombre`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_pro`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usr`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_cat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
