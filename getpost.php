<?php

 if($_POST) {

    $group = array('imran', 'iqbal', 'shakil', 'hossain', 'tayeb');
    $isMember = false;

    for ($i=0; $i < sizeof($group); $i++) { 

        if($_POST['name'] == $group[$i]) {
            $isMember = true;
        } 
    } 

    if($isMember) {
        echo 'Hello';
    } else {
        echo 'Entry needed';
    }
  }
?>

<h1> Group Member Checker </h1> 

<form method = 'post'>
    <input name="name" type = "text"> 
    <input type="submit" value="Submit">

</form>
