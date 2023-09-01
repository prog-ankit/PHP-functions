<!DOCTYPE html>
<html>
<head>
	<title>Date-Time Functions</title>
</head>
<body>
	<?php
		echo("date() function- <br>");
		echo date("d/M/Y"); echo "<br>"; 
		echo date("d.m.Y"); echo "<br>"; 
		echo date("d-m-Y"); echo "<br><br>";

		echo("getdate() function-<br>");
		print_r ( getdate()); 
		echo "<br><br>";

		echo("checkdate() function-<br>");
		var_dump(checkdate(9, 5 , 2019));
		echo "<br><br>";

		echo("time() function-<br>");
		echo date("h:i:s") . "<br>"; 
		echo date("M,d,Y h:i:s A") . "<br>"; 
		echo date("h:i a")."<br><br>"; 
		$a=time();
		echo "current time in unix time stamp: $a"; 
		echo "<br><br>";
		$nextweek=time()+(7*24*60*60); 
		echo $nextweek;
		echo "<br><br>";

		echo("mktime() function-<br>");
		echo "The time stamp for 25th Nov 2017 ,23 hrs 21mins 50secs. is  ".mktime(23, 21, 50, 11, 25, 2017)."<br>";
		echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
		echo date("Y-m-d",mktime(0,0,0,9,28,2019)); 
		echo "<br>";
		echo date("Y-m-d" , mktime(0,0,0,10,38,2006));
	?>
</body>
</html>