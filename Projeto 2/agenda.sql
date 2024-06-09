-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Jun-2024 às 01:31
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `Id` int(11) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Endereco` varchar(255) NOT NULL,
  `Cidade` varchar(255) NOT NULL,
  `Bairro` varchar(255) NOT NULL,
  `Estado` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Telefone` varchar(255) NOT NULL,
  `Celular` varchar(255) NOT NULL,
  `Cpf` varchar(255) NOT NULL,
  `Genero` varchar(255) NOT NULL,
  `Data_nascimento` varchar(255) NOT NULL,
  `Profissao` varchar(255) NOT NULL,
  `Nacionalidade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`Id`, `Nome`, `Endereco`, `Cidade`, `Bairro`, `Estado`, `Email`, `Telefone`, `Celular`, `Cpf`, `Genero`, `Data_nascimento`, `Profissao`, `Nacionalidade`) VALUES
(1, 'Thiago', 'Rua Pera', 'São Paulo', 'Penha', 'São Paulo', 'thiago@thiago.com.br', '11 20299897', '11987876565', '23456709812', 'Masculino', '2024-06-29', 'Analista', 'Brasileira'),
(2, 'Thiago', 'Rua Pera', 'São Paulo', 'Penha', 'São Paulo', 'thiago@thiago.com.br', '11 20299897', '11987876565', '23456709812', 'Masculino', '2024-06-28', 'Analista', 'Brasileira');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agenda`
--
ALTER TABLE `agenda`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
