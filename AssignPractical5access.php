<?php
	echo "Date is ".$_POST['day']."/".$_POST['month']."/".$_POST['year'];
	echo "<br>WeekDay is ".date("l",mktime(0,0,0,$_POST['month'],$_POST['day'],$_POST['year'])); 
	echo "<br>YearDay is ".date("z",mktime(0,0,0,$_POST['month'],$_POST['day'],$_POST['year'])); 
	echo "<br>TimeStamp is ".mktime(0,0,0,$_POST['month'],$_POST['day'],$_POST['year']); 

?>	