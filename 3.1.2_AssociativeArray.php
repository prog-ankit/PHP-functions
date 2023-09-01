
<!DOCTYPE html>
<html>
<head>
	<title>Associative Array</title>
</head>
<body>
	<?php 
	$salary=array("Sonoo","vimal","Ratan");
	foreach($salary as $value)
	{

			echo "Array value using for each: $value <br>";

	}

	echo $salary[0];
	echo "<br>";


	$salary=array("Sonoo"=>550000,"Vimal"=>250000,"Ratan"=>200000);  
	echo "Sonoo salary: ".$salary["Sonoo"]."<br/>";  
	echo "Vimal salary: ".$salary["Vimal"]."<br/>";  
	echo "Ratan salary: ".$salary["Ratan"]."<br/>";  

	foreach($salary as $k=>$v)
	{
		echo "Key is ".$k." Value is:".$v;
		echo "<br>";
	}
	?>
</body>
</html>
    