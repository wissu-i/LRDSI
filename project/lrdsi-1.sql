-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2023 at 05:19 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lrdsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `communications internationales`
--

CREATE TABLE `communications internationales` (
  `Num` int(100) NOT NULL,
  `Titre` varchar(500) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Conference` varchar(500) NOT NULL,
  `Autheurs` varchar(500) NOT NULL,
  `Source` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `communications internationales`
--

INSERT INTO `communications internationales` (`Num`, `Titre`, `Date`, `Conference`, `Autheurs`, `Source`) VALUES
(1, '- A Full Distributed Scalar point Multiplication Protocol for Wireless sensor Networks', '15-16 Decembre 2019', 'International Conference on Theoretical and Applicative Aspects of Computer Science (ICTAACS 19)', 'Mohamed Ramdani, Mohamed Benmohammed et Nadjia Benblidia', 'http://fs.univ-skikda.dz/informatique/ICTAACS-2019/'),
(2, '- A Semantic Approach for Handling Probabilistic Knowledge of Fuzzy Ontologies', '03-05 Mai 2019', '21st International Conference on Enterprise Information Systems', 'Ishak Riali, Messaouda Fareh, Hafida Bouarfa', 'http://www.iceis.org/DoctoralConsortium.aspx?y=2019'),
(3, '- Fundamentals of feature selection: an overview and comparison', '03-07 Novembre 2019', '16th ACS/IEEE International Conference on Computer Systems and Applications AICCSA 2019', 'Benkessirat Amina, Benblidia Nadjia', 'http://www.aiccsa.net/AICCSA2019/final-condensed-program-2'),
(4, '- A multi-level fusion approach for climate variation study using multi-source data ? Case study: Algeria', '03-07 Novembre 2019', '16th ACS/IEEE International Conference on Computer Systems and Applications AICCSA 2019', 'Abbas Mohamed Amir, Benblidia Nadjia, Bachari Nour Islam', 'http://www.aiccsa.net/AICCSA2019/final-condensed-program-2'),
(5, '- Diagnosis of Lung Cancer Using Artificial Immune System', '24-26 Avril 2019', 'Electrical-Electronics & Biomedical Engineering & Computer Science EBBT 2019', 'Melike Gnay, Zeynep Orman, Tolga Ensari, Saliha Oukid et Nadjia Benblidia', 'https://ieeexplore.ieee.org/document/8742075'),
(6, '- Towards the user evolution using queries and by the applying of the genetic algorithm', '03-07 Novembre 2019', '16th ACS/IEEE International Conference on Computer Systems and Applications AICCSA 2019', 'Boulkrinat Nour El Houda, Benblidia Nadjia et Meziane Abdelkrim', 'http://www.aiccsa.net/AICCSA2019/final-condensed-program-2'),
(7, '- Microarray lung Cancer Data Classification Using Feature selection', '24-26 Avril 2019', 'Electrical-Electronics & Biomedical Engineering & Computer Science EBBT 2019', 'Meriem Amrane, Saliha Oukid, Tolga Ensari, Nadjia Benblidia et Zeynep Orman', 'https://ieeexplore.ieee.org/abstract/document/8742080'),
(8, '- Efficient Elliptic Curve Cryptoprocessor for enabling TLS protocol in low-cost recon?gurable SoCs', '20-22 Novembre 2019', 'DCIS 2019 XXXIV Conference on Design of Circuits and Integrated Systems', 'Luis Parrilla, Ahmed Mohamed Bellemou, Antonio Garcia, Encarnacion Castillo', 'https://dcis2019.org/program-2/'),
(9, '- Using Forward / Backword Decision Trees on GSM441161 and GSE32863 Microarray Data', '24-26 Avril 2019', 'Electrical-Electronics & Biomedical Engineering & Computer Science EBBT 2019', 'Meriem Amrane, Saliha Oukid, Tolga Ensari', 'https://ieeexplore.ieee.org/abstract/document/8741625');

-- --------------------------------------------------------

--
-- Table structure for table `communications nationales`
--

CREATE TABLE `communications nationales` (
  `Num` int(100) NOT NULL,
  `Titre` varchar(500) NOT NULL,
  `Date` varchar(500) NOT NULL,
  `Conference` varchar(1000) NOT NULL,
  `Autheurs` varchar(500) NOT NULL,
  `Source` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `equipe`
--

CREATE TABLE `equipe` (
  `ide` int(11) NOT NULL,
  `nomEquipe` varchar(100) NOT NULL,
  `nomChef` varchar(100) NOT NULL,
  `domaine` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `equipe`
--

INSERT INTO `equipe` (`ide`, `nomEquipe`, `nomChef`, `domaine`) VALUES
(611, 'INTELLIGENCE COMPUTATIONNELLE', 'OUKID KHOUAS', 'INTEC'),
(613, 'BIG DATA ET SYSTEMES DECISIONNELS', 'ABED BOUARFA ', 'BDD'),
(614, ' RECONNAISSANCE DES FORMES ET APPLICATIONS', 'BENBLIDIA', 'RFA'),
(615, 'SECURITE DE SYSTEMES INFORMATIQUES ET RAISONNEMENT', 'BOUSTIA', 'SIIR');

-- --------------------------------------------------------

--
-- Table structure for table `evenements`
--

CREATE TABLE `evenements` (
  `Num` int(100) NOT NULL,
  `Titre` varchar(500) NOT NULL,
  `Type` varchar(500) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Lieu` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `membres`
--

CREATE TABLE `membres` (
  `id` bigint(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `grade` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `ide` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `membres`
--

INSERT INTO `membres` (`id`, `nom`, `prenom`, `grade`, `email`, `ide`) VALUES
(41, '', '', '', '', 614),
(42, 'KAMECHE', 'Abdallah ', 'enseignant chercheur', 'kameche.abdallah@gmail.com', 614),
(43, 'MEZZI', 'Melyara ', 'enseignant chercheur', 'mezzi.melyara@gmail.com', 614),
(44, 'OUAHRANI ', 'Leila ', 'enseignant chercheur', 'louahrani@hotmail.com', 614),
(45, 'OUKID ', 'Lamia ', 'enseignant chercheur', 'benblidia@gmail.com', 614),
(46, 'REGUIEG ', 'F. Zohra', 'enseignant chercheur', 'zreguieg@gmail.com', 614),
(47, 'ABBAS', 'Mohamed Amir', 'doctorant', '', 614),
(48, 'BAALOUL', 'Ali', 'doctorant', '', 614),
(49, 'BELLEMOU ', 'Ahmed Mohamed', 'doctorant', '', 614),
(50, 'BENKESSIRAT', 'Amina', 'doctorant', '', 614),
(51, 'BOUCHALI ', 'Anissa', 'doctorant', '', 614),
(52, 'BOUKADOUM', 'Omar', 'doctorant', '', 614),
(53, 'BOULKRINET', 'Nour ElHouda', 'doctorant', '', 614),
(54, 'HENNI', 'Imène', 'doctorant', '', 614),
(55, 'RAMDANI', 'Mohamed', 'doctorant', '', 614),
(56, 'RALEM AHMED', 'Abdelkader', 'doctorant', '', 614),
(57, 'ZERROUKI', 'Khadidja', 'doctorant', '', 614),
(58, 'BOUSTIA', 'Narhimène', 'Professeur', 'nboustia@gmail.com', 615),
(59, 'AROUSSI ', 'Sana ', 'enseignant chercheur', 's_aroussi@esi.dz', 615),
(60, 'ARKAM', 'Meriem ', 'enseignant chercheur/doctorante', 'arkam2406@yahoo.fr', 615),
(61, 'BOUMAHDI', 'Fatima', 'enseignant chercheur', 'f_boumahdi@esi.dz', 615),
(62, 'FAREH', 'Messaouda', 'enseignant chercheur', 'ghyasmine@hotmail.com', 615),
(63, 'GHEBGHOUB', 'Yasmine ', 'enseignant chercheur/doctorant', 'o.hadjyahia@gmail.com', 615),
(64, 'REZOUG', 'Nachida', 'enseignant chercheur', 'rnac1972@yahoo.fr', 615),
(65, 'BENKESSIRAT', 'Selma', 'doctorant', '', 615),
(66, 'BOUACHERINE', 'Abdelkader', 'doctorant', '', 615),
(67, 'BELLEMOU ', 'Ahmed Mohamed', 'doctorant', '', 615),
(68, 'BENKESSIRAT', 'Amina', 'doctorant', '', 615),
(69, 'CHABA MOUNA ', 'Mustapha', 'doctorant', '', 615),
(70, 'CHERGUI ', 'Nadjah', 'doctorant', '', 615),
(71, 'DJIROUN', 'Fatma Zohra', 'doctorant', '', 615),
(72, 'SAIDIA', 'Siham', 'doctorant', '', 615),
(78, 'NNFNF', 'membre', 'hghjjgjhg', 'esjhfjds@email.com', 611),
(79, 'anti', 'membre', 'hghjjgjhg', 'nobodyuwuouo@gmail.com', 611);

-- --------------------------------------------------------

--
-- Table structure for table `memoires de master`
--

CREATE TABLE `memoires de master` (
  `Num` int(100) NOT NULL,
  `Titre` varchar(500) NOT NULL,
  `Candidat` varchar(500) NOT NULL,
  `Encadreurs` varchar(500) NOT NULL,
  `Date de soutenance` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `memoires magister`
--

CREATE TABLE `memoires magister` (
  `Num` int(100) NOT NULL,
  `Titre` varchar(500) NOT NULL,
  `Candidat` varchar(500) NOT NULL,
  `Encadreurs` varchar(500) NOT NULL,
  `Date de soutenance` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `memoires magister`
--

INSERT INTO `memoires magister` (`Num`, `Titre`, `Candidat`, `Encadreurs`, `Date de soutenance`) VALUES
(1, '- Parallelisation du processus d\'annotation pour la recherche d\'images de patients atteints de retinopathie diabetique', 'Boukadoum Omar', 'Benblida Nadjia & Oukid Saliha', '10 Mars 2016'),
(2, '- Annotation semantique de corpus d\'images IRM a l\'aide des techniques du graph-mining', 'Belaggoune Mohamed', 'Oukid Saliha & Benblida Nadjia', '01 Mars 2016'),
(3, '- Deploiement d\'une plateforme web securisee pour le suivi de la retinopathie diabetique', 'Fekhar Mohamed Amine', 'Benblida Nadjia & Oukid Saliha', '10 Janvier 2016'),
(4, '- Fusion d\'informations pour la videosurveillance intelligente', 'Zouaoui Abderraouf', 'Benblida Nadjia & Oukid Saliha', '15 Janvier 2016'),
(5, '- La confiance dans l\'Internet des Objets', 'Selt Rachid', 'Benblida Nadjia & Chalal Yacine', '13 Decembre 2015'),
(6, '- Protection et Securisation des Donnees Medicales sur le Cloud Computing', 'Kacha Lynda', 'Oukid Saliha & Benblidia Nadjia', '10 Novembre 2015'),
(7, '- Integration de l\'analyse des reseaux sociaux dans le processus de recherche d\'information', 'Sadouki Fatiha', 'Benblida Nadjia & Chikhi F. Nacim', '24 Avril 2015'),
(8, '- Methode d\'arbre en indexation et recherche d\'image par similitude visuelle', 'Khalfi Ali', 'Benblida Nadjia & Cherif Zahar M. Amine', 'Mars 2015'),
(9, '- OLAP et Recherche d\'information : Operateurs de summarization de documents et de requetes OLAP sur les textes', 'Bouslah Meriem', 'Benblida Nadjia & Boussaid Omar', '29 Janvier 2014'),
(10, '- Developpement d\'un controleur multi-agents pour les robots manipulateurs mobiles : cas du robot RobuTER/ULM', 'Messous Mohamed Ayoub', 'Oukid Saliha & Hentout Mohamed', 'Decembre 2013'),
(11, '- Un modele du decideur pour l\'aide a la specification des besoins', 'Bouaissa Djamila', 'Oukid Saliha & Chalal Rachid', 'Fevrier 2013'),
(12, '- Summarization des documents dans les textes cubes', 'Lababou Aicha', 'Benblida Nadjia & Boussaid Omar', '28 Fevrier 2013'),
(13, '- La fragmentation verticale dans les bases de donnees volumineuses', 'Messaoudi Mounir', 'Oukid Saliha & Bellatreche Mohamed', 'Octobre 2012'),
(14, '- La fragmentation verticale dans les bases de donnees volumineuses', 'Lamara Mohamed', 'Benblida Nadjia & Reguieg F. Zohra', '01 fevrier2012'),
(15, '- Detection de la peau dans les images a l\'aide de la regression logistique bayesienne a noyau multinomiale', 'Filali Idir', 'Benblida Nadjia & Ziou Djamel', '19 fevrier 2012'),
(16, '- La fragmentation verticale dans les bases de donnees volumineuses', 'Messaoudi Mounir', 'Oukid Saliha & Bellatreche Mohamed', 'Octobre 2012'),
(17, '- Utilisation des reseaux bayesiens pour calculer la fiabilite des systemes', 'Zahra Fatma Zohra', 'Oukid Saliha', 'Septembre 2012'),
(18, '- Systeme hybride d\'integration automatique des bases de donnees a base ontologique', 'Arkam Meriem', 'Oukid Saliha', '01 Septembre 2012'),
(19, '- Systeme multi-agent pour la classification dynamique floue des donnees evolutives et mulimodales', 'Abbas Mohamed Amir', 'Oukid Saliha & Moussaoui Abdelouaheb', '17 Mai 2012'),
(20, '', 'Cherfa Imene', 'Bennouar Djamel', '26 Avril 2012'),
(21, '', 'Mancer Yasmine', 'Bennouar Djamel', '26 Avril 2012'),
(22, '- Classification hybride a base de reseaux bayesiens', 'Boudjebour Karim', 'Oukid Saliha', '09 Novembre 2010'),
(23, '- Application des lois de commande automatique a l\'amelioration de la QoS d\'un serveur web', 'Kezrane Khelifa', 'Bennouar Djamel', '25 Octobre 2011'),
(24, '- Systeme hybride d\'integration automatique des bases de donnees a base ontologique', 'Hamadi Abdelkrim', 'Oukid Saliha & Boussaid Omar', '06 Juillet 2011'),
(25, '- Etude et conception d\'un framework a base de patrons pour la construction d\'un agent', 'Mazari Redha', 'Mahieddine Mohamed', '16 Mai 2011'),
(26, '- Gestion des connaissances dans le domaine medical', 'Zerf Nadjet', 'Oukid Saliha', '06 Mai 2011'),
(27, '- La composition des Web service selon IASA', 'Bentlemsan Khadidja', 'BENNOUAR Djamel & Henni Abderrezak', '07 Octobre 2010'),
(28, '- Indexation textuelle semantique pour un moteur de recherche d\'images sur le Web', 'Bakalem Mahdia', 'Oukid Saliha & Benblidia Nadjia', '29 Septembre 2010'),
(29, '- Fouille dans les documents XML', 'Madani Amina', 'Abed Hafida & Boussad Omar', '01 Juin 2010'),
(30, '- Integration de la logique floue dans la representation des connaissances. Application dans le domaine du batiment', 'Rezoug Nachida', 'Abed Hafida', '16 Juin 2009'),
(31, '- Utilisation des techniques de data mining pour la modelisation du parcours scolaire et la prediction du succes et du risque d\'echec', 'Hamouda Mohamed', 'Oukid Saliha & Benblidia Nadjia', '15 Juin 2009'),
(32, '- Apprentissage de concepts pour la construction d\'ontologie base sur le conceptual clustering', 'Farah Messaouda', 'Oukid Saliha', 'Juin 2008'),
(33, '- Conception d\'un fragment de gestion des connaissances a base de raisonnement a partir de cas pour la re-modelisation des processus metiers', 'Boumahdi Fatima', 'Oukid Saliha', 'Juin 2008');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `datep` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `datep`) VALUES
(1, 'scientific event', 'coming soon a startup event', '2023-05-31'),
(3, 'soutenance doctorant', '', '2023-07-26'),
(4, '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `projetcnepru`
--

CREATE TABLE `projetcnepru` (
  `responsable` varchar(100) NOT NULL,
  `année` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projetcnepru`
--

INSERT INTO `projetcnepru` (`responsable`, `année`) VALUES
('Pr.Benblidia Nadjia (Université Blida 1)', '2009-2011'),
(' Pr. Oukid Saliha (Université Univ. Blida1)', '2009-2011'),
('EJHSFSBFJ', 'FJ');

-- --------------------------------------------------------

--
-- Table structure for table `projetcooperationinternationaux`
--

CREATE TABLE `projetcooperationinternationaux` (
  `responsable` varchar(100) NOT NULL,
  `année` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projetcooperationinternationaux`
--

INSERT INTO `projetcooperationinternationaux` (`responsable`, `année`) VALUES
('Pr.Benblidia Nadjia (Université Blida 1) ; Pr. Ensary Tolga (Univ. Istanbul)\r\n', '2018 -2019'),
(' Pr. Benblidia Nadjia (Université Blida1) ; Pr. Boussaid Omar (Université Lumière Lyon2)', '2018 -2019'),
('Pr. Oukid Saliha (Univ. Blida1) ; Pr. Abdellaoui Abdelkader (Université du Val de Marne (Paris XII))', '2018 -2019');

-- --------------------------------------------------------

--
-- Table structure for table `projetnationauxrecherche`
--

CREATE TABLE `projetnationauxrecherche` (
  `responsable` varchar(100) NOT NULL,
  `année` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projetnationauxrecherche`
--

INSERT INTO `projetnationauxrecherche` (`responsable`, `année`) VALUES
('Pr. Benblidia Nadjia (Université Blida1)', '2011-2012'),
('me', 'hjghg'),
('', ''),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `publications internationales`
--

CREATE TABLE `publications internationales` (
  `Num` int(100) NOT NULL,
  `Titre` varchar(500) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Journal` varchar(500) NOT NULL,
  `Autheurs` varchar(500) NOT NULL,
  `Source` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `publications internationales`
--

INSERT INTO `publications internationales` (`Num`, `Titre`, `Date`, `Journal`, `Autheurs`, `Source`) VALUES
(1, '- A dynamic classification system to study climate variation from multi-source parameters ? Case study: Algeria Insolation', '2019', 'International Review on Computers and Software (IRECOS)', 'Mohamed Amir Abbas, Nadjia Benblidia, Nour El Islam Bachari', 'https://www.praiseworthyprize.org/jsm/index.php?journal=irecos&page=article&op=view&path%5B%5D=23149'),
(2, '- A Conceptual Model for Describing the Integration of Decision Aspect into Big Data', '2019', 'International Journal of InformationSystem Modeling and Design (IJISMD)', 'Chiheb, F, Boumahdi, F, &Bouarfa, H', 'https://www.igi-global.com/gateway/article/243437#pnlRecommendationForm'),
(3, '- Fuzzy Probabilistic Ontology Approach: A Hybrid Model for Handling Uncertain Knowledge in Ontologies', '2019', 'International Journal on Semantic Web and Information Systems (IJSWIS)', 'Ishak Riali, Messaouda Fareh, Hafida Bouarfa', 'https://www.igi-global.com/article/fuzzy-probabilistic-ontology-approach/240232'),
(4, '- Fuzzy Probabilistic Ontology Approach: A Hybrid Model for Handling Uncertain Knowledge in Ontologies', '2019', 'Int. J. Semantic Web Inf. Syst', 'Ishak Riali, Messaouda Fareh,Hafida Bouarfa', 'https://www.igi-global.com/gateway/article/240232'),
(5, '- Modeling incomlete knowledge of semantic web using bayesian networks', '10 Septembre 2019', 'Applied artificial intelligence', 'M. Fareh', 'https://www.tandfonline.com/doi/full/10.1080/08839514.2019.1661578?journalCode=uaai20'),
(6, '- Comparison of Scalar Multiplication Algorithms in a Low Resource Device', '01 Decembre 2020', 'Journal of King Saud University-Computer and Information Sciences', 'Mohamed Ramdani, Mohamed Benmohammed et Nadjia Benblidia', 'https://www.sciencedirect.com/science/article/pii/S1319157819302125?via%3Dihub'),
(7, ' - Efficient implementation on low-cost SoC-FPGAs of TLSv1.2 protocol with ECC_AES support for secure IoT coordinators', '30 Octobre 2019', 'Electronics', 'Ahmed Mohamed Bellemou, Antonio Garcia, Encarnacin Castillo, Nadjia Benblidia, Mohamed Anane, Josâ€š Antonio lvarez-Bermejo, Luis Parrilla', 'https://www.mdpi.com/2079-9292/8/11/1238'),
(8, '- MicroBlaze-Based Multiprocessor embedded cryptosystem on FPGA for Elliptic Curve Scalar Multiplication over Fp', '2019', 'Journal of Circuits, Systems, and Computers', 'Ahmed Mohamed Bellemou, Nadjia Benblidia, Mohamed Anane, Mohamed Issad', 'https://www.worldscientific.com/doi/abs/10.1142/S0218126619500373'),
(9, '- Graph matching approach and generalized median graph for automatic labeling of cortical sulci with parallel and distributed algorithms', 'Mai 2019', 'Cognitive Systems Research', 'Hichem Felouat,Saliha Oukid-Khouas', 'https://www.sciencedirect.com/science/article/abs/pii/S1389041718301402'),
(4, 'scientific event', '2023-06-13', 'jjj', 'hhh', 'http://localhost/project/membres/table.php');

-- --------------------------------------------------------

--
-- Table structure for table `publications nationales`
--

CREATE TABLE `publications nationales` (
  `Num` int(100) NOT NULL,
  `Titre` varchar(500) NOT NULL,
  `Date` varchar(500) NOT NULL,
  `Journal` varchar(1000) NOT NULL,
  `Autheurs` varchar(1000) NOT NULL,
  `Source` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `theses`
--

CREATE TABLE `theses` (
  `Num` int(100) NOT NULL,
  `Titre` varchar(500) NOT NULL,
  `Nom et Prenom` varchar(500) NOT NULL,
  `Directeur(s) de these` varchar(500) NOT NULL,
  `Date de soutenance` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `theses`
--

INSERT INTO `theses` (`Num`, `Titre`, `Nom et Prenom`, `Directeur(s) de these`, `Date de soutenance`) VALUES
(1, '- Planning and derivation of products in software product line based on software architecture', 'Lahiani Nesrine', 'Bennouar Djamel (Univ. Bouira)', '03 Fevrier 2019'),
(2, '- Les Entrepots de textes (Text Warehousing): Structuration, Modelisation et Alimentation des TWH', 'Attaf Sarah', 'Benblidia Nadjia (Univ. Blida1) & Boussaid Omar (Univ. Lyon2, France)', '14 Juillet 2018'),
(3, '- Un formalisme de securite dans le cloud computing', 'Guesmia Khalida', 'Boustia Narhimene (Univ. Blida1)', '09 Juillet 2018'),
(4, '- Context-Aware Information Retrieval System: Contribution to a Folksonomy-based Semantic Information Retrieval Model', 'Mezzi Melyara', 'Benblidia Nadjia (Univ. Blida1)', '12 Juin 2018'),
(5, '- Inference bayesienne pour la reconnaissance d\'evenements dans les albums photos', 'Bacha Siham', 'Benblidia Nadjia (Univ. Blida1)', '27 Mai 2018'),
(6, '- La modelisation des aspects de securite dans le cloud', 'Ghebghoub Yasmina', 'Oukid Saliha (Univ. Blida1) & Boussaid Omar (Univ. Lyon2, France)', '11 Juin 2017'),
(7, '- Approche pour la detection d\'objets saillants basee sur la classification par graphe et le raffinement spatial', 'Filali Idir', 'Benblidia Nadjia (Univ. Blida1) & Allili Mohand Said (Univ. du Quebec en Outaouais, Canada)', '10 Mai 2017'),
(8, '- Optimal ensemble pruning in the context of game theory based learning', 'Ikhlef Hadjer', 'Bouchaffra Djamel (CDTA)', '07 Mai 2017'),
(9, '- Visualization for data mining and analysis of multidimensional data', 'Ameur Khadidja', 'Benblidia Nadjia (Univ. Blida1) & Oukid Saliha (Univ. Blida1)', '07 Mai 2017'),
(10, '- L\'analyse des reseaux sociaux et OLAP', 'Hannachi Lilia', 'Benblidia Nadjia (Univ. Blida1) & Boussaid Omar (Univ. Lyon2, France)', '18 Septembre 2016'),
(11, '- Conception de systemes embarques basee sur les concepts de l\'article logicielle', 'Baouiya Hakim', 'Bennouar Djamel (Univ. Blida1) & Ait Mohamed Othmane (Univ. Concordia)', '25 Avril 2016\r\n'),
(12, '- Les entrepots de textes (Text Warehousing): Construction et analyse en ligne des cubes textes', 'Oukid lamia', 'Benblidia Nadjia (Univ. Blida1) & Boussaid Omar (Univ. Lyon2, France)', '28 Juin 2015');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`ide`);

--
-- Indexes for table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ide` (`ide`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `ide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=617;

--
-- AUTO_INCREMENT for table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `membres`
--
ALTER TABLE `membres`
  ADD CONSTRAINT `ide` FOREIGN KEY (`ide`) REFERENCES `equipe` (`ide`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
