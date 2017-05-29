-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27-Maio-2017 às 16:17
-- Versão do servidor: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `controle_de_estudo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `matricula` int(15) NOT NULL,
  `idDisciplina` int(15) NOT NULL,
  `nomeDisciplina` varchar(50) NOT NULL,
  `nomeProfessor` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`matricula`, `idDisciplina`, `nomeDisciplina`, `nomeProfessor`) VALUES
(1610015077, 1, 'Programação Dinâmica para Web', 'Daniel Brandão'),
(1610015077, 2, 'Análise e Projeto de Sistemas', 'Ricardo'),
(1610015077, 3, 'Metodologia e Linguagem de Programação Avançada', 'Alisson'),
(1610015077, 5, 'Gerenciamento de Projetos', 'Demingos'),
(1610015077, 6, 'Tecnologia de Acesso a Dados na Internet', 'Fujioka'),
(1610015077, 7, 'Introdução a Redes de Computadores', 'Bruno');

-- --------------------------------------------------------

--
-- Estrutura da tabela `notas`
--

CREATE TABLE `notas` (
  `matricula` int(15) NOT NULL,
  `idDisciplina` int(15) NOT NULL,
  `nota1` double DEFAULT NULL,
  `nota2` double DEFAULT NULL,
  `nota3` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `notas`
--

INSERT INTO `notas` (`matricula`, `idDisciplina`, `nota1`, `nota2`, `nota3`) VALUES
(1610015077, 1, 9.22, 8, NULL),
(1610015077, 2, 7.5, 8, NULL),
(1610015077, 3, 9.5, 8, NULL),
(1610015077, 5, 8.4, 10, NULL),
(1610015077, 7, 7, 10, NULL),
(1610015077, 6, 10, 7.5, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `numfaltas`
--

CREATE TABLE `numfaltas` (
  `matricula` int(15) NOT NULL,
  `idDisciplina` int(15) NOT NULL,
  `falta1` int(3) DEFAULT '0',
  `falta2` int(3) DEFAULT '0',
  `falta3` int(3) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `numfaltas`
--

INSERT INTO `numfaltas` (`matricula`, `idDisciplina`, `falta1`, `falta2`, `falta3`) VALUES
(1610015077, 1, 0, 0, 0),
(1610015077, 2, 0, 0, 0),
(1610015077, 3, 0, 0, 0),
(1610015077, 5, 0, 0, 0),
(1610015077, 7, 0, 0, 0),
(1610015077, 6, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `matricula` int(15) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `senha` varchar(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`matricula`, `nome`, `senha`) VALUES
(1610015077, 'Christian Cardoso', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`matricula`,`idDisciplina`);

--
-- Indexes for table `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`matricula`,`idDisciplina`),
  ADD KEY `idDisciplina` (`idDisciplina`);

--
-- Indexes for table `numfaltas`
--
ALTER TABLE `numfaltas`
  ADD PRIMARY KEY (`matricula`,`idDisciplina`),
  ADD KEY `idDisciplina` (`idDisciplina`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`matricula`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disciplinas`
--
ALTER TABLE `disciplinas`
  MODIFY `idDisciplina` int(15) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
