CREATE TABLE IF NOT EXISTS `reserveringen` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
  	`locatie` varchar(50) NOT NULL,
  	`aantal` varchar(255) NOT NULL,
  	`tijd` varchar(100) NOT NULL,
    `datum` varchar(100) NOT NULL,
    `naam` varchar(100) NOT NULL,
    `tel` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `bericht` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=UTF8;