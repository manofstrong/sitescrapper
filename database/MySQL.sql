-- SiteScrapper (https://github.com/manofstrong/sitescrapper)
-- Licensed under the MIT License (https://opensource.org/licenses/MIT)

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Table structure for table `site_scrapper`
--


CREATE TABLE IF NOT EXISTS `site_scrapper` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(225) NOT NULL,
  `keywords` text NOT NULL,
  `title` varchar(225) NOT NULL,
  `content` longtext NOT NULL,
  `wordcount` int(11) NOT NULL,
  `url` varchar(225) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `title` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
