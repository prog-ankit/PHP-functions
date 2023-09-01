<?php 
		$myarray=array();
		echo("When there is no element<br>");
		print_r($myarray);//Array()
		echo "<br>";
		$myarray[] ="Good Morning";//index 0
		$myarray[]="Have a nice Day";//1
		$myarray[]="Today is Tuesday";//2
		$myarray[]=45;//3
		$myarray[]=78;//4

		print_r($myarray);
		//Array([0]=>"Good Morning" [1]=>"Have a nice Day" [2]=>"Today is Tuesday" [3]=>45 [4]=>78)
		//to add array elements 

		array_push($myarray,"hi",10,20,30);
		echo "<br>";
		print_r($myarray);
		//Array([0]=>"Good Morning" [1]=>"Have a nice Day" [2]=>"Today is Tuesday" [3]=>45 [4]=>78 [5]=>"Hi" [6]=>10 [7]=>20 [8]=>30)

		$s=array();
		echo "no element";
		print_r($s);//Array()
		$s["wish"]="Good Morning";
		$k="Hello";
		$s[$k]="Goodbye";

		echo "<br>";
		print_r($s);


?>