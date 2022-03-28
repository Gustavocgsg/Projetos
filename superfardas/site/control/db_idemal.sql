-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21-Jan-2016 às 14:38
-- Versão do servidor: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_idemal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `subtitulo` varchar(100) NOT NULL,
  `resumo` varchar(150) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `especificacao` varchar(150) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `legenda` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `tipo`, `titulo`, `subtitulo`, `resumo`, `descricao`, `especificacao`, `foto`, `legenda`) VALUES
(1, 'palete', 'IDE 01', 'Texto introdutório', 'Texto curto !', 'Texto longo !', 'Dados com informações técnicas', 'img_ide_01.png', 'Foto de IDE 01'),
(2, 'palete', 'IDE 02', 'Texto introdutório', 'Texto curto !', 'Texto longo !', 'Dados com informações técnicas', 'img_ide_02.png', 'Foto de IDE 02'),
(3, 'palete', 'IDE 03', 'Texto introdutório', 'Texto curto !', 'Texto longo !', 'Dados com informações técnicas', 'img_ide_03.png', 'Foto de IDE 03'),
(4, 'palete', 'IDE 04', 'Texto introdutório', 'Texto curto !', 'Texto longo !', 'Dados com informações técnicas', 'img_ide_04.png', 'Foto de IDE 04'),
(5, 'palete', 'IDE 05', 'Texto introdutório', 'Texto curto !', 'Texto longo !', 'Dados com informações técnicas', 'img_ide_05.png', 'Foto de IDE 05'),
(6, 'palete', 'IDE 06', 'Texto introdutório', 'Texto curto !', 'Texto longo !', 'Dados com informações técnicas', 'img_ide_06.png', 'Foto de IDE 06'),
(7, 'palete', 'IDE 07', 'Texto introdutório', 'Texto curto !', 'Texto longo !', 'Dados com informações técnicas', 'img_ide_07.png', 'Foto de IDE 07'),
(8, 'palete', 'IDE 08', 'Texto introdutório', 'Texto curto !', 'Texto longo !', 'Dados com informações técnicas', 'img_ide_08.png', 'Foto de IDE 08'),
(9, 'palete', 'IDE 09', 'Texto introdutório', 'Texto curto !', 'Texto longo !', 'Dados com informações técnicas', 'img_ide_09.png', 'Foto de IDE 09'),
(10, 'palete', 'IDE 10', 'Texto introdutório', 'Texto curto !', 'Texto longo !', 'Dados com informações técnicas', 'img_ide_10.png', 'Foto de IDE 10'),
(11, 'palete', 'IDE 11', 'Texto introdutório', 'Texto curto !', 'Texto longo !', 'Dados com informações técnicas', 'img_ide_11.png', 'Foto de IDE 11'),
(12, 'palete', 'IDE 12', 'Texto introdutório', 'Texto curto !', 'Texto longo !', 'Dados com informações técnicas', 'img_ide_12.png', 'Foto de IDE 12'),
(13, 'palete', 'IDE 13', 'Texto introdutório', 'Texto curto !', 'Texto longo !', 'Dados com informações técnicas', 'img_ide_13.png', 'Foto de IDE 13'),
(14, 'palete', 'IDE 14', 'Texto introdutório', 'Texto curto !', 'Texto longo !', 'Dados com informações técnicas', 'img_ide_14.png', 'Foto de IDE 14'),
(15, 'caixa', 'CAIXA 02', 'Texto introdutório', 'Texto curto !', 'Texto longo !', 'Dados com informações técnicas', 'img_caixa_01.png', 'Foto de CAIXA 01'),
(16, 'caixa', 'CAIXA 02', 'Texto introdutório', 'Texto curto !', 'Texto longo !', 'Dados com informações técnicas', 'img_caixa_02.png', 'Foto de CAIXA 02'),
(17, 'caixa', 'CAIXA 03', 'Texto introdutório', 'Texto curto !', 'Texto longo !', 'Dados com informações técnicas', 'img_caixa_03.png', 'Foto de CAIXA 03'),
(18, 'caixa', 'CAIXA 04', 'Texto introdutório', 'Texto curto !', 'Texto longo !', 'Dados com informações técnicas', 'img_caixa_04.png', 'Foto de CAIXA 04'),
(19, 'parafuso', 'PARAFUSO 01', 'Texto introdutório', 'Texto curto !', 'Texto longo !', 'Dados com informações técnicas', 'img_parafuso_01.png', 'Foto de parafuso 01'),
(20, 'especial', 'ESPECIAL 01', 'Texto introdutório', 'Texto curto !', 'Texto longo !', 'Dados com informações técnicas', 'img_especial_01.png', 'Foto de especial 01'),
(21, 'especial', 'ESPECIAL 02', 'Texto introdutório', 'Texto curto !', 'Texto longo !', 'Dados com informações técnicas', 'img_especial_02.png', 'Foto de especial 02'),
(22, 'especial', 'ESPECIAL 03', 'Texto introdutório', 'Texto curto !', 'Texto longo !', 'Dados com informações técnicas', 'img_especial_03.png', 'Foto de especial 03'),
(23, 'especial', 'ESPECIAL 04', 'Texto introdutório', 'Texto curto !', 'Texto longo !', 'Dados com informações técnicas', 'img_especial_04.png', 'Foto de especial 04'),
(24, 'especial', 'ESPECIAL 05', 'Texto introdutório', 'Texto curto !', 'Texto longo !', 'Dados com informações técnicas', 'img_especial_05.png', 'Foto de especial 05'),
(25, 'especial', 'ESPECIAL 06', 'Texto introdutório', 'Texto curto !', 'Texto longo !', 'Dados com informações técnicas', 'img_especial_06.png', 'Foto de especial 06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
