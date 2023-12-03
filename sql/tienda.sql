-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2023 a las 18:47:58
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
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_prod` int(255) NOT NULL,
  `nombre_prod` varchar(32) NOT NULL,
  `descripcion` text NOT NULL,
  `cantidad` int(255) NOT NULL,
  `precio` float NOT NULL,
  `imagen` text NOT NULL,
  `descuento` float NOT NULL,
  `categoria` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usr` int(255) NOT NULL,
  `nombre` varchar(32) NOT NULL,
  `cuenta` varchar(32) NOT NULL,
  `correo` varchar(32) NOT NULL,
  `password` text NOT NULL,
  `preg_sec` text NOT NULL,
  `res_preg` text NOT NULL,
  `intentos` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usr`, `nombre`, `cuenta`, `correo`, `password`, `preg_sec`, `res_preg`, `intentos`) VALUES
(1, 'Napoleon', 'Napo', 'napo@hotmail.com', '$2y$10$SFfjPBqQRc2w.IZnhPCxLOwYFDJnVn2ed4VFESZX.Mw4TYkb2sepC', 'Mascota', 'Perro', 0),
(2, 'Pedro', 'pedro', 'pedro@hotmail.com', 'b104ab9a0e58c861b9628208b3fecd58', 'Mascota', 'Perro', 0),
(5, 'pablo', 'pablo', 'palbo@hotmail.com', 'cd0acfe085eeb0f874391fb9b8009bed', 'Deporte', 'pas', 0),
(6, 'Carlos', 'charly', 'carlos@gmail.com', '627a1f8f3e1f8a2a0cbb9aedc33ade8c', 'Deporte', 'Futbo', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(255) NOT NULL,
  `id_usuario` int(255) NOT NULL,
  `id_prod` int(255) NOT NULL,
  `fecha_venta` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_prod`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usr`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_prod` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usr` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
