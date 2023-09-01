<?php
   $transport = array('foot', 'bike', 'car', 'plane');
   $mode = current($transport); 
   print "$mode <br />";
   
   $mode = next($transport);  
   print "$mode <br />";
   
   $mode = current($transport);
   print "$mode <br />";
   
   $mode = prev($transport);  
   print "$mode <br />";
   
   $mode = end($transport);
   print "$mode <br />";
   
   $mode = current($transport); 
   print "$mode <br />";
?> 