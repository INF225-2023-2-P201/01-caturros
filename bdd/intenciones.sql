-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2023 a las 01:27:48
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
-- Base de datos: `caturros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `intenciones`
--

CREATE TABLE `intenciones` (
  `id` int(255) NOT NULL,
  `intencion` varchar(255) NOT NULL,
  `cisco` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `intenciones`
--

INSERT INTO `intenciones` (`id`, `intencion`, `cisco`) VALUES
(1, 'permitir', 'permit host ()'),
(2, 'denegar', 'deny host ()'),
(3, 'desactivar', 'shutdown'),
(4, 'salir', 'exit'),
(5, 'mostrar', 'show'),
(6, 'crear', 'access-list [] [ | ] [] []'),
(7, 'pingear', 'ping'),
(8, 'saludar', 'ping'),
(9, 'notificar', 'ping'),
(10, 'mostrar', 'traceroute []'),
(11, 'depurar', 'debug []'),
(12, 'limpiar', 'clear'),
(13, 'activar', 'no shutdown'),
(14, 'rastrear', 'debug'),
(15, 'habilitar', 'login; ip domain-lookup; snmp-server enable traps []; switchport port-security');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `intenciones`
--
ALTER TABLE `intenciones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `intenciones`
--
ALTER TABLE `intenciones`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
