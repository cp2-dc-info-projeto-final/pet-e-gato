-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Jan-2023 às 06:44
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
(1, 'Pet&Gatô House', 'petegatooficial1@gmail.com', '$2y$10$fXpm8oZn1vJVHvPlYvEgJuQVrmkjYfs1wr42cwjAYOeM.bjm65Y9q', '2000-01-15'),
(2, 'Kauan Martinez da Silva', 'kauannmartiinez.contato@gmail.com', '$2y$10$gtM26lYNc1rOunEwy7lLiOty/R.nILcWzISDIIZaFzp04X6bx2nde', '2005-01-05');

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
  `dia` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agendamento`
--

INSERT INTO `agendamento` (`cod_agendamento`, `nome_cliente`, `cod_cliente`, `funcionario`, `cod_funcionario`, `servico`, `cod_servico`, `hora`, `dia`) VALUES
(1, NULL, NULL, 'Kauan Martinez', 1, 'Banho (Básico)', 1, '14:00', '2023-02-05'),
(2, NULL, NULL, 'Kauan Martinez', 1, 'Banho (Básico)', 1, '12:30', '2023-02-20'),
(3, NULL, NULL, 'Kauan Martinez', 1, 'Banho (Básico)', 1, '17:00', '2023-02-08'),
(4, NULL, NULL, 'Kauan Martinez', 1, 'Tosa (Básico)', 2, '16:00', '2023-02-03'),
(5, NULL, NULL, 'Kauan Martinez', 1, 'Tosa (Básico)', 2, '12:00', '2023-02-01'),
(6, NULL, NULL, 'Kauan Martinez', 1, 'Tosa (Básico)', 2, '14:30', '2023-02-19'),
(7, NULL, NULL, 'Bianca do Nascimento', 2, 'Banho e tosa', 3, '12:00', '2023-02-03'),
(8, NULL, NULL, 'Bianca do Nascimento', 2, 'Banho e tosa', 3, '15:00', '2023-02-14'),
(9, NULL, NULL, 'Bianca do Nascimento', 2, 'Banho e tosa', 3, '17:00', '2023-02-16'),
(10, NULL, NULL, 'Carollyne Coelho', 3, 'Corte de Unha', 4, '13:30', '2023-02-25'),
(11, NULL, NULL, 'Carollyne Coelho', 3, 'Corte de Unha', 4, '16:00', '2023-02-23'),
(12, NULL, NULL, 'Bianca do Nascimento', 2, 'Higiênica (Básico)', 5, '16:00', '2023-03-15'),
(13, NULL, NULL, 'Bianca do Nascimento', 2, 'Higiênica (Básico)', 5, '17:00', '2023-02-16'),
(14, NULL, NULL, 'Bianca do Nascimento', 2, 'Higiênica (Básico)', 5, '12:30', '2023-02-06'),
(15, NULL, NULL, 'Leticia Cáceres', 4, 'Banho com Higiênica', 6, '12:00', '2023-02-02'),
(16, NULL, NULL, 'Leticia Cáceres', 4, 'Banho com Higiênica', 6, '14:50', '2023-02-15'),
(17, NULL, NULL, 'Leticia Cáceres', 4, 'Banho com Higiênica', 6, '17:00', '2023-02-13'),
(18, NULL, NULL, 'Kauan Martinez', 1, 'Clubinho (Básico)', 7, '15:00', '2023-02-03'),
(19, NULL, NULL, 'Bianca do Nascimento', 2, 'Clubinho (Básico)', 7, '17:00', '2023-02-13'),
(20, NULL, NULL, 'Carollyne Coelho', 3, 'Clubinho (Básico)', 7, '16:30', '2023-02-13'),
(21, NULL, NULL, 'Leticia Cáceres', 4, 'Clubinho (Básico)', 7, '13:00', '2023-02-13'),
(22, NULL, NULL, 'Kauan Martinez', 1, 'Clubinho (Básico)', 7, '17:30', '2023-02-13'),
(23, NULL, NULL, 'Bianca do Nascimento', 2, 'Clubinho (Básico)', 7, '15:00', '2023-03-15'),
(24, NULL, NULL, 'Carollyne Coelho', 3, 'Clubinho (Básico)', 7, '14:30', '2023-03-19'),
(25, NULL, NULL, 'Leticia Cáceres', 4, 'Clubinho (Básico)', 7, '16:00', '2023-03-19'),
(26, NULL, NULL, 'Kauan Martinez', 1, 'Clubinho (Básico)', 7, '16:30', '2023-03-25'),
(27, NULL, NULL, 'Bianca do Nascimento', 2, 'Clubinho (Básico)', 7, '17:30', '2023-03-26'),
(28, NULL, NULL, 'Carollyne Coelho', 3, 'Clubinho (Básico)', 7, '12:30', '2023-03-29'),
(29, NULL, NULL, 'Leticia Cáceres', 4, 'Clubinho (Básico)', 7, '14:00', '2023-03-30'),
(30, NULL, NULL, 'Kauan Martinez', 1, 'Clubinho (Plus)', 8, '12:00', '2023-02-08'),
(31, NULL, NULL, 'Kauan Martinez', 1, 'Clubinho (Plus)', 8, '13:00', '2023-03-01'),
(32, NULL, NULL, 'Bianca do Nascimento', 2, 'Clubinho (Plus)', 8, '16:00', '2023-03-06'),
(33, NULL, NULL, 'Carollyne Coelho', 3, 'Clubinho (Plus)', 8, '15:00', '2023-03-10'),
(34, NULL, NULL, 'Leticia Cáceres', 4, 'Clubinho (Plus)', 8, '14:00', '2023-03-15');

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
(1, 'Kauan Martinez da Silva', 'kauannmartiinez.contato@gmail.com', '$2y$10$m6dB4FuRiPPJqXdGjHkSPeLP20e3u3X0Q5XjYi6/qhs9Hby9sMRpy', '2005-01-05', 'Rua D', '236.591.202-51', '(21) 86325-7744', 'Bolt', '2020-06-03'),
(2, 'Larissa Ferreira', 'larissaferreirabarbosa31@gmail.com', '$2y$10$JNvFNSIX6gE3BX.q4LBX..uv9ltc2HY0VtxfUS0/0zZ469/wBzAYu', '2004-10-07', 'Rua B', '012.345.678-90', '(21) 98565-2520', 'Bolt', '2014-05-20'),
(3, 'Pedro Rodrigues Moralles', 'pedrorodriguesmoralles@gmail.com', '$2y$10$MUQO7ltnRWPuQV5Kg9pOgOjkHc4zNkKJFZr1sFGsi1YE4IoCCoaTK', '2004-08-25', 'Rua M', '123.560.214-58', '(21) 96563-0288', 'Caramelo', '2016-03-15'),
(4, 'Regiane Teixeira', 'regianeteixeira@gmail.com', '$2y$10$wiuR10.oWw9sYY/.RIUwb.tPiCWzzNYSSNcze24EZoUseiirYt/oC', '2004-02-06', 'Rua B', '123.456.987-50', '(21) 96325-8741', 'Guduco', '2019-06-03');

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
('Carollyne Coelho', 'lololzinha225@gmail.com', '(21) 98547-5257', 'Mensagem teste!'),
('Kauan Martinez', 'kauannmartiinez.contato@gmail.com', '(21) 86325-7744', 'Mensagem teste!'),
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
  `cpf` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(500) NOT NULL,
  `data_nasc` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`matricula`, `nome`, `cpf`, `email`, `senha`, `data_nasc`) VALUES
(1, 'Kauan Martinez', '123.456.789-1', 'kauannmartiinez.contato@gmail.com', '$2y$10$e1vGU9zuuFRtUEx6OcbR/.62uyPKbHgxOTmh5hs2fuWqxtsfiegIq', '2005-01-05'),
(2, 'Bianca do Nascimento', '012.345.678-90', 'nbianca240@gmail.com', '$2y$10$7uB9oziiUVcleQjoo5y7qewiBP5Oze511Jc/3XZthiygxf1/3wIHm', '2005-01-02'),
(3, 'Carollyne Coelho', '987.654.321-00', 'lololzinha225@gmail.com', '$2y$10$oU1eHlvpdt64gjf9xWy4M.o9MYQVTSPW2e52EnVGsgatHEMUp5WsW', '2005-02-25'),
(4, 'Leticia Cáceres', '001.234.567-80', 'leticiacaceresrosas@gmail.com', '$2y$10$/3FGjWRJjxab1ug6Yqq.euo/p2i933k5Nbc0N/IpB9yNrfW9Wpgsy', '2004-01-25');

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
(1, 'Banho (Básico)', 'Para deixar seu pet sempre cheiroso e bonito.', 'R$ 040,00'),
(2, 'Tosa (Básico)', 'Para deixar seu pet sempre na régua.', 'R$ 060,00'),
(3, 'Banho e tosa', 'Combinação para um pet cheiroso e bonitão.', 'R$ 080,00'),
(4, 'Corte de Unha', 'Uma incrivel pedicure no seu pet.', 'R$ 030,00'),
(5, 'Higiênica (Básico)', 'Um serviço de higiene completa para o seu pet.', 'R$ 020,00'),
(6, 'Banho com Higiênica', 'A combinação para um pet cheiroso e higienizado.', 'R$ 060,00'),
(7, 'Clubinho (Básico)', 'Um pacote mensal para o seu pet com tudo que ele tem direito.', 'R$ 180,00'),
(8, 'Clubinho (Plus)', 'Um pacote mensal para o seu pet com transporte incluso.', 'R$ 220,00');

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
  MODIFY `matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `cod_agendamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `cod_servico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE USER 'administrador'@'localhost' IDENTIFIED BY '2122'; 
GRANT ALL PRIVILEGES ON pet_e_gato.* TO 'administrador'@'localhost';