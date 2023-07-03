-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-07-2023 a las 17:31:26
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parcial-2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametros_producto`
--

CREATE TABLE `parametros_producto` (
  `id` int(11) NOT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `marca` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `imagen`, `nombre`, `precio`, `descripcion`, `categoria_id`) VALUES
(3, '', 'Nike Huarache', '50000.00', 'Unisex', NULL),
(4, '', 'Air Jordan 1 Retro', '50000.00', 'Unisex, low', NULL),
(5, '', 'Air Jordan 1 Toe', '50000.00', 'Unisex, low', NULL),
(6, '', 'Air Jordan 1 White', '50000.00', 'Unisex, low', NULL),
(7, '', 'Air Jordan 1 Grey', '50000.00', 'Unisex', NULL),
(8, '', 'Air Force UV', '50000.00', 'Unisex, edicion limitada, low', NULL),
(9, '', 'Jordan Flyer', '50000.00', 'Unisex, botita, multicolor', NULL),
(10, '', 'Air Max 97', '50000.00', 'Unisex, escala de grises', NULL),
(11, '', 'SB Dior', '25000.00', 'Unisex, edicion limitada, low', NULL),
(12, '', 'Air Jordan 1 Brown', '50000.00', 'Unisex, edicion limitada, low', NULL),
(13, '', 'Air Jordan 1 Ice', '50000.00', 'Unisex, edicion limitada, low', NULL),
(14, '', 'Air Jordan 1 OG', '50000.00', 'Unisex, edicion limitada, low', NULL),
(15, '', 'Air Force Grey', '50000.00', 'Unisex, edicion limitada', NULL),
(16, '', 'Air Force Color', '50000.00', 'Unisex, edicion limitada', NULL),
(17, '', 'Air Jordan 1 StarFish', '50000.00', 'Unisex, edicion limitada', NULL),
(18, '', 'Nike Huarache', '50000.00', 'Unisex', NULL),
(19, '', 'Air Jordan 1 Retro', '50000.00', 'Unisex, low', NULL),
(20, '', 'Air Jordan 1 Toe', '50000.00', 'Unisex, low', NULL),
(21, '', 'Air Jordan 1 White', '50000.00', 'Unisex, low', NULL),
(22, '', 'Air Jordan 1 Grey', '50000.00', 'Unisex', NULL),
(23, '', 'Air Force UV', '50000.00', 'Unisex, edicion limitada, low', NULL),
(24, '', 'Jordan Flyer', '50000.00', 'Unisex, botita, multicolor', NULL),
(25, '', 'Air Max 97', '50000.00', 'Unisex, escala de grises', NULL),
(26, '', 'SB Dior', '25000.00', 'Unisex, edicion limitada, low', NULL),
(27, '', 'Air Jordan 1 Brown', '50000.00', 'Unisex, edicion limitada, low', NULL),
(28, '', 'Air Jordan 1 Ice', '50000.00', 'Unisex, edicion limitada, low', NULL),
(29, '', 'Air Jordan 1 OG', '50000.00', 'Unisex, edicion limitada, low', NULL),
(30, '', 'Air Force Grey', '50000.00', 'Unisex, edicion limitada', NULL),
(31, '', 'Air Force Color', '50000.00', 'Unisex, edicion limitada', NULL),
(32, '', 'Air Jordan 1 StarFish', '50000.00', 'Unisex, edicion limitada', NULL),
(33, '', 'Nike Huarache', '50000.00', 'Unisex', NULL),
(34, '', 'Air Jordan 1 Retro', '50000.00', 'Unisex, low', NULL),
(35, '', 'Air Jordan 1 Toe', '50000.00', 'Unisex, low', NULL),
(36, '', 'Air Jordan 1 White', '50000.00', 'Unisex, low', NULL),
(37, '', 'Air Jordan 1 Grey', '50000.00', 'Unisex', NULL),
(38, '', 'Air Force UV', '50000.00', 'Unisex, edicion limitada, low', NULL),
(39, '', 'Jordan Flyer', '50000.00', 'Unisex, botita, multicolor', NULL),
(40, '', 'Air Max 97', '50000.00', 'Unisex, escala de grises', NULL),
(41, '', 'SB Dior', '25000.00', 'Unisex, edicion limitada, low', NULL),
(42, '', 'Air Jordan 1 Brown', '50000.00', 'Unisex, edicion limitada, low', NULL),
(43, '', 'Air Jordan 1 Ice', '50000.00', 'Unisex, edicion limitada, low', NULL),
(44, '', 'Air Jordan 1 OG', '50000.00', 'Unisex, edicion limitada, low', NULL),
(45, '', 'Air Force Grey', '50000.00', 'Unisex, edicion limitada', NULL),
(46, '', 'Air Force Color', '50000.00', 'Unisex, edicion limitada', NULL),
(47, '', 'Air Jordan 1 StarFish', '50000.00', 'Unisex, edicion limitada', NULL),
(48, '', 'Air Jordan 1 Retro', '50000.00', 'Unisex, low', NULL),
(49, '', 'Air Jordan 1 Toe', '50000.00', 'Unisex, low', NULL),
(50, '', 'Air Jordan 1 White', '50000.00', 'Unisex, low', NULL),
(51, '', 'Air Jordan 1 Grey', '50000.00', 'Unisex', NULL),
(52, '', 'Air Force UV', '50000.00', 'Unisex, edicion limitada, low', NULL),
(53, '', 'Jordan Flyer', '50000.00', 'Unisex, botita, multicolor', NULL),
(54, '', 'Air Max 97', '50000.00', 'Unisex, escala de grises', NULL),
(55, '', 'SB Dior', '25000.00', 'Unisex, edicion limitada, low', NULL),
(56, '', 'Air Jordan 1 Brown', '50000.00', 'Unisex, edicion limitada, low', NULL),
(57, '', 'Air Jordan 1 Ice', '50000.00', 'Unisex, edicion limitada, low', NULL),
(58, '', 'Air Jordan 1 OG', '50000.00', 'Unisex, edicion limitada, low', NULL),
(59, '', 'Air Force Grey', '50000.00', 'Unisex, edicion limitada', NULL),
(60, '', 'Air Force Color', '50000.00', 'Unisex, edicion limitada', NULL),
(61, '', 'Air Jordan 1 StarFish', '50000.00', 'Unisex, edicion limitada', NULL),
(62, '', 'Air Jordan 1 Toe', '50000.00', 'Unisex, low', NULL),
(63, '', 'Air Jordan 1 White', '50000.00', 'Unisex, low', NULL),
(64, '', 'Air Jordan 1 Grey', '50000.00', 'Unisex', NULL),
(65, '', 'Air Force UV', '50000.00', 'Unisex, edicion limitada, low', NULL),
(66, '', 'Jordan Flyer', '50000.00', 'Unisex, botita, multicolor', NULL),
(67, '', 'Air Max 97', '50000.00', 'Unisex, escala de grises', NULL),
(68, '', 'SB Dior', '25000.00', 'Unisex, edicion limitada, low', NULL),
(69, '', 'Air Jordan 1 Brown', '50000.00', 'Unisex, edicion limitada, low', NULL),
(70, '', 'Air Jordan 1 Ice', '50000.00', 'Unisex, edicion limitada, low', NULL),
(71, '', 'Air Jordan 1 OG', '50000.00', 'Unisex, edicion limitada, low', NULL),
(72, '', 'Air Force Grey', '50000.00', 'Unisex, edicion limitada', NULL),
(73, '', 'Air Force Color', '50000.00', 'Unisex, edicion limitada', NULL),
(74, '', 'Air Jordan 1 StarFish', '50000.00', 'Unisex, edicion limitada', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `parametros_producto`
--
ALTER TABLE `parametros_producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_id` (`producto_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `parametros_producto`
--
ALTER TABLE `parametros_producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `parametros_producto`
--
ALTER TABLE `parametros_producto`
  ADD CONSTRAINT `parametros_producto_ibfk_1` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
