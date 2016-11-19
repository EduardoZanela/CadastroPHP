-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19-Nov-2016 às 01:16
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `id` int(11) NOT NULL,
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
-- Estrutura da tabela `quartos`
--

CREATE TABLE `quartos` (
  `id` int(11) NOT NULL,
  `tipoQuarto` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `andar` int(11) NOT NULL,
  `tv` varchar(100) COLLATE utf8_bin NOT NULL,
  `banheiro` varchar(100) COLLATE utf8_bin NOT NULL,
  `frigobar` int(11) NOT NULL,
  `sacada` int(11) NOT NULL,
  `jacuzi` varchar(100) COLLATE utf8_bin NOT NULL,
  `estado` int(11) NOT NULL,
  `cama` varchar(100) COLLATE utf8_bin NOT NULL,
  `descricao` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

CREATE TABLE `reserva` (
  `id` int(11) NOT NULL,
  `quarto_id` int(11) NOT NULL,
  `pessoa_id` int(11) NOT NULL,
  `periodoInicio` datetime NOT NULL,
  `periodoFim` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipoquarto`
--

CREATE TABLE `tipoquarto` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_bin NOT NULL,
  `preco` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipoQuarto` (`tipoQuarto`);

--
-- Indexes for table `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quarto_id` (`quarto_id`),
  ADD KEY `pessoa_id` (`pessoa_id`);

--
-- Indexes for table `tipoquarto`
--
ALTER TABLE `tipoquarto`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `quartos`
--
ALTER TABLE `quartos`
  ADD CONSTRAINT `quartos_ibfk_1` FOREIGN KEY (`tipoQuarto`) REFERENCES `tipoquarto` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`quarto_id`) REFERENCES `quartos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`pessoa_id`) REFERENCES `pessoas` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
