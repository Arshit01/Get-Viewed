-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2022 at 01:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `get-viewed`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(10) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `GVC` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `user_name`, `email`, `password`, `GVC`) VALUES
(1, 'Mayur', 'mayur@gmail.com', '$2y$10$LfdILtleGPt4BSjG6BRypObz4toZxZch2uxI7rzpRTk1Idm19pjMy', 100),
(2, 'Amit Makwana', 'amit@gmail.com', '$2y$10$8p52QLHPd5lYhFufv4Sx9.fcX0R8eFtrJhWiekAzR6R0T6v9R..BO', 100),
(3, 'Vivek', 'vivek@gmail.com', '$2y$10$Rw7vm1uLkE3HMJ7rqHqKYudRJ33TzryD4w1oIDJp.x2eW2uL2e6/m', 100),
(4, 'Kaushik', 'kaushik@gmail.com', '$2y$10$OL4QhyxfAuPo3CeZ2akd1OPMNXpWd3z55eZCbuLzeBNaluyTwz6mS', 100);

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `link_id` int(10) NOT NULL,
  `u_id` int(10) NOT NULL,
  `link_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`link_id`, `u_id`, `link_url`) VALUES
(1, 4, 'https://www.youtube.com/shorts/Jpe0adhP8GI'),
(2, 4, 'https://www.youtube.com/shorts/c98I8N4CZQI'),
(3, 4, 'https://www.youtube.com/shorts/5ZUMXBMdi4c'),
(4, 4, 'https://www.youtube.com/shorts/AfrdUL7HLY4'),
(5, 4, 'https://www.youtube.com/watch?v=8jr8J7TgIcQ'),
(6, 2, 'https://www.youtube.com/shorts/BauamRT9DYI\r'),
(7, 2, 'https://www.youtube.com/watch?v=qi1Sa6fZAak\r'),
(8, 2, 'https://www.youtube.com/shorts/cfvzC88UGhg\r'),
(9, 2, 'https://www.youtube.com/watch?v=NYHjs53Lb5E\r'),
(10, 2, 'https://www.youtube.com/watch?v=5E4GMWGeC-M\r'),
(11, 2, 'https://www.youtube.com/shorts/9dJHzTvMvT0\r'),
(12, 2, 'https://www.youtube.com/watch?v=xgT87UAyyQk\r'),
(13, 2, 'https://www.youtube.com/shorts/3TEkcVlg998\r'),
(14, 2, 'https://www.youtube.com/watch?v=1HpuvfzTpcw\r'),
(15, 2, 'https://www.youtube.com/shorts/ZYK311pBWZ8\r'),
(16, 2, 'https://www.youtube.com/watch?v=V5B4h8YH3Ug\r'),
(17, 2, 'https://www.youtube.com/watch?v=ppyl1AHkwpY\r'),
(18, 2, 'https://www.youtube.com/watch?v=RLRHHt8GPoc\r'),
(19, 2, 'https://www.youtube.com/shorts/ebECOb2ZEew\r'),
(20, 2, 'https://www.youtube.com/watch?v=FCglwjzBGpQ\r'),
(21, 2, 'https://www.youtube.com/shorts/FaDKihMnc9k\r'),
(22, 2, 'https://www.youtube.com/watch?v=MClhTtFybYI\r'),
(23, 2, 'https://www.youtube.com/watch?v=ozF_Ng39Xuk\r'),
(24, 2, 'https://www.youtube.com/shorts/D2htULpSbYg\r'),
(25, 2, 'https://www.youtube.com/watch?v=55h_oWXdTJk\r'),
(26, 2, 'https://www.youtube.com/watch?v=kyBVOBUISCI\r'),
(27, 2, 'https://www.youtube.com/shorts/a0nbzx22XzQ\r'),
(28, 2, 'https://www.youtube.com/watch?v=hUUR2BldXck\r'),
(29, 2, 'https://www.youtube.com/watch?v=IlU5B_gWKqI\r'),
(30, 2, 'https://www.youtube.com/watch?v=ovzXHE3SrtM\r'),
(31, 2, 'https://www.youtube.com/shorts/IydZ8nb7xNA\r'),
(32, 2, 'https://www.youtube.com/watch?v=4ELS0y7kE6s\r'),
(33, 2, 'https://www.youtube.com/watch?v=i95ZDPJLo3I\r'),
(34, 2, 'https://www.youtube.com/watch?v=OJK-RL6_P3o\r'),
(35, 2, 'https://www.youtube.com/watch?v=xX1K3VrjjHY\r'),
(36, 2, 'https://www.youtube.com/watch?v=2PuYzHqaPds\r'),
(37, 2, 'https://www.youtube.com/watch?v=OA1CfjWHINI\r'),
(38, 2, 'https://www.youtube.com/shorts/a_8m62dCOd4\r'),
(39, 2, 'https://www.youtube.com/watch?v=LS1AjlxvdVU\r'),
(40, 2, 'https://www.youtube.com/watch?v=vrWvQdQQytQ\r'),
(41, 2, 'https://www.youtube.com/shorts/qaYSuHwVCv4\r'),
(42, 2, 'https://www.youtube.com/watch?v=N2YstLUwzWo\r'),
(43, 2, 'https://www.youtube.com/watch?v=wlG26Vv3gzs\r'),
(44, 2, 'https://www.youtube.com/watch?v=_vNG1xr6JfA\r'),
(45, 2, 'https://www.youtube.com/watch?v=A8lQFDNF5f8\r'),
(46, 2, 'https://www.youtube.com/watch?v=jtZ1CN9RBv4\r'),
(47, 2, 'https://www.youtube.com/watch?v=-P_MjO1UWiE\r'),
(48, 2, 'https://www.youtube.com/shorts/3eiU3Obm9aw\r'),
(49, 2, 'https://www.youtube.com/watch?v=lw3DRDuFS3I\r'),
(50, 2, 'https://www.youtube.com/watch?v=m3k0IbA2Tac\r'),
(51, 2, 'https://www.youtube.com/watch?v=gXj_7vSiSGA\r'),
(52, 2, 'https://www.youtube.com/watch?v=vPqiBQk3e_Y\r'),
(53, 2, 'https://www.youtube.com/watch?v=UPSJDffo-SE\r'),
(54, 2, 'https://www.youtube.com/watch?v=K_egRWE3saQ\r'),
(55, 2, 'https://www.youtube.com/watch?v=bx0avr45nsk\r'),
(56, 2, 'https://www.youtube.com/watch?v=_cBcRegbP3g\r'),
(57, 2, 'https://www.youtube.com/watch?v=XjtrZkqgXHs\r'),
(58, 2, 'https://www.youtube.com/watch?v=Z4KFONJSUwk\r'),
(59, 2, 'https://www.youtube.com/watch?v=bj3PBrmDIfk\r'),
(60, 2, 'https://www.youtube.com/watch?v=dxxhZvwEWKU\r'),
(61, 2, 'https://www.youtube.com/watch?v=6ve4qcw7fak\r'),
(62, 2, 'https://www.youtube.com/watch?v=zA2IOnuILvQ\r'),
(63, 2, 'https://www.youtube.com/watch?v=gIJetraJHVA\r'),
(64, 2, 'https://www.youtube.com/watch?v=fkOR4DUPOtU\r'),
(65, 2, 'https://www.youtube.com/watch?v=CbrM9lBE9KM\r'),
(66, 2, 'https://www.youtube.com/watch?v=CtSL4iCmcpU\r'),
(67, 2, 'https://www.youtube.com/watch?v=6UlNIAG3NoA\r'),
(68, 2, 'https://www.youtube.com/watch?v=cKxiLkOa6yw\r'),
(69, 2, 'https://www.youtube.com/watch?v=R3ki4Sve1pY\r'),
(70, 2, 'https://www.youtube.com/watch?v=cca6GXNYSlA\r'),
(71, 2, 'https://www.youtube.com/watch?v=g-z_zBL8z98\r'),
(72, 2, 'https://www.youtube.com/watch?v=y2LvTeaxg0o\r'),
(73, 2, 'https://www.youtube.com/watch?v=cL7-6aeGx6c\r'),
(74, 2, 'https://www.youtube.com/watch?v=vPxJSAhvNyA\r'),
(75, 2, 'https://www.youtube.com/watch?v=xddbb3IYouQ\r'),
(76, 2, 'https://www.youtube.com/watch?v=Pd0T_Hx_eag\r'),
(77, 2, 'https://www.youtube.com/watch?v=1Ad1fD6uybc\r'),
(78, 2, 'https://www.youtube.com/watch?v=HX2M_sB3CPQ\r'),
(79, 2, 'https://www.youtube.com/shorts/rqlsnIYrAFU\r'),
(80, 2, 'https://www.youtube.com/watch?v=D3z87OIsRrQ\r'),
(81, 2, 'https://www.youtube.com/watch?v=wlH0gXGuvV8'),
(82, 4, 'https://www.youtube.com/shorts/D5pMRC2QWa0');

-- --------------------------------------------------------

--
-- Table structure for table `viewed`
--

CREATE TABLE `viewed` (
  `link_id` int(10) NOT NULL,
  `u_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `viewed`
--
ALTER TABLE `viewed`
  ADD KEY `link_id` (`link_id`),
  ADD KEY `u_id` (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `link_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_data`
--
ALTER TABLE `user_data`
  ADD CONSTRAINT `user_data_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`);

--
-- Constraints for table `viewed`
--
ALTER TABLE `viewed`
  ADD CONSTRAINT `viewed_ibfk_1` FOREIGN KEY (`link_id`) REFERENCES `user_data` (`link_id`),
  ADD CONSTRAINT `viewed_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
