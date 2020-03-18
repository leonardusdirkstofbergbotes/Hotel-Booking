<?php 
    session_start();
    $_SESSION['from'] = $_POST['in'];
    $_SESSION['to'] = $_POST['out'];
    $_SESSION['username'] = $_POST['firstname'];
    $_SESSION['surname'] = $_POST['lastname'];
    $_SESSION['email'] = $_POST['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compare Hotels</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php

    require "include/hotel_info.php";

        $hotel1->display(); 
        $hotel2->display(); 
        $hotel3->display(); 
        $hotel4->display();
    
?>

</body>
</html>