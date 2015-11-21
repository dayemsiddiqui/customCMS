-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: localhost    Database: icpc
-- ------------------------------------------------------
-- Server version	5.6.26

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Workshops','2015-10-08 03:39:48','2015-10-08 03:39:48');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `availability` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES (1,'Somebody Edited','Education Edited','New Posmedasx Content Edited','','|Monday|Tuesday|Wednesday|Friday|Sunday','2015-11-20 02:00:16','2015-11-20 02:40:17'),(2,'New New Member','','multi checks','','|Monday|Tuesday|Thursday|Friday|Sunday','2015-11-20 02:21:06','2015-11-20 02:21:06');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2015_09_19_060220_create_posts_table',1),('2015_09_19_122353_create_categories_table',1),('2015_10_08_080607_create_tags_table',1),('2015_10_08_082228_create_posttags_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `show` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Most Amazing Post','This is amazing very amazing',1,'Dayem Siddiqui',NULL,'2015-10-08 03:40:23','2015-10-08 03:40:23',1),(2,'Subtring Intentions','Quantum mechanics (QM; also known as quantum physics, or quantum theory), including quantum field theory, is a fundamental branch of physics concerned with processes involving, for example, atoms and photons. In such processes, said to be quantized, the action has been observed to be only in integer multiples of the Planck constant, a physical quantity that is exceedingly, indeed perhaps ultimately, small. This is utterly inexplicable in classical physics. Quantum mechanics gradually arose from Max Planck\'s solution in 1900 to the black-body radiation problem (reported 1859) and Albert Einstein\'s 1905 paper which offered a quantum-based theory to explain the photoelectric effect (reported 1887). Early quantum theory was significantly reformulated in the mid-1920s. The mathematical formulations of quantum mechanics are abstract. A mathematical function, the wave function, provides information about the probability amplitude of position, momentum, and other physical properties of a particle. Important applications of quantum mechanical theory include superconducting magnets, LEDs and the laser, the transistor and semiconductors such as the microprocessor, medical and research imaging such as MRI and electron microscopy, and explanations for many biological and physical phenomena. Scientific inquiry into the wave nature of light began in the 17th and 18th centuries, when scientists such as Robert Hooke, Christiaan Huygens and Leonhard Euler proposed a wave theory of light based on experimental observations.[1] In 1803, Thomas Young, an English polymath, performed the famous double-slit experiment that he later described in a paper entitled On the nature of light and colours. This experiment played a major role in the general acceptance of the wave theory of light. In 1838, Michael Faraday discovered cathode rays. These studies were followed by the 1859 statement of the black-body radiation problem by Gustav Kirchhoff, the 1877 suggestion by Ludwig Boltzmann that the energy states of a physical system can be discrete, and the 1900 quantum hypothesis of Max Planck.[2] Planck\'s hypothesis that energy is radiated and absorbed in discrete \"quanta\" (or energy elements) precisely matched the observed patterns of black-body radiation. In 1896, Wilhelm Wien empirically determined a distribution law of black-body radiation,[3] known as Wien\'s law in his honor. Ludwig Boltzmann independently arrived at this result by considerations of Maxwell\'s equations. However, it was valid only at high frequencies and underestimated the radiance at low frequencies. Later, Planck corrected this model using Boltzmann\'s statistical interpretation of thermodynamics and proposed what is now called Planck\'s law, which led to the development of quantum mechanics. Following Max Planck\'s solution in 1900 to the black-body radiation problem (reported 1859), Albert Einstein offered a quantum-based theory to explain the photoelectric effect (1905, reported 1887). Around 1900-1910, the atomic theory and the corpuscular theory of light[4] first came to be widely accepted as scientific fact; these latter theories can be viewed as quantum theories of matter and electromagnetic radiation, respectively. Among the first to study quantum phenomena in nature were Arthur Compton, C.V. Raman, and Pieter Zeeman, each of whom has a quantum effect named after him. Robert A. Millikan studied the photoelectric effect experimentally, and Albert Einstein developed a theory for it. At the same time, Niels Bohr developed his theory of the atomic structure, which was later confirmed by the experiments of Henry Moseley. In 1913, Peter Debye extended Niels Bohr\'s theory of atomic structure, introducing elliptical orbits, a concept also introduced by Arnold Sommerfeld.[5] This phase is known as old quantum theory. According to Planck, each energy element (E) is proportional to its frequency (&nu;): By 1930, quantum mechanics had been further unified and formalized by the work of David Hilbert, Paul Dirac and John von Neumann[9] with greater emphasis on measurement, the statistical nature of our knowledge of reality, and philosophical speculation about the \'observer\'. It has since permeated many disciplines including quantum chemistry, quantum electronics, quantum optics, and quantum information science. Its speculative modern developments include string theory and quantum gravity theories. It also provides a useful framework for many features of the modern periodic table of elements, and describes the behaviors of atoms during chemical bonding and the flow of electrons in computer semiconductors, and therefore plays a crucial role in many modern technologies. While quantum mechanics traditionally described the world of the very small, it is also needed to explain certain recently investigated macroscopic systems such as superconductors, superfluids, and large organic molecules.[10] The word quantum derives from the Latin, meaning \"how great\" or \"how much\".[11] In quantum mechanics, it refers to a discrete unit assigned to certain physical quantities such as the energy of an atom at rest (see Figure 1). The discovery that particles are discrete packets of energy with wave-like properties led to the branch of physics dealing with atomic and subatomic systems which is today called quantum mechanics. It underlies the mathematical framework of many fields of physics and chemistry, including condensed matter physics, solid-state physics, atomic physics, molecular physics, computational physics, computational chemistry, quantum chemistry, particle physics, nuclear chemistry, and nuclear physics.[12] Some fundamental aspects of the theory are still actively studied.[13] Quantum mechanics is essential to understanding the behavior of systems at atomic length scales and smaller. If the physical nature of an atom was solely described by classical mechanics, electrons would not orbit the nucleus, since orbiting electrons emit radiation (due to circular motion) and would eventually collide with the nucleus due to this loss of energy. This framework was unable to explain the stability of atoms. Instead, electrons remain in an uncertain, non-deterministic, smeared, probabilistic wave&ndash;particle orbital about the nucleus, defying the traditional assumptions of classical mechanics and electromagnetism.[14] Quantum mechanics was initially developed to provide a better explanation and description of the atom, especially the differences in the spectra of light emitted by different isotopes of the same chemical element, as well as subatomic particles. In short, the quantum-mechanical atomic model has succeeded spectacularly in the realm where classical mechanics and electromagnetism falter. Broadly speaking, quantum mechanics incorporates four classes of phenomena for which classical physics cannot account:',5,'Dayem Siddiqui','2.jpg','2015-10-15 00:26:57','2015-11-03 01:27:05',1),(3,'Title Changed tags changed','Changed content by 1930, quantum mechanics had been further unified and formalized by the work of David Hilbert, Paul Dirac and John von Neumann[9] with greater emphasis on measurement, the statistical nature of our knowledge of reality, and philosophical speculation about the \'observer\'. It has since permeated many disciplines including quantum chemistry, quantum electronics, quantum optics, and quantum information science. Its speculative modern developments include string theory and quantum gravity theories. It also provides a useful framework for many features of the modern periodic table of elements, and describes the behaviors of atoms during chemical bonding and the flow of electrons in computer semiconductors, and therefore plays a crucial role in many modern technologies. While quantum mechanics traditionally described the world of the very small, it is also needed to explain certain recently investigated macroscopic systems such as superconductors, superfluids, and large organic molecules.[10] The word quantum derives from the Latin, meaning \"how great\" or \"how much\".[11] In quantum mechanics, it refers to a discrete unit assigned to certain physical quantities such as the energy of an atom at rest (see Figure 1). The discovery that particles are discrete packets of energy with wave-like properties led to the branch of physics dealing with atomic and subatomic systems which is today called quantum mechanics. It underlies the mathematical framework of many fields of physics and chemistry, including condensed matter physics, solid-state physics, atomic physics, molecular physics, computational physics, computational chemistry, quantum chemistry, particle physics, nuclear chemistry, and nuclear physics.[12] Some fundamental aspects of the theory are still actively studied.[13] Quantum mechanics is essential to understanding the behavior of systems at atomic length scales and smaller. If the physical nature of an atom was solely described by classical mechanics, electrons would not orbit the nucleus, since orbiting electrons emit radiation (due to circular motion) and would eventually collide with the nucleus due to this loss of energy. This framework was unable to explain the stability of atoms. Instead, electrons remain in an uncertain, non-deterministic, smeared, probabilistic wave&ndash;particle orbital about the nucleus, defying the traditional assumptions of classical mechanics and electromagnetism.[14] Quantum mechanics was initially developed to provide a better explanation and description of the atom, especially the differences in the spectra of light emitted by different isotopes of the same chemical element, as well as subatomic particles. In short, the quantum-mechanical atomic model has succeeded spectacularly in the realm where classical mechanics and electromagnetism falter. Broadly speaking, quantum mechanics incorporates four classes of phenomena for which classical physics cannot account:',5,'Author Changed',NULL,'2015-10-15 00:36:48','2015-11-04 23:46:34',1),(4,'Unpublished Post','New poset publishing after some edits more edites some more edits',1,'Dayem Siddiqui',NULL,'2015-11-06 00:37:15','2015-11-10 00:56:26',1),(5,'dsadasdsa','<span style=\"color: #ff9900;\"><strong>adsdasd&nbsp;</strong></span><br /><span style=\"color: #ff9900;\"><strong>dasdd</strong></span>',1,'Dayem Siddiqui',NULL,'2015-11-09 23:24:10','2015-11-09 23:24:10',1),(6,'dasd','dasdsadNe w post with redirect back edit it d',1,'Dayem Siddiqui',NULL,'2015-11-09 23:33:55','2015-11-09 23:37:48',1),(7,'dasd','New POstdasdsada saddasd',1,'Dayem Siddiqui',NULL,'2015-11-09 23:43:43','2015-11-10 00:43:57',1),(8,'New POst with integrated tags','I hope it works',1,'Mememememe',NULL,'2015-11-20 02:59:57','2015-11-20 02:59:57',1),(9,'Second Try','somdamdas',0,'dasdasd',NULL,'2015-11-20 03:13:19','2015-11-20 03:13:19',1);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posttags`
--

DROP TABLE IF EXISTS `posttags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posttags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posttags`
--

LOCK TABLES `posttags` WRITE;
/*!40000 ALTER TABLE `posttags` DISABLE KEYS */;
INSERT INTO `posttags` VALUES (1,1,1,'2015-10-08 03:48:10','2015-10-08 03:48:10'),(2,2,2,'2015-10-08 05:39:24','2015-10-08 05:39:24'),(3,1,2,'2015-10-08 05:39:37','2015-10-08 05:39:37'),(4,4,1,'2015-10-10 07:06:39','2015-10-10 07:06:39'),(5,9,1,'2015-10-10 07:06:39','2015-10-10 07:06:39'),(6,9,11,'2015-10-15 01:34:44','2015-10-15 01:34:44'),(7,10,11,'2015-10-15 01:34:44','2015-10-15 01:34:44'),(24,24,3,'2015-11-04 23:47:26','2015-11-04 23:47:26'),(25,23,3,'2015-11-04 23:47:26','2015-11-04 23:47:26'),(26,22,3,'2015-11-04 23:47:26','2015-11-04 23:47:26'),(27,27,4,'2015-11-07 06:26:15','2015-11-07 06:26:15'),(28,26,4,'2015-11-07 06:26:15','2015-11-07 06:26:15'),(29,27,5,'2015-11-09 23:25:07','2015-11-09 23:25:07'),(30,25,5,'2015-11-09 23:25:07','2015-11-09 23:25:07'),(31,24,6,'2015-11-09 23:36:41','2015-11-09 23:36:41'),(32,21,5,'2015-11-10 00:18:44','2015-11-10 00:18:44'),(33,26,9,'2015-11-20 03:13:19','2015-11-20 03:13:19'),(34,25,9,'2015-11-20 03:13:19','2015-11-20 03:13:19'),(35,31,9,'2015-11-20 03:13:19','2015-11-20 03:13:19');
/*!40000 ALTER TABLE `posttags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'Top 10','2015-10-08 03:38:15','2015-10-08 03:38:15'),(2,'Amazing Post','2015-10-08 05:39:15','2015-10-08 05:39:15'),(3,'Some Wierd Tag','2015-10-10 05:56:44','2015-10-10 05:56:44'),(4,'games','2015-10-10 06:18:38','2015-10-10 06:18:38'),(5,'level','2015-10-10 06:18:38','2015-10-10 06:18:38'),(6,'xbox','2015-10-10 06:18:38','2015-10-10 06:18:38'),(8,'notgames','2015-10-10 06:54:05','2015-10-10 06:54:05'),(9,'different','2015-10-10 07:06:39','2015-10-10 07:06:39'),(10,'hello','2015-10-15 01:34:43','2015-10-15 01:34:43'),(12,'World','2015-11-03 02:45:26','2015-11-03 02:45:26'),(13,'new','2015-11-03 02:45:26','2015-11-03 02:45:26'),(14,'game','2015-11-03 02:45:26','2015-11-03 02:45:26'),(15,'hi','2015-11-03 02:45:26','2015-11-03 02:45:26'),(17,'something','2015-11-03 07:02:33','2015-11-03 07:02:33'),(18,'totallyentirely','2015-11-03 07:02:33','2015-11-03 07:02:33'),(19,'something','2015-11-03 07:04:10','2015-11-03 07:04:10'),(20,'totallyentirely','2015-11-03 07:04:10','2015-11-03 07:04:10'),(21,'dsadasd','2015-11-03 07:04:16','2015-11-03 07:04:16'),(22,'dsadsadsasdasdas','2015-11-03 07:06:43','2015-11-03 07:06:43'),(23,'ferrarri','2015-11-03 07:07:33','2015-11-03 07:07:33'),(24,'totdsadasdsad','2015-11-03 07:16:10','2015-11-03 07:16:10'),(25,'laptop','2015-11-03 07:23:34','2015-11-03 07:23:34'),(26,'anything','2015-11-03 07:46:09','2015-11-03 07:46:09'),(27,'antfhasfasda','2015-11-03 07:46:43','2015-11-03 07:46:43'),(29,'25','2015-11-04 23:38:46','2015-11-04 23:38:46'),(30,'23','2015-11-04 23:38:46','2015-11-04 23:38:46'),(31,'totallydifferent','2015-11-20 03:13:19','2015-11-20 03:13:19');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Dayem Siddiqui','dayem@icpc.com','$2y$10$niGxbPDucQnKOO4S50sFbOUexiqzXNP4KfOUASfWz20BByqGouYMy','B286SYoxYvoO9GEdaPVDoMCjuaIam2VA1uVWi3s70ewjWgMEAGtbk0GPRdgx','2015-10-08 03:36:34','2015-11-10 03:27:14');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-21 11:38:27
