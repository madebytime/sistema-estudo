-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.11-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para estudodb
CREATE DATABASE IF NOT EXISTS `estudodb` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `estudodb`;

-- Copiando estrutura para tabela estudodb.curso
CREATE TABLE IF NOT EXISTS `curso` (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT,
  `nome_curso` varchar(100) NOT NULL DEFAULT '',
  `carga_curso` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_curso`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela estudodb.curso: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `curso` DISABLE KEYS */;
INSERT INTO `curso` (`id_curso`, `nome_curso`, `carga_curso`) VALUES
	(1, 'Adm', '500');
/*!40000 ALTER TABLE `curso` ENABLE KEYS */;

-- Copiando estrutura para tabela estudodb.curso_has_disciplina
CREATE TABLE IF NOT EXISTS `curso_has_disciplina` (
  `id_has` int(11) NOT NULL AUTO_INCREMENT,
  `cod_has_curso` int(11) NOT NULL,
  `cod_has_disciplina` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_has`),
  KEY `FK__curso` (`cod_has_curso`),
  KEY `FK__disciplina` (`cod_has_disciplina`),
  CONSTRAINT `FK__curso` FOREIGN KEY (`cod_has_curso`) REFERENCES `curso` (`id_curso`),
  CONSTRAINT `FK__disciplina` FOREIGN KEY (`cod_has_disciplina`) REFERENCES `disciplina` (`id_disp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela estudodb.curso_has_disciplina: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `curso_has_disciplina` DISABLE KEYS */;
/*!40000 ALTER TABLE `curso_has_disciplina` ENABLE KEYS */;

-- Copiando estrutura para tabela estudodb.disciplina
CREATE TABLE IF NOT EXISTS `disciplina` (
  `id_disp` int(11) NOT NULL AUTO_INCREMENT,
  `nome_disp` varchar(50) NOT NULL,
  `cod_turma` int(11) NOT NULL,
  `carga_disp` int(11) NOT NULL,
  PRIMARY KEY (`id_disp`),
  KEY `FK_disciplina_turma` (`cod_turma`),
  CONSTRAINT `FK_disciplina_turma` FOREIGN KEY (`cod_turma`) REFERENCES `turma` (`id_turma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela estudodb.disciplina: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `disciplina` DISABLE KEYS */;
/*!40000 ALTER TABLE `disciplina` ENABLE KEYS */;

-- Copiando estrutura para tabela estudodb.perfil
CREATE TABLE IF NOT EXISTS `perfil` (
  `id_perfil` int(11) NOT NULL,
  `nome_perfil` varchar(50) NOT NULL,
  PRIMARY KEY (`id_perfil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela estudodb.perfil: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `perfil` DISABLE KEYS */;
INSERT INTO `perfil` (`id_perfil`, `nome_perfil`) VALUES
	(1, 'Aluno'),
	(2, 'Professor');
/*!40000 ALTER TABLE `perfil` ENABLE KEYS */;

-- Copiando estrutura para tabela estudodb.turma
CREATE TABLE IF NOT EXISTS `turma` (
  `id_turma` int(11) NOT NULL AUTO_INCREMENT,
  `nome_turma` varchar(8) NOT NULL,
  PRIMARY KEY (`id_turma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela estudodb.turma: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `turma` DISABLE KEYS */;
/*!40000 ALTER TABLE `turma` ENABLE KEYS */;

-- Copiando estrutura para tabela estudodb.users
CREATE TABLE IF NOT EXISTS `users` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `cod_perfil` int(11) NOT NULL,
  `cod_curso` int(11) NOT NULL,
  `usua_nome` varchar(30) NOT NULL,
  `usua_sobrenome` varchar(30) NOT NULL,
  `usua_nascimento` date NOT NULL,
  `usua_endereco` varchar(30) NOT NULL,
  `usua_telefone` varchar(14) NOT NULL,
  `usua_cpf` varchar(14) NOT NULL,
  `usua_rg` varchar(13) NOT NULL,
  `usua_sexo` varchar(20) NOT NULL,
  `usua_email` varchar(40) NOT NULL,
  PRIMARY KEY (`id_users`),
  KEY `FK_users_perfil` (`cod_perfil`),
  KEY `FK_users_curso` (`cod_curso`),
  CONSTRAINT `FK_users_curso` FOREIGN KEY (`cod_curso`) REFERENCES `curso` (`id_curso`),
  CONSTRAINT `FK_users_perfil` FOREIGN KEY (`cod_perfil`) REFERENCES `perfil` (`id_perfil`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela estudodb.users: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id_users`, `cod_perfil`, `cod_curso`, `usua_nome`, `usua_sobrenome`, `usua_nascimento`, `usua_endereco`, `usua_telefone`, `usua_cpf`, `usua_rg`, `usua_sexo`, `usua_email`) VALUES
	(2, 1, 1, 'Matheus', 'Moreira', '2020-01-03', 'Rua km 17', '71871757384', '85874873538', '554564565', 'matheus@gmail.com', 'Masculino');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
