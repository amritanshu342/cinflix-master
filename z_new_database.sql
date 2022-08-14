-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 06:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `z_new_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `email`, `password`) VALUES
(9, 'admin_amritanshu', 'admin@gmail.com', 'ecd00aa1acd325ba7575cb0f638b04a5');

-- --------------------------------------------------------

--
-- Table structure for table `amv`
--

CREATE TABLE `amv` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(800) NOT NULL,
  `thumbnail` varchar(300) NOT NULL,
  `video` varchar(300) NOT NULL,
  `logo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `amv`
--

INSERT INTO `amv` (`id`, `title`, `description`, `thumbnail`, `video`, `logo`) VALUES
(13, 'Midoriya & Bakugou vs Nine - Boku no Hero: Heroes Rising「AMV」- Courtesy Call ▪︎ @Gamera! ▪︎', 'https://firebasestorage.googleapis.com/v0/b/anime-76fbf.appspot.com/o/amv%2FMidoriya%20%26%20Bakugou%20vs%20Nine%20-%20Boku%20no%20Hero-%20Heroes%20Rising%E3%80%8CAMV%E3%80%8D-%20Courtesy%20Call%20%20%E2%96%AA%EF%B8%8E%20%40Gamera!%20%E2%96%AA%EF%B8%8E.mkv?alt=media&token=05a01f79-d1fe-43e9-9d2c-e3aab6d71ce2', 'https://static.posters.cz/image/750/plakatok/my-hero-academia-reach-up-i112431.jpg', ' Gamera!', 'https://yt3.ggpht.com/Jx7zc6QcGABQrakBp2cXllsEwiWIujAsFvZsOKrKsKaietw_wySxDRZD9u_jAOISDVf2EzHyDA=s48-c-k-c0x00ffffff-no-rj');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `category` varchar(800) NOT NULL,
  `image` varchar(800) NOT NULL,
  `hdate` varchar(300) NOT NULL,
  `resolution` varchar(300) NOT NULL,
  `timeline` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `name`, `category`, `image`, `hdate`, `resolution`, `timeline`) VALUES
(21, 'Tokyo Ghoul', 'demon', 'https://comicattack.net/wp-content/uploads/2018/07/TGC.png', '2014', '4k', '12hr 19min');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `img` varchar(200) NOT NULL,
  `contain` varchar(800) NOT NULL,
  `category` varchar(300) NOT NULL,
  `href` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `img`, `contain`, `category`, `href`) VALUES
(2, 'https://cdn1.clickthecity.com/wp-content/uploads/2022/03/08162522/Comedy-Anime.jpg', '50', 'Comedy', ''),
(3, 'https://cdn.wallpapersafari.com/6/4/UwuonX.jpg', '20', 'Thriller', ''),
(4, 'https://cdn.99images.com/photos/wallpapers/dreamy-fantasy/horror-anime%20android-iphone-desktop-hd-backgrounds-wallpapers-1080p-4k-qalrb.jpg', '80', 'Horror', ''),
(5, 'https://c4.wallpaperflare.com/wallpaper/102/874/361/action-adventure-anime-chronicles-wallpaper-preview.jpg', '100', 'Adventure', ''),
(6, 'https://i.ytimg.com/vi/dz_XKuTC5Vc/maxresdefault.jpg', '50', 'Animated', ''),
(7, 'https://64.media.tumblr.com/7fbcb0d5cdac545fae275533986b6dcd/90d91270072aa72e-67/s1280x1920/d807459bcfb17ec108651c9968be310b9bea47d4.png', '20', 'Crime', ''),
(8, 'https://i.ytimg.com/vi/PqXBZ7Krz_8/maxresdefault.jpg', '20', 'AMV', './pages/amv'),
(9, 'https://wallpaperaccess.com/full/806635.jpg', '70', 'SCI-FI', '');

-- --------------------------------------------------------

--
-- Table structure for table `contactdata`
--

CREATE TABLE `contactdata` (
  `id` int(11) NOT NULL,
  `firstname` varchar(55) NOT NULL,
  `lastname` varchar(55) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(55) NOT NULL,
  `message` text NOT NULL,
  `attachement` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactdata`
--

INSERT INTO `contactdata` (`id`, `firstname`, `lastname`, `phone`, `email`, `message`, `attachement`) VALUES
(11, 'amritanshu', 'singh', '6209386525', 'ffdarkrayon@gmail.com', 'update website', NULL),
(12, 'nuri ', 'kumari', '6209386525', 'amritanshu@gmail.com', 'improve this website', '');

-- --------------------------------------------------------

--
-- Table structure for table `episode_video_insert`
--

CREATE TABLE `episode_video_insert` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `videolink` varchar(200) NOT NULL,
  `active` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ep_video_insert`
--

CREATE TABLE `ep_video_insert` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `videolink` varchar(800) NOT NULL,
  `mainvideo` varchar(300) NOT NULL,
  `thumblain` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ep_video_insert`
--

INSERT INTO `ep_video_insert` (`id`, `title`, `videolink`, `mainvideo`, `thumblain`) VALUES
(17, '', '      <div class=\"list\">\r\n         <video src=\"\" class=\"list-video\"></video>\r\n         <h3 class=\"list-title\">   dddddddd   </h3>\r\n      </div>\r\n\r\n      <div class=\"list\">\r\n         <video src=\"\" class=\"list-video\"></video>\r\n         <h3 class=\"list-title\">   ddddddddddd   </h3>\r\n      </div>\r\n\r\n      <div class=\"list\">\r\n         <video src=\"\" class=\"list-video\"></video>\r\n         <h3 class=\"list-title\">     dddddddddd </h3>\r\n      </div>\r\n\r\n      <div class=\"list\">\r\n         <video src=\"\" class=\"list-video\"></video>\r\n         <h3 class=\"list-title\">    ddddddddddd  </h3>\r\n      </div>\r\n\r\n      <div class=\"list\">\r\n         <video src=\"\" class=\"list-video\"></video>\r\n         <h3 class=\"list-title\">   ddddddddddddd   </h3>\r\n      </div>\r\n\r\n      <div class=\"list\">\r\n         <video src=\"\" cla', '   <div class=\"main-video-container\">\r\n      <video src=\"images/vid-1.mp4\" loop controls class=\"main-video\"></video>\r\n      <h3 class=\"main-vid-title\">house flood animation</h3>\r\n   </div>', ''),
(18, '', '      <div class=\"list\">\r\n         <video src=\"\" class=\"list-video\"></video>\r\n         <h3 class=\"list-title\">  fsdgsfdgdfsgsdfdsg    </h3>\r\n      </div>\r\n\r\n      <div class=\"list\">\r\n         <video src=\"\" class=\"list-video\"></video>\r\n         <h3 class=\"list-title\">    dfsgsdfgdsfgfdsg  </h3>\r\n      </div>\r\n\r\n      <div class=\"list\">\r\n         <video src=\"\" class=\"list-video\"></video>\r\n         <h3 class=\"list-title\">    fdgsdfgsdfgsdfgsdfg  </h3>\r\n      </div>\r\n\r\n      <div class=\"list\">\r\n         <video src=\"\" class=\"list-video\"></video>\r\n         <h3 class=\"list-title\">  sdfgdfsgfdggfsdgfsdgfg    </h3>\r\n      </div>\r\n\r\n      <div class=\"list\">\r\n         <video src=\"\" class=\"list-video\"></video>\r\n         <h3 class=\"list-title\">  dfgsdfggggggsdfgfdgs    </h3>\r\n      </div>\r\n\r\n      <div', '   <div class=\"main-video-container\">\r\n      <video src=\"images/vid-1.mp4\" loop controls class=\"main-video\"></video>\r\n      <h3 class=\"main-vid-title\">house flood</h3>\r\n   </div>', ''),
(19, '', '      <div class=\"list\">\r\n         <video src=\"\" class=\"list-video\"></video>\r\n         <h3 class=\"list-title\">   dddddddd   </h3>\r\n      </div>\r\n\r\n      <div class=\"list\">\r\n         <video src=\"\" class=\"list-video\"></video>\r\n         <h3 class=\"list-title\">   ddddddddddd   </h3>\r\n      </div>\r\n\r\n      <div class=\"list\">\r\n         <video src=\"\" class=\"list-video\"></video>\r\n         <h3 class=\"list-title\">     dddddddddd </h3>\r\n      </div>\r\n\r\n      <div class=\"list\">\r\n         <video src=\"\" class=\"list-video\"></video>\r\n         <h3 class=\"list-title\">    ddddddddddd  </h3>\r\n      </div>\r\n\r\n      <div class=\"list\">\r\n         <video src=\"\" class=\"list-video\"></video>\r\n         <h3 class=\"list-title\">   ddddddddddddd   </h3>\r\n      </div>\r\n\r\n      <div class=\"list\">\r\n         <video src=\"\" cla', '   <div class=\"main-video-container\">\r\n      <video src=\"images/vid-1.mp4\" loop controls class=\"main-video\"></video>\r\n      <h3 class=\"main-vid-title\">house flood animation</h3>\r\n   </div>', ''),
(20, '', '      <div class=\"list\">\r\n         <video src=\"\" class=\"list-video\"></video>\r\n         <h3 class=\"list-title\">  fsdgsfdgdfsgsdfdsg    </h3>\r\n      </div>\r\n\r\n      <div class=\"list\">\r\n         <video src=\"\" class=\"list-video\"></video>\r\n         <h3 class=\"list-title\">    dfsgsdfgdsfgfdsg  </h3>\r\n      </div>\r\n\r\n      <div class=\"list\">\r\n         <video src=\"\" class=\"list-video\"></video>\r\n         <h3 class=\"list-title\">    fdgsdfgsdfgsdfgsdfg  </h3>\r\n      </div>\r\n\r\n      <div class=\"list\">\r\n         <video src=\"\" class=\"list-video\"></video>\r\n         <h3 class=\"list-title\">  sdfgdfsgfdggfsdgfsdgfg    </h3>\r\n      </div>\r\n\r\n      <div class=\"list\">\r\n         <video src=\"\" class=\"list-video\"></video>\r\n         <h3 class=\"list-title\">  dfgsdfggggggsdfgfdgs    </h3>\r\n      </div>\r\n\r\n      <div', '   <div class=\"main-video-container\">\r\n      <video src=\"images/vid-1.mp4\" loop controls class=\"main-video\"></video>\r\n      <h3 class=\"main-vid-title\">house flood</h3>\r\n   </div>', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user',
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`, `user_type`, `image`) VALUES
(34, 'admin', 'admin@admin.com', 'c4ea21f107612e88f8f74e3e7b04cecd', 'admin', ''),
(36, 'amritanshu', 'ffdarkrayon@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', ''),
(37, 'ram tujabh singh', 'amritanshu@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', 'channels4_profile.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 475746378, 129073377, 'hi'),
(2, 129073377, 475746378, 'hello'),
(3, 475746378, 1022276686, 'hi'),
(4, 1022276686, 1214674088, 'hi'),
(5, 475746378, 1214674088, 'hh'),
(6, 1214674088, 1022276686, 'hello ap kasi ho');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(800) NOT NULL,
  `thumbnail` varchar(300) NOT NULL,
  `video` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `navbar`
--

CREATE TABLE `navbar` (
  `id` int(11) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `title` varchar(800) NOT NULL,
  `href` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `navbar`
--

INSERT INTO `navbar` (`id`, `logo`, `title`, `href`) VALUES
(4, './assets/images/logo.png', 'Home', 'http://localhost/cineflix-master/'),
(5, '', 'Category', './pages/category/index.php'),
(9, '', 'Contact US', 'pages/contact-form/'),
(11, '', 'Watch2gether', 'php/watch2gether/index.php');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 475746378, 'amritanhsu', 'singh', 'ffdarkrayon@gmail.com', '202cb962ac59075b964b07152d234b70', '16594560301000_F_137478365_Hqd1xK6UdA0jyvpATtgwChSLsG9eVlRc.jpg', 'Active now'),
(2, 129073377, 'ff', 'ff', 'wd@dwda.fg', '202cb962ac59075b964b07152d234b70', '1659456181WhatsApp Image 2022-07-06 at 8.43.35 AM (1).jpeg', 'Active now'),
(3, 1214674088, 'amritansh', 'singh', 'ggg@gg.gg', 'a5d937da9ef7d34a1af91f642ea8f9af', '1659628731all-programming-languages-logo-text-number-symbol-alphabet-transparent-png-77085-removebg-preview.jpg', 'Active now'),
(4, 1022276686, 'gg', 'gg', 'ggg@gg.ggd', '93c857506ab93a5b16ddfee9aa63e369', '16596287641000_F_137478365_Hqd1xK6UdA0jyvpATtgwChSLsG9eVlRc.jpg', 'Active now');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(800) NOT NULL,
  `thumbnail` varchar(300) NOT NULL,
  `href` varchar(300) NOT NULL,
  `video` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `title`, `description`, `thumbnail`, `href`, `video`) VALUES
(17, 'Death Note', 'Mysterious', 'https://m.media-amazon.com/images/I/514bhU7bSML._AC_.jpg', '', '2014'),
(18, 'Dragon ball z', 'Action', 'http://xenews.net/wp-content/uploads/2022/05/DragonBallZMovie13WrathoftheDragon.jpg', '', ' 1998'),
(19, 'Beyblade', 'Action', 'https://static.wixstatic.com/media/8e3e19_ae881835973f4e87bafcea529a2cf57c~mv2.jpg', '', '1996'),
(20, 'One punch Man', 'superpower', 'https://s2.gaming-cdn.com/images/products/5809/orig-fallback-v1/one-punch-man-a-hero-nobody-knows-pc-game-steam-europe-cover.jpg?v=1651505362', '', '2008'),
(21, 'Hunter x Hunter', 'superpower', 'https://i.pinimg.com/736x/5f/db/07/5fdb0749d54ff3ac8f6988d28ee4674a.jpg', '', '2015'),
(22, 'Black Clover', 'demon', 'https://i.pinimg.com/736x/15/37/a7/1537a76c07952bbe69da01b8086a5f00.jpg', '', '2012'),
(23, 'Mob Pyscho 100', 'Adventure', 'https://pbs.twimg.com/media/EVBX8qFUYAAGaUx.jpg', '', '2003'),
(25, 'Blue Exorcist (Ao No Exorcist)', 'superpower', 'https://i.pinimg.com/originals/8d/f0/c8/8df0c83606756568704b5880957c47fb.jpg', '', '2014'),
(26, 'First Immortal of Kendo', 'Adventure', 'https://static.bunnycdn.ru/i/cache/images/6/61/618ef3aaf1be47f9f08eba2b6830621f.jpg', '', '2000'),
(27, 'Naruto Shippuden', 'Action/Sci-fi', 'https://i.pinimg.com/originals/a8/55/eb/a855eb13a85070f7b63ad618310a0110.jpg', '', '2009'),
(28, 'Boruto: Naruto Next Generation', 'Action/Adventure', 'https://cdn.myanimelist.net/images/anime/9/84460l.jpg', '', '2013'),
(29, 'Tokyo Ghoul', 'action', 'https://wallpaperaccess.com/full/41757.jpg', '', '2003'),
(38, 'ben 10', 'action', 'https://m.media-amazon.com/images/M/MV5BNzgxYjcwNDUtZTcxZS00NmIyLWI3OTAtNTQ3NzZjM2RkMTFkXkEyXkFqcGdeQXVyNjk1Njg5NTA@._V1_.jpg', '1', '2005'),
(42, 'ONE PIECE', 'Super power/Drama', 'https://static.bunnycdn.ru/i/cache/images/4/42/422670a855efae8d8d8fafb59d43c197.jpg', '#', '1999'),
(43, 'Boruto: Naruto Next Generations', 'superpower/fantasy', 'https://static.bunnycdn.ru/i/cache/images/2018/04/ede641090c1bcfaa10be65f73c805e9c.jpg', '#', '?'),
(44, 'LINK CLICK', 'supernature/thriller', 'https://static.bunnycdn.ru/i/cache/images/6/6f/6f42af41f763e9077676b8728a133ec3.jpg', '#', '2021'),
(45, 'RWBY: Ice Queendom', 'magic', 'https://static.bunnycdn.ru/i/cache/images/6/6b/6beffa2e1fe2edb27ac355a5ea7506aa.jpg', '#', '2022'),
(46, 'Perfect World', 'fantasy/adventure', 'https://static.bunnycdn.ru/i/cache/images/d/d9/d9130b3b67403c24b4d8267be3d93d92.jpg', '#', '2021'),
(47, 'The Daily Life of the Immortal King', 'magic/school', 'https://static.bunnycdn.ru/i/cache/images/2020/01/b8cb0b9292a0ba70f094c0ba8cd98fb5.jpg', '#', '2020'),
(48, 'Shin Ikki Tousen', 'ecchi/action', 'https://static.bunnycdn.ru/i/cache/images/b/bc/bc7f1d3e88c75c9f888cdcd6cc620031.jpg', '#', '2022'),
(49, 'SPY x FAMILY', 'slice of life/mystery', 'https://static.bunnycdn.ru/i/cache/images/2/26/265001e290241a596689b2196a9fe1f2.jpg', '#', '2022'),
(50, 'Date A Live IV', 'romance/school', 'https://static.bunnycdn.ru/i/cache/images/2020/03/c9f017e63c0a4069957a46a7a4b14d12.jpg', '#', '2022'),
(51, 'Overlord IV', 'demon/magic', 'https://static.bunnycdn.ru/i/cache/images/4/47/476087d752ef1632bdab0fbc903e490a.jpg', '#', '2022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amv`
--
ALTER TABLE `amv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactdata`
--
ALTER TABLE `contactdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `episode_video_insert`
--
ALTER TABLE `episode_video_insert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ep_video_insert`
--
ALTER TABLE `ep_video_insert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `amv`
--
ALTER TABLE `amv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contactdata`
--
ALTER TABLE `contactdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `episode_video_insert`
--
ALTER TABLE `episode_video_insert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ep_video_insert`
--
ALTER TABLE `ep_video_insert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `navbar`
--
ALTER TABLE `navbar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
