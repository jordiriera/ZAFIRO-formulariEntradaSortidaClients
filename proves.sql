-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-03-2018 a las 15:00:32
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proves`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `buy`
--

CREATE TABLE `buy` (
  `ID` int(20) NOT NULL,
  `entrada` date DEFAULT NULL,
  `sortida` date DEFAULT NULL,
  `hotel` int(9) DEFAULT NULL,
  `horaArribada` time DEFAULT NULL,
  `horaSortida` time DEFAULT NULL,
  `idUsuari` int(20) DEFAULT NULL,
  `comentari` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `buy`
--

INSERT INTO `buy` (`ID`, `entrada`, `sortida`, `hotel`, `horaArribada`, `horaSortida`, `idUsuari`, `comentari`) VALUES
(1, '2018-03-26', '2018-03-29', 1, '22:52:00', '14:15:00', 1, 'NULL'),
(2, '2018-03-26', '2018-03-29', 1, '19:30:00', '23:20:00', 1, NULL),
(4, '2018-03-30', '2018-04-14', 15, '19:30:00', '23:20:00', 1, NULL),
(5, '2018-03-30', '2018-04-14', 16, '08:30:00', '17:30:00', 1, 'ooooooooooooooooooooooooooooo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `ID` int(20) NOT NULL,
  `name` varchar(15) DEFAULT NULL,
  `surname1` varchar(15) DEFAULT NULL,
  `surname2` varchar(15) DEFAULT NULL,
  `telephone` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`ID`, `name`, `surname1`, `surname2`, `telephone`) VALUES
(1, 'jordi', 'riera', 'rayó', 646464468);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `idUsuari` (`idUsuari`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `buy`
--
ALTER TABLE `buy`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `buy`
--
ALTER TABLE `buy`
  ADD CONSTRAINT `buy_ibfk_1` FOREIGN KEY (`idUsuari`) REFERENCES `user` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
