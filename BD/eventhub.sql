-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Out-2024 às 22:24
-- Versão do servidor: 8.0.29
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `eventhub`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `idEvento` int NOT NULL,
  `fotoEvento` varchar(50) NOT NULL,
  `tituloEvento` varchar(50) NOT NULL,
  `descricaoEvento` varchar(150) NOT NULL,
  `categoriaEvento` varchar(50) NOT NULL,
  `dataEvento` date NOT NULL,
  `horaEvento` time NOT NULL,
  `duracaoEvento` time NOT NULL,
  `enderecoEvento` varchar(50) NOT NULL,
  `cidadeEvento` varchar(50) NOT NULL,
  `proprietarioEvento` varchar(50) NOT NULL,
  `emailEvento` varchar(50) NOT NULL,
  `telefoneEvento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`idEvento`, `fotoEvento`, `tituloEvento`, `descricaoEvento`, `categoriaEvento`, `dataEvento`, `horaEvento`, `duracaoEvento`, `enderecoEvento`, `cidadeEvento`, `proprietarioEvento`, `emailEvento`, `telefoneEvento`) VALUES
(3, 'img/eventhublogo.png', 'Teste', 'aaaa', 'eletronicos', '2025-12-02', '23:00:00', '03:00:00', 'aaaaaaaaaaa', 'telemaco', 'bbbbbbbbbb', 'ccccccccccc@gmail.com', '42777238'),
(4, 'img/corrida.jpg', 'Corrida São José', 'Corrida Matinal', 'vestuario', '2024-03-24', '08:00:00', '02:00:00', 'Avenida paraná', 'telemaco', 'Amanda oliveira', 'amaanda.ago@gmail.com', '42988636704'),
(5, 'img/moda.jpg', 'ONDM - O negócio da moda', 'Desfile de moda com roupas multiculturais', 'vestuario', '2024-11-10', '20:00:00', '02:30:00', 'Rua Primero de Maio - 102', 'telemaco', 'Amanda oliveira', 'amaanda.ago@gmail.com', '42988636704'),
(6, 'img/empreendedorismo.jpeg', 'Feira do Empreendedor', 'Uma rede de eventos para o seu negócio', 'vestuario', '2024-01-11', '13:30:00', '02:30:00', 'Rodovia dos Imigrantes - 115', 'telemaco', 'Amanda oliveira', 'amaanda.ago@gmail.com', '42988636704');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int NOT NULL,
  `nomeUsuario` varchar(50) NOT NULL,
  `sobrenomeUsuario` varchar(50) NOT NULL,
  `generoUsuario` varchar(50) NOT NULL,
  `enderecoUsuario` varchar(50) NOT NULL,
  `cidadeUsuario` varchar(50) NOT NULL,
  `numeroEnderecoUsuario` varchar(50) NOT NULL,
  `cepUsuario` varchar(50) NOT NULL,
  `complementoUsuario` varchar(50) NOT NULL,
  `emailUsuario` varchar(50) NOT NULL,
  `senhaUsuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`idEvento`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `idEvento` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
