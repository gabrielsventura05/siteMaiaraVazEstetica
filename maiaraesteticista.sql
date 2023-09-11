-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Jul-2023 às 16:39
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `maiaraesteticista`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `procedimentos`
--

CREATE TABLE `procedimentos` (
  `id_proc` int(2) NOT NULL,
  `id_tipo` int(2) NOT NULL,
  `nome_proc` varchar(50) NOT NULL,
  `desc_proc` text NOT NULL,
  `imagem_proc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `procedimentos`
--

INSERT INTO `procedimentos` (`id_proc`, `id_tipo`, `nome_proc`, `desc_proc`, `imagem_proc`) VALUES
(1, 0, 'massagem relaxamento', 'para relaxar', ''),
(2, 0, 'massagem relaxante', 'Relaxamento dos músculos e, por consequência, diminuição de dores musculares, diminuição da ansiedade e estresse, alívio de enxaquecas e dores de cabeça, melhora da circulação sanguínea e do sistema imunológico.', ''),
(3, 0, 'massagem rosto', 'para relaxar o rosto', ''),
(4, 0, 'massagem corpo', 'para o corpo', ''),
(5, 0, 'massagem corpo', 'para o corpo', 'linfatica.png'),
(6, 0, 'massagem relaxamento', 'massagem relaxamento', ''),
(7, 0, 'massagem relaxamento', 'asasas\r\nasasas', ''),
(8, 0, 'massagem relaxamento', 'asasas\r\nasasas', ''),
(9, 0, 'massagem relaxamento', 'asasas\r\nasasas', ''),
(10, 0, 'massagem relaxamento', 'asasas\r\nasasas', ''),
(11, 0, 'massagem relaxamento', 'asasas\r\nasasas', ''),
(12, 0, 'massagem relaxamento', 'asasas\r\nasasas', ''),
(13, 0, 'massagem relaxamento', 'massagem relaxamento', ''),
(14, 0, 'massagem relaxamento', 'massagem relaxamento', ''),
(15, 0, 'massagem relaxamento', 'massagem relaxamento', ''),
(16, 0, 'massagem relaxamento', 'massagem relaxamento', ''),
(17, 0, 'massagem relaxamento', 'massagem relaxamento', '../img/IMG-20221125-WA0013.jpg'),
(18, 0, 'massagem relaxamento', 'Relaxamento dos músculos e, por consequência, diminuição de dores musculares, diminuição da ansiedade e estresse, alívio de enxaquecas e dores de cabeça, melhora da circulação sanguínea e do sistema imunológico.', '../img/16 reuniao primeira de 2023.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos_procedimentos`
--

CREATE TABLE `tipos_procedimentos` (
  `id_tipo` int(2) NOT NULL,
  `desc_tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipos_procedimentos`
--

INSERT INTO `tipos_procedimentos` (`id_tipo`, `desc_tipo`) VALUES
(1, 'Faciais'),
(2, 'Corporais'),
(3, 'Labiais');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `procedimentos`
--
ALTER TABLE `procedimentos`
  ADD PRIMARY KEY (`id_proc`);

--
-- Índices para tabela `tipos_procedimentos`
--
ALTER TABLE `tipos_procedimentos`
  ADD PRIMARY KEY (`id_tipo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `procedimentos`
--
ALTER TABLE `procedimentos`
  MODIFY `id_proc` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `tipos_procedimentos`
--
ALTER TABLE `tipos_procedimentos`
  MODIFY `id_tipo` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
