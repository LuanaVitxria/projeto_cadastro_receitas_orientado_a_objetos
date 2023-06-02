-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: tads_2a_manha.mysql.dbaas.com.br
-- Generation Time: 02-Jun-2023 às 19:47
-- Versão do servidor: 5.7.32-35-log
-- PHP Version: 5.6.40-0+deb8u12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tads_2a_manha`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `luana_cp_cadastro`
--

DROP TABLE IF EXISTS `luana_cp_cadastro`;
CREATE TABLE `luana_cp_cadastro` (
  `id` int(100) NOT NULL,
  `titulo` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `ingredientes` varchar(8000) COLLATE latin1_general_ci NOT NULL,
  `modo_de_preparo` varchar(10000) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `luana_cp_cadastro`
--

INSERT INTO `luana_cp_cadastro` (`id`, `titulo`, `ingredientes`, `modo_de_preparo`) VALUES
(1, 'teste', 'teste', 'teste');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `luana_cp_cadastro`
--
ALTER TABLE `luana_cp_cadastro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `luana_cp_cadastro`
--
ALTER TABLE `luana_cp_cadastro`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
