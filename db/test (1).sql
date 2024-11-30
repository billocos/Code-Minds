-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/11/2024 às 20:22
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `test`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `id_tutorial` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `comentario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `id_tutorial`, `id_usuario`, `comentario`) VALUES
(11, 6, 20, 'ggggggg'),
(12, 8, 20, 'dwedoawsdkjaskdjkasd\r\n');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tutoriais`
--

CREATE TABLE `tutoriais` (
  `id_tutorial` int(11) NOT NULL,
  `titulo` varchar(65) DEFAULT NULL,
  `conteudo` longtext NOT NULL,
  `descricao` longtext NOT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `tutoriais`
--

INSERT INTO `tutoriais` (`id_tutorial`, `titulo`, `conteudo`, `descricao`, `id_usuario`) VALUES
(6, 'Introdução ao HTML', '', 'Aprenda o básico sobre estrutura de páginas web com HTML', 39),
(7, 'Introdução ao CSS', 'Explica seletores, cores, tamanhos de fonte, alinhamento e bordas. Inclui exemplo para mudar cores e estilos de um título <h1>.', 'Guia básico de estilização de páginas web usando CSS', 13),
(8, 'Introdução ao JavaScript', 'Introduz variáveis, operadores e funções com exemplos simples de uso em cálculos e mensagens de alerta no navegador.', 'Inicie na programação com JavaScript e veja exemplos básicos', 33),
(9, 'Variáveis e Tipos em Python', 'Apresenta tipos numéricos, strings e listas, além de exemplos de como declarar e utilizar variáveis para armazenar dados.', 'Saiba o básico sobre tipos de dados e variáveis em Python', 36),
(10, 'Estruturas de Controle em Java', 'Explica como utilizar if, else, for e while para criar lógicas básicas de controle de fluxo no código.', 'Aprenda sobre estruturas condicionais e de repetição em Java', 39),
(11, 'Funções em JavaScript', 'Explica como declarar funções, passar parâmetros e retornar valores, com exemplos simples de funções que somam números.', 'Descubra como criar e usar funções no JavaScript', 33);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(100) NOT NULL,
  `nome` varchar(1000) NOT NULL,
  `senha` varchar(16) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `senha`, `email`, `telefone`, `tipo`) VALUES
(13, 'yuri ', '111', 'spanta@gmail.com', '11111111111', 'aluno'),
(14, 'gustavo silva', 'tzN', 'spansta@gmail.coms', '123456789', 'aluno'),
(17, 'adm', 'adm', 'adm@gmail', '', 'administrador'),
(18, 'iago', 'cadastro', 'guilhermeruan19w8@gmail.com', '6199789999', 'aluno'),
(20, 'roberval', 'cr7lindo', 'germancano@gmail.com', '', 'aluno'),
(31, 'Ana Souza', 'Ana@2024!', 'ana.souza@email.com', '11987654321', 'administrador'),
(32, 'Bruno Lima', 'Bruno#2024!', 'bruno.lima@email.com', '11987654322', 'aluno'),
(33, 'Carla Mendes', 'Carla2024!', 'carla.mendes@email.com', '11987654323', 'professor'),
(34, 'Daniel Rocha', 'Daniel$2024!', 'daniel.rocha@email.com', '11987654324', 'administrador'),
(35, 'Eduarda Reis', 'Eduarda%2024!', 'eduarda.reis@email.com', '11987654325', 'professor'),
(36, 'Fernando Silva', 'Fernando@24!', 'fernando.silva@email.com', '11987654326', 'professor'),
(37, 'Gabriela Souza', 'Gabriela#24!', 'gabriela.souza@email.com', '11987654327', 'administrador'),
(38, 'Henrique Santos', 'Henrique24!', 'henrique.santos@email.com', '11987654328', 'aluno'),
(39, 'Isabela Nunes', 'Isabela$24!', 'isabela.nunes@email.com', '11987654329', 'professor'),
(40, 'João Pereira', 'Joao%2024!', 'joao.pereira@email.com', '11987654330', 'administrador');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_tutorial` (`id_tutorial`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices de tabela `tutoriais`
--
ALTER TABLE `tutoriais`
  ADD PRIMARY KEY (`id_tutorial`),
  ADD KEY `fk_id_usuario` (`id_usuario`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `tutoriais`
--
ALTER TABLE `tutoriais`
  MODIFY `id_tutorial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_tutorial`) REFERENCES `tutoriais` (`id_tutorial`) ON DELETE CASCADE,
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_id_tutorial` FOREIGN KEY (`id_tutorial`) REFERENCES `tutoriais` (`id_tutorial`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_usuario_new` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `tutoriais`
--
ALTER TABLE `tutoriais`
  ADD CONSTRAINT `fk_id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
