-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2022 a las 22:07:59
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba_winpax`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`) VALUES
(1, 'Valentin', 'Sobrado Carnevali', 'valensobrado2@hotmail.com', '$2y$10$STf.V4Q2NhmcYwAjATm/PeZz2h9jutoj02Yyoso6JA7wx1AUUBqWa'),
(2, 'aaaaa', 'dssssss', 'valenriver2@hotmail.com', '$2y$10$HCB1F1DNKFFqNq86LFurCuEi7pOP1rtw7vm/NKkRu.J8ATuSRlvmW'),
(6, 'Valentin', 'Sobrado Carnevali', 'jola@hotmail.com', '$2y$10$FFvhG7pS/GloIQZz06jkL.AzIguAmBQ9/zXiWYN9WBnbEVwdJ7qKW'),
(8, 'Valentin', 'Sobrado Carnevali', 'julia@hotmail.com', '$2y$10$Ay.CnufEJgVYVQdpkHDLX.MdymbsyL5xH5O6k0HXRSnP12X1N52Cy'),
(9, 'pablo', 'sobrado', 'polgascoin2@hotmail.com', '$2y$10$aAWkF5AVfDWstRmy2KPerOMKdbgvjOZOtq8/8tJ41k1mGa2HOG.5K'),
(11, 'asdasdas', 'asdasd', 'dsadas@gmail.com', '$2y$10$pY4/vsRxdU5Fia7ZUGzIKen5r/zVxxPLVhwnn2pCkzHjjq3I6JQge'),
(13, 'asdasd', 'asdasaswqd', 'sss@hotmail.com', '$2y$10$lF2rNQdBVt1V1Xw0t9BY3udA61OXn6IDH8yYqY4EPZqiifC3SFjlu'),
(15, 'sadas', 'sdasdas', 'hola@hotmail.com', '$2y$10$NcdaSXAB44dnO3.9ylG9geRhGV3a4u4x4RKnKi/op0SpFG3DaDy6C');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
