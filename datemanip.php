<?php 
    $title = 'Date Manipultion';
    include 'Include/link.php'
?>
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