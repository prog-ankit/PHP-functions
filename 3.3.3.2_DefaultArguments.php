4<?php  
	function add($n1=10,$n2=10.)
	{  
		$n3=$n1+$n2;  
		echo "Addition is: $n3<br/>";  
	}  
	add();//10 10  20  
	add(20);  //20 10   30
	add(40,40);  //40 40  80
?>  