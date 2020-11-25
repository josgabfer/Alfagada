-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 25, 2020 at 01:29 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alfagada`
--
CREATE DATABASE IF NOT EXISTS `alfagada` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `alfagada`;

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarProducto` ()  NO SQL
BEGIN

SELECT * 
FROM productos ORDER BY id ASC;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarUsuario` (IN `pCorreo` VARCHAR(50), IN `pClave` VARCHAR(30))  NO SQL
BEGIN

IF (pCorreo = '') THEN
SELECT *
FROM usuarios;
ELSE
SELECT *
FROM usuarios
WHERE correo = pCorreo AND clave = pClave ;
END IF;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarProducto` (IN `pId` INT, IN `pNombre` VARCHAR(30), IN `pDesc` VARCHAR(50), IN `pPrecio` DECIMAL(5,2), IN `pImagen` VARCHAR(30))  NO SQL
BEGIN

INSERT INTO productos (id, nombre, descripcion, precio_unitario, imagen)
VALUES (pId, pNombre, pDesc, pPrecio, pImagen);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarUsuario` (IN `rNombre` VARCHAR(25), IN `rApellido` VARCHAR(25), IN `rCorreo` VARCHAR(50), IN `rClave` VARCHAR(30))  NO SQL
BEGIN

INSERT INTO usuarios (nombre, apellido, correo, clave)
VALUES (rNombre, rApellido, rCorreo, rClave);

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `precio_unitario` decimal(5,2) NOT NULL,
  `imagen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio_unitario`, `imagen`) VALUES
(1, 'Atun Aceite', '140 gramos', '500.00', 'atunaceite140g'),
(2, 'Arroz 90%', '1 kilo', '200.00', 'arroz901kg');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `clave` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `apellido`, `correo`, `clave`) VALUES
('', '', '', ''),
('', '123', '1232@123', '123'),
('123', '123', '123@123', '123'),
('Fabian', 'Bolanos', 'fabian@gmail.com', 'Test123'),
('Fabián', 'Bolaños', 'fabianbbenavides@gmail.com', 'test'),
('Luis ', 'Salas', 'lsalas@alfagada.com', 'test123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`correo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
