-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 06, 2023 at 09:30 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agence`
--

-- --------------------------------------------------------

--
-- Table structure for table `annonces`
--

CREATE TABLE `annonces` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `images` varchar(150) NOT NULL,
  `description` varchar(250) NOT NULL,
  `superficie` int(50) NOT NULL,
  `adresse` varchar(250) NOT NULL,
  `montant` decimal(65,0) NOT NULL,
  `date` date NOT NULL,
  `type_annonce` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `annonces`
--

INSERT INTO `annonces` (`id`, `titre`, `images`, `description`, `superficie`, `adresse`, `montant`, `date`, `type_annonce`) VALUES
(39, 'Ville de luxe', 'assets/img/igence-immobiliere-marrakech2.jpg', 'Ville est dans trés bon état', 800, 'complex fadallah ahlane imm 25 numero 35,Tanger', '189000500', '2023-02-06', 'vendre'),
(40, 'appartement de luxe', 'assets/img/acheter-appartement-marocain-epure-marrakech-hivernage.jpg', 'Ville est dans trés bon état', 200, 'complex fadallah ahlane imm 25 numero 35,Tanger', '980000', '2023-02-06', 'vendre'),
(41, 'Ville de luxe', 'assets/img/acheter-appartement-marocain-epure-marrakech-hivernage.jpg', 'Ville est dans trés bon état', 200, 'complex  ahlane imm 25 numero 35,Tanger', '2570', '2023-02-06', 'Location');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
