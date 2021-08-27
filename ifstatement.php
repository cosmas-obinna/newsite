<?php
    $title = 'If Statement';
     include 'Include/link.php'
?>
    <?php
       echo '<h1>IF FUNCTION </h1>';
    $grade = 50;
    if($grade >= 50){
        echo  '<h3 style="color: green">You passed!</h3>';
    }
    else{
        echo '<h3 style="color: red">You failed!</h3>';
    }
    // nested if statement
    $mark = 'A';
    if($mark == 'A'){
        echo '<h3 style="color: green">Excellent performance!</h3>';
    }
    elseif($mark == 'B'){
        echo '<h3 style="color: blue">Good performance!</h3>';
    }
    else{
        '<h3 style="color: red">Poor performance!</h3>';
    }
    ?>
    ?>
    <?php
        include 'include/link.php'
    ?>
</body>
</html>