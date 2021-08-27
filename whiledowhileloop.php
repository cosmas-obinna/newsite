<!DOCTYPE html>
<?php
    $title = 'While-DoWhile Statement';
    include 'Include/link.php'
?>
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
    <?php
        include 'include/link.php'
    ?>
</body>
</html>