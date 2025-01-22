<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>To-Do List</h1>
    <form method="POST" >
        <input type="text" name="task" placeholder="Enter a new task" required>
        <button type="submit">Add Task</button>
    </form>

    <?php 

    session_start();

    if (!isset($_SESSION['tasks'])) {
        $_SESSION['tasks'] = [];
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['task'])) {

        $task = trim($_POST['task']);

        if (!empty($task)) {
            $_SESSION['tasks'][] = $task;
        }
    }

    if (isset($_GET['delete'])) {
        $index = (int)$_GET['delete'];
        if (isset($_SESSION['tasks'][$index])) {
             unset($_SESSION['tasks'][$index]);

        $_SESSION['tasks'] = array_values($_SESSION['tasks']);
        }
    }

    if (!empty($_SESSION['tasks'])) {
        echo "<ul>";
        foreach ($_SESSION['tasks'] as $index => $task) {
               echo "<li>$task <a href='?delete=$index'><button class='delete-button'>Delete</button></a></li>";
        }
        echo "</ul>";
    }
    else {
    echo "<p>No tasks yet. Add a new task!</p>";
    }


?>
    
    
    
</body>
</html>