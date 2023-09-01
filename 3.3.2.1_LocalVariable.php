<!DOCTYPE html>
<html>
<head>
	<title>Local  & Global Variable</title>
</head>
<body>
<?php
   //Global Variable
   $x = 4;
   // predefined array $GLOBALS['globalvariablename']
   
   function assignx () 
   { 
      $y = 0;//local Variable
      print "\$y inside function is $y. <br />";
      echo "Global Variable inside function : $x";//.$GLOBALS['x'];
    }
   
   assignx();
   print "<br>\$x outside of function is $x. <br />";
?>
</body>
</html>



