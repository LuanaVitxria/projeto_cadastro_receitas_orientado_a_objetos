-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: tads_2a_manha.mysql.dbaas.com.br
-- Generation Time: 02-Jun-2023 às 19:49
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
-- Estrutura da tabela `luana_cp_receitas_login`
--

DROP TABLE IF EXISTS `luana_cp_receitas_login`;
CREATE TABLE `luana_cp_receitas_login` (
  `id_login` int(6) NOT NULL,
  `login_user` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email_user` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `password_user` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `luana_cp_receitas_login`
--

INSERT INTO `luana_cp_receitas_login` (`id_login`, `login_user`, `email_user`, `password_user`) VALUES
(1, 'luanavitoria', 'luanavitoria@umc.br', '0123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `luana_cp_receitas_login`
--
ALTER TABLE `luana_cp_receitas_login`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `luana_cp_receitas_login`
--
ALTER TABLE `luana_cp_receitas_login`
  MODIFY `id_login` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
