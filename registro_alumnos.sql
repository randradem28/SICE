-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 19-05-2022 a las 00:29:35
-- Versión del servidor: 8.0.28
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_registrosice`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_alumnos`
--

CREATE TABLE `registro_alumnos` (
  `Boleta` bigint NOT NULL,
  `Contraseña` varchar(12) NOT NULL,
  `Apellido_Paterno` varchar(45) NOT NULL,
  `Apellido_Materno` varchar(45) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Plantel` varchar(45) NOT NULL,
  `Carrera` varchar(45) NOT NULL,
  `Fotografía` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Simulación de datos de alumnos desde SAES';

--
-- Volcado de datos para la tabla `registro_alumnos`
--

INSERT INTO `registro_alumnos` (`Boleta`, `Contraseña`, `Apellido_Paterno`, `Apellido_Materno`, `Nombre`, `Plantel`, `Carrera`, `Fotografía`) VALUES
(2021600037, 'Monoloco17.', 'Andrade', 'Mejia', 'Roberto', 'UPIICSA', 'Licenciatura en Ciencias de la Informatica', 'img/2021600037.jpg'),
(2021600265, 'Upiicsa2502.', 'Carrillo', 'Garcia', 'Edgar Javier', 'UPIICSA', 'Ingenieria Industrial', 'img/2021600265.jpg'),
(2021600282, 'Upiicsa2502.', 'Duran', 'Ventura', 'Alexis Uriel', 'UPIICSA', 'Licenciatura en Administracion Industrial', 'img/2021600282.jpg'),
(2021601147, 'Upiicsa2502.', 'Venegas', 'Dominguez', 'Cinthia Sofía', 'UPIICSA', 'Ingenieria Informatica', ''),
(2021601982, 'Upiicsa2502.', 'Hernandez', 'Tenorio', 'Emilia', 'UPIICSA', 'Ingenieria en Transporte', 'img/2021601982.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro_alumnos`
--
ALTER TABLE `registro_alumnos`
  ADD PRIMARY KEY (`Boleta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
