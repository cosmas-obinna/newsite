<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statement</title>
</head>
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