-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 24-Maio-2021 às 20:50
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `intercom`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `areacomuns`
--

DROP TABLE IF EXISTS `areacomuns`;
CREATE TABLE IF NOT EXISTS `areacomuns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ramal` varchar(10) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `areacomum` varchar(30) DEFAULT NULL,
  `condominios_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_areacomuns_condominios1_idx` (`condominios_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `areacomuns`
--

INSERT INTO `areacomuns` (`id`, `ramal`, `senha`, `areacomum`, `condominios_id`) VALUES
(4, '10991', '123', 'Portaria', 1),
(5, '102020', '1', 'Portaria ServiÃ§os', 2),
(6, '2010101', '1', 'Gerencia', 2),
(7, '102020', '122', 'Luan', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `condominios`
--

DROP TABLE IF EXISTS `condominios`;
CREATE TABLE IF NOT EXISTS `condominios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `prefixo` int(11) DEFAULT NULL,
  `contato` varchar(45) DEFAULT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `anexo` varchar(300) DEFAULT NULL,
  `ativo` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `condominios`
--

INSERT INTO `condominios` (`id`, `nome`, `prefixo`, `contato`, `telefone`, `celular`, `anexo`, `ativo`) VALUES
(1, 'Condominio Residencial Valencia I', 10, 'Carlos', '(18) 2104-2588', '(18) 99748-2397', 'Anexo', 'N'),
(2, 'Condominio Residencial Gramado', 20, 'Carlos', '(18) 2101-2255', '(18) 98877-6655', 'Anexo', 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

DROP TABLE IF EXISTS `endereco`;
CREATE TABLE IF NOT EXISTS `endereco` (
  `grupo` int(11) NOT NULL,
  `logradouro` varchar(70) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `complemento` varchar(15) DEFAULT NULL,
  `cidade` varchar(35) DEFAULT NULL,
  `moradores_id` int(11) NOT NULL,
  `condominios_id` int(11) NOT NULL,
  PRIMARY KEY (`grupo`),
  KEY `fk_endereco_moradores1_idx` (`moradores_id`),
  KEY `fk_endereco_condominios1_idx` (`condominios_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`grupo`, `logradouro`, `numero`, `complemento`, `cidade`, `moradores_id`, `condominios_id`) VALUES
(12, 'Rua Alcides Ramos da Silva', 315, 'Casa', 'Martinópolis', 1, 1),
(14, 'Rua Alcides Ramos', 310, 'Casa', 'Martinopolis', 2, 1),
(20, 'Teste A', 10, 'casa', 'Pres.Prudente', 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `moradores`
--

DROP TABLE IF EXISTS `moradores`;
CREATE TABLE IF NOT EXISTS `moradores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(200) DEFAULT NULL,
  `ativo` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `moradores`
--

INSERT INTO `moradores` (`id`, `nome`, `cpf`, `telefone`, `celular`, `email`, `senha`, `ativo`) VALUES
(1, 'Luan de Lima Marangon', '379.695.468-54', '(18) 9974-8239', '(18) 99748-2397', 'luan.limarangon@gmail.com', '1', 'S'),
(2, 'Luany Teste', '222.222.222-22', '(22) 2222-2222', '(22) 22222-2222', 'luany@teste.com.br', '1234', 'N');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ramais`
--

DROP TABLE IF EXISTS `ramais`;
CREATE TABLE IF NOT EXISTS `ramais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ramal` int(11) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `alocado` varchar(45) DEFAULT NULL,
  `endereco_grupo` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ramais_endereco1_idx` (`endereco_grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ramais`
--

INSERT INTO `ramais` (`id`, `ramal`, `senha`, `alocado`, `endereco_grupo`) VALUES
(1, 10000, '123', 'Luan', 12),
(2, 10000, '123', 'Luan', 12),
(3, 20000, '123', 'Luany', 12),
(4, 30000, '123', 'Lizandra', 12),
(5, 40000, '123', 'Vanda', 12),
(6, 50000, '123', 'Lyvia', 12),
(7, 11000, '123', 'Lyvia', 14),
(8, 12000, '123', 'Lyvia', 14),
(9, 13000, '123', 'Lyvia', 14),
(10, 14000, '123', 'Lyvia', 14),
(11, 100030, '123', 'Luan2', 20),
(12, 200300, '123', 'Luany2', 20),
(13, 300300, '123', 'Lizandra2', 20),
(14, 400003, '123', 'Vanda2', 20),
(15, 500030, '123', 'Lyvia2', 20),
(16, 110300, '123', 'Lyvia3', 20),
(17, 120300, '123', 'Lyvia3', 20),
(18, 130300, '123', 'Lyvia3', 20),
(19, 140030, '123', 'Lyvia3', 20),
(20, 100030, '123', 'Luan2', 20),
(21, 200300, '123', 'Luany2', 20),
(22, 300300, '123', 'Lizandra2', 20),
(23, 400003, '123', 'Vanda2', 20),
(24, 500030, '123', 'Lyvia2', 20),
(25, 110300, '123', 'Lyvia3', 20),
(26, 120300, '123', 'Lyvia3', 20),
(27, 130300, '123', 'Lyvia3', 20),
(28, 140030, '123', 'Lyvia3', 20),
(29, 100030, '123', 'Luan2', 20),
(30, 200300, '123', 'Luany2', 20),
(31, 300300, '123', 'Lizandra2', 20),
(32, 400003, '123', 'Vanda2', 20),
(33, 500030, '123', 'Lyvia2', 20),
(34, 110300, '123', 'Lyvia3', 20),
(35, 120300, '123', 'Lyvia3', 20),
(36, 130300, '123', 'Lyvia3', 20),
(37, 140030, '123', 'Lyvia3', 20),
(38, 100030, '123', 'Luan2', 20),
(39, 200300, '123', 'Luany2', 20),
(40, 300300, '123', 'Lizandra2', 20),
(41, 400003, '123', 'Vanda2', 20),
(42, 500030, '123', 'Lyvia2', 20),
(43, 110300, '123', 'Lyvia3', 20),
(44, 120300, '123', 'Lyvia3', 20),
(45, 130300, '123', 'Lyvia3', 20),
(46, 140030, '123', 'Lyvia3', 20),
(47, 100030, '123', 'Luan2', 20),
(48, 200300, '123', 'Luany2', 20),
(49, 300300, '123', 'Lizandra2', 20),
(50, 400003, '123', 'Vanda2', 20),
(51, 500030, '123', 'Lyvia2', 20),
(52, 110300, '123', 'Lyvia3', 20),
(53, 120300, '123', 'Lyvia3', 20),
(54, 130300, '123', 'Lyvia3', 20),
(55, 140030, '123', 'Lyvia3', 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(45) DEFAULT NULL,
  `senha` varchar(200) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `perfil` varchar(20) DEFAULT NULL,
  `ativo` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `login`, `senha`, `email`, `nome`, `perfil`, `ativo`) VALUES
(1, 'Marangon', 'c4ca4238a0b923820dcc509a6f75849b', 'luan.limarangon@gmail.com', 'Luan de Lima Marangon', 'Administrador', 'S'),
(2, 'Marangona', 'c4ca4238a0b923820dcc509a6f75849b', 'luanymarangon@gmail.com', 'Luany de Lima Marangon', 'Administrador', 'N'),
(3, 'ruy', 'c4ca4238a0b923820dcc509a6f75849b', 'Ruy@gmail.com', 'Ruy', 'Administrador', 'S'),
(4, 'pedro', 'c4ca4238a0b923820dcc509a6f75849b', 'pedro@stetnet.com.br', 'Pedro', 'Portaria', 'S');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `areacomuns`
--
ALTER TABLE `areacomuns`
  ADD CONSTRAINT `fk_areacomuns_condominios1` FOREIGN KEY (`condominios_id`) REFERENCES `condominios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `fk_endereco_condominios1` FOREIGN KEY (`condominios_id`) REFERENCES `condominios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_endereco_moradores1` FOREIGN KEY (`moradores_id`) REFERENCES `moradores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `ramais`
--
ALTER TABLE `ramais`
  ADD CONSTRAINT `fk_ramais_endereco1` FOREIGN KEY (`endereco_grupo`) REFERENCES `endereco` (`grupo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
