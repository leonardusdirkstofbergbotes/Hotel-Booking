<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Monkey Confirm</title>
    <link rel="stylesheet" href="css/final_page.css">
</head>
<body>

<?php include "include/hotel_info.php"; ?>

<div class="contain mar_pad">

<!--Button Div-->
<div class="inside">
    <form class="form_button " action="email_handler.php"> 
        <button class=" button btn-one"> <span>Confirm & Book</span> </button>
        <button class="btn-img"><img src="./images/stars.png"></button>
    </form>
    <form class="form_button " action="calc.php"> 
        <button class="button btn-two"> <span>Cancel & Go-back</span>  </button>
    </form>
</div>

    <!--info Div -->
    <h1 class="font_larger"> Thank you <?php echo $_SESSION['username'];?>  <?php echo $_SESSION['surname']; ?> </h1>

    <p class="info"> Visiting:<?php 

            switch ($_POST['hotel_id']) {
            case '1':
                echo "<b>";
                echo $hotel1->name;
                echo "</b>";
                break;
            case '2':
                echo "<b>";
                echo $hotel2->name;
                echo "</b>";
                break;
            case '3':
                echo "<b>";
                echo $hotel3->name;
                echo "</b>";
                break;
            case '4':
                echo "<b>";
                echo $hotel4->name;
                echo "</b>";
                break;
            } ?> 
        
         </p>
        
    <p class="info">Date:<strong><?php echo $_SESSION['from'];?></strong> until <strong><?php echo $_SESSION['to']; ?></strong></>

    <p class="info"> A total cost of R<?php 
            switch ($_POST['hotel_id']) {
            case '1':
                echo "<b>";
                echo $hotel1->total_cost;
                echo "</b>";
                break;
            case '2':
                echo "<b>";
                echo $hotel2->total_cost;
                echo "</b>";
                break;
            case '3':
                echo "<b>";
                echo $hotel3->total_cost;
                echo "</b>";
                break;
            case '4':
                echo "<b>";
                echo $hotel4->total_cost;
                echo "</b>";
                break;
            } ?> 
        is required to make the booking. </p>

        <p class="info"> If this information is correct you can go ahead and click the Book button and an email will be sent to <?php echo $_SESSION['email'] ?> </p>



   

</div>


    
</body>
</html>