<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




<?php 

      $scriptName = $_SERVER['SCRIPT_NAME'];
      $projectName = basename(dirname($scriptName));

      echo "Project Name: " . $projectName . "<br>";
      echo "Script Name: " . basename($scriptName) . "<br>";

?>

    
</body>

</html>