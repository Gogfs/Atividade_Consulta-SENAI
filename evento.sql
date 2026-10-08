-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/10/2026 às 13:05
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `evento`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `hackaton`
--

CREATE TABLE `hackaton` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Area_Interesse` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `hackaton`
--

INSERT INTO `hackaton` (`ID`, `Nome`, `Email`, `Area_Interesse`) VALUES
(2, 'Adamastor', 'a@a.com', 'Açúcar e Álcool'),
(3, 'Aviador Barata', 'aviador@barata.com', 'Metalurgia');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `hackaton`
--
ALTER TABLE `hackaton`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `hackaton`
--
ALTER TABLE `hackaton`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
