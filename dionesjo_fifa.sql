-- MySQL dump 10.13  Distrib 5.1.70, for unknown-linux-gnu (x86_64)
--
-- Host: localhost    Database: dionesjo_fifa
-- ------------------------------------------------------
-- Server version	5.1.70-cll

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_clubes`
--

DROP TABLE IF EXISTS `tbl_clubes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_clubes` (
  `CLUBE_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `CLUBE_NOME` varchar(50) NOT NULL,
  `CLUBE_IMG` text,
  `CLUBE_DTCAD` varchar(30) NOT NULL,
  `CLUBE_DTALT` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`CLUBE_CODIGO`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_clubes`
--

LOCK TABLES `tbl_clubes` WRITE;
/*!40000 ALTER TABLE `tbl_clubes` DISABLE KEYS */;
INSERT INTO `tbl_clubes` (`CLUBE_CODIGO`, `CLUBE_NOME`, `CLUBE_IMG`, `CLUBE_DTCAD`, `CLUBE_DTALT`) VALUES (1,'Barcelona','barcelona.png','14/08/2013 - 12:56:56','14/08/2013 - 14:04:19'),(2,'Real Madrid','real-madrid.png','14/08/2013 - 12:57:24','14/08/2013 - 14:04:33'),(10,'PSG','PSG.jpg','17/09/2013 - 17:53:48','17/09/2013 - 17:54:19'),(6,'Bayern de Munique','bayern-de-munique.png','14/08/2013 - 13:39:45','14/08/2013 - 14:04:04'),(13,'SÃ£o Paulo','sao-paulo (9).jpg','17/09/2013 - 17:57:15','17/09/2013 - 18:01:08'),(14,'AtlÃ©tico Mineiro','Atl Min.jpg','17/09/2013 - 17:57:34','17/09/2013 - 18:05:51'),(15,'Cruzeiro','Escudo_do_Cruzeiro.png','17/09/2013 - 17:57:47','17/09/2013 - 18:09:15'),(16,'Corinthians','Corinthians.jpg','17/09/2013 - 17:58:16','17/09/2013 - 18:06:29'),(18,'GrÃªmio','gremio_n.JPG','17/09/2013 - 18:13:17','17/09/2013 - 18:13:39'),(19,'Internacional ','download.jpg','17/09/2013 - 18:14:05','17/09/2013 - 18:16:00'),(20,'Manchester City','Manchester City.jpg','23/09/2013 - 13:20:22','23/09/2013 - 13:20:49');
/*!40000 ALTER TABLE `tbl_clubes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_creditos`
--

DROP TABLE IF EXISTS `tbl_creditos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_creditos` (
  `CRED_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `CRED_NOME` varchar(50) NOT NULL,
  `CRED_VALOR` varchar(10) NOT NULL,
  `CRED_IMG` text,
  `CRED_DTCAD` varchar(30) NOT NULL,
  `CRED_DTALT` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`CRED_CODIGO`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_creditos`
--

LOCK TABLES `tbl_creditos` WRITE;
/*!40000 ALTER TABLE `tbl_creditos` DISABLE KEYS */;
INSERT INTO `tbl_creditos` (`CRED_CODIGO`, `CRED_NOME`, `CRED_VALOR`, `CRED_IMG`, `CRED_DTCAD`, `CRED_DTALT`) VALUES (1,'KakÃ¡ Santoro','50.00',NULL,'20/09',NULL);
/*!40000 ALTER TABLE `tbl_creditos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_debitos`
--

DROP TABLE IF EXISTS `tbl_debitos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_debitos` (
  `DEBT_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `DEBT_NOME` varchar(50) NOT NULL,
  `DEBT_VALOR` varchar(10) NOT NULL,
  `DEBT_IMG` text,
  `DEBT_DTCAD` varchar(30) NOT NULL,
  `DEBT_DTALT` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`DEBT_CODIGO`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_debitos`
--

LOCK TABLES `tbl_debitos` WRITE;
/*!40000 ALTER TABLE `tbl_debitos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_debitos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_ideias`
--

DROP TABLE IF EXISTS `tbl_ideias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_ideias` (
  `IDEIA_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `IDEIA_NOME` varchar(50) NOT NULL,
  `IDEIA_ASSUNTO` varchar(50) NOT NULL,
  `IDEIA_MENSAGEM` text NOT NULL,
  `IDEIA_NAOGOSTEI` char(2) DEFAULT NULL,
  `IDEIA_GOSTEI` char(2) DEFAULT NULL,
  `IDEIA_DTCAD` varchar(30) NOT NULL,
  `IDEIA_DTALT` varchar(30) NOT NULL,
  PRIMARY KEY (`IDEIA_CODIGO`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_ideias`
--

LOCK TABLES `tbl_ideias` WRITE;
/*!40000 ALTER TABLE `tbl_ideias` DISABLE KEYS */;
INSERT INTO `tbl_ideias` (`IDEIA_CODIGO`, `IDEIA_NOME`, `IDEIA_ASSUNTO`, `IDEIA_MENSAGEM`, `IDEIA_NAOGOSTEI`, `IDEIA_GOSTEI`, `IDEIA_DTCAD`, `IDEIA_DTALT`) VALUES (6,'Carlos Santoro (KakÃ¡)','MÃºsica','Adotar uma mÃºsica para o site, VEM PRA RUA - RAPPA.',NULL,'4','04/06/2013 - 12:08:43',''),(7,'Wanderson olimpio da silva ','Adorei esse campeonato ','Esse campeonato de video game vai ser melhor de todos vai mesmo vamos Chelsea vai ser campeÃ£o ',NULL,'4','04/06/2013 - 13:25:20','04/06/2013 - 13:51:28'),(5,'Carlos Santoro - KakÃ¡','NegociaÃ§Ã£o','NegociaÃ§Ã£o de jogadores, para reforÃ§ar o time, estipulando o preÃ§o de cada jogador, seja goleiros, zagueiros, laterais, volantes, meio campistas e atacantes, ao desembolsar o dinheiro terÃ¡ o direito de contratar.',NULL,'3','03/06/2013 - 17:22:14',''),(8,'Carlos Santoro (KakÃ¡)','Curtir','Na pÃ¡gina de idÃ©ias, ter visualizaÃ§Ã£o de quem estÃ¡ curtindo.',NULL,NULL,'07/06/2013 - 09:22:20',''),(9,'Ronaldo Adriano','play3 e x-box','Fala galera blz? Como ja comentado com o kaka, gostaria de compartilhar com todos mais essa ideia. Nesse campeonato poderiamos usar tambem um x-box,ate onde eu sei eu, o luca e o dani jogamos mais fifa no xbox do que no play3 entao seria justo termos os dois games. Como funcionaria? Ao fazer a tabela, organizamos de uma forma de que todos tenham um certo numero de jogos como mandante e dessa forma, quem for mandante optaria por um dos games. Pessoalmente, nunca me importei em jogar em um ou outro mais como desta vez teremos um premio recheado, seria muito bom eu jogar no game que tenho mais facilidade. Vlw','1','2','28/07/2013 - 15:03:44',''),(10,'KakÃ¡ Santoro','NotÃ­cias','Inserir uma coluna no site, que tenha notÃ­cias dos times e polÃªmicas entre os adversÃ¡rios.',NULL,'1','22/08/2013 - 09:40:39','');
/*!40000 ALTER TABLE `tbl_ideias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_imagens`
--

DROP TABLE IF EXISTS `tbl_imagens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_imagens` (
  `IMG_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `USUARIO_CODIGO` varchar(50) NOT NULL,
  `JOGADOR_CODIGO` int(11) NOT NULL,
  `IMG_DESCRICAO` varchar(50) NOT NULL,
  `IMG_DTCAD` varchar(30) NOT NULL,
  PRIMARY KEY (`IMG_CODIGO`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_imagens`
--

LOCK TABLES `tbl_imagens` WRITE;
/*!40000 ALTER TABLE `tbl_imagens` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_imagens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_jogadores`
--

DROP TABLE IF EXISTS `tbl_jogadores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_jogadores` (
  `JOGADOR_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `CLUBE_CODIGO` int(11) NOT NULL,
  `CLUBE_NOME` varchar(50) NOT NULL,
  `JOGADOR_NOME` varchar(50) NOT NULL,
  `JOGADOR_POSICAO` varchar(50) NOT NULL,
  `JOGADOR_HABILIDADE` varchar(3) NOT NULL,
  `JOGADOR_IMG` text,
  `JOGADOR_DTCAD` varchar(50) DEFAULT NULL,
  `JOGADOR_DTALT` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`JOGADOR_CODIGO`)
) ENGINE=MyISAM AUTO_INCREMENT=162 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_jogadores`
--

LOCK TABLES `tbl_jogadores` WRITE;
/*!40000 ALTER TABLE `tbl_jogadores` DISABLE KEYS */;
INSERT INTO `tbl_jogadores` (`JOGADOR_CODIGO`, `CLUBE_CODIGO`, `CLUBE_NOME`, `JOGADOR_NOME`, `JOGADOR_POSICAO`, `JOGADOR_HABILIDADE`, `JOGADOR_IMG`, `JOGADOR_DTCAD`, `JOGADOR_DTALT`) VALUES (1,1,'Barcelona','Victor Valdes','g','8.5','victor-valdes.jpg','04/09/2013 - 16:46:19','06/09/2013 - 12:27:53'),(2,1,'Barcelona','Dani Alves','l','8.5','dani-alves.jpg','04/09/2013 - 16:46:32','05/09/2013 - 11:56:32'),(13,1,'Barcelona','Jordi Alba','l','8.3','FCB_Jordi-Alba_head_2012.jpg','06/09/2013 - 17:24:26','06/09/2013 - 17:24:50'),(11,1,'Barcelona','Pique','z','8.6','gerard_pique_2012_08_16.jpg','06/09/2013 - 17:18:43','06/09/2013 - 17:21:46'),(12,1,'Barcelona','Puyol','z','8.5','aaaaaaaaaaaaaaaaaaaaa.jpg','06/09/2013 - 17:22:48','06/09/2013 - 17:23:07'),(14,1,'Barcelona','Macherano','-','8.6','21msni9.jpg','06/09/2013 - 17:25:45','06/09/2013 - 17:26:06'),(15,1,'Barcelona','SÃ©rgio Busquets','v','8.6','images.jpg','06/09/2013 - 17:27:07','06/09/2013 - 17:27:29'),(16,1,'Barcelona','Alex Song','v','8.3','images (1).jpg','06/09/2013 - 17:28:29','06/09/2013 - 17:28:48'),(17,1,'Barcelona','Fabregas','m','8.5','download.jpg','06/09/2013 - 17:30:01','06/09/2013 - 17:32:25'),(18,1,'Barcelona','Iniesta','a','9.2','203490_189580901175302_295636104_n.jpg','06/09/2013 - 17:33:19','06/09/2013 - 17:33:36'),(19,1,'Barcelona','Pedro','a','8.6','Pedroo.jpg','06/09/2013 - 17:34:18','06/09/2013 - 17:36:03'),(20,1,'Barcelona','Xavi','m','9.2','XAVI.jpg','06/09/2013 - 17:36:58','06/09/2013 - 17:37:30'),(21,1,'Barcelona','Neymar','a','8.9','63457-fc-barcelona-s-neymar-during-a-friendly-620x0-1.jpg','06/09/2013 - 17:38:28','06/09/2013 - 17:45:43'),(22,1,'Barcelona','Messi','a','9.6','FC-Barcelona-VS-Villarreal-Leo-Messi10.jpg','06/09/2013 - 17:41:04','06/09/2013 - 17:45:15'),(23,1,'Barcelona','Afellay','a','8.0','2010-12-24_ALFELLAY_49.JPG','06/09/2013 - 17:52:54','06/09/2013 - 17:57:33'),(24,1,'Barcelona','Cuenca','a','7.6','postal-fc-barcelona-isaac-cuenca.jpg','06/09/2013 - 17:53:35','06/09/2013 - 17:58:25'),(25,1,'Barcelona','Tello','a','7.6','Profil-Lengkap-Cristian-Tello.jpg','06/09/2013 - 17:54:06','06/09/2013 - 17:58:48'),(26,1,'Barcelona','Montoya','l','7.4','Martin Montoya (Barcelona).jpg','06/09/2013 - 17:55:06','06/09/2013 - 17:59:36'),(27,1,'Barcelona','Marc','z','7.2','images (3).jpg','06/09/2013 - 17:55:32','06/09/2013 - 18:00:09'),(28,1,'Barcelona','Dos Santos','m','7.4','DOS_SANTOS.jpg','06/09/2013 - 18:00:59','06/09/2013 - 20:18:20'),(29,6,'Bayern de Munique','Neuer','g','8.8','01-Neuer.png','06/09/2013 - 22:39:19','07/09/2013 - 12:13:47'),(39,6,'Bayern de Munique','Dante','z','8.1','dante_0001.jpg','07/09/2013 - 22:21:22',NULL),(31,1,'Barcelona','JosÃ© Pinto','g','7.1','PINTO.jpg','07/09/2013 - 12:10:52','07/09/2013 - 12:12:51'),(38,6,'Bayern de Munique','Muller','m','8.6','Muller.jpg','07/09/2013 - 21:52:08',NULL),(32,6,'Bayern de Munique','Lahm','l','8.5','21-Lahm.png','07/09/2013 - 12:17:07','07/09/2013 - 22:19:40'),(40,6,'Bayern de Munique','Van Buyten','z','8.0','5_-_van-buyten.jpg','07/09/2013 - 22:44:16','07/09/2013 - 23:04:02'),(41,6,'Bayern de Munique','Rafinha','l','7.8','13_-_rafinha.jpg','07/09/2013 - 22:45:36',NULL),(42,6,'Bayern de Munique','Boateng','z','7.9','17-Boateng.png','07/09/2013 - 23:05:01','07/09/2013 - 23:05:40'),(43,6,'Bayern de Munique','Badstuber','-','8.2','28_-_badstuber.jpg','07/09/2013 - 23:07:30',NULL),(44,6,'Bayern de Munique','Alaba','l','7.7','27-Alaba.png','07/09/2013 - 23:08:40',NULL),(45,6,'Bayern de Munique','D. Contento','l','7.6','26_-_contento.jpg','07/09/2013 - 23:10:54',NULL),(46,6,'Bayern de Munique','Jan Kirchhoff','z','7.5','JAN KIRCHHOFF.jpg','07/09/2013 - 23:15:43',NULL),(47,13,'SÃ£o Paulo','RogÃ©rio Ceni','g','G.o','jogador-rogerio-ceni.jpg','18/09/2013 - 08:53:18','23/09/2013 - 13:51:44'),(48,13,'SÃ£o Paulo','Toloi','z','z.o','TolÃ³i.jpg','18/09/2013 - 09:07:05','23/09/2013 - 13:56:25'),(49,13,'SÃ£o Paulo','Paulo Miranda','z','z.o','Paulo_Miranda_Perfil.jpg','18/09/2013 - 09:08:32',NULL),(50,13,'SÃ£o Paulo','Aloisio','a','a.t','Aloisio.jpg','18/09/2013 - 09:09:23','23/09/2013 - 13:57:01'),(51,13,'SÃ£o Paulo','AntÃ´nio Carlos','z','z.o','antonio-carlos.jpg','18/09/2013 - 09:10:19',NULL),(52,13,'SÃ£o Paulo','Matheus Caramelo','l','l.d','caramelo.jpg','18/09/2013 - 09:11:24',NULL),(53,13,'SÃ£o Paulo','Clemente Rodriguez','l','l.e','Clemente_Perfil.jpg','18/09/2013 - 09:12:28',NULL),(54,13,'SÃ£o Paulo','LÃºcio','z','z.o','Lucio_Perfil.jpg','18/09/2013 - 09:13:07',NULL),(55,13,'SÃ£o Paulo','Denilson','v','v.o','Denilson.jpg','18/09/2013 - 09:13:55','23/09/2013 - 13:57:47'),(56,13,'SÃ£o Paulo','Wellington','v','v.o','Wellington_Perfil.jpg','18/09/2013 - 09:14:46',NULL),(57,13,'SÃ£o Paulo','LuÃ­s Fabiano','a','a.t','luisfabiano.jpg','18/09/2013 - 09:15:28','23/09/2013 - 13:59:26'),(58,13,'SÃ£o Paulo','Jadson','m','m.a','Jadson.jpg','18/09/2013 - 09:16:16','23/09/2013 - 13:58:20'),(59,13,'SÃ£o Paulo','Paulo Henrique Ganso','m','m.a','Ganso_Perfil.jpg','18/09/2013 - 09:17:20',NULL),(60,13,'SÃ£o Paulo','Denis','g','g.o','Denis_Perfil.jpg','18/09/2013 - 09:18:55',NULL),(61,13,'SÃ£o Paulo','FabrÃ­cio','v','v.l','Fabricio.jpg','18/09/2013 - 09:19:42','23/09/2013 - 14:00:01'),(62,13,'SÃ£o Paulo','Maicon','m','m.a','Maicon_Perfil.jpg','18/09/2013 - 09:21:11',NULL),(63,13,'SÃ£o Paulo','Renan Ribeiro','g','g.o','renan.jpg','18/09/2013 - 09:22:03',NULL),(64,13,'SÃ£o Paulo','Osvaldo','a','a.t','Osvaldo.jpg','18/09/2013 - 09:22:39','23/09/2013 - 14:01:02'),(65,13,'SÃ£o Paulo','Negueba','-','a.t','Negueba_Perfil.jpg','18/09/2013 - 09:23:28',NULL),(66,13,'SÃ£o Paulo','Carleto','l','l.e','Carleto_Perfil.jpg','18/09/2013 - 09:24:46',NULL),(67,13,'SÃ£o Paulo','Douglas','l','l.d','Douglas_Perfil.jpg','18/09/2013 - 09:25:44',NULL),(68,13,'SÃ£o Paulo','Silvinho','a','A.t','Silvinho_Perfil.jpg','18/09/2013 - 09:26:25',NULL),(69,13,'SÃ£o Paulo','Lucas Evangelista','m','a.t','Lucas_Evangelista_Perfil.jpg','18/09/2013 - 09:27:50',NULL),(70,13,'SÃ£o Paulo','Rodrigo Caio','v','V.o','Rodrigo_Caio_Perfil.jpg','18/09/2013 - 09:28:40',NULL),(71,13,'SÃ£o Paulo','Reinaldo','l','l.e','Reinaldo_Perfil.jpg','18/09/2013 - 09:29:41',NULL),(72,13,'SÃ£o Paulo','Welliton','a','a.t','welliton.jpg','18/09/2013 - 09:30:23',NULL),(73,13,'SÃ£o Paulo','Ademilson','a','a.t','Ademilson_Perfil.jpg','18/09/2013 - 09:34:23',NULL),(74,13,'SÃ£o Paulo','Ã‰dson Silva','z','z.o','Edson_Silva_Perfil.jpg','18/09/2013 - 09:35:06',NULL),(75,13,'SÃ£o Paulo','JoÃ£o Schimidt','v','v.o','Joao_Schmidt_Perfil.jpg','18/09/2013 - 09:36:02',NULL),(76,2,'Real Madrid','Casilhas','g','g.o','Casilhas.jpg','19/09/2013 - 10:34:09',NULL),(77,2,'Real Madrid','Diego LopÃ©z','g','g.o','Diego LÃ³pez Rodriguez.jpg','19/09/2013 - 10:35:17',NULL),(78,2,'Real Madrid','JesÃºs Fernandez','g','g.o','JesÃºs Fernandez.jpg','19/09/2013 - 10:36:35',NULL),(79,2,'Real Madrid','Pepe','z','z.o','Pepe.jpg','19/09/2013 - 10:39:34',NULL),(80,2,'Real Madrid','Varane','-','z.o','Varane.jpg','19/09/2013 - 10:40:31',NULL),(81,2,'Real Madrid','SÃ©rgio Ramos','z','z.o','SÃ©rgio Ramos.jpg','19/09/2013 - 10:42:56',NULL),(82,2,'Real Madrid','Carjaval','l','l.d','Carjaval.jpg','19/09/2013 - 10:44:57',NULL),(83,2,'Real Madrid','Arbeloa','l','l.e','Arbeloa.jpg','19/09/2013 - 10:46:02',NULL),(84,2,'Real Madrid','FÃ¡bio CoentrÃ£o','l','l.d','Fabio CoentrÃ£o.jpg','19/09/2013 - 10:46:51',NULL),(85,2,'Real Madrid','Xabi Alonso','v','v.o','Xabi Alonso.jpg','19/09/2013 - 10:48:07',NULL),(86,2,'Real Madrid','Khedira','v','v.o','Khedira.jpg','19/09/2013 - 10:49:02',NULL),(87,2,'Real Madrid','Luca Modric','v','v.o','Luka Modric.jpg','19/09/2013 - 10:50:13',NULL),(88,2,'Real Madrid','Casemiro','v','v.o','Casemiro.jpg','19/09/2013 - 10:51:52',NULL),(89,2,'Real Madrid','Illarramendi','m','m.a','IIIarramendi.jpg','19/09/2013 - 11:02:02',NULL),(90,2,'Real Madrid','Isco','-','m.a','Isco.jpg','19/09/2013 - 11:02:52',NULL),(91,2,'Real Madrid','Gareth Bale','a','a.t','Gareth Bale.jpg','19/09/2013 - 11:04:04',NULL),(92,2,'Real Madrid','Di Maria','a','a.t','Di Maria.jpg','19/09/2013 - 11:04:47',NULL),(93,2,'Real Madrid','Cristiano Ronaldo','a','a.t','Cristiano Ronaldo.jpg','19/09/2013 - 11:05:31',NULL),(94,2,'Real Madrid','Morata','a','a.t','Morata.jpg','19/09/2013 - 11:06:48',NULL),(95,2,'Real Madrid','Benzema','a','a.t','Benzema.jpg','19/09/2013 - 11:29:39',NULL),(96,16,'Corinthians','CÃ¡ssio','g','g.o','Cassio.jpg','19/09/2013 - 11:33:09',NULL),(97,16,'Corinthians','JÃºlio CÃ©sar','g','g.o','Julio Cesar.jpg','19/09/2013 - 11:41:06',NULL),(98,16,'Corinthians','Gil','z','z.o','Gil.jpg','19/09/2013 - 11:42:35',NULL),(99,16,'Corinthians','Paulo AndrÃ©','-','z.o','Paulo AndrÃ©.jpg','19/09/2013 - 11:43:13',NULL),(100,16,'Corinthians','Guilherme Andrade','z','z.o','Guilherme-Andrade.jpg','19/09/2013 - 11:43:55',NULL),(101,16,'Corinthians','Felipe Augusto','z','z.o','felipe_augusto.jpg','19/09/2013 - 11:44:31',NULL),(102,16,'Corinthians','FÃ¡bio Santos','l','l.e','Fabio Santos.jpg','19/09/2013 - 11:45:21',NULL),(103,16,'Corinthians','Alessandro','-','l.d','Alessandro.jpg','19/09/2013 - 11:45:53',NULL),(104,16,'Corinthians','Edenilson','l','l.v','Edenilson.jpg','19/09/2013 - 11:46:44',NULL),(105,16,'Corinthians','Guilherme','v','v.o','Guilherme.jpg','19/09/2013 - 11:48:13',NULL),(106,16,'Corinthians','Ralf','v','v.o','Half.jpg','19/09/2013 - 11:48:55',NULL),(107,16,'Corinthians','Maldonado','v','v.o','Maldonado.jpg','19/09/2013 - 11:49:40',NULL),(108,16,'Corinthians','Danilo','-','m.a','Danilo.jpg','19/09/2013 - 11:50:19',NULL),(109,16,'Corinthians','Ibson','-','m.a','Ibson.jpg','19/09/2013 - 11:50:49',NULL),(110,16,'Corinthians','Douglas','m','m.a','Douglas.jpg','19/09/2013 - 11:51:31',NULL),(111,16,'Corinthians','Renato Augusto','m','m.a','Renato Augusto.jpg','19/09/2013 - 11:52:16',NULL),(112,16,'Corinthians','Romarinho','a','a.t','Romarinho.jpg','19/09/2013 - 11:53:04',NULL),(113,16,'Corinthians','Ã‰merson Sheik','a','a.t','Emerson Sheik.jpg','19/09/2013 - 11:53:42',NULL),(114,16,'Corinthians','Alexandre Pato','a','a.t','Alexandre Pato.jpg','19/09/2013 - 11:58:39',NULL),(115,16,'Corinthians','Zizao','a','a.t','Chen Zizao.jpg','19/09/2013 - 11:59:19',NULL),(116,16,'Corinthians','Guerrero','a','a.t','Paolo Guerrero.jpg','19/09/2013 - 12:00:12',NULL),(117,14,'AtlÃ©tico Mineiro','Victor','g','g.o','Victor.jpg','19/09/2013 - 12:43:37',NULL),(118,14,'AtlÃ©tico Mineiro','Lee Winston','g','g.o','Lee Winston.jpg','19/09/2013 - 12:45:00',NULL),(119,14,'AtlÃ©tico Mineiro','RÃ©ver','z','z.o','RÃ©ver.jpg','19/09/2013 - 12:45:52',NULL),(120,14,'AtlÃ©tico Mineiro','NikÃ£o','z','z.o','NikÃ£o zg.jpg','19/09/2013 - 12:46:32',NULL),(121,14,'AtlÃ©tico Mineiro','Neto Belora','z','z.o','neto-berola zg.jpg','19/09/2013 - 12:47:11',NULL),(122,14,'AtlÃ©tico Mineiro','Marcos Rocha','z','z.o','Marcos Rocha.jpg','19/09/2013 - 12:47:46',NULL),(123,14,'AtlÃ©tico Mineiro','Leonardo Silva','-','z.o','Leonardo Silva.jpg','19/09/2013 - 12:48:25',NULL),(124,14,'AtlÃ©tico Mineiro','Michel Macedo','z','z.o','Michel Macedo zg.jpg','19/09/2013 - 12:52:53',NULL),(125,14,'AtlÃ©tico Mineiro','Ã‰merson dos Santos','z','z.o','Ã‰merson dos Santos zg.jpg','19/09/2013 - 12:53:35',NULL),(126,14,'AtlÃ©tico Mineiro','Carlos CÃ©sar','z','z.o','Carlos CÃ©sar Neves zg.jpg','19/09/2013 - 12:54:27',NULL),(127,14,'AtlÃ©tico Mineiro','Junior Cezar','l','l.e','Junior-Cesar.jpg','19/09/2013 - 12:56:47',NULL),(128,14,'AtlÃ©tico Mineiro','Rosinei','z','z.o','Rosinei zg.jpg','19/09/2013 - 12:57:51',NULL),(129,14,'AtlÃ©tico Mineiro','Richarlyson','v','v.o','Richarlyson.jpg','19/09/2013 - 12:58:44',NULL),(130,14,'AtlÃ©tico Mineiro','Pierre','v','v.o','Pierre.jpg','19/09/2013 - 12:59:42',NULL),(131,14,'AtlÃ©tico Mineiro','Gilberto Silva','v','v.o','Gilberto Silva vo.png','19/09/2013 - 13:00:26',NULL),(132,14,'AtlÃ©tico Mineiro','Ronaldinho GaÃºcho','m','m.a','Ronaldinho GaÃºcho.jpg','19/09/2013 - 13:01:15',NULL),(133,14,'AtlÃ©tico Mineiro','DÃ¡tolo','a','a.t','DÃ¡tolo.jpg','19/09/2013 - 13:02:15',NULL),(134,14,'AtlÃ©tico Mineiro','Fernandinho','a','a.t','Fernandinho.jpg','19/09/2013 - 13:02:54',NULL),(135,14,'AtlÃ©tico Mineiro','Diego Tardelli','a','a.t','Diego Tardelli.jpg','19/09/2013 - 13:03:35',NULL),(136,14,'AtlÃ©tico Mineiro','Alecsandro','a','a.t','Alecsandro.jpg','19/09/2013 - 13:04:08',NULL),(137,15,'Cruzeiro','FÃ¡bio','g','g.o','t_fabio_fabio_deivson_lopes_maciel-2165491.jpg','23/09/2013 - 13:21:46',NULL),(138,15,'Cruzeiro','DedÃ©','z','z.o','fotos-dede-zagueiro-cartolafc-60819-300x300.jpg','23/09/2013 - 13:24:14',NULL),(139,15,'Cruzeiro','Bruno Rodrigo','z','z.o','Bruno-Rodrigo zg.jpg','23/09/2013 - 13:24:56',NULL),(141,15,'Cruzeiro','Igor','g','g.o','Igor go.jpg','23/09/2013 - 13:28:55',NULL),(142,15,'Cruzeiro','Marcos Venancio','z','z.o','Marcos Venancio zg.jpg','23/09/2013 - 13:29:51',NULL),(143,15,'Cruzeiro','Victorino','z','z.o','Mauricio Victorino Zg.jpg','23/09/2013 - 13:30:43',NULL),(144,15,'Cruzeiro','Egidio','l','L.e','EgÃ­dio zg.jpg','23/09/2013 - 13:31:22',NULL),(145,15,'Cruzeiro','Everton Ribeiro','v','v.o','Everton-Ribeiro meia.jpg','23/09/2013 - 13:32:31',NULL),(146,15,'Cruzeiro','Henrique Pacheco','v','v.o','Henrique Pacheco meia.jpg','23/09/2013 - 13:33:27',NULL),(147,15,'Cruzeiro','Rafael','g','G.o','Rafel Pires Go.jpg','23/09/2013 - 13:34:31',NULL),(148,15,'Cruzeiro','Ricardo Goulart','v','v.o','Ricardo Goulart meia.jpg','23/09/2013 - 13:36:09',NULL),(149,15,'Cruzeiro','Nilton Ferreira','v','v.o','Nilton Ferreira meia.jpg','23/09/2013 - 13:37:05',NULL),(150,15,'Cruzeiro','LÃ©o','z','z.o','Renan Simoes.jpg','23/09/2013 - 13:39:05',NULL),(151,15,'Cruzeiro','Leandro Guerreiro','m','m.a','Leandro guerreiro meia.jpg','23/09/2013 - 13:39:51',NULL),(152,15,'Cruzeiro','Paulo Marcos ','z','z.o','Paulo Marcos zg.jpg','23/09/2013 - 13:43:42',NULL),(153,15,'Cruzeiro','Tinga','m','m.a','Tinga meia.jpg','23/09/2013 - 13:44:52',NULL),(154,15,'Cruzeiro','JÃºlio Baptista','m','m.a','JÃºlio Baptista.jpg','23/09/2013 - 13:45:32',NULL),(155,15,'Cruzeiro','Martinuccio','m','m.a','MARTINUCCIO meia.jpg','23/09/2013 - 13:46:19',NULL),(156,15,'Cruzeiro','Willian','a','a.t','Willian at.jpg','23/09/2013 - 13:47:13',NULL),(157,15,'Cruzeiro','Dagoberto','a','a.t','Dagoberto.jpg','23/09/2013 - 13:48:04',NULL),(158,15,'Cruzeiro','Borges','a','a.t','Borges.jpg','23/09/2013 - 13:48:39',NULL),(159,15,'Cruzeiro','Ramon','a','a.t','Anselmo Ramon at.jpg','23/09/2013 - 13:49:15',NULL),(160,15,'Cruzeiro','Luan','a','a.t','Luan.jpg','23/09/2013 - 13:49:50',NULL),(161,15,'Cruzeiro','Souza','m','m.a','Souza.jpg','23/09/2013 - 13:50:36',NULL);
/*!40000 ALTER TABLE `tbl_jogadores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_lancamentos`
--

DROP TABLE IF EXISTS `tbl_lancamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_lancamentos` (
  `LANC_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `LANC_NOME` varchar(50) NOT NULL,
  `LANC_VALOR` varchar(10) NOT NULL,
  `LANC_IMG` text,
  `LANC_DTCAD` varchar(30) NOT NULL,
  `LANC_DTALT` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`LANC_CODIGO`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_lancamentos`
--

LOCK TABLES `tbl_lancamentos` WRITE;
/*!40000 ALTER TABLE `tbl_lancamentos` DISABLE KEYS */;
INSERT INTO `tbl_lancamentos` (`LANC_CODIGO`, `LANC_NOME`, `LANC_VALOR`, `LANC_IMG`, `LANC_DTCAD`, `LANC_DTALT`) VALUES (1,'KakÃ¡ Santoro','50.00',NULL,'20/09',NULL);
/*!40000 ALTER TABLE `tbl_lancamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_partidas`
--

DROP TABLE IF EXISTS `tbl_partidas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_partidas` (
  `PART_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `PART_TORNEIO` varchar(50) NOT NULL,
  `PART_RODADA` varchar(50) NOT NULL,
  `PART_TIME_A_COD` varchar(5) DEFAULT NULL,
  `PART_TIME_A` varchar(50) NOT NULL,
  `PART_TIME_B_COD` varchar(5) DEFAULT NULL,
  `PART_TIME_B` varchar(50) NOT NULL,
  `PART_TIME_A_PLACAR` varchar(3) NOT NULL,
  `PART_TIME_B_PLACAR` varchar(3) NOT NULL,
  `PART_DT_H_I` varchar(50) DEFAULT NULL,
  `PART_DT_H_F` varchar(50) DEFAULT NULL,
  `PART_DT_CAD` varchar(50) NOT NULL,
  `PART_DT_ALT` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`PART_CODIGO`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_partidas`
--

LOCK TABLES `tbl_partidas` WRITE;
/*!40000 ALTER TABLE `tbl_partidas` DISABLE KEYS */;
INSERT INTO `tbl_partidas` (`PART_CODIGO`, `PART_TORNEIO`, `PART_RODADA`, `PART_TIME_A_COD`, `PART_TIME_A`, `PART_TIME_B_COD`, `PART_TIME_B`, `PART_TIME_A_PLACAR`, `PART_TIME_B_PLACAR`, `PART_DT_H_I`, `PART_DT_H_F`, `PART_DT_CAD`, `PART_DT_ALT`) VALUES (7,'1','01','10','Paulo','3','Ronaldo','2','1','17:01','17:01','18/10','19/10/2013'),(6,'1','01','11','KakÃ¡','9','Luca','','','','','18/10',NULL),(5,'1','01','12','Jorge','13','Daniel','','','','','18/10',NULL),(8,'1','02','8','Diones','10','Paulo','','','','','18/10',NULL),(9,'1','02','3','Ronaldo','11','KakÃ¡','','','','','18/10',NULL),(10,'1','02','9','Luca','12','Jorge','','','','','18/10',NULL),(11,'1','03','13','Daniel','8','Diones','','','','','18/10',NULL),(12,'1','03','3','Ronaldo','9','Luca','','','','','18/10',NULL),(13,'1','03','12','Jorge','10','Paulo','','','','','18/10',NULL),(14,'1','04','8','Diones','12','Jorge','','','','','18/10',NULL),(15,'1','04','10','Paulo','11','KakÃ¡','','','','','18/10',NULL),(16,'1','04','13','Daniel','3','Ronaldo','','','','','18/10',NULL),(17,'1','05','9','Luca','13','Daniel','','','','','18/10',NULL),(18,'1','05','12','Jorge','3','Ronaldo','','','','','18/10',NULL),(19,'1','05','11','KakÃ¡','8','Diones','','','','','18/10',NULL),(20,'1','06','8','Diones','9','Luca','','','','','18/10',NULL),(21,'1','06','13','Daniel','10','Paulo','','','','','18/10',NULL),(22,'1','06','12','Jorge','11','KakÃ¡','','','','','18/10',NULL),(23,'1','07','11','KakÃ¡','13','Daniel','','','','','18/10',NULL),(24,'1','07','10','Paulo','9','Luca','','','','','18/10',NULL),(25,'1','07','3','Ronaldo','8','Diones','','','','','18/10',NULL),(26,'1','08','13','Daniel','12','Jorge','','','','','18/10',NULL),(27,'1','08','9','Luca','11','KakÃ¡','','','','','18/10',NULL),(28,'1','08','3','Ronaldo','10','Paulo','','','','','18/10',NULL),(29,'1','09','10','Paulo','8','Diones','','','','','18/10',NULL),(30,'1','09','11','KakÃ¡','3','Ronaldo','','','','','18/10',NULL),(47,'1','09','12','Jorge','9','Luca','','','','','19/10',NULL),(32,'1','10','8','Diones','13','Daniel','','','','','18/10',NULL),(33,'1','10','9','Luca','3','Ronaldo','','','','','18/10',NULL),(34,'1','10','10','Paulo','12','Jorge','','','','','18/10',NULL),(35,'1','11','12','Jorge','8','Diones','','','','','18/10',NULL),(36,'1','11','11','KakÃ¡','10','Paulo','','','','','18/10',NULL),(37,'1','11','3','Ronaldo','13','Daniel','','','','','18/10',NULL),(38,'1','12','13','Daniel','9','Luca','','','','','18/10',NULL),(39,'1','12','3','Ronaldo','12','Jorge','','','','','18/10',NULL),(40,'1','12','8','Diones','11','KakÃ¡','','','','','18/10',NULL),(41,'1','13','9','Luca','8','Diones','','','','','18/10',NULL),(42,'1','13','10','Paulo','13','Daniel','','','','','18/10',NULL),(43,'1','13','11','KakÃ¡','12','Jorge','','','','','18/10',NULL),(44,'1','14','13','Daniel','11','KakÃ¡','','','','','18/10',NULL),(45,'1','14','9','Luca','10','Paulo','','','','','18/10',NULL),(46,'1','14','8','Diones','3','Ronaldo','','','','','18/10',NULL);
/*!40000 ALTER TABLE `tbl_partidas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_regulamento`
--

DROP TABLE IF EXISTS `tbl_regulamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_regulamento` (
  `REG_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `REG_NOME` varchar(50) NOT NULL,
  `REG_ASSUNTO` varchar(50) NOT NULL,
  `REG_MENSAGEM` text NOT NULL,
  `REG_DTCAD` varchar(30) NOT NULL,
  `REG_DTALT` varchar(30) NOT NULL,
  PRIMARY KEY (`REG_CODIGO`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_regulamento`
--

LOCK TABLES `tbl_regulamento` WRITE;
/*!40000 ALTER TABLE `tbl_regulamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_regulamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_usuarios`
--

DROP TABLE IF EXISTS `tbl_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_usuarios` (
  `USUARIO_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `USUARIO_NOME` varchar(50) NOT NULL,
  `USUARIO_SNOME` varchar(50) NOT NULL,
  `USUARIO_CPF` varchar(14) NOT NULL,
  `USUARIO_EMAIL` varchar(50) NOT NULL,
  `USUARIO_PASS` varchar(50) NOT NULL,
  `USUARIO_NIVEL` char(1) DEFAULT NULL,
  `USUARIO_CEL` varchar(20) NOT NULL,
  `USUARIO_IMG` text,
  `USUARIO_IMG2` text,
  `USUARIO_DTCAD` varchar(30) NOT NULL,
  `USUARIO_DTALT` varchar(30) DEFAULT NULL,
  `USUARIO_TL` char(1) DEFAULT NULL,
  `USUARIO_RL` varchar(5) DEFAULT NULL,
  `USUARIO_PL` varchar(5) DEFAULT NULL,
  `USUARIO_JL` varchar(5) DEFAULT NULL,
  `USUARIO_VL` varchar(5) DEFAULT NULL,
  `USUARIO_EL` varchar(5) DEFAULT NULL,
  `USUARIO_DL` varchar(5) DEFAULT NULL,
  `USUARIO_GPL` varchar(5) DEFAULT NULL,
  `USUARIO_GCL` varchar(5) DEFAULT NULL,
  `USUARIO_SGL` varchar(5) DEFAULT NULL,
  `USUARIO_TC` char(1) DEFAULT NULL,
  `USUARIO_RC` varchar(5) DEFAULT NULL,
  `USUARIO_PC` varchar(5) DEFAULT NULL,
  `USUARIO_JC` varchar(5) DEFAULT NULL,
  `USUARIO_VC` varchar(5) DEFAULT NULL,
  `USUARIO_EC` varchar(5) DEFAULT NULL,
  `USUARIO_DC` varchar(5) DEFAULT NULL,
  `USUARIO_GPC` varchar(5) DEFAULT NULL,
  `USUARIO_GCC` varchar(5) DEFAULT NULL,
  `USUARIO_SGC` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`USUARIO_CODIGO`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usuarios`
--

LOCK TABLES `tbl_usuarios` WRITE;
/*!40000 ALTER TABLE `tbl_usuarios` DISABLE KEYS */;
INSERT INTO `tbl_usuarios` (`USUARIO_CODIGO`, `USUARIO_NOME`, `USUARIO_SNOME`, `USUARIO_CPF`, `USUARIO_EMAIL`, `USUARIO_PASS`, `USUARIO_NIVEL`, `USUARIO_CEL`, `USUARIO_IMG`, `USUARIO_IMG2`, `USUARIO_DTCAD`, `USUARIO_DTALT`, `USUARIO_TL`, `USUARIO_RL`, `USUARIO_PL`, `USUARIO_JL`, `USUARIO_VL`, `USUARIO_EL`, `USUARIO_DL`, `USUARIO_GPL`, `USUARIO_GCL`, `USUARIO_SGL`, `USUARIO_TC`, `USUARIO_RC`, `USUARIO_PC`, `USUARIO_JC`, `USUARIO_VC`, `USUARIO_EC`, `USUARIO_DC`, `USUARIO_GPC`, `USUARIO_GCC`, `USUARIO_SGC`) VALUES (3,'Ronaldo','Adriano','','naldo_santoro@hotmail.com','dmFpY29yaW50aGlhbnM=','2','11Â 9 6776-3280','431167_313947215329952_449475468_n.jpg',NULL,'14/08/2013 - 00:11:05','14/08/2013 - 00:25:55','1',NULL,'9',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','7',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(10,'Paulo','JASON Santoro','111.111.111-11','progersantoro@gmail.com','UEAx','2','11Â 9Â 8668-2396','image.jpg',NULL,'14/08/2013 - 09:31:05','17/10/2013 - 23:25:49','1',NULL,'2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','6',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9,'Luca ','Marques','','luca@acusterm.com.br','bWF0YWRvcmRlYmFtYmk=','2','11Â 9Â 7805-0048','Luca.jpg',NULL,'14/08/2013 - 08:32:37','16/08/2013 - 09:19:53','1',NULL,'3',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','5',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(8,'Diones','Diego','333.827.088-76','ddas1507@gmail.com','RGlvbmVzMTUwNw==','1','11Â 9Â 9547-8869','DSC00085.JPG','barca-fundo.jpg','14/08/2013 - 01:23:13','14/09/2013 - 12:34:29','1',NULL,'4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(11,'KakÃ¡','Santoro','0','carlos_santoro9@hotmail.com','MTUwMzg0','1','11Â 9Â 8305-2487','1208607_464668800299100_1405606158_n.jpg',NULL,'14/08/2013 - 14:54:08','18/09/2013 - 09:44:53','1',NULL,'5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','3',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(12,'Jorge','Luiz','314.483.788-18','jorgepan_vimave@hotmail.com','MTAxMjE5','1','11Â 9Â 7569-6365','EU.png',NULL,'16/08/2013 - 20:53:55','04/09/2013 - 20:47:06','1',NULL,'6',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(13,'Daniel','Marinho','','Dmoliveira09@hotmail.com','RG1vMzA5OA==','2','11Â 9Â 6667-0091','182781_164752080243602_4217843_n.jpg',NULL,'17/08/2013 - 19:04:09','17/09/2013 - 22:53:54','1',NULL,'7',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `tbl_usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-10-21  9:56:41
