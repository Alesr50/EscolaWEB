-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Jun-2023 às 15:12
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

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
  `idUsuario` int(11) DEFAULT NULL,
  `ativo` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tblalunos`
--

INSERT INTO `tblalunos` (`idAluno`, `NomeAluno`, `CpfAluno`, `IdadeAluno`, `idUsuario`, `ativo`) VALUES
(1, 'Pedro', 321231, 15, NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblmateria`
--

CREATE TABLE `tblmateria` (
  `idMateria` int(11) NOT NULL,
  `nome` varchar(155) NOT NULL,
  `ativo` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tblmateria`
--

INSERT INTO `tblmateria` (`idMateria`, `nome`, `ativo`) VALUES
(1, 'Teste', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblprofessor`
--

CREATE TABLE `tblprofessor` (
  `idProfessor` int(11) NOT NULL,
  `Rm` int(11) NOT NULL,
  `nome` varchar(155) NOT NULL,
  `idade` int(11) NOT NULL,
  `idMateria` int(11) NOT NULL,
  `ativo` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tblprofessor`
--

INSERT INTO `tblprofessor` (`idProfessor`, `Rm`, `nome`, `idade`, `idMateria`, `ativo`) VALUES
(1, 123, 'Alessandro', 35, 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblturma`
--

CREATE TABLE `tblturma` (
  `idTurma` int(11) NOT NULL,
  `nome` varchar(155) NOT NULL,
  `ativo` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tblturma`
--

INSERT INTO `tblturma` (`idTurma`, `nome`, `ativo`) VALUES
(1, 'Teste', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblusuario`
--

CREATE TABLE `tblusuario` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(20) NOT NULL,
  `loginUsuario` varchar(25) NOT NULL,
  `emailUsuario` varchar(20) NOT NULL,
  `senhaUsuario` varchar(20) NOT NULL,
  `ativo` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tblusuario`
--

INSERT INTO `tblusuario` (`idUsuario`, `nomeUsuario`, `loginUsuario`, `emailUsuario`, `senhaUsuario`, `ativo`) VALUES
(1, 'Alessandro', 'ale', 'ale.r50@gmail.com', 'ale123', 1);

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
-- Índices para tabela `tblmateria`
--
ALTER TABLE `tblmateria`
  ADD PRIMARY KEY (`idMateria`);

--
-- Índices para tabela `tblprofessor`
--
ALTER TABLE `tblprofessor`
  ADD PRIMARY KEY (`idProfessor`);

--
-- Índices para tabela `tblturma`
--
ALTER TABLE `tblturma`
  ADD PRIMARY KEY (`idTurma`);

--
-- Índices para tabela `tblusuario`
--
ALTER TABLE `tblusuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tblalunos`
--
ALTER TABLE `tblalunos`
  MODIFY `idAluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tblmateria`
--
ALTER TABLE `tblmateria`
  MODIFY `idMateria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tblprofessor`
--
ALTER TABLE `tblprofessor`
  MODIFY `idProfessor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tblturma`
--
ALTER TABLE `tblturma`
  MODIFY `idTurma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tblusuario`
--
ALTER TABLE `tblusuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tblalunos`
--
ALTER TABLE `tblalunos`
  ADD CONSTRAINT `tblalunos_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `tblusuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
