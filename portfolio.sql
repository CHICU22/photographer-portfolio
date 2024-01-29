-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Tempo de geração: 21-Jan-2022 às 22:02
-- Versão do servidor: 5.7.34
-- versão do PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `portfolio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE `imagens` (
  `id` int(11) NOT NULL,
  `animals` varchar(128) NOT NULL,
  `buildings` varchar(128) NOT NULL,
  `people` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `imagens`
--

INSERT INTO `imagens` (`id`, `animals`, `buildings`, `people`) VALUES
(1, 'animals-1', 'buildings-1', 'people-1'),
(2, 'animals-2', 'buildings-2', 'people-2'),
(3, 'animals-3', 'buildings-3', 'people-3'),
(4, 'animals-4', 'buildings-4', 'people-4'),
(5, 'animals-5', 'buildings-5', 'people-5'),
(6, 'animals-6', 'buildings-6', 'people-6'),
(7, 'animals-7', 'buildings-7', 'people-7'),
(8, 'animals-8', 'buildings-8', 'people-8'),
(9, 'animals-9', 'buildings-9', 'people-9');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
