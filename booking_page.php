<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
    

<?php

    require "include/hotel_info.php";
    
    switch ($_POST['hotel_id']) {
        case '1':

            $hotel1->display(); 
            break;
        
        case '2':
            $hotel2->display(); 
            break;

        case '3':
            $hotel3->display(); 
            break;

        case '4':
            $hotel4->display(); 
            break;
    }
?>

<script>
$('#view_more').hide();

</script>

</body>
</html>