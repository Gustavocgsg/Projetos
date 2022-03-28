-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09-Abr-2016 às 00:11
-- Versão do servidor: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idemal`
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
  `resumo` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `especificacao` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `legenda` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `tipo`, `titulo`, `subtitulo`, `resumo`, `descricao`, `especificacao`, `foto`, `legenda`) VALUES
(1, 'palete', 'IDE 01', 'Produto produzido em madeira.', 'Muito utilizada para o uso de empilhadeira, e por carros hidráulicos.', 'O IDE 01, tem duas entradas, com aba lateral para içamento por cabos, e uso com empilhadeira ou carros hidráulicos.', 'Possui, cinco laminas de madeira, na parte superior, sustentadas por três longarinas reforçadas para melhor fixação, amaradas a duas laminas de suporte na parte inferior do mesmo. ', 'img_ide_01.png', 'Foto de IDE 01'),
(2, 'palete', 'IDE 02', 'Produto produzido em madeira.', 'Modelo com dupla face, muito utilizada para o uso de empilhadeira, e por carros hidráulicos.', 'O IDE 02, tem duas entradas, com dupla face reversível e aba lateral para içamento por cabos, e uso com empilhadeira ou carros hidráulicos.', 'Possui, sete laminas de madeira, na parte superior e sete na inferior, tornado-a dupla face, sustentadas por três longarinas reforçadas para melhor fixação.', 'img_ide_02.png', 'Foto de IDE 02'),
(3, 'palete', 'IDE 03', 'Produto produzido em madeira.', 'Modelo com dupla face e quatro longarinas, utilizada para o uso de empilhadeiras.', 'O IDE 03, tem duas entradas, com dupla face reversível e quatro longarinas, com aba lateral para içamento por cabos, e uso com empilhadeiras.', 'Possui, sete laminas de madeira, na parte superior e sete na inferior, tornado-a dupla face, sustentadas por quatro longarinas reforçadas para melhor fixação.', 'img_ide_03.png', 'Foto de IDE 03'),
(4, 'palete', 'IDE 04', 'Produto produzido em madeira.', 'Modelo com seis laminas de madeira, sustentadas por três longarinas em corte, utilizada para o uso de empilhadeiras e carros hidráulicos.', 'O IDE 04, tem quatro entradas, e longarinas em corte, com aba lateral para içamento por cabos, e uso com empilhadeiras.', 'Possui, seis laminas de madeira, na parte superior, sustentadas por três longarinas em corte para melhor fixação.', 'img_ide_04.png', 'Foto de IDE 04'),
(5, 'palete', 'IDE 05', 'Produto produzido em madeira.', 'Modelo com sete laminas de madeira, sustentadas por três longarinas reforçadas, utilizada para o uso de empilhadeiras e carros hidráulicos.', 'O IDE 05, tem duas entradas, e sustentadas por três longarinas reforçadas, com aba lateral para içamento por cabos, e uso com empilhadeiras.', 'Possui, sete laminas de madeira, na parte superior, sustentadas por três longarinas reforçadas para melhor fixação, amaradas a duas laminas de suporte na parte inferior do mesmo.', 'img_ide_05.png', 'Foto de IDE 05'),
(6, 'palete', 'IDE 06', 'Produto produzido em madeira.', 'Modelo com dupla face, montada com sete laminas de madeira na parte superior e sete na inferior, com montagem inversa, sustentadas por uma longarina central reforçada, e quatro blocos de base, utilizada para o uso de empilhadeiras e carros hidráulicos.', 'O IDE 06, tem quatro entradas, com dupla face reversível ideal para uso com empilhadeira.', 'Possui, sete laminas de madeira, na parte superior e sete na inferior, tornado-a dupla face, com montagem inversa, sustentadas por uma longarina central reforçada, com quatro blocos de base para melhor fixação.', 'img_ide_06.png', 'Foto de IDE 06'),
(7, 'palete', 'IDE 07', 'Produto produzido em madeira.', 'Modelo com dupla face, montada com sete laminas de madeira na parte superior e sete na inferior, sustentadas por três longarinas reforçadas, utilizada para o uso de empilhadeiras e carros hidráulicos, com calço.', 'O IDE 07, tem duas entradas, com dupla face reversível ideal para uso com empilhadeira.', 'Possui sete laminas de madeira na parte superior e sete na inferior, sustentadas por três longarinas reforçadas, utilizada para o uso de empilhadeiras e carros hidráulicos, com calço.', 'img_ide_07.png', 'Foto de IDE 07'),
(8, 'palete', 'IDE 08', 'Produto produzido em madeira.', 'Modelo com sete laminas de madeira na parte superior e três na inferior, sustentadas por três longarinas reforçadas, utilizada para o uso de empilhadeiras e carros hidráulicos.', 'O IDE 08, tem duas entradas, e com sete laminas na parte superior e três na inferior, sustentadas por três longarinas reforçadas.', 'Possui sete laminas de madeira na parte superior e sete na inferior, sustentadas por três longarinas reforçadas, utilizada para o uso de empilhadeiras e carros hidráulicos, com calço.', 'img_ide_08.png', 'Foto de IDE 08'),
(9, 'palete', 'IDE 09', 'Produto produzido em madeira.', 'Modelo com oito laminas de madeira na parte superior sem vão de entrada entre as peças, sustentadas por três longarinas reforçadas, utilizada para o uso de empilhadeiras e carros hidráulicos.', 'O IDE 09, tem duas entradas, e com oito laminas na parte superior sem vão de entrada entre as peças, sustentadas por três longarinas reforçadas, com três laminas auxiliares na parte inferior da peça.', 'Possui oito laminas na parte superior sem vão de entrada entre as peças, sustentadas por três longarinas reforçadas, com três laminas auxiliares na parte inferior da peça.', 'img_ide_09.png', 'Foto de IDE 09'),
(10, 'palete', 'IDE 10', 'Produto produzido em madeira.', 'Modelo com cinco laminas de madeira na parte superior com vão de entrada entre as peças, sustentadas por seis blocos reforçadas, utilizada para o uso de empilhadeiras e carros hidráulicos.', 'O IDE 10, tem quatro entradas, e com cinco laminas na parte superior com vão de entrada entre as peças, sustentadas por seis blocos reforçadas, com três laminas auxiliares na parte inferior da peça.', 'Possui cinco laminas na parte superior sendo as das extremidades ligeiramente mais largas, com vão de entrada entre as peças, sustentadas por seis blocos reforçados, com três laminas auxiliares na parte inferior da peça.', 'img_ide_10.png', 'Foto de IDE 10'),
(11, 'palete', 'IDE 11', 'Produto produzido em madeira.', 'Modelo com sete laminas de madeira na parte superior, sustentadas por três longarinas reforçadas, utilizada para o uso de empilhadeiras e carros hidráulicos.', 'O IDE 11, tem duas entradas, e com sete laminas na parte superior, sustentadas três longarinas reforçadas, com três laminas auxiliares na parte inferior da peça.', 'Possui sete laminas na parte superior, sustentadas três longarinas reforçadas, com três laminas auxiliares na parte inferior da peça.', 'img_ide_11.png', 'Foto de IDE 11'),
(12, 'palete', 'IDE 12', 'Produto produzido em madeira.', 'Modelo com sete laminas de madeira na parte superior, sustentadas por três longarinas reforçadas, utilizada para o uso de empilhadeiras e carros hidráulicos.', 'O IDE 12, tem duas entradas, e com sete laminas na parte superior, sustentadas três longarinas reforçadas, sem laminas auxiliares na parte inferior da peça.\r\n', 'Possui sete laminas na parte superior, sustentadas três longarinas reforçadas, sem laminas auxiliares na parte inferior da peça.', 'img_ide_12.png', 'Foto de IDE 12'),
(13, 'palete', 'IDE 13', 'Produto produzido em madeira.', 'Modelo com sete laminas de madeira na parte superior, sustentadas por três longarinas reforçadas, utilizada para o uso de empilhadeiras e carros hidráulicos.', 'O IDE 13, tem duas entradas, com sete laminas na parte superior, sustentadas três longarinas reforçadas, com duas laminas auxiliares na parte inferior apenas nas extremidades da peça.', 'Possui sete laminas na parte superior, sustentadas três longarinas reforçadas, com duas laminas auxiliares na parte inferior apenas nas extremidades da peça.\r\n', 'img_ide_13.png', 'Foto de IDE 13'),
(14, 'palete', 'IDE 14', 'Produto produzido em madeira.', 'Modelo com cinco laminas de madeira na parte superior, sustentadas por três longarinas reforçadas, e vão grande entre as peças, utilizada para o uso de empilhadeiras e carros hidráulicos.', 'O IDE 14, tem quatro entradas, com cinco laminas na parte superior, sustentadas três longarinas reforçadas, e vão grande entre as peças, e duas laminas auxiliares na parte inferior.', 'Possui cinco laminas na parte superior, sustentadas três longarinas reforçadas, com vão grande e duas laminas auxiliares na parte inferior apenas nas extremidades da peça.\r\n', 'img_ide_14.png', 'Foto de IDE 14'),
(15, 'caixa', 'CAIXA 01', 'Produto produzido em compensado.', 'Modelo produzido em padrão americano, no formato de caixa, produzida em compensado.', 'O IDE 15, produto desenvolvido em padrões americanos, no formato de caixa feita em compensado.  ', 'Possui quatro lados, toda forjada em compensado, em formato retangular.', 'img_caixa_01.png', 'Foto de CAIXA 01'),
(16, 'caixa', 'CAIXA 02', 'Produto produzido em madeira de pinus.', 'Modelo produzido no formato de caixa, em madeira de pinus.', 'O IDE 16, produzido no formato de caixa, com dois vão de entrada na parte inferior da peça.', 'Possui quatro lados, toda forjada em madeira de pinus, em formato retangular, e vão de entradas na parte inferior.', 'img_caixa_02.png', 'Foto de CAIXA 02'),
(17, 'caixa', 'CAIXA 03', 'Produto produzido em madeira de pinus.', 'Modelo produzido no formato de caixa, em madeira de pinus, reforçado.', 'O IDE 17, produzido no formato de caixa reforçada com madeira de pinus, com quatro vão de entrada na parte inferior da peça.', 'Possui quatro lados, toda forjada em madeira de pinus, em formato retangular, e vão de entradas na parte inferior.', 'img_caixa_03.png', 'Foto de CAIXA 03'),
(18, 'caixa', 'CAIXA 04', 'Produto produzido em madeira de pinus.', 'Modelo produzido no formato de engradado, em madeira de pinus, reforçado.', 'O IDE 17, produzido no formato de engradado reforçada, com madeira de pinus,sem  vão de entrada na parte inferior da peça.', 'Possui quatro lados, toda vazada e forjada em madeira de pinus, em formato retangular, e sem vão de entradas na parte inferior.', 'img_caixa_04.png', 'Foto de CAIXA 04'),
(19, 'prego', 'PREGO', 'Texto introdutório', 'Prego tipo espiralado (Ardox) com estrias helicoidais e angulação das espiras em relação ao eixo longitudinal do prego de 65º graus aproximadamente.', 'Prego tipo espiralado (Ardox) com estrias helicoidais e angulação das espiras em relação ao eixo longitudinal do prego de 65º graus aproximadamente.', 'Prego de Ardox espiralado com angulação de 65º graus.', 'img_prego_01.png', 'Foto de prego 01'),
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
