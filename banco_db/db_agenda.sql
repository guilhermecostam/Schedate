-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: 13-Maio-2020 às 19:10
-- Versão do servidor: 5.6.34
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_agenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_agendas`
--

CREATE TABLE `tb_agendas` (
  `AGEN_CODIGO` int(11) NOT NULL,
  `AGEN_NOME` varchar(50) NOT NULL,
  `AGEN_USU_CODIGO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_eventos`
--

CREATE TABLE `tb_eventos` (
  `EVEN_CODIGO` int(11) NOT NULL,
  `EVEN_TITULO` varchar(50) NOT NULL,
  `EVE_DESCRICAO` varchar(50) NOT NULL,
  `EVEN_DATAIN` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `EVEN_DATAFIN` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `EVEN_AGEN_CODIGO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `USU_CODIGO` int(11) NOT NULL,
  `USU_NOME` varchar(50) NOT NULL,
  `USU_EMAIL` varchar(16) NOT NULL,
  `USU_SENHA` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`USU_CODIGO`, `USU_NOME`, `USU_EMAIL`, `USU_SENHA`) VALUES
(1, 'guiga', 'guiga@cu.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_agendas`
--
ALTER TABLE `tb_agendas`
  ADD PRIMARY KEY (`AGEN_CODIGO`);

--
-- Indexes for table `tb_eventos`
--
ALTER TABLE `tb_eventos`
  ADD PRIMARY KEY (`EVEN_CODIGO`);

--
-- Indexes for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`USU_CODIGO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_agendas`
--
ALTER TABLE `tb_agendas`
  MODIFY `AGEN_CODIGO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_eventos`
--
ALTER TABLE `tb_eventos`
  MODIFY `EVEN_CODIGO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `USU_CODIGO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
