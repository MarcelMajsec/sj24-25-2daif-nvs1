<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
       

    for ($x = 1; $x <= 1155; $x++) {

        $out = "";
        if($x % 3 == 0) {
           $out = $out . "Fizz";
        } 
        if ($x % 5 == 0) {
            $out = $out . "Buzz";
        }
        if ($x % 7 == 0) {
            $out = $out . "Whizz";
        }
        if ($x % 11 == 0) {
            $out = $out . "Bang";    
        } 
        if ($out == "") {
            echo $x;
        }

        echo $out . "<br>"; 
        
        if ($out == "FizzBuzzWhizzBang") {
            
            break;
        }
        
          
    }


    ?>
</body>
</html>