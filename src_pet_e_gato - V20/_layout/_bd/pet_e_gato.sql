-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Dez-2022 às 14:55
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet_e_gato`
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
(2, 'Joelma Calypso', 'Joelma@gmail.com', '$2y$10$Q8YiRnqgx.7zB/Pw30q7Ve2LbnIJRfvZ014MF5HVMX.aPCRawjwKG', '1980-06-17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `cod_agendamento` int(11) NOT NULL,
  `cpf` varchar(30) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `servico` varchar(30) NOT NULL,
  `hora` varchar(10) NOT NULL,
  `dia` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agendamento`
--

INSERT INTO `agendamento` (`cod_agendamento`, `cpf`, `nome`, `email`, `servico`, `hora`, `dia`) VALUES
(1, '123.456.789-10', 'Bianca Eiras', 'nbianca240@gmail.com', 'Banho e Tosa', '17:30', '2022-12-20'),
(2, '123.456.789-10', 'Bianca Eiras', 'nbianca240@gmail.com', 'Banho e Tosa', '17:30', '2022-12-20'),
(3, '123.456.789-10', 'Bianca Eiras', 'nbianca240@gmail.com', 'Banho e Tosa', '17:30', '2022-12-20'),
(4, '123.456.789-10', 'Bianca Eiras', 'nbianca240@gmail.com', 'Banho e Tosa', '17:30', '2022-12-20'),
(5, '123.456.789-10', 'Bianca Eiras', 'nbianca240@gmail.com', 'Banho', '17:30', '2022-12-20'),
(6, '123.456.789-10', 'Bianca Eiras', 'nbianca240@gmail.com', 'Banho', '17:30', '2022-12-20'),
(7, '000.123.400-45', 'Kauann da Silva', 'kauannmartiinez.contato@gmail.com', 'Banho com higiênica', '12:00', '2022-12-26'),
(8, '000.123.400-45', 'Kauann da Silva', 'kauannmartiinez.contato@gmail.com', 'Banho com higiênica', '12:00', '2022-12-26'),
(9, '000.123.400-45', 'Kauann da Silva', 'kauannmartiinez.contato@gmail.com', 'Clubinho', '19:35', '2022-12-19'),
(10, '000.123.400-45', 'Kauann da Silva', 'kauannmartiinez.contato@gmail.com', 'Clubinho', '19:35', '2022-12-19'),
(11, '000.123.400-45', 'Kauann da Silva', 'kauannmartiinez.contato@gmail.com', 'Clubinho', '19:37', '2022-12-27'),
(12, '000.123.400-45', 'Kauann da Silva', 'kauannmartiinez.contato@gmail.com', 'Clubinho', '19:37', '2022-12-27'),
(13, '000.123.400-45', 'Kauann da Silva', 'kauannmartiinez.contato@gmail.com', 'Corte de unha', '18:45', '2023-01-12'),
(14, '000.123.400-45', 'Kauann da Silva', 'kauannmartiinez.contato@gmail.com', 'Corte de unha', '18:45', '2023-01-12'),
(15, '000.123.400-45', 'Kauann da Silva', 'kauannmartiinez.contato@gmail.com', 'Corte de unha', '17:47', '2022-12-27'),
(16, '000.123.400-45', 'Kauann da Silva', 'kauannmartiinez.contato@gmail.com', 'Corte de unha', '17:47', '2022-12-27'),
(17, '000.123.400-45', 'Kauann da Silva', 'kauannmartiinez.contato@gmail.com', 'Banho e Tosa', '17:56', '2022-12-12'),
(18, '000.123.400-45', 'Kauann da Silva', 'kauannmartiinez.contato@gmail.com', 'Banho e Tosa', '17:56', '2022-12-12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
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

INSERT INTO `cliente` (`nome`, `email`, `senha`, `data_nasc`, `endereco`, `cpf`, `telefone`, `nome_pet`, `nasc_pet`) VALUES
('Kauan Martinez', 'kauann.martiinez@gmail.com', '05012005', '2005-01-05', 'Travessa Lins, 3 - Pavuna', '212.675.267-42', '(21) 97656-6504', 'Bolt CÃ£o', '2014-01-03'),
('Bianca Nascimento', 'biancanascimento@gmail.com', '12345', '2005-04-25', 'Rua B', '000.000.000-00', '(00) 00000-0000', 'Bolt', '2013-05-06'),
('Carollyne Coelho', 'carollynecoelho@gmail.com', '123456', '2005-03-06', 'Rua C', '123.456.789-0', '(21) 93658-7463', 'Bolt Super', '2014-05-06'),
('Leticia Caceres', 'leticiacaceres@gmail.com', '123456', '2005-02-06', 'Rua D', '012.345.678-9', '(21) 98765-4321', 'Caramelo', '2013-04-05'),
('Cliente Testee', 'cliente.teste.2@company.com', '$2y$10$baoP9wNpnfJ5LMy46se/S.Wy1y89ZEjenNUt3C1YAcVp7fUmCSQjy', '0001-01-01', 'Rua A', '000.000.000-02', '(00) 00000-0001', 'Caozinho', '0001-01-01'),
('Cliente Teste', 'cliente.teste.1@company.com', '', '0001-01-01', 'Rua A', '000.000.000-01', '(00) 00000-0001', 'Caozinho', '0001-01-01'),
('Kauann da Silva', 'kauannmartiinez.contato@gmail.com', '$2y$10$sWT84cCo7YYZDwWch6NLG.E59VmhqrXxhoeBk3acmIQe0nqJKIRlS', '2005-01-05', 'Rua B', '000.123.400-45', '(21) 62656-5662', 'Petzinho', '3333-03-23'),
('Leticia Caceres', 'leticia.adm@petegato.com', '$2y$10$NUKFQTKFNAVYEMKhHJacNe1LjMwVhqAlPjE6bD21GOs0x0s1Fc6j6', '2005-03-02', 'Rua C', '000.001.234-56', '(00) 00000-0000', 'CÃ£o', '2014-06-03'),
('Larissa Ferreira', 'larissaferreira.1@petegato.com.br', '$2y$10$NGfemSe8Xzdvz1xJM6nKd..2HXqUWJ26lhX6SFp/LEa6geLSPk6mu', '2004-10-07', 'Rua B', '011.365.454-52', '(21) 02022-0222', 'Benjamin ', '2015-07-03'),
('Pedro Pedroca Nariz de Pipoca', 'pedropipoca.1@petegato.com', '$2y$10$9ZrGu2gY0aZWl0apq6yyHuzb99buDDm32GsPBaEveqZ6GWSzHhdDi', '2004-06-03', 'Rua D', '699.841.503-03', '(22) 65959-2625', 'Caramelo', '2015-02-03'),
('Carlos Eduardo ', 'Carlinhos@gmail.com', '$2y$10$R1CVw3nxTO0x7kotzaDDiufFccnmxy9N9bDIAI5r0lojIMsxJehDC', '1984-06-27', 'Rua Matadouros ', '345.678.901-23', '(21) 99999-9999', 'pipoca', '2022-12-06'),
('Carlinhos Maia', 'Maia@gmail.com', '$2y$10$q8zCx4G1ja6U4i1n/GJF5u3DiNwZjEC.CHFa.3jfdR.JUkhxduj/G', '1960-07-17', 'Rua Matadouros ', '679.094.563-21', '(21) 97645-3214', 'Fubá', '2022-12-01');

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
  `data_nasc` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`matricula`, `nome`, `email`, `senha`, `data_nasc`) VALUES
(4, 'Kauan Martinez', 'kauannmartiinez.contato@gmail.com', '05012005', '2005-01-05'),
(8, 'Carollyne Coelho', 'carollynecoelho.1@company.com', '$2y$10$oZlui2/n6teEg80G7dcSquXmWBzPbAVtWRq.I61bjUoVV7BKEROVm', '2005-03-06'),
(9, 'Leticia Caceres', 'leticiacaceres.1@company.com', '$2y$10$19o1i2uZRtQLzxUYLo5geeIMdzfQafVSJrtMC1zOQFI/CYPfmfo12', '2004-08-07'),
(10, 'Fernanda Carla', 'fernanda@gmail.com', '$2y$10$Kx7AMZOO.AFeteXYwjY4jeWplP6WrZiESWnoDvJq6l9XspaJIToOm', '1990-12-06'),
(11, 'Fernanda Carla', 'fernanda@gmail.com', '$2y$10$szcncfrC0z3nVdekWTDbaO3Guu7s4Z3/p3fBdwhnMoWKI2omYGWoa', '1990-12-06'),
(12, 'Enzo Teixeira ', 'enzinho@gmail.com', '$2y$10$lqE9a.juvlfVOYKPJnMxGuWICQ89OfYl8F1w0SZV4E/svVwuESKOq', '1995-03-17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `servico` varchar(30) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `preco` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`servico`, `descricao`, `preco`) VALUES
('Banho e Tosa', 'O melhor banho para o seu PET!', 'R$60'),
('Teste de servico', 'Teste de serviÃ§o', '10'),
('Teste de servico', 'Teste de serviÃ§o', '10,00'),
('Teste de service', 'service test', 'R$ 010,00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`matricula`);

--
-- Indexes for table `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`cod_agendamento`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`matricula`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `cod_agendamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
