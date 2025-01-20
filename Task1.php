<?php 

#Task 1

$str = 'Hello World';

# a
echo strtoupper($str) , "<br>";

#b
echo strtolower($str)  , "<br>";

#c
echo ucfirst($str)  , "<br>";

#d
echo lcfirst($str)  , "<br>";


#Task 2

$numericString = '085119';

$hours = substr($numericString, 0, 2);   
$minutes = substr($numericString, 2, 2); 
$seconds = substr($numericString, 4, 2); 

$dateFormat = $hours . ':' . $minutes . ':' . $seconds;

echo $dateFormat . "<br>"; 

#Task 3

$sentence = "I am a full stack developer at orange coding academy";
$word = "Orange";

if (stripos($sentence, $word) !== false) {
    echo "Word Found!";
} 
else {
    echo "Word Not Found!";
}


#Task 4

$url = "www.orange.com/index.php";
echo basename($url);

#Task 5

$emailAddress = "info@orange.com";
echo strstr($emailAddress, '@', true);

#Task 6

$email = "info@orange.com";
echo substr($email, -3);



#Task 7

$characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

$passwordLength = 8; 
$password = '';

for ($i = 0; $i < $passwordLength; $i++) {

    $index = mt_rand(0, strlen($characters) - 1);
    $password .= $characters[$index];
}

echo "Generated Password: " . $password;





#Task 8

$sentence = "That new trainee is so genius.";
$newWord = "Our";

$result = preg_replace('/^\w+/', $newWord, $sentence);

echo $result; 





#Task 9


$String1 = 'dragonball';
$String2 = 'dragonboll';

$arr1 = str_split($String1);
$arr2 = str_split($String2);

for($i = 0 ; $i < count($arr1) ; $i++){

    if($arr1[$i] != $arr2[$i]){

        echo "The first difference between the two strings is at indwex:" . $arr1[$i] ;
        break;
    }

}




#Task 10

$string = "Twinkle, twinkle, little star.";

$array = explode(" ", $string);

var_dump($array);





#Task 11

$ch = 'z';
$next_ch = ++$ch; 

if (strlen($next_ch) > 1) { 
 $next_ch = $next_ch[0];
}
echo $next_ch;



#Task 12

$string = "The brown fox";

$insert = "quick";

$position = 4;  
$result = substr_replace($string, $insert . " ", $position, 0);

echo $result; 





#Task 13

$number = '0000657022.24';
$cleanedNumber = str_replace('0', '' , $number);
echo $cleanedNumber; 


#Task 14

$string = 'The quick brown fox jumps over the lazy dog';

$removeWord = 'fox';
$result = str_replace($removeWord, '', $string);

$result = trim(preg_replace('/\s+/', ' ', $result));
echo $result;


#Task 15

$string = 'The quick brown fox jumps over the lazy dog---';

$result = rtrim($string, '-');

echo $result; 


#Task 16

$string = '\"\1+2/3*2:2-3/4*3';
$result = preg_replace('/[^a-zA-Z0-9 ]/', '', $string);
echo $result;


#Task 17

$string = 'The quick brown fox jumps over the lazy dog';

$words = explode(' ', $string);
$firstFiveWords = implode(' ', array_slice($words, 0, 5));

echo $firstFiveWords;




#Task 18

$string = '2,543.12';
$result = str_replace(',', '', $string);

echo $result; 


#Task 19

for ($i = ord('a'); $i <= ord('z'); $i++) {

    echo chr($i) . ' ';

}





?>
