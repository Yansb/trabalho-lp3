-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: myb1
-- ------------------------------------------------------
-- Server version	8.0.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `chamado`
--

DROP TABLE IF EXISTS `chamado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chamado` (
  `numero_chamado` int(11) NOT NULL AUTO_INCREMENT,
  `abertura` datetime NOT NULL,
  `tombo_patrimonio` varchar(100) NOT NULL DEFAULT '0',
  `estado` varchar(45) NOT NULL,
  `arquivo` varchar(45) DEFAULT NULL,
  `descricao` varchar(45) NOT NULL,
  `id_problema` int(10) NOT NULL,
  `cpf_usuario` int(12) NOT NULL,
  `codigo_setor` int(11) NOT NULL,
  `cpf_funcionario` int(11) DEFAULT NULL,
  `fim` datetime DEFAULT '0000-00-00 00:00:00',
  `obs` varchar(45) DEFAULT NULL,
  `prioridade` varchar(45) DEFAULT 'Normal',
  `link` varchar(100) DEFAULT NULL,
  `plugin` varchar(45) DEFAULT NULL,
  `lab` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`numero_chamado`),
  KEY `id_problema` (`id_problema`),
  KEY `cpf_usuario_idx` (`cpf_usuario`),
  KEY `cpf_funcionario_idx` (`cpf_funcionario`),
  KEY `codigo_setor_idx` (`codigo_setor`),
  KEY `cod_setor_idx` (`codigo_setor`),
  CONSTRAINT `cod_setor` FOREIGN KEY (`codigo_setor`) REFERENCES `setor` (`codigo`),
  CONSTRAINT `cpf_funcionario` FOREIGN KEY (`cpf_funcionario`) REFERENCES `funcionario` (`cpf`),
  CONSTRAINT `cpf_usuario` FOREIGN KEY (`cpf_usuario`) REFERENCES `usuario` (`cpf`),
  CONSTRAINT `id_problema` FOREIGN KEY (`id_problema`) REFERENCES `problema` (`idproblema`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chamado`
--

LOCK TABLES `chamado` WRITE;
/*!40000 ALTER TABLE `chamado` DISABLE KEYS */;
INSERT INTO `chamado` VALUES (1,'2019-09-08 00:48:29','sim','Em Atendimento','','Máquina quiemada ',3,697596326,7,4545454,'2018-09-08 00:48:29','muita treta vixe ','Normal',NULL,NULL,NULL),(2,'2019-09-08 00:50:47','sim','Em Atendimento','','Máquina linda',2,697596326,13,4545454,'0000-00-00 00:00:00','pouca treta ','Normal',NULL,NULL,NULL),(3,'2019-09-08 01:08:36','sim','Em Aberto','','Máquina linda',2,697596326,13,NULL,'0000-00-00 00:00:00','pouca treta ','Normal',NULL,NULL,NULL),(4,'2019-09-08 03:26:31','sim','Em Atendimento',NULL,'Máquina queimada',4,69759635,2,15241882,'0000-00-00 00:00:00','Sem Detalhes','Alta',NULL,NULL,NULL),(5,'2019-09-08 03:26:29','sim','Em Atendimento',NULL,'Máquina lenta',5,697596326,7,71254136,'0000-00-00 00:00:00','Sem Detalhes','Baixa',NULL,NULL,NULL),(6,'2019-09-08 03:26:30','sim','Em Atendimento',NULL,'Máquina sem cabo',6,69759635,5,69649635,'0000-00-00 00:00:00','Detalhes do Problema','Normal',NULL,NULL,NULL),(13,'2019-09-08 03:16:05','sim','Encaminhado','','teste ',2,69759635,3,4545454,'0000-00-00 00:00:00','Detalhe do  problema','Normal',NULL,NULL,NULL),(14,'2019-09-08 03:24:48','sim','Em Aberto','','Máquina quiemada ',2,69759635,13,NULL,'0000-00-00 00:00:00','Detalhe do  problema','Normal',NULL,NULL,NULL),(17,'2019-09-14 22:52:14','nao','Em Atendimento','','Computador com defeito  ',2,697596354,3,4545454,'0000-00-00 00:00:00','Detalhe do  problema 3x ','Normal',NULL,NULL,NULL),(18,'2019-09-15 20:11:35','nao','Finalizado','','Máquina não liga ',2,712511433,3,69649635,'2019-09-15 20:27:01','Detalhe do  problema','Normal',NULL,NULL,NULL),(20,'2019-09-16 03:37:49','marcado tombo ','Em Atendimento',NULL,'git',15,15152415,3,69649635,'0000-00-00 00:00:00',NULL,'Normal','http://localhost/lp/View/Software.php','www.com.br','Lab2'),(21,'2019-09-16 05:22:04','0','Em Aberto','anexo redes.png','Computador com defeito  ',2,695847222,5,NULL,'0000-00-00 00:00:00','não sei o que aconteceu ','Normal',NULL,NULL,NULL),(22,'2019-09-16 05:26:29','0','Em Aberto','','Máquina quiemada ',1,696496357,1,NULL,'0000-00-00 00:00:00','Detalhe do  problema','Normal',NULL,NULL,NULL),(23,'2019-09-16 05:27:48','0','Finalizado',NULL,'o cabuloso ',15,696496357,3,69649635,'0000-00-00 00:00:00',NULL,'Normal','http://localhost/lp/View/Software.php','www.com.br','Lab2'),(24,'2019-09-16 05:28:31','0','Em Aberto',NULL,'o cabuloso ',15,69678945,3,NULL,'0000-00-00 00:00:00',NULL,'Normal','http://localhost/lp/View/Software.php','www.com.br','Lab2'),(25,'2019-09-16 05:41:01','0','Em Aberto',NULL,'git',15,12514684,3,NULL,'0000-00-00 00:00:00',NULL,'Normal','http://localhost/lp/View/Software.php','www.com.br','Lab1');
/*!40000 ALTER TABLE `chamado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `funcionario` (
  `cpf` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `cargo` varchar(45) NOT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `codigo` int(10) NOT NULL,
  PRIMARY KEY (`cpf`),
  KEY `codigo_setor_idx` (`codigo`),
  CONSTRAINT `codigo_setor` FOREIGN KEY (`codigo`) REFERENCES `setor` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionario`
--

LOCK TABLES `funcionario` WRITE;
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
INSERT INTO `funcionario` VALUES (456456,'caio','gerente','caio','12345679','7177777777','caio.b@gmail.com',4),(4545454,'admin','Admin','admin','admin','4554544','admin@admin',3),(15241882,'gerente','Gerente','gerente','gerente','15424','gerente@gerente.com',1),(69649635,'Tecnico','Tecnico','tecnico','tecnico','7124155','tecnico@tecnio.com',3),(71254136,'matheus souza dos santos ','admin','m santos ','564522112','71920645124','silva@lima.com',13),(423456456,'joao','técnico','joao','12345678','7188888888','j.oao@gmail.com',3),(456456456,'matheus ','admin','msantos','152418','71920645124','m@1524418.cm',1),(456523456,'yan silva','gerente','yansb','12345676','72152402','matheus@silva.com',2);
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historico`
--

DROP TABLE IF EXISTS `historico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `historico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `DataHora` varchar(45) NOT NULL,
  `descricao` varchar(45) NOT NULL,
  `numero_chamado` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `numer_chamado_idx` (`numero_chamado`),
  CONSTRAINT `numer_chamado` FOREIGN KEY (`numero_chamado`) REFERENCES `chamado` (`numero_chamado`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historico`
--

LOCK TABLES `historico` WRITE;
/*!40000 ALTER TABLE `historico` DISABLE KEYS */;
INSERT INTO `historico` VALUES (1,'2019','Feita alteração',4),(2,'2019','Alteração feita',5),(3,'2019','Status mudado',6),(4,'13-09-2019 11:00:38','bahia',5),(5,'15-09-2019 07:14:38','asas',5),(6,'15-09-2019 07:16:56','asas',5),(7,'15-09-2019 07:17:04','asas',5),(8,'15-09-2019 07:22:42','adad',5),(9,'15-09-2019 07:52:16','maquina em manutenção',1),(10,'15-09-2019 07:55:02','maquina formatando em bancada ',1),(11,'15-09-2019 17:06:27','teste',17),(12,'15-09-2019 17:17:00','teste 2',17),(13,'15-09-2019 17:17:14','teste 3',17),(14,'15-09-2019 17:45:42','Teste Finalização ',17),(15,'15-09-2019 20:12:27','teste 1',18),(16,'2019-09-15 20:14:57','finalizando teste',18),(17,'2019-09-15 20:20:35','teste',18),(18,'2019-09-15 20:27:01','xx',18),(19,'16-09-2019 00:45:51','tentar um novo historico',18),(20,'16-09-2019 00:47:40','a',18),(21,'16-09-2019 05:48:19','asas',20),(22,'16-09-2019 05:48:29','teste',20),(23,'16-09-2019 05:49:05','vixe',18),(24,'16-09-2019 05:50:35','pf',18),(25,'16-09-2019 05:56:06','teste 12',23),(26,'16-09-2019 05:56:22','finalizando',23),(27,'16-09-2019 05:57:14','asas',23);
/*!40000 ALTER TABLE `historico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `problema`
--

DROP TABLE IF EXISTS `problema`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `problema` (
  `idproblema` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idproblema`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `problema`
--

LOCK TABLES `problema` WRITE;
/*!40000 ALTER TABLE `problema` DISABLE KEYS */;
INSERT INTO `problema` VALUES (1,'problema '),(2,'problema 2'),(3,'problema 3 '),(4,'Ar condicionado sem funcionar'),(5,'SQL workbench não conecta'),(6,'Luz queimada'),(14,''),(15,'Instalação de software');
/*!40000 ALTER TABLE `problema` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setor`
--

DROP TABLE IF EXISTS `setor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `setor` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setor`
--

LOCK TABLES `setor` WRITE;
/*!40000 ALTER TABLE `setor` DISABLE KEYS */;
INSERT INTO `setor` VALUES (1,'adm1','7172152418','Financeiro'),(2,'rh@setor.com','7199999999','Recursos Humanos'),(3,'ti@setor.com','7199999999','Tecnologia da Informação'),(4,'comunicacao@setor.com','7199999999','Comunicação'),(5,'adm@setor.com','7188888888','Administrativo'),(6,'financeiro@setor.com','717777777','Financeiro'),(7,'academica@setor.com','716666666','Academica'),(13,'matheus@asas.com','3333333','adm2');
/*!40000 ALTER TABLE `setor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `cpf` int(20) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (111,'matheus ','matheus@hotmail.com','71920645124'),(333,'matheus ','matheus@hotmail.com','71920645124'),(12514684,'teste','asdasd@asdasd.com','71920645124'),(15152415,'Mtheus ','matheus@hotmail.com','71920645124'),(69649635,'matheus tsila','m@1524418','7192065445'),(69678945,'lucas lima silva ','asdasd@asdasd.com','71920645124'),(69759635,'matheus teste ','asdasd@asdasd.com','71920645124'),(695847222,'matheus lucas','setor@adm.com','71920645124'),(696495455,'dad','asdasd@asdasd.com','71920645124'),(696496357,'matheus ','asdasd@asdasd.com','71920645124'),(697596325,'caio bruno','bruno@pittar','71920645124'),(697596326,'caio bruno 4','bruno@pittar','71920645124'),(697596354,'matheus santos ','matheus@hotmail.com3','78423665'),(697596751,'Maria','maria@gmail.com','71920645124'),(697596951,'M SOUZA','m@as','5444'),(697596952,'Yan Santana','yansbarreiro@gmail.com','71920645124'),(697596961,'João','joao@gmail.com','71920645124'),(712511433,'lucas joão ','lucas@joao.com','71920645124');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'myb1'
--

--
-- Dumping routines for database 'myb1'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-09-16  7:40:10
