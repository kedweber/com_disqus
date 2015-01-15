CREATE TABLE IF NOT EXISTS `#__disqus_configs` (
  `disqus_config_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `shortname` varchar(255) DEFAULT NULL,
  `multilingual` tinyint(1) NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `locked_on` datetime NOT NULL,
  `locked_by` int(11) NOT NULL,
  PRIMARY KEY (`disqus_config_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Preset value to prevent 404 errors. 
INSERT INTO `jos_disqus_configs` (`disqus_config_id`) VALUES ('1');
