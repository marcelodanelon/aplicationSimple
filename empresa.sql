-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Mar-2023 às 01:39
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
-- Banco de dados: `empresa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `numero` int(5) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` int(11) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`cpf`, `nome`, `rua`, `numero`, `bairro`, `cidade`, `estado`, `email`, `telefone`, `senha`, `foto`) VALUES
('2147483647', 'Marcelo Danelon', 'Joana Dollo', 252, 'Terra', 'SBO', 'SP', 'teste@gmail.com', 1998000, '123456', ''),
('2147483647', 'Marcelo Danelon', 'Joana Dollo', 262, 'Terra', 'Sumare', 'SP', 'teste@gmail.com', 1998000, '159', ''),
('2147483647', 'dasd', 'Joana Dollo', 26, 'Terra', 'SBO', 'SP', 'teste@gmail.com', 1998000, '123', ''),
('44031248873', 'Marcelo Danelon', 'Joana Dollo', 161, 'Terra', 'SBO', 'SP', 'teste@gmail.com', 1998000, '123', ''),
('44031248872', 'Marcelo Danelon', 'Joana Dollo', 25, 'Terra', 'SBO', '', 'teste@gmail.com', 1998000, '06409663226af2f3114485aa4e0a23b4', ''),
('44031248871', 'Marcelo Danelon', 'Joana Dollo', 65, 'Terra', 'SBO', '', 'teste@gmail.com', 1998000, '202cb962ac59075b964b07152d234b70', ''),
('44031248870', 'Marcelo Danelon', 'Joana Dollo', 25, 'Terra', 'SBO', '', 'teste@gmail.com', 1998000, '1ce927f875864094e3906a4a0b5ece68', ''),
('1', 'carlos', '', 0, '', '', '', '', 0, 'd41d8cd98f00b204e9800998ecf8427e', ''),
('2', 'Marta', '', 0, '', '', '', '', 0, 'd41d8cd98f00b204e9800998ecf8427e', ''),
('3', 'Guto', '', 0, '', '', 'AC', '', 0, 'd41d8cd98f00b204e9800998ecf8427e', ''),
('1', 'Ze', '', 0, '', '', '', '', 0, 'd41d8cd98f00b204e9800998ecf8427e', ''),
('4', 'TESTE', '', 0, '', '', 'PB', '', 0, 'd41d8cd98f00b204e9800998ecf8427e', ''),
('55', 'TESTE TESTE', '', 0, '', '', '', '', 0, 'd41d8cd98f00b204e9800998ecf8427e', '1678754307.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preco_compra` decimal(10,2) NOT NULL,
  `preco_venda` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `categoria`, `quantidade`, `preco_compra`, `preco_venda`) VALUES
(1, 'Produto A', 'Computador', 10, '12.00', '55.00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
