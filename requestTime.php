<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

       $requestTime = $_SERVER['REQUEST_TIME'];

       $formattedTime = date('h:i:sa', $requestTime);

       echo "Page Requested Time: " . $formattedTime;
?>
</body>
</html>