-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 26, 2021 at 07:34 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id16691685_covid_19`
--

-- --------------------------------------------------------

--
-- Table structure for table `Activity_After_14`
--

CREATE TABLE `Activity_After_14` (
  `Code` int(11) NOT NULL,
  `AA14_Order` int(11) NOT NULL,
  `AA14_Date` int(11) NOT NULL,
  `AA14_Activity` int(11) NOT NULL,
  `AA14_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Activity_Before_14`
--

CREATE TABLE `Activity_Before_14` (
  `Code` int(11) NOT NULL,
  `AB14_Order` int(11) NOT NULL,
  `AB14_Date` int(11) NOT NULL,
  `AB14_Activity` int(11) NOT NULL,
  `AB14_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `CBC`
--

CREATE TABLE `CBC` (
  `Code` int(11) NOT NULL,
  `Order_of_CBC` int(11) NOT NULL,
  `CBC_Date` int(11) NOT NULL,
  `CBC_Hb` int(11) NOT NULL,
  `CBC_Hct` int(11) NOT NULL,
  `CBC_Platelet_Count` int(11) NOT NULL,
  `WBC` int(11) NOT NULL,
  `WBC_N` int(11) NOT NULL,
  `WBC_L` int(11) NOT NULL,
  `WBC_Atyp_Lymph` int(11) NOT NULL,
  `WBC_Mono` int(11) NOT NULL,
  `WBC_Orther` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Clinic Data`
--

CREATE TABLE `Clinic Data` (
  `Code` int(11) NOT NULL,
  `Start_Date_sick` datetime NOT NULL,
  `Strat_Date_Treatment` datetime NOT NULL,
  `First_Hospital` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `FH_Province` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Present_Hospital` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `PH_Province` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Fever` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Temperature` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `O2Sat` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Ventilator` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `Cough` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `Sore_throat` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `Muscle_pain` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `Snot` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `Phlegm` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `Difficult_breathing` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `Headache` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `Liquid` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `Not_smell` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `Unflavored` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `Conjunctivitis` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `Rash` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `Orther` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Close_Person`
--

CREATE TABLE `Close_Person` (
  `Code` int(11) NOT NULL,
  `CS_Order` int(11) NOT NULL,
  `CS_Name` int(11) NOT NULL,
  `CS_Sex` int(11) NOT NULL,
  `CS_Age` int(11) NOT NULL,
  `CS_Address` int(11) NOT NULL,
  `CS_Phone` int(11) NOT NULL,
  `CS_Date` int(11) NOT NULL,
  `CS_Stance` int(11) NOT NULL,
  `CS_YN_ Patient` int(11) NOT NULL,
  `CS_Protected` int(11) NOT NULL,
  `CS_Vaccine_Date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `General_Data`
--

CREATE TABLE `General_Data` (
  `Code` int(11) NOT NULL,
  `ID_card` int(13) NOT NULL,
  `Name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `LName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Career` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Work_Edu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `PhoneNo` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Mochana_Phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Age_year` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Age_month` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `Male` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `Female` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `No_pregnant` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `pregnant` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `pregnantNO` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `MountOfPre` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `House` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `OtherAdd` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `H_number` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Moo` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `Village` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Side_road` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Road` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `District` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Amphur` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Province` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Diseases` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `No_Smoke` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `Smoke` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `Stop_smoke` varchar(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `History_of_Risk`
--

CREATE TABLE `History_of_Risk` (
  `Code` int(11) NOT NULL,
  `Living_Risk_Area` int(11) NOT NULL,
  `City_ Risk_Area` int(11) NOT NULL,
  `Country_ Risk_Area` int(11) NOT NULL,
  `Date_in_Thailand` int(11) NOT NULL,
  `Airliner` int(11) NOT NULL,
  `Flights` int(11) NOT NULL,
  `Treat_or_Visit` int(11) NOT NULL,
  `Contact_ Patient` int(11) NOT NULL,
  `Patient_Name` int(11) NOT NULL,
  `Career_Contact` int(11) NOT NULL,
  `Risk_area` int(11) NOT NULL,
  `Area_Name` int(11) NOT NULL,
  `Pneumonia` int(11) NOT NULL,
  `Pneumonia_Severity` int(11) NOT NULL,
  `Medical_personel` int(11) NOT NULL,
  `Other_Risk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `History_Vacin_Covid19`
--

CREATE TABLE `History_Vacin_Covid19` (
  `Code` int(11) NOT NULL,
  `Vaccine_never` int(11) NOT NULL,
  `Vaccine_ever` int(11) NOT NULL,
  `Vaccine_Record` int(11) NOT NULL,
  `Vaccine_Record_Not` int(11) NOT NULL,
  `Vaccine_1_date` int(11) NOT NULL,
  `Vaccine_name1` int(11) NOT NULL,
  `Station_1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Influenza_test`
--

CREATE TABLE `Influenza_test` (
  `Code` int(11) NOT NULL,
  `Method_test` int(11) NOT NULL,
  `Negative_test` int(11) NOT NULL,
  `Possitive_test` int(11) NOT NULL,
  `Flu_A` int(11) NOT NULL,
  `Flu_B` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Patient_status`
--

CREATE TABLE `Patient_status` (
  `Code` int(11) NOT NULL,
  `Get_well` int(11) NOT NULL,
  `Healing` int(11) NOT NULL,
  `Died` int(11) NOT NULL,
  `Deliver_to_hospital` int(11) NOT NULL,
  `Other` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Patient_type`
--

CREATE TABLE `Patient_type` (
  `Code` int(11) NOT NULL,
  `Outpatient` int(11) NOT NULL,
  `Inpatient` int(11) NOT NULL,
  `Admit_Date` int(11) NOT NULL,
  `Diagnosis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Rash`
--

CREATE TABLE `Rash` (
  `Code` int(11) NOT NULL,
  `Rash_active` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `Position_Rash1` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Position_Rash2` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Position_Rash3` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Position_Rash4` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `SARS_CoV_2_Antibidy`
--

CREATE TABLE `SARS_CoV_2_Antibidy` (
  `Code` int(11) NOT NULL,
  `Order_Antibidy` int(11) NOT NULL,
  `Date_Antibidy` int(11) NOT NULL,
  `Example_type_Antibidy` int(11) NOT NULL,
  `Station_Antibidy` int(11) NOT NULL,
  `Result_Antibidy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `SARS_CoV_2_PCR`
--

CREATE TABLE `SARS_CoV_2_PCR` (
  `Code` int(11) NOT NULL,
  `Order_PCR` int(11) NOT NULL,
  `Date_PCR` int(11) NOT NULL,
  `Example_type_PCR` int(11) NOT NULL,
  `Station_PCR` int(11) NOT NULL,
  `Detected_PCR` int(11) NOT NULL,
  `Not_Detected_PCR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `X-ray`
--

CREATE TABLE `X-ray` (
  `Code` int(11) NOT NULL,
  `Xrey_No` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `Xrey_Yes` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `Xrey_Date` datetime NOT NULL,
  `Xrey_Result` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CBC`
--
ALTER TABLE `CBC`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `General_Data`
--
ALTER TABLE `General_Data`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `X-ray`
--
ALTER TABLE `X-ray`
  ADD PRIMARY KEY (`Code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
