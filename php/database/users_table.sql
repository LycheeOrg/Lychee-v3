# Dump of table lychee_users
# ------------------------------------------------------------

CREATE TABLE `lychee_users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(200) NOT NULL,
 `password` varchar(255) NOT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;