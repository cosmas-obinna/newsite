<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>
<body>
    <h1>String Manipulation</h1>
    <!-- in php, concatination is achieved with the use of a dot (.) -->
    <?php
        $word1 = "Cosmas";
        $word2 = " Mechanical Engineer";
        $phrase1 = " is a certified";
        $phrase2 = " who stops at nothing in achieving a set goal";
        echo $word1 . $phrase1 . $word2 . $phrase2;
        echo "<p>As a $word2 you are trained to be good in many things</p>";
        echo $word1 . "as a" . $word2 . "is an example of God making somwthing great from nothing";
        echo '<p>$word1 . "as a" . $word2 . "is an example of God making somwthing great from nothing, ose!"</p>';


    ?>
</body>
</html>