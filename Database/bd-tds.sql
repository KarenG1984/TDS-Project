-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 02-08-2022 a las 21:46:49
-- Versión del servidor: 8.0.27
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd-tds`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

DROP TABLE IF EXISTS `contacto`;
CREATE TABLE IF NOT EXISTS `contacto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  `movil` int NOT NULL,
  `email` varchar(25) NOT NULL,
  `asunto` text NOT NULL,
  `mensaje_contacto` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `movil`, `email`, `asunto`, `mensaje_contacto`, `created_at`) VALUES
(2, 'Karen Gómez Molina', 354135, 'liliamq1960@gmail.com', 'requisitos', 'holis', '2022-07-28 12:31:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participante`
--

DROP TABLE IF EXISTS `participante`;
CREATE TABLE IF NOT EXISTS `participante` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `lugar_nacimiento` text NOT NULL,
  `sexo` text NOT NULL,
  `orientacion_sexual` text NOT NULL,
  `identidad_genero` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `discapacidad` text NOT NULL,
  `estado_civil` text NOT NULL,
  `movil` int NOT NULL,
  `email` varchar(25) NOT NULL,
  `formacion_academica` text NOT NULL,
  `ocupacion` text NOT NULL,
  `enfermedades` text NOT NULL,
  `tipo_enfermedades` text NOT NULL,
  `medicamentos` text NOT NULL,
  `tipo_medicamentos` text NOT NULL,
  `tratamiento_psico_actual` text NOT NULL,
  `tipo_tratamiento_actual` text NOT NULL,
  `tratamiento_psico_antes` text NOT NULL,
  `tipo_tratamiento_antes` text NOT NULL,
  `tipo_sangre` varchar(3) NOT NULL,
  `eps` text NOT NULL,
  `emergencias` text NOT NULL,
  `familia` text NOT NULL,
  `padres_muertos` text NOT NULL,
  `hijo_adoptivo` text NOT NULL,
  `consumo_tabaco` text NOT NULL,
  `consumo_alcohol` text NOT NULL,
  `consumo_narcoticos` text NOT NULL,
  `consumo_farmacos` text NOT NULL,
  `consumo_alucinogeno` text NOT NULL,
  `referencia_medio` text NOT NULL,
  `referencia_nombre` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_egresado`
--

DROP TABLE IF EXISTS `registro_egresado`;
CREATE TABLE IF NOT EXISTS `registro_egresado` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro_egresado`
--

INSERT INTO `registro_egresado` (`id`, `username`, `password`, `created_at`) VALUES
(3, 'nerakmgm@gmail.com', '$2y$10$UrxcxPFtbOAZoJH.UDGJFORiavOlnGFbw3NsT3IBZOiHLgJv7oPPW', '2022-07-27 16:52:51'),
(4, 'karenmgm@hotmail.com', '$2y$10$9r3lG3Dca1H7KMijGOsnOeHF47lpkVZVdmjwwz3RaRwxywrCJJ03i', '2022-07-28 12:38:16'),
(5, 'morales@gmail.com', '$2y$10$3hNsvSXxvsRMPLud/MdT3.R8ldigqBlvZXsz6NB7Okl4ywngfocRa', '2022-07-28 15:57:34'),
(6, 'pedro@gmail.com', '$2y$10$NsK3XgVUoXsyM/RJEjzuIeHdVaE24uLqwBhh.hjlON7DnBtdHEHVO', '2022-08-02 15:08:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_facilitador`
--

DROP TABLE IF EXISTS `registro_facilitador`;
CREATE TABLE IF NOT EXISTS `registro_facilitador` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro_facilitador`
--

INSERT INTO `registro_facilitador` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'nerakmgm@gmail.com', '$2y$10$FovB8A7dRVb/TsJsUxyiS.YZuO1Ljr94FH3A3UARz3XEn.nX3Peby', '2022-07-25 20:00:12'),
(2, 'karen@gmail.com', '$2y$10$w/vz03kR/0JsE1p7ribf6.Smn1.aW3srflfKC40DEn20jzHgnihtu', '2022-07-25 20:01:31'),
(3, 'gomez@gmail.com', '$2y$10$pomBJtvr6YRb0C.GwBi0guldi3ZywTLpBoa4Q6IOLJVHypiZVjOUq', '2022-07-28 15:56:31'),
(4, 'nerak@yahoo.com', '$2y$10$0ADm7E7jv9Amd6wOKsYpXuLiJYweWZZkUsnx13x4w6cWhD1iAaksO', '2022-08-02 14:58:43');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
