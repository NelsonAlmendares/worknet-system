-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: worknetdb
-- ------------------------------------------------------
-- Server version	8.0.39

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
-- Table structure for table `af_activo`
--

DROP TABLE IF EXISTS `af_activo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `af_activo` (
  `id_activo` int NOT NULL AUTO_INCREMENT,
  `a_cod_activo_interno_ant` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `a_codigo_activo` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `a_id_tb_contable` int NOT NULL,
  `a_id_f_financiera` int NOT NULL,
  `a_responsable_id_emp` int NOT NULL,
  `a_nombre` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `a_desc` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `a_tipo` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `a_color` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `a_marca` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `a_modelo` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `a_n_serie` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `a_valor_dolar` float NOT NULL,
  `a_valor_colon` float NOT NULL,
  `a_fecha_ingreso` date NOT NULL,
  `a_fecha_compra` date NOT NULL,
  `a_fac_respaldo` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `a_acta_recepcion` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `a_ubicacion_desc` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `a_ubicacion_nivel` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `a_uso_estado` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `a_estado` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `a_e` varchar(1) COLLATE utf8mb4_general_ci NOT NULL,
  `a_vidautil` int NOT NULL,
  PRIMARY KEY (`id_activo`),
  UNIQUE KEY `a_codigo_activo_UNIQUE` (`a_codigo_activo`),
  KEY `af_contable_idx` (`a_id_tb_contable`),
  KEY `af_f_financiera_idx` (`a_id_f_financiera`),
  KEY `af_employee_idx` (`a_responsable_id_emp`),
  KEY `af_cod` (`a_codigo_activo`),
  KEY `af_vida_util_idx` (`a_vidautil`),
  CONSTRAINT `af_contable` FOREIGN KEY (`a_id_tb_contable`) REFERENCES `af_tipo_bien_contable` (`id_tb_contable`),
  CONSTRAINT `af_employee` FOREIGN KEY (`a_responsable_id_emp`) REFERENCES `employee` (`idemployee`),
  CONSTRAINT `af_f_financiera` FOREIGN KEY (`a_id_f_financiera`) REFERENCES `af_fuente_financiera` (`id_f_financiera`),
  CONSTRAINT `af_vida_util` FOREIGN KEY (`a_vidautil`) REFERENCES `af_d_vida_util` (`id_vida_util_afd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `af_activo`
--

LOCK TABLES `af_activo` WRITE;
/*!40000 ALTER TABLE `af_activo` DISABLE KEYS */;
/*!40000 ALTER TABLE `af_activo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `af_d_vida_util`
--

DROP TABLE IF EXISTS `af_d_vida_util`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `af_d_vida_util` (
  `id_vida_util_afd` int NOT NULL AUTO_INCREMENT,
  `tipo_vida_util_afd` varchar(80) NOT NULL,
  `factor_anual` decimal(18,3) NOT NULL,
  `plazo_vida_util_afd` int NOT NULL,
  PRIMARY KEY (`id_vida_util_afd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `af_d_vida_util`
--

LOCK TABLES `af_d_vida_util` WRITE;
/*!40000 ALTER TABLE `af_d_vida_util` DISABLE KEYS */;
/*!40000 ALTER TABLE `af_d_vida_util` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `af_depreciacion`
--

DROP TABLE IF EXISTS `af_depreciacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `af_depreciacion` (
  `afd_id` int NOT NULL AUTO_INCREMENT,
  `afd_activo` int NOT NULL,
  `afd_valor_depreciacion` float NOT NULL,
  `afd_vida_util` int NOT NULL,
  `afd_cuota_anual` float GENERATED ALWAYS AS ((`afd_valor_depreciacion` / `afd_vida_util`)) STORED,
  `afd_cuota_diaria` float GENERATED ALWAYS AS ((`afd_cuota_anual` / 365)) STORED,
  `afd_fecha_generacion` date NOT NULL,
  `afd_fecha_corte` date NOT NULL,
  `afd_codigo_informe` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `afd_e` varchar(1) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`afd_id`),
  KEY `afd_activo` (`afd_activo`),
  CONSTRAINT `af_depreciacion_ibfk_1` FOREIGN KEY (`afd_activo`) REFERENCES `af_activo` (`id_activo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `af_depreciacion`
--

LOCK TABLES `af_depreciacion` WRITE;
/*!40000 ALTER TABLE `af_depreciacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `af_depreciacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `af_depreciacion_v`
--

DROP TABLE IF EXISTS `af_depreciacion_v`;
/*!50001 DROP VIEW IF EXISTS `af_depreciacion_v`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `af_depreciacion_v` AS SELECT 
 1 AS `afd_id`,
 1 AS `afd_activo`,
 1 AS `afd_valor_depreciacion`,
 1 AS `afd_vida_util`,
 1 AS `afd_cuota_anual`,
 1 AS `afd_cuota_diaria`,
 1 AS `afd_fecha_generacion`,
 1 AS `afd_fecha_corte`,
 1 AS `afd_codigo_informe`,
 1 AS `afd_depreciacion_acumulada`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `af_fuente_financiera`
--

DROP TABLE IF EXISTS `af_fuente_financiera`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `af_fuente_financiera` (
  `id_f_financiera` int NOT NULL AUTO_INCREMENT,
  `ff_nombre` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `ff_desc` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `ff_e` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_f_financiera`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `af_fuente_financiera`
--

LOCK TABLES `af_fuente_financiera` WRITE;
/*!40000 ALTER TABLE `af_fuente_financiera` DISABLE KEYS */;
/*!40000 ALTER TABLE `af_fuente_financiera` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `af_log`
--

DROP TABLE IF EXISTS `af_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `af_log` (
  `aflog_id` int NOT NULL AUTO_INCREMENT,
  `aflog_date` datetime NOT NULL,
  `aflog_ip` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `aflog_iduser` int NOT NULL,
  `aflog_action` varchar(1) COLLATE utf8mb4_general_ci NOT NULL,
  `aflog_desc` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `aflog_idaf` int NOT NULL,
  PRIMARY KEY (`aflog_id`),
  KEY `aflog_iduser` (`aflog_iduser`),
  KEY `aflog_idaf` (`aflog_idaf`),
  CONSTRAINT `af_log_ibfk_2` FOREIGN KEY (`aflog_idaf`) REFERENCES `af_activo` (`id_activo`),
  CONSTRAINT `af_log_ibfk_3` FOREIGN KEY (`aflog_iduser`) REFERENCES `user` (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `af_log`
--

LOCK TABLES `af_log` WRITE;
/*!40000 ALTER TABLE `af_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `af_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `af_tipo_bien_contable`
--

DROP TABLE IF EXISTS `af_tipo_bien_contable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `af_tipo_bien_contable` (
  `id_tb_contable` int NOT NULL AUTO_INCREMENT,
  `tbc_codigo_contable` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `tbc_desc` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `tbc_e` varchar(1) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_tb_contable`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `af_tipo_bien_contable`
--

LOCK TABLES `af_tipo_bien_contable` WRITE;
/*!40000 ALTER TABLE `af_tipo_bien_contable` DISABLE KEYS */;
/*!40000 ALTER TABLE `af_tipo_bien_contable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `branch`
--

DROP TABLE IF EXISTS `branch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `branch` (
  `idbranch` int NOT NULL AUTO_INCREMENT,
  `brnname` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `brnborndate` date NOT NULL,
  `brn_compid` int NOT NULL,
  `brn_e` varchar(1) COLLATE utf8mb4_general_ci NOT NULL,
  `brn_email` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `brn_tel` varchar(14) COLLATE utf8mb4_general_ci NOT NULL,
  `brn_logo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idbranch`),
  KEY `brn_compid` (`brn_compid`),
  CONSTRAINT `branch_ibfk_1` FOREIGN KEY (`brn_compid`) REFERENCES `company` (`idcompany`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `branch`
--

LOCK TABLES `branch` WRITE;
/*!40000 ALTER TABLE `branch` DISABLE KEYS */;
/*!40000 ALTER TABLE `branch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `branch_address`
--

DROP TABLE IF EXISTS `branch_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `branch_address` (
  `idbranch_address` int NOT NULL AUTO_INCREMENT,
  `ba_idcontry` int NOT NULL,
  `ba_idmunicip` int NOT NULL,
  `ba_iddisctrict` int NOT NULL,
  `bacomplement` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `ba_brnid` int NOT NULL,
  `ba_e` varchar(1) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idbranch_address`),
  UNIQUE KEY `ba_idcontry_UNIQUE` (`ba_idcontry`),
  UNIQUE KEY `ba_idmunicip_UNIQUE` (`ba_idmunicip`),
  KEY `ba_brnid` (`ba_brnid`),
  CONSTRAINT `branch_address_country` FOREIGN KEY (`ba_idcontry`) REFERENCES `contry` (`idcontry`),
  CONSTRAINT `branch_address_ibfk_1` FOREIGN KEY (`ba_brnid`) REFERENCES `branch` (`idbranch`),
  CONSTRAINT `branch_address_municip` FOREIGN KEY (`ba_idmunicip`) REFERENCES `municip` (`idmunicip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `branch_address`
--

LOCK TABLES `branch_address` WRITE;
/*!40000 ALTER TABLE `branch_address` DISABLE KEYS */;
/*!40000 ALTER TABLE `branch_address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `company` (
  `idcompany` int NOT NULL AUTO_INCREMENT,
  `compname` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `compdesc` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `compsr` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `compnit` varchar(17) COLLATE utf8mb4_general_ci NOT NULL,
  `compnrc` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `compborndate` date NOT NULL,
  `comp_e` varchar(1) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idcompany`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company`
--

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contry`
--

DROP TABLE IF EXISTS `contry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contry` (
  `idcontry` int NOT NULL AUTO_INCREMENT,
  `contryname` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `contry_e` varchar(1) COLLATE utf8mb4_general_ci NOT NULL,
  `contry_idmh` varchar(2) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idcontry`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contry`
--

LOCK TABLES `contry` WRITE;
/*!40000 ALTER TABLE `contry` DISABLE KEYS */;
/*!40000 ALTER TABLE `contry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `department` (
  `iddepartment` int NOT NULL AUTO_INCREMENT,
  `deptname` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `dept_e` varchar(1) COLLATE utf8mb4_general_ci NOT NULL,
  `dept_idmh` varchar(2) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`iddepartment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department`
--

LOCK TABLES `department` WRITE;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
/*!40000 ALTER TABLE `department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `district`
--

DROP TABLE IF EXISTS `district`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `district` (
  `iddistrict` int NOT NULL AUTO_INCREMENT,
  `distname` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `dist_e` varchar(1) COLLATE utf8mb4_general_ci NOT NULL,
  `dist_idmh` varchar(2) COLLATE utf8mb4_general_ci NOT NULL,
  `dist_idmunicipnew` int NOT NULL,
  PRIMARY KEY (`iddistrict`),
  KEY `district_munipnew_idx` (`dist_idmunicipnew`),
  CONSTRAINT `district_munipnew` FOREIGN KEY (`dist_idmunicipnew`) REFERENCES `municipnew` (`idmunicipnew`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `district`
--

LOCK TABLES `district` WRITE;
/*!40000 ALTER TABLE `district` DISABLE KEYS */;
/*!40000 ALTER TABLE `district` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emp_address`
--

DROP TABLE IF EXISTS `emp_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `emp_address` (
  `idemp_address` int NOT NULL AUTO_INCREMENT,
  `ea_idcontry` int NOT NULL,
  `ea_idmunicip` int NOT NULL,
  `ea_iddisctrict` int NOT NULL,
  `eacomplement` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `ea_empid` int NOT NULL,
  `ea_e` varchar(1) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idemp_address`),
  UNIQUE KEY `ea_idmunicip_UNIQUE` (`ea_idmunicip`),
  UNIQUE KEY `ea_idcontry_UNIQUE` (`ea_idcontry`),
  KEY `ea_empid` (`ea_empid`),
  CONSTRAINT `emp_address_country` FOREIGN KEY (`ea_idcontry`) REFERENCES `contry` (`idcontry`),
  CONSTRAINT `emp_address_ibfk_1` FOREIGN KEY (`ea_empid`) REFERENCES `employee` (`idemployee`),
  CONSTRAINT `emp_address_municip` FOREIGN KEY (`ea_idmunicip`) REFERENCES `municip` (`idmunicip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emp_address`
--

LOCK TABLES `emp_address` WRITE;
/*!40000 ALTER TABLE `emp_address` DISABLE KEYS */;
/*!40000 ALTER TABLE `emp_address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employee` (
  `idemployee` int NOT NULL AUTO_INCREMENT,
  `empfname` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `empsname` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `emptname` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `empfsurname` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `empssurname` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `emptsurname` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `empmname` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `empdui` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `empnit` varchar(17) COLLATE utf8mb4_general_ci NOT NULL,
  `empborndate` date NOT NULL,
  `empemail` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `empcell` varchar(12) COLLATE utf8mb4_general_ci NOT NULL,
  `empoftel` varchar(12) COLLATE utf8mb4_general_ci NOT NULL,
  `empecontactname` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `empecontactcel` varchar(12) COLLATE utf8mb4_general_ci NOT NULL,
  `empcontactkin` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `empbgender` varchar(1) COLLATE utf8mb4_general_ci NOT NULL,
  `empfullname` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `empfullnameb` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `emp_idposition` int NOT NULL,
  `emp_e` varchar(1) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idemployee`),
  UNIQUE KEY `emp_idprofession_UNIQUE` (`emp_idposition`),
  CONSTRAINT `user_position` FOREIGN KEY (`emp_idposition`) REFERENCES `position` (`idposition`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu` (
  `idmenu` int NOT NULL AUTO_INCREMENT,
  `menu_idmodul` int NOT NULL,
  `menuname` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `menudesc` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `menuroute` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `menufolder` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `menu_e` varchar(1) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idmenu`),
  UNIQUE KEY `menu_idmodul_UNIQUE` (`menu_idmodul`),
  CONSTRAINT `menu_modul` FOREIGN KEY (`menu_idmodul`) REFERENCES `modul` (`idmodul`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modul`
--

DROP TABLE IF EXISTS `modul`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `modul` (
  `idmodul` int NOT NULL AUTO_INCREMENT,
  `modname` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `moddesc` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `modroute` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `modfolder` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `mod_e` varchar(1) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idmodul`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modul`
--

LOCK TABLES `modul` WRITE;
/*!40000 ALTER TABLE `modul` DISABLE KEYS */;
/*!40000 ALTER TABLE `modul` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `municip`
--

DROP TABLE IF EXISTS `municip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `municip` (
  `idmunicip` int NOT NULL AUTO_INCREMENT,
  `munipname` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `munip_e` varchar(1) COLLATE utf8mb4_general_ci NOT NULL,
  `munip_idmh` varchar(2) COLLATE utf8mb4_general_ci NOT NULL,
  `munip_iddistrict` int NOT NULL,
  `munip_iddepartment` int NOT NULL,
  PRIMARY KEY (`idmunicip`),
  KEY `munip_department_idx` (`munip_iddepartment`),
  KEY `munip_disctrict_idx` (`munip_iddistrict`),
  CONSTRAINT `munip_department` FOREIGN KEY (`munip_iddepartment`) REFERENCES `department` (`iddepartment`),
  CONSTRAINT `munip_disctrict` FOREIGN KEY (`munip_iddistrict`) REFERENCES `district` (`iddistrict`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `municip`
--

LOCK TABLES `municip` WRITE;
/*!40000 ALTER TABLE `municip` DISABLE KEYS */;
/*!40000 ALTER TABLE `municip` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `municipnew`
--

DROP TABLE IF EXISTS `municipnew`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `municipnew` (
  `idmunicipnew` int NOT NULL AUTO_INCREMENT,
  `munipnewname` varchar(100) NOT NULL,
  `munipnew_e` varchar(1) NOT NULL,
  `munipnew_idmh` varchar(2) NOT NULL,
  `munipnew_iddept` int NOT NULL,
  PRIMARY KEY (`idmunicipnew`),
  KEY `municipnew_dept_idx` (`munipnew_iddept`),
  CONSTRAINT `municipnew_dept` FOREIGN KEY (`munipnew_iddept`) REFERENCES `department` (`iddepartment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `municipnew`
--

LOCK TABLES `municipnew` WRITE;
/*!40000 ALTER TABLE `municipnew` DISABLE KEYS */;
/*!40000 ALTER TABLE `municipnew` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `position`
--

DROP TABLE IF EXISTS `position`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `position` (
  `idposition` int NOT NULL AUTO_INCREMENT,
  `positname` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `positdesc` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `positstate` varchar(1) COLLATE utf8mb4_general_ci NOT NULL,
  `positrequest` varchar(750) COLLATE utf8mb4_general_ci NOT NULL,
  `posit_idunit` int NOT NULL,
  `posit_idtypeposit` int NOT NULL,
  `posit_nameb` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `posit_e` varchar(1) COLLATE utf8mb4_general_ci NOT NULL,
  `posit_idunitb` int DEFAULT NULL,
  PRIMARY KEY (`idposition`),
  UNIQUE KEY `posit_idunit_UNIQUE` (`posit_idunit`),
  UNIQUE KEY `posit_idtypeposit_UNIQUE` (`posit_idtypeposit`),
  KEY `position_unitb_idx` (`posit_idunitb`),
  CONSTRAINT `position_typeposition` FOREIGN KEY (`posit_idtypeposit`) REFERENCES `type_position` (`idtypeposit`),
  CONSTRAINT `position_unit` FOREIGN KEY (`posit_idunit`) REFERENCES `unit` (`idunit`),
  CONSTRAINT `position_unitb` FOREIGN KEY (`posit_idunitb`) REFERENCES `unit` (`idunit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `position`
--

LOCK TABLES `position` WRITE;
/*!40000 ALTER TABLE `position` DISABLE KEYS */;
/*!40000 ALTER TABLE `position` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `report` (
  `idreport` int NOT NULL AUTO_INCREMENT,
  `reptname` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `rept_desc` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `reptroute` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `reptfolder` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `rept_modul` int NOT NULL,
  `report_e` varchar(1) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idreport`),
  KEY `rept_modul` (`rept_modul`),
  CONSTRAINT `report_ibfk_1` FOREIGN KEY (`rept_modul`) REFERENCES `modul` (`idmodul`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `report`
--

LOCK TABLES `report` WRITE;
/*!40000 ALTER TABLE `report` DISABLE KEYS */;
/*!40000 ALTER TABLE `report` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rol` (
  `idrol` int NOT NULL AUTO_INCREMENT,
  `rolname` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `roldesc` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `rol_e` varchar(1) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idrol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol`
--

LOCK TABLES `rol` WRITE;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rol_menu`
--

DROP TABLE IF EXISTS `rol_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rol_menu` (
  `idrolmenu` int NOT NULL AUTO_INCREMENT,
  `rolmenu_idrol` int NOT NULL,
  `rolmenu_idmenu` int NOT NULL,
  PRIMARY KEY (`idrolmenu`),
  KEY `rolmenu_menu_idx` (`rolmenu_idmenu`),
  KEY `rolmenu_rol_idx` (`rolmenu_idrol`),
  CONSTRAINT `rolmenu_menu` FOREIGN KEY (`rolmenu_idmenu`) REFERENCES `menu` (`idmenu`),
  CONSTRAINT `rolmenu_rol` FOREIGN KEY (`rolmenu_idrol`) REFERENCES `rol` (`idrol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol_menu`
--

LOCK TABLES `rol_menu` WRITE;
/*!40000 ALTER TABLE `rol_menu` DISABLE KEYS */;
/*!40000 ALTER TABLE `rol_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rol_modul`
--

DROP TABLE IF EXISTS `rol_modul`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rol_modul` (
  `idrolmodul` int NOT NULL AUTO_INCREMENT,
  `rolmodul_idrol` int NOT NULL,
  `rolmodul_idmodul` int NOT NULL,
  PRIMARY KEY (`idrolmodul`),
  KEY `rolmodiul_rol_idx` (`rolmodul_idrol`),
  KEY `rolmodul_modul_idx` (`rolmodul_idmodul`),
  CONSTRAINT `rolmodul_modul` FOREIGN KEY (`rolmodul_idmodul`) REFERENCES `modul` (`idmodul`),
  CONSTRAINT `rolmodul_rol` FOREIGN KEY (`rolmodul_idrol`) REFERENCES `rol` (`idrol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol_modul`
--

LOCK TABLES `rol_modul` WRITE;
/*!40000 ALTER TABLE `rol_modul` DISABLE KEYS */;
/*!40000 ALTER TABLE `rol_modul` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rol_report`
--

DROP TABLE IF EXISTS `rol_report`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rol_report` (
  `idrolreport` int NOT NULL AUTO_INCREMENT,
  `rolreport_idrol` int NOT NULL,
  `rolreport_idreport` int NOT NULL,
  PRIMARY KEY (`idrolreport`),
  KEY `rolreport_report_idx` (`rolreport_idreport`),
  KEY `rolreport_rol_idx` (`rolreport_idrol`),
  CONSTRAINT `rolreport_report` FOREIGN KEY (`rolreport_idreport`) REFERENCES `report` (`idreport`),
  CONSTRAINT `rolreport_rol` FOREIGN KEY (`rolreport_idrol`) REFERENCES `rol` (`idrol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol_report`
--

LOCK TABLES `rol_report` WRITE;
/*!40000 ALTER TABLE `rol_report` DISABLE KEYS */;
/*!40000 ALTER TABLE `rol_report` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solicitud_log`
--

DROP TABLE IF EXISTS `solicitud_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `solicitud_log` (
  `slog_id` int NOT NULL,
  `slog_id_emp` int NOT NULL,
  `slog_accion` varchar(45) NOT NULL,
  `slog_cod_af` int NOT NULL,
  `slog_comentario` varchar(255) DEFAULT NULL,
  `slog_codigo_af` varchar(45) NOT NULL,
  PRIMARY KEY (`slog_id`),
  KEY `slog_employee` (`slog_id_emp`),
  KEY `index3` (`slog_cod_af`),
  CONSTRAINT `slog_activo` FOREIGN KEY (`slog_cod_af`) REFERENCES `af_activo` (`id_activo`),
  CONSTRAINT `slog_employee` FOREIGN KEY (`slog_id_emp`) REFERENCES `employee` (`idemployee`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitud_log`
--

LOCK TABLES `solicitud_log` WRITE;
/*!40000 ALTER TABLE `solicitud_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `solicitud_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `syslog`
--

DROP TABLE IF EXISTS `syslog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `syslog` (
  `idsyslog` int NOT NULL AUTO_INCREMENT,
  `slogdate` datetime NOT NULL,
  `slogip` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `slog_idmodul` int NOT NULL,
  `slog_idmenu` int NOT NULL,
  `slogformname` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `slog_iduser` int NOT NULL,
  `slogaction` varchar(1) COLLATE utf8mb4_general_ci NOT NULL,
  `slogdesc` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idsyslog`),
  KEY `syslog_modul_idx` (`slog_idmodul`),
  KEY `syslog_menu_idx` (`slog_idmenu`),
  KEY `syslog_user_idx` (`slog_iduser`),
  CONSTRAINT `syslog_menu` FOREIGN KEY (`slog_idmenu`) REFERENCES `menu` (`idmenu`),
  CONSTRAINT `syslog_modul` FOREIGN KEY (`slog_idmodul`) REFERENCES `modul` (`idmodul`),
  CONSTRAINT `syslog_user` FOREIGN KEY (`slog_iduser`) REFERENCES `user` (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `syslog`
--

LOCK TABLES `syslog` WRITE;
/*!40000 ALTER TABLE `syslog` DISABLE KEYS */;
/*!40000 ALTER TABLE `syslog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type_position`
--

DROP TABLE IF EXISTS `type_position`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `type_position` (
  `idtypeposit` int NOT NULL AUTO_INCREMENT,
  `typepositname` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `typepositdesc` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `typeposit_e` varchar(1) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idtypeposit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type_position`
--

LOCK TABLES `type_position` WRITE;
/*!40000 ALTER TABLE `type_position` DISABLE KEYS */;
/*!40000 ALTER TABLE `type_position` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unit`
--

DROP TABLE IF EXISTS `unit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `unit` (
  `idunit` int NOT NULL AUTO_INCREMENT,
  `unitname` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `unitintercode` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `unitdesc` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `unitobj` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `unittel` varchar(12) COLLATE utf8mb4_general_ci NOT NULL,
  `unitmanager_idemp` int NOT NULL,
  `unitlocation` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `unitborndate` date NOT NULL,
  `unitemail` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `unit_e` varchar(1) COLLATE utf8mb4_general_ci NOT NULL,
  `unit_idbranch` int NOT NULL,
  PRIMARY KEY (`idunit`),
  UNIQUE KEY `unitmanager_idemp_UNIQUE` (`unitmanager_idemp`),
  KEY `unit_branch` (`unit_idbranch`),
  CONSTRAINT `unit_ibfk_1` FOREIGN KEY (`unitmanager_idemp`) REFERENCES `employee` (`idemployee`),
  CONSTRAINT `unit_ibfk_2` FOREIGN KEY (`unit_idbranch`) REFERENCES `branch` (`idbranch`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unit`
--

LOCK TABLES `unit` WRITE;
/*!40000 ALTER TABLE `unit` DISABLE KEYS */;
/*!40000 ALTER TABLE `unit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `iduser` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `user_password` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `user_idemp` int NOT NULL,
  `user_e` varchar(1) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`iduser`),
  UNIQUE KEY `idx_user_user_idemp` (`user_idemp`),
  CONSTRAINT `user-employee` FOREIGN KEY (`user_idemp`) REFERENCES `employee` (`idemployee`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_rol`
--

DROP TABLE IF EXISTS `user_rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_rol` (
  `id_ur` int NOT NULL AUTO_INCREMENT,
  `ur_iduser` int NOT NULL,
  `ur_idrol` int NOT NULL,
  `ur_e` varchar(1) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_ur`),
  KEY `urm_iduser` (`ur_iduser`),
  KEY `urm_idrol` (`ur_idrol`),
  CONSTRAINT `user_rol_ibfk_1` FOREIGN KEY (`ur_iduser`) REFERENCES `user` (`iduser`),
  CONSTRAINT `user_rol_ibfk_2` FOREIGN KEY (`ur_idrol`) REFERENCES `rol` (`idrol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_rol`
--

LOCK TABLES `user_rol` WRITE;
/*!40000 ALTER TABLE `user_rol` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `af_depreciacion_v`
--

/*!50001 DROP VIEW IF EXISTS `af_depreciacion_v`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `af_depreciacion_v` AS select `af_depreciacion`.`afd_id` AS `afd_id`,`af_depreciacion`.`afd_activo` AS `afd_activo`,`af_depreciacion`.`afd_valor_depreciacion` AS `afd_valor_depreciacion`,`af_depreciacion`.`afd_vida_util` AS `afd_vida_util`,`af_depreciacion`.`afd_cuota_anual` AS `afd_cuota_anual`,`af_depreciacion`.`afd_cuota_diaria` AS `afd_cuota_diaria`,`af_depreciacion`.`afd_fecha_generacion` AS `afd_fecha_generacion`,`af_depreciacion`.`afd_fecha_corte` AS `afd_fecha_corte`,`af_depreciacion`.`afd_codigo_informe` AS `afd_codigo_informe`,(((to_days(curdate()) - to_days(`af_depreciacion`.`afd_fecha_generacion`)) / 365) * `af_depreciacion`.`afd_cuota_anual`) AS `afd_depreciacion_acumulada` from `af_depreciacion` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-09-04 10:53:05
