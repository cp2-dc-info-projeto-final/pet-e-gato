-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Out-2022 às 09:42
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
('Kauann da Silva', 'kauannmartiinez.contato@gmail.com', '$2y$10$sWT84cCo7YYZDwWch6NLG.E59VmhqrXxhoeBk3acmIQe0nqJKIRlS', '2005-01-05', 'Rua B', '000.123.400-45', '(21) 62656-5662', 'Petzinho', '3333-03-23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `matricula` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `data_nasc` varchar(10) NOT NULL,
  `ADM` char(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`matricula`, `nome`, `email`, `senha`, `data_nasc`, `ADM`) VALUES
(4, 'Kauan Martinez', 'kauannmartiinez.contato@gmail.com', '05012005', '2005-01-05', 'NAO');

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
('Banho e Tosa', 'O melhor banho para o seu PET!', 'R$60');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`matricula`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
