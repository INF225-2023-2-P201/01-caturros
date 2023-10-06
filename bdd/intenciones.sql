-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-10-2023 a las 23:49:27
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
(1, 'saludar', NULL),
(2, 'preguntar', NULL),
(3, 'hacer', NULL),
(4, 'jugar', NULL),
(5, 'comer', NULL),
(6, 'salir', NULL),
(7, 'beber', NULL),
(8, 'cocinar', NULL),
(9, 'tomar', NULL),
(10, 'limpiar', NULL),
(11, 'asear', NULL),
(12, 'programar', NULL),
(13, 'lavar', NULL),
(14, 'trabajar', NULL),
(15, 'ser', NULL),
(16, 'anular', NULL),
(17, 'borrar', NULL),
(18, 'estudiar', NULL),
(19, 'facilitar', NULL),
(20, 'acceder', NULL),
(21, 'ceder', NULL),
(22, 'prender', NULL),
(23, 'proceder', NULL),
(24, 'responder', NULL),
(25, 'suspender', NULL),
(26, 'añadir', NULL),
(27, 'eliminar', NULL),
(28, 'decidir', NULL),
(29, 'omitir', NULL),
(30, 'recibir', NULL),
(31, 'contar', NULL),
(32, 'encontrar', NULL),
(33, 'pensar', NULL),
(34, 'negar', NULL),
(35, 'afirmar', NULL),
(36, 'convencer', NULL),
(37, 'volver', NULL),
(38, 'construir', NULL),
(39, 'atribuir', NULL),
(40, 'coordinar', NULL),
(41, 'liderar', NULL),
(42, 'ejecutar', NULL),
(43, 'evaluar', NULL),
(44, 'crear', NULL),
(45, 'aumentar', NULL),
(46, 'disminuir', NULL),
(47, 'conectar', NULL),
(48, 'desconectar', NULL),
(49, 'permitir', NULL),
(50, 'denegar', NULL);

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
