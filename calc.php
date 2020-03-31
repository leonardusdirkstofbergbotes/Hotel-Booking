<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compare Hotels</title>
    <!--icon for the title bar -->
    <link rel="icon" type="image/png" href="images/icons/hotel.png">
    <!-- For apple devices -->
    <link rel="apple-touch-icon" type="image/png" href="images/icons/hotel.png"/>

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php

    require "include/hotel_info.php";

    //display() function will echo all the info of the different hotels
        $hotel1->display(); 
        $hotel2->display(); 
        $hotel3->display(); 
        $hotel4->display();
    
?>

</body>
</html>