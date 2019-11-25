-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Nov-2019 às 16:55
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro_user`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrouses`
--

CREATE TABLE `carrouses` (
  `id` int(11) NOT NULL,
  `imagen_carousel` varchar(220) NOT NULL,
  `nome` varchar(220) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `carrouses`
--

INSERT INTO `carrouses` (`id`, `imagen_carousel`, `nome`) VALUES
(1, 'slide1.jpg', 'Curso um'),
(2, 'slide1.jpg', 'Curso dois'),
(3, 'slide1.jpg', 'Artigo um'),
(4, 'slide1.jpg', 'Artigo dois');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imoveis`
--

CREATE TABLE `imoveis` (
  `id` int(11) NOT NULL,
  `nome_do_vendedor` varchar(50) DEFAULT NULL,
  `bairro` varchar(20) DEFAULT NULL,
  `rua` varchar(20) DEFAULT NULL,
  `publicação` datetime DEFAULT NULL,
  `imagem` varchar(30) DEFAULT NULL,
  `categoria` varchar(17) DEFAULT NULL,
  `tipo_de_anuncio` varchar(10) DEFAULT NULL,
  `valor` varchar(10) DEFAULT NULL,
  `descricao` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imoveis`
--

INSERT INTO `imoveis` (`id`, `nome_do_vendedor`, `bairro`, `rua`, `publicação`, `imagem`, `categoria`, `tipo_de_anuncio`, `valor`, `descricao`) VALUES
(11, 'Raimundo', 'ChÃ¡cara cachoeira', 'judas', NULL, 'casa (1).jpg', 'Casa', 'Venda', '600.000,00', 'uma bela casa para viver com a familia'),
(12, 'luisa pereira', 'rouxinois', 'dolores duran', NULL, 'casa (2).jpg', 'Casa', 'Aluguel', '900,00', 'uma casa pra alugar no bairro rouxinois'),
(13, 'renato', 'Chacara das monÃ§Ãµe', 'tatuape', NULL, 'casa (3).jpg', 'Chacara', 'Venda', '200.000,00', 'uma chÃ¡cara a venda'),
(14, 'Itamar', 'Itamaraca', 'levonada', NULL, 'casa (4).jpg', 'SalÃ£o', 'Aluguel', '400,00', 'um salao em bom estado e bem localizado'),
(15, 'Rogerio', 'Indubrasil', 'ratos', NULL, 'casa (5).jpg', 'Fazenda', 'Venda', '1.000.000,', 'vende-se'),
(16, 'Lucas', 'Aero rancho', 'lurdinha', NULL, 'casa (6).jpg', 'SalÃ£o', 'Venda', '100.000,00', 'vende-se este salao com um ponto bem localizado para cabeleleiro'),
(17, 'Cimara', 'Radialista', 'ribeirao', NULL, 'casa (7).jpg', 'Casa', 'Venda', '500.000,00', 'casa chique'),
(18, 'Neide', 'tarumam', 'londonopolis', NULL, 'casa (8).jpg', 'Casa', 'Aluguel', '200,00', '.'),
(19, 'Cristiano', 'Rita vieira', 'mardulencia', NULL, 'casa (9).jpg', 'Casa', 'Venda', '150.000,00', 'casa'),
(20, 'Mirna', 'chÃ¡cara cachueira', 'lurdinha', NULL, 'casa (10).jpg', 'Casa', 'Venda', '1.000.000,', 'casa chique'),
(21, 'Lucimara', 'Damas', 'ruizada', NULL, 'casa (11).jpg', 'Casa', 'Venda', '2.000.000,', 'Ã© no damas fera'),
(22, 'Cloves', 'Nha nha', 'revestro', NULL, 'casa (12).jpg', 'Casa', 'Aluguel', '900,00', 'aceito cartao'),
(23, 'Ingrid', 'Centro-oeste', 'parana', NULL, 'fundo.jpg', 'Casa', 'Aluguel', '400,00', 'casa da ingrid'),
(25, 'Pedro', 'Taruman', 'Velado', NULL, 'casa.jpg', 'Casa', 'Venda', '300.000,00', 'dawadawdawd'),
(26, '', 'Japiim', 'Beco Dolores Duram', NULL, 'casa (5).jpg', 'Casa', 'Venda', '23.456.789', ''),
(27, '', 'Jardim ColibrÃ­', 'Rua da ArmaÃ§Ã£o', NULL, 'casa.jpg', 'Terreno', 'Aluguel', '800,00', 'casa do deivid');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome` varchar(40) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `cpf` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `email`, `senha`, `telefone`, `cpf`) VALUES
('Testando123', 'text324@gmail.com', '1234', 0, '11223456789'),
('Regerson', 'regerson@gmail.com', '1234', 123987897, '12123432345'),
('Grudeiza', 'grud@gmail.com', '123456', 123432321, '12342343243'),
('pedro', 'pedro@gmail.com', '1234', 888888888, '1234342345'),
('wpodqwpd', 'wqdqwd@gmail.com', '1234', 123456789, '123456'),
('renato', 'renato@gmail.com', '1234', 999999999, '1234567890'),
('Roger', 'roger@gmail.com', '1234', 123456789, '12345678909'),
('preto', 'preto@gmail.com', '1234', 12345, '214234324'),
('text3', 'text3@gmail.com', '1234', 909090909, '2147483647'),
('wwtw', 'ewrewr@gmail.com', '123124332432', 12332532, '234324324'),
('jhgf', 'dfgh@gmail.bg', '23456ytrd', 2147483647, '23456787656'),
('woeiei', 'asdasd@gmail.com', '123434', 543456789, '23456788765'),
('jhgfdg', 'rtyu@fghjk.ck', 'ytre45', 23456787, '2345678909'),
('pedor', 'peoo@gmail.com', '1234', 2147483647, '23890429348'),
('jhgfdf', 'wertyu@thgg.com', '23454', 2147483647, '545678765'),
('ASDF', 'sdfg@rtyu.com', '234567', 2147483647, '567876567'),
('duda', 'pedro123@gmail.com', '1234', 123456789, '5678969'),
('werwer', 'iojioj@gmail.com', '123342jnk', 2147483647, '90809890890');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carrouses`
--
ALTER TABLE `carrouses`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `imoveis`
--
ALTER TABLE `imoveis`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de tabela `carrouses`
--
ALTER TABLE `carrouses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `imoveis`
--
ALTER TABLE `imoveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
