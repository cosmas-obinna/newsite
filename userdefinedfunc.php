<?php 
    $title = 'User Defined Function';
    include 'Include/link.php'
?>
    <h1>User Defined Function</h1>
    <?php
        /* defining a function */
        function submessage(){
            echo "The Record is successfully Submitted";
    }
        // calling a function

    submessage()."<br/>";
    echo "<hr/>";
    submessage();
    
    // functions with parameters

    function addnumbers($num1,$num2){
        $sum = $num1 + $num2;
        echo "The sum of $num1 and $num2 is: $sum <br/>";
    }
    addnumbers(37,78);

    ?>
    <?php
        include 'include/link.php'
    ?>
</body>
</html>