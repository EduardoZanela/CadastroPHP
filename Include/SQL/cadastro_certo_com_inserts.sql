-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30-Nov-2016 às 12:55
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
  `dataNascimento` varchar(100) COLLATE utf8_bin NOT NULL,
  `sexo` varchar(100) COLLATE utf8_bin NOT NULL,
  `cpf` varchar(100) COLLATE utf8_bin NOT NULL,
  `rua` varchar(100) COLLATE utf8_bin NOT NULL,
  `numero` varchar(100) COLLATE utf8_bin NOT NULL,
  `bairro` varchar(100) COLLATE utf8_bin NOT NULL,
  `complemento` varchar(100) COLLATE utf8_bin NOT NULL,
  `cidade` varchar(100) COLLATE utf8_bin NOT NULL,
  `estado` varchar(100) COLLATE utf8_bin NOT NULL,
  `pais` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`id`, `nome`, `email`, `telefone`, `dataNascimento`, `sexo`, `cpf`, `rua`, `numero`, `bairro`, `complemento`, `cidade`, `estado`, `pais`) VALUES
(1, 'Eduardo Golin Zanela', 'eduardogzanela@gmail.com', '5481437747', '2016-11-24', 'asd', 'sadasdasdasd', 'Alferes Rodrigo 385 apto602, Boqueirao', '212', 'asdadas', 'sdfsdfs', 'Passo Fundo', 'Rio Grande do Sul', 'Brasil'),
(2, 'Eduardo Golin Zanela', 'eduardogzanela@gmail.com', '5481437747', '2016-11-24', 'asd', 'sadasdasdasd', 'Alferes Rodrigo 385 apto602, Boqueirao', '212', 'asdadas', 'sdfsdfs', 'Passo Fundo', 'Rio Grande do Sul', 'Brasil'),
(3, 'Pablo Lunardi', 'lulu@gmail.com', '5481437747', '2016-11-07', 'masculino', '000000000', 'Alferes Rodrigo 385 apto602, Boqueirao', '147', 'centro', 'aaa', 'Passo Fundo', 'Rio Grande do Sul', 'Brasil');

-- --------------------------------------------------------

--
-- Estrutura da tabela `quartos`
--

CREATE TABLE `quartos` (
  `id` int(11) NOT NULL,
  `tipoQuarto` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `andar` int(11) NOT NULL,
  `descricao` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `quartos`
--

INSERT INTO `quartos` (`id`, `tipoQuarto`, `numero`, `andar`, `descricao`) VALUES
(1, 1, 123, 2, 0x617364616461646173646164),
(2, 3, 159, 2, 0x71756172746f206465206c75786f206d7569746f20626f6d20707261206d65746572),
(3, 4, 69, 11, 0x73757065722071756172746f20646f20616d6f7220646f206c756e6172646920636f6d2062616e6865697261206a6163757a6920652063687576656972696e686f2e2074626d2074656d207265642062756c6c2071756520746520646120617a6173);

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

--
-- Extraindo dados da tabela `reserva`
--

INSERT INTO `reserva` (`id`, `quarto_id`, `pessoa_id`, `periodoInicio`, `periodoFim`) VALUES
(1, 1, 1, '2016-11-23 00:00:00', '2016-11-30 00:00:00'),
(2, 3, 3, '2016-11-30 00:00:00', '2017-01-31 00:00:00');

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
-- Extraindo dados da tabela `tipoquarto`
--

INSERT INTO `tipoquarto` (`id`, `nome`, `preco`) VALUES
(1, 'luxo', 20),
(2, 'suite', 30),
(3, 'Super Suite Bulls', 100),
(4, 'Sinfonia do Amor', 5000),
(5, 'Super Suite Golden ', 150),
(6, 'Suite Mega Master Lunardi do Amor', 9000);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `id_nivel_acesso` int(11) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `email`, `user`, `id_nivel_acesso`, `senha`) VALUES
(1, 'Eduardo Zanela', 'eduardozanela@gmail.com', 'eduardozanela@gmail.com', 1, 'teste12'),
(2, 'Eduardo', 'eduardozanela@gmail.com', 'eduardogzanela@gmail.com', 2, 'teste12');

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
  ADD KEY `quartos_ibfk_1` (`tipoQuarto`);

--
-- Indexes for table `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reserva_ibfk_1` (`quarto_id`),
  ADD KEY `reserva_ibfk_2` (`pessoa_id`);

--
-- Indexes for table `tipoquarto`
--
ALTER TABLE `tipoquarto`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `quartos`
--
ALTER TABLE `quartos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tipoquarto`
--
ALTER TABLE `tipoquarto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
