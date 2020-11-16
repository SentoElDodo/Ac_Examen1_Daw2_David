-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2020 a las 10:19:17
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `moto1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `categoria`) VALUES
(1, 'Deportiva'),
(2, 'Custom'),
(3, 'Naked');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `custom`
--

CREATE TABLE `custom` (
  `descripcion` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `custom`
--

INSERT INTO `custom` (`descripcion`, `id`, `name`, `price`, `tipo`) VALUES
('moto muy rápida', 1, 'custom1', '30', 'custom'),
('moto muy rápida', 2, 'custom2', '30', 'custom'),
('moto muy rápida', 3, 'custom3', '30', 'custom'),
('moto muy rápida', 4, 'custom4', '30', 'custom'),
('moto muy rápida', 5, 'custom5', '30', 'custom'),
('moto muy rápida', 6, 'custom6', '30', 'custom'),
('moto muy rápida', 7, 'custom7', '30', 'custom'),
('moto muy rápida', 8, 'custom8', '30', 'custom'),
('moto muy rápida', 9, 'custom9', '30', 'custom'),
('moto muy rápida', 10, 'custom10', '30', 'custom');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deportiva`
--

CREATE TABLE `deportiva` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `deportiva`
--

INSERT INTO `deportiva` (`id`, `name`, `descripcion`, `price`, `categoria_id`, `tipo`) VALUES
(3, 'deportiva1', 'moto muy rápida', '20', 1, 'deportiva'),
(4, 'deportiva2', 'moto muy rápida', '20', 1, 'deportiva'),
(5, 'deportiva3', 'moto muy rápida', '20', 1, 'deportiva'),
(6, 'deportiva4', 'moto muy rápida', '20', 1, 'deportiva'),
(7, 'deportiva5', 'moto muy rápida', '20', 1, 'deportiva'),
(8, 'deportiva6', 'moto muy rápida', '20', 1, 'deportiva'),
(9, 'deportiva7', 'moto muy rápida', '20', 1, 'deportiva'),
(10, 'deportiva8', 'moto muy rápida', '20', 1, 'deportiva'),
(11, 'deportiva9', 'moto muy rápida', '20', 1, 'deportiva'),
(12, 'deportiva10', 'moto muy rápida', '20', 1, 'deportiva'),
(13, 'custom1', 'moto muy llamativa ', '40', 2, 'custom'),
(14, 'custom2', 'moto muy llamativa ', '40', 2, 'custom'),
(15, 'custom3', 'moto muy llamativa ', '40', 2, 'custom'),
(16, 'custom4', 'moto muy llamativa ', '40', 2, 'custom'),
(17, 'custom5', 'moto muy llamativa ', '40', 2, 'custom'),
(18, 'custom6', 'moto muy llamativa ', '40', 2, 'custom'),
(19, 'custom7', 'moto muy llamativa ', '40', 2, 'custom'),
(20, 'custom8', 'moto muy llamativa ', '40', 2, 'custom'),
(21, 'custom9', 'moto muy llamativa ', '40', 2, 'custom'),
(22, 'custom10', 'moto muy llamativa ', '40', 2, 'custom'),
(23, 'naked1', 'moto muy comoda', '60', 3, 'deportiva'),
(24, 'naked2', 'moto muy comoda', '60', 3, 'deportiva'),
(25, 'naked3', 'moto muy comoda', '60', 3, 'deportiva'),
(26, 'naked4', 'moto muy comoda', '60', 3, 'deportiva'),
(27, 'naked5', 'moto muy comoda', '60', 3, 'deportiva'),
(28, 'naked6', 'moto muy comoda', '60', 3, 'deportiva'),
(29, 'naked7', 'moto muy comoda', '60', 3, 'deportiva'),
(30, 'naked8', 'moto muy comoda', '60', 3, 'deportiva'),
(31, 'naked9', 'moto muy comoda', '60', 3, 'deportiva'),
(32, 'naked10', 'moto muy comoda', '60', 3, 'deportiva');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20201114175633', '2020-11-14 20:06:56', 425),
('DoctrineMigrations\\Version20201114215515', '2020-11-14 22:55:33', 228);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `naked`
--

CREATE TABLE `naked` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `naked`
--

INSERT INTO `naked` (`id`, `name`, `descripcion`, `price`, `tipo`) VALUES
(1, 'naked1', 'moto muy rápida', '40', 'naked'),
(2, 'naked2', 'moto muy rápida', '40', 'naked'),
(3, 'naked3', 'moto muy rápida', '40', 'naked'),
(4, 'naked4', 'moto muy rápida', '40', 'naked'),
(5, 'naked5', 'moto muy rápida', '40', 'naked'),
(6, 'naked6', 'moto muy rápida', '40', 'naked'),
(7, 'naked7', 'moto muy rápida', '40', 'naked'),
(8, 'naked8', 'moto muy rápida', '40', 'naked'),
(9, 'naked9', 'moto muy rápida', '40', 'naked'),
(10, 'naked10', 'moto muy rápida', '40', 'naked');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `custom`
--
ALTER TABLE `custom`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `deportiva`
--
ALTER TABLE `deportiva`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_9DEFC083397707A` (`categoria_id`);

--
-- Indices de la tabla `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `naked`
--
ALTER TABLE `naked`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `custom`
--
ALTER TABLE `custom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `deportiva`
--
ALTER TABLE `deportiva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `naked`
--
ALTER TABLE `naked`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `deportiva`
--
ALTER TABLE `deportiva`
  ADD CONSTRAINT `FK_9DEFC083397707A` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
