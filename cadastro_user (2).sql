-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Dez-2019 às 19:02
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadastro_user`
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
  `id_imovel` int(11) NOT NULL,
  `nome_do_vendedor` varchar(50) DEFAULT NULL,
  `bairro` varchar(20) DEFAULT NULL,
  `rua` varchar(50) DEFAULT NULL,
  `numero` varchar(6) DEFAULT NULL,
  `telefone` varchar(16) DEFAULT NULL,
  `imagem` varchar(30) DEFAULT NULL,
  `categoria` varchar(17) DEFAULT NULL,
  `tipo_de_anuncio` varchar(10) DEFAULT NULL,
  `valor` varchar(10) DEFAULT NULL,
  `descricao` varchar(250) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imoveis`
--

INSERT INTO `imoveis` (`id_imovel`, `nome_do_vendedor`, `bairro`, `rua`, `numero`, `telefone`, `imagem`, `categoria`, `tipo_de_anuncio`, `valor`, `descricao`, `email`) VALUES
(11, 'Raimundo', 'ChÃ¡cara cachoeira', 'judas', '21', NULL, 'casa (1).jpg', 'Casa', 'Venda', '600.000,00', 'uma bela casa para viver com a familia', 'renato@gmail.com'),
(13, 'renato', 'Jardim ItamaracÃ¡', 'Rua Naor Lemes Barbosa', '48', NULL, 'Desert.jpg', 'Casa', 'Venda', '200.000,00', 'cjgkxgclcgjc dz  xh stfh zxcfh xfcgh', 'renato@gmail.com'),
(14, 'Itamar', 'Itamaraca', 'levonada', '5', NULL, 'casa (4).jpg', 'SalÃ£o', 'Aluguel', '400,00', 'um salao em bom estado e bem localizado', 'renato@gmail.com'),
(15, 'Rogerio', 'Indubrasil', 'ratos', '75', NULL, 'casa (5).jpg', 'Fazenda', 'Venda', '1.000.000,', 'vende-se', 'renato@gmail.com'),
(16, 'Lucas', 'Jardim ItamaracÃ¡', 'Rua Naor Lemes Barbosa', '4', NULL, 'Chrysanthemum.jpg', 'Casa', 'Venda', '100.000,00', 'bmncvbmvm  cdh', 'renato@gmail.com'),
(17, 'Cimara', 'Radialista', 'ribeirao', '44', NULL, 'casa (7).jpg', 'Casa', 'Venda', '500.000,00', 'casa chique', 'renato@gmail.com'),
(18, 'Neide', 'tarumam', 'londonopolis', '55', NULL, 'casa (8).jpg', 'Casa', 'Aluguel', '200,00', '.', 'renato@gmail.com'),
(19, 'Cristiano', 'Rita vieira', 'mardulencia', '863', NULL, 'casa (9).jpg', 'Casa', 'Venda', '150.000,00', 'casa', 'renato@gmail.com'),
(20, 'Mirna', 'chÃ¡cara cachueira', 'lurdinha', '74', NULL, 'casa (10).jpg', 'Casa', 'Venda', '1.000.000,', 'casa chique', 'renato@gmail.com'),
(21, 'Lucimara', 'Damas', 'ruizada', '35', NULL, 'casa (11).jpg', 'Casa', 'Venda', '2.000.000,', 'Ã© no damas fera', 'renato@gmail.com'),
(22, 'Cloves', 'Nha nha', 'revestro', '125', NULL, 'casa (12).jpg', 'Casa', 'Aluguel', '900,00', 'aceito cartao', 'renato@gmail.com'),
(23, 'Ingrid', 'Centro-oeste', 'parana', '52', NULL, 'fundo.jpg', 'Casa', 'Aluguel', '400,00', 'casa da ingrid', 'renato@gmail.com'),
(26, '', 'Japiim', 'Beco Dolores Duram', '6', NULL, 'casa (5).jpg', 'Casa', 'Venda', '23.456.789', '', 'renato@gmail.com'),
(33, 'dqwdqwdwqd', 'Jardim ItamaracÃ¡', 'Rua Naor Lemes Barbo', '98', NULL, 'Desert.jpg', 'Casa', 'Venda', '4.553.535,', '', 'renato@gmail.com'),
(34, 'Ã§jksfkjb', 'Jardim ItamaracÃ¡', 'Rua Naor Lemes Barbosa', '334', NULL, 'Lighthouse.jpg', 'Casa', 'Venda', '4.553.535,', 'DFGSDFGSDFGS', 'renato@gmail.com'),
(35, 'Pedro Henrique Gregorio', 'Jardim ItamaracÃ¡', 'Rua Naor Lemes Barbo', '34', NULL, 'CAVI.jpg', 'Apartamento', 'Venda', '242.424,44', 'casa de texte parara a venda', 'renato@gmail.com'),
(36, '', 'Jardim ItamaracÃ¡', 'Rua Naor Lemes Barbosa', '4', NULL, 'Chrysanthemum.jpg', 'Casa', 'Venda', '434,33', '', 'regerson@gmail.com'),
(37, 'Pedro Henrique Gregorio', 'Jardim ItamaracÃ¡', 'Rua Naor Lemes Barbosa', '45', NULL, 'Hydrangeas.jpg', 'Casa', 'Venda', '2.454.544,', 'rtadfhzcv drg hsxdf gxd xdfdfv x fgh fcg hzxfg ', 'regerson@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `texte`
--

CREATE TABLE `texte` (
  `id_imovel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('Testando123', 'text324@gmail.com', '1234', '0', '11223456789'),
('Regerson', 'regerson@gmail.com', '1234', '123987897', '12123432345'),
('qqw', 'qw@gmail.com', '1234', '(22) 9 3334-45', '12312311321'),
('Grudeiza', 'grud@gmail.com', '123456', '123432321', '12342343243'),
('pedro', 'pedro@gmail.com', '1234', '888888888', '1234342345'),
('dqwdqwdwqd', 'qdwqwdqwdqwdqwdqwd@gmail.com', '1234', '(12) 9 3456-78', '12345456677'),
('wpodqwpd', 'wqdqwd@gmail.com', '1234', '123456789', '123456'),
('renato', 'renato@gmail.com', '1234', '999999999', '1234567890'),
('Roger', 'roger@gmail.com', '1234', '123456789', '12345678909'),
('Pedro Henrique Gregorio', 'qwjoijod@gmail.com', '1235', '(11) 9 1111-11', '13213211323'),
('Pedro Henrique Gregorio', 'kljkl@gmail.com', '12345', '(23) 9 4567-68', '13231231313'),
('qwdqwd', 'qwd@gmail.com', '1211', '0', '21332133123'),
('preto', 'preto@gmail.com', '1234', '12345', '214234324'),
('text3', 'text3@gmail.com', '1234', '909090909', '2147483647'),
('wwtw', 'ewrewr@gmail.com', '123124332432', '12332532', '234324324'),
('jhgf', 'dfgh@gmail.bg', '23456ytrd', '2147483647', '23456787656'),
('woeiei', 'asdasd@gmail.com', '123434', '543456789', '23456788765'),
('jhgfdg', 'rtyu@fghjk.ck', 'ytre45', '23456787', '2345678909'),
('pedor', 'peoo@gmail.com', '1234', '2147483647', '23890429348'),
('pedro', 'plkmn@gmail.com', '1234', '0', '5434534534'),
('jhgfdf', 'wertyu@thgg.com', '23454', '2147483647', '545678765'),
('ASDF', 'sdfg@rtyu.com', '234567', '2147483647', '567876567'),
('duda', 'pedro123@gmail.com', '1234', '123456789', '5678969'),
('werwer', 'iojioj@gmail.com', '123342jnk', '2147483647', '90809890890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrouses`
--
ALTER TABLE `carrouses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imoveis`
--
ALTER TABLE `imoveis`
  ADD PRIMARY KEY (`id_imovel`);

--
-- Indexes for table `texte`
--
ALTER TABLE `texte`
  ADD KEY `id_imovel` (`id_imovel`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cpf`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrouses`
--
ALTER TABLE `carrouses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `imoveis`
--
ALTER TABLE `imoveis`
  MODIFY `id_imovel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `texte`
--
ALTER TABLE `texte`
  ADD CONSTRAINT `id_imovel` FOREIGN KEY (`id_imovel`) REFERENCES `imoveis` (`id_imovel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
