-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 23-Out-2019 às 09:53
-- Versão do servidor: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fourchannel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estatisticas_filmes`
--

CREATE TABLE `estatisticas_filmes` (
  `filmes_idfilmes` int(11) NOT NULL,
  `usuarios_idusuario` int(11) NOT NULL,
  `assistido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estatisticas_series`
--

CREATE TABLE `estatisticas_series` (
  `serie_idserie` int(11) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `assistido` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes`
--

CREATE TABLE `filmes` (
  `idfilmes` int(11) NOT NULL,
  `id_filme` varchar(45) NOT NULL,
  `duracao` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `idpessoa` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `data_nascimento` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `sexo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `series`
--

CREATE TABLE `series` (
  `idserie` int(11) NOT NULL,
  `id_serie` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `temporadas`
--

CREATE TABLE `temporadas` (
  `series_idserie` int(11) NOT NULL,
  `serie_idserie` int(11) NOT NULL,
  `duracao` int(4) NOT NULL,
  `assistido` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `nome_usuario` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `pessoa_idpessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estatisticas_filmes`
--
ALTER TABLE `estatisticas_filmes`
  ADD PRIMARY KEY (`filmes_idfilmes`,`usuarios_idusuario`),
  ADD KEY `fk_filmes_has_usuarios_usuarios1_idx` (`usuarios_idusuario`),
  ADD KEY `fk_filmes_has_usuarios_filmes1_idx` (`filmes_idfilmes`);

--
-- Indexes for table `estatisticas_series`
--
ALTER TABLE `estatisticas_series`
  ADD PRIMARY KEY (`serie_idserie`,`usuario_idusuario`),
  ADD KEY `fk_serie_has_usuario_usuario1_idx` (`usuario_idusuario`),
  ADD KEY `fk_serie_has_usuario_serie1_idx` (`serie_idserie`);

--
-- Indexes for table `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`idfilmes`);

--
-- Indexes for table `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`idpessoa`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`idserie`);

--
-- Indexes for table `temporadas`
--
ALTER TABLE `temporadas`
  ADD KEY `fk_temporadas_series1_idx` (`series_idserie`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `fk_usuario_pessoa1_idx` (`pessoa_idpessoa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filmes`
--
ALTER TABLE `filmes`
  MODIFY `idfilmes` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `idpessoa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `idserie` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `estatisticas_filmes`
--
ALTER TABLE `estatisticas_filmes`
  ADD CONSTRAINT `fk_filmes_has_usuarios_filmes1` FOREIGN KEY (`filmes_idfilmes`) REFERENCES `filmes` (`idfilmes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_filmes_has_usuarios_usuarios1` FOREIGN KEY (`usuarios_idusuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `estatisticas_series`
--
ALTER TABLE `estatisticas_series`
  ADD CONSTRAINT `fk_serie_has_usuario_serie1` FOREIGN KEY (`serie_idserie`) REFERENCES `series` (`idserie`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_serie_has_usuario_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `temporadas`
--
ALTER TABLE `temporadas`
  ADD CONSTRAINT `fk_temporadas_series1` FOREIGN KEY (`series_idserie`) REFERENCES `series` (`idserie`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuario_pessoa1` FOREIGN KEY (`pessoa_idpessoa`) REFERENCES `pessoas` (`idpessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
