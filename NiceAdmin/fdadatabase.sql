-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2023 at 02:40 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fdadatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `fdadats`
--

CREATE TABLE `fdadats` (
  `No` int(50) NOT NULL,
  `Application` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `PI` varchar(255) NOT NULL,
  `ClinicalTrial` varchar(255) NOT NULL,
  `TrialPhase` varchar(255) NOT NULL,
  `TypeOfproduct` varchar(255) NOT NULL,
  `InvestigationalProduct` varchar(255) NOT NULL,
  `Notargetedparticipants` int(50) NOT NULL,
  `Trialduration` int(50) NOT NULL,
  `AWRDate` date NOT NULL,
  `CertRefNo` varchar(255) NOT NULL,
  `CurRegStat` varchar(255) NOT NULL,
  `DoCE` date NOT NULL,
  `CITS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fdadats`
--

INSERT INTO `fdadats` (`No`, `Application`, `Title`, `Name`, `PI`, `ClinicalTrial`, `TrialPhase`, `TypeOfproduct`, `InvestigationalProduct`, `Notargetedparticipants`, `Trialduration`, `AWRDate`, `CertRefNo`, `CurRegStat`, `DoCE`, `CITS`) VALUES
(1, 'DIS/PSM/CT/\n20190502001', 'Pragmatic multicentre FActorial\nrandomised controlled triaL testing\nmeasures to reduCe surgical site\ninfection in lOw and middle income\ncouNtries [FALCON]', 'University of\nBirmingham/ United\nKingdom', 'NTIRENGANYA\nFaustin, MD,\nMMED,', 'CHUB, CHUK,\nKMH, Kibogora\nHospital,', 'Phase\nIV', 'Medical\nDevices', '2% alcoholic\nchlorhexidine\nsolution/Triclosan-coated PDS or\nVicryl sutures', 2, 12, '2021-05-23', '0579/Rwanda\nFDA/2019', 'Approved', '2020-05-22', 'completed'),
(2, 'DIS/PSM/CT/\n20200424002', 'A Phase 3 open-label randomized\nclinical trial to evaluate the safety,\nreactogenicity and immunogenicity of a\n2-dose Ebola vaccine regimen of\nAd26.ZEBOV followed by MVA-BN-Filo in healthy pregnant women\n[INGABO]', 'Janssen Vaccines and\nPrevention B. V.\n(Janssen)\nArchimedesweg 4,\n2333 CN Leiden, The\nNetherlands', 'Dr KARITA\nEtienne', 'GISENYI\nHospital,\nGIHUNDWE\nHospital', 'Phase\nIII', 'Vaccine', 'Ebola vaccine\nregimen of\nAd26.ZEBOV\nfollowed by MVA-BN-Filo', 300, 23, '2020-09-29', '003B/CT/RW\nANDA\nFDA/2020,\n00R1/CT/RW\nANDA\nFDA/2022', 'Approved', '2023-08-27', 'Ongoing Implementation'),
(3, 'DIS/PSM/CT/\n20200404001', 'Clinical validation of Novel Malaria\nDiagnostic Tools s for point of care\ntesting [ NOVEL MALARIA]', 'FIND Project/\nGeneva, Switzerland', 'Mr\nMUSABYIMAN\nA, Jean Pierre, Dr\nNDISHIMYE\nPacifique', 'Hopital GITWE,\nHC RUHANGO na\nd CHUB', 'Phase\nIII', 'Medical\nDevices', 'Malaria P.f\n(HRP2/pLDH) Test', 1470, 11, '2020-06-23', '005/CT/RWA\nNDA\nFDA/2021', 'Approved', '2021-06-22', 'completed'),
(4, 'DIS/PSM/CT/\n20201105001', 'ClustEr randomised Trial of sterile\nglove And instrument change at the time\nof wound closure to reduce surgical site\ninfection; [CHEETAH]', 'UNIVERSITY OF\nBIRMINGHAM\nEdgbaston,\nBirmingham, B15\n2TT, UK', 'Dr JC Allen\nINGABIRE', 'CHUK, CHUB,\nRMH, KFH,\nKibungo RH,\nRwamagana PH,\nBushenge PH,\nRuhengeri RH,\nKibuye RH, Butaro\nDHl, Kabgayi DH,\nKibogora DH,\nGahini DH, Ejo\nHeza clinic', 'Phase\nIV', 'Medical\nDevices', 'Gloves', 1580, 12, '2020-09-07', '002R1/CT/FD\nA/2021', 'Approved', '2022-08-11', 'completed'),
(5, 'DIS/PSM/CT/\n20200727001', 'Clinical Study to Assess the treatment\nof Schizophrenia with Paliperidone\nPalmitate in Rwandan Helathcase\nsettings [CASPAR]', 'Janssen-Cilag\nInternational N.V', 'Dr\nRUTAKAYIRE\nBizoza, Dr\nEmmanuel\nMusoni Rwililiza\nand Dr Jean Nepo\nUtumatwishima,\nDr. Nyirimana\nJMV, Dr.\nUmuhire Marie\nFidele', 'Neuropsychiatric\nHospital CARAES\nNdera, CHUK,\nCHUB,Kibuye\nReferral Hospital,\nRwamagana\nProvincial Hospital', 'Phase\nIV', 'Drugs', 'Paliperidone\nPalmitate 3PPM,\n1PPM', 100, 71, '2021-06-23', '011C/CT/RW\nANDAFDA/2\n021', 'Approved', '2023-12-16', 'Ongoing Implementation'),
(7, 'DIS/PSM/CT/\n202000909001', 'High-dose intravenous vitamin C as an\nadjunctive treatment for sepsis in\nRwanda: A feasibility trial. [VITAMIN\nC]', 'Virginia\nCommonwealth\nUniversity', 'Dr Dennis\nHopiknson', 'CHUK', 'Phase\nII', 'Drugs', 'Ascor® (Ascorbic\nAcid Injection,\nUSP)', 24, 12, '2021-06-01', '009/CT/RWA\nNDAFDA/202\n1', 'Approved', '2022-05-31', 'stopped'),
(8, 'DIS/PSM/CT/\n20201005001', 'Preventing Pulmonary Complications in\nSurgical Patients at Risk of COVID-19\n[PROTECT-Surg]', 'University of\nBirmingham', 'Prof\nNTIRENGANYA\nFaustin', 'CHUK, CHUB,\nRuhengeri RH,\nKibungo RH,\nKibogora DH\n&Kibagabaga DH', 'Phase\nIII', 'Drugs', 'RESP301', 300, 12, '2020-12-31', '003A/CT/RW\nANDA\nFDA/2020', 'Approved', '2024-02-01', 'Ongoing Implementation'),
(9, 'DIS/PSM/CT/\n20201116001', 'Safety and Pharmacokinetics of the\nCombination Broadly Neutralizing\nAntibodies, 3BNC117-LS-J and 10-1074-LS-J, in Healthy American and\nAfrican Adults [ANTIBODIES]', 'International AIDS\nVaccine Initiative\n(IAVI), 125 Broad\nStreet, 9th Floor\nNew York 10004,\nUSA', 'Dr KARITA\nEtienne', 'Center for Family\nHealth Research\n(CFHR)', 'Phase\nI/II', 'Vaccine', 'Neutralizing\nAntibodies,\n3BNC117-LS-J and\n10-1074-LS-J', 176, 92, '2021-06-18', '006/CT/RWA\nNDA\nFDA/2021', 'Approved', '2024-03-14', 'Ongoing Implementation'),
(10, 'DIS/PSM/CT/\n20201126002', 'Wondfo Malaria P.f (HRP2/pLDH) Test\n[WONDFO]', 'Gangzhou Wondfo\nBiotech Co., Ltd,\nChina', 'Dr Pacifique\nNDISHIMYE', 'Remera,\nNyarugunga and\nBusanza Health\nCenters', 'NA', 'Medical\nDevices', 'Malaria Tests', 1470, 0, '2021-02-19', '005/CT/RWA\nNDA\nFDA/2021', 'Approved', '2022-02-18', 'completed'),
(11, 'DIS/PSM/CT/\n20201221002', 'A Randomized, Double Blind, Placebo\nControlled Study to Evaluate the\nEfficacy and Safety of Prothione™\nCapsules for Mild to Moderate\nCoronavirus Disease 2019 (COVID-19).[PROTHIONE]', 'Three Aminos, LLC\nP.O. Box 3026\nAlpharetta, GA 30023\nUSA', 'Dr. Vincent\nMutabazi', 'Rinda Ubuzima,\nUniversity of\nRwanda, Campus\nRemera,\nP.O. Box 4560\nKigali, Rwanda', 'Phase\nII', 'Drugs', 'Prothione^{TM}\nCapsules', 200, 44, '2021-03-18', '007A/CT/RW\nANDA\nFDA/2021', 'Approved', '2022-10-22', 'completed'),
(12, 'DIS/PSM/CT/\n20201211001', 'A randomized, parallel-group, placebo-controlled, double-blind Phase 1/2a\nstudy in healthy HIV-uninfected adults\nto assess safety/ tolerability and\nimmunogenicity of 2 different prime/\nboost regimens: priming with tetravalent\nAd26.Mos4.HIV and boosting wi', 'Janssen Vaccines &\nPrevention B.V.', 'Dr Etienne Karita', 'Projet San\nFrancisco', 'I/II', 'Vaccine', 'Ad26.Mos4.HIV\ntetravalent vaccine,\nIM; Clade C gp140\nmonovalent\nvaccine, IM;\nMosaic gp140\nmonovalent\nvaccine, IM', 150, 78, '2021-04-14', '001/CTA/RW\nANDA\nFDA/2021,\n001R1/CTA/R\nWANDA\nFDA/2022,', 'Approved', '2023-10-04', 'Ongoing Implementation'),
(13, 'DIS/PSM/CT/\n20210115001', 'Study of TriAntiMal™ in the treatment\nof Malaria in Rwanda [TriAntiMal™ ]', 'Dr. Jerry T.\nThornthwaite,\nDirector of Cancer\nResearch Institute of\nWest Tennessee,\nUSA', 'Dr. William\nRutagengwa', 'Nyamata District\nHospital,\nNyamata Health\nCenter', 'Phase\nIII', 'Drugs', 'TriAntiMal™', 50, 4, '2021-08-06', '007/CT/RWA\nNDA\nFDA/2021', 'Approved', '2022-07-06', 'completed'),
(14, 'DIS/PSM/CT/\n20210115001', 'Evaluation of the efficacy of artemether-lumefantrine and dihydroartemisinin-piperaquine in children with\nuncomplicated clinical malaria in\nRwanda- [TES]', 'PMI/Impact Malaria/\nUSAID', 'Dr Aline\nUwimana, & Dr\nNoella Umulisa,', 'Ngoma Health\nCenter, Masaka\nHealth Center,\nBugarama Health\nCenter', 'Phase\nIV', 'Drugs', 'Artemether-lumefantrine and\ndihydroartemisinin-piperaquine tablet', 528, 18, '2021-01-06', '008/CT/RWA\nNDA\nFDA/2021', 'Approved', '2023-11-08', 'Ongoing Implementation'),
(15, 'DIS/PSM/CT/\n20201125002', 'An adaptive, randomized, active-controlled, open-label, sequential\ncohort, multicentre study to evaluate the\nefficacy, safety, tolerability, and\npharmacokinetics of intravenous\ncipargamin (KAE609) in adult and\npaediatric participants with severe\nPlasmodiu', 'NOVARTIS\nSciences, through its', 'Dr Aline\nUwimana\nDr Sumanyi Jean\nClaude\nMarie Michelle\nUmurisa', 'Rwanda Military\nHospital', 'Phase\nII', 'Drugs', 'Cipargamin\n(KAE609) IV\ninjection, 10 mg/ml\nand/ or 15mg/ml\nvial', 100, 36, '2021-10-29', '012/CTAC/F\nDA/2021', 'Approved', '2022-10-29', 'Ongoing Implementation'),
(16, 'DIS/PSM/CT/\n20210317', 'Anti-Coronavirus Therapies (ACT) to\nprevent progression of COVID-19:\nRandomized trials [COLCHICINE]', 'Population Health\nResearch Institute\nDavid Braley Cardiac,\nVascular and Stroke\nResearch Institute\nHamilton General\nHospital, CANADA', 'Dr.Nkeshimana\nMenelas', 'CHUK', 'Phase\nIII', 'Drugs', 'Aspirin cardio,\nXarelto 2.5 mg film-coated tablets and\nColchicine 0.5mg\ntablets', 250, 6, '2021-12-08', '013/CTAC/F\nDA/2021', 'Approved', '2022-12-08', 'stopped'),
(17, 'DIS/PSM/CT/\n20211001', 'A Global, Multi-center, Randomized,\nDouble-Blind, Placebo-Controlled,\nPhase III Clinical Study to Evaluate the\nEfficacy, Safety and lmmunogenicity of\nRecombinant SARS-CoV-2 Fusion\nProtein Vaccine (V-01) in Adults Aged\n18 Years and Older study', 'Beijing Wantai\nBiological Pharmacy\nEnterprise Co., Ltd,\nChina', 'Dr.\nUtumatwishima\nJean Nepo\nAbdallah', 'Rwamagana\nProvincial Hospital', 'Phase\nIII', 'Vaccine', 'Influenza Virus\nVector COVID-19\nVaccine for\nIntranasal Spray\n(DelNS1-2019-nCoV-RBD-OPT1', 32000, 20, '2021-12-30', 'NA', 'Withdrawn', '0000-00-00', 'Withdrawn'),
(23, 'DIS/PSM/CT/\n20210820001', 'A Phase 1 Study to Evaluate the Safety\nand Immunogenicity of eOD-GT8\n60mer mRNA Vaccine (mRNA-1644)\nin HIV-1 Uninfected Adults in Good\nGeneral Health [IAVI G003]', 'International AIDS\nVaccine Initiative\n(IAVI). 125 Broad\nStreet, 9th Floor, New\nYork 10004\nUSA', 'Dr. Julien\nNYOMBAYIRE', 'Center for Family\nHealth Research,\nRwanda', 'Phase I', 'Vaccine', 'eOD-GT8 60mer\nmRNA Vaccine\n(mRNA-1644),0.6mL /2-mL\nglass vials', 18, 12, '2022-06-17', '018/CTAC/F\nDA/2022', 'Approved', '2023-06-17', 'Ongoing Implementation'),
(24, 'CTA-6411-2022', 'VAC31518COV2004 An Open-label,\nPhase 2 Study to Evaluate the Safety,\nReactogenicity, and Immunogenicity of\nAd26.COV2.S in Healthy Pregnant\nParticipants [ HORIZON 1]', 'Janssen Vaccines &\nPrevention B.V.\nArchimedesweg 4\nLeiden 2333 CN,\nNetherlands', 'Dr Etienne Karita', 'Center for Family\nHealth Research,\nRwanda', 'Phase\nII', 'Vaccine', 'Ad26.COV2.S (also\nknown as\nAd26COVS1),\nMonovalent vaccine', 400, 21, '2022-08-05', 'NA', 'Withdrawn', '0000-00-00', 'Withdrawn'),
(25, 'DIS/PSM/CT/\n20201211001', 'Contrast-Enhanced Ultrasound in the\nEvaluation of Abdominal Solid Organ\nInjuries in Trauma Patients\n[LUMASON ]', 'David P. Mooney,\nMD, MPH\n300 Longwood\nAvenue\nBoston, USA', 'Dr. Vincent\nNdebwanimana', 'CHUK', 'Phase\nI/II', 'Medical\nDevices', 'Sulfur hexafluoride\nlipid-type A\nmicrospheres,\ninjectable\nsuspension, 25 mg of\nlipid-type A\nlyophilized powder', 22, 10, '2022-07-17', 'NA', 'Withdrawn', '0000-00-00', 'Withdrawn'),
(26, 'DIS/PSM/CT/\n20210611001', 'The impact of selenium\nSupplementation in the treatment of\nCOVID 19 positive patients in Rwanda\n[SELENIUM]', 'NCST Rwanda &\nSelenium Education\nand Research Center\nSA', 'Dr. Kamwesiga\nJulius', 'King Faysal\nHospital', 'Phase\nIII', 'Drugs', 'Selenium supplement\ntablets', 100, 38, '2022-09-28', '019/CTAC/F\nDA/2022', 'Approved', '2023-09-27', 'Under recruitment'),
(27, 'DIS/PSM/CT/\n202206002001', '[SPIKER/RW/CT/CTG-AI Version\n02] A Clinical Investigation Evaluating\nEfficacy of an Intelligent\nCardiotocography with\nReal-Time Alerts for an Improved\nLabor and delivery', 'Spiker Ltd.\n2-5 Inage-ku, Chiba,\nJapan', 'Dr. Kizito\nNkurikiyeyezu,\nPh.D.\nDr. Vincent\nDusingizimana,\nMmed', 'Hopital La Croix\ndu Sud', 'NA', 'Medical\nDevices', 'SPIKER AI-CTG\n(EDAN CTG F9)', 200, 12, '2022-10-11', '020/CTAC/F\nDA/2022', 'Approved', '2023-10-10', 'Site Initiation'),
(28, 'DIS/PVSM/C\nT/CTA-16499-2022', 'A phase I/II partially randomized, active-controlled\n(BNT162b2/COMIRNATY®),\nobserver-blind, dose selection, safety,\nand immunogenicity study of GLB-COV2-043, an mRNA vaccine\ncandidate against SARS-CoV-2,\nadministered as a single-vaccination\nbooster to pre', 'GreenLight\nBiosciences, Inc\nE-mail address:\nakhan@greenlightbio.\ncom\nPhone number (with\ncountry code):\n+1(202) 997-1231', 'Dr Etienne Karita,\nProf. Leon\nMutesa\nEric Remera\nAugustin\nMurindabigwi\nIgiraneza Deborah\nSibomana Hassan', 'Rwanda Teaching\nHospital in Butare,\nSouthern Province.\nThe Center for\nFamily Health\nResearch in Kigali.', 'Phase\nI/II', 'Vaccine', 'GLB-COV2-043 DS\n, IM 0.5mL per vial);\n0.48mg/mL (Test\nproduct) &\nBNT162b2\n(COMIRNATY®),\nmRNA vaccine\nagainst the spike (S)\nprotein of SARS-CoV-2, by Pfizer/\nBioNTech (\nComparator)', 48, 24, '2023-01-26', '021/CTAC/F\nDA/2023', 'Approved', '2024-01-25', 'Suspended by Sponsor'),
(29, 'DIS/PVSM/C\nT/CTA-15192-20223', 'All-oral shorter treatment regimen for\nmultidrug- and rifampicin-resistant\ntuberculosis (MDR/RR-TB): Evaluating\nits effectiveness, safety and impact on\nthe quality of life of patients in\nRwanda” [STAKE]', 'Rwanda Biomedical\nCentre & Institute of\nTropical\nMedicines/Belgium', 'Yves Habimana-Mucyo, Dr\nPatrick\nMIGAMBI\nJean Claude\nSEMUTO\nNGABONZIZA\nAugustin\nDUSHIME', 'Two MDR-TB\ntreatment centers,\none within Kigali\n(Kibagabaga\nhospital) and\nanother in the\nsouthern porovince\n(Kabutare hospital)', 'Phase\nII', 'Drugs', 'Amikacin 500\nmg/2ml solution for\ninjection', 20, 21, '2023-02-08', '022/CTAC/F\nDA/2023', 'Approved', '2024-02-07', 'Ongoing Implementation'),
(30, 'DIS/PVSM/C\nT/CTA-17687-02122022', 'Clinical Validation of Novel Malaria\nDiagnostic Tools for point-of-Care\nTesting, Innovation Platform Round 2', 'FIND, the global\nalliance for\ndiagnostics', 'Jean Pierre\nMusabyimana', 'Byimana HC\n&Rwaniro HC,\ncatchment area of\nCHUB', 'Phase\nIII', 'Medical\nDevices', 'Index tests:\nTruenat® Malaria\nPv/Pf test, Truenat®\nMalaria Pv/Pf Hi-Sens, Humasis has-Malaria p.f./Pan\nTest, Optical\nimaging of hemozoin', 509, 11, '2023-02-15', '023/CTAC/F\nDA/2023', 'Approved', '2024-02-14', 'Ongoing Implementation');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fdadats`
--
ALTER TABLE `fdadats`
  ADD PRIMARY KEY (`No`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
