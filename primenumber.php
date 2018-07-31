<body bgcolor= "black"; style="color:white; margin-top: 100px">
    <center> 
        <div>
            <h1> PrimeNumber Checker </h1> 
            <form>
                <input name="number" type = "text" placeholder = "Enter your Number Here"> 
                <input type="submit" value="Submit">
            </form>
        </div> 
    </center>
</body>

<center>
 <?
 if (isset($_GET["number"])) {
    if(is_numeric($_GET["number"]) && $_GET["number"] > 0 && $_GET["number"] 
    == round($_GET["number"], 0)) {

        $isPrime = true;
        $i = 2;
        while ($i < $_GET["number"]) {
            
            if($_GET["number"] % $i == 0) {
                // value is not a prime number;
                $isPrime = false;
            }
            
            $i++; 
        }

        if($isPrime) {
            echo  $_GET["number"]. " ". "IS A PRIME NUMBER";
        } else {
            echo $_GET["number"]." ". "IS NOT PRIME NUMBER";
        }

    } else if ($_GET) {
        echo "<p style = 'color:yellow; weight:bold; font-size:130%'>
            PLEAES ENTER A FULL NUMARIC NUMBER 
         </p>";
    }
 }
?>  </center>

