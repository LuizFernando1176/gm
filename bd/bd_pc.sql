-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Ago-2019 às 06:05
-- Versão do servidor: 10.3.15-MariaDB
-- versão do PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_pc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `maquina`
--

CREATE TABLE `maquina` (
  `id` int(11) NOT NULL,
  `id_setor` int(11) NOT NULL,
  `id_rack` int(15) NOT NULL,
  `nome_maquina` varchar(150) NOT NULL,
  `nome_usuario` varchar(150) NOT NULL,
  `ponto` varchar(150) NOT NULL,
  `mac` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `maquina`
--

INSERT INTO `maquina` (`id`, `id_setor`, `id_rack`, `nome_maquina`, `nome_usuario`, `ponto`, `mac`) VALUES
(2, 3, 1, 'CAVAL0100-PC', 'jose.walkirdes ', 'PP05PT15', 'D8:97:BA:E5:54:32'),
(48, 3, 1, 'CAVAL-PC-NOVO', 'salmo.domingos ', 'PP01PT09', 'C0:7C:D1:33:83:D8'),
(49, 3, 2, 'CAVAL02-PC', 'francisco.assis ', 'PP05PT09', '70:71:BC:58:13:9A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `rack`
--

CREATE TABLE `rack` (
  `id` int(11) NOT NULL,
  `rack` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `rack`
--

INSERT INTO `rack` (`id`, `rack`) VALUES
(1, 'R001'),
(2, 'R002'),
(3, 'R003'),
(4, 'R004'),
(5, 'R005'),
(6, 'R006'),
(7, 'R007'),
(8, 'R008'),
(9, 'R009'),
(10, 'R0010');

-- --------------------------------------------------------

--
-- Estrutura da tabela `setor`
--

CREATE TABLE `setor` (
  `id` int(11) NOT NULL,
  `setor` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `setor`
--

INSERT INTO `setor` (`id`, `setor`) VALUES
(1, 'Arquivo Geral'),
(2, 'Assessoria Jurídica'),
(3, 'CAVAL'),
(4, 'CGI'),
(5, 'Contabilidade'),
(6, 'DAA'),
(7, 'DAC'),
(8, 'DCSD'),
(9, 'DEF'),
(10, 'DEF Ger.'),
(11, 'DEF Sim.'),
(12, 'DEPAC'),
(13, 'DEPAC Bal.'),
(14, 'DGAF'),
(15, 'DGF'),
(16, 'DGRH'),
(17, 'DICPA'),
(18, 'DIF'),
(19, 'DIJ'),
(20, 'Foral'),
(21, 'Divisão Estagio'),
(22, 'DPFP'),
(23, 'DPFP Inss'),
(24, 'DPSA'),
(25, 'DRF'),
(26, 'SEAD'),
(27, 'NEFIS'),
(28, 'Procuradoria'),
(29, 'Protocolo'),
(30, 'Gab. SEFAD'),
(31, 'Tesouraria'),
(32, 'Seplag'),
(33, 'DAP Conv.'),
(34, 'DAP Ger.'),
(35, 'DAT');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `maquina`
--
ALTER TABLE `maquina`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `rack`
--
ALTER TABLE `rack`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `setor`
--
ALTER TABLE `setor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `maquina`
--
ALTER TABLE `maquina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de tabela `rack`
--
ALTER TABLE `rack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `setor`
--
ALTER TABLE `setor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `maquina`
--
ALTER TABLE `maquina`
  ADD CONSTRAINT `maquina_ibfk_1` FOREIGN KEY (`id_setor`) REFERENCES `setor` (`id`),
  ADD CONSTRAINT `maquina_ibfk_2` FOREIGN KEY (`id_rack`) REFERENCES `rack` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
