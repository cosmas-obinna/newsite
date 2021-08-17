<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAYS</title>
</head>
<body>
    <h1>Array</h1>
    <!-- variables store just one value at a time, whereas arrays store multiple values at a time -->
    <?php
        $numbers = array(1,2,3,4,5,6,7,8,9,10,11,2,13,13,14,15,14,4,45);
        // to print an item in your array you have to call it by indexing
        // note that php is a zero index language
        echo $numbers[5];

        // also you can count the number of items in your array
        // note that arrays can be a combination of numbers and alphabets

        $size = count($numbers);
        echo "<p>The size of my array is: $size </p>";
        // to print out everything one after another without writing them one by one
        for($count = 0;$count < $size;$count++){
            echo "<p>$numbers[$count]</p>";
        }
    ?>
</body>
</html>