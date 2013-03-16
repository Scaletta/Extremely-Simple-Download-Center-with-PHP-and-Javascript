Extremely-Simple-Download-Center-with-PHP-and-Javascript
=========================================================

#About#
Download Center is very helpful when you want to keep of how many times a file has been downloaded.

You can also let the user wait some seconds and display an ad, to make both money and restrict your monthly bandwidth usage.

Plus it's just cool to have an own download centre, right?!

#FEATURES#
- keep track of how many times a file has been downloaded
- let your users download a file on a page with advertisements
- dynamically add new files fully automated to the database
- extremely lightweight and fast

#SETUP#
To set up this simple download centre, follow these instructions to make it work:

1. Create a directory where you store all your files that are available for download (e.g. 'downloadfiles')

2. Log in to your phpMyAdmin or mysql and create a database called download
    ````sql
    CREATE DATABASE download;
    ````

3. Now let's create the table where the file name and the counter are stored
    ````sql
    CREATE TABLE files (
		file varchar(200) NOT NULL UNIQUE,
  		downloads int(11) NOT NULL default '0'
	) ENGINE=MyISAM DEFAULT CHARSET=latin1;
    ````
