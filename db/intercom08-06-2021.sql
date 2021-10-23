-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 08-Jun-2021 às 15:45
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `areacomuns`
--

INSERT INTO `areacomuns` (`id`, `ramal`, `senha`, `areacomum`, `condominios_id`) VALUES
(1, '10', '1', 'Portaria ServiÃ§os', 12);

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `condominios`
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
(12, 'CONDOMINIO GRAMADO 2', 57, '', '', '', 'Anexo', 'S');

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
(20, 'Teste A', 10, 'casa', 'Pres.Prudente', 1, 2),
(134, 'Rua Inocencio de Almeida', 200, 'casa', 'MartinÃ³polis', 5, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `moradores`
--

INSERT INTO `moradores` (`id`, `nome`, `cpf`, `telefone`, `celular`, `email`, `senha`, `ativo`) VALUES
(1, 'LUAN DE LIMA MARANGON', '379.695.468-54', '(18) 9974-8239', '(18) 99748-2397', 'luan.limarangon@gmail.com', '1', 'S'),
(2, 'LUANY TESTE', '222.222.222-22', '(22) 2222-2222', '(22) 22222-2222', 'luany@teste.com.br', '1234', 'S'),
(5, 'DANIELA BUENO', '111.111.111-11', '', '', 'dani@bueno.com.br', 'a', 'S');

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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ramais`
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

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
