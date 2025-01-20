<?php 

#Task 1

$year = 2018;
if ($year % 4 == 0 && $year % 100 != 0 ){

    echo "This year is a leap year";
}
else{

    echo "This year is not a leap year";
}


echo "<br>";


#Task 2

$temp = 27;

if ($temp < 20){

    echo "It is wintertime";
}
else{

    echo "It is summertime";

}
echo "<br>";

#Task 3

$firstNum = 2;
$seconedNum = 2;

if ($firstNum == $seconedNum){

    echo ($firstNum + $seconedNum)*3;
}
else{

    echo $firstNum + $seconedNum;

}
echo "<br>";

#Task 4

$num1 = 10;
$num2 = 10;
$result = $num1 + $num2;

if($result == 30){

    echo "true";
}
else{

    echo "false";
}
echo "<br>";

#Task 5

$positiveNum = 18;

if($positiveNum > 0 && $positiveNum % 3 == 0){

    echo "true";
}
else{

    echo "false";
}
echo "<br>";



#Task 6

$validNum = 20;

if($validNum <= 50 && $validNum >= 20){

    echo "true";
}
else{

    echo "false";
}


echo "<br>";


#Task 7

$numbers = array(1 , 5 , 9);

$largeNum = $numbers[0];

for($i = 1 ; $i < count($numbers) ; $i++){

    if($numbers[$i] > $largeNum){

        $largeNum = $numbers[$i];
    }

}

echo "The largest number is:" . $largeNum;

echo "<br>";


#Task 8 

function calculateElectricityBill($units) {

    $bill = 0;

    if ($units <= 50) {

        $bill = $units * 2.50;
    } 
    elseif ($units <= 150) {

        $bill = (50 * 2.50) + (($units - 50) * 5.00);

    } 
    elseif ($units <= 250) {

        $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);

    } 
    else {

        $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
    }

    return $bill;
}

echo calculateElectricityBill(250);

echo "<br>";

#Task 9

$Number1 = 8;
$Number2 = 9;

$operators = array("+" , "-" , "*" , "/");
for($i = 0 ; $i < count($operators) ; $i++){

    if($operators[$i] === "+"){

        echo $Number1 + $Number2;
        
echo "<br>";

    }
    elseif($operators[$i] === "-"){

        echo $Number1 - $Number2;
        
echo "<br>";

    }
    elseif($operators[$i] === "*"){

        echo $Number1 * $Number2;
        
echo "<br>";

    }
    else{

        echo $Number1 / $Number2;
        
echo "<br>";
    }
}

echo "<br>";

#Task 10 

$age = 12;

if($age >= 18){

    echo "Is eligible to vote";
}
else{
    echo "Is not eligible to vote";
}

echo "<br>";

#Task 11

$numberChecked = -90;

if($numberChecked > 0){

    echo "The number is positive";
}
elseif($numberChecked < 0){

    echo "The number is negative";
}
else{

    echo "The number is zero";
}

echo "<br>";



#Task 12

$grades = array(60 , 86 , 95 , 63 , 45 , 78 , 90 , 100 , 62);

$sum = 0;

for($i = 0 ; $i < count($grades) ; $i++){

    $sum += $grades[$i];
}

$avg = $sum / count($grades);

echo "The average of the grades is:" . round($avg);


echo "&nbsp; &nbsp;";

if($avg < 60){

    echo "F";
}
elseif($avg < 70 && $avg >= 60){

    echo "D";

}
elseif($avg < 80 && $avg >= 70){

    echo "C";

}
elseif($avg < 90 && $avg >= 80){

    echo "B";

}
else{

    echo "A";

}

echo "<br>";

echo "&nbsp;";

?>