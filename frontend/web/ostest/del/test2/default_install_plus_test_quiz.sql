SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `quiz_game`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--
-- Creation: Jan 20, 2009 at 01:51 PM
-- Last update: Jan 20, 2009 at 01:58 PM
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
-- Creation: Jan 20, 2009 at 01:51 PM
-- Last update: Jan 20, 2009 at 01:51 PM
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

INSERT INTO `answers` (`number`, `quiz`, `question_order_number`, `order_number`, `answer`) VALUES
(1, 1, 1, 1, 'true'),
(2, 1, 1, 1, 'false'),
(3, 1, 2, 2, 'false'),
(4, 1, 2, 2, 'true'),
(5, 1, 3, 3, 'true'),
(6, 1, 3, 3, 'false'),
(7, 1, 4, 4, 'false'),
(8, 1, 4, 4, 'true'),
(9, 1, 5, 5, 'true'),
(10, 1, 5, 5, 'false');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--
-- Creation: Jan 20, 2009 at 01:51 PM
-- Last update: Jan 20, 2009 at 01:51 PM
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

INSERT INTO `questions` (`number`, `quiz`, `order_number`, `picture_name`, `question`, `answers`) VALUES
(1, 1, 1, 'test.jpg', 'test 1', 2),
(2, 1, 2, 'test.jpg', 'test 2', 2),
(3, 1, 3, 'test.jpg', 'test 3', 2),
(4, 1, 4, 'test.jpg', 'test 4', 2),
(5, 1, 5, 'test.jpg', 'test 5', 2);

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--
-- Creation: Jan 20, 2009 at 01:51 PM
-- Last update: Jan 20, 2009 at 01:51 PM
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

INSERT INTO `quizzes` (`number`, `name`, `questions`) VALUES
(1, 'Test Quiz 1', 5);

-- --------------------------------------------------------

--
-- Table structure for table `real_answer`
--
-- Creation: Jan 20, 2009 at 01:51 PM
-- Last update: Jan 20, 2009 at 01:51 PM
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

INSERT INTO `real_answer` (`number`, `quiz`, `question_order_number`, `corect_order_number`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 2),
(3, 1, 3, 1),
(4, 1, 4, 2),
(5, 1, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--
-- Creation: Jan 20, 2009 at 01:51 PM
-- Last update: Jan 20, 2009 at 01:51 PM
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

INSERT INTO `results` (`name`, `ip`, `correct`, `incorrect`, `percentage`, `quiz`, `username`) VALUES
('Glenn', '127.0.0.1', 3, 2, 60, 1, ''),
('Glenn', '127.0.0.1', 3, 2, 60, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--
-- Creation: Jan 20, 2009 at 01:51 PM
-- Last update: Jan 20, 2009 at 01:51 PM
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


-- --------------------------------------------------------

--
-- Table structure for table `stats`
--
-- Creation: Jan 20, 2009 at 01:51 PM
-- Last update: Jan 20, 2009 at 01:51 PM
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
(1, 1, 5, 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Creation: Jan 20, 2009 at 01:51 PM
-- Last update: Jan 20, 2009 at 01:51 PM
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

