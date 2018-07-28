<?php
   echo "<h1> PHP Practice Section </h1>";
   echo "<b>Hello World</b>";
   

    // Variables 

   $name = "<p>Iqbal</p>";
   echo $name;

   //concatinating two variables. 
   $string1 = "This is a PHP course";
   $string2 = "learning PHP is fun";
   echo $string1." ".$string2;

   // Number
   $myNumber = 22;
   $calculation = $myNumber / 7;
   echo $calculation;

   //Boolean
   $myBool = true;
   echo "<p> This is True or False !!! - ".$myBool; 

   //Accessing variable in differnt way
   $varName = "name";
   echo $$varName;

   //Array 
   $myArray = array("Apple", "BlackBerry", "Samsung", "Nokia");
   print_r ($myArray);
   echo $myArray[1];
   echo "<br> <br>";
    //adding new item at the end;
    $myArray[] = "OnePlus";
    print_r ($myArray);


   echo "<br> <br>";
        //alternative array 
    $itemArray[0] = "Sting";
    $itemArray[1] = "Variables";
    $itemArray[2] = "Boolean";
    $itemArray[3] = "Logic";
    print_r($itemArray);

    echo "<br><br>";
    // Array with String as index 
    $countryLanguage = array(
        "England" => "English", 
        "USA" => "English", 
        "China" => "Chinese", 
        "Argentina" => "French", 
    );
    print_r($countryLanguage);
    echo "<br><br>";

    // Array Size. Array Length
    echo "Length of the Array is ". sizeof($countryLanguage);
    echo "<br><br>";

    //Adding new Item at the end of an Array;
    $countryLanguage["Bangladesh"] = "Bangla";
    print_r($countryLanguage);
    echo "<br><br>";

    // Removing Item from the Array
    unset($countryLanguage["China"]);
    print_r($countryLanguage);

    echo "<br><br>";

// If Statement 





?> 



