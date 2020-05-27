<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hotel Monkey Confirm</title>
    <link rel="icon" type="image/gif/png" href="./images/monkey.png">
    <link rel="stylesheet" href="css/final_page.css">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans|Lora|Noto+Sans+JP|PT+Sans|Playfair+Display&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

<?php 
    $people = $_SESSION["people"];
    include "include/hotel_info.php"; 
?>

    <div class="contain mar_pad">

    <div id="loader"> <img src="load.gif"> </div>

        <!--info Div -->
        <h1 class="font_larger"> Thank you <br/><?php echo $_SESSION['username'];?>  <?php echo $_SESSION['surname']; ?><br/> </h1>
    
        <p class="info">For</p>
        <p class="info"> Choosing:<br/> <?php 

        //depending on which hotel the user selected
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
            
        <p class="info">Book in date: <strong><br/><?php echo $_SESSION['from'];?><br/></strong> until <strong><br/><?php echo $_SESSION['to'];?></strong><br/>Total of<br/> <strong>(<?php echo $GLOBALS["diff"]; ?>) days</strong></p>

        <p class="info"> A total cost of R<?php 

        //depending on which hotel the user selected
            switch ($_POST['hotel_id']) {
            case '1':
                echo "<b>";
                echo $hotel1->total_cost;
                echo "</b>";
                echo "<br/>";
                echo " @ R";
                echo "<b>" .$hotel1->price . "</b>";
                echo " per day";
                echo "<br/>";
                
                break;
            case '2':
                echo "<b>";
                echo $hotel2->total_cost;
                echo "</b>";
                echo "<br/>";
                echo " @ R";
                echo "<b>" .$hotel2->price . "</b>";
                echo " per day";
                echo "<br/>";
                break;
            case '3':
                echo "<b>";
                echo $hotel3->total_cost;
                echo "</b>";
                echo "<br/>";
                echo " @ R";
                echo "<b>" .$hotel3->price . "</b>";
                echo " per day";
                echo "<br/>";
                break;
            case '4':
                echo "<b>";
                echo $hotel4->total_cost;
                echo "</b>";
                echo "<br/>";
                echo " @ R";
                echo "<b>" .$hotel4->price . "</b>";
                echo " per day";
                echo "<br/>";
                break;
            } ?> 
            is required to make the booking. </p>

            <p class="info"> If this information is correct you can go ahead and click the<br/> Book button and an email will be sent to <b class="resize"><?php echo $_SESSION['email'] ?></b> </p>
                
                <!--Buttons-->
                <button class="btn button" onclick="myAjax()">Book</button>
            
        
        <form action="calc.php"> 
            <button class="button btn"> <span>Cancel & Go-back</span>  </button>
        </form>

    </div>

    
    <script>
    
$(document).ready(function () {
    $('#loader').hide();
    $(document).ajaxStart(function () {
        $("#loader").show();
    }).ajaxStop(function () {
        $("#loader").hide();
    });
});

function myAjax() {
$.ajax( { type : 'POST',
          data : { },
          url  : './email_handler.php',              // <=== CALL THE PHP FUNCTION HERE.
          success: function ( data ) {
            swal("Thank You!", "A email was sent for confirmation!", "success");;               // <=== VALUE RETURNED FROM FUNCTION.
          },
          error: function ( xhr ) {
            alert( "error" );
          }
        });
}

    </script>
  
</body>
</html>