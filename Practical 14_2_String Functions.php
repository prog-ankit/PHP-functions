<!DOCTYPE html>
<html>
<head>
	<title>Practical 14_2_StringFunctions</title>
</head>
<body>

	<?php	
/*		$a = 10;
		$b = $a;
		echo $a+$b."<br><Br><br>";
		//chr	
		echo("chr() function- <br>");
			
		echo "Character value 65 is : ".chr(65)."<br>";
		echo "Character value 065 is : ". chr(065)."<br>";
		echo "Character value 0x65 is : ". chr(0x65)."<br><br><br>";
			
		//ord	
		echo("ord() function- <br>");
		echo "ASCII value of the 1 char: ". ord("A")."<br>";
		echo "ASCII value of the 1st char: ". ord("ankit")."<br><br>";
			

		//strtolower
		echo("strtolower() function-<br>");
		
		//$str=strtolower($str);
		echo "Lowercase of ANKIT: ".strtolower("ANKIT")."<br><br><br>";
			
		//strtouper
		echo("strtoupper() function-<br>");
		//$strk=strtoupper($strk);
		echo "Uppercase of ankit: ". strtoupper("ankit")."<br><br><br>";
			
		//strlen	
		echo("strlen() function- <br>");
		//$strn=strlen($strs);
		echo " lenght of string ['Ankit']: " . strlen("Ankit")."<br><br>";
					
		//ltrim	
		$str="   Ankit   ";
		echo " length before ltrim: " . strlen($str) ; echo "<br>";
		echo " length after ltrim: ".ltrim($str,"An")."<br><Br>";
			
			
		//rtrim		

		echo " length before rtrim: ". strlen($str); 
		echo "<br>";
		echo " length after rtrim: ".strlen(rtrim($str))."<br><br>";
				
		//trim
		echo " length before trim: ". strlen($str); 
		echo "<br>";
		echo " length after trim: ".strlen(trim( $str))."<br><br>";
			
			*/
		//substring	
		/*echo("substr() function- <br>");
		$str1 = "Ankit Bose";
		echo "Negative start: ".substr("Ankit Bose", -4); 
		echo "<br><br>";*/
/*		
		echo "Negative start,positive length: ".substr("Ankit_Bose", -1,2); 
		echo "<br><br>";
		
		echo "Negative start,negative length : substr(abcdefg, -3,-1) is : "
		.substr("Ankit Bose", -4,-1); echo "<br><br>";

		echo "Positive start,negative length substr(abcdefg, 2,-1) is	: "
		.substr("Ankit Bose", 1,-4); echo "<br><br><br>";
			*/
		//strcmp	
				/*
		echo("strcmp() function-  <br>");
		//$str6='a';	
		//$str7='b';	
		echo "is hey>hi : " .strcmp("hey" , "hi") . "<bR>"; 
		//first str > second str
			
		//$str8='0';	
		//$str9='9';	
		echo "is hey < hi : " .strcmp("hi" , "hey") . "<br>" ; //first str < second str
		 	
		//$str10='9';
		//$str11='9';
		echo "is hi=hi : " . strcmp("hi","hi") . "<br><br>" ; //first str = second str		
		*/
		//strpos	
		echo "strpos() function- <br>";
		$str1 = "Ankit Bose";
	//	$findme= 'Bose' ;
		$pos = strpos("Ankit Bose","B");	
		echo "<br><br><br>".$pos."<br><br><br>";
	/*	if ($pos != false)
		{			
			echo "Substring found at, pos = :	" . $pos."<br><br>";
		}	
		else	
		{	
			echo "Substring not found.";
			echo "<br><br>";
		}	*/
		 	
		//searching with offsets	
		$pos=strpos($str1,"B",5);	
		if ($pos != false)
		{				
			echo "Substring found at, pos = :	" . $pos."<br><br>";
		}	
		else	
		{	
			echo "Substring not found.";
			echo "<br><br>";
		}	
		
		//strstr	
		echo( "strstr() funciton- <br>");
		echo "first occurence of i in ankit bose:  " . strstr("ankit bose","i") . "<br>";
		echo "first occurence of 98 in ankit bose:  " . strstr("ankit bose",98) . "<br><br>";
			 
		//stristr	
		echo( "stristr() funciton- <br>");
		echo "first occurence of i in Ankit Bose:  " . strstr("ankIt bose","i") . "<br>";
		echo "first occurence of 98 in ankit bose:  " . stristr("Ankit Bose",98) . "<br><br>";
			 
		//str_replace
		echo( "str_replace() function-  <br>");
		echo "Replace Hello World with Hello PHP : " . str_replace("World", "PHP" , "hello PHP")."<br><br>";

		//str_replace in array	
		echo "Replace red,green,blue with black : "; 
	
		$find=array("red","green","blue");
		$replace=array("black");
		$arr=array("blue","red","green","yellow","red");
			
			
		print_r(str_replace($find, $replace, $arr,$i));
		echo "replacements : $i";
		echo "<br><br><Br>";
			
		//strrev	
		echo( "strrev() function- <br>");
		echo "Reverse of Ankit : " .strrev("Ankit")."<br><br>";
			
		//echo		
		echo( "use of echo- <br>");	
		$str="what is php";	
		echo $str; 
		echo "<br>";	
		echo "welcome to php";	
		echo "<br><br>";
			
		//echo in multiple lines	
		echo "this text spans multiple lines";
		echo "<br><br>";
		echo 'this','string','has','multiple','parameters';
		echo "<br><br>";
			
			
		//echo difrenciate by quotes
		$color="red";
		//echo "diffrenciate by double quote : "; 
		echo "rose are $color";
		echo "<br>";
		//echo "diffrenciate by single quote : "; 
		echo 'rose are $color';
		echo "<br><br>";

		//print	
		echo( "use of print<br>");	
		$str="what is php";	
		print $str;
		print "<br>";
		print "welcome to php";	
		print "<br><br>";
			
		//print in multiple lines 	
		print "this text spans multiple lines";
		echo "<br><br>";
			
		//print diff by quotes	
		$color="red";
		//print "diff by double quote : "; 
		print "rose are $color";
		echo "<br>";	
		//print "diff by single quote : "; 
		print 'rose are $color';
		echo "<br><br><br>";
			
	?>	
</body>
</html>