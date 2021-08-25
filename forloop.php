<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop</title>
</head>
<body>
    <h1>FOR LOOP</h1>
    <!-- For loop is sometimes refered to as a COUNTER CONTROL LOOP;
    meaning it does something for a certain number of times -->
    <?php
        for($count = 0;$count < 10;$count++){
            echo '<p>Hello World!</p>'; // the <p></p> is to be able to put them in a separate line
        };

        for($count = 0;$count<10;$count++){
            echo "<p> The count is: $count</p>";
        }

    ?>
    ?>
    <?php
        include 'include/link.php'
    ?>
</body>
</html>