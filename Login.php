<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <h2>Login Form</h2>

    <form action="" method="POST"> 

    
        <input type="email" placeholder="Enter your email" name="email" id="email" required><br><br>
        
        <input type="password" placeholder="Enter your Password" name="password" id="password" required><br><br>
        
        <button type="submit">Submit</button>

    </form>


    <?php

    $requestMethod = $_SERVER['REQUEST_METHOD'];

    if ($requestMethod === 'POST'){

        $email =isset( $_POST['email']) ? $_POST['email'] : null;
        $pass = isset($_POST['password']) ? $_POST['password'] : null;

        echo "<h2>Data Sent Using $requestMethod Method</h2>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Password: " . htmlspecialchars($password) . "<br>";

        
    }
    elseif ($requestMethod === 'GET') { 

        $email = isset($_GET['email']) ? trim($_GET['email']) : null;
        $password = isset($_GET['password']) ? trim($_GET['password']) : null;
    
        echo "<h2>Data Sent Using $requestMethod Method</h2>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Password: " . htmlspecialchars($password) . "<br>";

    } 
    else {

        echo "<h2>Invalid Request Method</h2>";
        echo "Please use GET or POST to send data.";
    }



    ?>
</body>
</html>