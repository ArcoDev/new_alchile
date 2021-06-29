-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2021 a las 23:16:49
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
-- Base de datos: `bd_studioalchile`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id_imagenes` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `url_foto` varchar(50) NOT NULL,
  `id_categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id_imagenes`, `nombre`, `url_foto`, `id_categoria`) VALUES
(1, 'Diseño', 'DISEÑO1.jpg', 1),
(2, 'Diseño', 'DISEÑO2.jpg', 1),
(3, 'Diseño', 'DISEÑO3.jpg', 1),
(4, 'Diseño', 'DISEÑO4.jpg', 1),
(5, 'Fotografia', 'FOTOGRAFIA2.jpg', 2),
(6, 'Fotografia', 'FOTOGRAFIA3.jpg', 2),
(7, 'Fotografia', 'FOTOGRAFIA4.jpg', 2),
(8, 'Fotografia', 'FOTOGRAFIAS.jpg', 2),
(9, 'Social Media', 'SOCIAL-MEDIA.jpg', 3),
(10, 'Social Media', 'SOCIAL-MEDIA2.jpg', 3),
(11, 'Social Media', 'SOCIAL-MEDIA3.jpg', 3),
(12, 'Social Media', 'SOCIAL-MEDIA4.jpg', 3),
(13, 'Video', 'VIDEO1.jpg', 4),
(14, 'Video', 'VIDEO2.jpg', 4),
(15, 'Video', 'VIDEO3.jpg', 4),
(16, 'Video', 'VIDEO4.jpg', 4),
(17, 'MKT', 'MKT-DIGITAL-1.jpg', 5),
(18, 'MKT', 'MKT-DIGITAL4.jpg', 5),
(19, 'MKT', 'MKT-DIGITAL-2.jpg', 5),
(20, 'MKT', 'MKT-DIGITAL-3.jpg', 5),
(21, 'Branding', 'BRANDING.jpg', 6),
(22, 'Branding', 'BRANDING4.jpg', 6),
(23, 'Branding', 'BRANDING2.jpg', 6),
(24, 'Branding', 'BRANDING3.jpg', 6),
(25, 'Dron', 'TOMA-CON-DRON1.jpg', 7),
(26, 'Dron', 'TOMA-CON-DRON2.jpg', 7),
(27, 'Dron', 'TOMA-CON-DRON3.jpg', 7),
(28, 'Dron', 'TOMA-CON-DRON4.jpg', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portafolio`
--

CREATE TABLE `portafolio` (
  `id_cat` int(11) NOT NULL,
  `nombre_portafolio` varchar(50) NOT NULL,
  `editado` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `portafolio`
--

INSERT INTO `portafolio` (`id_cat`, `nombre_portafolio`, `editado`) VALUES
(1, 'Diseño', '2021-06-16 10:18:51'),
(2, 'Fotografía', '2021-06-16 10:19:03'),
(3, 'Social Media', '2021-06-16 10:19:25'),
(4, 'Video Marketing', '2021-06-16 10:19:41'),
(5, 'MKT Digital', '2021-06-16 10:19:50'),
(6, 'Branding', '2021-06-16 10:19:58'),
(7, 'Toma Con Dron', '2021-06-16 10:20:06');

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
(130, 'cacosta@awsoftware.mx', 'Christian Acosta ', '$2y$12$sk6B6k87JOFVVDuQ9vZWceV.sreEOhTDsNBN1F8X8z4M3XseX.Xo.', '2021-04-12 17:13:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id_imagenes`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `portafolio`
--
ALTER TABLE `portafolio`
  ADD PRIMARY KEY (`id_cat`),
  ADD KEY `nombre` (`nombre_portafolio`),
  ADD KEY `nombre_2` (`nombre_portafolio`);

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
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id_imagenes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `portafolio`
--
ALTER TABLE `portafolio`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `imagenes_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `portafolio` (`id_cat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
