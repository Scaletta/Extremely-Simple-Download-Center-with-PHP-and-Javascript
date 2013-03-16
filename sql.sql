CREATE DATABASE downloads;

CREATE TABLE files (
	file varchar(200) NOT NULL UNIQUE,
  	downloads int(11) NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;