SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pedidos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `histórico`
--

DROP TABLE IF EXISTS `histórico`;
CREATE TABLE IF NOT EXISTS `histórico` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario_id` int NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idcliente` (`idcliente`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `histórico`
--

INSERT INTO `histórico` (`id`, `idcliente`, `created`) VALUES
(1, 1, '2022-06-19 10:48:45'),
(2, 2, '2022-06-19 11:48:45'),
(3, 1, '2022-06-20 10:49:11'),
(4, 2, '2022-06-20 12:49:11'),
(5, 3, '2022-06-20 13:49:11'),
(6, 4, '2022-06-20 16:49:11'),
(7, 1, '2022-06-21 10:49:11'),
(8, 2, '2022-06-21 11:49:11'),
(9, 3, '2022-06-21 14:49:11'),
(10, 4, '2022-06-21 19:49:11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logradouro` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` int(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpfcnpj` int(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `cliente` (`id`, `nome`, `email`, `logradouro`, `telefone`, `cpfcnpj`) VALUES
(1, 'Julia Silva Panaia', 'comercio.juliapanaia@gmail.com','Av Dr Julio Mesquita Filho, 847 Sala 1 Campo da Avaiação, Praia Grande / SP', '13988509990', '41369722000103');
--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `historico`
  ADD CONSTRAINT `historico_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
