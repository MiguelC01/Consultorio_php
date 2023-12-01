-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2023 a las 19:18:47
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
-- Base de datos: `expedientes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `control` int(8) NOT NULL,
  `carrera` varchar(4) NOT NULL,
  `nacimiento` date NOT NULL,
  `afiliacion` varchar(10) NOT NULL,
  `nss` varchar(20) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `contacto` varchar(15) NOT NULL,
  `enfermedades` varchar(100) NOT NULL,
  `alergias` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `control`, `carrera`, `nacimiento`, `afiliacion`, `nss`, `correo`, `contacto`, `enfermedades`, `alergias`) VALUES
(1, 'Ulises Miguel Olvera Lopez', 20690035, 'ISC', '2001-09-30', 'IMSS', '22896619393', '20690035@tecvalles.mx', '4811145251', 'ninguna', 'ninguna'),
(2, 'Adriana Aguilar Martinez', 20690024, 'ISC', '2002-07-09', 'IMSS', '25896619395', '20690024@tecvalles.mx', '4811237643', 'migraña', 'polen');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
