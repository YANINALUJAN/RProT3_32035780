-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-08-2024 a las 22:45:03
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
-- Base de datos: `formichelli_yanina`
--
CREATE DATABASE IF NOT EXISTS `formichelli_yanina` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `formichelli_yanina`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--
-- Creación: 18-07-2024 a las 16:20:31
--

CREATE TABLE `perfiles` (
  `id_perfiles` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id_perfiles`, `descripcion`) VALUES
(1, 'admin'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--
-- Creación: 20-07-2024 a las 23:00:16
-- Última actualización: 09-08-2024 a las 20:41:29
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `cuit` varchar(50) NOT NULL,
  `nombreyapellido` varchar(100) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `perfil_id` int(11) NOT NULL DEFAULT 2,
  `baja` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `cuit`, `nombreyapellido`, `usuario`, `email`, `pass`, `perfil_id`, `baja`) VALUES
(1, '2732035780', 'YANINA FORMICHELLI', 'yanina_formi', 'yaformichelli@gmail.com', '$2y$10$qVZOg3ZNKg2aUJvsv/EF0es/W1YFGO0xo8GHXA7gJF7zc8//NhUnm', 1, 'NO'),
(2, '2732035780', 'DIEGO BISSARO', 'diego_diego', 'diegmar.ciudad@gmail.com', '$2y$10$7JpMd677y7H6a55LHk/E0OhLTaBXW1BT4ZYsC7zzfxaPyU5coEigm', 2, 'NO'),
(3, '567179', 'HECTOR FORMICHELLI', 'hectorformi', 'pichuco1@hotmail.com', '$2y$10$xG5QlL/YkiqcHyP/9L7JpelWaOHt.yzGaYCfKnz1.FifxWbW48NXS', 2, 'NO'),
(4, '20319698260', 'JOSE PEDRO', 'jose_pedro', 'josepedro@gmail.com', '$2y$10$PVGw9IxVsubfi5XFujs9Semve1Lv35/rggO5reaq/eCgfxqGAvE0u', 2, 'NO'),
(5, '20319698269', 'CARLOS PERI', 'carlos_peri', 'carlosperi@gmail.com', '$2y$10$LPpmxYcTAlhXg02zoZZkWOTXancvE0axvnN2GMzwpetDZMyjEs.9K', 2, 'NO'),
(6, '20-33333444-1', 'VERO CATENA', 'vero_catena', 'vero@gmail.com', '$2y$10$oBVjslS0ZaFzHPd0aVt6KOvErD1ZFZeGNIWs/n5rHmPr0Atc4CC6C', 2, 'NO'),
(7, '27-33034790-9', 'SARA ROMERO', 'sara_romero', 'sara_romero@gmail.com', '$2y$10$lwPHjKx/VQ3sbEH5HNYeDOypAhVzfaz/5lsh0RoR06/gRopfpO8wC', 2, 'NO'),
(8, '2732999790', 'ARIEL RESPETO', 'ariel_respeto', 'arielrespeto@gmail.com', '$2y$10$bPWsFh5E16dcsHieqOTlbOK59eDxrDz2BuuUO3D4ggON5U9eM1naa', 2, 'NO'),
(9, '27320367908', 'SOLANGE ROMERO', 'solange_romero', 'solangeromero@gmail.com', '$2y$10$NxQjPX9UmKuibnpaQda1DOBSkQ.2nYoZhcoSshOwfdfwMBkdYV6vG', 2, 'SI'),
(10, '27340357880', 'FERNANDO CUENYA', 'fer_cuenya', 'fernando_cuenya@gmail.com', '$2y$10$I.LJFAxz0am2kvDhVhh53OO2ooBzLMCZDlqUvMC4XIiJT9C4wJjF.', 2, 'NO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id_perfiles`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id_perfiles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
