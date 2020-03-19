<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm details</title>
    <link rel="stylesheet" href="css/final_page.css">
</head>
<body>

<?php include "include/hotel_info.php"; ?>

<div class="wrapper mar_pad">

    <h1 class="font_larger"> Thank you <?php echo $_SESSION['username'];?>  <?php echo $_SESSION['surname']; ?> </h1>

    <p class="font_large"> You have currently selected to visit the <?php 

            switch ($_POST['hotel_id']) {
            case '1':
                echo $hotel1->name;
                break;
            case '2':
                echo $hotel2->name;
                break;
            case '3':
                echo $hotel3->name;
                break;
            case '4':
                echo $hotel4->name;
                break;
            } ?> 
        
        Hotel from </p>
        
    <p class="font_larger"><strong><?php echo $_SESSION['from'];?></strong> until <strong><?php echo $_SESSION['to']; ?></strong></>

    <p class="font_large"> A total cost of R<?php 
            switch ($_POST['hotel_id']) {
            case '1':
                echo $hotel1->price;
                break;
            case '2':
                echo $hotel2->price;
                break;
            case '3':
                echo $hotel3->price;
                break;
            case '4':
                echo $hotel4->price;
                break;
            } ?> 
        is required to make the booking. </p>

        <p class="font_large"> If this information is correct you can go ahead and click the Book button and an email will be sent to <?php echo $_SESSION['email'] ?> </p>



    <form class="form_button" action="email_handler.php"> 
        <button class="mar_pad_small"> Confirm & Book </button>
    </form>

    <form class="form_button" action="calc.php"> 
        <button class="mar_pad_small"> Cancel & Go-back  </button>
    </form>

</div>



    
</body>
</html>