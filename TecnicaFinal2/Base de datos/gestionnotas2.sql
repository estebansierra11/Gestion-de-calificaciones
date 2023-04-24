-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2023 a las 23:09:07
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestionnotas2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Curso` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Id_Grupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`Id`, `Nombre`, `Apellido`, `Curso`, `Correo`, `Id_Grupo`) VALUES
(1, 'ESTEFANI', 'CASTRILLA', '23246', 'ecastrilla1@cuc.edu.co', 0),
(2, 'JULIO', 'GARCIA PIZARRO', '10H14', 'jgarcia@cuc.edu.co', 0),
(3, 'LEONARDO ', 'MOYA VASQUEZ', '21H17', 'lmoya3@cuc.edu.co', 0),
(4, 'JESSICA ', 'MENDOZA GARCIA', '23246', 'jmendoza@cuc.edu.co', 0),
(5, 'TATIANA ', 'RICARDO PADILLA', '10H14', 'tricardo5@cuc.edu.co', 0),
(6, 'WILSON ', 'ARTEAGA CAMPO', '21H17', 'warteaga@cuc.edu.co', 0),
(7, 'KAROLINA', 'CASTELLAR CRESPO', '23246', 'kcastellar3@cuc.edu.co', 0),
(8, 'DAVID ', 'GAMARRA HERNANDEZ', '10H14', 'dgamarra2@cuc.edu.co', 0),
(9, 'CARLOS ', 'OROZCO DE LA HOZ', '21H17', 'corozco1@cuc.edu.co', 0),
(10, 'MICHELLE ', 'SOLANO DOMINGUEZ', '23246', 'msolano@cuc.edu.co', 0),
(11, 'MARIA ', 'DE LA HOZ MALDONADO', '10H14', 'mdelahoz@cuc.edu.co', 0),
(12, 'ALDO ', 'PEREZ ESCORCIA', '21H17', 'aperez@cuc.edu.co', 0),
(13, 'KATHY ', 'RUEDA PUERTA', '23246', 'krueda6@cuc.edu.co', 0),
(14, 'FABIO ', 'BURGOS AVILA', '10H14', 'fburgos@cuc.edu.co', 0),
(15, 'ISMAEL ', 'LUQUE CERVANTES', '21H17', 'iluque@cuc.edu.co', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Programa` varchar(50) NOT NULL,
  `Periodo` varchar(50) NOT NULL,
  `Modalidad` varchar(50) NOT NULL,
  `Codigo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`Id`, `Nombre`, `Programa`, `Periodo`, `Modalidad`, `Codigo`) VALUES
(2, 'AUDITORIA DE SISTEMAS', '13021', '20231', 'PRESENCIAL', '23246'),
(3, 'CALCULO VECTORIAL', '11041', '20231', 'PRESENCIAL', '10H14'),
(4, 'REDES I', '11051', '20231', 'REMOTO', '21H17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE `nota` (
  `Id_Nota` int(11) NOT NULL,
  `Nota1` varchar(4) NOT NULL,
  `Nota2` varchar(4) NOT NULL,
  `Nota3` varchar(4) NOT NULL,
  `Id_Estudiante` int(11) NOT NULL,
  `Id_Grupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nota`
--

INSERT INTO `nota` (`Id_Nota`, `Nota1`, `Nota2`, `Nota3`, `Id_Estudiante`, `Id_Grupo`) VALUES
(1, '0', '0', '0', 1, 2),
(2, '0', '0', '0', 2, 3),
(3, '0', '0', '0', 3, 4),
(4, '0', '0', '0', 4, 2),
(5, '0', '0', '0', 5, 3),
(6, '0', '0', '0', 6, 4),
(7, '0', '0', '0', 7, 2),
(8, '0', '0', '0', 8, 3),
(9, '0', '0', '0', 9, 4),
(10, '0', '0', '0', 10, 2),
(11, '0', '0', '0', 11, 3),
(12, '0', '0', '0', 12, 4),
(13, '0', '0', '0', 13, 2),
(14, '0', '0', '0', 14, 3),
(15, '0', '0', '0', 15, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `estudiante_grupo` (`Id_Grupo`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`Id_Nota`),
  ADD KEY `estudiante_nota` (`Id_Estudiante`),
  ADD KEY `grupo_nota` (`Id_Grupo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `nota`
--
ALTER TABLE `nota`
  MODIFY `Id_Nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `estudiante_nota` FOREIGN KEY (`Id_Estudiante`) REFERENCES `estudiante` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grupo_nota` FOREIGN KEY (`Id_Grupo`) REFERENCES `grupo` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
