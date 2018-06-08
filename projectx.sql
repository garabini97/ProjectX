-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Jun-2018 às 15:27
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.2.5

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
  `descricao` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `carros`
--

CREATE TABLE `carros` (
  `id` int(10) UNSIGNED NOT NULL,
  `marca` varchar(30) NOT NULL,
  `modelo` int(11) NOT NULL,
  `versao` varchar(30) DEFAULT NULL,
  `placa` int(11) NOT NULL,
  `ano` year(4) NOT NULL,
  `ano_modelo` year(4) NOT NULL,
  `tipo_combustivel` varchar(30) NOT NULL,
  `cor` varchar(30) DEFAULT NULL,
  `status` char(1) NOT NULL DEFAULT 'A',
  `data_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `carro_cliente`
--

CREATE TABLE `carro_cliente` (
  `id_carro` int(10) UNSIGNED NOT NULL,
  `id_cliente` int(10) UNSIGNED NOT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

CREATE TABLE `itens` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_categoria` int(10) UNSIGNED NOT NULL,
  `marca` varchar(120) NOT NULL,
  `modelo` varchar(120) NOT NULL,
  `descricao` varchar(120) NOT NULL,
  `valor` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `status` char(1) NOT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carros`
--
ALTER TABLE `carros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `itens`
--
ALTER TABLE `itens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lembretes`
--
ALTER TABLE `lembretes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orcamento`
--
ALTER TABLE `orcamento`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `osm`
--
ALTER TABLE `osm`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD CONSTRAINT `agm_carro` FOREIGN KEY (`id_carro`) REFERENCES `carros` (`id`),
  ADD CONSTRAINT `agm_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`);

--
-- Limitadores para a tabela `carro_cliente`
--
ALTER TABLE `carro_cliente`
  ADD CONSTRAINT `car_carro` FOREIGN KEY (`id_carro`) REFERENCES `carros` (`id`),
  ADD CONSTRAINT `car_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`);

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
