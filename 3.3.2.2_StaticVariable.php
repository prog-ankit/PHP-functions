<!DOCTYPE html>
<html>
<head>
    <title>Static Variable</title>
</head>
<body>
<?php  
    function static_var()  
    {  // static $variablename =value;
        static $num1 = 3;       //static variable  
        $num2 = 6;          //Non-static variable  
        //increment in static variable  
        $num1++;  
        //increment in non-static variable  
        $num2++;  
        echo "Static: " .$num1 ."</br>";  
        echo "Non-static: " .$num2 ."</br>";  
    }  
      
//first function call  
    static_var();  //num1=4   num2=7
  
    //second function call  
    static_var();  //num1=5     num2=7
?>  

</body>
</html>