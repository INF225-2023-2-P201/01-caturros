-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2023 a las 03:24:44
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
-- Base de datos: `caturros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `frase` varchar(255) NOT NULL,
  `intencion` varchar(255) NOT NULL,
  `traduccion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `frase`, `intencion`, `traduccion`) VALUES
(5, 'saludar', 'PC2 saludar PC1\n', 'ping'),
(6, 'pingear', 'PC1 pingear PC2\n', 'ping'),
(7, 'notificar', 'PC1 notificar PC2\n', 'ping'),
(8, 'permitir', 'permitir PC2\n', 'permit host ()'),
(9, 'denegar', 'denegar PC1\n', 'deny host ()'),
(10, 'desactivar', 'desactivar PC2\n', 'shutdown'),
(11, 'salir', 'salir \n', 'exit'),
(12, 'mostrar', 'mostrar la red\n', 'show'),
(13, 'crear', 'crear PC3\n', 'access-list [] [ | ] [] []'),
(14, 'depurar', 'depurar la red\n', 'debug []'),
(15, 'limpiar', 'limpiar la red\n', 'clear'),
(16, 'activar', 'activar PC2 \n', 'no shutdown'),
(17, 'rastrear', 'rastrear PC2 \n', 'debug'),
(18, 'habilitar', 'habilitar PC3', 'login; ip domain-lookup; snmp-server enable traps []; switchport port-security');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
