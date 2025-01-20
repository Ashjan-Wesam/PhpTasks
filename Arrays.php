<?php

#Task 1

$colors = array("red", "green", "white");

$Text = "The memory of that scene for me is like a frame of film forever frozen at that moment: the 
<span style='color:{$colors[0]}'>{$colors[0]}</span>  carpet, the 
<span style='color:{$colors[1]}'>{$colors[1]}</span>   lawn, the 
<span style='background-color: black;color:{$colors[2]}'>{$colors[2]}</span> house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

echo $Text;

echo "<br> <br>";



#Task 2

$Arraycolors = array("white", "green", "red");

$List = "<ul> <li>{$Arraycolors[1]}</li> <li>{$Arraycolors[2]}</li> <li>{$Arraycolors[0]}</li> </ul>";

echo $List;


#Task 3

$cities= array( 
    "Italy"=>"Rome", 
    "Luxembourg"=>"Luxembourg",
    "Belgium"=> "Brussels", 
    "Denmark"=>"Copenhagen", 
    "Finland"=>"Helsinki", 
    "France" => "Paris",
    "Slovakia"=>"Bratislava", 
    "Slovenia"=>"Ljubljana", 
    "Germany" => "Berlin",
    "Greece" => "Athens", 
    "Ireland"=>"Dublin", 
    "Netherlands"=>"Amsterdam", 
    "Portugal"=>"Lisbon",
    "Spain"=>"Madrid" ); 

asort($cities);

foreach ($cities as $country => $capital) {

    echo "The capital of $country is $capital<br>";
    
   }

echo "<br> <br>";


#Task 4

   $color = array (4 => 'white', 6 => 'green', 11=> 'red');

   foreach ($color as $number => $colorname) {

    echo $colorname . "<br>";
    
   }

   echo "<br> <br>";



#Task 5

   $array = [1, 2, 3, 4, 5];
   $location = 4;  
   $newItem = '$'; 

   $newArray = [];
   for ($i = 0; $i < count($array) + 1; $i++) {
     
    if ($i == $location - 1) {
        $newArray[] = $newItem; 
    }

    elseif ($i < count($array)) {
        $newArray[] = $array[$i]; 
    }
}
echo "Modified Array: " . implode(" ", $newArray);

echo "<br> <br>";


#Task 6

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");


asort($fruits);

foreach ($fruits as $letter => $fruit) {

    echo "$letter = $fruit<br>";
    
   }

echo "<br> <br>";


#Task 7

$temperature  = array(

    78, 60, 62, 68, 71, 68, 
    73, 85, 66, 64, 76, 63, 
    75, 76, 73, 68, 62, 73, 
    72, 65, 74, 62, 62, 65, 
    64, 68, 73, 75, 79, 73 );


$avg = array_sum($temperature) / count($temperature);

$uniqueTemperatures = array_unique($temperature);
sort($uniqueTemperatures);

$lowestTemperatures = array_slice($uniqueTemperatures, 0, 5);
$highestTemperatures = array_slice($uniqueTemperatures, -5);

echo "Average Temperature is :". round($avg , 2) ."<br>";
echo "List of five lowest temperatures : " . implode(", " , $lowestTemperatures) . "<br>";
echo "List of five highest temperatures : " . implode(", " , $highestTemperatures) . "<br>";
echo "<br> <br>";

#Task 8

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

$mergedArray = array_merge($array1, $array2);
print_r($mergedArray);

echo "<br> <br>";





#Task 9

function convertToUpperCase($array) {
    $result = [];
    foreach ($array as $value) {
        $result[] = strtoupper($value); 
    }
    return $result;
}

$colors = array("red", "blue", "white", "yellow");

$upperCaseColors = convertToUpperCase($colors);

echo implode(", " , $upperCaseColors);


echo "<br> <br>";





#Task 10

function convertToLowerCase($array) {
    $result = [];
    foreach ($array as $value) {
        $result[] = strtolower($value); 
    }
    return $result;
}

$colors = array("RED", "BLUE", "WHITE", "YELLOW");

$lowerCaseColors = convertToLowerCase($colors);

echo implode(", " , $lowerCaseColors);



echo "<br> <br>";





#Task 11


$divisibleByFour = [];

for ($i = 200; $i <= 250; $i++) {
    if ($i % 4 == 0) {
        $divisibleByFour[] = $i; 
    }
}

echo "Numbers between 200 and 250 divisible by 4: " . implode(", ", $divisibleByFour);
echo "<br> <br>";




#Task 12

$words = array("abcd", "abc", "de", "hjjj", "g", "wer");

$shortestLength = strlen($words[0]);
$longestLength = strlen($words[0]);

foreach ($words as $word) {
    $wordLength = strlen($word);  

    if ($wordLength < $shortestLength) {
        $shortestLength = $wordLength; 
    }

    if ($wordLength > $longestLength) {
        $longestLength = $wordLength;
    }
}

echo "The shortest array length is $shortestLength. The longest array length is $longestLength.";

echo "<br> <br>";




#Task 13

function randomNumbers($min, $max, $count) {

    $numbers = [];

    if ($count > ($max - $min + 1)) {

        echo "Range is too small to generate the requested number of unique values.";
        return;
    }

    while (count($numbers) < $count) {

        $randomNumber = rand($min, $max);
        if (!in_array($randomNumber, $numbers)) {
            $numbers[] = $randomNumber;
        }
    }

    return $numbers;
}

$min = 11;
$max = 20;
$count = 10;

$randomNumbers = randomNumbers($min, $max, $count);

echo "Generated unique random numbers: " . implode(" ", $randomNumbers);

echo "<br> <br>";



#Task 14

$array1 = array(2, 0, 10, 12, 6);

$nonZeroValues = array_filter($array1, function($value) {
    return $value != 0; 
});

$lowest = min($nonZeroValues);

echo "The lowest integer that is not 0 is: $lowest";

echo "<br> <br>";






#Task 15

$array = array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3);

$n = count($array);
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n - 1 - $i; $j++) {
        if ($array[$j] < $array[$j + 1]) {
            
            $temp = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $temp;
        }
    }
}

echo "Sorted Array: ";
print_r($array);

echo "<br> <br>";




#Task 16

function floorWithPrecision($number, $precision, $separator) {
    
    $flooredNumber = floor($number * pow(10, $precision)) / pow(10, $precision);
    
    $formattedNumber = number_format($flooredNumber, $precision, '.', $separator);
    
    return $formattedNumber;
}

$number = 123.45678;
$precision = 2;
$separator = ",";

echo "Floored number with precision: " . floorWithPrecision($number, $precision, $separator);

echo "<br> <br>";




#Task 17


$list1 = "4, 5, 6, 7";
$list2 = "4, 5, 7, 8";

$array1 = explode(", ", $list1);
$array2 = explode(", ", $list2);

$mergedArray = array_unique(array_merge($array1, $array2));

$mergedList = implode(", ", $mergedArray);

echo "Merged list with unique values: $mergedList";
echo "<br> <br>";



#Task 18

$array = array(4, 5, 6, 7, 4, 7, 8);

$uniqueArr = array_unique($array);

echo "Array without duplicates: " . implode(", ", $uniqueArr);
echo "<br> <br>";




#Task 19

function isSubset($array1, $array2) {

    foreach ($array2 as $value) {

        if (!in_array($value, $array1)) {
            
            return false; 
        }
    }
    return true; 
}

$array1 = array('a', '1', '2', '3', '4');
$array2 = array('a', '3');

if (isSubset($array1, $array2)) {

    echo "array2 is a subset array from array1";
} 
else {

    echo "array 2 is not a subset array from array1";
}

echo "<br> <br>";





?>