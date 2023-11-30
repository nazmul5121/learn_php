<?php 
    
if(isset($_POST["submit"])){
    var_dump($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="display">
            <input type="text" class="maininput" name="output" value="">
        </div>
        <div class="calculator_button">
            <form method="POST" class="buttons" name="button">
                <input type="text" name="value1" placeholder="insert digit">
                <input type="text" name="action" placeholder="Insert action like +,-,/,*">
                <input type="text" name="value2" placeholder="insert digit">
                <input type="button" value="calculate" name="submit">
            </form>
        </div>
    </div>
</body>
</html>