-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-09-2024 a las 12:52:48
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `idUsuario` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` double NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `tamaño` varchar(255) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`idUsuario`, `nombre`, `precio`, `categoria`, `tipo`, `color`, `imagen`, `tamaño`, `cantidad`) VALUES
(7, 'Cuadradas', 99.99, 'Permanente', 'Basicas', '255,0,0', 'imagenes/uñasColorBasicoMedianasCuadradas.jpg', 'XXL', 1),
(17, 'Onduladas', 99.99, 'Permanente', 'Diseño', '255,255,0', 'imagenes/uñasDiseñoOndas.jpg', 'M', 1),
(17, 'Onduladas', 99.99, 'Permanente', 'Diseño', '55,55,55', 'imagenes/uñasDiseñoOndas.jpg', 'M', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colorbasico`
--

CREATE TABLE `colorbasico` (
  `color` varchar(255) NOT NULL,
  `stock` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `colorbasico`
--

INSERT INTO `colorbasico` (`color`, `stock`) VALUES
('255,0,0', 'true'),
('0,0,255', 'true'),
('255,255,0', 'true'),
('0,255,0', 'true'),
('0, 0, 0 ', 'true'),
('55, 55, 55', 'true'),
('77, 0, 56 ', 'true'),
('255, 0, 185 ', 'true'),
('252, 191, 236 ', 'true'),
('77, 17, 17 ', 'true'),
('0, 255, 232 ', 'true'),
('133, 203, 197 ', 'true'),
('24, 95, 89 ', 'true');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `idCompra` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `PrecioTot` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`idCompra`, `idUsuario`, `PrecioTot`) VALUES
(10, 7, 1799.82),
(27, 1, 99.99),
(28, 1, 199.98),
(29, 1, 199.98),
(30, 1, 199.98),
(31, 1, 199.98),
(32, 1, 199.98),
(33, 1, 199.98),
(34, 1, 199.98),
(35, 1, 199.98),
(36, 1, 199.98),
(37, 1, 199.98),
(38, 1, 199.98),
(39, 1, 199.98),
(40, 1, 199.98),
(41, 1, 199.98),
(42, 1, 199.98),
(43, 1, 199.98),
(44, 1, 199.98),
(45, 1, 199.98),
(46, 1, 199.98),
(47, 1, 199.98),
(48, 1, 199.98),
(49, 1, 199.98),
(50, 1, 199.98),
(51, 1, 199.98),
(52, 1, 199.98),
(53, 1, 199.98),
(54, 1, 199.98),
(55, 7, 2199.78),
(56, 7, 599.94),
(57, 7, 399.96),
(58, 7, 99.99);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallescompra`
--

CREATE TABLE `detallescompra` (
  `idCompra` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` double NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `color` varchar(100) NOT NULL,
  `tamaño` varchar(10) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detallescompra`
--

INSERT INTO `detallescompra` (`idCompra`, `nombre`, `precio`, `categoria`, `tipo`, `color`, `tamaño`, `cantidad`) VALUES
(24, 'Cuadradas', 99.99, 'Permanente', 'Basicas', '0,0,255', 'M', 10),
(24, 'Cuadradas', 99.99, 'Permanente', 'Basicas', '255,255,0', 'M', 1),
(24, 'Cuadradas', 99.99, 'Permanente', 'Basicas', '0,0,255', 'M', 1),
(24, 'Cuadradas', 99.99, 'Permanente', 'Basicas', '255,0,185', 'M', 3),
(24, 'Cuadradas', 99.99, 'Permanente', 'Basicas', '24,95,89', 'XXL', 6),
(24, 'Redondas', 99.99, 'Permanente', 'Basicas', '24,95,89', 'XXL', 2),
(24, 'Redondas', 99.99, 'Permanente', 'Basicas', '0,255,0', 'L', 10),
(25, 'Cuadradas', 99.99, 'Permanente', 'Basicas', '0,0,255', 'M', 1),
(25, 'Cuadradas', 99.99, 'Permanente', 'Basicas', '255,255,0', 'M', 1),
(25, 'Cuadradas', 99.99, 'Permanente', 'Basicas', '0,0,255', 'M', 1),
(25, 'Cuadradas', 99.99, 'Permanente', 'Basicas', '255,0,185', 'M', 3),
(25, 'Cuadradas', 99.99, 'Permanente', 'Basicas', '24,95,89', 'XXL', 6),
(25, 'Redondas', 99.99, 'Permanente', 'Basicas', '24,95,89', 'XXL', 2),
(25, 'Redondas', 99.99, 'Permanente', 'Basicas', '0,255,0', 'L', 1),
(26, 'Cuadradas', 99.99, 'Permanente', 'Basicas', '0,255,0', 'XXL', 1),
(27, 'Cuadradas', 99.99, 'Permanente', 'Basicas', '0,255,0', 'XXL', 1),
(28, 'Cuadradas', 99.99, 'Permanente', 'Basicas', '255,0,0', 'S', 2),
(55, 'Cuadradas', 99.99, 'Permanente', 'Basicas', '255,255,0', 'M', 10),
(55, 'Cuadradas', 99.99, 'Permanente', 'Basicas', '255,0,185', 'XXL', 1),
(55, 'Cuadradas', 99.99, 'Permanente', 'Basicas', '55,55,55', 'M', 1),
(55, 'Cuadradas', 99.99, 'Permanente', 'Basicas', '24,95,89', 'XXL', 10),
(56, 'Cuadradas', 99.99, 'Permanente', 'Basicas', '0,0,255', 'XXL', 1),
(56, 'Cuadradas', 99.99, 'Permanente', 'Basicas', '0,0,0', 'XXL', 2),
(56, 'Cuadradas', 99.99, 'Permanente', 'Basicas', '77,0,56', 'XXL', 1),
(56, 'Cuadradas', 99.99, 'Permanente', 'Basicas', '77,17,17', 'XXL', 1),
(56, 'Cuadradas', 99.99, 'Permanente', 'Basicas', '252,191,236', 'XXL', 1),
(57, 'Cuadradas', 99.99, 'Permanente', 'Basicas', '77,17,17', 'M', 1),
(57, 'Cuadradas', 99.99, 'Permanente', 'Basicas', '77,0,56', 'M', 1),
(57, 'Cuadradas', 99.99, 'Permanente', 'Basicas', '133,203,197', 'M', 1),
(57, 'Cuadradas', 99.99, 'Permanente', 'Basicas', '252,191,236', 'M', 1),
(58, 'Onduladas', 99.99, 'Permanente', 'Diseño', '55,55,55', 'L', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unas`
--

CREATE TABLE `unas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio` double DEFAULT NULL,
  `categoria` varchar(255) DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `unas`
--

INSERT INTO `unas` (`id`, `nombre`, `descripcion`, `precio`, `categoria`, `tipo`, `color`, `imagen`) VALUES
(2, 'Cuadradas', 'Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en demostraciones de tipografías o de borradores de diseño para probar el diseño visual antes de insertar el texto final', 99.99, 'Permanente', 'Basicas', 'basicos', 'imagenes/uñasColorBasicoMedianasCuadradas.jpg'),
(3, 'Onduladas', 'Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en demostraciones de tipografías o de borradores de diseño para probar el diseño visual antes de insertar el texto final', 99.99, 'Permanente', 'Diseño', 'basicos', 'imagenes/uñasDiseñoOndas.jpg'),
(4, 'Estrellas', 'Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en demostraciones de tipografías o de borradores de diseño para probar el diseño visual antes de insertar el texto final', 99.99, 'Permanente', 'Diseño', 'basicos', 'imagenes/estrellas.jpg'),
(5, 'Redondas', 'Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en demostraciones de tipografías o de borradores de diseño para probar el diseño visual antes de insertar el texto final', 99.99, 'Permanente', 'Basicas', 'basicos', 'imagenes/uñasColorBasicosMediasRedondas.jpg'),
(6, 'Plantas', 'Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en demostraciones de tipografías o de borradores de diseño para probar el diseño visual antes de insertar el texto final', 10, 'Permanente', 'Basicas', 'basicos', 'imagenes/plantas.jpg'),
(7, 'Corazon', 'Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en demostraciones de tipografías o de borradores de diseño para probar el diseño visual antes de insertar el texto final', 30, 'Semipermanente', 'Diseño', 'basicos', 'imagenes/corazon.jpg'),
(8, 'relampagos', 'Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en demostraciones de tipografías o de borradores de diseño para probar el diseño visual antes de insertar el texto final', 50, 'Semipermanente', 'Diseño', 'basicos', 'imagenes/relampagos.jpg'),
(9, 'cerezo', 'Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en demostraciones de tipografías o de borradores de diseño para probar el diseño visual antes de insertar el texto final', 30, 'Semipermanente', 'Diseño', 'basicos', 'imagenes/cerezo.jpg'),
(10, 'Corazón espino', 'Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en demostraciones de tipografías o de borradores de diseño para probar el diseño visual antes de insertar el texto final', 73, 'Semipermanente', 'Diseño', 'baiscos', 'imagenes/corazonespino.jpg'),
(11, 'Aguas', 'Uñas press on con diseño de aguas', 20, 'Semipermanente', 'Basicas', 'basicos', 'imagenes/agua.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `Clave` varchar(255) NOT NULL,
  `Tipo` int(1) NOT NULL,
  `Correo` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Usuario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `Clave`, `Tipo`, `Correo`, `created_at`, `updated_at`, `Usuario`) VALUES
(1, 'se', 0, 'fes', '2024-05-08 11:51:12', '2024-05-08 11:51:12', 'see'),
(2, 'ff', 0, 'ff', '2024-05-08 11:05:04', '2024-05-08 11:05:04', 'fff'),
(3, 'Nacho', 1, 'gamo', '2024-05-08 11:05:01', '2024-05-08 11:05:01', 'gam'),
(4, 't', 0, 'tt', '2024-05-08 09:05:22', '2024-05-08 09:05:22', 'tor'),
(5, 'luis2', 0, 'luis', '2024-05-08 09:17:18', '2024-05-08 09:17:18', '2'),
(6, 'juan2', 0, 'juan2', '2024-05-08 09:54:36', '2024-05-08 09:54:36', 'juan'),
(7, 'iris', 0, 'iris', '2024-05-29 19:09:13', '2024-05-29 19:09:13', 'iris'),
(11, '', 0, '', '2024-06-12 09:10:48', '2024-06-12 09:10:48', ''),
(12, '', 0, '', '2024-06-12 09:11:49', '2024-06-12 09:11:49', ''),
(13, 'juan', 0, 'juan', '2024-06-12 09:23:22', '2024-06-12 09:23:22', 'juan'),
(15, 'pedrito', 0, 'pedrito', '2024-06-13 08:19:23', '2024-06-13 08:19:23', 'pedrito'),
(16, 'iris', 0, 'iris@gmail.com', '2024-06-13 08:23:01', '2024-06-13 08:23:01', 'iris'),
(17, 'juan', 0, 'juan@gmail.com', '2024-07-03 14:13:34', '2024-07-03 14:13:34', 'juan');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`idCompra`);

--
-- Indices de la tabla `unas`
--
ALTER TABLE `unas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `idCompra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de la tabla `unas`
--
ALTER TABLE `unas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
