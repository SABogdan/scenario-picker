-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2019 at 07:52 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scene-picker`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `password` text NOT NULL,
  `websiteId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `websiteId`) VALUES
(1, 'name', 'test', 1),
(2, '6', 'e4da3b7fbbce2345d7772b0674a318d5', 5),
(3, '2', 'bcbe3365e6ac95ea2c0343a2395834dd', 222),
(4, '3332', 'b0ab42fcb7133122b38521d13da7120b', 3332);

-- --------------------------------------------------------

--
-- Table structure for table `scenarios`
--

CREATE TABLE `scenarios` (
  `id` int(11) NOT NULL,
  `scenario` text NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scenarios`
--

INSERT INTO `scenarios` (`id`, `scenario`, `level`) VALUES
(1, 'Fight (1 person, No weapon)', 1),
(2, 'Assualt (1 person, No weapon)', 1),
(3, 'Mugging (1 person, No weapon)', 1),
(4, 'Hunting violation', 1),
(5, 'Hunting injury', 1),
(6, 'Compliant traffic stop with a pedal bike', 1),
(7, 'Compliant traffic stop with a motor vehicle', 1),
(8, 'Uncompliant traffic stop with a pedal bike', 1),
(9, 'Uncompliant traffic stop with a motor vehicle', 1),
(10, 'Suspicious person', 1),
(11, 'Jay-walking on minor roads', 1),
(12, 'Jay-walking on major roads', 1),
(13, 'Public drinking', 1),
(14, 'Domestic disturbance', 1),
(15, 'Breaching the peace', 1),
(16, 'Reckless driving', 1),
(17, 'Speeding', 1),
(18, 'Vehicle law violation', 1),
(19, 'Traffic law violation', 1),
(20, 'Minor medical call', 1),
(21, 'Major medical call (No stopping breathing)', 1),
(22, 'Solicitation (No sexual acts)', 1),
(23, 'Public indecency/exposure (No SOP Violation/Nudity)', 1),
(24, 'Distrub the peace', 1),
(25, 'Tresspassing (Not Federal)', 1),
(26, 'Domestic dispute / distrubance', 1),
(27, 'Minor traffic accident (Max 2 cars, keeping breathing)', 1),
(28, 'Major traffic accident (Max 2 cars, keeping breathing)', 1),
(29, 'Unconcious person', 1),
(30, 'Minor medical calls (Non fatal)', 1),
(31, 'Drug overdose', 1),
(32, 'Breach of the peace', 1),
(33, 'Vandalism (Less than $950)', 1),
(34, 'Property damage (Less than $950)', 1),
(35, 'Unarmed shoplifting', 1),
(36, 'DUI (Alcohol)', 1),
(37, 'DUI (Drugs)', 1),
(38, 'Suspicious person leading to a 10-70 (Civ 1+)', 1),
(39, 'Reckless driving', 1),
(40, 'Petty theft (Less than $950)', 1),
(41, 'Use drugs', 1),
(42, 'Extortion (Under $950)', 1),
(43, 'Forgery / fraud', 1),
(44, 'Stalking', 1),
(45, 'Illegal Dumping', 1),
(46, 'Bribery of a government employee', 1),
(47, 'Dissuading a victim', 1),
(48, 'False information to a police officer', 1),
(49, 'Filing a false police report (Lying about theft etc)', 1),
(50, 'Tampering with evidence', 1),
(51, 'Carbon Monoxide alarm goes off', 1),
(52, 'Carbon Monoxide poisining', 1),
(53, 'Injury to self or others ', 1),
(54, 'Allergic reaction', 1),
(55, 'Having a stroke at home', 1),
(56, 'Seizure in public place', 1),
(57, 'Domestic disturbance', 1),
(58, 'Animal abuse (Keep it PG, e.g. Leaving animal in an unattended car)', 1),
(59, 'Poaching (Illegal hunting/over limits)', 1),
(60, 'Minor in possession of alcohol', 1),
(61, 'Driving without a license', 1),
(62, 'Vehicle accident with property damage', 1),
(63, 'Driving a commercial vehicle without CDL (Follow structure)', 1),
(64, 'Commercial vehicle over weight limit', 1),
(65, 'Suspicious person calls', 1),
(66, 'A person is snooping around a house/business', 1),
(67, 'Hunting while intoxicated', 1),
(68, 'Hunting at night', 1),
(69, 'Coercing a wild animal into your vehicle to keep them as a pet', 1),
(70, 'Go fishing (wildlife rangers orientated call)', 1),
(71, 'Human trafficking', 1),
(72, 'Running in front of traffic (Chicken/Frogger)', 1),
(73, 'Drive odd vehicles on the roads (tractors, bulldozers, lawnmowers etc.)', 1),
(74, 'Blown tire/vehicle problem scenario', 1),
(75, 'Heart attack while driving ', 1),
(76, 'BMX tricks', 1),
(77, 'Hiking', 1),
(78, 'Peaceful protest', 1),
(79, 'Exploring the caves/mines', 1),
(80, 'Animal/Person stuck in a tree', 1),
(81, 'Groups playing Pokemon Go or Geocaching', 1),
(82, 'Motorcycle ride through the city/county', 1),
(83, 'Missing persons call', 1),
(84, 'Person with dementia unsure where they live', 1),
(85, 'Elderly person in distress in their home', 1),
(86, 'Uber driver', 1),
(87, 'Delivery driver (Takeaway food etc.)', 1),
(88, 'Camping (Legally or illegally)', 1),
(89, 'Dead body investigation (Natural or suspicious causes)', 1),
(90, 'Smoke alarm went off at a house for burnt cooking (Fire call)', 1),
(91, 'Faulty fire alarm (Fire investigation)', 1),
(92, 'Car died in the middle of the road/railroad tracks', 1),
(93, 'A blind person walking down a roadway', 1),
(94, 'Person in back of truck driver dosent know about', 1),
(95, 'Homeless person sleeping in a strange place', 1),
(96, 'Eating food in a convenience store and refusing to pay for it', 1),
(97, 'Calling 911 to complain about bad service at the 24/7 multiple times', 1),
(98, 'Sit at a stoplight or stop sign for a long time texting someone', 1),
(99, 'Drive a dilapidated, damaged vehicle just purchased from the junkyard', 1),
(100, 'Drive unreasonably slowly', 1),
(101, 'Playing an elderly character and need help crossing the street', 1),
(102, 'Hit and run and suspect flees the scene', 1),
(103, 'Blood Drive in a respective vehicle', 1),
(104, 'Social experiments - 2 civs pranking each other on the street, passers calling 911', 1),
(105, 'Being detained by Gruppe6', 1),
(106, 'Bounty Hunting (should be its own business/subdivision)', 1),
(107, 'Civs are disrupting traffic, selling items, protest etc', 1),
(108, 'Shoplifting from Megamall/YouTool (Under $950)', 1),
(109, 'Stealing gas from peoples vehicles', 1),
(110, 'Package thief - Steal packages from front doors', 1),
(111, 'Parkour - Trespassing, jumping on cars, etc. ', 1),
(112, 'Sabotaging gas pumps by adding credit card scanners/cloners (Fraud)', 1),
(113, 'Unnecesary/Unwanted 911 calls (Beehive needs removing, tree clearence etc)', 1),
(114, 'Stranded on a boat on the Alamo Sea', 1),
(115, 'Calling the police over something not worthy them being called for', 1),
(153, 'Fatal traffic accident (2+ cars allowed)', 2),
(154, 'Major traffic accident (2+ cars, stop breathing)', 2),
(155, 'Multi-car pile up', 2),
(156, 'Major medical calls (Fatal)', 2),
(157, 'Severe property damage (Over $950)', 2),
(158, 'Robbery (Less than 3 people)', 2),
(159, 'Armed robbery', 2),
(160, 'Bank robbery (No shots at LEO)', 2),
(161, 'Armed mugging (Less than 3 people)', 2),
(162, 'Assault 1 person (Melee weapon, not killed)', 2),
(163, 'Assault 2 people (Melee weapon, not killed)', 2),
(164, 'Assault 3 people (Melee weapon, not killed)', 2),
(165, 'Assault 1 person (Lethal weapon, not killed)', 2),
(166, 'Assault 2 people (Lethal weapon, not killed)', 2),
(167, 'Assault 3 people (Lethal weapon, not killed)', 2),
(168, 'Assault a first responder (No weapon, not killed)', 2),
(169, 'Uncompliant traffic stop with a 10-80/10-70', 2),
(170, 'Compliant traffic stop with a 10-80/10-70', 2),
(171, 'Sell drugs to a minor', 2),
(172, 'Sell drugs leading to 10-70/10-80', 2),
(173, 'Try sell drugs to LEO', 2),
(174, 'Try sell drugs to Fire Department', 2),
(175, 'Drug trafficing', 2),
(176, 'Human traffic 2 illegal immigrants ', 2),
(177, 'Suicidal person (No weapon)', 2),
(178, 'Suicidal person (With weapon)', 2),
(179, 'Suicide by cop', 2),
(180, 'Resist arrest', 2),
(181, 'Drug traffiking', 2),
(182, 'Running drug lab', 2),
(183, 'Street racing', 2),
(184, 'Drag race on restricted property', 2),
(185, 'Steal an unoccupied vehicle', 2),
(186, 'Unprovoked murder', 2),
(187, 'Aggravated murder', 2),
(188, 'Criminal threats with no follow through', 2),
(189, 'Criminal threats with follow through', 2),
(190, 'Intimidation with weapon', 2),
(191, 'Intimidation with threats', 2),
(192, 'Stalking', 2),
(193, 'Kidnap a person and let them go', 2),
(194, 'Structure fire (Civ 3+/Trained)', 2),
(195, 'Commercial fire (Civ 3+/Trained)', 2),
(196, 'Bin fire (Civ 3+/Trained)', 2),
(197, 'Small brush fire (Civ 3+/Trained)', 2),
(198, 'Unarmed robbery of a 24/7', 2),
(199, 'Assualt a Gruppe6 security guard', 2),
(200, 'Kidnap a person and kill them', 2),
(201, 'Property damage to police car (Over $950)', 2),
(202, 'Extortion (Over $950)', 2),
(203, 'Run a stop sign and crash at an intersection', 2),
(204, 'Rob a civ with a gun', 2),
(205, 'Do a 10-80', 3),
(206, 'Do a 10-70 with shots fired', 3),
(207, 'Steal a vehicle that is occupied', 3),
(208, 'Shootout with 1 LEO', 3),
(209, 'Shootout with 2 LEOs', 3),
(210, 'Shootout with 1 civilian', 3),
(211, 'Shootout with 2 civilians', 3),
(212, 'Kidnap multiple civilians', 3),
(213, 'Assualt a LEO', 3),
(214, 'Resistant subject', 3),
(215, 'Small bank robbery', 3),
(216, 'Bank robery with hostages WITHOUT negoatiation', 3),
(217, 'Try steal a Gruppe6 guards gun', 3),
(218, 'Bank robbery with shots fired/10-80', 3),
(219, 'Breakout from prison', 3),
(220, 'Negotiate for your life (Suicide)', 3),
(221, 'Murder turned to cannibalism', 3),
(222, 'Cannibalism in a public place (Legally/Illegaly)', 3),
(223, 'Plane crash into building (Civ Staff+ Approval)', 3),
(224, 'Plane crash into open area (Civ Staff+ Approval)', 3),
(225, 'Emergency landing in Heli/Plane (Civ Staff+ Approval)', 3),
(226, 'Low flying helicopter (Civ Staff+ Approval)', 3),
(227, 'Aggressive flying (Civ Staff+ Approval)', 3),
(228, 'Suicidal person', 3),
(229, 'Tresspass on an airfield', 3),
(230, 'Tresspass on a military/federal base', 3),
(231, 'Occupation of police station', 3),
(232, 'Negotiate for money', 3),
(233, 'Negotiate for a civilian', 3),
(234, 'Negotiate for objects (Heli, Car, Plane, etc)', 3),
(235, 'Serial canibalism', 3),
(236, 'Do a 10-80 with shots fired', 4),
(237, 'Steal a vehicle that is occupied', 4),
(238, 'Shootout with 1 LEO', 4),
(239, 'Shootout with 2 LEOs', 4),
(240, 'Shootout with 3 LEOs', 4),
(241, 'Shootout with 1 civilian', 4),
(242, 'Shootout with 2 civilians', 4),
(243, 'Shootout with 3 civilians', 4),
(244, 'Kidnap multiple civilians', 4),
(245, 'Assualt a LEO', 4),
(246, 'Resistant subject', 4),
(247, 'Small bank robbery', 4),
(248, 'Bank robery with hostages WITHOUT negoatiation', 4),
(249, 'Try steal a Gruppe6 guards gun', 4),
(250, 'Bank robbery with shots fired/10-80', 4),
(251, 'Breakout from prison', 4),
(252, 'Negotiate for your life (Suicide)', 4),
(253, 'Murder turned to cannibalism', 4),
(254, 'Shoutout with multiple LEO', 4),
(255, 'Boat pursuit', 4),
(256, 'Take a hostage and negotiate for their lives', 4),
(257, 'Mass shooting (3 Civs/LEO)', 4),
(258, 'Violent riots', 4),
(259, 'Bank defrauding', 4),
(260, 'Hacking of government systems (CCTV, Prison records etc)', 4),
(261, 'Entering someones vehicle with no permission and taking hostage', 4),
(262, 'Serial murders', 4),
(263, 'Serial arson', 4),
(264, 'Major wildfire', 4),
(265, 'Major structure fire', 4),
(266, 'Forcing entry to Zancudo', 4),
(267, 'Leading a mass prison break', 4),
(268, 'Important cargo convoy attack (Prisoner, Money, Ordinance)', 4),
(269, 'Shoutout with multiple LEO', 5),
(270, 'Boat pursuit', 5),
(271, 'Take a hostage and negotiate for their lives', 5),
(272, 'Mass shooting (3 Civs/LEO)', 5),
(273, 'Violent riots', 5),
(274, 'Bomb threat at shop', 5),
(275, 'Bomb threat in parked car', 5),
(276, 'Bomb threat at police station', 5),
(277, 'Get into a LEO vehicle and refuse to leave', 5),
(278, 'Get into a LEO vehicle and pull a gun', 5),
(279, 'Take an LEO hostage', 5),
(280, 'Steal an unoccupied police car', 5),
(281, 'Steal a police car with suspect in back', 5),
(282, 'Steal a police car on traffic stop', 5),
(283, 'Steal a fire apparatus from a station', 5),
(284, 'Snpier threats at police', 5),
(285, 'Bank defrauding', 5),
(286, 'Police targeted threats', 5),
(287, 'Sniper shots towards vehicles from a concealed position', 5),
(288, 'Hacking of government systems (CCTV, Prison records etc)', 5),
(289, 'Entering someones vehicle with no permission and taking hostage', 5),
(290, 'Serial murders', 5),
(291, 'Serial arson', 5),
(292, 'Major wildfire', 5),
(293, 'Major structure fire', 5),
(294, 'Letter bomb threats', 5),
(295, 'Bomb threat at humane labs/federal weapon plant', 5),
(296, 'Forcing entry to Zancudo', 5),
(297, 'Leading a mass prison break', 5),
(298, 'Important cargo convoy attack (Prisoner, Money, Ordinance)', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scenarios`
--
ALTER TABLE `scenarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `scenarios`
--
ALTER TABLE `scenarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=299;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
