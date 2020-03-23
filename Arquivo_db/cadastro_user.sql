-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Mar-2020 às 00:43
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
(47, 'Cadastrp t', 'Universitário', 'Rua Itacuruçá', '99', '(79) 9 8796-7879', '1584389442.jpg', 'Casa - Comercial', 'Venda', '7.987.098,', '', 'leo@gmail.com');

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
('Yasmin', 'yasmn20@gmail.com', '1234', '(67) 9 9999-29', '12345678902'),
('Roger', 'roger@gmail.com', '1234', '123456789', '12345678909'),
('Pedro Henrique Gregorio', 'qwjoijod@gmail.com', '1235', '(11) 9 1111-11', '13213211323'),
('Pedro Henrique Gregorio', 'kljkl@gmail.com', '12345', '(23) 9 4567-68', '13231231313'),
('qwdqwd', 'qwd@gmail.com', '1211', '0', '21332133123'),
('preto', 'preto@gmail.com', '1234', '12345', '214234324'),
('text3', 'text3@gmail.com', '1234', '909090909', '2147483647'),
('Gregorio', 'leo@gmail.com', '1234', '(34) 9 2743-28', '23123213121'),
('wwtw', 'ewrewr@gmail.com', '123124332432', '12332532', '234324324'),
('jhgf', 'dfgh@gmail.bg', '23456ytrd', '2147483647', '23456787656'),
('woeiei', 'asdasd@gmail.com', '123434', '543456789', '23456788765'),
('jhgfdg', 'rtyu@fghjk.ck', 'ytre45', '23456787', '2345678909'),
('pedor', 'peoo@gmail.com', '1234', '2147483647', '23890429348'),
('pedro', 'plkmn@gmail.com', '1234', '0', '5434534534'),
('jhgfdf', 'wertyu@thgg.com', '23454', '2147483647', '545678765'),
('ASDF', 'sdfg@rtyu.com', '234567', '2147483647', '567876567'),
('duda', 'pedro123@gmail.com', '1234', '123456789', '5678969'),
('werwer', 'iojioj@gmail.com', '123342jnk', '2147483647', '90809890890'),
('pepror', 'mca@gmail.com', '1234', '(67) 9 0922-83', '99902104134');

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
  MODIFY `id_imovel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

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
