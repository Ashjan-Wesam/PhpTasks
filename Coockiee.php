<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

$cookie_name = "user";
$cookie_value = "John Doe";
$expiry_time = time() + (86400 * 30); 
$cookie_path = "/"; 
$domain = ""; 
$secure = false; 
$httponly = true; 

setcookie($cookie_name, $cookie_value, $expiry_time, $cookie_path, $domain, $secure, $httponly);

setcookie("session_id", "ABC123", $expiry_time, "/", "", true, true);
setcookie("preferences", "dark_mode", $expiry_time, "/", "", false, false);

echo "Cookies have been set.<br>";

if (!empty($_COOKIE)) {
    echo "<h3>All Cookies:</h3>";
    foreach ($_COOKIE as $name => $value) {
        echo "$name: $value<br>";
    }
} else {
    echo "No cookies found.<br>";
}

setcookie($cookie_name, "", time() - 3600, $cookie_path);
setcookie("session_id", "", time() - 3600, $cookie_path);
setcookie("preferences", "", time() - 3600, $cookie_path);

echo "<br>Cookies have been deleted.<br>";


?>

    
</body>
</html>