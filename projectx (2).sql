-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Jun-2018 às 23:10
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectx`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamentos`
--

CREATE TABLE `agendamentos` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_cliente` int(10) UNSIGNED NOT NULL,
  `id_carro` int(10) UNSIGNED NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'A',
  `descricao` varchar(120) NOT NULL,
  `data` datetime NOT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `agendamentos`
--

INSERT INTO `agendamentos` (`id`, `id_cliente`, `id_carro`, `status`, `descricao`, `data`, `data_cadastro`) VALUES
(3, 11, 27, 'A', 'dsa', '2018-06-19 00:00:00', '2018-06-09 11:40:59');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carros`
--

CREATE TABLE `carros` (
  `id` int(10) UNSIGNED NOT NULL,
  `marca` varchar(30) NOT NULL,
  `modelo` varchar(11) NOT NULL,
  `versao` varchar(30) DEFAULT NULL,
  `placa` varchar(11) NOT NULL,
  `ano` year(4) NOT NULL,
  `ano_modelo` year(4) NOT NULL,
  `tipo_combustivel` varchar(30) NOT NULL,
  `cor` varchar(30) DEFAULT NULL,
  `status` char(1) NOT NULL DEFAULT 'A',
  `data_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `carros`
--

INSERT INTO `carros` (`id`, `marca`, `modelo`, `versao`, `placa`, `ano`, `ano_modelo`, `tipo_combustivel`, `cor`, `status`, `data_cadastro`) VALUES
(26, '', '0', '', '', 0000, 0000, '', '', 'A', '2018-06-08 14:57:50'),
(27, 'Honda', 'Civic', 'Sport', 'HHG-4555', 2018, 2018, 'Flex', 'Preto', 'A', '2018-06-08 14:58:19'),
(28, 'Fiat', 'Palio', 'Celebretion', 'HFX-9932', 2007, 2007, 'Flex', 'Verde-Oliva', 'A', '2018-06-11 18:08:38');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carro_cliente`
--

CREATE TABLE `carro_cliente` (
  `id_carro` int(10) UNSIGNED NOT NULL,
  `id_cliente` int(10) UNSIGNED NOT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `carro_cliente`
--

INSERT INTO `carro_cliente` (`id_carro`, `id_cliente`, `data_cadastro`) VALUES
(27, 11, '2018-06-08 14:58:19'),
(28, 12, '2018-06-11 18:08:38');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(10) UNSIGNED NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `email` varchar(120) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `celular` varchar(30) NOT NULL,
  `cep` varchar(14) DEFAULT NULL,
  `endereco` varchar(60) DEFAULT NULL,
  `complemento` varchar(60) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `bairro` varchar(60) DEFAULT NULL,
  `cidade` varchar(60) NOT NULL,
  `estado` char(2) NOT NULL,
  `sexo` char(1) NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'A',
  `data_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `cpf`, `nome`, `login`, `senha`, `email`, `telefone`, `celular`, `cep`, `endereco`, `complemento`, `numero`, `bairro`, `cidade`, `estado`, `sexo`, `status`, `data_cadastro`) VALUES
(11, '87978978d7', 'Gabriel', 'ggarabini', '4546546', 'gabrie.garabinimg@gmail.com', '(31)3451-3779', '(31)99509-5412', '789', '789798', '7789', 789, '789', '789', 'FC', 'S', 'A', '2018-06-08 13:27:54'),
(12, '41564', 'Phablito', 'phenrique', '123213', 'phablo.henrique@humbertoabrao.com.br', '(31)6969-6969', '(31) 99696-9696', '', '', '', 0, '', '', '', '', 'A', '2018-06-08 13:36:46');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

CREATE TABLE `itens` (
  `id` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(120) NOT NULL,
  `valor` double NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`id`, `descricao`, `valor`, `status`) VALUES
(2, 'SUSPENSÃO', 221.25, 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_orcamento`
--

CREATE TABLE `itens_orcamento` (
  `id_item` int(11) UNSIGNED NOT NULL,
  `id_orcamento` int(10) UNSIGNED NOT NULL,
  `valor` double NOT NULL,
  `status` char(1) NOT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_osm`
--

CREATE TABLE `itens_osm` (
  `id_item` int(10) UNSIGNED NOT NULL,
  `id_osm` int(10) UNSIGNED NOT NULL,
  `valor` double NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'A',
  `data_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `lembretes`
--

CREATE TABLE `lembretes` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_usuarios` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(120) NOT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_lembrete` datetime NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `lembretes`
--

INSERT INTO `lembretes` (`id`, `id_usuarios`, `descricao`, `data_cadastro`, `data_lembrete`, `status`) VALUES
(1, 11, 'dasd', '2018-06-09 07:48:06', '2018-06-30 00:00:00', 'A'),
(2, 12, 'dsa', '2018-06-09 07:56:13', '2018-01-01 00:00:00', 'S'),
(3, 0, 'dsadsadasd', '2018-06-09 08:40:19', '2018-06-23 00:00:00', 'A'),
(4, 11, 'dsada23424', '2018-06-09 08:41:04', '2018-06-26 00:00:00', 'A'),
(5, 11, 'Teste teste', '2018-06-09 08:44:12', '2018-06-28 10:40:00', 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamento`
--

CREATE TABLE `orcamento` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_cliente` int(10) UNSIGNED NOT NULL,
  `id_carro` int(10) UNSIGNED NOT NULL,
  `id_agendamento` int(10) UNSIGNED DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `observacao` varchar(120) NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'A',
  `data_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `orcamento`
--

INSERT INTO `orcamento` (`id`, `id_cliente`, `id_carro`, `id_agendamento`, `valor`, `observacao`, `status`, `data_cadastro`) VALUES
(1, 11, 27, NULL, NULL, 'Teste', 'S', '2018-06-15 11:50:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `osm`
--

CREATE TABLE `osm` (
  `id` int(10) UNSIGNED NOT NULL,
  `serie` varchar(10) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `id_cliente` int(10) UNSIGNED NOT NULL,
  `id_carro` int(10) UNSIGNED NOT NULL,
  `id_orcamento` int(10) UNSIGNED DEFAULT NULL,
  `valor` double NOT NULL,
  `observacao` varchar(120) NOT NULL,
  `data` datetime NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'A',
  `data_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `osm`
--

INSERT INTO `osm` (`id`, `serie`, `numero`, `id_cliente`, `id_carro`, `id_orcamento`, `valor`, `observacao`, `data`, `status`, `data_cadastro`) VALUES
(1, '', '', 11, 27, NULL, 0, 'dsadsad', '0000-00-00 00:00:00', 'A', '2018-06-11 17:11:10'),
(2, '', '', 11, 27, NULL, 0, 'dsadsad', '0000-00-00 00:00:00', 'A', '2018-06-11 17:12:07'),
(3, '', '', 11, 27, NULL, 0, 'dsadsad', '0000-00-00 00:00:00', 'A', '2018-06-11 17:12:12'),
(4, '', '', 11, 27, NULL, 0, 'dsadsad', '0000-00-00 00:00:00', 'A', '2018-06-11 17:12:12'),
(5, '', '', 11, 27, NULL, 0, 'SDASD', '2018-06-29 10:50:00', 'A', '2018-06-11 17:13:50'),
(6, '', '', 11, 27, NULL, 0, 'Sdsvccxgret 43543', '0000-00-00 00:00:00', 'A', '2018-06-11 12:15:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `login` varchar(24) NOT NULL,
  `senha` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `celular` varchar(14) DEFAULT NULL,
  `status` char(1) NOT NULL DEFAULT 'A',
  `data_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `cpf`, `nome`, `login`, `senha`, `email`, `telefone`, `celular`, `status`, `data_cadastro`) VALUES
(1, '', '', '', '', '', '', '', '', '2018-06-08 13:39:22'),
(8, '3423423', 'dfsdf', 'fsdf', 'fdsfs', 'fdsfsd', 'fdsf', 'sdfsdf', '', '2018-06-08 13:47:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agm_cliente` (`id_cliente`),
  ADD KEY `agm_carro` (`id_carro`);

--
-- Indexes for table `carros`
--
ALTER TABLE `carros`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `placa` (`placa`);

--
-- Indexes for table `carro_cliente`
--
ALTER TABLE `carro_cliente`
  ADD PRIMARY KEY (`id_carro`,`id_cliente`),
  ADD KEY `car_cliente` (`id_cliente`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Indexes for table `itens`
--
ALTER TABLE `itens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itens_orcamento`
--
ALTER TABLE `itens_orcamento`
  ADD PRIMARY KEY (`id_item`,`id_orcamento`),
  ADD KEY `ior_orc` (`id_orcamento`);

--
-- Indexes for table `itens_osm`
--
ALTER TABLE `itens_osm`
  ADD PRIMARY KEY (`id_item`,`id_osm`),
  ADD KEY `ios_osm` (`id_osm`);

--
-- Indexes for table `lembretes`
--
ALTER TABLE `lembretes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orcamento`
--
ALTER TABLE `orcamento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orc_cliente` (`id_cliente`),
  ADD KEY `orc_carro` (`id_carro`),
  ADD KEY `orc_agendamento` (`id_agendamento`);

--
-- Indexes for table `osm`
--
ALTER TABLE `osm`
  ADD PRIMARY KEY (`id`,`serie`,`numero`),
  ADD KEY `osm_cliente` (`id_cliente`),
  ADD KEY `osm_carro` (`id_carro`),
  ADD KEY `osm_orcamento` (`id_orcamento`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agendamentos`
--
ALTER TABLE `agendamentos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carros`
--
ALTER TABLE `carros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `itens`
--
ALTER TABLE `itens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lembretes`
--
ALTER TABLE `lembretes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orcamento`
--
ALTER TABLE `orcamento`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `osm`
--
ALTER TABLE `osm`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD CONSTRAINT `agm_carro` FOREIGN KEY (`id_carro`) REFERENCES `carros` (`id`);

--
-- Limitadores para a tabela `carro_cliente`
--
ALTER TABLE `carro_cliente`
  ADD CONSTRAINT `car_carro` FOREIGN KEY (`id_carro`) REFERENCES `carros` (`id`),
  ADD CONSTRAINT `car_cli` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`);

--
-- Limitadores para a tabela `itens_orcamento`
--
ALTER TABLE `itens_orcamento`
  ADD CONSTRAINT `ior_itens` FOREIGN KEY (`id_item`) REFERENCES `itens` (`id`),
  ADD CONSTRAINT `ior_orc` FOREIGN KEY (`id_orcamento`) REFERENCES `orcamento` (`id`);

--
-- Limitadores para a tabela `itens_osm`
--
ALTER TABLE `itens_osm`
  ADD CONSTRAINT `ios_item` FOREIGN KEY (`id_item`) REFERENCES `itens` (`id`),
  ADD CONSTRAINT `ios_osm` FOREIGN KEY (`id_osm`) REFERENCES `osm` (`id`);

--
-- Limitadores para a tabela `orcamento`
--
ALTER TABLE `orcamento`
  ADD CONSTRAINT `orc_agendamento` FOREIGN KEY (`id_agendamento`) REFERENCES `agendamentos` (`id`),
  ADD CONSTRAINT `orc_carro` FOREIGN KEY (`id_carro`) REFERENCES `carros` (`id`),
  ADD CONSTRAINT `orc_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`);

--
-- Limitadores para a tabela `osm`
--
ALTER TABLE `osm`
  ADD CONSTRAINT `osm_carro` FOREIGN KEY (`id_carro`) REFERENCES `carros` (`id`),
  ADD CONSTRAINT `osm_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `osm_orcamento` FOREIGN KEY (`id_orcamento`) REFERENCES `orcamento` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
