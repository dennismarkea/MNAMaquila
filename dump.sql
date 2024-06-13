-- phpMyAdmin SQL Dump
-- version 5.1.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2024 at 08:14 PM
-- Server version: 8.0.34-26
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpxnuejagkq3r`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `organization` varchar(100) DEFAULT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `email`, `telephone`, `organization`, `message`) VALUES
(27, 'Dennis Yam', 'dennisyam@gmail.com', '9831195009', 'Markea Agency', 'mensaje'),
(28, 'Dennis Yam', 'dennisyam@gmail.com', '9831195009', 'Markea Agency', 'Hola este es un mensaje de prueba'),
(29, 'Dennis Yam', 'dennisyamsheet@gmail.com', '+529831195009', 'No company', 'Hola quiero cotizar'),
(30, 'Darwin Cruz', 'darwincruz01@gmail.com', '9981909148', 'Markea Agency', 'Este es un mensaje de prueba, por favor de ignorar.'),
(31, 'Dennis', 'dennisyam@gmail.com', '9831195009', 'Markea Agency', 'Esta es una prueba de correo'),
(32, 'Dennis Yam', 'dennis@markea.agency', '9831195009', 'Markea Agency', 'dcgh'),
(33, 'Dennis Yam', 'dennisyamsheet@gmail.com', '+529831195009', 'No company', 'Hola'),
(34, 'Dennis Yam', 'dennisyam@gmail.com', '98412345657', 'fds', 'sdfg'),
(35, 'Dennis Yam', 'dennis@markea.agency', '2345', 'asdf', 'asdf'),
(36, 'Dennis Yam', 'dennisyam@gmail.com', '2134', 'Markea Agency', 'dfasf'),
(37, 'Dennis Yam', 'dennisyam@gmail.com', '9831195009', 'mar4kasd', 'fasdf'),
(38, 'Dennis Yam', 'dennisyam@gmail.com', '9831195009', 'Markea Agency', 'hola'),
(39, 'Dennis Yam', 'dennis@markea.agency', '9831195009', 'Markea Agency', 'Hola esta es una pre'),
(40, 'Darwin Cruz', 'darwincruz01@gmail.com', '9981909148', 'Markea Agency', 'Esto es un correo de prueba, por favor de ignorar.'),
(41, 'Isabella Gzz', 'isagzza@hotmail.com', '8182546013', 'Pachimama', 'Hola tengo mi empresa de salsas Pachimama y estoy buscando incorporar snacks en mi linea de productos.'),
(42, 'Karla Pérez Treviño', 'karla@fiqa.com.mx', '8110070342', '', 'Buen día, una duda, manejan servicio de maquila se snack tipo bolita a base de pasta de dátil? Que costo y mínimo de producción tendrían \r\nDe antemano muchas gracias '),
(43, 'Marijose Arias', 'esquinitaorganica@gmail.com', '8711893240', 'Esquinita Organica', 'Hola!\r\nComo estan?\r\nQuisiera pedirles información de los productos q maquilan. Nosotros empacamos marca propia q vendemos en nuestras tiendas y quisiera ver q productos suyos pudiera agregar a mi lista de productos\r\nGracias'),
(44, 'Dennis Adair Yam Cetina', 'dennis@markea.agency', '9831195009', 'Markea Agency', 'Hola esta es una prueba de mensaje con caracteres Ā ā Ă ă Ą ą Ć ć Ĉ ĉ Ċ ċ Č č Ď ď Đ đ Ē ē Ĕ ĕ Ė ė Ę ę Ě ě Ĝ ĝ Ğ ğ Ġ ġ Ģ ģ Ĥ ĥ Ħ ħ Ĩ ĩ Ī ī Ĭ ĭ Į į İ ı Ĳ ĳ Ĵ ĵ Ķ ķ ĸ Ĺ ĺ Ļ ļ Ľ ľ Ŀ ŀ Ł ł Ń ń Ņ ņ Ň ň ŉ Ŋ ŋ Ō ō Ŏ ŏ Ő ő Œ œ Ŕ ŕ Ŗ ŗ Ř ř Ś ś Ŝ ŝ Ş ş Š š Ţ ţ Ť ť Ŧ ŧ Ũ ũ Ū ū Ŭ ŭ Ů ů Ű ű Ų ų Ŵ ŵ Ŷ ŷ Ÿ Ź ź Ż ż Ž ž ſ '),
(45, 'María Hernández ', 'mariaght81@gmail.com', '8331389795', '', 'Quiero informes sobre maquila de snacks ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
