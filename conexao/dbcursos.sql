-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Ago-2023 às 21:57
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbcursos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblalunos`
--

CREATE TABLE `tblalunos` (
  `idAluno` int(11) NOT NULL,
  `NomeAluno` varchar(100) NOT NULL,
  `CpfAluno` int(11) NOT NULL,
  `IdadeAluno` int(11) NOT NULL,
  `cepAluno` int(11) NOT NULL,
  `lograAluno` varchar(150) NOT NULL,
  `numAluno` int(11) NOT NULL,
  `cidadeAluno` varchar(150) NOT NULL,
  `ufAluno` varchar(2) NOT NULL,
  `bairroAluno` varchar(100) DEFAULT NULL,
  `complAluno` varchar(150) NOT NULL,
  `idTurma` int(11) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `ativo` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblalunos`
--

INSERT INTO `tblalunos` (`idAluno`, `NomeAluno`, `CpfAluno`, `IdadeAluno`, `cepAluno`, `lograAluno`, `numAluno`, `cidadeAluno`, `ufAluno`, `bairroAluno`, `complAluno`, `idTurma`, `idUsuario`, `ativo`) VALUES
(1, 'Pedro', 321231, 15, 0, '', 0, '', '', '', '', 1, NULL, 1),
(2, 'Matheus', 2123126878, 18, 16503020, 'Rua Ali', 3, 'Cafelândia', 'SP', 'Pena', '', 1, NULL, 1),
(3, 'Enzo', 2147483647, 15, 16500324, 'Rua Ivo Manoel Lacava', 3, 'Cafelândia', 'SP', 'Parque Solar Assumpção', '', 1, NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblturmas`
--

CREATE TABLE `tblturmas` (
  `idTurma` int(11) NOT NULL,
  `nomeTurma` varchar(150) NOT NULL,
  `anoTurma` int(11) NOT NULL,
  `ativo` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblturmas`
--

INSERT INTO `tblturmas` (`idTurma`, `nomeTurma`, `anoTurma`, `ativo`) VALUES
(1, 'Mtec em Ds', 2023, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tblalunos`
--
ALTER TABLE `tblalunos`
  ADD PRIMARY KEY (`idAluno`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `tblturmas`
--
ALTER TABLE `tblturmas`
  ADD PRIMARY KEY (`idTurma`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tblalunos`
--
ALTER TABLE `tblalunos`
  MODIFY `idAluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tblturmas`
--
ALTER TABLE `tblturmas`
  MODIFY `idTurma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
