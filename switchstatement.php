<?php 
    $title = 'Switch Statement';
    include 'Include/link.php'
?>
<body>
    <h1>Switch Statement</h1>
    <?php
        $grade = 'A';
        switch($grade){
            case 'A':
                echo '<h2 style ="color: purple">Excellent Performance!</h2>';
                break;
            case 'B': 
                echo '<h2 style ="color: yellow">Good Performance!</h2>';
                break;
            default:
                echo '<h2 style ="color: purple">Poor Performance!</h2>';
                break;   

        }
    ?>
    <?php
        include 'include/link.php'
    ?>
</body>
</html>