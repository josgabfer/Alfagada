-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 12:37 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

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
CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarCompra` (IN `pId` INT)  NO SQL
BEGIN

SELECT * 
FROM compras
WHERE idOrden=pId;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarDireccion` (IN `pCorreo` VARCHAR(50))  NO SQL
BEGIN

SELECT pais,direccion,direccion_2,distrito,canton,provincia,codigo_postal,telefono 
FROM usuarios
WHERE correo=pCorreo;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarProducto` (IN `pCategoria` VARCHAR(30))  NO SQL
BEGIN

SELECT * 
FROM productos
WHERE categoria=pCategoria;

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

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarCompra` (IN `pId` INT, IN `pFecha` DATE, IN `pEstado` VARCHAR(20), IN `pTotal` VARCHAR(20), IN `pTipoEntrega` VARCHAR(20), IN `pTipoPago` VARCHAR(20))  NO SQL
BEGIN

INSERT INTO compras (idOrden, fechaEntrega, estado, totalOrden, tipoEntrega, tipoPago)
VALUES (pId, pFecha, pEstado, pTotal, pTipoEntrega, pTipoPago);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarDireccion` (IN `pCorreo` VARCHAR(50), IN `pDireccion` VARCHAR(100), IN `pDireccionAdicional` VARCHAR(100), IN `pPais` VARCHAR(30), IN `pProvincia` VARCHAR(30), IN `pCanton` VARCHAR(30), IN `pDistrito` VARCHAR(30), IN `pCodigo` INT, IN `pTelefono` INT)  NO SQL
BEGIN

UPDATE usuarios 

SET direccion = pDireccion, direccion_2 = pDireccionAdicional, pais = pPais, provincia = pProvincia, canton = pCanton, distrito = pDistrito, codigo_postal = pCodigo, telefono = pTelefono

WHERE correo= pCorreo;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarProducto` (IN `pId` INT, IN `pNombre` VARCHAR(30), IN `pDesc` VARCHAR(50), IN `pCategoria` VARCHAR(30), IN `pPrecio` DECIMAL(5,2), IN `pImagen` VARCHAR(30))  NO SQL
BEGIN

INSERT INTO productos (id, nombre, descripcion, categoria, precio_unitario, imagen)
VALUES (pId, pNombre, pDesc, pCategoria, pPrecio, pImagen);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarUsuario` (IN `rNombre` VARCHAR(25), IN `rApellido` VARCHAR(25), IN `rCorreo` VARCHAR(50), IN `rClave` VARCHAR(30))  NO SQL
BEGIN

INSERT INTO usuarios (nombre, apellido, correo, clave)
VALUES (rNombre, rApellido, rCorreo, rClave);

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `compras`
--

CREATE TABLE `compras` (
  `idOrden` int(11) NOT NULL,
  `fechaEntrega` date NOT NULL,
  `estado` varchar(20) NOT NULL,
  `totalOrden` varchar(20) NOT NULL,
  `tipoEntrega` varchar(20) NOT NULL,
  `tipoPago` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compras`
--

INSERT INTO `compras` (`idOrden`, `fechaEntrega`, `estado`, `totalOrden`, `tipoEntrega`, `tipoPago`) VALUES
(1, '2020-12-14', 'Pendiente', '11388', 'Recoger en sitio', 'Efectivo'),
(2, '2020-12-18', 'Pendiente', '7150', 'Recoger en sitio', 'Efectivo'),
(2193, '2020-12-18', 'Pendiente', '7150', 'Recoger en sitio', 'Efectivo'),
(2438, '2020-12-18', 'Pendiente', '', '', 'Efectivo'),
(12077, '2020-12-18', 'Pendiente', '13930', 'Recoger en sitio', 'Efectivo'),
(69033, '2020-12-18', 'Pendiente', '', '', ''),
(82752, '2020-12-18', 'Pendiente', '7150', 'Recoger en sitio', 'Efectivo'),
(91578, '2020-12-18', 'Pendiente', '6786', 'A domicilio', 'Efectivo'),
(91581, '2020-12-19', 'Pendiente', '16586', 'Recoger en sitio', 'Efectivo');

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `precio_unitario` decimal(10,0) NOT NULL,
  `imagen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `categoria`, `precio_unitario`, `imagen`) VALUES
(1, 'Sardimar', 'Atún Lomo Trocitos 140g', 'Abarrotes', '500', 'atunaceite140g'),
(2, 'Sabanero', 'Arroz Blanco 90%', 'Abarrotes', '2000', 'arroz901kg'),
(3, 'Doña María', 'Azúcar Blanco 2 kg', 'Abarrotes', '1350', 'azucar'),
(4, 'Nestle', 'Cereal Fruta Trix 330g', 'Abarrotes', '2250', 'trix_cereal'),
(5, 'Tio Pelon', 'Frijoles Rojos 800g', 'Abarrotes', '1315', 'frijoles_tiopelon'),
(6, 'Sal Sol', 'Sal Parrillera 550g', 'Abarrotes', '1020', 'sal_parrillera'),
(7, 'Maseca', 'Harina Maiz 2268g', 'Abarrotes', '3750', 'maseca'),
(8, 'Nutella', 'Crema de Avellana 350g', 'Abarrotes', '2985', 'nutella'),
(9, 'Royal', 'Gelatina Limon 80g', 'Abarrotes', '460', 'gelatina'),
(10, 'Salat', 'Aceite Oliva Virgen 500ml', 'Abarrotes', '3000', 'aceiteoliva'),
(11, 'Lizano', 'Salsa Inglesa 700ml', 'Abarrotes', '1900', 'lizano'),
(12, 'Prince', 'Pasta Tornillo Queso 150g', 'Abarrotes', '505', 'prince_queso'),
(13, 'Maggi', 'Consome Pollo 225g', 'Abarrotes', '1750', 'maggi'),
(14, 'Ducal', 'Frijol Rojo Lata 425g', 'Abarrotes', '745', 'frijoles_enlatados'),
(15, 'Dos Pinos', 'Leche Semidescremada 2% 1800ml', 'Lacteos', '1075', 'leche'),
(16, 'Nikkos', 'Yogurt Griego Mora 150g', 'Lacteos', '1200', 'yogurt'),
(17, 'Zarcero', 'Natilla con Sal 650g', 'Lacteos', '1855', 'natilla'),
(18, 'Dos Pinos', 'Lactocrema 115g', 'Lacteos', '775', 'mantequilla'),
(19, 'Dos Pinos', 'Dip Chipotle 210g', 'Lacteos', '1535', 'dip'),
(20, 'Monteverde', 'Queso Mozzarella 400g', 'Lacteos', '6055', 'queso'),
(21, 'Frico', 'Queso Edam Tierno 1kg', 'Lacteos', '14455', 'edam'),
(22, 'Lysol', 'Discos Click Gel 6u 30g', 'Limpieza', '3730', 'lysol'),
(23, 'Pledge', 'Limpiador de Madera Aerosol 378ml', 'Limpieza', '3615', 'pledge'),
(24, 'Mr Musculo', 'Limpiador Antigrasa 1800ml', 'Limpieza', '2515', 'mrmusculo'),
(25, 'Clorox', 'Cloro Gel 930ml', 'Limpieza', '1490', 'cloro'),
(26, 'Vanish', 'Quitamanchas Polvo Color 450g', 'Limpieza', '2685', 'vanish'),
(27, 'Rinso', 'Detergente en Polvo 2500g', 'Limpieza', '3765', 'rinso'),
(28, 'Irex', 'Desinfectante Aroma Bosque 900ml', 'Limpieza', '660', 'irex'),
(29, 'Air Wick', 'Desodorante Ambiental Aerosol Acquamarine 400ml', 'Limpieza', '2945', 'airwick'),
(30, 'Scotch Brite', 'Esponja Doble Uso 2u', 'Limpieza', '1855', 'scotchbrite'),
(31, 'Alfagada Panaderia', 'Trenza Queso', 'Panaderia', '1070', 'trenza'),
(32, 'Alfagada Panaderia', 'Pan Frances Simple Medio', 'Panaderia', '350', 'panfrances'),
(33, 'Bimbo', 'Pan Blanco Bollito Artesano 390g', 'Panaderia', '1550', 'panartesano'),
(34, 'Torti Rica', 'Tortillas Maiz Gruesitas 20u 504g', 'Panaderia', '1290', 'tortillas'),
(35, 'Flor de Oro', 'Torta Chocofresa Pequeña ', 'Panaderia', '7370', 'queque'),
(36, 'Flor de Oro', 'Cheesecake Fresa', 'Panaderia', '7000', 'cheesecake'),
(37, 'Zacapa', 'Ron Añejo 25 Años 750ml', 'Bebidas', '58535', 'ron'),
(38, 'Johnnie Walker', 'Whisky Escoces 18 Años 750ml', 'Bebidas', '59265', 'johnnie'),
(39, 'Pilsen', 'Cerveza 7+1 2800ml', 'Bebidas', '5690', 'pilsen'),
(40, 'Frontera', 'Vino Tinto Merlot 750ml', 'Bebidas', '5665', 'vino'),
(41, 'Tropicana', 'Jugo Naranja 1530ml', 'Bebidas', '3580', 'jugo'),
(42, 'Mountain Dew', 'Gaseosa Limon 355ml', 'Bebidas', '615', 'mtdew'),
(43, 'Tropical', 'Te Frío con Melocotón 2500ml', 'Bebidas', '1300', 'tropical'),
(44, 'Red Bull', 'Bebida Energética 250ml', 'Bebidas', '1015', 'redbull'),
(45, 'Cristal', 'Agua Natural Manantial 6000ml', 'Bebidas', '2200', 'agua'),
(46, 'Britt', 'Café Grano Tueste Medio 340g', 'Bebidas', '5620', 'britt'),
(47, 'Lipton', 'Te Negro Descafeinado 93.5g', 'Bebidas', '4715', 'lipton'),
(48, 'Choice', 'Punta de Solomo Coulott 2.5kg', 'Carnes', '10000', 'puntasolomo'),
(49, 'Choice', 'Entraña 800g', 'Carnes', '10000', 'entrana'),
(50, 'Choice', 'Colita Cuadril 1.5kg', 'Carnes', '8500', 'cuadril'),
(51, 'San Cristobal', 'Pechuga de Pollo 1kg', 'Carnes', '3550', 'pechuga'),
(52, 'San Cristobal', 'Alitas de Pollo Bandeja 800g', 'Carnes', '2900', 'alitas'),
(53, 'San Cristobal', 'Muslito de Ala de Pollo 900g', 'Carnes', '3800', 'muslito');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `clave` varchar(30) NOT NULL,
  `pais` varchar(30) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `direccion_2` varchar(100) NOT NULL,
  `distrito` varchar(30) NOT NULL,
  `canton` varchar(30) NOT NULL,
  `provincia` varchar(30) NOT NULL,
  `codigo_postal` int(11) NOT NULL,
  `telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `apellido`, `correo`, `clave`, `pais`, `direccion`, `direccion_2`, `distrito`, `canton`, `provincia`, `codigo_postal`, `telefono`) VALUES
('123', '123', '123@123', '123', '1', '1', '1', '1', '1', '1', 1, 1),
('Daniel', 'Coto', 'dcoto@gmail.com', 'dc', 'Costa Rica', 'Del Fresh Market de Geroma, 25 metros este, 75 metros norte', 'Casa a mano derecha, rejas café', 'Pavas', 'San Jose', 'San Jose', 10109, 83883508),
('Fabian', 'Bolanos', 'fabian@gmail.com', 'Test123', '', '', '', '', '', '', 0, 0),
('Fabián', 'Bolaños', 'fabianbbenavides@gmail.com', 'test', '', '', '', '', '', '', 0, 0),
('Luis ', 'Salas', 'lsalas@alfagada.com', 'test123', '', '', '', '', '', '', 0, 0),
('Roberto', 'Perez', 'roberto@alfagada.com', '123', '', '', '', '', '', '', 0, 0),
('Roberto', 'Perez', 'rp@gmail.com', 'rp', 'Costa Rica', 'La Sabana', 'Cariari, Heredia', 'Pavas', 'Central', 'San Jose', 1000, 87931997),
('Test', 'Test', 'test123@test.com', 'test', '', '', '', '', '', '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`idOrden`);

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

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `compras`
--
ALTER TABLE `compras`
  MODIFY `idOrden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91582;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
