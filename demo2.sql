-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 09:49 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo2`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `uname` varchar(100) NOT NULL,
  `msg` longtext NOT NULL,
  `dt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_temp`
--

CREATE TABLE `password_reset_temp` (
  `email` varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `password_reset_temp`
--

INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`) VALUES
('reem@gmail.com', '768e78024aa8fdb9b8fe87be86f64745ea950f4aac', '2022-06-27 21:51:32');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) UNSIGNED NOT NULL,
  `from_user` int(11) DEFAULT NULL,
  `to_user` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `book_condition` varchar(100) NOT NULL,
  `exchange_book` varchar(100) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `created_at` timestamp(5) NOT NULL DEFAULT current_timestamp(5),
  `updated_at` datetime(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `from_user`, `to_user`, `status`, `book_condition`, `exchange_book`, `post_id`, `created_at`, `updated_at`) VALUES
(10, 2, 2, NULL, 'desc', 'book ', 11, '2022-06-27 11:29:06.00000', '2022-06-27 13:29:06.00000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'reem', 'reem@gmail.com', '25f9e794323b453885f5181f1b624d0b'),
(2, 'yasmine', 'yasmine@gmail.com', '25f9e794323b453885f5181f1b624d0b'),
(3, 'rana', 'rana@gmail.com', '25f9e794323b453885f5181f1b624d0b'),
(4, 'jaida', 'jaida@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'malak', 'malak@gmail.com', '25f9e794323b453885f5181f1b624d0b');

-- --------------------------------------------------------

--
-- Table structure for table `user_posts`
--

CREATE TABLE `user_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_posts`
--

INSERT INTO `user_posts` (`id`, `title`, `content`, `image`, `created_at`, `user_id`) VALUES
(3, 'Better Off Dead: A Jack Reacher Novel', '#1 NEW YORK TIMES BEST EXCHANGED * Jack Reacher is back in a brand-new page-turning thriller from acclaimed #1 bestselling authors Lee Child and Andrew Child. Digging graves had not been part of my plans when I woke up that morning. Reacher goes where he wants, when he wants, exchange the adventures.', 'image/action1.jpg', '2022-06-26 12:19:02', 3),
(4, 'The Lioness: A Novel', 'The Best to be swapped A luxurious African safari turns deadly for a Hollywood starlet and her entourage in this riveting historical thriller from the New York Times bestselling A luxurious African safari turns deadly for a Hollywood starlet and her entourage in this riveting historical thriller from the New York Times bestselling author of The Flight Attendant, exhange the adventures.', 'image/action2.jpg', '2022-06-26 12:20:20', 3),
(5, 'Dream Town: Let The Exchange Begin', 'USED BOOK EXCHANGE: Dream Town is the third book in the Archer series.Private investigator and World War II veteran Aloysius Archer heads to Los Angeles, the city where dreams are made and shattered, and is ensnared in a lethal case in this latest thriller in #1 New York Times bestselling author David Baldacci’s Nero Award-winning series, exhange the adventures and the action books.', 'image/action3.png', '2022-06-26 12:21:07', 3),
(6, 'To Kill a Mockingbird', 'Be The First To Exchange It: To Kill a Mockingbird is a novel by the American author Harper Lee. It was published in 1960 and was instantly successful. In the United States, it is widely read in high schools and middle schools. To Kill a Mockingbird has become a classic of modern American literature, winning the Pulitzer Prize, let the virtual exchange begin.', 'image/classic1.jpg', '2022-06-26 12:26:07', 3),
(7, 'The Great Gatsby: Worth The Exchange', 'Swap The Great Gatsby is a 1925 novel by American writer F. Scott Fitzgerald. Set in the Jazz Age on Long Island, near New York City, the novel depicts first-person narrator Nick Carraway\'s interactions with mysterious millionaire Jay Gatsby and Gatsby\'s obsession to reunite with his former lover, Daisy Buchanan,let the virtual exchange begin.', 'image/classic2.jpg', '2022-06-26 12:27:57', 3),
(8, 'Little Women', 'Classic Exchange: The story follows the lives of the four March sisters—Meg, Jo, Beth, and Amy—and details their passage from childhood to womanhood. Little Women is a coming-of-age novel Originally published in two volumes in 1868 and 1869, Alcott wrote the book over several months at the request of her publisher, let the virtual exchange begin', 'image/classic3.jpg', '2022-06-26 12:28:39', 3),
(11, 'title', 'description', 'image/comic2.jpg', '2022-06-27 11:27:50', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requestfk` (`from_user`),
  ADD KEY `requestfk2` (`to_user`),
  ADD KEY `requestfk3` (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_posts`
--
ALTER TABLE `user_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userpostfk` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_posts`
--
ALTER TABLE `user_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requestfk` FOREIGN KEY (`from_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `requestfk2` FOREIGN KEY (`to_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `requestfk3` FOREIGN KEY (`post_id`) REFERENCES `user_posts` (`id`);

--
-- Constraints for table `user_posts`
--
ALTER TABLE `user_posts`
  ADD CONSTRAINT `userpostfk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
