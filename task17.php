<?php header('X-XSSR-Protection:0');?>
<?php
    // Factorial numner calculation
    $n = 4;
    for($i=$n,$fact=1; $i>=1; $i--){
        $fact *= $i;
    }
    echo "$n Factorial Number is : $fact";
    echo "\n";
    function fact($n){
        if($n==0){
            return 1;
        }
        else{
            return $n* fact($n-1);
        }

    }
     print_r (fact(7));

     echo "<br>";
     ?>
     <!DOCTYPE html>
     <html lang="en">
     <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
     </head>
     <body>

        <p>
            <?php if(isset($_REQUEST['fname']) &&!empty($_REQUEST['fname'])) { ?>
            First Name: <?php echo $_REQUEST['fname'];?><br>
            <?php } ?>
            <?php if(isset($_REQUEST['lname']) &&!empty($_REQUEST['lname'])) { ?>
            Last Name: <?php echo $_REQUEST['lname'];?><br>
            <?php } ?>
        </p>
        <form method="POST">
            <label for="fname">First Name</label>
            <input type="text" name="fname" id="fname"><br><br>
            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="lname"><br><br>
            <button type="submit">Submit</button>
        </form>
        <?php
            $color=array(122, 244, 189, 290, 40);
            list($red,$green,$blue,$white,$yello) = $color;
            echo "Here is the color code have: $blue";
        
        
        ?>
     </body>
     </html>