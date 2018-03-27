CREATE DATABASE  IF NOT EXISTS `dbintranet` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dbintranet`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: dbintranet
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.30-MariaDB

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
-- Table structure for table `accesos`
--

DROP TABLE IF EXISTS `accesos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accesos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `acc_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acc_nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acc_enlace` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acc_descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `acc_estado` tinyint(1) NOT NULL DEFAULT '1',
  `idusuarioregistra` int(10) unsigned NOT NULL,
  `idusuariomodifica` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `accesos_idusuarioregistra_foreign` (`idusuarioregistra`),
  KEY `accesos_idusuariomodifica_foreign` (`idusuariomodifica`),
  CONSTRAINT `accesos_idusuariomodifica_foreign` FOREIGN KEY (`idusuariomodifica`) REFERENCES `users` (`id`),
  CONSTRAINT `accesos_idusuarioregistra_foreign` FOREIGN KEY (`idusuarioregistra`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accesos`
--

LOCK TABLES `accesos` WRITE;
/*!40000 ALTER TABLE `accesos` DISABLE KEYS */;
INSERT INTO `accesos` VALUES (1,'archivo/acceso/correo.png','CORREO','https://correo.fonabosque.gob.bo/','Correo Electrónico Institucional, uso exclusivo del personal de FONABOSQUE.',1,1,1,'2018-03-12 12:30:00','2018-03-12 12:30:00'),(2,'archivo/acceso/sigec.png','SIGEC','http://sigec.fonabosque.gob.bo/','Sistema de Gestión de Correspondencia, uso exlusivo del perosnal de FONABOSQUE.',1,1,1,'2018-03-12 12:30:00','2018-03-12 12:30:00'),(3,'archivo/acceso/biometrico.png','PERSONAL','http://personal.fonabosque.gob.bo/','Sistema Integral de Recursos Humanos, para consultar sus marcaciones y registrar sus boletas de salida',1,1,1,'2018-03-12 12:30:00','2018-03-12 12:30:00'),(4,'archivo/acceso/sigma.png','SIGMA/SIGEP','https://sigep.sigma.gob.bo/','Sistema de Gestion Pública, ingreso para entidades públicas y beneficiarios',1,1,1,'2018-03-12 12:30:00','2018-03-12 12:30:00'),(5,'archivo/acceso/mmaya2.png','MMAyA','http://www.mmaya.gob.bo/','Sitio Oficial (Págian Web) del Ministerio de Medio Ambiente y Agua. <b>www.mmaya.gob.bo</b>',1,1,1,'2018-03-12 12:30:00','2018-03-12 12:30:00'),(6,'archivo/acceso/web.png','SITIO WEB','http://www.fonabosque.gob.bo/','Sitio Oficial (Págian Web) de la institución. <b>www.fonabosque.gob.bo</b>',1,1,1,'2018-03-12 12:30:00','2018-03-12 12:30:00');
/*!40000 ALTER TABLE `accesos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ban_nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ban_nombreoriginal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ban_descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ban_estado` tinyint(1) NOT NULL DEFAULT '1',
  `idusuarioregistra` int(10) unsigned NOT NULL,
  `idusuariomodifica` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `banners_idusuarioregistra_foreign` (`idusuarioregistra`),
  KEY `banners_idusuariomodifica_foreign` (`idusuariomodifica`),
  CONSTRAINT `banners_idusuariomodifica_foreign` FOREIGN KEY (`idusuariomodifica`) REFERENCES `users` (`id`),
  CONSTRAINT `banners_idusuarioregistra_foreign` FOREIGN KEY (`idusuarioregistra`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banners`
--

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` VALUES (1,'archivo/banner/presentacion4.png','presentacion4.png','',1,1,1,'2018-03-12 12:30:00','2018-03-12 12:30:00'),(2,'archivo/banner/presentacion1.png','presentacion1.png','',1,1,1,'2018-03-12 12:30:00','2018-03-12 12:30:00'),(3,'archivo/banner/presentacion2.png','presentacion2.png','',1,1,1,'2018-03-12 12:30:00','2018-03-12 12:30:00'),(4,'archivo/banner/presentacion3.png','presentacion3.png','',1,1,1,'2018-03-12 12:30:00','2018-03-12 12:30:00');
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactos`
--

DROP TABLE IF EXISTS `contactos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contactos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `con_direccion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `con_telefono` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con_correo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con_latitud` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `con_longitud` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `con_estado` tinyint(1) NOT NULL DEFAULT '1',
  `idusuarioregistra` int(10) unsigned NOT NULL,
  `idusuariomodifica` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contactos_idusuarioregistra_foreign` (`idusuarioregistra`),
  KEY `contactos_idusuariomodifica_foreign` (`idusuariomodifica`),
  CONSTRAINT `contactos_idusuariomodifica_foreign` FOREIGN KEY (`idusuariomodifica`) REFERENCES `users` (`id`),
  CONSTRAINT `contactos_idusuarioregistra_foreign` FOREIGN KEY (`idusuarioregistra`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactos`
--

LOCK TABLES `contactos` WRITE;
/*!40000 ALTER TABLE `contactos` DISABLE KEYS */;
INSERT INTO `contactos` VALUES (1,'La Paz, Zona Obrajes, Calle 14 Nro. 490','(+591) 2 2129838 - (+591) 2 2128772','info@fonabosque.gob.bo','0','0',1,1,1,'2018-03-12 12:30:00','2018-03-12 12:30:00');
/*!40000 ALTER TABLE `contactos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documentos`
--

DROP TABLE IF EXISTS `documentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documentos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `doc_nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_nombreoriginal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_tamanio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_estado` tinyint(1) NOT NULL DEFAULT '1',
  `idtipodocumento` int(10) unsigned NOT NULL,
  `idusuarioregistra` int(10) unsigned NOT NULL,
  `idusuariomodifica` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `documentos_idtipodocumento_foreign` (`idtipodocumento`),
  KEY `documentos_idusuarioregistra_foreign` (`idusuarioregistra`),
  KEY `documentos_idusuariomodifica_foreign` (`idusuariomodifica`),
  CONSTRAINT `documentos_idtipodocumento_foreign` FOREIGN KEY (`idtipodocumento`) REFERENCES `tipodocumentos` (`id`),
  CONSTRAINT `documentos_idusuariomodifica_foreign` FOREIGN KEY (`idusuariomodifica`) REFERENCES `users` (`id`),
  CONSTRAINT `documentos_idusuarioregistra_foreign` FOREIGN KEY (`idusuarioregistra`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documentos`
--

LOCK TABLES `documentos` WRITE;
/*!40000 ALTER TABLE `documentos` DISABLE KEYS */;
INSERT INTO `documentos` VALUES (1,'archivo/documento/formulario1_2_viajes.xlsx','formulario1_2_viajes.xls','193','xlsx','Formulario 1-2 Pasajes y Viáticos',1,1,1,1,'2018-03-12 12:30:00','2018-03-12 12:30:00'),(2,'archivo/documento/solitiuddematerial.xlsx','solitiuddematerial.xlsx','42','xlsx','Solicitud de Materiales',1,1,1,1,'2018-03-12 12:30:00','2018-03-12 12:30:00'),(3,'archivo/documento/ingresofinesdesemana.xls','ingresofinesdesemana.xls','53','xls','Formularios de Ingreso de Fines de Semana',1,1,1,1,'2018-03-12 12:30:00','2018-03-12 12:30:00'),(4,'archivo/documento/desvinculacion.pdf','desvinculacion.pdf','199','pdf','Formulario de Desvinculación',1,1,1,1,'2018-03-12 12:30:00','2018-03-12 12:30:00'),(5,'archivo/documento/internos.pdf','internos.pdf','174','pdf','Comunicación Interna',1,1,1,1,'2018-03-12 12:30:00','2018-03-12 12:30:00');
/*!40000 ALTER TABLE `documentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventos`
--

DROP TABLE IF EXISTS `eventos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eventos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `eve_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eve_logonombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eve_nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eve_descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `eve_lugar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eve_fechaini` date NOT NULL,
  `eve_fechafin` date DEFAULT NULL,
  `eve_horaini` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eve_horafin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idusuarioregistra` int(10) unsigned NOT NULL,
  `idusuariomodifica` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `eventos_eve_nombre_unique` (`eve_nombre`),
  KEY `eventos_idusuarioregistra_foreign` (`idusuarioregistra`),
  KEY `eventos_idusuariomodifica_foreign` (`idusuariomodifica`),
  CONSTRAINT `eventos_idusuariomodifica_foreign` FOREIGN KEY (`idusuariomodifica`) REFERENCES `users` (`id`),
  CONSTRAINT `eventos_idusuarioregistra_foreign` FOREIGN KEY (`idusuarioregistra`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos`
--

LOCK TABLES `eventos` WRITE;
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_03_12_130117_create_tipodocumentos_table',1),(4,'2018_03_12_130309_create_documentos_table',1),(5,'2018_03_12_131027_create_banners_table',1),(6,'2018_03_12_131709_create_misiones_table',1),(7,'2018_03_12_131726_create_visiones_table',1),(8,'2018_03_12_131747_create_objetivos_table',1),(9,'2018_03_12_131815_create_accesos_table',1),(10,'2018_03_12_131931_create_ministerios_table',1),(11,'2018_03_12_131950_create_contactos_table',1),(12,'2018_03_12_133608_create_eventos_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ministerios`
--

DROP TABLE IF EXISTS `ministerios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ministerios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `min_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_enlace` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_estado` tinyint(1) NOT NULL DEFAULT '1',
  `idusuarioregistra` int(10) unsigned NOT NULL,
  `idusuariomodifica` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ministerios_idusuarioregistra_foreign` (`idusuarioregistra`),
  KEY `ministerios_idusuariomodifica_foreign` (`idusuariomodifica`),
  CONSTRAINT `ministerios_idusuariomodifica_foreign` FOREIGN KEY (`idusuariomodifica`) REFERENCES `users` (`id`),
  CONSTRAINT `ministerios_idusuarioregistra_foreign` FOREIGN KEY (`idusuarioregistra`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ministerios`
--

LOCK TABLES `ministerios` WRITE;
/*!40000 ALTER TABLE `ministerios` DISABLE KEYS */;
INSERT INTO `ministerios` VALUES (1,'sin logo','Ministerio de Medio Ambiente y Aguas','http://www.mmaya.gob.bo','Ministerio de Medio Ambiente y Aguas',1,1,1,'2018-03-12 12:30:00','2018-03-12 12:30:00'),(2,'sin logo','Ministerio de Econonía y Finanzas Públicas','https://sigep.sigma.gob.bo','Ministerio de Econonía y Finanzas Públicas',1,1,1,'2018-03-12 12:30:00','2018-03-12 12:30:00'),(3,'sin logo','Ministerio de Desarrollo Rural y Tierras','http://www.ruralytierras.gob.bo','Ministerio de Desarrollo Rural y Tierras',1,1,1,'2018-03-12 12:30:00','2018-03-12 12:30:00'),(4,'sin logo','Ministerio de la Presidencia','http://presidencia.gob.bo/','Ministerio de la Presidencia',1,1,1,'2018-03-12 12:30:00','2018-03-12 12:30:00'),(5,'sin logo','Ministerio de Comunicación','http://www.comunicacion.gob.bo/','Ministerio de Comunicación',1,1,1,'2018-03-12 12:30:00','2018-03-12 12:30:00'),(6,'sin logo','Ministerio de Transparencia Institucional y Lucha Contra la Corrupción','http://www.transparencia.gob.bo/','Ministerio de Transparencia Institucional y Lucha Contra la Corrupción',1,1,1,'2018-03-12 12:30:00','2018-03-12 12:30:00');
/*!40000 ALTER TABLE `ministerios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `misiones`
--

DROP TABLE IF EXISTS `misiones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `misiones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mis_descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mis_estado` tinyint(1) NOT NULL DEFAULT '1',
  `idusuarioregistra` int(10) unsigned NOT NULL,
  `idusuariomodifica` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `misiones_idusuarioregistra_foreign` (`idusuarioregistra`),
  KEY `misiones_idusuariomodifica_foreign` (`idusuariomodifica`),
  CONSTRAINT `misiones_idusuariomodifica_foreign` FOREIGN KEY (`idusuariomodifica`) REFERENCES `users` (`id`),
  CONSTRAINT `misiones_idusuarioregistra_foreign` FOREIGN KEY (`idusuarioregistra`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `misiones`
--

LOCK TABLES `misiones` WRITE;
/*!40000 ALTER TABLE `misiones` DISABLE KEYS */;
INSERT INTO `misiones` VALUES (1,'Promover, administrar y otorgar recursos financieros para el manejo sustentable de bosques, con enfoque de gestión integral de cuencas, conservación de los bosques y suelos forestales, recuperación de suelos degradados en áreas forestales y manejo integral del fuego',1,1,1,'2018-03-12 12:30:00','2018-03-12 12:30:00');
/*!40000 ALTER TABLE `misiones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `objetivos`
--

DROP TABLE IF EXISTS `objetivos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `objetivos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `obj_descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `obj_estado` tinyint(1) NOT NULL DEFAULT '1',
  `idusuarioregistra` int(10) unsigned NOT NULL,
  `idusuariomodifica` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `objetivos_idusuarioregistra_foreign` (`idusuarioregistra`),
  KEY `objetivos_idusuariomodifica_foreign` (`idusuariomodifica`),
  CONSTRAINT `objetivos_idusuariomodifica_foreign` FOREIGN KEY (`idusuariomodifica`) REFERENCES `users` (`id`),
  CONSTRAINT `objetivos_idusuarioregistra_foreign` FOREIGN KEY (`idusuarioregistra`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `objetivos`
--

LOCK TABLES `objetivos` WRITE;
/*!40000 ALTER TABLE `objetivos` DISABLE KEYS */;
INSERT INTO `objetivos` VALUES (1,'<p><b>1.</b> Promover la conservación y preservación, a través de la producción, forestación, reforestación y transferencia de conocimientos y tecnologías forestales en armonía y equilibrio con la Madre Tierra.<br><b>2.</b> Realizar la gestión eficiente de administración de los recursos económicos para el Vivir Bien.</p>',1,1,1,'2018-03-12 12:30:00','2018-03-12 12:30:00');
/*!40000 ALTER TABLE `objetivos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipodocumentos`
--

DROP TABLE IF EXISTS `tipodocumentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipodocumentos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tip_nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tip_descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tip_estado` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tipodocumentos_tip_nombre_unique` (`tip_nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipodocumentos`
--

LOCK TABLES `tipodocumentos` WRITE;
/*!40000 ALTER TABLE `tipodocumentos` DISABLE KEYS */;
INSERT INTO `tipodocumentos` VALUES (1,'FORMULARIO','Documentos Formulario de Tipo Excel y PDFs',1,'2018-03-12 12:30:00','2018-03-12 12:30:00'),(2,'CIRCULAR','Documentos Circulares',1,'2018-03-12 12:30:00','2018-03-12 12:30:00'),(3,'COMUNICADO','Documentos de Comunicación',1,'2018-03-12 12:30:00','2018-03-12 12:30:00'),(4,'INSTRUCTIVO','Documentos de Instrucción',1,'2018-03-12 12:30:00','2018-03-12 12:30:00'),(5,'RESOLUCION','Documentos de Resolución Administrativa',1,'2018-03-12 12:30:00','2018-03-12 12:30:00'),(6,'REGLAMENTO','Documentos de Tipo Reglamento',1,'2018-03-12 12:30:00','2018-03-12 12:30:00');
/*!40000 ALTER TABLE `tipodocumentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `us_nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `us_paterno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `us_materno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `us_nombrecompleto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `us_carnet` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `us_expedido` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `us_genero` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `us_foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `us_fechanacimiento` date NOT NULL,
  `us_direccion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `us_cargo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `us_jefes` enum('DIRECCION','COORDINADOR','AUDITOR','NORMAL') COLLATE utf8mb4_unicode_ci NOT NULL,
  `us_tipo` enum('ADMINISTRADOR','USUARIO','FORMULARIO','DOCUMENTO','BANNER','SISTEMAS') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `us_cuenta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `us_estado` tinyint(1) NOT NULL DEFAULT '1',
  `us_obs` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_us_cuenta_unique` (`us_cuenta`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','Admin','Admin','Super Administrador','0','LP','Masculino','','2010-01-01','-','-','NORMAL','ADMINISTRADOR','admin.@admin.com','admin','123',1,'-',NULL,'2018-03-12 12:30:00','2018-03-12 12:30:00');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visiones`
--

DROP TABLE IF EXISTS `visiones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visiones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `vis_descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vis_estado` tinyint(1) NOT NULL DEFAULT '1',
  `idusuarioregistra` int(10) unsigned NOT NULL,
  `idusuariomodifica` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `visiones_idusuarioregistra_foreign` (`idusuarioregistra`),
  KEY `visiones_idusuariomodifica_foreign` (`idusuariomodifica`),
  CONSTRAINT `visiones_idusuariomodifica_foreign` FOREIGN KEY (`idusuariomodifica`) REFERENCES `users` (`id`),
  CONSTRAINT `visiones_idusuarioregistra_foreign` FOREIGN KEY (`idusuarioregistra`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visiones`
--

LOCK TABLES `visiones` WRITE;
/*!40000 ALTER TABLE `visiones` DISABLE KEYS */;
INSERT INTO `visiones` VALUES (1,'Posicionarse como una entidad pública reconocida y fortalecida a nivel nacional e internacional, que realiza una oportuna y eficiente canalización, gestión y administración de los recursos financieros para programas y proyectos de desarrollo sustentable de bosques, aportando al crecimiento económico y social de la población bajo el principio del Suma Qamaña (Vivir Bien)',1,1,1,'2018-03-12 12:30:00','2018-03-12 12:30:00');
/*!40000 ALTER TABLE `visiones` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-27  8:27:49
