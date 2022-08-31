-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2022 at 01:41 PM
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
(12, 'nuri ', 'kumari', '6209386525', 'amritanshu@gmail.com', 'improve this website', ''),
(14, 'adsf', 'sdaf', '6209386525', 'dsfasd', 'fasdf', NULL),
(15, 'asdf', 'sadf', '44465456456', 'ffdarkrayon@gmail.com', 'asdfas', NULL);

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
(36, 'amritanshu', 'ffdarkrayon@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', 'WhatsApp Image 2022-07-06 at 8.43.35 AM (1).jpeg'),
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

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `description`, `thumbnail`, `video`) VALUES
(13, 'asdf', 'asdf', 'https://img1.ak.crunchyroll.com/i/spire3/29073b766bd972c4519028ea4f0ef6721634604609_full.jpg', '2022');

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
(4, './assets/images/logo.png', 'Home', 'http://localhost/cinflix-master/'),
(5, '', 'Category', 'http://localhost/cinflix-master/pages/category/index.php'),
(9, '', 'Contact US', 'http://localhost/cinflix-master/pages/contact-form/'),
(11, '', 'Watch2gether', 'http://localhost/cinflix-master/php/watch2gether/index.php');

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
  `name` varchar(200) NOT NULL,
  `description` varchar(800) NOT NULL,
  `thumbnail` varchar(300) NOT NULL,
  `genre` varchar(300) NOT NULL,
  `Status` varchar(300) NOT NULL,
  `Date_aired` varchar(300) NOT NULL,
  `Studios` varchar(300) NOT NULL,
  `Type` varchar(300) NOT NULL,
  `Premiered` varchar(300) NOT NULL,
  `Duration` varchar(300) NOT NULL,
  `Quality` varchar(300) NOT NULL,
  `Views` varchar(300) NOT NULL,
  `Scores` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `name`, `description`, `thumbnail`, `genre`, `Status`, `Date_aired`, `Studios`, `Type`, `Premiered`, `Duration`, `Quality`, `Views`, `Scores`) VALUES
(2, 'My Isekai Life: I Gained a Second Character Class and Became the Strongest Sage in the World!', 'After working himself to death in a hostile corporate environment, Yuuji Sano gets a second chance when he transmigrates to a game-like fantasy world. Although he wishes to lead an unassuming life, Yuuji learns that he has the title of a Monster Tamer, the weakest rank of adventurer. With his newfound skills, he tames a number of slimes around him and, with their help, acquires magical powers to become a Sage—a second profession that capitalizes on such potential.Even after gaining overwhelming strength, the scars from the life Yuuji left behind keep him from going all out. However, he might not be able to hide his abilities for much longer, as unforeseen dangers threaten to destroy the world that is now his only home.', 'https://static.bunnycdn.ru/i/cache/images/2/24/244557cb1177ca7a72bf91f352f99e5e.jpg', 'Action, Adventure, Comedy, Fantasy, Isekai, Magic', 'Releasing', 'Jul 04, 2022 to 2022', 'REVOROOT', 'TV', 'Summer 2022', '24 min', 'HD', '1,547,165', '6.45 by 13,021 reviews'),
(4, 'Classroom of the Elite', 'On the surface, Koudo Ikusei Senior High School is a utopia. The students enjoy an unparalleled amount of freedom, and it is ranked highly in Japan. However, the reality is less than ideal. Four classes, A through D, are ranked in order of merit, and only the top classes receive favorable treatment.Kiyotaka Ayanokouji is a student of Class D, where the school dumps its worst. There he meets the unsociable Suzune Horikita, who believes she was placed in Class D by mistake and desires to climb all the way to Class A, and the seemingly amicable class idol Kikyou Kushida, whose aim is to make as many friends as possible.While class membership is permanent, class rankings are not; students in lower ranked classes can rise in rankings if they score better than those in the top ones. Additionally', 'https://static.bunnycdn.ru/i/cache/images/2018/10/12b2d64f38aabaeeeae4e4882fa75b3f.jpg', 'Drama, Psychological, School', 'Completed', 'Jul 12, 2017 to Sep 27, 2017', 'Lerche', 'TV', 'Summer 2017', '24 min', 'HD', '4,655,589', '7.86 by 613,688 reviews'),
(6, 'Overlord II', 'Ainz rly knownnfga, ha accepted his place in this new world. Though it bears similarities to his beloved virtual reality game Yggdrasil, it still holds many mysteries which he intends to uncover, by utilizing his power as ruler of the Great Tomb of Nazarick. However, ever since the disastrous brainwashing of one of his subordinates, Ainz has become wary of the impending dangers of the Slane Theocracy, as well as the possible existence of other former Yggdrasil players. Meanwhile, Albedo, Demiurge and the rest of Ainz\'s loyal guardians set out to prepare for the next step in their campaign: Nazarick\'s first war…Overlord II picks up immediately after its prequel, continuing the story of Ainz Ooal Gown, his eclectic army of human-hating guardians, and the many hapless humans affected by theff', 'https://static.bunnycdn.ru/i/cache/images/2018/04/55e948a1c8291c9c23dbabb3abc82306.jpg', 'Action, Adventure, Fantasy, Super Power, Supernatural, Vampire, Isekai, Demons, Magic', 'Completed', 'Jan 09, 2018 to Apr 03, 2018', 'Madhouse', 'TV', 'Unknown 2018', '23 min', 'HD', '5,413,804', '7.76 by 547,406 reviews'),
(7, 'Black Summoner', 'Waking up in a strange new place with no memory of his past life, Kelvin learns that he\'s bartered away those very memories in exchange for powerful new abilities during his recent transmigration. Heading out into a whole new world as a Summoner—with his first Follower being the very goddess who brought him over!—Kelvin begins his new life as an adventurer, and it isn\'t long before he discovers his hidden disposition as a battle junkie.', 'https://static.bunnycdn.ru/i/cache/images/0/04/043424ef9383e8a6b7729b367ae61525.jpg', 'Action, Adventure, Fantasy, Isekai, Magic', 'Releasing', 'Jul 09, 2022 to ?', 'Satelight', 'TV', ' Summer 2022', '23 min', 'HD', '1,152,695', '7.13 by 8,871 reviews'),
(8, 'Parallel World Pharmacy', 'After losing his little sister to an incurable disease, world-famous medical researcher Kanji Yakutani gave it his all to cure patients by dedicating his life to inventing new medicines. After working himself to death at the age of 31, the former pharmacist wakes up as a 10-year-old child whose body has been struck by lightning.', 'https://static.bunnycdn.ru/i/cache/images/8/85/8550fa9649406cbd2fa05826438e1747.jpg', 'Fantasy, Isekai, Magic', 'Releasing', 'Jul 10, 2022 to 2022', 'Diomedea, Diomedéa', 'TV', 'Summer 2022', '23 min', 'HD', '663,022', '7.69 by 8,995 reviews'),
(9, 'Life With an Ordinary Guy Who Reincarnated Into a Total Fantasy Knockout', 'Since their days as students, Tsukasa Jinguuji has had incredible luck with women due to his good looks; Hinata Tachibana has had almost none, overshadowed by Jinguuji\'s brilliance. However, while Jinguuji has never shown interest in the opposite sex, Tachibana is always desperate for a girlfriend. Despite their polar differences, they continue to be best friends even in their thirties as salarymen.', 'https://static.bunnycdn.ru/i/cache/images/f/f9/f9123503ef0c9a084e1aae51d2f72fbb.jpg', 'Adventure, Comedy, Fantasy, Parody, Romance, Shounen, Isekai, Magic', 'Completed', 'Jan 12, 2022 to Mar 30, 2022', 'OLM Team Yoshioka', 'TV', 'Winter 2022', '23 min', 'HD', '1,754,350', '7.2 by 54,120 reviews'),
(10, 'The Devil is a Part-Timer! Season 2', 'Second season of Hataraku Maou-sama!', 'https://static.bunnycdn.ru/i/cache/images/c/cb/cb96f629f1f416fdbd2b88cd86ec6545.jpg', 'Comedy, Fantasy, Romance, Slice of Life, Supernatural, Isekai, Demons, Magic', 'Releasing', 'Jul 14, 2022 to 2022', 'Studio 3Hz', 'TV', 'Summer 2022', '23 min', 'HD', '697,630', '7.56 by 17,929 reviews'),
(11, 'The Great Jahy Will Not Be Defeated!', 'The great Jahy will not be defeated! Simultaneously combating starvation, the lack of A/C, and the unavoidable weakness of turning child-sized, Jahy—previously the second strongest being in the Dark Realm—is under great stress. If it weren\'t for the destruction of the mana crystal which used to power the Dark Realm, Jahy would still be living a life of power and luxury.And yet, at the moment, brawling with the landlady over rent is a recurring event for Jahy. Just to have a place to stay and food to eat, Jahy must work part-time. However, her immense pride will not allow her to live under such poor conditions for any longer than necessary. Vowing to reinstate the Dark Realm to its former glory, Jahy continues her journey to reassemble the mana crystal.', 'https://static.bunnycdn.ru/i/cache/images/7/70/7026588aa710e34b88cc41032ffb828f.jpg', 'Comedy, Fantasy, Shounen, Slice of Life, Supernatural, Isekai, Demons, Magic', 'Completed', 'Aug 01, 2021 to Dec 19, 2021', 'Silver Link.', 'TV', 'Summer 2021', '23 min', 'HD', '1,974,377', '7.08 by 66,588 reviews'),
(12, 'Dropkick on My Devil!!! X', 'Third season of Jashin-chan Dropkick', 'https://static.bunnycdn.ru/i/cache/images/6/65/653c96736c9fcbcf8f9eb75818ff21ef.jpg', 'Comedy, Parody, Seinen, Slice of Life, Supernatural, Isekai', 'Releasing', 'Jul 05, 2022 to 2022', 'Nomad', 'TV', 'Summer 2022', '24 min', 'HD', '121,186', '7.7 by 1,923 reviews'),
(13, 'Mushoku Tensei: Jobless Reincarnation', 'spite being bullied, scorned, and oppressed all of his life, a 34-year-old shut-in still found the resolve to attempt something heroic—only for it to end in a tragic accident. But in a twist of fate, he awakens in another world as Rudeus Greyrat, starting life again as a baby born to two loving parents.Preserving his memories and knowledge from his previous life, Rudeus quickly adapts to his new environment', 'https://static.bunnycdn.ru/i/cache/images/2/25/25434cc8ef2d3ebe7a1bd4afa5013d05.jpg', 'Adventure, Drama, Ecchi, Fantasy, Isekai, Demons, Magic', 'Completed', 'Jan 11, 2021 to Mar 22, 2021', 'Studio Bind', 'TV', 'Summer 2021', '23 min', 'HD', '15,049,459', '8.37 by 597,580 reviews'),
(14, 'The Executioner and Her Way of Life', 'Average student Mutou Mitsuki suddenly finds himself transported to another realm. Summoned by the king of this world for the remarkable power he is supposed to possess, Mutou is thrown out when it appears that he lacks a \"Special Concept.\" Moping about, he encounters a priestess named Menou who explains that Japanese people like him are known as Lost ', 'https://static.bunnycdn.ru/i/cache/images/6/6f/6fb90e938d673262052bd1b586394215.jpg', 'Action, Adventure, Drama, Fantasy, Isekai, Magic', 'Completed', 'Apr 02, 2022 to Jun 18, 2022', 'J.C.Staff', 'TV', 'Summer 2022', '24 min', 'HD', '1,336,169', '6.86 by 35,519 reviews'),
(15, 'The Rising of the Shield Hero Season 2', 'With another Wave happening in a week, Naofumi Iwatani and his party have no time to waste. However, when bat familiars raid Lurolona Village and the Wave countdown comes to a halt, the Four Cardinal Heroes reconvene with the queen, Mirelia Q Melromarc, for a quick briefing.', 'https://static.bunnycdn.ru/i/cache/images/c/c0/c04aa69be340a5d47a733904e4c1330d.jpg', 'Action, Adventure, Drama, Fantasy, Isekai, Magic', 'Completed', 'Apr 06, 2022 to Jun 29, 2022', 'DR Movie', 'TV', 'Spring 2022', '23 min', 'HD', '5,067,302', '6.55 by 139,748 reviews');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
