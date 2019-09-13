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
  `tombo_patrimonio` varchar(10) NOT NULL DEFAULT '0',
  `estado` varchar(45) NOT NULL,
  `arquivo` varchar(45) DEFAULT NULL,
  `descricao` varchar(45) NOT NULL,
  `id_problema` int(10) NOT NULL,
  `cpf_usuario` int(12) NOT NULL,
  `codigo_setor` int(11) NOT NULL,
  `cpf_funcionario` int(11) DEFAULT NULL,
  `fim` datetime DEFAULT NULL,
  `obs` varchar(45) DEFAULT NULL,
  `prioridade` varchar(45) DEFAULT 'Normal',
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chamado`
--

LOCK TABLES `chamado` WRITE;
/*!40000 ALTER TABLE `chamado` DISABLE KEYS */;
INSERT INTO `chamado` VALUES (1,'2019-09-08 00:48:29','sim','Em Aberto','','Máquina quiemada ',3,697596326,1,456456,NULL,'muita treta vixe ','Normal'),(2,'2019-09-08 00:50:47','sim','Em Aberto','','Máquina linda',2,697596326,13,NULL,NULL,'pouca treta ','Normal'),(3,'2019-09-08 01:08:36','sim','Fechado','','Máquina linda',2,697596326,13,NULL,NULL,'pouca treta ','Normal'),(4,'2019-09-08 03:26:31','sim','Em Aberto',NULL,'Máquina queimada',4,69759635,2,NULL,NULL,'Sem Detalhes','Alta'),(5,'2019-09-08 03:26:29','sim','Em Aberto',NULL,'Máquina lenta',5,697596326,3,NULL,NULL,'Sem Detalhes','Baixa'),(6,'2019-09-08 03:26:30','sim','Em Aberto',NULL,'Máquina sem cabo',6,69759635,5,NULL,NULL,'Detalhes do Problema','Normal'),(13,'2019-09-08 03:16:05','sim','Em Aberto','','teste ',2,69759635,1,NULL,NULL,'Detalhe do  problema','Normal'),(14,'2019-09-08 03:24:48','sim','Em Aberto','','Máquina quiemada ',2,69759635,13,NULL,NULL,'Detalhe do  problema','Normal'),(15,'2019-09-08 03:25:46','sim','Em Aberto','','Máquina não liga',3,69649635,1,NULL,NULL,'Detalhe do  problema','Normal'),(16,'2019-09-08 03:26:28','sim','Em Aberto','','Máquina fudeu ',1,69649635,13,NULL,NULL,'Detalhe do  problema','Normal');
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
INSERT INTO `funcionario` VALUES (456456,'caio','gerente','caio','12345679','7177777777','caio.b@gmail.com',4),(4545454,'admin','Admin','admin','admin','4554544','admin@admin',3),(15241882,'gerente','Gerente','gerente','gerente','15424','gerente@gerente.com',1),(69649635,'Tecnico','Tecnico','tecnico','tecnico','7124155','tecnico@tecnio.com',3),(71254136,'matheus souza dos santos ','admin','m santos ','564522112','71920645124','silva@lima.com',13),(423456456,'joao','técnico','joao','12345678','7188888888','j.oao@gmail.com',3),(456456456,'matheus ','admin','msantos','152418','71920645124','m@1524418.cm',1),(456523456,'yan','admin','yansb','12345676','71992731090','yansb@gmail.com',2);
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historico_alteracao`
--

DROP TABLE IF EXISTS `historico_alteracao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `historico_alteracao` (
  `idhistorico_alteracao` int(11) NOT NULL,
  `periodo` varchar(45) NOT NULL,
  `descrição` varchar(45) NOT NULL,
  `numero_chamado` int(11) NOT NULL,
  PRIMARY KEY (`idhistorico_alteracao`),
  KEY `numer_chamado_idx` (`numero_chamado`),
  CONSTRAINT `numer_chamado` FOREIGN KEY (`numero_chamado`) REFERENCES `chamado` (`numero_chamado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historico_alteracao`
--

LOCK TABLES `historico_alteracao` WRITE;
/*!40000 ALTER TABLE `historico_alteracao` DISABLE KEYS */;
INSERT INTO `historico_alteracao` VALUES (1,'2019','Feita alteração',4),(2,'2019','Alteração feita',5),(3,'2019','Status mudado',6);
/*!40000 ALTER TABLE `historico_alteracao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `problema`
--

DROP TABLE IF EXISTS `problema`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `problema` (
  `idproblema` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  PRIMARY KEY (`idproblema`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `problema`
--

LOCK TABLES `problema` WRITE;
/*!40000 ALTER TABLE `problema` DISABLE KEYS */;
INSERT INTO `problema` VALUES (1,'problema '),(2,'problema 2'),(3,'problema 3 '),(4,'Ar condicionado sem funcionar'),(5,'SQL workbench não conecta'),(6,'Luz queimada'),(7,'problema 4 ');
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setor`
--

LOCK TABLES `setor` WRITE;
/*!40000 ALTER TABLE `setor` DISABLE KEYS */;
INSERT INTO `setor` VALUES (1,'Setor@financeiro.com','7172152418','Financeiro'),(2,'rh@setor.com','7199999999','Recursos Humanos'),(3,'ti@setor.com','7199999999','Tecnologia da Informação'),(4,'comunicacao@setor.com','7199999999','Comunicação'),(5,'adm@setor.com','7188888888','Administrativo'),(6,'financeiro@setor.com','717777777','Financeiro'),(7,'academica@setor.com','716666666','Academica'),(13,'matheus@asas.com','3333333','adm1');
/*!40000 ALTER TABLE `setor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `software`
--

DROP TABLE IF EXISTS `software`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `software` (
  `idsoftware` int(11) NOT NULL AUTO_INCREMENT,
  `laboratorio` varchar(45) NOT NULL,
  `link_download` varchar(45) NOT NULL,
  `num_chamado` int(11) NOT NULL,
  `softwarecol` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`idsoftware`),
  KEY `num_chamado_idx` (`num_chamado`),
  CONSTRAINT `num_chamado` FOREIGN KEY (`num_chamado`) REFERENCES `chamado` (`numero_chamado`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `software`
--

LOCK TABLES `software` WRITE;
/*!40000 ALTER TABLE `software` DISABLE KEYS */;
INSERT INTO `software` VALUES (1,'1','https://www.google.com/',3,NULL),(2,'2','https://www.google.com/',4,NULL),(3,'1','https://www.google.com/',5,NULL);
/*!40000 ALTER TABLE `software` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `cpf` int(12) NOT NULL,
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
INSERT INTO `usuario` VALUES (69649635,'matheus tsila','m@1524418','7192065445'),(69759635,'matheus teste ','asdasd@asdasd.com','71920645124'),(697596325,'caio bruno','bruno@pittar','71920645124'),(697596326,'caio bruno 4','bruno@pittar','71920645124'),(697596354,'matheus santos ','matheus@hotmail.com3','78423665'),(697596751,'Maria','maria@gmail.com','71920645124'),(697596951,'M SOUZA','m@as','5444'),(697596952,'Yan Santana','yansbarreiro@gmail.com','71920645124'),(697596961,'João','joao@gmail.com','71920645124');
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

-- Dump completed on 2019-09-12 21:51:33
