-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-09-2024 a las 18:31:53
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `presupuesto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` int(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellido`, `telefono`, `email`, `password`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'Juana Ines', 'Beltran De Los Palotes', '04121090185', 'rebeca.quevedo08@outlook.com', '$2y$10$MCmUfLdWOKmasvejCXlkHejIqyJRLlAZTFKRzKztC18KYG22JxpOm', 1, '2024-09-03 00:00:00', '2024-09-04 00:00:00', NULL),
(8, 'Erika Maria', 'Fernandez Brito', '04121090185', 'erikab644@gmail.com', '$2y$10$Hh.wZisdtpX61zm/MyT5ceIjwa6eY/wQR3d/i2t76q6CzLXq0v3Ci', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_presupuesto`
--

CREATE TABLE `detalle_presupuesto` (
  `id_detalle` int(11) NOT NULL,
  `id_presupuesto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre_mueble` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `transporte` float NOT NULL,
  `descuento` float NOT NULL,
  `cond_pago` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `tentrega` datetime NOT NULL,
  `garantia` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `subtotal` float NOT NULL,
  `total` float NOT NULL,
  `statusmueble` int(1) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalle_presupuesto`
--

INSERT INTO `detalle_presupuesto` (`id_detalle`, `id_presupuesto`, `id_usuario`, `nombre_mueble`, `transporte`, `descuento`, `cond_pago`, `tentrega`, `garantia`, `subtotal`, `total`, `statusmueble`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 1, 3, 'Mesa 4 Silla de Madera', 750, 5, '50% para iniciar el mueble y 25% en la segunda fase y 25% al finalizar', '2024-09-27 00:00:00', '2 Años', 1275, 2025, 1, '2024-09-06 00:00:00', '2024-09-06 00:00:00', NULL),
(7, 2, 3, 'Sillas De Caoba', 740, 5, '50% para iniciar el mueble y 50% al finalizar', '2024-09-06 00:00:00', '2 Años', 1275, 1500, 1, '2024-09-06 00:00:00', '2024-09-06 00:00:00', NULL),
(8, 2, 3, 'Sillas De Caoba', 0, 5, '50% para iniciar el mueble y 50% al finalizar', '2024-09-13 00:00:00', '2 Años', 1275, 1500, 1, '2024-09-06 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presupuest`
--

CREATE TABLE `presupuest` (
  `id_presupuesto` int(11) NOT NULL,
  `imagen` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `material` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `alto` float NOT NULL,
  `ancho` float NOT NULL,
  `profundidad` float NOT NULL,
  `acabado` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `color` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `ubicacion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` int(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `presupuest`
--

INSERT INTO `presupuest` (`id_presupuesto`, `imagen`, `cliente_id`, `material`, `alto`, `ancho`, `profundidad`, `acabado`, `color`, `ubicacion`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'images/580b57fcd9996e24bc43c27e.png', 4, 'Madera', 45.6, 74, 0, 'Barniz', 'Marrón', 'Cocina', 1, '2024-08-31 00:00:00', NULL, NULL),
(2, 'images/580b57fcd9996e24bc43c26b.png', 4, 'Caoba', 45.6, 74, 0, 'Barniz', 'Marrón', 'Cocina', 1, '2024-08-31 00:00:00', NULL, NULL),
(3, 'images/580b57fcd9996e24bc43c26a.png', 4, 'Caoba', 45.6, 74, 0, 'Barniz', 'Marrón', 'Cocina', 1, '2024-08-31 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `nombre_producto` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `img_producto` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `tipo_producto` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `precio_producto` float NOT NULL,
  `observacion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` int(1) NOT NULL,
  `color` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `ancho` float DEFAULT NULL,
  `alto` float DEFAULT NULL,
  `profundidad` float DEFAULT NULL,
  `peso` float DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `id_proveedor`, `nombre_producto`, `img_producto`, `tipo_producto`, `precio_producto`, `observacion`, `status`, `color`, `ancho`, `alto`, `profundidad`, `peso`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 1, 'Lamina de Cedro', 'images/roble_4.jpeg', 'Madera Maciza', 1478, 'Pagar en entrega', 1, 'Marrón', 74, 45.6, 0, 3.5, '2024-09-05 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `logo_proveedor` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre_representante` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre_empresa` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `logo_proveedor`, `nombre_representante`, `nombre_empresa`, `telefono`, `email`, `direccion`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'images/pokemon_3.png', 'Eugenia Buendía', 'PokeTienda', '04121090186', 'mundo.pc3@yahoo.com', 'Ciudad Guayana', 1, '2024-09-04 00:00:00', '2024-09-04 00:00:00', '0000-00-00 00:00:00'),
(3, 'images/figura2.png', 'Carla Herrera', 'MapachesMadera', '04121090185', 'erikab644@gmail.com', '186.185.42.186', 1, '2024-09-04 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `telefono`, `email`, `password`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Maria Efe', 'Quevedo Coba', '04878728241', 'rebeca.quevedo08@outlook.com', '$2y$10$UN3jt4cUYEFuoPGNWm.99.PykhowNmYUM45W/aEyx15Dz2w31KD5K', 0, NULL, '2024-09-04 00:00:00', NULL),
(4, 'Juana Ines', 'Beltran De Los Palotes', '04121090185', 'yosoyproferika@gmail.com', '$2y$10$ONe.GUNbePNck.BEnufHWeI2JRV9mI26AYDGP.vag/CXNyejetFaW', 1, NULL, NULL, NULL),
(11, 'Erika Maria', 'Fernandez Brito', '04121090185', 'erikab644@gmail.com', '$2y$10$tubRBekknW17pgy4S3ibHO19Mi.p7bRSWZKbOCBJVE9a9BEN9hKIu', 1, '2024-09-06 00:00:00', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `detalle_presupuesto`
--
ALTER TABLE `detalle_presupuesto`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `fk_presupuestoid` (`id_presupuesto`),
  ADD KEY `fk_usuarioid` (`id_usuario`);

--
-- Indices de la tabla `presupuest`
--
ALTER TABLE `presupuest`
  ADD PRIMARY KEY (`id_presupuesto`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `fk_proveedor_id` (`id_proveedor`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `detalle_presupuesto`
--
ALTER TABLE `detalle_presupuesto`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `presupuest`
--
ALTER TABLE `presupuest`
  MODIFY `id_presupuesto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_presupuesto`
--
ALTER TABLE `detalle_presupuesto`
  ADD CONSTRAINT `fk_presupuestoid` FOREIGN KEY (`id_presupuesto`) REFERENCES `presupuest` (`id_presupuesto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_usuarioid` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_proveedor_id` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
