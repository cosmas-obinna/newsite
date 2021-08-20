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
    <!-- concatenation of strings -->
    <?php
        $word1 = "Cosmas";
        $word2 = " Mechanical Engineer";
        $phrase1 = " is a certified";
        $phrase2 = " who stops at nothing in achieving a set goal";
        echo $word1 . $phrase1 . $word2 . $phrase2;
        echo "<p>As a $word2 you are trained to be good in many things</p>";
        echo $word1 . " as a" . $word2 . ", is an example of God making something great from nothing";"<p/>";
        echo $word1 . " as a" . $word2 . " is an example of God making something great from nothing, ose!";

    ?>
    <hr/>
    <!-- string transformation -->
    <?php
    $name = "zach williams";
    echo "upper case first alphabet of the first word" . ucfirst($name) . "<br/>";
    // ucfirst changes the first alphabet of the first word to upper case
    echo 'upper case first alphabet of all words: ' . ucwords($name) . '<br/>';
    echo ' everything to upper case: ' . strtoupper($name) . '<br/>';
    echo 'everthing to lower case: '.strtolower($word1). '<br/>';
    echo '</hr>';
    echo 'repeat string: '.str_repeat($name,10).'<br/>';
    echo 'repeat string: '.strtoupper(str_repeat($name,10)).'<br/>';
    echo 'Get a substring: '. substr($name,5,10);
    echo 'Get position of string: '. strpos($name,'m').'<br/>'; // remeber that php is zero indexing language
    echo 'Length of the string is: '. strlen($name);
    echo 'Replace first name with Bash: '.str_replace('Zach','Bash', $name);

    // trim: this can be done in three different ways;
    // full trim: trim()
    // left trim: ltrim()
    // right trim: rtrim()
    $cluster = "  cluster seven Enugu";
    echo $cluster.'<br/>';
    echo " left trim: ".ltrim($cluster);

    // to replace 
    echo "replace Enugu in cluster as Lagos: ".str_replace('Enugu','Lagos',$cluster). '<br/>'




    ?>
</body>
</html>