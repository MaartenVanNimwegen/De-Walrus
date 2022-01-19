CREATE TABLE IF NOT EXISTS `contact` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
  	`naam` varchar(50) NOT NULL,
  	`email` varchar(255) NOT NULL,
  	`telefoon` varchar(100) NOT NULL,
  	`bericht` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=UTF8;