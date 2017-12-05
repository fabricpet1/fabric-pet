-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2017 a las 17:12:45
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fabric`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `TIPODOC` varchar(30) NOT NULL,
  `ID` int(11) DEFAULT NULL,
  `NOMBRES` varchar(40) NOT NULL,
  `APELLIDOS` varchar(40) NOT NULL,
  `CORREO` varchar(40) NOT NULL,
  `CONTRASENA` varchar(20) NOT NULL,
  `TELEFONO` varchar(25) NOT NULL,
  `GENERO` varchar(10) NOT NULL,
  `FECHA` varchar(10) NOT NULL,
  `DIRECCION` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`TIPODOC`, `ID`, `NOMBRES`, `APELLIDOS`, `CORREO`, `CONTRASENA`, `TELEFONO`, `GENERO`, `FECHA`, `DIRECCION`) VALUES
('cedula de ciudadania', 545454545, '4554545', '4545', '454545', '454545', '4545', 'masculino', '2017-11-22', '454545'),
('cedula de ciudadania', 256767868, 'hhfh', 'rtfgh', 'gtfghtg@gnhgj', '135476', '265787899', 'masculino', '2017-11-17', 'xdcvfbtrhb'),
('cedula de ciudadania', 121212, '2121212', '12121212', 'juandiego@gmail.com', '$2y$10$ECCndhCTuRv/c', '343434', 'femenino', '2017-11-21', '34343434');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
