<?php 
    session_start();
    if (isset($_POST['lets_start'])) {
        $_SESSION['from'] = $_POST['in'];
        $_SESSION['to'] = $_POST['out'];
        $_SESSION['username'] = $_POST['firstname'];
        $_SESSION['surname'] = $_POST['lastname'];
        $_SESSION['email'] = $_POST['email'];
        header("Location: calc.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hotel Monkey</title>
    <link rel="icon" type="image/gif/png" href="./images/monkey.png">
    <!--google font link-->
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
    <!--Css stylesheet-->
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script></head>
</head>
<body>
    <!--VIDEO-->
    <video autoplay muted loop class="myVideo">
        <source src="vid/Landing.mp4" type="video/mp4"  >
        Your browser does not support HTML5 video.
    </video>
        
        <!--FORM-->
    <div class="container">

        <form id="myform">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
      
           <label for="lname">Last Name</label>
           <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
          
          <label for="fname">Email Address</label>
          <input type="email" id="fname" name="email" placeholder="Your Email.." required>

          <label for="In">Book In date</label>
          <input type="date" id="datein" name="in" required>

          <label for="Out">Book out date</label>
          <input type="date" id="dateout" name="out" required>
          <!-- <button onclick="check()"> check </button> -->
          <button class="btn" id="buton" name="lets_start" onclick="check()"><span>View Hotels</span></button>
        </form>

    </div>
    
<script>


    datein.min = new Date().toISOString().split("T")[0];
    dateout.min = new Date().toISOString().split("T")[0];

    function check() {
        var x = new Date(document.getElementById("datein").value);
        var y = new Date(document.getElementById("dateout").value);
        var days =  Math.floor((y - x) /(1000*60*60*24));
    
        if (days == 0) {
            alert("you must select more than 0 days");
        } 
        else if (days > 0) {
            document.getElementById("myform").method = "post";
        }
    }

    $("#buton").click(function() {
        console.log('success');
    $("input").addClass("email");
});

    </script>
</body>
</html>