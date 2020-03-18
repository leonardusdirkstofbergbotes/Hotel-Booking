<?php 
    session_start();
    $_SESSION['from'] = $_GET['from'];
    $_SESSION['to'] = $_GET['to'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php

    require "config/hotel_info.php";

        $hotel1->display(); 
        $hotel2->display(); 
        $hotel3->display(); 
        $hotel4->display();
    
?>

</body>
</html>