<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and Time Manipulation</title>
</head>
<body>
    <h1>Date and Time Maipilation in php</h1>
    <?php
        // to get a time stamp
        $datenow = getdate();
        echo "Today's date is:"."<br/>";
        echo $datenow['mday']."<br/>";
        echo "Date is: ". $datenow['mday']."<br/>"; // mday gets the day of the month
        echo "Month is: ". $datenow['mon']."<br/>"; // mon is for the month
        echo "Year is: ". $datenow['year']."<br/>"; // year is for the year
        // combining them to get today's date will be
        echo "Today's date is: ". $datenow['mday']."/".$datenow['mon']."/".$datenow['year'];

        print date("d/m/Y g:i:s a", time()). "<br/>";
        print date("N j of F Y, g:i:s A",time())."<br/>";
    ?>
    ?>
    <?php
        include 'include/link.php'
    ?>
    
</body>
</html>