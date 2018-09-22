<?php
    
   echo "<h1> PHP Scripts </h1>";
   echo "<b> Hello World </b> <br><br>";

   $name = "Iqbal";
   echo $name; 
   
   echo "<br><br>";
   // connecting strings

   $string1 = "T    his is the first part";
   $string2 = " and this is the second part";
   echo $string1." ". $string2;
   
   echo "<br><br>";
   //Number

   $mynumber1 = 75;
   $mynumber2 = 6;
   $calculation = $mynumber1 * $mynumber2;
   echo $calculation;

   echo "<br><br>";
   //Array

   $array = array("Blackberry", "Alphabet", "Apple", "IBM");
   print_r ($array); echo "<br>";   
   echo $array[3];   echo "<br><br>";

   $secondArray[0] = "France";
   $secondArray[1] = "German";
   $secondArray[3] = "Spanish";
   $secondArray[4] = "English";
   print_r($secondArray);   echo "<br><br>";
   echo "Size of Array is"." ". sizeof($secondArray); echo "<br><br>";

   unset($secondArray[4]);
   print_r($secondArray); echo "<br><br>";
   echo "Size of Array is"." ". sizeof($secondArray);
   
   echo "<br><br>";
   //If Statement

   $age = 16;

   if($age >= 18 ) {
       echo "You are old enough to enjoy";
   } else {
    echo "Sorry ! you need to wait". " ". (18-$age). " ". "more year(s)";
   }
   
   echo "<br><br>";
   //Loop

   for ($i= 10; $i>=0; $i--) { 
       echo $i ."<br>";
   }





?>