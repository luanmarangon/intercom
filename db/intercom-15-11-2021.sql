-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 15, 2021 at 06:06 PM
-- Server version: 5.7.36-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intercom`
--

-- --------------------------------------------------------

--
-- Table structure for table `areacomuns`
--

CREATE TABLE `areacomuns` (
  `id` int(11) NOT NULL,
  `ramal` varchar(10) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `areacomum` varchar(30) DEFAULT NULL,
  `condominios_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `areacomuns`
--

INSERT INTO `areacomuns` (`id`, `ramal`, `senha`, `areacomum`, `condominios_id`) VALUES
(1, '10', '1', 'Portaria ServiÃ§os', 12),
(2, '11', '11', 'Portaria de Serviços', 3),
(3, '111', '11', 'Portaria Social', 3),
(4, '12', '11', 'Portaria de Serviços', 4),
(5, '121', '11', 'Portaria Social', 4),
(6, '13', '11', 'Portaria de Serviços', 5),
(7, '131', '11', 'Portaria Social', 5);

-- --------------------------------------------------------

--
-- Table structure for table `condominios`
--

CREATE TABLE `condominios` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `prefixo` int(11) DEFAULT NULL,
  `contato` varchar(45) DEFAULT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `anexo` varchar(300) DEFAULT NULL,
  `ativo` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `condominios`
--

INSERT INTO `condominios` (`id`, `nome`, `prefixo`, `contato`, `telefone`, `celular`, `anexo`, `ativo`) VALUES
(1, 'CONDOMINIO RESIDENCIAL VALENCIA I', 10, 'Carlos', '(18) 2104-2588', '(18) 99748-2397', 'Anexo', 'N'),
(2, 'CONDOMINIO RESIDENCIAL GRAMADO', 20, 'Carlos', '(18) 2101-2255', '(18) 98877-6655', 'Anexo', 'N'),
(3, 'CONDOMÃ­NIO ROYAL PARK', 30, 'Silvana', '(18) 2104-2566', '(18) 99452-3651', 'Anexo', 'S'),
(4, 'CONDOMÃNIO VALENCIA II', 40, 'Marcio', '(18) 8888-8888', '(88) 88888-8888', 'Anexo', 'S'),
(5, 'CONDOMÃNIO PORTO MADERO', 50, 'Jose', '(11) 1111-1111', '(11) 11111-1111', 'Anexo', 'S'),
(6, 'CONDOMINIO PORTINARI', 51, '', '', '', 'Anexo', 'S'),
(7, 'PORTINARI 2', 52, '', '', '', 'Anexo', 'S'),
(8, 'DAMHA 4', 53, '', '', '', 'Anexo', 'S'),
(9, 'VALENCIA PIRAPOZINHO', 54, '', '', '', 'Anexo', 'S'),
(10, 'DAMHA 5', 55, '', '', '', 'Anexo', 'S'),
(11, 'CONDOMINIO VALENCIA 5', 56, '', '', '', 'Anexo', 'S'),
(12, 'CONDOMINIO GRAMADO 2', 57, '', '', '', 'Anexo', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `endereco`
--

CREATE TABLE `endereco` (
  `grupo` int(11) NOT NULL,
  `logradouro` varchar(70) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `complemento` varchar(15) DEFAULT NULL,
  `cidade` varchar(35) DEFAULT NULL,
  `moradores_id` int(11) NOT NULL,
  `condominios_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `endereco`
--

INSERT INTO `endereco` (`grupo`, `logradouro`, `numero`, `complemento`, `cidade`, `moradores_id`, `condominios_id`) VALUES
(12, 'Rua Alcides Ramos da Silva', 315, 'Casa', 'Martinópolis', 1, 1),
(14, 'Rua Alcides Ramos', 310, 'Casa', 'Martinopolis', 2, 1),
(20, 'Teste A', 10, 'casa', 'Pres.Prudente', 1, 2),
(101, 'Rua Joaquim Nabucco', 1133, 'A', 'Presidente Prudente', 5, 8),
(134, 'Rua Inocencio de Almeida', 200, 'casa', 'MartinÃ³polis', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `moradores`
--

CREATE TABLE `moradores` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(200) DEFAULT NULL,
  `ativo` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `moradores`
--

INSERT INTO `moradores` (`id`, `nome`, `cpf`, `telefone`, `celular`, `email`, `senha`, `ativo`) VALUES
(1, 'LUAN DE LIMA MARANGON', '379.695.468-54', '(18) 9974-8239', '(18) 99748-2397', 'luan.limarangon@gmail.com', '1', 'S'),
(2, 'LUANY TESTE', '222.222.222-22', '(22) 2222-2222', '(22) 22222-2222', 'luany@teste.com.br', '1234', 'S'),
(5, 'MARIA APARECIDA DA SILVA SOUZA', '111.111.111-11', '', '', 'maria.aparecida@gmail.com', 'ab', 'S');

-- --------------------------------------------------------

--
-- Table structure for table `ramais`
--

CREATE TABLE `ramais` (
  `id` int(11) NOT NULL,
  `ramal` int(11) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `alocado` varchar(45) DEFAULT NULL,
  `endereco_grupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ramais`
--

INSERT INTO `ramais` (`id`, `ramal`, `senha`, `alocado`, `endereco_grupo`) VALUES
(1, 11, '1', 'Teste11', 12),
(2, 12, '1', 'Teste12', 12),
(3, 13, '1', 'Teste13', 12),
(4, 14, '1', 'Teste14', 12),
(5, 15, '1', 'Teste15', 12),
(6, 16, '1', 'Teste16', 12),
(7, 17, '1', 'Teste17', 12),
(8, 21, '1', 'Teste21', 14),
(9, 22, '1', 'Teste22', 14),
(10, 23, '1', 'Teste23', 14),
(11, 24, '1', 'Teste24', 14),
(12, 25, '1', 'Teste25', 14),
(13, 26, '1', 'Teste26', 14),
(14, 27, '1', 'Teste27', 14),
(15, 31, '1', 'Teste31', 20),
(16, 32, '1', 'Teste32', 20),
(17, 33, '1', 'Teste33', 20),
(18, 34, '1', 'Teste34', 20),
(19, 35, '1', 'Teste35', 20),
(20, 36, '1', 'Teste36', 20),
(21, 37, '1', 'Teste37', 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(45) DEFAULT NULL,
  `senha` varchar(200) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `perfil` varchar(20) DEFAULT NULL,
  `ativo` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `senha`, `email`, `nome`, `perfil`, `ativo`) VALUES
(12, 'marangon', 'f9c2ecb9d72007b3024f0e74252a52d4', 'luan.limarangon@gmail.com', 'LUAN DE LIMA MARANGON', 'Administrador', 'S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areacomuns`
--
ALTER TABLE `areacomuns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_areacomuns_condominios1_idx` (`condominios_id`);

--
-- Indexes for table `condominios`
--
ALTER TABLE `condominios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`grupo`),
  ADD KEY `fk_endereco_moradores1_idx` (`moradores_id`),
  ADD KEY `fk_endereco_condominios1_idx` (`condominios_id`);

--
-- Indexes for table `moradores`
--
ALTER TABLE `moradores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ramais`
--
ALTER TABLE `ramais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ramais_endereco1_idx` (`endereco_grupo`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `areacomuns`
--
ALTER TABLE `areacomuns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `condominios`
--
ALTER TABLE `condominios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `moradores`
--
ALTER TABLE `moradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ramais`
--
ALTER TABLE `ramais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `areacomuns`
--
ALTER TABLE `areacomuns`
  ADD CONSTRAINT `fk_areacomuns_condominios1` FOREIGN KEY (`condominios_id`) REFERENCES `condominios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `fk_endereco_condominios1` FOREIGN KEY (`condominios_id`) REFERENCES `condominios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_endereco_moradores1` FOREIGN KEY (`moradores_id`) REFERENCES `moradores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ramais`
--
ALTER TABLE `ramais`
  ADD CONSTRAINT `fk_ramais_endereco1` FOREIGN KEY (`endereco_grupo`) REFERENCES `endereco` (`grupo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
