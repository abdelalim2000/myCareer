-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: mysql5040.site4now.net
-- Generation Time: Dec 26, 2020 at 03:29 AM
-- Server version: 5.6.46-log
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_a6bc09_moyaser`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `body` longtext NOT NULL,
  `author` varchar(150) NOT NULL,
  `status` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `name`, `body`, `author`, `status`, `category_id`, `created_at`) VALUES
(11, 'Doctors', '<p><img alt=\"\" src=\"https://images.unsplash.com/photo-1579684453423-f84349ef60b0?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=768&amp;q=80\" style=\"height:651px; width:1000px\" /></p>\r\n\r\n<blockquote>\r\n<h1><strong>Rural hospitals are under siege from&nbsp;COVID-19&nbsp;&ndash; here&rsquo;s what doctors are facing, in their own&nbsp;words</strong></h1>\r\n</blockquote>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:Verdana,Geneva,sans-serif\">It&rsquo;s difficult to put into words how hard COVID-19 is hitting rural America&rsquo;s hospitals. North Dakota has so many cases, it&rsquo;s allowing asymptomatic&nbsp;<a href=\"https://www.businessinsider.com/north-dakota-nurses-keep-working-covid-19-2020-11\">COVID-19-positive nurses to continue caring</a>&nbsp;for patients to keep the hospitals staffed.&nbsp;<a href=\"https://www.theatlantic.com/health/archive/2020/11/third-surge-breaking-healthcare-workers/617091/\">Iowa</a>&nbsp;and&nbsp;<a href=\"https://www.npr.org/sections/health-shots/2020/11/10/933253317/covid-19-hospitalizations-are-surging-where-are-hospitals-reaching-capacity\">South Dakota</a>&nbsp;have teetered on the edge of running out of hospital capacity.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:Verdana,Geneva,sans-serif\">Yet in many communities, the initial cooperation and goodwill seen early in the pandemic have given way to&nbsp;<a href=\"https://theconversation.com/in-rural-america-resentment-over-covid-19-shutdowns-is-colliding-with-rising-case-numbers-148310\">COVID-19 fatigue and anger</a>, making it hard to implement and enforce public health measures,&nbsp;<a href=\"https://www.kxnet.com/news/north-dakotans-react-to-mask-mandate-new-measures/\">like wearing face masks</a>, that can reduce the disease&rsquo;s spread.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:Verdana,Geneva,sans-serif\">Rural health care systems entered the pandemic in already&nbsp;<a href=\"https://www.ivantageindex.com/wp-content/uploads/2020/02/CCRH_Vulnerability-Research_FiNAL-02.14.20.pdf\">precarious financial positions</a>. Over the years, shifting demographics, declining revenue and increasing operating expenses have&nbsp;<a href=\"https://www.shepscenter.unc.edu/programs-projects/rural-health/rural-hospital-closures-archive/rural-hospital-closures/\">made it harder for rural hospitals to stay </a><a href=\"https://www.shepscenter.unc.edu/programs-projects/rural-health/rural-hospital-closures-archive/rural-hospital-closures/\">in business</a>. The pandemic has made it even more difficult. In mid-March, most rural hospitals&nbsp;<a href=\"https://www.healthaffairs.org/do/10.1377/hblog20200429.583513/full/\">halted elective procedures</a>&nbsp;to slow the spread of the virus, cutting their revenue further, and many have&nbsp;<a href=\"https://www.khou.com/article/news/health/coronavirus/rural-hospitals-desperate-for-coronavirus-medical-supplies/285-a8438a49-c178-43b0-95f5-1f3c4583be85\">faced price gouging</a>&nbsp;for supplies given extreme shortages.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:Verdana,Geneva,sans-serif\">I work with rural doctors and hospital administrators across the country as a researcher, and I see the stress they&rsquo;re under from the pandemic. Here is what two of them &ndash; Konnie Martin, chief executive officer at San Luis Valley Health in Alamosa, Colorado, and Dr. Jennifer Bacani McKenney, who practices family medicine in Fredonia, Kansas &ndash; are facing. Their experiences reflect what others are going through and how&nbsp;<a href=\"https://www.aha.org/news/blog/2020-08-07-blog-rural-hospitals-innovate-during-covid-19\">rural communities are innovating</a>&nbsp;under extraordinary pressure.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:Verdana,Geneva,sans-serif\">I&rsquo;ll let them explain in their own words.</span></span></p>\r\n\r\n<h2><strong>Konnie Martin, Alamosa, Colorado</strong></h2>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:Verdana,Geneva,sans-serif\">COVID-19 fatigue is real. It&rsquo;s wearing on people. Everyone wishes we were past this. I read the other day about health care workers being the &ldquo;keeper of fears.&rdquo; During COVID-19, patients have disproportionately placed their fears on clinicians, many of whom experience the same fears themselves. I focus on building resilience, but it&rsquo;s hard.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:Verdana,Geneva,sans-serif\">My hospital currently has seven patients with COVID-19 and can make room for as many as 12. Back in the spring, we converted a visiting specialist center into a&nbsp;<a href=\"https://www.sanluisvalleyhealth.org/news/2020/march/slv-health-opens-respiratory-clinic-during-covid/\">temporary respiratory clinic</a>&nbsp;to keep potentially infectious patients separate and reduce pressure on our emergency department.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:Verdana,Geneva,sans-serif\">It&rsquo;s all about making sure we have enough staff and hospital capacity.</span></span></p>\r\n', 'Fatma Magdy', 'published', 15, '0000-00-00 00:00:00'),
(13, 'Web Development', '<p><img alt=\"\" src=\"https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80\" style=\"height:500px; width:750px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<h1><span style=\"color:#9b59b6\"><span style=\"font-size:26px\"><strong>The Trials and Tribulations of Hiring a Website Developer</strong></span></span></h1>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><tt><span style=\"font-size:14px\"><span style=\"font-family:Verdana,Geneva,sans-serif\"><samp>I originally posted this article back in 2016 and I pulled it to dust it off today because I am currently working with two SEO clients who have hot messes of websites. These companies have tried multiple website developers and SEO agencies, only to be left with hacked up websites with no website traffic, conversions, or ROI.</samp></span></span></tt></p>\r\n\r\n<p style=\"text-align:center\"><tt><span style=\"font-size:14px\"><span style=\"font-family:Verdana,Geneva,sans-serif\"><samp>It&rsquo;s buyer beware and sometimes I feel like digital marketing is the wild west of technology. Your website is an important part of your business. If 2020 taught us anything, it&rsquo;s that digital marketing is necessary. The world has gone online and we won&rsquo;t go back to a reliance on traditional sales techniques.</samp></span></span></tt></p>\r\n\r\n<p style=\"text-align:center\"><tt><span style=\"font-size:14px\"><span style=\"font-family:Verdana,Geneva,sans-serif\"><samp>Don&rsquo;t fall for empty promises or spam emails. Do your homework and don&rsquo;t settle for anyone you can&rsquo;t trust.</samp></span></span></tt></p>\r\n\r\n<p style=\"text-align:center\"><tt><span style=\"font-size:14px\"><span style=\"font-family:Verdana,Geneva,sans-serif\"><samp>Now on to the original story&hellip;</samp></span></span></tt></p>\r\n\r\n<p style=\"text-align:center\"><tt><span style=\"font-size:14px\"><span style=\"font-family:Verdana,Geneva,sans-serif\"><samp>Friday I had to laugh. A sad laugh that is brought on by the strong desire not to cry.</samp></span></span></tt></p>\r\n\r\n<p style=\"text-align:center\"><tt><span style=\"font-size:14px\"><span style=\"font-family:Verdana,Geneva,sans-serif\"><samp>Within 48 hours I had received three different pieces of communication from people talking negatively about their website developers. This is beyond frustrating since this is my profession and we&rsquo;ve been working with WordPress development for over a decade.</samp></span></span></tt></p>\r\n\r\n<p style=\"text-align:center\"><tt><span style=\"font-size:14px\"><span style=\"font-family:Verdana,Geneva,sans-serif\"><samp>Does a website design and development project really need to be filled with trials, tribulations, and ongoing angst? Can the process ever go smoothly and within the expectations set prior to money changing hands?</samp></span></span></tt></p>\r\n\r\n<p style=\"text-align:center\"><tt><span style=\"font-size:14px\"><span style=\"font-family:Verdana,Geneva,sans-serif\"><samp>Yes, it can, but these successes are never the stories we hear about.</samp></span></span></tt></p>\r\n\r\n<p style=\"text-align:center\"><tt><span style=\"font-size:14px\"><span style=\"font-family:Verdana,Geneva,sans-serif\"><samp>My communication this week made me think of the phrase &ldquo;trials and tribulations&rdquo; and it took my back to Sunday school and listening to Bible verses from Corinthians or Romans. So much disappointment and struggles fill these projects. Money is wasted, time lost, and sales disappear into thin air.</samp></span></span></tt></p>\r\n\r\n<p style=\"text-align:center\"><tt><span style=\"font-size:14px\"><span style=\"font-family:Verdana,Geneva,sans-serif\"><samp>Think I&rsquo;m being overly dramatic? Let me share some real-world comments received within the last two days.</samp></span></span></tt></p>\r\n', 'Mohamed A.Abd-Elaleem', 'published', 14, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Stand-in structure for view `articlesview`
-- (See below for the actual view)
--
CREATE TABLE `articlesview` (
`a_name` varchar(150)
,`a_body` longtext
,`a_author` varchar(150)
,`a_status` varchar(50)
,`c_name` varchar(150)
,`a_createdAt` datetime
,`a_id` int(11)
,`c_id` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`) VALUES
(14, 'Programming', '2020-12-22 11:42:59'),
(15, 'Medicines', '2020-12-24 09:24:40'),
(17, 'IOT', '2020-12-24 09:24:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `birthdate`, `gender`, `phone`, `address`, `city`, `username`, `email`, `password`, `type`, `created_at`) VALUES
(14, 'Mohamed', 'A.Abd-Elaleem', '1997-07-17', 'female', '+201022821642', '75st,AinShams,CairoEG', 'Cairo', 'Abdelaleem2000', 'mohamed.abdelaleem1995@gmail.com', '$2y$12$mtLng5N.gUFoNzMh.qWYDuWI3pLSCL7eYPrkuGXqlmqgpfpfdyGKK', 'admin', '2020-12-22 11:41:23'),
(16, 'NTI', 'Admin', '2020-12-25', 'male', '+20101010101010', 'Smart Village, 6OctoberEG', 'Cairo', 'nti2021', 'nti2021.admin@mail.com', '$2y$12$J50VFLj4FdVN3BaEbBaH9Oo0sFM2/r9YH2Md.L9d/MTXv7BPCk5nG', 'admin', '2020-12-26 11:14:41');

-- --------------------------------------------------------

--
-- Structure for view `articlesview`
--
DROP TABLE IF EXISTS `articlesview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`a6bc09_moyaser`@`%` SQL SECURITY DEFINER VIEW `articlesview`  AS  select `articles`.`name` AS `a_name`,`articles`.`body` AS `a_body`,`articles`.`author` AS `a_author`,`articles`.`status` AS `a_status`,`categories`.`name` AS `c_name`,`articles`.`created_at` AS `a_createdAt`,`articles`.`id` AS `a_id`,`categories`.`id` AS `c_id` from (`articles` join `categories` on(((`articles`.`category_id` = `categories`.`id`) and (`articles`.`category_id` = `categories`.`id`)))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `category_id_2` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
