-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2023 a las 21:33:19
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
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id_carrito` int(255) NOT NULL,
  `id_usr` int(11) NOT NULL,
  `id_prod` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `monto` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id_carrito`, `id_usr`, `id_prod`, `cantidad`, `monto`) VALUES
(1, 5, 2, 11, 3960.00),
(2, 5, 1, 11, 1311.20),
(4, 5, 3, 2, 428.00),
(5, 5, 4, 4, 2057.60),
(6, 5, 5, 1, 606.40);

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
  `categoria` varchar(32) NOT NULL,
  `pagina` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_prod`, `nombre_prod`, `descripcion`, `cantidad`, `precio`, `imagen`, `descuento`, `categoria`, `pagina`) VALUES
(1, 'Figura De Thor', 'Marvel Avengers Titan Hero Series - Figura De Thor De 30 Cm Con Accesorio', 100, 149, 'figu3.jpg', 0.8, 'figura', 'product1_FA.php'),
(2, 'Mad Max', 'Producto Descontinuado Por El Fabricante : No\r\nIdioma : Inglés\r\nDimensiones Del Producto : 1,78 X 19,05 X 13,72 Cm; 72,01 G\r\nNúmero De Modelo Del Producto : 883929537631\r\nDirector : George Miller\r\nFormato De Medios : 4K, Dolby, NTSC\r\nTiempo De Ejecución : 2 Horas\r\nFecha De Lanzamiento : 16 Septiembre 2016\r\nActores : Tom Hardy, Charlize Theron, Nicholas Hoult\r\nDoblados: : Español\r\nSubtítulos: : Inglés, Francés\r\nEstudio : Warner Bros. Home Video\r\nProductores : George Miller', 100, 450, 'peli1.jpg', 0.8, 'pelicula', 'product1_P.php'),
(3, 'Kylo Ren', 'Star Wars Kylo Ren Starkiller Figura De Accion Excluisva', 100, 428, 'figu1.jpeg', 0.5, 'figura', 'product2_FA.php'),
(4, 'Blade Runner 2049', 'Blade Runner 2049 (BD) [Blu-Ray]', 100, 643, 'peli2.jpg', 0.8, 'pelicula', 'product2_P.php'),
(5, 'PIGGY ', 'PIGGY - Figura De Acción Robby Series 2 De 3.5\" (Incluye Artículos DLC)', 100, 758, 'figu9.jpg', 0.8, 'figura', 'product3_FA.php'),
(6, 'Super Saiyan Gogeta ', 'Banpresto Dragon Ball Legends Collab Super Saiyan Gogeta Figura', 100, 1287, 'figu8.jpg', 0.8, 'figura', 'product4_FA.php'),
(7, 'Blade Runner (1982)', 'Blade Runner (1982) (4K UHD) [Blu-Ray]', 100, 919, 'peli3.jpg', 0.8, 'pelicula', 'product3_P.php'),
(8, '2001: A SPACE ODYSSEY', '2001: A SPACE ODYSSEY (4K UHDBD) [Blu-Ray]', 100, 603, 'peli4.jpg', 0.8, 'pelicula', 'product4_P.php'),
(9, 'Figura De Acción De Kai ', 'Square Enix Marvel Universe Variant Play Arts - Figura De Acción De Kai - Wolverine', 100, 300, 'figu2.jpg', 1, 'figura', 'product5_FA.php'),
(10, 'Kyojuro Rengoku', 'Figma-Figura DE ACCIÓN DE Demon Slayer De 14cm, Muñeco MODELO DE Kyojuro Rengoku Kimetsu No Yaiba, 508-DX, Nezuko, Juguetes, N. ° 553', 190, 549, 'figu22.jpg', 1, 'figura', 'product6_FA.php'),
(11, 'The Lost Boys', 'The Lost Boys [Blu-Ray]', 100, 579, 'peli5.jpg', 1, 'figura', 'product5_P.php'),
(12, 'Oppenheimer ', 'Oppenheimer [Blu-Ray 4K]+ [2Blu-Ray](Keine Deutsche Version)', 100, 1000, 'peli6.jpg', 1, 'pelicula', 'product6_P.php'),
(13, 'Maldición Del Río Sasuke', 'KGPYYY Caricaturas De Personajes De Cuervo Para Adultos, Maldición Del Río Sasuke', 1100, 435, 'figu11.jpg', 1, 'figura', 'product7_FA.php'),
(14, 'Zenitsu Agatsuma', 'Demon Slayer: Kimetsu No Yaiba Grandista Zenitsu Agatsuma', 100, 886, 'figu14.jpg', 1, 'figura', 'product8_FA.php'),
(15, 'Si Decido Quedarme', 'Si Decido Quedarme [Blu-Ray]', 100, 240, 'peli24.jpg', 1, 'pelicula', 'product7_P.php'),
(16, 'Giyu Tomioka', 'Demon Slayer - Giyu Tomioka Figura Popup Parade 17cm', 100, 1000, 'figu21.jpg', 0.6, 'figura', 'product9_FA.php'),
(17, 'Guardians Of The Galaxy Vol. 3', 'Guardians Of The Galaxy Vol. 3 [4K UHD] [Blu-Ray]', 100, 768, 'peli23.jpg', 1, 'pelicula', 'product8_P.php'),
(18, 'Nezuko Kamado', 'Sega Figurizma Demon Slayer Kimetsu No Yaiba - Nezuko Kamado', 100, 993, 'figu18.jpg', 1, 'figura', 'product10_FA.php'),
(35, 'In Good Company', 'In Good Company [Importado]', 100, 256, 'peli22.jpg', 1, 'pelicula', 'product9_P.php'),
(36, 'Perdona Si Te Llamo Amor', 'Perdona Si Te Llamo Amor pelicula en full 4k. Edicion revisada', 100, 78, 'peli25.jpg', 0.9, 'pelicula', 'product10_P.php'),
(37, 'Avatar : The Way Of Water', 'Avatar : The Way Of Water [4K UHD + Blu-Ray]', 100, 900, 'peli10.jpg', 0.7, 'pelicula', 'product11_P.php'),
(38, 'Krillin Version 2 ', 'Gunpla Dragon Ball Z: Figure-Rise Standard Krillin Version 2 - Maqueta', 100, 886, 'figu16.jpeg', 0.8, 'figura', 'product11_FA.php'),
(41, 'John Wick: Chapter 4', 'John Wick: Chapter 4 [4K UHD] [Blu-Ray]', 70, 1002, 'peli9.jpg', 0.9, 'pelicula', 'product12_P'),
(42, 'One Piece Zoro', 'Anime One Piece Zoro Figura PVC One Piece Figuras De Acción Anime Toys Roronoa Zoro Modelo 18cm', 70, 562, 'figu15.jpeg', 0.9, 'figura', 'product12_FA');

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
(6, 'Carlos', 'charly', 'carlos@gmail.com', '627a1f8f3e1f8a2a0cbb9aedc33ade8c', 'Deporte', 'Futbo', 0),
(7, 'Carlos', 'Carlos', 'example@gmail.com', '94f3b3a16d8ce064c808b16bee5003c5', 'Mascota', 'gato', 0),
(8, 'new', 'new', 'example@gmail.com', '22af645d1859cb5ca6da0c484f1f37ea', 'Mascota', 'gato', 0),
(9, 'otro', 'otro', 'example@gmail.com', '74b87337454200d4d33f80c4663dc5e5', 'Mascota', 'otro', 0),
(10, 'Nuevo', 'Nuevo', 'exple@gmail.com', 'e26c062fedf6b32834e4de93f9c8b644', 'Mascota', 'perro', 0),
(15, 'admin', 'admin', 'exple@gmail.com', '80c9ef0fb86369cd25f90af27ef53a9e', 'Mascota', 'perro', 0);

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
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id_carrito`),
  ADD KEY `id_prod` (`id_prod`),
  ADD KEY `id_usr` (`id_usr`);

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
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_usuario` (`id_usuario`,`id_prod`),
  ADD KEY `id_prod` (`id_prod`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id_carrito` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_prod` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usr` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(255) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`id_usr`) REFERENCES `usuario` (`id_usr`),
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`id_prod`) REFERENCES `producto` (`id_prod`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usr`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`id_prod`) REFERENCES `producto` (`id_prod`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
