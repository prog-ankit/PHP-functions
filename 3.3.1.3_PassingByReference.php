<html>
   
   <head>
      <title>Passing Argument by Value &Reference</title>
   </head>
   
   <body>
      
      <?php
      // pass by value
         function addFive($num) {
            $num =$num + 5;//15
         }
         // pass by ref
         function addSix(&$num) {
            $num =$num + 6;
         }
         
         $orignum = 10;
         addFive( $orignum );         
         echo "Original Value is $orignum<br/>";//10
         
         addSix( $orignum );
         echo "Original Value is $orignum<br />";//16
      ?>
      
   </body>
</html>