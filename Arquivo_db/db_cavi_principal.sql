-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Jul-2020 às 05:33
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_cavi_principal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `imoveis`
--

CREATE TABLE `imoveis` (
  `id_imovel` int(11) NOT NULL,
  `nome_do_vendedor` varchar(50) DEFAULT NULL,
  `bairro` varchar(20) DEFAULT NULL,
  `rua` varchar(50) DEFAULT NULL,
  `numero` varchar(6) DEFAULT NULL,
  `telefone` varchar(16) DEFAULT NULL,
  `imagem` varchar(30) DEFAULT NULL,
  `categoria` varchar(22) DEFAULT NULL,
  `tipo_de_anuncio` varchar(10) DEFAULT NULL,
  `valor` varchar(10) DEFAULT NULL,
  `descricao` varchar(250) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imoveis`
--

INSERT INTO `imoveis` (`id_imovel`, `nome_do_vendedor`, `bairro`, `rua`, `numero`, `telefone`, `imagem`, `categoria`, `tipo_de_anuncio`, `valor`, `descricao`, `email`) VALUES
(47, 'Cadastrp t', 'Universitário', 'Rua Itacuruçá', '99', '(79) 9 8796-7879', '1584389442.jpg', 'Casa - Comercial', 'Venda', '7.987.098', '', 'leo@gmail.com'),
(48, 'Pedro Henrique ', 'Conjunto Residencial', 'Rua Rabadia Jabour', '29', '(67) 9 9999-9999', '1592060517.jpg', 'Casa', 'Aluguel', '600,00', 'Aluga-se esta casa por R$600. ', 'renato@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `cpf` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `email`, `senha`, `telefone`, `cpf`) VALUES
('renato', 'renato@gmail.com', '1234', '999999999', '1234567890');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `imoveis`
--
ALTER TABLE `imoveis`
  ADD PRIMARY KEY (`id_imovel`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cpf`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `imoveis`
--
ALTER TABLE `imoveis`
  MODIFY `id_imovel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
