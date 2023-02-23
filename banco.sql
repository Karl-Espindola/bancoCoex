-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-02-2023 a las 00:09:14
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `banco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ciudades`
--

CREATE TABLE `tbl_ciudades` (
  `ciu_id` int(4) NOT NULL,
  `ciu_nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_ciudades`
--

INSERT INTO `tbl_ciudades` (`ciu_id`, `ciu_nom`) VALUES
(1, 'Bucaramanga'),
(2, 'Barranquilla'),
(3, 'Cali'),
(4, 'Medellin'),
(5, 'Bogota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estados`
--

CREATE TABLE `tbl_estados` (
  `est_id` int(4) NOT NULL,
  `est_des` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_estados`
--

INSERT INTO `tbl_estados` (`est_id`, `est_des`) VALUES
(1, 'activo'),
(2, 'inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `usu_id` int(4) NOT NULL,
  `usu_nom` varchar(25) NOT NULL,
  `usu_ape` varchar(45) NOT NULL,
  `usu_nit` int(13) NOT NULL,
  `usu_dir` varchar(45) NOT NULL,
  `usu_ciu_id` int(4) NOT NULL,
  `usu_tel` varchar(45) NOT NULL,
  `usu_cup` int(11) NOT NULL,
  `usu_est_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`usu_id`, `usu_nom`, `usu_ape`, `usu_nit`, `usu_dir`, `usu_ciu_id`, `usu_tel`, `usu_cup`, `usu_est_id`) VALUES
(1, 'Carlos', 'Gomez', 1199878181, 'calle 33 # 44-32', 1, '300 342 5565', 500000, 1),
(3, 'Lukas', 'perez', 25235, 'cc', 2, '300234232', 3000000, 1),
(4, 'Juan', 'Perex', 25235323, 'rr', 3, '310345345', 400000000, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_ciudades`
--
ALTER TABLE `tbl_ciudades`
  ADD PRIMARY KEY (`ciu_id`);

--
-- Indices de la tabla `tbl_estados`
--
ALTER TABLE `tbl_estados`
  ADD PRIMARY KEY (`est_id`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`usu_id`),
  ADD KEY `usu_ciu_id` (`usu_ciu_id`),
  ADD KEY `usu_est_id` (`usu_est_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_ciudades`
--
ALTER TABLE `tbl_ciudades`
  MODIFY `ciu_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbl_estados`
--
ALTER TABLE `tbl_estados`
  MODIFY `est_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `usu_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD CONSTRAINT `tbl_usuarios_ibfk_1` FOREIGN KEY (`usu_ciu_id`) REFERENCES `tbl_ciudades` (`ciu_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_usuarios_ibfk_2` FOREIGN KEY (`usu_est_id`) REFERENCES `tbl_estados` (`est_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
