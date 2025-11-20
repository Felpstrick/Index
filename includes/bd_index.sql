-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/11/2025 às 19:33
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
-- Banco de dados: `bd_index`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `livro`
--

CREATE TABLE `livro` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `editora` varchar(100) NOT NULL,
  `ano_publicacao` int(11) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `livro`
--

INSERT INTO `livro` (`id`, `foto`, `titulo`, `autor`, `editora`, `ano_publicacao`, `genero`, `descricao`, `status`) VALUES
(1, 'C:/xampp/htdocs/index/assets/img/books/1984.jpg', '1984', 'George Orwell', 'Secker & Warburg', 1949, 'Ficção política', 'Uma sociedade totalitária controla tudo e todos através da vigilância absoluta.', 'disponivel'),
(2, 'C:/xampp/htdocs/index/assets/img/books/revolucao.jpg', 'Revolução dos Bichos', 'George Orwell', 'Secker & Warburg', 1945, 'Sátira Política', 'Animais lideram uma rebelião que logo se transforma em nova tirania.', 'disponivel'),
(3, 'C:/xampp/htdocs/index/assets/img/books/sociedade.jpg', 'O Senhor dos Anéis: A Sociedade do Anel', 'J. R. R. Tolkien', 'George Allen & Unwin', 1954, 'Fantasia', 'Um grupo improvável parte para destruir um artefato maligno.', 'indisponivel'),
(4, 'C:/xampp/htdocs/index/assets/img/books/hobbit.jpg', 'O Hobbit', 'J. R. R. Tolkien', 'George Allen & Unwin', 1954, 'Fantasia', 'A aventura de Bilbo com anões em busca de um tesouro guardado por um dragão.', 'indisponivel'),
(5, 'C:/xampp/htdocs/index/assets/img/books/casmurro.jpg', 'Dom Casmurro', 'Machado de Assis', 'Livraria Garnier', 1899, 'Romance', 'Bentinho revive sua história marcada pelo ciúme e pela dúvida sobre Capitu.', 'indisponivel'),
(6, 'C:/xampp/htdocs/index/assets/img/books/memorias.jpg', 'Memórias Póstumas de Brás Cubas', 'Machado de Assis', 'Tipografia Nacional', 1881, 'Romance', 'Um defunto narra sua vida com ironia e filosofia.', 'disponivel'),
(7, 'C:/xampp/htdocs/index/assets/img/books/principe.jpg', 'O Pequeno Príncipe', 'Antoine de Saint-Exupéry', 'Reynal & Hitchcock', 1943, 'Fábula', 'Um piloto encontra um príncipe de outro planeta e aprende sobre amor e sabedoria.', 'disponivel'),
(8, 'C:/xampp/htdocs/index/assets/img/books/pedra.jpg', 'Harry Potter e a Pedra Filosofal', 'J. K. Rowling', 'Bloomsbury', 1997, 'Fantasia', 'A jornada de Harry Potter no mundo bruxo começa.', 'disponivel'),
(9, 'C:/xampp/htdocs/index/assets/img/books/vinci.jpg', 'O Código Da Vinci', 'Dan Brown', 'Doubleday', 2003, 'Thriller', 'Segredos religiosos e simbologias ocultas guiam uma investigação perigosa.', 'disponivel'),
(10, 'C:/xampp/htdocs/index/assets/img/books/vento.jpg', 'O Nome do Vento', 'Patrick Rothfuss', 'DAW Books', 2007, 'Fantasia', 'Kvothe narra sua vida extraordinária desde a infância até virar lenda.', 'disponivel');

-- --------------------------------------------------------

--
-- Estrutura para tabela `reserva`
--

CREATE TABLE `reserva` (
  `id` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idLivro` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `telefone`, `senha`, `tipo`) VALUES
(4, 'Adm', 'adm@gmail.com', '(00) 00000-0000', '25d55ad283aa400af464c76d713c07ad', 'administrador'),
(5, 'Usuario', 'usuario@gmail.com', '(00) 00000-0000', '25f9e794323b453885f5181f1b624d0b', 'usuario');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
