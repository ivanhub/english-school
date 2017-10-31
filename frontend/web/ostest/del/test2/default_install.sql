SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `quiz_game_default_install`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `username` mediumtext NOT NULL,
  `password_hash` mediumtext NOT NULL,
  `real_name` mediumtext NOT NULL,
  `email` mediumtext NOT NULL,
  FULLTEXT KEY `username` (`username`),
  FULLTEXT KEY `real_name` (`real_name`),
  FULLTEXT KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password_hash`, `real_name`, `email`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'The Admin', 'fake@fake.com');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `number` bigint(20) NOT NULL,
  `quiz` bigint(20) NOT NULL,
  `question_order_number` bigint(20) NOT NULL,
  `order_number` bigint(20) NOT NULL,
  `answer` longtext NOT NULL,
  KEY `number` (`number`),
  KEY `quiz` (`quiz`),
  KEY `question_order_number` (`question_order_number`),
  KEY `order_number` (`order_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--


-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `number` bigint(20) NOT NULL,
  `quiz` bigint(20) NOT NULL,
  `order_number` bigint(20) NOT NULL,
  `picture_name` longtext NOT NULL,
  `question` longtext NOT NULL,
  `answers` bigint(20) NOT NULL,
  KEY `number` (`number`),
  KEY `quiz` (`quiz`),
  KEY `order_number` (`order_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--


-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE IF NOT EXISTS `quizzes` (
  `number` bigint(20) NOT NULL,
  `name` longtext NOT NULL,
  `questions` bigint(20) NOT NULL,
  PRIMARY KEY  (`number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quizzes`
--


-- --------------------------------------------------------

--
-- Table structure for table `real_answer`
--

CREATE TABLE IF NOT EXISTS `real_answer` (
  `number` bigint(20) NOT NULL,
  `quiz` bigint(20) NOT NULL,
  `question_order_number` bigint(20) NOT NULL,
  `corect_order_number` bigint(20) NOT NULL,
  KEY `number` (`number`),
  KEY `quiz` (`quiz`),
  KEY `question_order_number` (`question_order_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `real_answer`
--


-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `name` text NOT NULL,
  `ip` text NOT NULL,
  `correct` int(11) NOT NULL,
  `incorrect` int(11) NOT NULL,
  `percentage` double NOT NULL,
  `quiz` bigint(20) NOT NULL,
  `username` mediumtext NOT NULL,
  KEY `percentage` (`percentage`),
  KEY `quiz` (`quiz`),
  FULLTEXT KEY `ip` (`ip`),
  FULLTEXT KEY `name` (`name`),
  FULLTEXT KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--


-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `session_id` mediumtext NOT NULL,
  `ip` mediumtext NOT NULL,
  `username` mediumtext NOT NULL,
  `password_md5` mediumtext NOT NULL,
  `time_started` bigint(20) NOT NULL,
  KEY `time_started` (`time_started`),
  FULLTEXT KEY `username` (`username`),
  FULLTEXT KEY `ip` (`ip`),
  FULLTEXT KEY `session_id` (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`session_id`, `ip`, `username`, `password_md5`, `time_started`) VALUES
('155694587', '127.0.0.1', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1239479450);

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE IF NOT EXISTS `stats` (
  `version` int(11) NOT NULL,
  `num_quizzes` bigint(20) NOT NULL,
  `num_questions` bigint(20) NOT NULL,
  `num_answers` bigint(20) NOT NULL,
  PRIMARY KEY  (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`version`, `num_quizzes`, `num_questions`, `num_answers`) VALUES
(1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` mediumtext NOT NULL,
  `password_hash` mediumtext NOT NULL,
  `real_name` mediumtext NOT NULL,
  `email` mediumtext NOT NULL,
  FULLTEXT KEY `username` (`username`),
  FULLTEXT KEY `real_name` (`real_name`),
  FULLTEXT KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

