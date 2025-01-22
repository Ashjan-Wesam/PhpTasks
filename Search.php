<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>

   
    <h1>Search Engine</h1>
    <form action="" method="post">
        <input type="text" name="url" placeholder="search">
        <button type="submit" name="submit-search">GO</button>
    </form>

    
    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $url = trim($_POST['url']);
        
        if (!empty($url) && (filter_var($url, FILTER_VALIDATE_URL))) {
        
            #Redirect to page with the URL
            header("Location: $url");
            exit;
        } 
        else{
            echo "<p>Invalid URL. Please enter a valid URL starting with http:// or https://</p>";
        }
    }

    ?>

    
    
</body>

</html>