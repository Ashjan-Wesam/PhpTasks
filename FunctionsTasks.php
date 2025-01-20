<?php

#Task 1

function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {

        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

$number = 3;

if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}

echo "<br><br>";




#Task 2

function reverseString($str) {

    return strrev($str);
}

$input = "remove";

$reversed = reverseString($input);

echo "Reversed string: $reversed";

echo "<br><br>";






#Task 3

function isAllLowerCase($str) {
    return ctype_lower($str);
}

$input = "remove";

if (isAllLowerCase($input)) {
    echo "Your String is Ok";
}

else {
    echo "Your String contains uppercase letters";
}


echo "<br><br>";





#Task 4

function swap(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$x = 12;
$y = 10;

echo "Before swapping: x = $x, y = $y\n";

swap($x, $y);

echo "After swapping: x = $x, y = $y\n";

echo "<br><br>";





#Task 5

echo "<br><br>";




#Task 6

function isArmstrong($num) {
    $sum = 0;
    $temp = $num;
    $numOfDigits = strlen($num);  

    while ($temp != 0) {
        $digit = $temp % 10;  
        $sum += pow($digit, 3);  
        $temp = (int)($temp / 10);  
    }

    return $sum == $num;
}

$input = 407;

if (isArmstrong($input)) {
    echo "$input is an Armstrong Number";
} else {
    echo "$input is not an Armstrong Number";
}

echo "<br><br>";




#Task 7

function isPalindrome($str) {

    $str = preg_replace("/[^A-Za-z0-9]/", "", $str);
    $str = strtolower($str);

    return $str == strrev($str);
}

$input = "Eva, can I see bees in a cave?";

if (isPalindrome($input)) {
    echo "Yes it is a palindrome";
} else {
    echo "No it is not a palindrome";
}

echo "<br><br>";






#Task 8

function removeDuplicates($array) {
    return array_unique($array);  
}

$input = [1, 2, 3, 4, 2, 5, 3, 6, 4];

$output = removeDuplicates($input);

echo "Array after removing duplicates: ";
print_r($output);






echo "<br><br>";


?>
?>