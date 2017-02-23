-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: mydb
-- ------------------------------------------------------
-- Server version	5.7.12-log

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
-- Table structure for table `activity`
--

DROP TABLE IF EXISTS `activity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activity` (
  `activityID` int(11) NOT NULL AUTO_INCREMENT,
  `organization` int(11) NOT NULL,
  `SASno` int(11) DEFAULT NULL,
  `GOSMno` int(11) DEFAULT NULL,
  `title` varchar(200) NOT NULL,
  `goals` varchar(200) DEFAULT NULL,
  `objectives` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `measures` varchar(45) DEFAULT NULL,
  `GOSMtargetdate` varchar(45) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `venue` varchar(45) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `activitynature` int(11) NOT NULL,
  `activitytype` int(11) NOT NULL,
  `relatedtoR` varchar(45) DEFAULT NULL,
  `relatedtoN` varchar(45) DEFAULT NULL,
  `budget` decimal(9,2) DEFAULT NULL,
  PRIMARY KEY (`activityID`),
  KEY `fk_ACTIVITY_REF_USERS_idx` (`organization`),
  KEY `fk_ACTIVITY_GOSM1_idx` (`GOSMno`),
  KEY `fk_ACTIVITY_SAS1_idx` (`SASno`),
  KEY `fk_ACTIVITY_REF_ACTIVITYNATURE1_idx` (`activitynature`),
  KEY `fk_ACTIVITY_REF_ACTIVITYTYPE1_idx` (`activitytype`),
  CONSTRAINT `fk_ACTIVITY_GOSM1` FOREIGN KEY (`GOSMno`) REFERENCES `gosm` (`GOSMno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ACTIVITY_REF_ACTIVITYNATURE1` FOREIGN KEY (`activitynature`) REFERENCES `ref_activitynature` (`idREF_ACTIVITYNATURE`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ACTIVITY_REF_ACTIVITYTYPE1` FOREIGN KEY (`activitytype`) REFERENCES `ref_activitytype` (`idREF_ACTIVITYTYPE`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ACTIVITY_REF_USERS` FOREIGN KEY (`organization`) REFERENCES `ref_users` (`userID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ACTIVITY_SAS1` FOREIGN KEY (`SASno`) REFERENCES `sas` (`SASno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity`
--

LOCK TABLES `activity` WRITE;
/*!40000 ALTER TABLE `activity` DISABLE KEYS */;
/*!40000 ALTER TABLE `activity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `activitydetailschanges`
--

DROP TABLE IF EXISTS `activitydetailschanges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activitydetailschanges` (
  `idACTIVITYDETAILSCHANGES` int(11) NOT NULL AUTO_INCREMENT,
  `SASno` int(11) NOT NULL,
  `activityID` int(11) NOT NULL,
  `venue` tinyint(1) NOT NULL,
  `datetime` tinyint(1) NOT NULL,
  `programdesign` tinyint(1) NOT NULL,
  `cancellation` tinyint(1) NOT NULL,
  `justification` varchar(500) NOT NULL,
  `requestedby` varchar(45) NOT NULL,
  `datecreated` datetime NOT NULL,
  PRIMARY KEY (`idACTIVITYDETAILSCHANGES`),
  KEY `fk_ACTIVITYDETAILSCHANGES_SAS1_idx` (`SASno`),
  KEY `fk_ACTIVITYDETAILSCHANGES_ACTIVITY1_idx` (`activityID`),
  CONSTRAINT `fk_ACTIVITYDETAILSCHANGES_ACTIVITY1` FOREIGN KEY (`activityID`) REFERENCES `activity` (`activityID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ACTIVITYDETAILSCHANGES_SAS1` FOREIGN KEY (`SASno`) REFERENCES `sas` (`SASno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activitydetailschanges`
--

LOCK TABLES `activitydetailschanges` WRITE;
/*!40000 ALTER TABLE `activitydetailschanges` DISABLE KEYS */;
/*!40000 ALTER TABLE `activitydetailschanges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aform`
--

DROP TABLE IF EXISTS `aform`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aform` (
  `AFORMno` int(11) NOT NULL AUTO_INCREMENT,
  `SASno` int(11) DEFAULT NULL,
  `activityID` int(11) NOT NULL,
  `date` date NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `ENP` int(11) NOT NULL,
  `ENMP` int(11) NOT NULL,
  `activityreach` int(11) NOT NULL,
  `datecreated` datetime NOT NULL,
  PRIMARY KEY (`AFORMno`),
  KEY `fk_AFORM_REF_ACTIVITYREACH1_idx` (`activityreach`),
  KEY `fk_AFORM_ACTIVITY1_idx` (`activityID`),
  KEY `fk_AFORM_SAS1_idx` (`SASno`),
  CONSTRAINT `fk_AFORM_ACTIVITY1` FOREIGN KEY (`activityID`) REFERENCES `activity` (`activityID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_AFORM_REF_ACTIVITYREACH1` FOREIGN KEY (`activityreach`) REFERENCES `ref_activityreach` (`idREF_ACTIVITYREACH`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_AFORM_SAS1` FOREIGN KEY (`SASno`) REFERENCES `sas` (`SASno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aform`
--

LOCK TABLES `aform` WRITE;
/*!40000 ALTER TABLE `aform` DISABLE KEYS */;
/*!40000 ALTER TABLE `aform` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cencomm`
--

DROP TABLE IF EXISTS `cencomm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cencomm` (
  `CENCOMMno` int(11) NOT NULL AUTO_INCREMENT,
  `activityID` int(11) NOT NULL,
  PRIMARY KEY (`CENCOMMno`),
  KEY `fk_CENCOMM_ACTIVITY1_idx` (`activityID`),
  CONSTRAINT `fk_CENCOMM_ACTIVITY1` FOREIGN KEY (`activityID`) REFERENCES `activity` (`activityID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cencomm`
--

LOCK TABLES `cencomm` WRITE;
/*!40000 ALTER TABLE `cencomm` DISABLE KEYS */;
/*!40000 ALTER TABLE `cencomm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cencomm_communications`
--

DROP TABLE IF EXISTS `cencomm_communications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cencomm_communications` (
  `idCENCOMM_COMMUNICATIONS` int(11) NOT NULL AUTO_INCREMENT,
  `CENCOMMno` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`idCENCOMM_COMMUNICATIONS`),
  KEY `fk_CENCOMM_COMMUNICATIONS_CENCOMM1_idx` (`CENCOMMno`),
  CONSTRAINT `fk_CENCOMM_COMMUNICATIONS_CENCOMM1` FOREIGN KEY (`CENCOMMno`) REFERENCES `cencomm` (`CENCOMMno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cencomm_communications`
--

LOCK TABLES `cencomm_communications` WRITE;
/*!40000 ALTER TABLE `cencomm_communications` DISABLE KEYS */;
/*!40000 ALTER TABLE `cencomm_communications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cencomm_documentations`
--

DROP TABLE IF EXISTS `cencomm_documentations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cencomm_documentations` (
  `idCENCOMM_DOCUMENTATIONS` int(11) NOT NULL AUTO_INCREMENT,
  `CENCOMMno` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`idCENCOMM_DOCUMENTATIONS`),
  KEY `fk_CENCOMM_DOCUMENTATIONS_CENCOMM1_idx` (`CENCOMMno`),
  CONSTRAINT `fk_CENCOMM_DOCUMENTATIONS_CENCOMM1` FOREIGN KEY (`CENCOMMno`) REFERENCES `cencomm` (`CENCOMMno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cencomm_documentations`
--

LOCK TABLES `cencomm_documentations` WRITE;
/*!40000 ALTER TABLE `cencomm_documentations` DISABLE KEYS */;
/*!40000 ALTER TABLE `cencomm_documentations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cencomm_externals`
--

DROP TABLE IF EXISTS `cencomm_externals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cencomm_externals` (
  `idCENCOMM_EXTERNALS` int(11) NOT NULL AUTO_INCREMENT,
  `CENCOMMno` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`idCENCOMM_EXTERNALS`),
  KEY `fk_CENCOMM_EXTERNALS_CENCOMM1_idx` (`CENCOMMno`),
  CONSTRAINT `fk_CENCOMM_EXTERNALS_CENCOMM1` FOREIGN KEY (`CENCOMMno`) REFERENCES `cencomm` (`CENCOMMno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cencomm_externals`
--

LOCK TABLES `cencomm_externals` WRITE;
/*!40000 ALTER TABLE `cencomm_externals` DISABLE KEYS */;
/*!40000 ALTER TABLE `cencomm_externals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cencomm_finance`
--

DROP TABLE IF EXISTS `cencomm_finance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cencomm_finance` (
  `idCENCOMM_FINANCE` int(11) NOT NULL AUTO_INCREMENT,
  `CENCOMMno` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`idCENCOMM_FINANCE`),
  KEY `fk_CENCOMM_FINANCE_CENCOMM1_idx` (`CENCOMMno`),
  CONSTRAINT `fk_CENCOMM_FINANCE_CENCOMM1` FOREIGN KEY (`CENCOMMno`) REFERENCES `cencomm` (`CENCOMMno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cencomm_finance`
--

LOCK TABLES `cencomm_finance` WRITE;
/*!40000 ALTER TABLE `cencomm_finance` DISABLE KEYS */;
/*!40000 ALTER TABLE `cencomm_finance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cencomm_hr`
--

DROP TABLE IF EXISTS `cencomm_hr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cencomm_hr` (
  `idCENCOMM_HR` int(11) NOT NULL AUTO_INCREMENT,
  `CENCOMMno` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`idCENCOMM_HR`),
  KEY `fk_CENCOMM_HR_CENCOMM1_idx` (`CENCOMMno`),
  CONSTRAINT `fk_CENCOMM_HR_CENCOMM1` FOREIGN KEY (`CENCOMMno`) REFERENCES `cencomm` (`CENCOMMno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cencomm_hr`
--

LOCK TABLES `cencomm_hr` WRITE;
/*!40000 ALTER TABLE `cencomm_hr` DISABLE KEYS */;
/*!40000 ALTER TABLE `cencomm_hr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cencomm_internals`
--

DROP TABLE IF EXISTS `cencomm_internals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cencomm_internals` (
  `idCENCOMM_INTERNALS` int(11) NOT NULL AUTO_INCREMENT,
  `CENCOMMno` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`idCENCOMM_INTERNALS`),
  KEY `fk_CENCOMM_INTERNALS_CENCOMM1_idx` (`CENCOMMno`),
  CONSTRAINT `fk_CENCOMM_INTERNALS_CENCOMM1` FOREIGN KEY (`CENCOMMno`) REFERENCES `cencomm` (`CENCOMMno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cencomm_internals`
--

LOCK TABLES `cencomm_internals` WRITE;
/*!40000 ALTER TABLE `cencomm_internals` DISABLE KEYS */;
/*!40000 ALTER TABLE `cencomm_internals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cencomm_promotions`
--

DROP TABLE IF EXISTS `cencomm_promotions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cencomm_promotions` (
  `idCENCOMM_PROMOTIONS` int(11) NOT NULL AUTO_INCREMENT,
  `CENCOMMno` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`idCENCOMM_PROMOTIONS`),
  KEY `fk_CENCOMM_PROMOTIONS_CENCOMM1_idx` (`CENCOMMno`),
  CONSTRAINT `fk_CENCOMM_PROMOTIONS_CENCOMM1` FOREIGN KEY (`CENCOMMno`) REFERENCES `cencomm` (`CENCOMMno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cencomm_promotions`
--

LOCK TABLES `cencomm_promotions` WRITE;
/*!40000 ALTER TABLE `cencomm_promotions` DISABLE KEYS */;
/*!40000 ALTER TABLE `cencomm_promotions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cm_criteria`
--

DROP TABLE IF EXISTS `cm_criteria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cm_criteria` (
  `idCM_CRITERIA` int(11) NOT NULL AUTO_INCREMENT,
  `CONTESTMECHANICSno` int(11) NOT NULL,
  `criteria` varchar(45) NOT NULL,
  `percentage` double NOT NULL,
  PRIMARY KEY (`idCM_CRITERIA`),
  KEY `fk_CM_CRITERIA_CONTESTMECHANICS1_idx` (`CONTESTMECHANICSno`),
  CONSTRAINT `fk_CM_CRITERIA_CONTESTMECHANICS1` FOREIGN KEY (`CONTESTMECHANICSno`) REFERENCES `contestmechanics` (`CONTESTMECHANICSno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cm_criteria`
--

LOCK TABLES `cm_criteria` WRITE;
/*!40000 ALTER TABLE `cm_criteria` DISABLE KEYS */;
/*!40000 ALTER TABLE `cm_criteria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cm_judges`
--

DROP TABLE IF EXISTS `cm_judges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cm_judges` (
  `idCM_JUDGES` int(11) NOT NULL AUTO_INCREMENT,
  `CONTESTMECHANICSno` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`idCM_JUDGES`),
  KEY `fk_CM_JUDGES_CONTESTMECHANICS1_idx` (`CONTESTMECHANICSno`),
  CONSTRAINT `fk_CM_JUDGES_CONTESTMECHANICS1` FOREIGN KEY (`CONTESTMECHANICSno`) REFERENCES `contestmechanics` (`CONTESTMECHANICSno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cm_judges`
--

LOCK TABLES `cm_judges` WRITE;
/*!40000 ALTER TABLE `cm_judges` DISABLE KEYS */;
/*!40000 ALTER TABLE `cm_judges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cm_mechanics`
--

DROP TABLE IF EXISTS `cm_mechanics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cm_mechanics` (
  `idCM_MECHANICS` int(11) NOT NULL AUTO_INCREMENT,
  `CONTESTMECHANICSno` int(11) NOT NULL,
  `mechanics` varchar(200) NOT NULL,
  PRIMARY KEY (`idCM_MECHANICS`),
  KEY `fk_CM_MECHANICS_CONTESTMECHANICS1_idx` (`CONTESTMECHANICSno`),
  CONSTRAINT `fk_CM_MECHANICS_CONTESTMECHANICS1` FOREIGN KEY (`CONTESTMECHANICSno`) REFERENCES `contestmechanics` (`CONTESTMECHANICSno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cm_mechanics`
--

LOCK TABLES `cm_mechanics` WRITE;
/*!40000 ALTER TABLE `cm_mechanics` DISABLE KEYS */;
/*!40000 ALTER TABLE `cm_mechanics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cm_questions`
--

DROP TABLE IF EXISTS `cm_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cm_questions` (
  `idCM_QUESTIONS` int(11) NOT NULL AUTO_INCREMENT,
  `CONTESTMECHANICSno` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  PRIMARY KEY (`idCM_QUESTIONS`),
  KEY `fk_CM_QUESTIONS_CONTESTMECHANICS1_idx` (`CONTESTMECHANICSno`),
  CONSTRAINT `fk_CM_QUESTIONS_CONTESTMECHANICS1` FOREIGN KEY (`CONTESTMECHANICSno`) REFERENCES `contestmechanics` (`CONTESTMECHANICSno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cm_questions`
--

LOCK TABLES `cm_questions` WRITE;
/*!40000 ALTER TABLE `cm_questions` DISABLE KEYS */;
/*!40000 ALTER TABLE `cm_questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contestmechanics`
--

DROP TABLE IF EXISTS `contestmechanics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contestmechanics` (
  `CONTESTMECHANICSno` int(11) NOT NULL AUTO_INCREMENT,
  `activityID` int(11) NOT NULL,
  `guidelines` varchar(200) NOT NULL,
  PRIMARY KEY (`CONTESTMECHANICSno`),
  KEY `fk_CONTESTMECHANICS_ACTIVITY1_idx` (`activityID`),
  CONSTRAINT `fk_CONTESTMECHANICS_ACTIVITY1` FOREIGN KEY (`activityID`) REFERENCES `activity` (`activityID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contestmechanics`
--

LOCK TABLES `contestmechanics` WRITE;
/*!40000 ALTER TABLE `contestmechanics` DISABLE KEYS */;
/*!40000 ALTER TABLE `contestmechanics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipmentpermit`
--

DROP TABLE IF EXISTS `equipmentpermit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipmentpermit` (
  `idEQUIPMENTPERMIT` int(11) NOT NULL AUTO_INCREMENT,
  `activityID` int(11) NOT NULL,
  `datecreated` datetime NOT NULL,
  `requestedby` varchar(45) NOT NULL,
  `requestedby_position` varchar(45) NOT NULL,
  `body` varchar(500) NOT NULL,
  PRIMARY KEY (`idEQUIPMENTPERMIT`),
  KEY `fk_EQUIPMENTPERMIT_ACTIVITY1_idx` (`activityID`),
  CONSTRAINT `fk_EQUIPMENTPERMIT_ACTIVITY1` FOREIGN KEY (`activityID`) REFERENCES `activity` (`activityID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipmentpermit`
--

LOCK TABLES `equipmentpermit` WRITE;
/*!40000 ALTER TABLE `equipmentpermit` DISABLE KEYS */;
/*!40000 ALTER TABLE `equipmentpermit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `foodpermit`
--

DROP TABLE IF EXISTS `foodpermit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `foodpermit` (
  `FOODPERMITno` int(11) NOT NULL AUTO_INCREMENT,
  `activityID` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `IDnumber` varchar(45) NOT NULL,
  `position` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `telephone` varchar(45) NOT NULL,
  PRIMARY KEY (`FOODPERMITno`),
  KEY `fk_FOODPERMIT_ACTIVITY1_idx` (`activityID`),
  CONSTRAINT `fk_FOODPERMIT_ACTIVITY1` FOREIGN KEY (`activityID`) REFERENCES `activity` (`activityID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foodpermit`
--

LOCK TABLES `foodpermit` WRITE;
/*!40000 ALTER TABLE `foodpermit` DISABLE KEYS */;
/*!40000 ALTER TABLE `foodpermit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fp_details`
--

DROP TABLE IF EXISTS `fp_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fp_details` (
  `idFP_DETAILS` int(11) NOT NULL AUTO_INCREMENT,
  `FOODPERMITno` int(11) NOT NULL,
  `quantity` double NOT NULL,
  `unit` varchar(45) NOT NULL,
  `description` varchar(200) NOT NULL,
  `cost` decimal(7,2) NOT NULL,
  PRIMARY KEY (`idFP_DETAILS`),
  KEY `fk_FP_DETAILS_FOODPERMIT1_idx` (`FOODPERMITno`),
  CONSTRAINT `fk_FP_DETAILS_FOODPERMIT1` FOREIGN KEY (`FOODPERMITno`) REFERENCES `foodpermit` (`FOODPERMITno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fp_details`
--

LOCK TABLES `fp_details` WRITE;
/*!40000 ALTER TABLE `fp_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `fp_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gosm`
--

DROP TABLE IF EXISTS `gosm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gosm` (
  `GOSMno` int(11) NOT NULL AUTO_INCREMENT,
  `datecreated` datetime NOT NULL,
  PRIMARY KEY (`GOSMno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gosm`
--

LOCK TABLES `gosm` WRITE;
/*!40000 ALTER TABLE `gosm` DISABLE KEYS */;
/*!40000 ALTER TABLE `gosm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `listofparticipants`
--

DROP TABLE IF EXISTS `listofparticipants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `listofparticipants` (
  `idLISTOFPARTICIPANTS` int(11) NOT NULL AUTO_INCREMENT,
  `activityID` int(11) NOT NULL,
  `IDnumber` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `middleinitial` varchar(2) NOT NULL,
  `age` int(11) NOT NULL,
  `waiver` tinyint(1) NOT NULL,
  PRIMARY KEY (`idLISTOFPARTICIPANTS`),
  KEY `fk_LISTOFPARTICIPANTS_ACTIVITY1_idx` (`activityID`),
  CONSTRAINT `fk_LISTOFPARTICIPANTS_ACTIVITY1` FOREIGN KEY (`activityID`) REFERENCES `activity` (`activityID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listofparticipants`
--

LOCK TABLES `listofparticipants` WRITE;
/*!40000 ALTER TABLE `listofparticipants` DISABLE KEYS */;
/*!40000 ALTER TABLE `listofparticipants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `minorpub_details`
--

DROP TABLE IF EXISTS `minorpub_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `minorpub_details` (
  `idMINORPUB_DETAILS` int(11) NOT NULL AUTO_INCREMENT,
  `MINORPUBPROPOSALno` int(11) NOT NULL,
  `pageno` int(11) NOT NULL,
  `pageno_member` varchar(45) NOT NULL,
  `spreadsize` varchar(45) NOT NULL,
  `spreadsize_member` varchar(45) NOT NULL,
  `papertype` varchar(45) NOT NULL,
  `papertype_member` varchar(45) NOT NULL,
  `colorno` int(11) NOT NULL,
  `colorno_member` varchar(45) NOT NULL,
  `copyno` int(11) NOT NULL,
  `copyno_member` varchar(45) NOT NULL,
  PRIMARY KEY (`idMINORPUB_DETAILS`),
  KEY `fk_MINORPUB_DETAILS_MINORPUBPROPOSAL1_idx` (`MINORPUBPROPOSALno`),
  CONSTRAINT `fk_MINORPUB_DETAILS_MINORPUBPROPOSAL1` FOREIGN KEY (`MINORPUBPROPOSALno`) REFERENCES `minorpubproposal` (`MINORPUBPROPOSALno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `minorpub_details`
--

LOCK TABLES `minorpub_details` WRITE;
/*!40000 ALTER TABLE `minorpub_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `minorpub_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `minorpubproposal`
--

DROP TABLE IF EXISTS `minorpubproposal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `minorpubproposal` (
  `MINORPUBPROPOSALno` int(11) NOT NULL AUTO_INCREMENT,
  `activityID` int(11) NOT NULL,
  `organization` int(11) NOT NULL,
  `pubname` varchar(45) NOT NULL,
  `releasedate` date NOT NULL,
  `pubtype` int(11) NOT NULL,
  `frequency` int(11) NOT NULL,
  `estcost` decimal(7,2) NOT NULL,
  `objective1` varchar(200) NOT NULL,
  `objective2` varchar(200) NOT NULL,
  `objective3` varchar(200) NOT NULL,
  `content1` varchar(200) NOT NULL,
  `content2` varchar(200) NOT NULL,
  `content3` varchar(200) NOT NULL,
  `target1` varchar(200) NOT NULL,
  `target2` varchar(200) NOT NULL,
  `target3` varchar(200) NOT NULL,
  `datecreated` datetime NOT NULL,
  PRIMARY KEY (`MINORPUBPROPOSALno`),
  KEY `fk_MINORPUBPROPOSAL_ACTIVITY1_idx` (`activityID`),
  KEY `fk_MINORPUBPROPOSAL_REF_USERS1_idx` (`organization`),
  CONSTRAINT `fk_MINORPUBPROPOSAL_ACTIVITY1` FOREIGN KEY (`activityID`) REFERENCES `activity` (`activityID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_MINORPUBPROPOSAL_REF_USERS1` FOREIGN KEY (`organization`) REFERENCES `ref_users` (`userID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `minorpubproposal`
--

LOCK TABLES `minorpubproposal` WRITE;
/*!40000 ALTER TABLE `minorpubproposal` DISABLE KEYS */;
/*!40000 ALTER TABLE `minorpubproposal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `others`
--

DROP TABLE IF EXISTS `others`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `others` (
  `OTHERSno` int(11) NOT NULL AUTO_INCREMENT,
  `activityID` int(11) NOT NULL,
  PRIMARY KEY (`OTHERSno`),
  KEY `fk_OTHERS_ACTIVITY1_idx` (`activityID`),
  CONSTRAINT `fk_OTHERS_ACTIVITY1` FOREIGN KEY (`activityID`) REFERENCES `activity` (`activityID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `others`
--

LOCK TABLES `others` WRITE;
/*!40000 ALTER TABLE `others` DISABLE KEYS */;
/*!40000 ALTER TABLE `others` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `others_equipment`
--

DROP TABLE IF EXISTS `others_equipment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `others_equipment` (
  `idOTHERS_EQUIPMENT` int(11) NOT NULL AUTO_INCREMENT,
  `OTHERSno` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`idOTHERS_EQUIPMENT`),
  KEY `fk_OTHERS_EQUIPMENT_OTHERS1_idx` (`OTHERSno`),
  CONSTRAINT `fk_OTHERS_EQUIPMENT_OTHERS1` FOREIGN KEY (`OTHERSno`) REFERENCES `others` (`OTHERSno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `others_equipment`
--

LOCK TABLES `others_equipment` WRITE;
/*!40000 ALTER TABLE `others_equipment` DISABLE KEYS */;
/*!40000 ALTER TABLE `others_equipment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `others_hosts`
--

DROP TABLE IF EXISTS `others_hosts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `others_hosts` (
  `idOTHERS_HOSTS` int(11) NOT NULL AUTO_INCREMENT,
  `OTHERSno` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`idOTHERS_HOSTS`),
  KEY `fk_OTHERS_HOSTS_OTHERS1_idx` (`OTHERSno`),
  CONSTRAINT `fk_OTHERS_HOSTS_OTHERS1` FOREIGN KEY (`OTHERSno`) REFERENCES `others` (`OTHERSno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `others_hosts`
--

LOCK TABLES `others_hosts` WRITE;
/*!40000 ALTER TABLE `others_hosts` DISABLE KEYS */;
/*!40000 ALTER TABLE `others_hosts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `others_photographers`
--

DROP TABLE IF EXISTS `others_photographers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `others_photographers` (
  `idOTHERS_PHOTOGRAPHERS` int(11) NOT NULL AUTO_INCREMENT,
  `OTHERSno` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`idOTHERS_PHOTOGRAPHERS`),
  KEY `fk_OTHERS_PHOTOGRAPHERS_OTHERS1_idx` (`OTHERSno`),
  CONSTRAINT `fk_OTHERS_PHOTOGRAPHERS_OTHERS1` FOREIGN KEY (`OTHERSno`) REFERENCES `others` (`OTHERSno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `others_photographers`
--

LOCK TABLES `others_photographers` WRITE;
/*!40000 ALTER TABLE `others_photographers` DISABLE KEYS */;
/*!40000 ALTER TABLE `others_photographers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `others_speakers`
--

DROP TABLE IF EXISTS `others_speakers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `others_speakers` (
  `idOTHERS_SPEAKERS` int(11) NOT NULL AUTO_INCREMENT,
  `OTHERSno` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `contactno` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`idOTHERS_SPEAKERS`),
  KEY `fk_OTHERS_SPEAKERS_OTHERS1_idx` (`OTHERSno`),
  CONSTRAINT `fk_OTHERS_SPEAKERS_OTHERS1` FOREIGN KEY (`OTHERSno`) REFERENCES `others` (`OTHERSno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `others_speakers`
--

LOCK TABLES `others_speakers` WRITE;
/*!40000 ALTER TABLE `others_speakers` DISABLE KEYS */;
/*!40000 ALTER TABLE `others_speakers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `others_sponsors`
--

DROP TABLE IF EXISTS `others_sponsors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `others_sponsors` (
  `idOTHERS_SPONSORS` int(11) NOT NULL AUTO_INCREMENT,
  `OTHERSno` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `contactno` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`idOTHERS_SPONSORS`),
  KEY `fk_OTHERS_SPONSORS_OTHERS1_idx` (`OTHERSno`),
  CONSTRAINT `fk_OTHERS_SPONSORS_OTHERS1` FOREIGN KEY (`OTHERSno`) REFERENCES `others` (`OTHERSno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `others_sponsors`
--

LOCK TABLES `others_sponsors` WRITE;
/*!40000 ALTER TABLE `others_sponsors` DISABLE KEYS */;
/*!40000 ALTER TABLE `others_sponsors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `others_videographers`
--

DROP TABLE IF EXISTS `others_videographers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `others_videographers` (
  `idOTHERS_VIDEOGRAPHERS` int(11) NOT NULL AUTO_INCREMENT,
  `OTHERSno` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`idOTHERS_VIDEOGRAPHERS`),
  KEY `fk_OTHERS_VIDEOGRAPHERS_OTHERS1_idx` (`OTHERSno`),
  CONSTRAINT `fk_OTHERS_VIDEOGRAPHERS_OTHERS1` FOREIGN KEY (`OTHERSno`) REFERENCES `others` (`OTHERSno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `others_videographers`
--

LOCK TABLES `others_videographers` WRITE;
/*!40000 ALTER TABLE `others_videographers` DISABLE KEYS */;
/*!40000 ALTER TABLE `others_videographers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ppr`
--

DROP TABLE IF EXISTS `ppr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ppr` (
  `PPRno` int(11) NOT NULL AUTO_INCREMENT,
  `activityID` int(11) NOT NULL,
  `context1` varchar(500) NOT NULL,
  `context2` varchar(500) NOT NULL,
  `context3` varchar(500) NOT NULL,
  `objective1` varchar(500) NOT NULL,
  `objective2` varchar(500) NOT NULL,
  `objective3` varchar(500) NOT NULL,
  `preparedby` varchar(45) NOT NULL,
  `preparedby_position` varchar(45) NOT NULL,
  `notedby` varchar(45) NOT NULL,
  `facultyadviser` varchar(45) NOT NULL,
  `datecreated` datetime NOT NULL,
  PRIMARY KEY (`PPRno`),
  KEY `fk_PPR_ACTIVITY1_idx` (`activityID`),
  CONSTRAINT `fk_PPR_ACTIVITY1` FOREIGN KEY (`activityID`) REFERENCES `activity` (`activityID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ppr`
--

LOCK TABLES `ppr` WRITE;
/*!40000 ALTER TABLE `ppr` DISABLE KEYS */;
/*!40000 ALTER TABLE `ppr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ppr_expenses`
--

DROP TABLE IF EXISTS `ppr_expenses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ppr_expenses` (
  `idPPR_EXPENSES` int(11) NOT NULL AUTO_INCREMENT,
  `PPRno` int(11) NOT NULL,
  `material` varchar(45) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unitcost` decimal(5,2) NOT NULL,
  `totalcost` decimal(9,2) NOT NULL,
  PRIMARY KEY (`idPPR_EXPENSES`),
  KEY `fk_PPR_EXPENSES_PPR1_idx` (`PPRno`),
  CONSTRAINT `fk_PPR_EXPENSES_PPR1` FOREIGN KEY (`PPRno`) REFERENCES `ppr` (`PPRno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ppr_expenses`
--

LOCK TABLES `ppr_expenses` WRITE;
/*!40000 ALTER TABLE `ppr_expenses` DISABLE KEYS */;
/*!40000 ALTER TABLE `ppr_expenses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ppr_funds`
--

DROP TABLE IF EXISTS `ppr_funds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ppr_funds` (
  `idPPR_FUNDS` int(11) NOT NULL AUTO_INCREMENT,
  `PPRno` int(11) NOT NULL,
  `orgfunds` decimal(9,2) NOT NULL,
  `participantsfee` decimal(9,2) NOT NULL,
  `others` decimal(9,2) NOT NULL,
  PRIMARY KEY (`idPPR_FUNDS`),
  KEY `fk_PPR_FUNDS_PPR1_idx` (`PPRno`),
  CONSTRAINT `fk_PPR_FUNDS_PPR1` FOREIGN KEY (`PPRno`) REFERENCES `ppr` (`PPRno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ppr_funds`
--

LOCK TABLES `ppr_funds` WRITE;
/*!40000 ALTER TABLE `ppr_funds` DISABLE KEYS */;
/*!40000 ALTER TABLE `ppr_funds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ppr_orgfunds`
--

DROP TABLE IF EXISTS `ppr_orgfunds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ppr_orgfunds` (
  `idPPR_ORGFUNDS` int(11) NOT NULL AUTO_INCREMENT,
  `PPRno` int(11) NOT NULL,
  `operationalfunds` decimal(9,2) NOT NULL,
  `depositoryfunds` decimal(9,2) NOT NULL,
  `depository_asof` date NOT NULL,
  `otherfunds` decimal(9,2) NOT NULL,
  `totaldisbursement` decimal(9,2) NOT NULL,
  `less_expenses` decimal(9,2) NOT NULL,
  `balance` decimal(9,2) NOT NULL,
  PRIMARY KEY (`idPPR_ORGFUNDS`),
  KEY `fk_PPR_ORGFUNDS_PPR1_idx` (`PPRno`),
  CONSTRAINT `fk_PPR_ORGFUNDS_PPR1` FOREIGN KEY (`PPRno`) REFERENCES `ppr` (`PPRno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ppr_orgfunds`
--

LOCK TABLES `ppr_orgfunds` WRITE;
/*!40000 ALTER TABLE `ppr_orgfunds` DISABLE KEYS */;
/*!40000 ALTER TABLE `ppr_orgfunds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ppr_otherfunds`
--

DROP TABLE IF EXISTS `ppr_otherfunds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ppr_otherfunds` (
  `idPPR_OTHERFUNDS` int(11) NOT NULL AUTO_INCREMENT,
  `PPR_FUNDSno` int(11) NOT NULL,
  `source` varchar(45) NOT NULL,
  `amount` decimal(9,2) NOT NULL,
  PRIMARY KEY (`idPPR_OTHERFUNDS`),
  KEY `fk_PPR_OTHERFUNDS_PPR_FUNDS1_idx` (`PPR_FUNDSno`),
  CONSTRAINT `fk_PPR_OTHERFUNDS_PPR_FUNDS1` FOREIGN KEY (`PPR_FUNDSno`) REFERENCES `ppr_funds` (`idPPR_FUNDS`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ppr_otherfunds`
--

LOCK TABLES `ppr_otherfunds` WRITE;
/*!40000 ALTER TABLE `ppr_otherfunds` DISABLE KEYS */;
/*!40000 ALTER TABLE `ppr_otherfunds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ppr_programdesign`
--

DROP TABLE IF EXISTS `ppr_programdesign`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ppr_programdesign` (
  `idPROGRAMDESIGN` int(11) NOT NULL AUTO_INCREMENT,
  `PPRno` int(11) NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `duration` varchar(20) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(200) NOT NULL,
  `personincharge` varchar(45) NOT NULL,
  PRIMARY KEY (`idPROGRAMDESIGN`),
  KEY `fk_PROGRAMDESIGN_PPR1_idx` (`PPRno`),
  CONSTRAINT `fk_PROGRAMDESIGN_PPR1` FOREIGN KEY (`PPRno`) REFERENCES `ppr` (`PPRno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ppr_programdesign`
--

LOCK TABLES `ppr_programdesign` WRITE;
/*!40000 ALTER TABLE `ppr_programdesign` DISABLE KEYS */;
/*!40000 ALTER TABLE `ppr_programdesign` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ppr_projectedexpenses`
--

DROP TABLE IF EXISTS `ppr_projectedexpenses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ppr_projectedexpenses` (
  `idPPR_PROJECTEDEXPENSES` int(11) NOT NULL AUTO_INCREMENT,
  `PPRno` int(11) NOT NULL,
  `item` varchar(45) NOT NULL,
  `quantity` int(11) NOT NULL,
  `sellingprice` decimal(5,2) NOT NULL,
  `amount` decimal(9,2) NOT NULL,
  PRIMARY KEY (`idPPR_PROJECTEDEXPENSES`),
  KEY `fk_PPR_PROJECTEDEXPENSES_PPR1_idx` (`PPRno`),
  CONSTRAINT `fk_PPR_PROJECTEDEXPENSES_PPR1` FOREIGN KEY (`PPRno`) REFERENCES `ppr` (`PPRno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ppr_projectedexpenses`
--

LOCK TABLES `ppr_projectedexpenses` WRITE;
/*!40000 ALTER TABLE `ppr_projectedexpenses` DISABLE KEYS */;
/*!40000 ALTER TABLE `ppr_projectedexpenses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ppr_projectedincome`
--

DROP TABLE IF EXISTS `ppr_projectedincome`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ppr_projectedincome` (
  `idPPR_PROJECTEDINCOME` int(11) NOT NULL AUTO_INCREMENT,
  `PPRno` int(11) NOT NULL,
  `item` varchar(45) NOT NULL,
  `quantity` int(11) NOT NULL,
  `sellingprice` decimal(5,2) NOT NULL,
  `amount` decimal(9,2) NOT NULL,
  PRIMARY KEY (`idPPR_PROJECTEDINCOME`),
  KEY `fk_PPR_PROJECTEDINCOME_PPR1_idx` (`PPRno`),
  CONSTRAINT `fk_PPR_PROJECTEDINCOME_PPR1` FOREIGN KEY (`PPRno`) REFERENCES `ppr` (`PPRno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ppr_projectedincome`
--

LOCK TABLES `ppr_projectedincome` WRITE;
/*!40000 ALTER TABLE `ppr_projectedincome` DISABLE KEYS */;
/*!40000 ALTER TABLE `ppr_projectedincome` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ppr_provisions`
--

DROP TABLE IF EXISTS `ppr_provisions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ppr_provisions` (
  `idPPR_PROVISIONS` int(11) NOT NULL AUTO_INCREMENT,
  `PPRno` int(11) NOT NULL,
  `person1` varchar(45) NOT NULL,
  `position1` varchar(45) NOT NULL,
  `person2` varchar(45) NOT NULL,
  `position2` varchar(45) NOT NULL,
  PRIMARY KEY (`idPPR_PROVISIONS`),
  KEY `fk_PPR_PROVISIONS_PPR1_idx` (`PPRno`),
  CONSTRAINT `fk_PPR_PROVISIONS_PPR1` FOREIGN KEY (`PPRno`) REFERENCES `ppr` (`PPRno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ppr_provisions`
--

LOCK TABLES `ppr_provisions` WRITE;
/*!40000 ALTER TABLE `ppr_provisions` DISABLE KEYS */;
/*!40000 ALTER TABLE `ppr_provisions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projectheads`
--

DROP TABLE IF EXISTS `projectheads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projectheads` (
  `idPROJECTHEADS` int(11) NOT NULL AUTO_INCREMENT,
  `CENCOMMno` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `position` varchar(45) NOT NULL,
  `contactnumber` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idPROJECTHEADS`),
  KEY `fk_PROJECTHEADS_CENCOMM1_idx` (`CENCOMMno`),
  CONSTRAINT `fk_PROJECTHEADS_CENCOMM1` FOREIGN KEY (`CENCOMMno`) REFERENCES `cencomm` (`CENCOMMno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projectheads`
--

LOCK TABLES `projectheads` WRITE;
/*!40000 ALTER TABLE `projectheads` DISABLE KEYS */;
/*!40000 ALTER TABLE `projectheads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_activitynature`
--

DROP TABLE IF EXISTS `ref_activitynature`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ref_activitynature` (
  `idREF_ACTIVITYNATURE` int(11) NOT NULL AUTO_INCREMENT,
  `activitynature` varchar(45) NOT NULL,
  `activityoffice` int(11) NOT NULL,
  PRIMARY KEY (`idREF_ACTIVITYNATURE`),
  KEY `fk_REF_ACTIVITYNATURE_REF_ACTIVITYOFFICE1_idx` (`activityoffice`),
  CONSTRAINT `fk_REF_ACTIVITYNATURE_REF_ACTIVITYOFFICE1` FOREIGN KEY (`activityoffice`) REFERENCES `ref_activityoffice` (`idREF_ACTIVITYOFFICE`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_activitynature`
--

LOCK TABLES `ref_activitynature` WRITE;
/*!40000 ALTER TABLE `ref_activitynature` DISABLE KEYS */;
INSERT INTO `ref_activitynature` VALUES (1,'Academic',2),(2,'Special Interest',2),(3,'Departmental Initiative',2),(4,'Fundraising',2),(5,'Community Development',2),(6,'Lasallian Formation/ Spiritual Growth',2),(7,'Outreach',2),(8,'Organizational Development',2),(9,'Student Service',1),(10,'Student\'s Rights & Welfare',1),(11,'Rules and Policies',1),(12,'Fundraising',1),(13,'Community Development',1),(14,'Organizational Development',1),(15,'Issue Advocacy',1),(16,'Lasallian Formation/Spiritual Growth',1),(17,'Outreach',1);
/*!40000 ALTER TABLE `ref_activitynature` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_activityoffice`
--

DROP TABLE IF EXISTS `ref_activityoffice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ref_activityoffice` (
  `idREF_ACTIVITYOFFICE` int(11) NOT NULL AUTO_INCREMENT,
  `activityoffice` varchar(45) NOT NULL,
  PRIMARY KEY (`idREF_ACTIVITYOFFICE`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_activityoffice`
--

LOCK TABLES `ref_activityoffice` WRITE;
/*!40000 ALTER TABLE `ref_activityoffice` DISABLE KEYS */;
INSERT INTO `ref_activityoffice` VALUES (1,'USG'),(2,'CSO & Special Groups');
/*!40000 ALTER TABLE `ref_activityoffice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_activityreach`
--

DROP TABLE IF EXISTS `ref_activityreach`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ref_activityreach` (
  `idREF_ACTIVITYREACH` int(11) NOT NULL AUTO_INCREMENT,
  `activityreach` varchar(45) NOT NULL,
  PRIMARY KEY (`idREF_ACTIVITYREACH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_activityreach`
--

LOCK TABLES `ref_activityreach` WRITE;
/*!40000 ALTER TABLE `ref_activityreach` DISABLE KEYS */;
/*!40000 ALTER TABLE `ref_activityreach` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_activitytype`
--

DROP TABLE IF EXISTS `ref_activitytype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ref_activitytype` (
  `idREF_ACTIVITYTYPE` int(11) NOT NULL AUTO_INCREMENT,
  `activitytype` varchar(45) NOT NULL,
  `processingoffice` int(11) NOT NULL,
  PRIMARY KEY (`idREF_ACTIVITYTYPE`),
  KEY `fk_REF_ACTIVITYTYPE_REF_PROCESSINGOFFICE1_idx` (`processingoffice`),
  CONSTRAINT `fk_REF_ACTIVITYTYPE_REF_PROCESSINGOFFICE1` FOREIGN KEY (`processingoffice`) REFERENCES `ref_processingoffice` (`idREF_PROCESSINGOFFICE`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_activitytype`
--

LOCK TABLES `ref_activitytype` WRITE;
/*!40000 ALTER TABLE `ref_activitytype` DISABLE KEYS */;
INSERT INTO `ref_activitytype` VALUES (1,'Academic Contest',1),(2,'Distribution',1),(3,'General Assembly',1),(4,'Seminar/ Workshops',1),(5,'Publicity/ Awareness Campaign',1),(6,'Meetings',1),(7,'Spiritual Activity',1),(8,'Recruitment/ Audition',1),(9,'Recreation',1),(10,'Others',1),(11,'Alliance with Outside Organizations',2),(12,'Off- Campus Activities',2),(13,'Seminar with Distinguished Speakers',2),(14,'Conference Involving Outside Particpants ',2),(15,'Solicitations',2),(16,'Fundraising',2),(17,'Donation Drive',2),(18,'Others',2);
/*!40000 ALTER TABLE `ref_activitytype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_campusaccesstype`
--

DROP TABLE IF EXISTS `ref_campusaccesstype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ref_campusaccesstype` (
  `idREF_CAMPUSACCESSTYPE` int(11) NOT NULL AUTO_INCREMENT,
  `campusaccesstype` varchar(45) NOT NULL,
  PRIMARY KEY (`idREF_CAMPUSACCESSTYPE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_campusaccesstype`
--

LOCK TABLES `ref_campusaccesstype` WRITE;
/*!40000 ALTER TABLE `ref_campusaccesstype` DISABLE KEYS */;
/*!40000 ALTER TABLE `ref_campusaccesstype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_processingoffice`
--

DROP TABLE IF EXISTS `ref_processingoffice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ref_processingoffice` (
  `idREF_PROCESSINGOFFICE` int(11) NOT NULL,
  `processingoffice` varchar(45) NOT NULL,
  PRIMARY KEY (`idREF_PROCESSINGOFFICE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_processingoffice`
--

LOCK TABLES `ref_processingoffice` WRITE;
/*!40000 ALTER TABLE `ref_processingoffice` DISABLE KEYS */;
INSERT INTO `ref_processingoffice` VALUES (1,'CSO/DAAM'),(2,'SLIFE');
/*!40000 ALTER TABLE `ref_processingoffice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_sastype`
--

DROP TABLE IF EXISTS `ref_sastype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ref_sastype` (
  `idREF_SASTYPE` int(11) NOT NULL AUTO_INCREMENT,
  `SAStype` varchar(45) NOT NULL,
  PRIMARY KEY (`idREF_SASTYPE`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_sastype`
--

LOCK TABLES `ref_sastype` WRITE;
/*!40000 ALTER TABLE `ref_sastype` DISABLE KEYS */;
INSERT INTO `ref_sastype` VALUES (1,'Late Submission'),(2,'In Case of Change'),(3,'Cancellation of Activity'),(4,'Activity Not in GOSM'),(5,'w/o term - end requirements'),(6,'Lost A- Form');
/*!40000 ALTER TABLE `ref_sastype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_trademarks`
--

DROP TABLE IF EXISTS `ref_trademarks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ref_trademarks` (
  `idREF_TRADEMARKS` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`idREF_TRADEMARKS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_trademarks`
--

LOCK TABLES `ref_trademarks` WRITE;
/*!40000 ALTER TABLE `ref_trademarks` DISABLE KEYS */;
/*!40000 ALTER TABLE `ref_trademarks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_users`
--

DROP TABLE IF EXISTS `ref_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ref_users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_users`
--

LOCK TABLES `ref_users` WRITE;
/*!40000 ALTER TABLE `ref_users` DISABLE KEYS */;
INSERT INTO `ref_users` VALUES (1,'Young Enterepreneurs\' Society','yes_dlsu.edu.ph','yes','yes123');
/*!40000 ALTER TABLE `ref_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requirements`
--

DROP TABLE IF EXISTS `requirements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `requirements` (
  `idREQUIREMENTS` int(11) NOT NULL AUTO_INCREMENT,
  `activitytype` int(11) NOT NULL,
  `requirement` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`idREQUIREMENTS`),
  KEY `fk_REQUIREMENTS_REF_ACTIVITYTYPE1_idx` (`activitytype`),
  CONSTRAINT `fk_REQUIREMENTS_REF_ACTIVITYTYPE1` FOREIGN KEY (`activitytype`) REFERENCES `ref_activitytype` (`idREF_ACTIVITYTYPE`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requirements`
--

LOCK TABLES `requirements` WRITE;
/*!40000 ALTER TABLE `requirements` DISABLE KEYS */;
/*!40000 ALTER TABLE `requirements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sas`
--

DROP TABLE IF EXISTS `sas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sas` (
  `SASno` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `justification` varchar(200) NOT NULL,
  `submittedby` varchar(45) NOT NULL,
  `datesubmitted` datetime NOT NULL,
  `notedby` varchar(45) NOT NULL,
  `datenoted` datetime NOT NULL,
  PRIMARY KEY (`SASno`),
  KEY `fk_SAS_REF_SASTYPE1_idx` (`type`),
  CONSTRAINT `fk_SAS_REF_SASTYPE1` FOREIGN KEY (`type`) REFERENCES `ref_sastype` (`idREF_SASTYPE`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sas`
--

LOCK TABLES `sas` WRITE;
/*!40000 ALTER TABLE `sas` DISABLE KEYS */;
/*!40000 ALTER TABLE `sas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `spca`
--

DROP TABLE IF EXISTS `spca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `spca` (
  `SPCAno` int(11) NOT NULL AUTO_INCREMENT,
  `activityID` int(11) NOT NULL,
  `requestedby` varchar(45) NOT NULL,
  `requestedby_position` varchar(45) NOT NULL,
  `office` varchar(200) NOT NULL,
  `telephone` varchar(45) NOT NULL,
  `IDno` varchar(45) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `facultyincharge` varchar(45) NOT NULL,
  `campusaccesstype` int(11) NOT NULL,
  `datecreated` datetime NOT NULL,
  `ENP` int(11) NOT NULL,
  `ENMP` int(11) NOT NULL,
  PRIMARY KEY (`SPCAno`),
  KEY `fk_SPCA_ACTIVITY1_idx` (`activityID`),
  KEY `fk_SPCA_REF_CAMPUSACCESSTYPE1_idx` (`campusaccesstype`),
  CONSTRAINT `fk_SPCA_ACTIVITY1` FOREIGN KEY (`activityID`) REFERENCES `activity` (`activityID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_SPCA_REF_CAMPUSACCESSTYPE1` FOREIGN KEY (`campusaccesstype`) REFERENCES `ref_campusaccesstype` (`idREF_CAMPUSACCESSTYPE`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `spca`
--

LOCK TABLES `spca` WRITE;
/*!40000 ALTER TABLE `spca` DISABLE KEYS */;
/*!40000 ALTER TABLE `spca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `spca_activity`
--

DROP TABLE IF EXISTS `spca_activity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `spca_activity` (
  `idSPCA_ACTIVITY` int(11) NOT NULL AUTO_INCREMENT,
  `SPCAno` int(11) NOT NULL,
  `startdate` date NOT NULL,
  `starttime` time NOT NULL,
  `enddate` date NOT NULL,
  `endtime` varchar(45) NOT NULL,
  `venue` varchar(45) NOT NULL,
  PRIMARY KEY (`idSPCA_ACTIVITY`),
  KEY `fk_SPCA_ACTIVITY_SPCA1_idx` (`SPCAno`),
  CONSTRAINT `fk_SPCA_ACTIVITY_SPCA1` FOREIGN KEY (`SPCAno`) REFERENCES `spca` (`SPCAno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `spca_activity`
--

LOCK TABLES `spca_activity` WRITE;
/*!40000 ALTER TABLE `spca_activity` DISABLE KEYS */;
/*!40000 ALTER TABLE `spca_activity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `spca_persons`
--

DROP TABLE IF EXISTS `spca_persons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `spca_persons` (
  `idSPCA_PERSONS` int(11) NOT NULL AUTO_INCREMENT,
  `SPCAno` int(11) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `middle` varchar(45) NOT NULL,
  `classification` varchar(45) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`idSPCA_PERSONS`),
  KEY `fk_SPCA_PERSONS_SPCA1_idx` (`SPCAno`),
  CONSTRAINT `fk_SPCA_PERSONS_SPCA1` FOREIGN KEY (`SPCAno`) REFERENCES `spca` (`SPCAno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `spca_persons`
--

LOCK TABLES `spca_persons` WRITE;
/*!40000 ALTER TABLE `spca_persons` DISABLE KEYS */;
/*!40000 ALTER TABLE `spca_persons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trademark_requestinginfo`
--

DROP TABLE IF EXISTS `trademark_requestinginfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trademark_requestinginfo` (
  `idTRADEMARK_REQUESTINGINFO` int(11) NOT NULL,
  `TRADEMARKUSEno` int(11) NOT NULL AUTO_INCREMENT,
  `requestedby` varchar(45) NOT NULL,
  `requestedby_position` varchar(45) NOT NULL,
  `organization` int(11) NOT NULL,
  `IDnumber` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telephone` varchar(45) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  PRIMARY KEY (`idTRADEMARK_REQUESTINGINFO`),
  KEY `fk_TRADEMARK_REQUESTINGINFO_TRADEMARKUSE1_idx` (`TRADEMARKUSEno`),
  KEY `fk_TRADEMARK_REQUESTINGINFO_REF_USERS1_idx` (`organization`),
  CONSTRAINT `fk_TRADEMARK_REQUESTINGINFO_REF_USERS1` FOREIGN KEY (`organization`) REFERENCES `ref_users` (`userID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_TRADEMARK_REQUESTINGINFO_TRADEMARKUSE1` FOREIGN KEY (`TRADEMARKUSEno`) REFERENCES `trademarkuse` (`TRADEMARKUSEno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trademark_requestinginfo`
--

LOCK TABLES `trademark_requestinginfo` WRITE;
/*!40000 ALTER TABLE `trademark_requestinginfo` DISABLE KEYS */;
/*!40000 ALTER TABLE `trademark_requestinginfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trademarkuse`
--

DROP TABLE IF EXISTS `trademarkuse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trademarkuse` (
  `TRADEMARKUSEno` int(11) NOT NULL AUTO_INCREMENT,
  `activityID` int(11) NOT NULL,
  `trademark` int(11) NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `duration` varchar(45) NOT NULL,
  PRIMARY KEY (`TRADEMARKUSEno`),
  KEY `fk_TRADEMARKUSE_ACTIVITY1_idx` (`activityID`),
  KEY `fk_TRADEMARKUSE_REF_TRADEMARKS1_idx` (`trademark`),
  CONSTRAINT `fk_TRADEMARKUSE_ACTIVITY1` FOREIGN KEY (`activityID`) REFERENCES `activity` (`activityID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_TRADEMARKUSE_REF_TRADEMARKS1` FOREIGN KEY (`trademark`) REFERENCES `ref_trademarks` (`idREF_TRADEMARKS`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trademarkuse`
--

LOCK TABLES `trademarkuse` WRITE;
/*!40000 ALTER TABLE `trademarkuse` DISABLE KEYS */;
/*!40000 ALTER TABLE `trademarkuse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'mydb'
--

--
-- Dumping routines for database 'mydb'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-02-23 23:05:37
