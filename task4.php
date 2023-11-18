<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>problem no 4</title>
</head>
<body>
    <!--4. Create a simple HTML form and accept the user name and display the name through 
    PHP echo statement.-->
    <form method="post">
        <h2>Please input your name:</h2>
        <input type="input" name="username">
        <input type="submit" value="submit name">
    </form>
    <?php
        $var = $_POST['username'];
        echo "<h3>Hello $var</h3>";
    
    ?>
</body>
</html>