-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Jan-2023 às 23:10
-- Versão do servidor: 5.7.17
-- versão do PHP: 7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pet_e_gato`
--
CREATE DATABASE IF NOT EXISTS `pet_e_gato` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pet_e_gato`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `matricula` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(500) NOT NULL,
  `data_nasc` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`matricula`, `nome`, `email`, `senha`, `data_nasc`) VALUES
(1, 'Kauan Martinez', 'kauann.martiinez@gmail.com', '$2y$10$Tpa7zSnjUvN6R9KMSjtolu4TBSZp.AKZsPasQRYyUli0Q4CmPxiL.', '2005-01-05'),
(2, 'Joelma Calypso', 'Joelma@gmail.com', '$2y$10$Q8YiRnqgx.7zB/Pw30q7Ve2LbnIJRfvZ014MF5HVMX.aPCRawjwKG', '1980-06-17'),
(7, 'Carollyne Coelho do Nascimento', 'lololzinha225@gmail.com', '$2y$10$ndL2bbeLPgwj14JRn2R3mOfTFXUQSoBu79WlBCN2mbs29RKw5WXe.', '2005-02-25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `cod_agendamento` int(11) NOT NULL,
  `nome_cliente` varchar(50) DEFAULT NULL,
  `cod_cliente` int(11) DEFAULT NULL,
  `funcionario` varchar(50) NOT NULL,
  `cod_funcionario` int(11) NOT NULL,
  `servico` varchar(30) NOT NULL,
  `cod_servico` int(11) NOT NULL,
  `hora` varchar(10) NOT NULL,
  `dia` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agendamento`
--

INSERT INTO `agendamento` (`cod_agendamento`, `nome_cliente`, `cod_cliente`, `funcionario`, `cod_funcionario`, `servico`, `cod_servico`, `hora`, `dia`) VALUES
(24, 'Kauan Martinez dos Santos', 7, 'Kauan Martinez', 15, 'Banho e Tosa', 1, '12:00', '2023-02-06'),
(25, 'Kauan Martinez dos Santos', 7, 'Carollyne Coelho ', 14, 'Banho e Tosa', 1, '15:00', '2023-01-12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `matricula` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(250) NOT NULL,
  `data_nasc` varchar(10) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `nome_pet` varchar(30) NOT NULL,
  `nasc_pet` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`matricula`, `nome`, `email`, `senha`, `data_nasc`, `endereco`, `cpf`, `telefone`, `nome_pet`, `nasc_pet`) VALUES
(1, 'Kauan Martinez', 'kauann.martiinez@gmail.com', '05012005', '2005-01-05', 'Travessa Lins, 3 - Pavuna', '212.675.267-42', '(21) 97656-6504', 'Bolt CÃ£o', '2014-01-03'),
(2, 'Bianca Nascimento', 'biancanascimento@gmail.com', '12345', '2005-04-25', 'Rua B', '000.000.000-00', '(00) 00000-0000', 'Bolt', '2013-05-06'),
(3, 'Carollyne Coelho', 'carollynecoelho@gmail.com', '123456', '2005-03-06', 'Rua C', '123.456.789-0', '(21) 93658-7463', 'Bolt Super', '2014-05-06'),
(4, 'Leticia Caceres', 'leticiacaceres@gmail.com', '123456', '2005-02-06', 'Rua D', '012.345.678-9', '(21) 98765-4321', 'Caramelo', '2013-04-05'),
(5, 'Cliente Testee', 'cliente.teste.2@company.com', '$2y$10$baoP9wNpnfJ5LMy46se/S.Wy1y89ZEjenNUt3C1YAcVp7fUmCSQjy', '0001-01-01', 'Rua A', '000.000.000-02', '(00) 00000-0001', 'Caozinho', '0001-01-01'),
(6, 'Cliente Teste', 'cliente.teste.1@company.com', '', '0001-01-01', 'Rua A', '000.000.000-01', '(00) 00000-0001', 'Caozinho', '0001-01-01'),
(7, 'Kauan Martinez dos Santos', 'kauannmartiinez.contato@gmail.com', '$2y$10$sWT84cCo7YYZDwWch6NLG.E59VmhqrXxhoeBk3acmIQe0nqJKIRlS', '2005-01-05', 'Rua X', '346.244.041-14', '21978656659', 'CÃ£o 2', '2014-02-06'),
(8, 'Leticia Caceres', 'leticia.adm@petegato.com', '$2y$10$NUKFQTKFNAVYEMKhHJacNe1LjMwVhqAlPjE6bD21GOs0x0s1Fc6j6', '2005-03-02', 'Rua C', '000.001.234-56', '(00) 00000-0000', 'CÃ£o', '2014-06-03'),
(9, 'Larissa Ferreira', 'larissaferreira.1@petegato.com.br', '$2y$10$NGfemSe8Xzdvz1xJM6nKd..2HXqUWJ26lhX6SFp/LEa6geLSPk6mu', '2004-10-07', 'Rua B', '011.365.454-52', '(21) 02022-0222', 'Benjamin ', '2015-07-03'),
(10, 'Pedro Pedroca Nariz de Pipoca', 'pedropipoca.1@petegato.com', '$2y$10$9ZrGu2gY0aZWl0apq6yyHuzb99buDDm32GsPBaEveqZ6GWSzHhdDi', '2004-06-03', 'Rua D', '699.841.503-03', '(22) 65959-2625', 'Caramelo', '2015-02-03'),
(11, 'Carlos Eduardo ', 'Carlinhos@gmail.com', '$2y$10$R1CVw3nxTO0x7kotzaDDiufFccnmxy9N9bDIAI5r0lojIMsxJehDC', '1984-06-27', 'Rua Matadouros ', '345.678.901-23', '(21) 99999-9999', 'pipoca', '2022-12-06'),
(12, 'Carlinhos Maia', 'Maia@gmail.com', '$2y$10$q8zCx4G1ja6U4i1n/GJF5u3DiNwZjEC.CHFa.3jfdR.JUkhxduj/G', '1960-07-17', 'Rua Matadouros ', '679.094.563-21', '(21) 97645-3214', 'Fubá', '2022-12-01'),
(13, 'Carollyne Coelho do Nascimento', 'lololzinha225@gmail.com', '$2y$10$Lxjoef6/gMAVQLuCAUfBVOGjs5BoBPIarEVQO0cgWmyK6O.y77TAm', '2005-02-25', 'Rua C ', '123.456.789-23', '(21) 94002-8922', 'Spiker', '2019-09-01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `nome` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `mensagem` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`nome`, `email`, `telefone`, `mensagem`) VALUES
('Kauan Martinez', 'kauann.martiinez@gmail.com', '(21) 97656-6504', 'OlÃ¡, me chamo Kauan!\r\nAmei o site do Pet&GatÃ´ House.'),
('Leticia Caceres', 'leticiacaceres@gmail.com', '(21) 95656-2661', 'OlÃ¡, me chamo LetÃ­cia!\r\nAmei o site do Pet&GatÃ´ House.'),
('Bianca Nascimento', 'biancanascimento@gmail.com', '(21) 95562-2632', 'OlÃƒÂ¡, me chamo Bianca!\r\nAmei o site do Pet&GatÃƒÂ´ House.'),
('Larissa Ferreira', 'larissaferreira.1@petegato.com.br', '(21) 94545-1515', 'Olá, me chamo Larissa!\r\nAmei o site do Pet&Gatô House.'),
('Regiane Teixeira', 'regiane.teixeira@petegato.com', '(21) 95626-2626', 'Olá, me chamo Regiane!\r\nAmei o site do Pet&Gatô House.'),
('Pedro Moralles', 'pedro.moralles@petegato.com', '(21) 95562-6262', 'Olá, me chamo Pedro!\r\nAmei o site do Pet&Gatô House.					'),
('Fátima Bernardes', 'fatimasbernardes@petegato.com', '(21) 97899-4962', 'Olá, me chamo Fátima!\r\nAmei o site do Pet&Gatô House.					'),
('Ygor Canalli', 'ygorcanalli@petegato.com', '(21) 98584-9458', 'Olá, me chamo Ygor!\r\nAmei o site do Pet&Gatô House.'),
('Alayne Duarte', 'alayneduarte@petegato.com', '(21) 95562-6220', 'Olá, me chamo Alayne!\r\nAmei o site do Pet&Gatô House.'),
('Roberto Carlos', 'roertocarlos@petegato.com', '(21) 99895-2522', 'Olá, me chamo Roberto!\r\nAmei o site do Pet&Gatô House.'),
('Neymar Júnior', 'neymarjunior@petegato.com', '(21) 95625-0051', 'Olá, me chamo Neymar!\r\nAmei o site do Pet&Gatô House.'),
('Chris Flores', 'chrisflores@petegato.com', '(21) 95626-2623', 'Olá, me chamo Chris!\r\nAmei o site do Pet&Gatô House.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `matricula` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(500) NOT NULL,
  `data_nasc` varchar(10) NOT NULL,
  `especialidade` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`matricula`, `nome`, `email`, `senha`, `data_nasc`, `especialidade`) VALUES
(16, 'Leticia Carceres ', 'leticia@gmail.com', '$2y$10$PvgWW328s7ZzyDyQwaafRedOwcIKjIC63K0jmPNKNmUJAmcSGiWVi', '2004-02-25', 'Higiênica'),
(15, 'Kauan Martinez', 'kauan@gmail.com', '$2y$10$wgUpb63h7k6R/ikPj4pQgOer6QOZiVshx4bU5P9MY7mxMqSqQ1ROy', '2005-01-05', 'Corte de unha'),
(14, 'Carollyne Coelho ', 'lololzinha225@gmail.com', '$2y$10$7Ggvc2mXoSUplcnTZZUNRu/6EWPH1OPBYW0HUXhnfv0NmiHHTBRgm', '2005-02-25', 'Banho'),
(13, 'Solene Carvalho', 'sol@gmail.com', '$2y$10$bDLoeRmAkroXl5dRuZyjZ.ZFzxqB91SgHrEPAS65B2JpRt.FMUgce', '2004-07-16', 'Tosa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `cod_servico` int(11) NOT NULL,
  `servico` varchar(30) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `preco` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`cod_servico`, `servico`, `descricao`, `preco`) VALUES
(1, 'Banho e Tosa', 'O melhor banho para o seu PET!', 'R$60'),
(2, 'Teste de servico', 'Teste de serviÃ§o', '10'),
(3, 'Teste de servico', 'Teste de serviÃ§o', '10,00'),
(4, 'Teste de service', 'service test', 'R$ 010,00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`matricula`);

--
-- Índices para tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`cod_agendamento`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`matricula`);

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`matricula`);

--
-- Índices para tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`cod_servico`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `cod_agendamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `cod_servico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE USER 'administrador'@'localhost' IDENTIFIED BY '2122'; 
GRANT ALL PRIVILEGES ON pet_e_gato.* TO 'administrador'@'localhost';