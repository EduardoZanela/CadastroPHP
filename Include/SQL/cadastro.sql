-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2016 at 11:04 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cadastro`
--

-- --------------------------------------------------------

--
-- Table structure for table `pessoas`
--

CREATE TABLE IF NOT EXISTS `pessoas` (
  `id` int(4) NOT NULL,
  `nome` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `telefone` varchar(100) COLLATE utf8_bin NOT NULL,
  `dataNascimento` date NOT NULL,
  `sexo` varchar(100) COLLATE utf8_bin NOT NULL,
  `cpf` varchar(100) COLLATE utf8_bin NOT NULL,
  `rua` varchar(100) COLLATE utf8_bin NOT NULL,
  `numero` int(100) NOT NULL,
  `bairro` varchar(100) COLLATE utf8_bin NOT NULL,
  `complemento` varchar(100) COLLATE utf8_bin NOT NULL,
  `cidade` varchar(100) COLLATE utf8_bin NOT NULL,
  `estado` varchar(100) COLLATE utf8_bin NOT NULL,
  `pais` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `quartos`
--

CREATE TABLE IF NOT EXISTS `quartos` (
  `id` int(11) NOT NULL,
  `tipoQuarto` varchar(100) COLLATE utf8_bin NOT NULL,
  `numero` int(11) NOT NULL,
  `andar` int(11) NOT NULL,
  `tv` varchar(100) COLLATE utf8_bin NOT NULL,
  `banheiro` varchar(100) COLLATE utf8_bin NOT NULL,
  `frigobar` int(11) NOT NULL,
  `sacada` int(11) NOT NULL,
  `jacuzi` varchar(100) COLLATE utf8_bin NOT NULL,
  `estado` int(11) NOT NULL,
  `cama` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `reserva`
--

CREATE TABLE IF NOT EXISTS `reserva` (
  `id` int(11) NOT NULL,
  `quarto` int(11) NOT NULL,
  `pessoa` varchar(100) COLLATE utf8_bin NOT NULL,
  `periodoInicio` datetime NOT NULL,
  `periodoFim` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tipoQuarto`
--

CREATE TABLE IF NOT EXISTS `tipoQuarto` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_bin NOT NULL,
  `preco` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `user` varchar(100) COLLATE utf8_bin NOT NULL,
  `id_nivel_acesso` int(11) NOT NULL,
  `senha` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nome`, `email`, `user`, `id_nivel_acesso`, `senha`) VALUES
(1, 'Eduardo', 'eduardo@gmail.com', 'eduardo@gmail.com', 1, 'teste12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quartos`
--
ALTER TABLE `quartos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipoQuarto`
--
ALTER TABLE `tipoQuarto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `quartos`
--
ALTER TABLE `quartos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipoQuarto`
--
ALTER TABLE `tipoQuarto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
