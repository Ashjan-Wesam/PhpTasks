<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1>Calculator</h1>

<form method="POST" >

    <input type="number" step="any" name="num1" id="num1" placeholder="Enter First Number:" required>

    <br><br>

    <input type="number" step="any" name="num2" id="num2" placeholder="Enter Second Number:" required>

    <br><br>

    <label for="operation">Select Operation:</label>

    <select name="operation" id="operation">

        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>

    </select>

    <br><br>

    <button type="submit">Calculate</button>
</form>
    
<?php 

$requestMethod = $_SERVER['REQUEST_METHOD'];
if ($requestMethod === 'POST') {

    $num1 = isset($_POST['num1']) ? (float)$_POST['num1'] : 0;
    $num2 = isset($_POST['num2']) ? (float)$_POST['num2'] : 0;
    $operation = isset($_POST['operation']) ? $_POST['operation'] : '';

    $result = null;

    switch ($operation) {

        case 'add':
            $result = $num1 + $num2;
            break;

        case 'subtract':
            $result = $num1 - $num2;
            break;

        case 'multiply':
            $result = $num1 * $num2;
            break;

        case 'divide':

            #Check if the seconed number is not zero
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } 
            else {
                echo "<p>Cannot divide by zero</p>";
            }
            break;

        default:
            echo "<p>Invalid operation selected</p>";
            break;
    }

    if ($result !== null) {

        echo "<h2>Result: $result</h2>";
    }


}
?>
</body>
</html>