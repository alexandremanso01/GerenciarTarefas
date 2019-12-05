-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 05, 2019 at 02:27 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Alexandre`
--

-- --------------------------------------------------------

--
-- Table structure for table `dados`
--

CREATE TABLE `dados` (
  `id` int(11) NOT NULL,
  `user` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dados`
--

INSERT INTO `dados` (`id`, `user`, `senha`) VALUES
(1, 'teste', 'teste'),
(2, 'teste', 'teste'),
(3, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tarefa`
--

CREATE TABLE `tarefa` (
  `id` int(11) NOT NULL,
  `descricao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `executado` int(1) NOT NULL,
  `datahora` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tarefa`
--

INSERT INTO `tarefa` (`id`, `descricao`, `usuario`, `executado`, `datahora`) VALUES
(31, 'asdfdasdf', 'teste', 0, '05-12-19/02:07:58'),
(30, '', 'teste', 0, '05-12-19/01:43:12'),
(29, 'tarefa nova 2', 'teste', 1, '04-12-19/05:45:44'),
(24, 'asdfsdfggsdfg', 'teste', 1, '04-12-19/05:37:43'),
(25, 'asdfsdfggsdfgerqwerwre', 'teste', 1, '04-12-19/05:38:10'),
(28, 'tarefa nova ', 'teste', 0, '04-12-19/05:44:57'),
(26, 'kjnkjnkjnk', 'teste', 1, '04-12-19/05:43:08'),
(27, 'nova tarefa', 'teste', 0, '04-12-19/05:43:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dados`
--
ALTER TABLE `dados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tarefa`
--
ALTER TABLE `tarefa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dados`
--
ALTER TABLE `dados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tarefa`
--
ALTER TABLE `tarefa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
