<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while and dowhile loops</title>
</head>
<body>
    <h2>The while and dowhile loop</h2> -- these are called the CONDITION CONTROL loops
    <!-- Because they act based on a given CONDITION -->
    <h2>while loop</h2> -- this is a PRE-CONDITION loop
    <?php
        $grade = 0;
        while($grade < 7){
            echo '<p> Less than Seven</p>';
            $grade++;
        }
        echo 'Not Less than Seven';

    ?>
    <h2>Do-while loop</h2> -- this is a POST-CONDITION loop
    <?php
        $grade = 0;
        do{
            echo '<p> Less than Seven using the do-while loop</p>';
            $grade++;
        }while($grade < 7);
        echo 'Exit loop'
        

    ?>
</body>
</html>