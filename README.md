Extremely Simple Download Center with PHP and Javascript & Design
=========================================================

#About#
Download Center is very helpful when you want to keep of how many times a file has been downloaded.

You can also let the user wait some seconds and display an ad, to make both money and restrict your monthly bandwidth usage.

Plus it's just cool to have an own download center, right?!

#EXAMPLE#
An example can be found here: [Download center](http://lab.christian-fei.com/download-center/)

[Design] (http://projects.gtnomikos.com/xsdc/test/home/)

#WORDPRESS INTEGRATION#
If you want to add a download center to your wordpress blog, follow this step by step tutorial
[Create a simple and neat download page for wordpress](http://christian-fei.com/tutorials/create-a-simple-neat-download-page-for-wordpress-javascript/)

#FEATURES#
- keep track of how many times a file has been downloaded
- let your users download a file on a page with advertisements
- dynamically add new files fully automated to the database
- extremely lightweight and fast

#SETUP#
To set up this simple download center, follow these instructions to make it work:

1. Create a directory where you store all your files that are available for download (e.g. 'downloadfiles')

2. Log in to your phpMyAdmin or mysql and create a database called download
    ````sql
    CREATE DATABASE downloads;
    ````

3. Now let's create the table where the file name and the counter are stored
    ````sql
    CREATE TABLE files (
		file varchar(200) NOT NULL UNIQUE,
  		downloads int(11) NOT NULL default '0'
	) ENGINE=MyISAM DEFAULT CHARSET=latin1;
    ````

4. Now that the database is set up, change your host,username and password in *DownloadCenter.php* in the mysqli object

5. Now it's time to open your file that resembles the Download center (e.g. the *index.php* in the directory *download/*)

6. Get the file the user wants to download and also the actual location of the file
	````php
	$file = $_GET['f'];
	$dlocation = 'http://your-site.com/downloadfiles/'.$file;
	````

7. Create a paragraph where the remaining seconds will be displayed and also a link to a file
    ````html
    <p id="timer" style="font-size:3.5em">3</p>
    ````

8. After that add this script that works as a timer
	````html
	<script type="text/javascript">
	````
    ````javascript
	var count=3;

	var counter=setInterval(timer, 1000); //1000 will run it every 1 second

	function timer()
	{
		count--;
		if (count <= 0)
		{
			clearInterval(counter);
			//counter ended, show a button with a link to the file
			document.getElementById("timer").innerHTML = '<a href="<?php echo $dlocation;?>">download</a> :)<br>';
			return;
		}
		document.getElementById("timer").innerHTML = count;

	}
    ````
    ````html
	</script>
	````

9. At this point we need to contact the database to increment an entry (to add it to the table if needed too)
    ````php
    require_once('DownloadCenter.php');
	//create a new object, pass the name of file the user wants to download
	$dc = new DownloadCenter($file);
	if(!$dc->exists()) {
		$dc->add();
	$dc->increment();
	}
	//display how many times this files has been downloaded so far
	echo '<b>downloaded '.$dc->getCount().' times</b>';
    ````
