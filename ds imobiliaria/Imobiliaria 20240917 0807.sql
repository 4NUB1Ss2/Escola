-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema imobiliaria
--

CREATE DATABASE IF NOT EXISTS imobiliaria;
USE imobiliaria;

--
-- Definition of table `imobiliaria`
--

DROP TABLE IF EXISTS `imobiliaria`;
CREATE TABLE `imobiliaria` (
  `codImobiliaria` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `tel` varchar(45) NOT NULL,
  `contato` varchar(45) NOT NULL,
  PRIMARY KEY (`codImobiliaria`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `imobiliaria`
--

/*!40000 ALTER TABLE `imobiliaria` DISABLE KEYS */;
INSERT INTO `imobiliaria` (`codImobiliaria`,`nome`,`tel`,`contato`) VALUES 
 (1,'Imobiliaria Teresinha','19999999999','Roberval');
/*!40000 ALTER TABLE `imobiliaria` ENABLE KEYS */;


--
-- Definition of table `imovel`
--

DROP TABLE IF EXISTS `imovel`;
CREATE TABLE `imovel` (
  `codImovel` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `codImobiliaria` int(10) unsigned NOT NULL,
  `tipo` varchar(25) NOT NULL,
  `valor` float NOT NULL,
  `bairro` varchar(20) NOT NULL,
  `descricao` longtext NOT NULL,
  `foto` blob NOT NULL,
  `situacao` varchar(15) NOT NULL,
  PRIMARY KEY (`codImovel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `imovel`
--

/*!40000 ALTER TABLE `imovel` DISABLE KEYS */;
/*!40000 ALTER TABLE `imovel` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
