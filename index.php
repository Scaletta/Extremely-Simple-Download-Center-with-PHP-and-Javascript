<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Download Counter - Christian Fei</title>
	
	<style type="text/css">html,body,div,span,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,abbr,address,cite,code,del,dfn,em,ins,kbd,q,samp,small,strong,sub,sup,var,b,i,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,dialog,figure,footer,header,hgroup,menu,nav,section,time,mark,audio,video{margin:0;padding:0;outline:0;border:0;background:transparent;vertical-align:baseline;}article,aside,dialog,figure,footer,header,hgroup,nav,section{display:block;}nav ul{list-style:none;}blockquote,q{quotes:none;}blockquote:before,blockquote:after{content:'';content:none;}q:before,q:after{content:'';content:none;}ins{background:#333;color:#fff;text-decoration:none;}mark{padding:0 3px;background:#333;color:#fff;text-decoration:none;}del{text-decoration:line-through;}abbr[title],dfn[title]{border-bottom:1px dotted black;cursor:help;}table{border-spacing:0;border-collapse:collapse;}hr{display:block;margin:1em 0;padding:0;height:1px;border:0;border-top:1px solid #ccc;}input,select{vertical-align:middle;}</style>
	<style type="text/css">
		body {margin: 0 auto; max-width: 650px;background:#fff2ef; padding: .5em; font-size: 100%; font-family: Tahoma, Verdana, Trebuchet MS, Arial, Helvetica, sans-serif;}
		.header {float:left;text-align: center;background:black;color:white;padding:1em; position:relative;}.dayum {position:absolute; bottom:-15px; right:-15px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFwAAABNCAMAAAAcu/NUAAAAxlBMVEX////R0tStr7KjpaijpaiPkZSMjpGeoKO0trmho6aeoKOmqKulp6qbnaCgoqWjpaiDhYiYmp2pq66rrbCJio2pq66pq66usLOXmZyusLOeoKOeoKOipKeoqq2WmJutr7GsrrGipKenqayDhYiho6ays7aqrK+nqayRk5Z6e36XmZyipKevsbSXmZyYmp2Vl5qbnaDR0tQAAABMTU9tbnFjZGY6OjwdHR5YWFqBgoV4eXu9vsCys7aeoKOKjI+TlZjIycuoqq2DYnfLAAAAMXRSTlMAED3csPL46OhxLsHw7YhY+PN+uleo591KyrjPyJT5ZuKd1h/ixNDr6/d89aDdkmSm8ZN/4wAAA+9JREFUeF61mVd32zgQhUlKsmQ1F+26JI7TNsnWMoNaWP//n9ojEPSSNGUWkfcFLzqf7rmYAYSR10fB/PHSm0TB4S/KkS3ej873/55pgbnYr5tgTNNPC4IlCT3bj4S+sqZrksu5fz7644xio/jiXPyVQ0+ADz5RfFNkOzR7f3MtsE3y7moI+3LLsYuu3/XO5usXhh3Ft5c9be8Edpd+8vukrbGXyI/OPRv8QrCvLj50jGQhsL/opks0899wkMinr63sDcWBEtuW4P0ZwcESu4c32SuC5+jip2nYQvMj/XYS3wJi532KTCKTJ9Oc+/vz8qaQe9s11cw3OZBKIgCji1xQbF93035offM01TQDWuSCYlVnPzwP4MrIhCpJBSIa85ILksfaZm77O6YMTBICKJe4MKyIv1qQX3jPnBE1mAhRhKBLlei0WJfYH1hP10CRA/AjNU2KSiSGOIC4+5+9vumMFflyNB2CBeWZIwVeAsifX+D3ojM8DvMFBOocx4CiXaunTBHM76yjayOLkiA2F205adT02ZmrlCV2VJq4jXO5hLnlxu5jewuft7c9Uy7elyMkdLmc1tIaX7SQueKqiJchBWljOeZSjZMIxPqefuOtJxInoF9ySUOOMjWKVMlxTKtwvPE9/3QZOi8KEE0eb5Yi0hQADGkg10Tm3vyUccrRhEdGEiIq1zDAELlW5TxYYsmNqVdLReQOuFIUEiRpShCzDJFDYjfU0CqAJYklN4rWnBPbERpMHEGKOT1VtmtCZaCKZnH8ZocsK8Xi6pdYmxqYpbvNpFkWyc5kVy5l61KpDAQqEK40LB0cszPZ6Q+/VOciAxMCUFRQtIylAx9ARpR/ljs0AY0o06joPAUsX3qSnZaVswUSd95xiOwxZReMQnQS3cmI1D03Lq0XAm6hGEOmlEmpto2TuSJNkhpZUhVzbJa4r57noCzl6FcbMBFxFuSRXPFMpIpVHJlE4ildrKs3UWbEkQVQ7QpLdl/EpVZxrKgUgkZavFWGtTtUQsikTrNQ1MkuAhVryYvDhOBpuTu00HeOiCwFgEhUydRGoEo3gtARbbkXb9YNv1ukFCVyBJmNoAKQLaYbfrd4wTPWxGVDJbCEYqvIwavpluJIEivvlQ5yJPau6c34REaB75rfdKsx6BfBNG+54k00Ad2xp3yHTviCbhuMHKZ5+zt9vh7GJiu/y7zlZti8ZbpJ0XPnAaP/ru+Maxn0Gir2iUb3HC363ztXDd/9M91EdONPNctlswdvmNb3LdnI5X7i+fkUeOLQ5+IbsmfLz743itabV/+23Hrjyd/PNC9M7zZrb2StD3fa/sP10ZtEwb+Pvcj/AeCQf8/zX3tHAAAAAElFTkSuQmCC) no-repeat; display:block;height:79px; width:100px;}
		.header a {color:white;text-decoration: line-through;}
		h1 {font-size: 4em;}
		h4 {float:left;overflow:hidden;}
		.content {float:left;padding:.5%; width:99%;text-align: center;margin-top:50px;}
		.file {display:block; background:grey; color:white; padding-top:1em; padding-bottom:1em;margin-top:1em; text-align: center;}
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
	
	<div class="header">
		<a href="./"><h1>Extremely Simple Download counter</h1></a><h4>with PHP and Javascript</h4>
		<div class="dayum"></div>
	</div>
	<div class="content">
		<?php 

		if(isset($_GET['f'])) {
			$file = $_GET['f'];
			$dlocation = 'files/'.$file;
		?>
			<p id="timer" style="font-size:3.5em">3</p>
			<script type="text/javascript">
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
			</script>
			<br><br>

			<?php 

			require_once('DownloadCenter.php');
			$dc = new DownloadCenter($file);
			if($dc->exists()) {
				$dc->increment();
			}
			else {
				$dc->add();
				$dc->increment();
			}
			echo '<b>downloaded '.$dc->getCount().' times</b><br/><br/><br/>';

		}


		?>


		<h1>Files</h1>
		<?php
		chdir("files");
		$files = glob("*");
		//print each file name
		foreach($files as $file)
		{
			?>
			<a class="file" href="?f=<?php echo $file; ?>" alt="<?php echo $file; ?>"><?php echo $file; ?></a>
			<?php 
		}
		?>
	</div>
</body>
</html>