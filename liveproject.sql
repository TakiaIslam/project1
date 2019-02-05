-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2018 at 02:52 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `liveproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `class` int(11) NOT NULL,
  `section` varchar(2) NOT NULL,
  `roll` int(3) NOT NULL,
  `fatherName` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(15) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `img`, `firstName`, `lastName`, `class`, `section`, `roll`, `fatherName`, `address`, `phone`, `gender`, `dob`) VALUES
(1, 'img/Passport_Size_Image_of_Nouman.jpg', 'Rony', 'Alam', 1, 'B', 2, 'kuddus', 'Rongpur', 140041458, 'Male', '2018-12-13'),
(2, 'img/Passport-size-photo.jpg', 'Naimul', 'Hasan', 1, 'B', 1, 'kuddus', 'Rongpur', 140041458, 'Male', '1990-05-26'),
(3, 'img/Passport-size-photo.jpg', 'Hero', 'Alam', 1, 'A', 2, 'kuddus', 'Rongpur', 140041458, 'Male', '2018-12-03'),
(4, 'img/Passport_Size_Image_of_Nouman.jpg', 'Rony', 'Alam', 2, 'B', 2, 'Harun', 'dhaka', 140041456, 'Male', '2018-12-28'),
(5, 'img/passport-03.jpg', 'Naimul', 'Hasan', 3, 'A', 1, 'Tamim iqbal', 'barisal', 140041256, 'Male', '2018-12-30'),
(6, 'img/Passport-01.jpg', 'imrul', 'kayes', 2, 'B', 1, 'salam', 'syllet', 140041896, 'Male', '2018-12-23'),
(7, 'img/Passport - 02.jpg', 'musfiqir', 'Rahim', 1, 'A', 1, 'Rufiq', 'dhaka', 140045689, 'Male', '2018-12-28'),
(8, 'img/passport-04.jpg', 'sarmin', 'akther', 2, 'B', 2, 'Tamim iqbal', 'dhaka', 1400414585, 'Male', '2018-12-22'),
(9, 'img/Passport-116jpg.jpg', 'sekh', 'hasina', 1, 'A', 1, 'Harun', 'barisal', 1400565465, 'Male', '2018-12-21'),
(10, 'img/Passport-115jpg.jpg', 'golem', 'vai', 2, 'B', 2, 'king', 'Rongpur', 140041469, 'Male', '2018-12-19'),
(11, 'img/Passport-07.jpg', 'Pekka', 'Alam', 1, 'A', 1, 'Rufiq', 'barisal', 1400412565, 'Male', '2018-12-19'),
(12, 'img/Passport-117jpg.jpg', 'velkery', 'akther', 2, 'B', 2, 'kuddus', 'syllet', 140041212, 'Male', '2018-12-27'),
(13, 'img/Passport-118jpg.jpg', 'Baby', 'Drag', 1, 'A', 1, 'king', 'syllet', 1400418962, 'Male', '2018-12-08'),
(14, 'img/Passport-10.jpg', 'wall', 'Braker', 2, 'B', 2, 'salam', 'Rongpur', 140041468, 'Male', '2018-12-15'),
(15, 'img/Passport-114jpg.jpg', 'Gaint', 'chowdory', 1, 'A', 1, 'king', 'dhaka', 140041451, 'Male', '2018-12-16'),
(16, 'img/Passport-119pg.jpg', 'Khorsed', 'alam', 1, 'A', 1, 'Harun', 'Rongpur', 140041458, 'Male', '2018-12-29'),
(17, 'img/download.jpg', 'Abdul', 'Malik', 3, 'A', 1, 'Abdul Khalek', 'Chattiagang, Bangladesh', 1921382183, 'Male', '2012-10-01'),
(18, 'img/f8c31e9ac4d82e98e5b0e48feb5ec62e.jpg', 'Samsu', 'Uddin', 5, 'A', 1, 'Abdul Malik', 'Dhaka, Bangladesh', 1921382181, 'Male', '1997-01-01'),
(19, 'img/images (2).jpg', 'Mirza ', 'Fakrul', 5, 'B', 1, 'Mirza Akkas', 'cumilla, Bangladesh', 1921382186, 'Male', '1998-01-02'),
(20, 'img/Passportsizephoto.JPG', 'Niamul', 'Karim', 5, 'A', 2, 'Abdul sattar', 'shylet', 1921382114, 'Male', '1996-04-02'),
(21, 'img/Mahmudul Hasan Official Photo.jpg', 'Rony', 'Talukdar', 5, 'B', 2, 'Bony Talukdar', 'Chattiagang, Bangladesh', 1921382117, 'Male', '1995-02-28'),
(22, 'img/com.tradertauhid.SefatUllah.png', 'Abdul', 'Nobab', 4, 'A', 1, 'sefu da', 'Chattiagang, Bangladesh', 1921382183, 'Male', '2012-10-01'),
(23, 'img/images (6).jpg', 'Abdul', 'Hamid', 4, 'A', 2, 'Hamid Mia', 'Dhaka, Bangladesh', 1921382158, 'Male', '1996-03-01'),
(24, 'img/images.jpg', 'Kalam', 'Khan', 4, 'B', 1, 'Abdul Hamid', 'Chattiagang, Bangladesh', 1921382178, 'Male', '1993-03-05'),
(25, 'img/images (10).jpg', 'Fazlul', 'karim', 4, 'B', 2, 'Mirza Akkas', 'cumilla, Bangladesh', 1921382569, 'Male', '1993-02-03'),
(26, 'img/images (9).jpg', 'Abdul', 'Karim', 3, 'B', 1, 'Abdul Khalek', 'Chattiagang, Bangladesh', 1921382181, 'Male', '1994-01-03'),
(27, 'img/images (8).jpg', 'Mirza ', 'Abbas', 4, 'B', 2, 'Abdul sattar', 'Chattiagang, Bangladesh', 1921382117, 'Male', '1993-03-10'),
(28, 'img/images (3).jpg', 'Samsu', 'Uddin', 3, 'B', 2, 'Abdul Malik', 'Dhaka, Bangladesh', 1921382181, 'Male', '1992-02-05'),
(29, 'img/images (3).jpg', 'Nazim', 'Uddin', 2, 'B', 2, 'Abdul Malik', 'Dhaka, Bangladesh', 1921382181, 'Male', '1992-02-05'),
(30, 'img/images (5).jpg', 'Rony', 'Talukdar', 2, 'B', 2, 'Abdul sattar', 'Dhaka, Bangladesh', 1921382183, 'Male', '1991-03-06'),
(31, 'img/images (5).jpg', 'Mirza ', 'Fakrul', 2, 'A', 1, 'Abdul sattar', 'Chattiagang, Bangladesh', 1921382183, 'Male', '1997-01-28'),
(32, 'img/images.jpg', 'Abdul', 'Salam', 2, 'A', 2, 'Mirza Akkas', 'cumilla, Bangladesh', 1921382186, 'Male', '1978-11-07'),
(33, 'img/IMG_9911_copy.307195445_std.jpg', 'hall', 'korim', 2, 'A', 3, 'Mirza Akkas', 'Chattiagang, Bangladesh', 1921382181, 'Male', '1989-02-07'),
(34, 'img/Vedas-passport-size-1.jpg', 'jowel', 'hawlader', 2, 'A', 4, 'Abdul Malik', 'Dhaka, Bangladesh', 1921382186, 'Male', '2014-06-17'),
(35, 'img/marqueetoolshape.jpg', 'sami', 'billa', 2, 'A', 5, 'Abdul sattar', 'cumilla, Bangladesh', 1921382117, 'unwanted', '2006-01-17'),
(36, 'img/Mahmudul Hasan Official Photo.jpg', 'Rohim', 'Fakrul', 2, 'A', 6, 'Abdul Malik', 'Dhaka', 1921382117, 'Male', '2010-06-11'),
(37, 'img/images (1).jpg', 'Sorif', 'Molla', 2, 'B', 3, 'Mirza Akkas', 'cumilla, Bangladesh', 1921382117, 'Male', '1998-06-09'),
(38, 'img/images (9).jpg', 'Jahid', 'kobir', 2, 'B', 4, 'Abdul Khalek', 'Chattiagang, Bangladesh', 1921382114, 'Male', '1974-09-29'),
(39, 'img/IMG_9911_copy.307195445_std.jpg', 'Sohag', 'Billa', 2, 'B', 6, 'Abdul Khalek', 'Dhaka, Bangladesh', 1921382183, 'Male', '1996-09-27'),
(40, 'img/passport size copy.jpg', 'Somiya', 'Jahan', 3, 'A', 4, 'Abdul Malik', 'cumilla, Bangladesh', 1921382186, 'Female', '2006-10-27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `power` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `email`, `pass`, `power`) VALUES
(1, 'evan', 'evan60@dipti.com.bd', '123456', 'admin'),
(2, 'rony', 'rony61@dipti.com.bd', '123456', 'co');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
