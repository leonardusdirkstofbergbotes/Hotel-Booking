<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hotel Monkey</title>
    <link rel="icon" type="image/gif/png" href="./images/monkey.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/styles_hotel.css">
</head>
<body>

<?php
$people = $_SESSION["people"];
    require "include/hotel_info.php";

    //display() function will echo all the info of the different hotels
        $hotel1->display(); 
        $hotel2->display(); 
        $hotel3->display(); 
        $hotel4->display();
    
?>

</body>
</html>