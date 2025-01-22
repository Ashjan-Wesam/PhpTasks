<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $file = 'visitors.txt';

    if (!isset($_COOKIE['visitor'])) {

        $count = (int) file_get_contents($file);  
        $count++; 
    
        file_put_contents($file, $count);
    
        setcookie('visitor', 'visited', time() + 3600 * 24 * 30);  
    }
    
    $count = (int) file_get_contents($file);
    
    echo "Visitors : " . $count;
    ?>
</body>
</html>