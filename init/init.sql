CREATE DATABASE IF NOT EXISTS `library`;
GRANT ALL ON library.* TO 'test_user'@'%';

use library;

CREATE TABLE `books` (
  `book_id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `book_name` varchar(100) NOT NULL,
  `book_genre` varchar(100) NOT NULL,
  `book_author` varchar(100) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
