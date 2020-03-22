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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Monkey</title>
    <!--google font link-->
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--Css stylesheet-->
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>
<body>
    <!--VIDEO-->
    <video autoplay muted loop class="myVideo">
        <source src="Landing.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
      </video>
        
    <div class="container">

        <form method="post">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
      
           <label for="lname">Last Name</label>
           <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
          
          <label for="fname">Email Address</label>
          <input type="text" id="fname" name="email" placeholder="Your Email.." required>

          <label for="In">Book In date</label>
          <input type="date" id="datein" name="in" required>

          <label for="Out">Book out date</label>
          <input type="date" id="dateout" name="out" required>
    
          <button class="btn" type="submit" name="lets_start"><span>Submit</span></button>
        </form>

    </div>
    
    <script>
    datein.min = new Date().toISOString().split("T")[0];
    dateout.min = new Date().toISOString().split("T")[0];
    
    </script>
</body>
</html>