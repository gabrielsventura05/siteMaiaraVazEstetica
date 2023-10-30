-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Out-2023 às 20:23
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
-- Banco de dados: `maiaraestetica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ambiente`
--

CREATE TABLE `ambiente` (
  `id_amb` int(10) NOT NULL,
  `img_amb` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ambiente`
--

INSERT INTO `ambiente` (`id_amb`, `img_amb`) VALUES
(65, '../img/maiara_estetica/ambiente_banco/ambiente2.jpg'),
(66, '../img/maiara_estetica/ambiente_banco/ambiente10.jpg'),
(67, '../img/maiara_estetica/ambiente_banco/ambiente5.jpg'),
(68, '../img/maiara_estetica/ambiente_banco/ambiente2 (2).jpg'),
(69, '../img/maiara_estetica/ambiente_banco/ambiente3.jpg'),
(71, '../img/maiara_estetica/ambiente_banco/ambiente9.jpg'),
(72, '../img/maiara_estetica/ambiente_banco/ambiente6.jpg'),
(77, '../img/maiara_estetica/ambiente_banco/ambiente4.jpg'),
(78, '../img/maiara_estetica/ambiente_banco/ambiente1 (2).jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `procedimentoscorporais`
--

CREATE TABLE `procedimentoscorporais` (
  `id_proc` int(10) NOT NULL,
  `nome_proc` varchar(50) NOT NULL,
  `desc_proc` text NOT NULL,
  `img_proc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `procedimentoscorporais`
--

INSERT INTO `procedimentoscorporais` (`id_proc`, `nome_proc`, `desc_proc`, `img_proc`) VALUES
(2, 'Massagem com Bambu ', 'Estimula as glândulas proporcionando um efeito relaxante e auxilia na diminuição da celulite\r\n- Indicações: eliminar toxinas, reduzir celulite, gordura localizada, flacidez e medidas.\r\n', '../img/maiara_estetica/procedimentos/corporais_banco/massagem_bambu.jpg'),
(3, 'Massagem relaxante', 'Relaxamento dos músculos e, por consequência, diminuição de dores musculares, diminuição da ansiedade e estresse, alívio de enxaquecas e dores de cabeça, melhora da circulação sanguínea e do sistema imunológico.', '../img/maiara_estetica/procedimentos/corporais_banco/massagem_relax.jpg'),
(4, 'Massagem anti stress', 'Combate sintomas como irritabilidade, falta de concentração, medo, tensões musculares e má circulação sanguínea.', '../img/maiara_estetica/procedimentos/corporais_banco/massagem_antistress.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `procedimentosfaciais`
--

CREATE TABLE `procedimentosfaciais` (
  `id_proc` int(11) NOT NULL,
  `nome_proc` varchar(50) NOT NULL,
  `desc_proc` text NOT NULL,
  `img_proc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `procedimentosfaciais`
--

INSERT INTO `procedimentosfaciais` (`id_proc`, `nome_proc`, `desc_proc`, `img_proc`) VALUES
(31, 'Peeling de diamante ', 'É um tratamento estético que faz esfoliação profunda na pele para remoção de células mortas da camada mais superficial, retira manchas e combate as rugas, e induz a produção de colágeno e elastina. Dessa forma, a pele se mantém firme e uniforme.', '../img/maiara_estetica/procedimentos/faciais_banco/procedimento20.jpg'),
(32, 'Hidratação facial', 'Deixa a pele mais iluminada e vistosa, menos ressecada, protege contra poluição do dia a dia, evita o envelhecimento precoce, previne manchas, controle do brilho e oleosidade.', '../img/maiara_estetica/procedimentos/faciais_banco/procedimento11.jpg'),
(33, 'Limpeza de pele', 'Ajuda a prevenir o surgimento de cravos e espinhas, retira as células mortas do rosto e faz um detox na pele, ajuda a controlar a oleosidade excessiva no rosto, suaviza e uniformiza a pele, previne as rugas e linhas de expressão.', '../img/maiara_estetica/procedimentos/faciais_banco/pele.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(10) NOT NULL,
  `nome_usuario` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome_usuario`, `email`, `senha`) VALUES
(7, 'Ventura', 'gaventura-1995@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(8, 'Ventura', 'gaventura-1995@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(9, 'Ventura', 'gaventura-1995@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(10, 'Ventura', 'gaventura-1995@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(11, 'Ventura', 'gaventura-1995@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(12, 'Ventura', 'gaventura-1995@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(16, 'Gabriel', 'admin@hotmail.com', 'c93ccd78b2076528346216b3b2f701e6'),
(18, 'Gabriel  Simioni Ventura', 'gaventura-1995@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055 '),
(21, 'Gabriel', 'gaventura1995@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(22, 'Teste 3', 'teste@hotmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220  ');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ambiente`
--
ALTER TABLE `ambiente`
  ADD PRIMARY KEY (`id_amb`);

--
-- Índices para tabela `procedimentoscorporais`
--
ALTER TABLE `procedimentoscorporais`
  ADD PRIMARY KEY (`id_proc`);

--
-- Índices para tabela `procedimentosfaciais`
--
ALTER TABLE `procedimentosfaciais`
  ADD PRIMARY KEY (`id_proc`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ambiente`
--
ALTER TABLE `ambiente`
  MODIFY `id_amb` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de tabela `procedimentoscorporais`
--
ALTER TABLE `procedimentoscorporais`
  MODIFY `id_proc` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `procedimentosfaciais`
--
ALTER TABLE `procedimentosfaciais`
  MODIFY `id_proc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
