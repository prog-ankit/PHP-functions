<!DOCTYPE html>
<html>
<head>
	<title>Math Functions</title>
</head>
<body>
	<?php
		
		echo("abs() function- <br>");
		echo "abs(6.7) : ".abs(6.7)."<br>"; 
		echo "abs(-7): ".abs(-7)."<br>"; 
		echo "abs(6): : ".abs(6)."<br><br>";
		
		echo("ceil() function-<br>");
		echo "ceil(6.7): ".ceil(6.7)."<br>";
		echo "ceil(0.40): ".ceil(0.40)."<br>";
		echo "ceil(6.1) : ".ceil(6.1)."<br>";
		echo "ceil(-6.1) ".ceil(-6.1)."<br><br>";
	
		echo("floor() function- <br>");
		echo "floor(6.7): ".floor(6.7)."<br>"; 
		echo "floor(0.40): ".floor(0.40)."<br>"; 
		echo "floor(6.1): ".floor(6.1)."<br>";
		echo "floor(-6.1): ".floor(-6.1)."<br><br>";

		echo("round() function- <br>");
		echo "round(6.7): " .round(6.7)."<br>"; 
		echo "round(6.1): " .round(6.1)."<br>";
		echo "round(1.985545,3):  " . round(1.985545,3)."<br>"; 
		echo "round(5.045,2): " .round(5.045,2)."<br>";
		echo "round(-6.1): " .round(-6.1)."<br><br>";

		echo("min() function- <br>");
		echo "min value=> 2,5,42,1 : "  . min(2,5,42,1)."<br>";
		echo "min value=> 6,4,10,2 :   "  . min(array(6,4,10,2))."<br>";
		echo "min value=> 'hello' & 0: " . min('hello',0)."<br>";
		echo "min value=>  0 & 'hello' is : " . min(0,'hello')."<br>";
		$val=min(array(6,2,5),array(7,4,8));
		echo "min value=> array(6,2,5) & array(7,4,8) is : " ; print_r($val);
		echo "<br>";

		echo("max() function-<br>");
		echo "max value=> 2 , 5 , 42, 1  is :   "  . max(2,5,42,1)."<br>";
		echo "max value=> 6,4,10,2  is :   "  . max(array(6,4,10,2))."<br>";
		echo "max value=> 'hello' & 0 is : " . max('hello',0)."<br>";
		echo "max value=>  0 & 'hello' is : " . max(0,'hello')."<br>";
		$val=max(array(6,2,5),array(7,4,8));
		echo "max value=> array(6,2,5) & array(7,4,8) is : " ; print_r($val);
		echo "<br>";

		echo("pow() function- <br>");
		echo "pow(4 , 5):  " .pow(4,6)."<br>"; 
		echo "pow(-6 , 2): " .pow(-6,2)."<br>"; 
		echo "pow(-6 , -2): " . pow(-6,-2)."<br>";
		echo "pow(-6 , 5.5): " .pow(-6,5.5)."<br><br>";

		echo("sqrt() function- <br>");
		echo "sqrt(6): ".sqrt(6)."<br>"; 
		echo "sqrt(5): ".sqrt(5)."<br>";
		echo "sqrt(0.56): ".sqrt(0.56)."<br>"; 
		echo "sqrt(-6) : ".sqrt(- 6)."<br><br>";

		echo("decbin() function-<br>");
		echo "Binary value of 2 is ".decbin(2)."<br>"; 
		echo "Binary value of 10 is ".decbin(10)."<br/><br>";  
		echo "Binary value of 24 is ".decbin(24)."<br/><br>"; 

		echo("bindec() function-<br>");
		echo "Binary => decimal  ".bindec(10)."<br>";    
		echo "Binary => decimal  ".bindec(1100)."<br>";    
		echo "Binary => decimal  ".bindec(1101010)."<br><br>";


		echo("rand() function-<br>");
		echo "Random Numbers: ".rand() . "<br>";
		echo "Random Numbers: ".rand() . "<br>";// 
		echo "Random between 1 and 10: ".rand(1, 10) . "<br>";
		echo "Random between 10 and 15: ".rand(10, 15) . "<br>";

		echo("dechex() function-<br>");  
		echo "dec to hex of 255:".dechex(255)."<br>";  
		echo "dec to hex of 196: ".dechex(196)."<br>";  
		echo "dec to hex of 0: ".dechex(0)."<br><br>";    
		 
		echo("hexdec() function-<br>");  
		echo "hex to dec of'ff': ".hexdec('ff')."<br>";  
		echo "hex to dec of'c4': ".hexdec('c4')."<br>"; 
		echo "hex to dec of 0:  ".hexdec(0)."<br><br>";   

		echo("base_convert() function-<br>"); 
		echo "base_convert(12, 10, 2)  ".base_convert(12, 10, 2)."<br>"; 
		echo "base_convert('1100', 2, 10)  ".base_convert('1100', 2, 10)."<br>";  
		echo "base_convert('10889592', 10, 16)  ".base_convert('10889592', 10, 16)."<br>";
		echo "base_convert('a26978', 16, 10) : ".base_convert('a62978', 16, 10)."<br><br>";

	?>
</body>
</html>