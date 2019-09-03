CREATE DATABASE  IF NOT EXISTS `myb1` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `myb1`;
-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: localhost    Database: myb1
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
  `data` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `tombo_patrimonio` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `arquivo` varchar(45) DEFAULT NULL,
  `nome` varchar(45) NOT NULL,
  `id_problema` int(10) NOT NULL,
  `cpf_usuario` int(11) NOT NULL,
  `codigo_setor` int(11) NOT NULL,
  `cpf_funcionario` int(11) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chamado`
--

LOCK TABLES `chamado` WRITE;
/*!40000 ALTER TABLE `chamado` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `problema`
--

LOCK TABLES `problema` WRITE;
/*!40000 ALTER TABLE `problema` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setor`
--

LOCK TABLES `setor` WRITE;
/*!40000 ALTER TABLE `setor` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `software`
--

LOCK TABLES `software` WRITE;
/*!40000 ALTER TABLE `software` DISABLE KEYS */;
/*!40000 ALTER TABLE `software` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `cpf` int(11) NOT NULL,
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
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

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

-- Dump completed on 2019-09-03  8:57:06
