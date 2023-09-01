<!DOCTYPE html>
<html>
<head>
	<title>Indexed Array/ Numeric Array</title>
</head>
<body>

	<?php
         /* First method to create array. */
         $numbers = array(1, 2, 3, 4, 5);
                  
         $numbers[0] = 1;
         $numbers[1] = 2;
         $numbers[2] = 3;
         $numbers[3] = 4;
         $numbers[4] = 5;
         

         /*Syntax of foreach loop
         foreach($arrayvariablename  as $countervariablename)
         {
			//code goes here
         }
         */
         foreach($numbers as $value )
         {
            echo "Value is $value <br/>";
         }
         
         /* Second method to create array. */
         //$numbers=array("one","two","three","four","five");
         $numbers[0] = "one";
         $numbers[1] = "two";
         $numbers[2] = "three";
         $numbers[3] = "four";
         $numbers[4] = "five";
         
         foreach( $numbers as $value ) {
            echo "Value is $value <br />";
         }
      ?>
</body>
</html>

