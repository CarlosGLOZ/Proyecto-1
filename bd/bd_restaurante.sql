-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2022 a las 15:15:41
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_restaurante`
--
CREATE DATABASE IF NOT EXISTS `bd_restaurante` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bd_restaurante`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cargo`
--

CREATE TABLE `tbl_cargo` (
  `id_cargo` int(11) NOT NULL,
  `nom_cargo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_cargo`
--

INSERT INTO `tbl_cargo` (`id_cargo`, `nom_cargo`) VALUES
(1, 'Camarero'),
(2, 'Mantenimiento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_empleado`
--

CREATE TABLE `tbl_empleado` (
  `id_empleado` int(11) NOT NULL,
  `nom_empleado` varchar(20) NOT NULL,
  `ape_empleado` varchar(20) NOT NULL,
  `dni_empleado` varchar(9) NOT NULL,
  `password_empleado` text NOT NULL,
  `fk_cargo_empleado` int(11) NOT NULL,
  `email_empleado` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_empleado`
--

INSERT INTO `tbl_empleado` (`id_empleado`, `nom_empleado`, `ape_empleado`, `dni_empleado`, `password_empleado`, `fk_cargo_empleado`, `email_empleado`) VALUES
(7, 'Sergi', 'Garcia', '47864649Q', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1, ''),
(9, 'Carlos', 'Piedras', '47864650V', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1, 'carlos@gmail.com'),
(10, 'Alejandro', 'Lay', '46785678F', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 2, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_incidencia`
--

CREATE TABLE `tbl_incidencia` (
  `id_inc` int(11) NOT NULL,
  `nom_inc` varchar(200) NOT NULL,
  `estado_inc` tinyint(1) NOT NULL,
  `fk_mesa_inc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_incidencia`
--

INSERT INTO `tbl_incidencia` (`id_inc`, `nom_inc`, `estado_inc`, `fk_mesa_inc`) VALUES
(3, 'test', 0, 1),
(4, 'test', 0, 1),
(5, 'test', 0, 2),
(6, 'test', 0, 1),
(7, 'sdf', 0, 1),
(8, 'sdf', 0, 1),
(9, 'dfgf', 0, 2),
(10, 'test', 0, 1),
(11, 'test', 0, 2),
(12, 'test', 0, 1),
(13, 'test', 0, 1),
(14, 'pata rota', 0, 1),
(15, 'pata rota', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_mesa`
--

CREATE TABLE `tbl_mesa` (
  `id_mesa` int(11) NOT NULL,
  `num_mesa` int(2) NOT NULL,
  `estado_mesa` enum('0','1','2') NOT NULL,
  `fk_num_sala` int(11) DEFAULT NULL,
  `capacidad_mesa` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_mesa`
--

INSERT INTO `tbl_mesa` (`id_mesa`, `num_mesa`, `estado_mesa`, `fk_num_sala`, `capacidad_mesa`) VALUES
(1, 1, '0', 1, 4),
(2, 2, '0', 1, 4),
(3, 3, '0', 1, 6),
(4, 4, '0', 2, 4),
(5, 5, '0', 2, 8),
(6, 10, '0', 3, 10),
(7, 11, '0', 1, 8),
(8, 8, '0', 1, 2),
(9, 9, '0', 1, 2),
(10, 10, '0', 1, 2),
(11, 11, '0', 1, 2),
(12, 12, '0', 1, 2),
(13, 13, '0', 1, 4),
(14, 14, '0', 1, 4),
(15, 15, '0', 1, 4),
(16, 16, '0', 1, 4),
(17, 17, '0', 1, 6),
(18, 18, '0', 1, 6),
(19, 19, '0', 1, 6),
(20, 20, '0', 1, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_registro`
--

CREATE TABLE `tbl_registro` (
  `id_registro` int(11) NOT NULL,
  `fecha_entrada` datetime NOT NULL,
  `fecha_salida` datetime DEFAULT NULL,
  `id_mesa` int(11) NOT NULL,
  `id_camarero` int(11) NOT NULL,
  `num_comensales` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_registro`
--

INSERT INTO `tbl_registro` (`id_registro`, `fecha_entrada`, `fecha_salida`, `id_mesa`, `id_camarero`, `num_comensales`) VALUES
(1, '2022-11-07 14:00:00', '2022-11-07 15:05:00', 1, 10, 4),
(2, '2022-11-08 17:15:58', '2022-11-08 17:36:13', 1, 9, 2),
(3, '2022-11-08 17:23:55', '2022-11-08 17:35:46', 1, 9, 2),
(4, '2022-11-08 17:24:21', '2022-11-08 17:35:20', 1, 9, 2),
(5, '2022-11-09 19:22:57', NULL, 1, 9, 1),
(6, '2022-11-09 19:28:56', '2022-11-09 19:29:06', 1, 9, 1),
(7, '2022-11-09 19:29:29', '2022-11-09 19:29:40', 1, 9, 1),
(8, '2022-11-09 19:29:54', '2022-11-09 19:30:04', 1, 9, 1),
(9, '2022-11-10 17:47:44', '2022-11-10 18:17:13', 1, 9, 2),
(10, '2022-11-10 17:50:59', '2022-11-10 17:58:53', 2, 9, 2),
(11, '2022-11-10 17:53:14', '2022-11-10 18:17:19', 3, 9, 2),
(12, '2022-11-10 18:17:30', '2022-11-10 18:17:35', 1, 9, 1),
(13, '2022-11-10 18:23:15', '2022-11-10 18:23:18', 1, 9, 2),
(14, '2022-11-10 19:11:40', '2022-11-10 19:11:43', 1, 9, 2),
(15, '2022-11-11 17:34:59', '2022-11-11 17:35:04', 1, 9, 2),
(16, '2022-11-14 14:57:13', '2022-11-14 14:57:19', 1, 9, 4),
(17, '2022-11-14 14:57:55', '2022-11-14 14:58:03', 1, 9, 2),
(18, '2022-11-14 14:59:54', '2022-11-14 14:59:56', 1, 9, 1),
(19, '2022-11-14 15:00:16', '2022-11-14 15:21:00', 1, 9, 2),
(20, '2022-11-14 15:24:48', '2022-11-14 15:25:02', 1, 9, 2),
(21, '2022-11-14 15:58:26', '2022-11-14 15:58:38', 1, 9, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_sala`
--

CREATE TABLE `tbl_sala` (
  `id_sala` int(11) NOT NULL,
  `nom_sala` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_sala`
--

INSERT INTO `tbl_sala` (`id_sala`, `nom_sala`) VALUES
(1, 'Principal - 1'),
(2, 'Comedor - 2'),
(3, 'Privada - 3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_cargo`
--
ALTER TABLE `tbl_cargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `tbl_empleado`
--
ALTER TABLE `tbl_empleado`
  ADD PRIMARY KEY (`id_empleado`),
  ADD KEY `fk_cargo_empleado` (`fk_cargo_empleado`);

--
-- Indices de la tabla `tbl_incidencia`
--
ALTER TABLE `tbl_incidencia`
  ADD PRIMARY KEY (`id_inc`),
  ADD KEY `fk_mesa_inc` (`fk_mesa_inc`);

--
-- Indices de la tabla `tbl_mesa`
--
ALTER TABLE `tbl_mesa`
  ADD PRIMARY KEY (`id_mesa`),
  ADD KEY `id_num_sala` (`fk_num_sala`);

--
-- Indices de la tabla `tbl_registro`
--
ALTER TABLE `tbl_registro`
  ADD PRIMARY KEY (`id_registro`),
  ADD KEY `id_mesa` (`id_mesa`),
  ADD KEY `id_camarero` (`id_camarero`);

--
-- Indices de la tabla `tbl_sala`
--
ALTER TABLE `tbl_sala`
  ADD PRIMARY KEY (`id_sala`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_cargo`
--
ALTER TABLE `tbl_cargo`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_empleado`
--
ALTER TABLE `tbl_empleado`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tbl_incidencia`
--
ALTER TABLE `tbl_incidencia`
  MODIFY `id_inc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tbl_mesa`
--
ALTER TABLE `tbl_mesa`
  MODIFY `id_mesa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `tbl_registro`
--
ALTER TABLE `tbl_registro`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `tbl_sala`
--
ALTER TABLE `tbl_sala`
  MODIFY `id_sala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_empleado`
--
ALTER TABLE `tbl_empleado`
  ADD CONSTRAINT `tbl_empleado_ibfk_1` FOREIGN KEY (`fk_cargo_empleado`) REFERENCES `tbl_cargo` (`id_cargo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_incidencia`
--
ALTER TABLE `tbl_incidencia`
  ADD CONSTRAINT `tbl_incidencia_ibfk_1` FOREIGN KEY (`fk_mesa_inc`) REFERENCES `tbl_mesa` (`id_mesa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_mesa`
--
ALTER TABLE `tbl_mesa`
  ADD CONSTRAINT `tbl_mesa_ibfk_1` FOREIGN KEY (`fk_num_sala`) REFERENCES `tbl_sala` (`id_sala`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_registro`
--
ALTER TABLE `tbl_registro`
  ADD CONSTRAINT `tbl_registro_ibfk_1` FOREIGN KEY (`id_camarero`) REFERENCES `tbl_empleado` (`id_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_registro_ibfk_2` FOREIGN KEY (`id_mesa`) REFERENCES `tbl_mesa` (`id_mesa`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
