<?php    
function factorial($n)    
{    
    if ($n < 0)    
        return -1; /*Wrong value*/    
    if ($n == 0)    
        return 1; /*Terminating condition*/    
    return ($n * factorial ($n -1));    
}    
 

 $a=factorial(4);
 echo "factorial of 4 is ".$a;
echo factorial(5);    
?>  