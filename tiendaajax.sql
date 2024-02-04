-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-02-2024 a las 17:21:10
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendaajax`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `codCate` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`codCate`, `nombre`) VALUES
(1, 'Procesadores'),
(2, 'Tarjetas Gráfic'),
(3, 'Memoria RAM'),
(4, 'Discos Duros'),
(5, 'Teclados y Rato'),
(7, 'Monitores');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidoproducto`
--

CREATE TABLE `pedidoproducto` (
  `codPedPro` int(11) NOT NULL,
  `codPedi` int(11) DEFAULT NULL,
  `codProd` int(11) DEFAULT NULL,
  `unidades` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidoproducto`
--

INSERT INTO `pedidoproducto` (`codPedPro`, `codPedi`, `codProd`, `unidades`) VALUES
(1, 1, 1, 1),
(2, 2, 1, 1),
(3, 3, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `codPedi` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `codUsu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`codPedi`, `fecha`, `codUsu`) VALUES
(1, '2024-01-31', 4),
(2, '2024-01-31', 4),
(3, '2024-01-31', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codProd` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `codCate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codProd`, `nombre`, `precio`, `stock`, `descripcion`, `codCate`) VALUES
(1, 'Procesador Intel Core i9	', 349.99, 8, 'Potente procesador para gaming', 1),
(2, 'Tarjeta Gráfica NVIDIA RT', 699.99, 5, 'Gráficos de alta gama para juegos', 2),
(3, 'Memoria RAM Corsair 16GB', 79.99, 20, 'Rápida memoria para multitarea', 3),
(4, 'Disco Duro SSD Samsung 1T', 129.99, 14, 'Almacenamiento rápido y confiable', 4),
(5, 'Teclado mecánico RGB', 89.99, 6, 'Teclado para gaming con retroiluminación', 5),
(6, 'Teclado Wapardo', 999.00, 2, 'Esta to wapo', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reabastece`
--

CREATE TABLE `reabastece` (
  `codReab` int(11) NOT NULL,
  `codUsu` int(11) DEFAULT NULL,
  `codProd` int(11) DEFAULT NULL,
  `unidades` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `codUsu` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `contraseña` varchar(100) DEFAULT NULL,
  `permisos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`codUsu`, `nombre`, `direccion`, `correo`, `contraseña`, `permisos`) VALUES
(1, 'fernandito', 'NULL', 'costa@rap.com', '$2y$10$2NeU9hQKrKldZ', 0),
(2, 'Cliente2', 'Avenida del Gamer 2', 'cliente2@example.com', '$2y$10$Yq/jDY3OcMXZ4kENGN4I4eAyL66vJIup8zArKw64wjJC73ki1Qapm', 0),
(3, 'cliente3', 'Plaza de la tecnología 3', 'cliente3@example.com', '$2y$10$Yq/jDY3OcMXZ4kENGN4I4eAyL66vJIup8zArKw64wjJC73ki1Qapm', 0),
(4, 'cliente1', 'NULL', 'cliente1@example.com', '$2y$10$Yq/jDY3OcMXZ4kENGN4I4eAyL66vJIup8zArKw64wjJC73ki1Qapm', 0),
(5, 'cliente4', 'NULL', 'cliente4@example.com', '$2y$10$Yq/jDY3OcMXZ4kENGN4I4eAyL66vJIup8zArKw64wjJC73ki1Qapm', 0),
(6, 'admin1', 'calle principal 1234', 'admin1@example.com', '$2y$10$Yq/jDY3OcMXZ4kENGN4I4eAyL66vJIup8zArKw64wjJC73ki1Qapm', 1),
(7, 'admin2', 'avenida secundaria 456', 'admin2@example.com', '$2y$10$Yq/jDY3OcMXZ4kENGN4I4eAyL66vJIup8zArKw64wjJC73ki1Qapm', 1),
(8, 'admin3', 'plaza central 789', 'admin3@example.com', '$2y$10$Yq/jDY3OcMXZ4kENGN4I4eAyL66vJIup8zArKw64wjJC73ki1Qapm', 1),
(9, 'admin4', 'calle alamo 15', 'admin4@example.com', '$2y$10$Yq/jDY3OcMXZ4kENGN4I4eAyL66vJIup8zArKw64wjJC73ki1Qapm', 1),
(10, 'admin5', 'calle venus', 'admin5@example.com', '$2y$10$Yq/jDY3OcMXZ4kENGN4I4eAyL66vJIup8zArKw64wjJC73ki1Qapm', 1),
(11, 'Jose', 'C/ La pantomima', 'joselito@gmail.com', '$2y$10$ZuSycUlWRF42DYGm/ySVXePlVb6oGmOu3j47G5xVN6R1if08efbsa', 0),
(12, 'SUUU', 'C/ microsoft', 'prueba1@hotail.com', '$2y$10$4I7Y94bcqg51yQ.5JpQUmOgoyAEjb300S0Mg8OzaWlmW1AyXJsJU2', 0),
(13, 'Alfredo', 'C/ Granados', 'cliente5@gmail.com', '$2y$10$BSYH9aDZN8bqgWCd5Xe96e8N6AFhhIP.HKsyJhrqZVP7/fFmp4suC', 0),
(14, 'Alejandro', 'CalistoProtocol', 'alexander@arnold.com', '$2y$10$zy./KBaRd73ncrqGGEuvwOaGvgEflahxgShGqauWbwihTdAttsuP6', 0),
(15, 'hola', 'cualquiera', 'example@example', '$2y$10$MWk9Brye8I/C.chuVjZ8SerVjh9ngI9Xy1oBPUI5N.73YjimzByeC', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`codCate`);

--
-- Indices de la tabla `pedidoproducto`
--
ALTER TABLE `pedidoproducto`
  ADD PRIMARY KEY (`codPedPro`),
  ADD KEY `codPedi` (`codPedi`),
  ADD KEY `codProd` (`codProd`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`codPedi`),
  ADD KEY `codUsu` (`codUsu`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codProd`),
  ADD KEY `codCate` (`codCate`);

--
-- Indices de la tabla `reabastece`
--
ALTER TABLE `reabastece`
  ADD PRIMARY KEY (`codReab`),
  ADD KEY `codUsu` (`codUsu`),
  ADD KEY `codProd` (`codProd`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codUsu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `codCate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `pedidoproducto`
--
ALTER TABLE `pedidoproducto`
  MODIFY `codPedPro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `codPedi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `codProd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `reabastece`
--
ALTER TABLE `reabastece`
  MODIFY `codReab` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codUsu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedidoproducto`
--
ALTER TABLE `pedidoproducto`
  ADD CONSTRAINT `pedidoproducto_ibfk_1` FOREIGN KEY (`codPedi`) REFERENCES `pedidos` (`codPedi`),
  ADD CONSTRAINT `pedidoproducto_ibfk_2` FOREIGN KEY (`codProd`) REFERENCES `productos` (`codProd`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`codUsu`) REFERENCES `usuario` (`codUsu`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`codCate`) REFERENCES `categorias` (`codCate`);

--
-- Filtros para la tabla `reabastece`
--
ALTER TABLE `reabastece`
  ADD CONSTRAINT `reabastece_ibfk_1` FOREIGN KEY (`codUsu`) REFERENCES `usuario` (`codUsu`),
  ADD CONSTRAINT `reabastece_ibfk_2` FOREIGN KEY (`codProd`) REFERENCES `productos` (`codProd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
