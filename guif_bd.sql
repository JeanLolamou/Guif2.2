-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 06 avr. 2022 à 15:13
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `guif_bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `accueils`
--

CREATE TABLE `accueils` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `date_event` text DEFAULT NULL,
  `lieu` text DEFAULT NULL,
  `nb_participant` int(11) DEFAULT 0,
  `nb_pays` int(11) DEFAULT 0,
  `nb_entrep` int(11) DEFAULT 0,
  `nb_investisseur` int(11) DEFAULT 0,
  `institu_honneur` varchar(255) DEFAULT NULL,
  `supprimer` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `libelle` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `supprimer` int(11) DEFAULT 0,
  `date` varchar(255) DEFAULT NULL,
  `libelleFr` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `albums`
--

INSERT INTO `albums` (`id`, `libelle`, `image`, `supprimer`, `date`, `libelleFr`) VALUES
(1, 'TEST', '1615810543.JPG', 0, NULL, 'Test fr');

-- --------------------------------------------------------

--
-- Structure de la table `forums`
--

CREATE TABLE `forums` (
  `id` int(11) NOT NULL,
  `forum` text DEFAULT NULL,
  `pourquoi_forum` text DEFAULT NULL,
  `lieu_forum_text` text DEFAULT NULL,
  `lieu_forum_maps` text DEFAULT NULL,
  `supprimer` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `intervenants`
--

CREATE TABLE `intervenants` (
  `id` int(11) NOT NULL,
  `nom` text DEFAULT NULL,
  `fonction` text DEFAULT NULL,
  `fonction_en` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `description_en` text DEFAULT NULL,
  `image` text NOT NULL,
  `facebook` text DEFAULT NULL,
  `twitter` text DEFAULT NULL,
  `linkedin` text DEFAULT NULL,
  `ordre` int(11) DEFAULT 0,
  `supprimer` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `intervenants`
--

INSERT INTO `intervenants` (`id`, `nom`, `fonction`, `fonction_en`, `description`, `description_en`, `image`, `facebook`, `twitter`, `linkedin`, `ordre`, `supprimer`) VALUES
(1, 'Mamoudou Nagnalen BARRY', 'Ministre de l\'Agriculture', 'Minister of Agriculture', '<p>Mamoudou Nagnalen BARRY, avec près de 15 ans d’expérience professionnelle, est un expert international bilingue (anglais et français) qui a travaillé pour le Département Finance, Compétitivité et Innovation au siège de la Banque mondiale à Washington DC, USA. En tant que Project Manager et Expert en Développement du Secteur Financier, il a dirigé, co-dirigé ou participé à plusieurs projets et études de la Banque mondiale à travers le monde, notamment en Indonésie, au Vietnam, en Iraq, au Liban, au Kenya, en RDC, au Tchad, au Burkina, en Côte d’Ivoire, au Benin, en Guinée Bissau, et en République de Guinée (son pays natal). Il a rejoint la Banque mondiale à travers le compétitif recrutement de l’institution dénommé YPP, après avoir servi comme Consultant pour la Société Financière Internationale (IFC) à Conakry (Guinée). Ses activités au sein du groupe de la Banque mondiale couvraient l’accès au financement des PMEs (notamment agricoles et startups), la stabilité financière, l’accès des entreprises et des individus aux services financiers (y compris digitaux), le développement du marché des capitaux, l’amélioration du climat des affaires, la promotion du contenu local et de l’entrepreneuriat pour les startups et les incubateurs. BIOGRAPHIE & PARCOURS Avant la Banque mondiale, il a travaillé en tant qu’Expert National en Investissement pour le Programme des Nations Unies pour le Développement (PNUD), sous financement de la Banque Africaine de Développement, en assistance technique au sein de l’Agence de Promotion des Investissements Privés en Guinée (APIP-Guinée). Il avait auparavant travaillé à la Banque Centrale de la République de Guinée (BCRG) en qualité de Superviseur Bancaire/Inspecteur où il était occupé des études et de la réglementation, après avoir servi aussi la direction générale de la société Total Guinée SA en qualité de Contrôleur de Gestion pour le suivi des investissements du groupe et le reporting sur les résultats analytiques (pétrole, essence, gasoil, kérosène, gaz, boutique, etc. pour différent segments). C’est au cabinet d’audit International Auditeurs Associés (KPMG) qu’il a commencé sa carrière en tant qu’Auditeur Comptable et Financier, avec la participation à plusieurs missions d’audit dans les secteurs miniers, des télécommunications, de l’éducation et des BTPs. </p>', '<p>Mamadou Nagnalen BARRY, with nearly 15 years of professional experience, is a bilingual international expert (English and French) who worked for the Finance, Competitiveness and Innovation Department at the World Bank headquarters in Washington DC, USA. As Project Manager and Financial Sector Development Expert, he has led, co-directed or participated in several World Bank projects and studies around the world, including Indonesia, Vietnam, Iraq, Lebanon, Kenya, DRC, Chad, Burkina Faso, Côte d\'Ivoire, Benin, Guinea Bissau,  and in the Republic of Guinea (his native country). He joined the World Bank through the competitive recruitment of the institution called YPP, after serving as a Consultant for the International Finance Corporation (IFC) in Conakry (Guinea). Its activities within the World Bank Group covered access to finance for SMEs (especially agricultural and start-ups), financial stability, access for companies and individuals to financial services (including digital), capital market development, improvement of the business climate, promotion of local content and entrepreneurship for startups and incubators. BIOGRAPHY & BACKGROUND Before the World Bank, he worked as a National Investment Expert for the United Nations Development Programme (UNDP), under funding from the African Development Bank, in technical assistance within the Agency for the Promotion of Private Investment in Guinea (APIP-Guinea). He had previously worked at the Central Bank of the Republic of Guinea (BCRG) as Banking Supervisor/Inspector where he was in charge of studies and regulation, after having also served the general management of Total Guinée SA as Management Controller for the monitoring of the group\'s investments and reporting on analytical results (oil,  gasoline, diesel, kerosene, gas, shop, etc. for different segments). It was at the audit firm International Auditeurs Associés (KPMG) that he began his career as an Accounting and Financial Auditor, with participation in several audit missions in the mining, telecommunications, education and BTPs sectors.</p>\r\n\r\n', '1.jpg', NULL, NULL, '', 2, 0),
(2, 'Mohamed Beavogui ', 'Premier Ministre', 'Prime Minister', '<p>\r\nMohamed Beavogui (né le 15 août 1953 à Porédaka) est un fonctionnaire et homme d’État guinéen. Il est Premier ministre de la Transition en Guinée depuis le 6 octobre 2021. Il était auparavant directeur général de l’Agence africaine de renforcement des capacités. Mohamed Béavogui est né le 15 août 1953 à Porédaka (Mamou) de Koma Béavogui, ancien diplomate, et de Hadja Mariama Laila Diallo1. Il a fréquenté l’école primaire à Coleah-3 puis au Centre d’éducation révolutionnaire (aujourd’hui Le lycée Donka), avant d’entrer à l’Institut polytechnique Gamal Abdel Nasser en 1972.\r\n</p>\r\n<p>\r\nBeavogui a reçu une bourse universitaire en Union soviétique et est diplômé en génie mécanique et en machines minières de l’Université polytechnique de Leningrad. Il est également titulaire d’un diplôme de la Kennedy School of Government de l’Université Harvard aux États-Unis. Carrière professionnelle Recruté dans la fonction publique, Mohamed Béavogui a effectué un stage dans l’entreprise guinéenne de bauxite à Kamsar, avant d’être nommé en 1980 directeur du Centre pilote de fabrication industrielle, situé près de Conakry2. Il a travaillé de 1982 à 1986 à Ibadan, au Nigéria, après avoir été admis au concours des Nations Unies pour un poste d’ingénieur au Centre régional africain de conception et d’ingénierie. En 1986, l’Organisation des Nations Unies pour l’alimentation et l’agriculture (FAO) l’a recruté comme conseiller technique. Il a ensuite été agent de programme à Bujumbura. En 1992, il a été transféré au siège de la FAO à Rome et est devenu chargé de programme principal. En 1994, il a été directeur principal d’un portefeuille de projets au siège de l’ONU. En 1998, il a été nommé Directeur régional des Nations Unies à Abidjan, où il a coordonné des projets dans la sous-région.3 En 2001, il a dirigé les opérations du Fonds international de développement agricole (FIDA) en Afrique de l’Ouest et du Centre4. En 2014, il a été choisi pour diriger la Pan-African Risk Management Mutual5. \r\n</p>\r\n<p>\r\nDe janvier 2015 à septembre 2020, Mohamed Béavogui est directeur général de l’Agence africaine de renforcement des capacités, située à Johannesburg, en Afrique du Sud.6,7,8,9. En septembre 2018, elle a été invitée au Forum de Davos en tant que partenaire des discussions annuelles10. Vie privée et familiale Mohamed Béavogui est marié à Hassatou Diallo. Le couple a quatre enfants. L’aînée, Aissata Béavogui, est la première femme PDG de Guinea Alumina Corporation (GAC)11,12. La seconde, Mariama Laila Béavogui, est une ingénieure diplômée de l’Université de Boston. Les deux garçons, Abdoulaye Béavogui et Thierno Souleymane Béavogui, sont ingénieurs en intelligence artificielle et cybersécurité13 et en finance, diplômés de l’Université d’État de New York à Binghamton14. Carrière politique Grève de 2007 Lors de la grève générale de 2007, sous le régime de Lansana Conté, quatre noms ont été proposés pour le poste de Premier ministre par les syndicats et la société civile, qui ont préféré Mohamed Béavogui15,16.\r\nLe président Conté n’a pas fait ce choix.\r\n\r\n</p>\r\n\r\n', '<p>\r\nMohamed Beavogui (born 15 August 1953 in Porédaka) is a Guinean civil servant and statesman. He has been Prime Minister of the Transition in Guinea since 6 October 2021. He was previously Director General of the African Capacity Building Agency. Mohamed Béavogui was born on August 15, 1953, in Porédaka (Mamou) to Koma Béavogui, a former diplomat, and Hadja Mariama Laila Diallo1. He attended primary school in Coleah-3 and then at the Center for Revolutionary Education (now Donka High School), before entering the Gamal Abdel Nasser Polytechnic Institute in 1972.\r\n</p>\r\n<p>\r\nBeavogui received a university scholarship in the Soviet Union and graduated in mechanical engineering and mining machinery from Leningrad Polytechnic University. He also holds a degree from the Kennedy School of Government at Harvard University in the United States. Professional career Recruited in the civil service, Mohamed Béavogui did an internship at the Guinean bauxite company in Kamsar, before being appointed in 1980 director of the Pilot Center for Industrial Manufacturing, located near Conakry2. He worked from 1982 to 1986 in Ibadan, Nigeria, after being admitted to the United Nations competition for an engineering position at the African Regional Centre for Design and Engineering. In 1986, the Food and Agriculture Organization of the United Nations (FAO) recruited him as a technical adviser. He was then a program officer in Bujumbura. In 1992, he was transferred to FAO headquarters in Rome and became Senior Programme Officer. In 1994, he was senior manager of a portfolio of projects at UN Headquarters. In 1998, he was appointed Regional Director of the United Nations in Abidjan, where he coordinated projects in the subregion.3 In 2001, he headed the operations of the International Fund for Agricultural Development (IFAD) in West and Central Africa4. In 2014, he was chosen to lead the Pan-African Risk Management Mutual5. \r\n</p>\r\n<p>\r\nFrom January 2015 to September 2020, Mohamed Béavogui is Director General of the African Capacity Building Agency, located in Johannesburg, South Africa.6,7,8,9. In September 2018, it was invited to the Davos Forum as a partner on the annual discussions10. Private and family life Mohamed Béavogui is married to Hassatou Diallo. The couple has four children. The eldest, Aissata Béavogui, is the first female CEO of Guinea Alumina Corporation (GAC)11,12. The second, Mariama Laila Béavogui, is an engineer graduated from Boston University. The two boys, Abdoulaye Béavogui and Thierno Souleymane Béavogui, are engineers in artificial intelligence and cyber security13 and finance, graduates of the State University of New York at Binghamton14. Political career Strike of 2007 During the general strike of 2007, under the regime of Lansana Conté, four names were proposed for the office of Prime Minister by the trade unions and civil society, who preferred Mohamed Béavogui15,16.\r\nPresident Conté did not make this choice.\r\n\r\n</p>\r\n', '2.jpeg', '', NULL, NULL, 1, 0),
(3, 'Mohamed Sacko ', 'Consultant-Spécialiste en Gestion de subvention', 'Consultant-Specialist in Grant Management', '<p>\r\nTitulaire d’un diplôme du cycle normal Ecole de Commerce, Mohamed Sacko a débuté sa carrière en 2009 chez un des ‘’Big Four’’ notamment PriceWaterhouseCoopers pour la zone Afrique subsaharienne. Durant cette expérience, il supervise les services d’audit financier et de conseil des secteurs suivants : Banque, mine et les financements extérieurs tels que le Global Fund, les agences des Nations Unies et la BID.\r\n</p>\r\n<p>\r\nEn 2015 il se verra confier la charge de la Gestion financière Chez Rio Tinto en qualité de Directeur Financier de ‘’Rio Tinto Foundation’’ ; une entité du Groupe Australien dont l’objectif consiste à l’identification, l’évaluation et le financement des projets à fort impact socio-économique sur le pays d’exploitation.   \r\n</p>\r\n<p> \r\nDepuis 2019, Mohamed est Consultant-Spécialiste en Gestion de subvention.\r\nIl a la charge de la gestion du ‘’Matching Grant’’ de la Banque Mondiale (fonds destinés au financement de l’entreprenariat dans le secteur agricole).\r\nIl intervient sur les entités suivantes : \r\nWAAPP :  West Africa Agricultural Productivity Program (Cloturé)\r\nPDAIG :    Projet de Développement de l’Agriculture Intégrée en Guinée (En cours de mise en œuvre). \r\n\r\n</p>\r\n<p>\r\nMohamed Sacko est également Président du ‘’GYPC’’ (Guinean Young Prossionals Club), une ONG membre du Patronat Guinéen regroupant un vivier de jeunes professionnels œuvrant pour l’amélioration du climat des Affaires en Guinée.\r\n</p>', '<p>\r\nHolder of a diploma from the normal business school cycle, Mohamed Sacko began his career in 2009 at one of the \"Big Four\" including PricewaterhouseCoopers for the sub-Saharan Africa zone. During this experience, he oversaw the financial audit and advisory services of the following sectors: Banking, Mining and External Financing such as the Global Fund, United Nations agencies and the IDB.\r\n </p>\r\n<p>\r\nIn 2015, he will be entrusted with the responsibility of Financial Management at Rio Tinto as Chief Financial Officer of the Rio Tinto Foundation; an entity of the Australian Group whose objective is to identify, evaluate and finance projects with a strong socio-economic impact on the country of operation.  \r\n</p>\r\n<p>\r\nSince 2019, Mohamed is a Consultant-Specialist in Grant Management.\r\nHe oversees managing the World Bank\'s Matching Grant (funds for financing entrepreneurship in the agricultural sector).\r\nIt intervenes on the following entities: \r\nWAAPP: West Africa Agricultural Productivity Program (Cloture)\r\nPDAIG: Project for the development of agricultural agriculture integrated into Guinee (In the process of implementation).\r\n\r\n</p>\r\n<p>\r\nMohamed Sacko is also President of the \"GYPC\" (Guinean Young Processionals Club), an NGO member of the Guinean Employers bringing together a pool of young professionals working to improve the business climate in Guinea.\r\n</p>\r\n', '3.jpg', '', NULL, '', 3, 0),
(17, 'Diakite Ismael', 'Président du Conseil d\'Administration de la Chambre des Mines de Guinée', 'Chairman of the Board of Directors of the Chamber of Mines of Guinea', '<p>\r\nPrésident du Conseil d\'Administration de la Chambre des Mines de Guinée, M. Ismaël Diakité est le Haut-Représentant du Consortium SMB-Winning. Il est en charge du Business Development et de la Compliance, de la gestion des actionnaires clés et de la gestion de l\'image de l\'entreprise. Sa contribution aux récentes négociations et approbations de trois (3) Conventions pour les derniers projets du Consortium liés aux blocs de Simandou Nord riches en minerai de fer a été primordial.</p><p>\r\nM. Diakite est le directeur général adjoint du nouveau projet du Consortium de 3 milliards de dollars «Projet Boffa-Boké», dans le cadre des opérations SMB-Winning de 40 millions de tonnes plus l\'exportation de bauxite.</p><p>\r\nAuparavant, M. Diakite a travaillé 10 ans pour Rio Tinto en tant que directeur général pour la Guinée, directeur du conseil d\'administration du projet majeur d\'exploitation minière et d\'infrastructures de minerai de fer de Simandou d\'une valeur de 20 milliards de dollars et a également supervisé les intérêts de Rio Tinto dans l\'exploitation et l\'exportation de la bauxite à CBG. (Société Guinéenne de la Bauxite).</p><p>\r\nIl a passé cinq (5) ans en tant que membre du comité exécutif de Rio Tinto Diamonds & Minerals, directeur général et responsable national de Rio Tinto en Guinée.\r\nDe 2014 à 2016, il a présidé le Forum du secteur privé en Guinée et la Chambre des Mines de Guinée.</p><p>\r\nM. Ismael Diakité est titulaire d\'un Baccalauréat en planification minière; une maîtrise en administration des affaires et en économie de l\'Université du Pays de Galles ; un diplôme d\'Etudes Supérieures Spécialisées (DESS) en Politiques Publiques et Développement des Organisations de l\'Université de Paris XI. Il a également étudié la gestion des entreprises à l\'Institut d\'administration et de gestion des entreprises de Paris, les techniques de fabrication industrielle à l\'Ecole Nationale Supérieure des Mines de Douai (France).</p><p>\r\nTrès familier avec les règles et les programmes des partenaires au développement, également impliqué dans des fonds importants avec la mobilisation des banques sur les marchés de capitaux. M. Diakite est doté d\'une vaste expérience dans la conduite, l\'évaluation et la mise en œuvre de projets intégrés miniers, de grandes infrastructures et énergétiques en Afrique.\r\n\r\n</p>', '<p>\r\nChairman of the Board of Directors of the Chamber of Mines of Guinea, Mr. Ismael Diakite is the High-Representative of the SMB-Winning Consortium. He is in charge of the Business Development and Compliance, Key Stakeholder’s management and the management of the corporate image. His contribution to the recent negotiations and approvals of three (3) Conventions for the Consortium’s latest projects related to the Simandou Northern blocs of rich iron ore was essential. </p><p>\r\nMr. Diakite is the Deputy Managing Director of the Consortium\'s new project of USD 3 billion “Boffa-Boké Project”, under the SMB-Winning operations of 40 million tons plus Bauxite export.</p><p>\r\nPreviously, Mr. Diakite worked 10 years for Rio Tinto as Managing Director for Guinea, Director of the Board of the USD 20 billion worth Simandou iron ore major mining and Infrastructures Project and over sighting Rio Tinto interests in the Bauxite Operation and export in CBG (Compagnie des Bauxites de Guinee).</p><p>\r\nHe spent five (5) years as a member of the Executive Committee of Rio Tinto Diamonds & Minerals, Managing Director and Country Head of Rio Tinto in Guinea.\r\nFrom 2014 to 2016 he chaired the Private Sector Forum in Guinea and the Guinea Chamber of Mines.</p><p>\r\nMr. Ismael Diakite holds a BSC. in Mine Planning; a master’s degree in Business Administration and Economy from the University of Wales; a diploma of Higher Specialized Studies (DESS) in Public Policy and Organization Development from University of Paris XI. He also studied Business Management at the Paris Institute of Business Administration and Management, Industrial Manufacturing Techniques at the “Ecole Nationale Superieure des Mines de Douai” (France).</p><p>\r\nVery familiar with Development Partners rules and programs, also involved in major funds mobilization with the banks in the capital markets. Mr. Diakite is endowed with a large experience in leading, evaluating and implementing integrated mining, large infrastructures, and energy projects in Africa. \r\n\r\n\r\n\r\n</p>', '4.jpeg', NULL, NULL, NULL, 4, 0),
(18, 'Sidi Ould TAH ', 'Directeur général de la BADEA', 'Director General of Arab Bank for Economic Development', '<p>\r\nDr. Sidi Ould TAH est Directeur général de la BADEA- La Banque arabe pour le développement économique depuis 2015. Il a auparavant occupé de nombreux postes de haut niveau tels que ministre de l’Économie et des Finances, ministre des Affaires économiques et du développement et Conseiller principal du Président de la République et du Premier Ministre de la Mauritanie.  \r\nIl est titulaire d\'un Doctorat en économie de l\'Université Nice-Sophia-Antipolis. Il maîtrise parfaitement les langues arabe, française et anglaise en plus d’une connaissance pratique de l\'espagnol.\r\n\r\n\r\n</p>\r\n', '<p>\r\nDr. Sidi Ould TAH has been appointed Director General of Arab Bank for Economic Development since 2015. He previously held numerous high level and senior positions such as Minister of Economy and Finance, Minister of Economic Affairs and Development, and Senior Advisor to both the President and the Prime Minister of Mauritania. He was recognized as the Development Banker of the 2020 by Financial Afrik. \r\nHe holds a Ph.D. in Economics from Nice-Sophia-Antipolis University. He has an excellent command of Arabic, French and English languages as well as a working knowledge of Spanish.\r\n</p>', '5.jpg', NULL, NULL, NULL, 5, 0),
(19, 'TRAORE Souleymane', 'Directeur Général de la Compagnie des Bauxites de Guinée ', 'Chief Executive Officer of the Compagnie des Bauxites de Guinée', '<p>\r\nM. Souleymane Traoré est titulaire d\'un MBA du prestigieux Imperial College de Londres. Depuis janvier 2017, il est Directeur Général de la (Compagnie des Bauxites de Guinée). Avant la CBG, il a fait carrière dans le secteur pétrolier. Il a travaillé quatre ans chez ExxonMobil et dix ans chez Total. Chez ExxonMobil, il a été Directeur financier, puis Directeur - Mobil Country - Guinée. Puis il rejoint l\'équipe \"Lead\" d\'Afrique et du Moyen-Orient, où il a fait une année. Par la suite, la Filiale a été rachetée par Total en Guinée. Il est revenu pour s\'occuper de la fusion. Et après cela, il est devenu le Directeur administratif et financier de l\'entité fusionnée. Il a travaillé au siège à Paris en tant qu\'auditeur principal pendant trois ans. Il a décidé par la suite de revenir en Guinée en 2011 en tant que directeur général adjoint de Total Guinée où il a travaillé pendant quatre ans. Il a été nommé Directeur – Total Pays en Sierra Leone où il est resté dix-huit (18) mois, avant de rejoindre la CBG.\r\n</p>', '<p>\r\nMr. Souleymane Traore is a Holder of an MBA from the prestigious Imperial College in London. Since January 2017, he has been the Chief Executive Officer of the (Compagnie des Bauxites de Guinée). Before the CBG, he had a career in the oil sector. He has worked for four years at ExxonMobil, and ten years at Total. At ExxonMobil, he was the Chief Financial Officer, and after Director - Mobil Country - Guinea. Then he joins the \"Lead\" team from Africa and the Middle East, where he did a year. Afterwards, the Subsidiary was acquired by Total in Guinea. He came back to take care of the merger. And after that he became the Administrative and Financial Director of the Merged Entity. He has Worked at headquarters in Paris as a Senior auditor for three years. He decided by the continuation of returning to Guinea in 2011 as Deputy Chief Executive Officer of Total Guinea where he worked for four years. He was appointed Director – Total Country in Sierra Leone where he stayed 18 months, before joining the CBG.\r\n</p>', '6.jpg', NULL, NULL, NULL, 6, 0),
(20, 'Ismael Nabe', 'Conseiller du Premier ministre de la République de Guinée sur les questions de partenariats public-privé et d\'investissement ', 'Advisor to the Prime Minister of the Republic of Guinea on Public Private Partnerships and Investment matters', '<p>\r\nIsmael Nabe est le conseiller du Premier ministre de la République de Guinée sur les questions de partenariats public-privé et d\'investissement depuis juillet 2020. \r\n\r\nAvant de rejoindre le bureau du Premier ministre, M. Nabe était co-fondateur et vice-président de MAPE (Malaysian African Professionals & Entrepreneurs) où il a assuré le leadership et la supervision du renforcement des liens économiques et des partenariats commerciaux entre la Malaisie, l\'ASEAN et l\'Afrique.\r\n\r\nIl a siégé à plusieurs conseils consultatifs, notamment MAPE, PEREIRA International, World Start up Festival et la Confédération africaine des PME.\r\nIl est conférencier principal et panéliste régulier lors de nombreuses conférences mondiales de premier plan telles que Youth African Connect (Rwanda), Langkawi International Dialogue (Malaisie et Tanzanie), Forum économique islamique mondial (Indonésie), Africa Business Day (Malaisie) et TICAD (Japon). ).\r\n\r\nIl est titulaire d’un diplôme d\'ingénieur en télécommunications de l\'Université islamique internationale de Malaisie et poursuit actuellement un doctorat à l\'Université de Malaya.\r\nIsmael Nabe parle anglais, français, espagnol, arabe et malais.\r\n\r\n</p>', '<p>\r\n\r\nIsmael Nabe is the advisor to the Prime Minister of the Republic of Guinea on Public Private Partnerships and Investment matters since July 2020.\r\nPrior to joining the Prime Minister Office, Mr. Nabe was co-founder and Vice President of MAPE (Malaysian African Professionals & Entrepreneurs) where he provided leadership and oversight to strengthening economic ties and business partnerships between Malaysia, ASEAN and Africa.\r\nHe sits on a number of Advisory Boards including MAPE, PEREIRA International, World Start up Festival & African Confederation of SMEs. \r\nHe is a keynote speaker and regular panelist at many leading global conferences such as Youth African Connect (Rwanda), Langkawi International Dialogue (Malaysia & Tanzania), World Islamic Economic Forum (Indonesia), Africa Business Day (Malaysia), and TICAD (Japan).\r\nHe holds Telecommunication Engineering degrees from the International Islamic University of Malaysia and is currently pursuing a Ph.D from the University of Malaya.\r\nIsmael Nabe speaks English, French, Spanish, Arabic & Malay.   \r\n\r\n</p>', '7.jpeg', NULL, NULL, NULL, 7, 0),
(21, 'Rose Pola Pricemou', 'Ministre de la Communication et de l’Information', 'Minister of Communication and Information', '<p>\r\nJusqu’à à sa nomination elle était Directrice du Bureau de Stratégie de Développement au Ministère des Investissements et du Partenariat Public-Privé. \r\n\r\nLa nouvelle ministre de la communication et de l’information est détentrice d’un master en sciences de l’informatique et d’une maîtrise en informatique appliquée à la Gestion obtenue à l’Université Laval (Québec, Canada). \r\nMadame Pricemou parle couramment français, anglais, kpèlè et soussou, et possède quelques notions de poular et malinké.\r\n\r\nElle a été Conseillère en développement de système informatique et a œuvré dans le domaine des technologies de l’information. \r\n\r\nEn Guinée, en 2016, dans le cadre du programme TOKTEN, Madame Pricémou, en tant que coordinatrice et conseillère technique, a mené à bien le projet de mise en place d’une plateforme informatique permettant la collecte de données statistiques sur les activités minières et ce dans l’objectif de doter le ministère des Mines et de la Géologie de Guinée d’un système de base des données. \r\n\r\nElle a aussi été la cheffe de file dans le domaine des Technologies de la firme ETI. SA, responsable d’analyse fonctionnelle, d’assurance qualité, de formation et d’accompagnement des utilisateurs. \r\n\r\nMme Diallo, Rose Pricémou, a, désormais, la lourde tâche de diriger le département qui est en charge des médias privés et publics ainsi que les agences de communication sur toute l’étendue du territoire national.\r\n\r\n</p>', '<p>\r\nUntil her nomination, she was the Director of the Development Strategy Office at the Ministry of Investments and Public-Private Partnership.\r\nThe new Minister of Communication and Information holds a master\'s degree in computer science and a master\'s degree in applied computer science to management obtained at Laval University (Quebec, Canada).\r\nMs. Pricemou is fluent in French, English, Kpèlè and Soussou, and has some notions of Poular and Malinké.\r\nShe has been a consultant in computer system development and has worked in the field of information technology.\r\nIn Guinea, in 2016, as part of the TOKTEN program, Mrs. Pricémou, as coordinator and technical advisor, carried out the project to set up an IT platform allowing the collection of statistical data on mining and this with the aim of providing the Ministry of Mines and Geology of Guinea with a database system.\r\nShe was also the leader in the field of Technologies of the firm ETI. SA, responsible for functional analysis, quality assurance, training, and user support.\r\nMs. Diallo, Rose Pricémou, now has the difficult task of directing the department which oversees private and public media as well as communication agencies throughout the national territory.\r\n\r\n</p>', '8.jpeg', NULL, NULL, NULL, 8, 0),
(22, 'Mohamed Sidiki Sylla', 'Avocat inscrit aux barreaux de Guinée et de New York', 'Attorney at Law, Admitted to practice in Guinea and New York', '<p>\r\nAssocié Gérant de Sylla & Partner, un cabinet d’avocats reconnu comme étant un des meilleurs cabinets ouest africains en matière de transactions minières. \r\n\r\nMohamed a une large expérience en financement de projet, négociation de conventions minières, droit minier et pétrolier, fiscalité et arbitrage. \r\n\r\nMohamed représente régulièrement les gouvernements and multinationales sur des transactions minières et pétrolières. Il a notamment participé à l’ensemble des transactions minières qui ont eu lieu en Guinée depuis 2013 y compris le projet Simandou évalué à au moins USD 15 milliard.\r\n\r\nA ce titre, Mohamed a une profonde connaissance de l’industrie minière guinéenne y compris la législation minière, les acteurs institutionnels et les conventions minières qui en constitue le cadre juridique primaire de cette industrie.\r\n\r\nAu-delà de l’industrie minière en Guinée, son expérience couvre la région. Ainsi, une part significative de sa pratique couvre le financement de projet, la réforme du cadre légal et règlementaire de l’industrie minière, le renforcement de capacité en faveur des autorités administratives et des sociétés minières en matière de négociations de convention et de fiscalité.\r\n\r\nMohamed a aussi une large expérience des questions énergétiques. A ce titre il accompagné l’État dans la structuration et le financement des projets hydroélectriques de Souapiti (450 MGW) et Kaleta (240 MGW). Il a aussi accompagné plusieurs producteurs indépendants d’énergie (IPP) tant en matière thermique que solaire (Endeavour avec le projet thermique de Tê Power de 100 MGW, Infinity avec le projet solaire de Kankan Solar de 200 MGW, …).\r\n\r\nLes travaux de Mohamed dans le secteur extractif sont aussi reconnus par des organisations comme Chambers Global, IFLR 1000, ACQ Awards. \r\n\r\nMohamed communique régulièrement à travers le monde sur des questions liées aux industries extractives. \r\n\r\n</p>', '<p>\r\nManaging Partner at Sylla & Partners, a law firm recognized to be one of the best mining transactional law firms in West Africa.\r\n\r\nMohamed has an extensive experience in project finance, negotiating mining concessions’ agreement, mining and petroleum law, taxation, banking, and arbitration. \r\n\r\nMohamed regularly represents governments and companies on mining and oil related transactions. He has represented the Government of Guinea in a number of mining transactions including the USD 15 billion Simandou project.\r\n\r\nAs such, Mohamed has a deep knowledge of the Guinean mining industry including mining legislation, institutional actors and mining conventions which constitute the primary legal framework of this industry.\r\n\r\nBeyond the Guinean mining industry, his experience covers the region. As such, a significant part of his practice is focused on assisting in reforming legal and regulatory framework of the mining industry or in negotiating mining agreement and capacity building in favor administrative bodies and private companies both in contract negotiations and mining taxation. \r\n\r\nMohamed also has an extensive experience in the energy sector. As such, he assisted the State of Guinea in the structuring and financing of the hydroelectric projects of Souapiti (450 MGW) and Kaleta (240 MGW). He has also supported several independent power producers (IPP) in both thermal and solar matters (Endeavor with the Tê Power thermal project of 100 MGW, Infinity with the Kankan Solar project of 200 MGW, etc.).\r\n\r\nJeune Afrique ranked him on its list of the 50 most influential lawyers in Francophone Africa since 2017. His works in the extractive and energy sectors are recognized by organizations like Chambers Global, IFLR 1000, ACQ Awards. \r\n\r\nMohamed regularly speaks around the world on extractive industries related issues.\r\n\r\n</p>', '9.jpg', NULL, NULL, NULL, 9, 0);

-- --------------------------------------------------------

--
-- Structure de la table `pannels`
--

CREATE TABLE `pannels` (
  `id` int(11) NOT NULL,
  `libelle` text NOT NULL,
  `libelle_en` text NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `heure` varchar(255) DEFAULT NULL,
  `heure_en` varchar(255) NOT NULL,
  `id_intervenant` int(11) NOT NULL,
  `supprimer` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `pannels`
--

INSERT INTO `pannels` (`id`, `libelle`, `libelle_en`, `date`, `heure`, `heure_en`, `id_intervenant`, `supprimer`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '25-02-2021', '10H-11H', '10AM-11AM', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `code` int(3) NOT NULL,
  `alpha2` varchar(2) NOT NULL,
  `alpha3` varchar(3) NOT NULL,
  `nom_en_gb` varchar(45) NOT NULL,
  `nom_fr_fr` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`id`, `code`, `alpha2`, `alpha3`, `nom_en_gb`, `nom_fr_fr`) VALUES
(1, 4, 'AF', 'AFG', 'Afghanistan', 'Afghanistan'),
(2, 8, 'AL', 'ALB', 'Albania', 'Albanie'),
(3, 10, 'AQ', 'ATA', 'Antarctica', 'Antarctique'),
(4, 12, 'DZ', 'DZA', 'Algeria', 'Algérie'),
(5, 16, 'AS', 'ASM', 'American Samoa', 'Samoa Américaines'),
(6, 20, 'AD', 'AND', 'Andorra', 'Andorre'),
(7, 24, 'AO', 'AGO', 'Angola', 'Angola'),
(8, 28, 'AG', 'ATG', 'Antigua and Barbuda', 'Antigua-et-Barbuda'),
(9, 31, 'AZ', 'AZE', 'Azerbaijan', 'Azerbaïdjan'),
(10, 32, 'AR', 'ARG', 'Argentina', 'Argentine'),
(11, 36, 'AU', 'AUS', 'Australia', 'Australie'),
(12, 40, 'AT', 'AUT', 'Austria', 'Autriche'),
(13, 44, 'BS', 'BHS', 'Bahamas', 'Bahamas'),
(14, 48, 'BH', 'BHR', 'Bahrain', 'Bahreïn'),
(15, 50, 'BD', 'BGD', 'Bangladesh', 'Bangladesh'),
(16, 51, 'AM', 'ARM', 'Armenia', 'Arménie'),
(17, 52, 'BB', 'BRB', 'Barbados', 'Barbade'),
(18, 56, 'BE', 'BEL', 'Belgium', 'Belgique'),
(19, 60, 'BM', 'BMU', 'Bermuda', 'Bermudes'),
(20, 64, 'BT', 'BTN', 'Bhutan', 'Bhoutan'),
(21, 68, 'BO', 'BOL', 'Bolivia', 'Bolivie'),
(22, 70, 'BA', 'BIH', 'Bosnia and Herzegovina', 'Bosnie-Herzégovine'),
(23, 72, 'BW', 'BWA', 'Botswana', 'Botswana'),
(24, 74, 'BV', 'BVT', 'Bouvet Island', 'Île Bouvet'),
(25, 76, 'BR', 'BRA', 'Brazil', 'Brésil'),
(26, 84, 'BZ', 'BLZ', 'Belize', 'Belize'),
(27, 86, 'IO', 'IOT', 'British Indian Ocean Territory', 'Territoire Britannique de l\'Océan Indien'),
(28, 90, 'SB', 'SLB', 'Solomon Islands', 'Îles Salomon'),
(29, 92, 'VG', 'VGB', 'British Virgin Islands', 'Îles Vierges Britanniques'),
(30, 96, 'BN', 'BRN', 'Brunei Darussalam', 'Brunéi Darussalam'),
(31, 100, 'BG', 'BGR', 'Bulgaria', 'Bulgarie'),
(32, 104, 'MM', 'MMR', 'Myanmar', 'Myanmar'),
(33, 108, 'BI', 'BDI', 'Burundi', 'Burundi'),
(34, 112, 'BY', 'BLR', 'Belarus', 'Bélarus'),
(35, 116, 'KH', 'KHM', 'Cambodia', 'Cambodge'),
(36, 120, 'CM', 'CMR', 'Cameroon', 'Cameroun'),
(37, 124, 'CA', 'CAN', 'Canada', 'Canada'),
(38, 132, 'CV', 'CPV', 'Cape Verde', 'Cap-vert'),
(39, 136, 'KY', 'CYM', 'Cayman Islands', 'Îles Caïmanes'),
(40, 140, 'CF', 'CAF', 'Central African', 'République Centrafricaine'),
(41, 144, 'LK', 'LKA', 'Sri Lanka', 'Sri Lanka'),
(42, 148, 'TD', 'TCD', 'Chad', 'Tchad'),
(43, 152, 'CL', 'CHL', 'Chile', 'Chili'),
(44, 156, 'CN', 'CHN', 'China', 'Chine'),
(45, 158, 'TW', 'TWN', 'Taiwan', 'Taïwan'),
(46, 162, 'CX', 'CXR', 'Christmas Island', 'Île Christmas'),
(47, 166, 'CC', 'CCK', 'Cocos (Keeling) Islands', 'Îles Cocos (Keeling)'),
(48, 170, 'CO', 'COL', 'Colombia', 'Colombie'),
(49, 174, 'KM', 'COM', 'Comoros', 'Comores'),
(50, 175, 'YT', 'MYT', 'Mayotte', 'Mayotte'),
(51, 178, 'CG', 'COG', 'Republic of the Congo', 'République du Congo'),
(52, 180, 'CD', 'COD', 'The Democratic Republic Of The Congo', 'République Démocratique du Congo'),
(53, 184, 'CK', 'COK', 'Cook Islands', 'Îles Cook'),
(54, 188, 'CR', 'CRI', 'Costa Rica', 'Costa Rica'),
(55, 191, 'HR', 'HRV', 'Croatia', 'Croatie'),
(56, 192, 'CU', 'CUB', 'Cuba', 'Cuba'),
(57, 196, 'CY', 'CYP', 'Cyprus', 'Chypre'),
(58, 203, 'CZ', 'CZE', 'Czech Republic', 'République Tchèque'),
(59, 204, 'BJ', 'BEN', 'Benin', 'Bénin'),
(60, 208, 'DK', 'DNK', 'Denmark', 'Danemark'),
(61, 212, 'DM', 'DMA', 'Dominica', 'Dominique'),
(62, 214, 'DO', 'DOM', 'Dominican Republic', 'République Dominicaine'),
(63, 218, 'EC', 'ECU', 'Ecuador', 'Équateur'),
(64, 222, 'SV', 'SLV', 'El Salvador', 'El Salvador'),
(65, 226, 'GQ', 'GNQ', 'Equatorial Guinea', 'Guinée Équatoriale'),
(66, 231, 'ET', 'ETH', 'Ethiopia', 'Éthiopie'),
(67, 232, 'ER', 'ERI', 'Eritrea', 'Érythrée'),
(68, 233, 'EE', 'EST', 'Estonia', 'Estonie'),
(69, 234, 'FO', 'FRO', 'Faroe Islands', 'Îles Féroé'),
(70, 238, 'FK', 'FLK', 'Falkland Islands', 'Îles (malvinas) Falkland'),
(71, 239, 'GS', 'SGS', 'South Georgia and the South Sandwich Islands', 'Géorgie du Sud et les Îles Sandwich du Sud'),
(72, 242, 'FJ', 'FJI', 'Fiji', 'Fidji'),
(73, 246, 'FI', 'FIN', 'Finland', 'Finlande'),
(74, 248, 'AX', 'ALA', 'Åland Islands', 'Îles Åland'),
(75, 250, 'FR', 'FRA', 'France', 'France'),
(76, 254, 'GF', 'GUF', 'French Guiana', 'Guyane Française'),
(77, 258, 'PF', 'PYF', 'French Polynesia', 'Polynésie Française'),
(78, 260, 'TF', 'ATF', 'French Southern Territories', 'Terres Australes Françaises'),
(79, 262, 'DJ', 'DJI', 'Djibouti', 'Djibouti'),
(80, 266, 'GA', 'GAB', 'Gabon', 'Gabon'),
(81, 268, 'GE', 'GEO', 'Georgia', 'Géorgie'),
(82, 270, 'GM', 'GMB', 'Gambia', 'Gambie'),
(83, 275, 'PS', 'PSE', 'Occupied Palestinian Territory', 'Territoire Palestinien Occupé'),
(84, 276, 'DE', 'DEU', 'Germany', 'Allemagne'),
(85, 288, 'GH', 'GHA', 'Ghana', 'Ghana'),
(86, 292, 'GI', 'GIB', 'Gibraltar', 'Gibraltar'),
(87, 296, 'KI', 'KIR', 'Kiribati', 'Kiribati'),
(88, 300, 'GR', 'GRC', 'Greece', 'Grèce'),
(89, 304, 'GL', 'GRL', 'Greenland', 'Groenland'),
(90, 308, 'GD', 'GRD', 'Grenada', 'Grenade'),
(91, 312, 'GP', 'GLP', 'Guadeloupe', 'Guadeloupe'),
(92, 316, 'GU', 'GUM', 'Guam', 'Guam'),
(93, 320, 'GT', 'GTM', 'Guatemala', 'Guatemala'),
(94, 324, 'GN', 'GIN', 'Guinea', 'Guinée'),
(95, 328, 'GY', 'GUY', 'Guyana', 'Guyana'),
(96, 332, 'HT', 'HTI', 'Haiti', 'Haïti'),
(97, 334, 'HM', 'HMD', 'Heard Island and McDonald Islands', 'Îles Heard et Mcdonald'),
(98, 336, 'VA', 'VAT', 'Vatican City State', 'Saint-Siège (état de la Cité du Vatican)'),
(99, 340, 'HN', 'HND', 'Honduras', 'Honduras'),
(100, 344, 'HK', 'HKG', 'Hong Kong', 'Hong-Kong'),
(101, 348, 'HU', 'HUN', 'Hungary', 'Hongrie'),
(102, 352, 'IS', 'ISL', 'Iceland', 'Islande'),
(103, 356, 'IN', 'IND', 'India', 'Inde'),
(104, 360, 'ID', 'IDN', 'Indonesia', 'Indonésie'),
(105, 364, 'IR', 'IRN', 'Islamic Republic of Iran', 'République Islamique d\'Iran'),
(106, 368, 'IQ', 'IRQ', 'Iraq', 'Iraq'),
(107, 372, 'IE', 'IRL', 'Ireland', 'Irlande'),
(108, 376, 'IL', 'ISR', 'Israel', 'Israël'),
(109, 380, 'IT', 'ITA', 'Italy', 'Italie'),
(110, 384, 'CI', 'CIV', 'Côte d\'Ivoire', 'Côte d\'Ivoire'),
(111, 388, 'JM', 'JAM', 'Jamaica', 'Jamaïque'),
(112, 392, 'JP', 'JPN', 'Japan', 'Japon'),
(113, 398, 'KZ', 'KAZ', 'Kazakhstan', 'Kazakhstan'),
(114, 400, 'JO', 'JOR', 'Jordan', 'Jordanie'),
(115, 404, 'KE', 'KEN', 'Kenya', 'Kenya'),
(116, 408, 'KP', 'PRK', 'Democratic People\'s Republic of Korea', 'République Populaire Démocratique de Corée'),
(117, 410, 'KR', 'KOR', 'Republic of Korea', 'République de Corée'),
(118, 414, 'KW', 'KWT', 'Kuwait', 'Koweït'),
(119, 417, 'KG', 'KGZ', 'Kyrgyzstan', 'Kirghizistan'),
(120, 418, 'LA', 'LAO', 'Lao People\'s Democratic Republic', 'République Démocratique Populaire Lao'),
(121, 422, 'LB', 'LBN', 'Lebanon', 'Liban'),
(122, 426, 'LS', 'LSO', 'Lesotho', 'Lesotho'),
(123, 428, 'LV', 'LVA', 'Latvia', 'Lettonie'),
(124, 430, 'LR', 'LBR', 'Liberia', 'Libéria'),
(125, 434, 'LY', 'LBY', 'Libyan Arab Jamahiriya', 'Jamahiriya Arabe Libyenne'),
(126, 438, 'LI', 'LIE', 'Liechtenstein', 'Liechtenstein'),
(127, 440, 'LT', 'LTU', 'Lithuania', 'Lituanie'),
(128, 442, 'LU', 'LUX', 'Luxembourg', 'Luxembourg'),
(129, 446, 'MO', 'MAC', 'Macao', 'Macao'),
(130, 450, 'MG', 'MDG', 'Madagascar', 'Madagascar'),
(131, 454, 'MW', 'MWI', 'Malawi', 'Malawi'),
(132, 458, 'MY', 'MYS', 'Malaysia', 'Malaisie'),
(133, 462, 'MV', 'MDV', 'Maldives', 'Maldives'),
(134, 466, 'ML', 'MLI', 'Mali', 'Mali'),
(135, 470, 'MT', 'MLT', 'Malta', 'Malte'),
(136, 474, 'MQ', 'MTQ', 'Martinique', 'Martinique'),
(137, 478, 'MR', 'MRT', 'Mauritania', 'Mauritanie'),
(138, 480, 'MU', 'MUS', 'Mauritius', 'Maurice'),
(139, 484, 'MX', 'MEX', 'Mexico', 'Mexique'),
(140, 492, 'MC', 'MCO', 'Monaco', 'Monaco'),
(141, 496, 'MN', 'MNG', 'Mongolia', 'Mongolie'),
(142, 498, 'MD', 'MDA', 'Republic of Moldova', 'République de Moldova'),
(143, 500, 'MS', 'MSR', 'Montserrat', 'Montserrat'),
(144, 504, 'MA', 'MAR', 'Morocco', 'Maroc'),
(145, 508, 'MZ', 'MOZ', 'Mozambique', 'Mozambique'),
(146, 512, 'OM', 'OMN', 'Oman', 'Oman'),
(147, 516, 'NA', 'NAM', 'Namibia', 'Namibie'),
(148, 520, 'NR', 'NRU', 'Nauru', 'Nauru'),
(149, 524, 'NP', 'NPL', 'Nepal', 'Népal'),
(150, 528, 'NL', 'NLD', 'Netherlands', 'Pays-Bas'),
(151, 530, 'AN', 'ANT', 'Netherlands Antilles', 'Antilles Néerlandaises'),
(152, 533, 'AW', 'ABW', 'Aruba', 'Aruba'),
(153, 540, 'NC', 'NCL', 'New Caledonia', 'Nouvelle-Calédonie'),
(154, 548, 'VU', 'VUT', 'Vanuatu', 'Vanuatu'),
(155, 554, 'NZ', 'NZL', 'New Zealand', 'Nouvelle-Zélande'),
(156, 558, 'NI', 'NIC', 'Nicaragua', 'Nicaragua'),
(157, 562, 'NE', 'NER', 'Niger', 'Niger'),
(158, 566, 'NG', 'NGA', 'Nigeria', 'Nigéria'),
(159, 570, 'NU', 'NIU', 'Niue', 'Niué'),
(160, 574, 'NF', 'NFK', 'Norfolk Island', 'Île Norfolk'),
(161, 578, 'NO', 'NOR', 'Norway', 'Norvège'),
(162, 580, 'MP', 'MNP', 'Northern Mariana Islands', 'Îles Mariannes du Nord'),
(163, 581, 'UM', 'UMI', 'United States Minor Outlying Islands', 'Îles Mineures Éloignées des États-Unis'),
(164, 583, 'FM', 'FSM', 'Federated States of Micronesia', 'États Fédérés de Micronésie'),
(165, 584, 'MH', 'MHL', 'Marshall Islands', 'Îles Marshall'),
(166, 585, 'PW', 'PLW', 'Palau', 'Palaos'),
(167, 586, 'PK', 'PAK', 'Pakistan', 'Pakistan'),
(168, 591, 'PA', 'PAN', 'Panama', 'Panama'),
(169, 598, 'PG', 'PNG', 'Papua New Guinea', 'Papouasie-Nouvelle-Guinée'),
(170, 600, 'PY', 'PRY', 'Paraguay', 'Paraguay'),
(171, 604, 'PE', 'PER', 'Peru', 'Pérou'),
(172, 608, 'PH', 'PHL', 'Philippines', 'Philippines'),
(173, 612, 'PN', 'PCN', 'Pitcairn', 'Pitcairn'),
(174, 616, 'PL', 'POL', 'Poland', 'Pologne'),
(175, 620, 'PT', 'PRT', 'Portugal', 'Portugal'),
(176, 624, 'GW', 'GNB', 'Guinea-Bissau', 'Guinée-Bissau'),
(177, 626, 'TL', 'TLS', 'Timor-Leste', 'Timor-Leste'),
(178, 630, 'PR', 'PRI', 'Puerto Rico', 'Porto Rico'),
(179, 634, 'QA', 'QAT', 'Qatar', 'Qatar'),
(180, 638, 'RE', 'REU', 'Réunion', 'Réunion'),
(181, 642, 'RO', 'ROU', 'Romania', 'Roumanie'),
(182, 643, 'RU', 'RUS', 'Russian Federation', 'Fédération de Russie'),
(183, 646, 'RW', 'RWA', 'Rwanda', 'Rwanda'),
(184, 654, 'SH', 'SHN', 'Saint Helena', 'Sainte-Hélène'),
(185, 659, 'KN', 'KNA', 'Saint Kitts and Nevis', 'Saint-Kitts-et-Nevis'),
(186, 660, 'AI', 'AIA', 'Anguilla', 'Anguilla'),
(187, 662, 'LC', 'LCA', 'Saint Lucia', 'Sainte-Lucie'),
(188, 666, 'PM', 'SPM', 'Saint-Pierre and Miquelon', 'Saint-Pierre-et-Miquelon'),
(189, 670, 'VC', 'VCT', 'Saint Vincent and the Grenadines', 'Saint-Vincent-et-les Grenadines'),
(190, 674, 'SM', 'SMR', 'San Marino', 'Saint-Marin'),
(191, 678, 'ST', 'STP', 'Sao Tome and Principe', 'Sao Tomé-et-Principe'),
(192, 682, 'SA', 'SAU', 'Saudi Arabia', 'Arabie Saoudite'),
(193, 686, 'SN', 'SEN', 'Senegal', 'Sénégal'),
(194, 690, 'SC', 'SYC', 'Seychelles', 'Seychelles'),
(195, 694, 'SL', 'SLE', 'Sierra Leone', 'Sierra Leone'),
(196, 702, 'SG', 'SGP', 'Singapore', 'Singapour'),
(197, 703, 'SK', 'SVK', 'Slovakia', 'Slovaquie'),
(198, 704, 'VN', 'VNM', 'Vietnam', 'Viet Nam'),
(199, 705, 'SI', 'SVN', 'Slovenia', 'Slovénie'),
(200, 706, 'SO', 'SOM', 'Somalia', 'Somalie'),
(201, 710, 'ZA', 'ZAF', 'South Africa', 'Afrique du Sud'),
(202, 716, 'ZW', 'ZWE', 'Zimbabwe', 'Zimbabwe'),
(203, 724, 'ES', 'ESP', 'Spain', 'Espagne'),
(204, 732, 'EH', 'ESH', 'Western Sahara', 'Sahara Occidental'),
(205, 736, 'SD', 'SDN', 'Sudan', 'Soudan'),
(206, 740, 'SR', 'SUR', 'Suriname', 'Suriname'),
(207, 744, 'SJ', 'SJM', 'Svalbard and Jan Mayen', 'Svalbard etÎle Jan Mayen'),
(208, 748, 'SZ', 'SWZ', 'Swaziland', 'Swaziland'),
(209, 752, 'SE', 'SWE', 'Sweden', 'Suède'),
(210, 756, 'CH', 'CHE', 'Switzerland', 'Suisse'),
(211, 760, 'SY', 'SYR', 'Syrian Arab Republic', 'République Arabe Syrienne'),
(212, 762, 'TJ', 'TJK', 'Tajikistan', 'Tadjikistan'),
(213, 764, 'TH', 'THA', 'Thailand', 'Thaïlande'),
(214, 768, 'TG', 'TGO', 'Togo', 'Togo'),
(215, 772, 'TK', 'TKL', 'Tokelau', 'Tokelau'),
(216, 776, 'TO', 'TON', 'Tonga', 'Tonga'),
(217, 780, 'TT', 'TTO', 'Trinidad and Tobago', 'Trinité-et-Tobago'),
(218, 784, 'AE', 'ARE', 'United Arab Emirates', 'Émirats Arabes Unis'),
(219, 788, 'TN', 'TUN', 'Tunisia', 'Tunisie'),
(220, 792, 'TR', 'TUR', 'Turkey', 'Turquie'),
(221, 795, 'TM', 'TKM', 'Turkmenistan', 'Turkménistan'),
(222, 796, 'TC', 'TCA', 'Turks and Caicos Islands', 'Îles Turks et Caïques'),
(223, 798, 'TV', 'TUV', 'Tuvalu', 'Tuvalu'),
(224, 800, 'UG', 'UGA', 'Uganda', 'Ouganda'),
(225, 804, 'UA', 'UKR', 'Ukraine', 'Ukraine'),
(226, 807, 'MK', 'MKD', 'The Former Yugoslav Republic of Macedonia', 'L\'ex-République Yougoslave de Macédoine'),
(227, 818, 'EG', 'EGY', 'Egypt', 'Égypte'),
(228, 826, 'GB', 'GBR', 'United Kingdom', 'Royaume-Uni'),
(229, 833, 'IM', 'IMN', 'Isle of Man', 'Île de Man'),
(230, 834, 'TZ', 'TZA', 'United Republic Of Tanzania', 'République-Unie de Tanzanie'),
(231, 840, 'US', 'USA', 'United States', 'États-Unis'),
(232, 850, 'VI', 'VIR', 'U.S. Virgin Islands', 'Îles Vierges des États-Unis'),
(233, 854, 'BF', 'BFA', 'Burkina Faso', 'Burkina Faso'),
(234, 858, 'UY', 'URY', 'Uruguay', 'Uruguay'),
(235, 860, 'UZ', 'UZB', 'Uzbekistan', 'Ouzbékistan'),
(236, 862, 'VE', 'VEN', 'Venezuela', 'Venezuela'),
(237, 876, 'WF', 'WLF', 'Wallis and Futuna', 'Wallis et Futuna'),
(238, 882, 'WS', 'WSM', 'Samoa', 'Samoa'),
(239, 887, 'YE', 'YEM', 'Yemen', 'Yémen'),
(240, 891, 'CS', 'SCG', 'Serbia and Montenegro', 'Serbie-et-Monténégro'),
(241, 894, 'ZM', 'ZMB', 'Zambia', 'Zambie');

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

CREATE TABLE `photos` (
  `id_photo` int(11) NOT NULL,
  `id_album` int(11) DEFAULT NULL,
  `lien` varchar(255) NOT NULL,
  `nom_photo` varchar(255) NOT NULL,
  `nom_photoFr` text NOT NULL,
  `qenr_photo` int(11) DEFAULT NULL,
  `suprim_photo` int(11) NOT NULL,
  `qsupp_photo` int(11) DEFAULT NULL,
  `date_suprim` int(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `photos`
--

INSERT INTO `photos` (`id_photo`, `id_album`, `lien`, `nom_photo`, `nom_photoFr`, `qenr_photo`, `suprim_photo`, `qsupp_photo`, `date_suprim`) VALUES
(1, 1, '1610450037.JPG', 'Mars 2019', 'test', NULL, 0, NULL, NULL),
(2, 1, '1610450037.JPG', 'Mars 2019', 'test', NULL, 0, NULL, NULL),
(3, 1, 'P1170820.JPG.JPG', 'Fevrier 2019', 'test', NULL, 0, NULL, NULL),
(4, 1, 'P1230289.JPG.JPG', 'Fevrier 2019', 'test', NULL, 0, NULL, NULL),
(5, 1, 'P1230289.JPG.JPG', 'Avril 2019', 'test', NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `programmes`
--

CREATE TABLE `programmes` (
  `id` int(11) NOT NULL,
  `programme` text DEFAULT NULL,
  `details` text DEFAULT NULL,
  `supprimer` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `entreprise` int(11) DEFAULT NULL,
  `ville_realisation` varchar(255) DEFAULT NULL,
  `nombre_employ_actuel` int(11) DEFAULT NULL,
  `nombre_employ_prev` int(11) DEFAULT NULL,
  `ca_prev` double DEFAULT NULL,
  `cout_total` double DEFAULT NULL,
  `apport` double DEFAULT NULL,
  `financement_dem` double DEFAULT NULL,
  `resume` text DEFAULT NULL,
  `secteurActivite` int(11) DEFAULT NULL,
  `fichier` varchar(255) DEFAULT NULL,
  `supprimer` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `secteur_activite`
--

CREATE TABLE `secteur_activite` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `secteur_activite`
--

INSERT INTO `secteur_activite` (`id`, `libelle`) VALUES
(1, 'Agriculture'),
(2, 'Elevage'),
(3, 'Pêche'),
(4, 'TIC'),
(5, 'Energies'),
(6, 'Mines'),
(7, 'BTP'),
(8, 'Santé'),
(9, 'Hydraulique'),
(10, 'Logistique'),
(11, 'Industrie'),
(12, 'Transport'),
(13, 'Commerce'),
(14, 'Education'),
(15, 'Services');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `categorie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isActivated` tinyint(1) NOT NULL DEFAULT 0,
  `adresse` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entreprise` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secteur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poste` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passwordResetCode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supprimer` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `confirmation_token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_log` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `genre`, `prenom`, `name`, `email`, `password`, `tel`, `userType`, `categorie`, `isActivated`, `adresse`, `pays`, `ville`, `entreprise`, `secteur`, `poste`, `description`, `passwordResetCode`, `supprimer`, `created_at`, `updated_at`, `confirmation_token`, `last_log`) VALUES
(1, 'Monsieur', 'DALEIN', 'DIALLO', 'smddalein18@gmail.com', NULL, '06 20 12 79 30', 'Officielle', 'Gouvernement', 0, 'COSA', '94', 'CONAKRY', 'AliouHolding2', 'TEST', 'Chargé Des Affaires publiques', NULL, NULL, 0, '2021-12-01 11:13:00', '2021-12-01 11:13:00', NULL, '2021-12-01 11:13:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `accueils`
--
ALTER TABLE `accueils`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `intervenants`
--
ALTER TABLE `intervenants`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pannels`
--
ALTER TABLE `pannels`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alpha2` (`alpha2`),
  ADD UNIQUE KEY `alpha3` (`alpha3`),
  ADD UNIQUE KEY `code_unique` (`code`);

--
-- Index pour la table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id_photo`);

--
-- Index pour la table `programmes`
--
ALTER TABLE `programmes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `secteur_activite`
--
ALTER TABLE `secteur_activite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `accueils`
--
ALTER TABLE `accueils`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `forums`
--
ALTER TABLE `forums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `intervenants`
--
ALTER TABLE `intervenants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `pannels`
--
ALTER TABLE `pannels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT pour la table `photos`
--
ALTER TABLE `photos`
  MODIFY `id_photo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `programmes`
--
ALTER TABLE `programmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `secteur_activite`
--
ALTER TABLE `secteur_activite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
