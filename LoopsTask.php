<?php
#Task 1

for($i = 1 ; $i <= 10 ; $i++ ){

    if($i != 10){

        echo $i . "-";
    }
    else{

        echo $i;
    }

}

echo "<br> <br>";



#Task 2

$sum = 0;
for($i = 0 ; $i <= 30 && $i >= 0 ; $i++){

    $sum += $i;
}
echo $sum;
echo "<br> <br>";




#Task 3

for($i = 0 ; $i < 5 ; $i++){

    for($j = 0 ; $j < 5; $j++){

        if($i == 0){

            echo "A" . "&nbsp;&nbsp;";
            if($j == 4){

                echo "<br>";
            }
        }
        elseif($i == 1){


            if($j == 0 || $j == 1 || $j == 2 ){

                echo "A" . "&nbsp;&nbsp;";

            }
            else{

                if($j == 4){

                    echo "B" . "&nbsp;&nbsp;";
                    echo "<br>";
                }
                else{
                    echo "B" . "&nbsp;&nbsp;";
                }
               
            }
        }
        elseif($i == 2){


            if($j == 0 || $j == 1 ){

                echo "A" . "&nbsp;&nbsp;";

            }
            else{

                if($j == 4){

                    echo "C" . "&nbsp;&nbsp;";
                    echo "<br>";
                }
                else{
                    echo "C" . "&nbsp;&nbsp;";
                }
            }
        }
        elseif($i == 3){


            if($j == 0){

                echo "A" . "&nbsp;&nbsp;";

            }
            else{

                if($j == 4){

                    echo "D" . "&nbsp;&nbsp;";
                    echo "<br>";
                }
                else{
                    echo "D" . "&nbsp;&nbsp;";
                }
            }
        }
        elseif($i == 4){


            

                if($j == 4){

                    echo "E" . "&nbsp;&nbsp;";
                    echo "<br>";
                }
                else{
                    echo "E" . "&nbsp;&nbsp;";
                }
            
        }
    }
}

echo "<br> <br>";




#Task 4

for($i = 0 ; $i < 5 ; $i++){

    for($j = 0 ; $j < 5; $j++){

        if($i == 0){

            echo $i+1 . "&nbsp;&nbsp;";
            if($j == 4){

                echo "<br>";
            }
        }
        elseif($i == 1){


            if($j == 0 || $j == 1 || $j == 2){

                echo $i . "&nbsp;&nbsp;";

            }
            else{

                if($j == 4){

                    echo $i + 1 . "&nbsp;&nbsp;";
                    echo "<br>";
                }
                else{
                    echo $i + 1 . "&nbsp;&nbsp;";
                }
               
            }
        }
        elseif($i == 2){


            if($j == 0 || $j == 1 ){

                echo $i - 1 . "&nbsp;&nbsp;";

            }
            else{

                if($j == 4){

                    echo $i + 1 . "&nbsp;&nbsp;";
                    echo "<br>";
                }
                else{
                    echo $i + 1 . "&nbsp;&nbsp;";
                }
            }
        }
        elseif($i == 3){


            if($j == 0){

                echo $i -2  . "&nbsp;&nbsp;";

            }
            else{

                if($j == 4){

                    echo $i + 1 . "&nbsp;&nbsp;";
                    echo "<br>";
                }
                else{
                    echo $i + 1 . "&nbsp;&nbsp;";
                }
            }
        }
        elseif($i == 4){


            

                if($j == 4){

                    echo $i + 1 . "&nbsp;&nbsp;";
                    echo "<br>";
                }
                else{
                    echo $i + 1 . "&nbsp;&nbsp;";
                }
            
        }
    }
}

echo "<br> <br>";



#Task 5

for($i = 0 ; $i < 5 ; $i++){

    for($j = 0 ; $j < 5; $j++){

        if($i == $j){

            echo $i + 1 . "&nbsp;&nbsp;";
        }
        else{
            echo 0 . "&nbsp;&nbsp;";
        }

        
    }
    echo "<br>";
}



echo "<br> <br>";


#Task 6


$number = 5;
$factorial = 1;

for($i = 1 ; $i <= $number ; $i++){

    $factorial *= $i;


}

echo $factorial;

echo "<br> <br>";



#Task 7

$numTerms = 10; 
$first = 0;
$second = 1;

echo $first . ", " . $second;

for ($i = 3; $i <= $numTerms; $i++) {

    $next = $first + $second;

    echo ", " . $next;

    $first = $second;
    $second = $next;
}

echo "<br> <br>";




#Task 8


$text = "Orange Coding Academy";

$lowercaseText = strtolower($text);

$charToCount = 'c';

$count = substr_count($lowercaseText, $charToCount);

echo "The number of 'c' characters in the text is: " . $count;

echo "<br> <br>";


#Task 9 

echo "<table border='1' cellpadding='3px' cellspacing='0px'>";
for ($i = 1; $i <= 6; $i++) {
    echo "<tr>"; 

    for ($j = 1; $j <= 5; $j++) {

        $result = $i * $j;

        echo "<td>$i * $j = $result</td>";
    }
    
    echo "</tr>"; 
}
echo "</table>";
echo "<br> <br>";




#Task 10

for($i = 1 ; $i <= 50 ; $i++){

    if($i % 3 == 0 && $i % 5 == 0){

        echo "FizzBuzz" . "&nbsp;&nbsp;";
    }
    elseif($i % 3 == 0){

        echo "Fizz" . "&nbsp;&nbsp;";
    }
    elseif($i % 5 == 0){

        echo "Buzz" . "&nbsp;&nbsp;";
    }
    else{

        echo $i . "&nbsp;&nbsp;";
    }
}


echo "<br> <br>";


#Task 11

$numRows = 5;
$currentNumber = 1;

for ($i = 1; $i <= $numRows; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $currentNumber . " ";
        $currentNumber++;
    }
    echo "<br>";
}
echo "<br> <br>";



#Task 12


function printPattern() {
    $rows = 5; 
    
    for ($i = 1; $i <= $rows; $i++) {

        for ($k = $rows - $i; $k > 0; $k--) {
            echo "  ";
        }
        
        for ($j = 0; $j < $i; $j++) {
            echo chr(65 + $j) . " "; 
        }
        echo "\n";
    }

    for ($i = $rows - 1; $i >= 1; $i--) {
       
        for ($k = $rows - $i; $k > 0; $k--) {
            echo "  ";
        }
       
        for ($j = 0; $j < $i; $j++) {
            echo chr(65 + $j) . " ";
        }
        echo "\n";
    }
}
printPattern();

echo "<br> <br>";





?>