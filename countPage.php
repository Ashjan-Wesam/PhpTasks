<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




<?php 

     session_start();

     if (!isset($_SESSION['refresh_count'])) {
   
         $_SESSION['refresh_count'] = 0;  
     }

     $_SESSION['refresh_count']++;
     echo "Number of refresh: " . $_SESSION['refresh_count'];
   
?>
    
</body>
</html>