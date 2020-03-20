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
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>
<body>
    
    <video autoplay muted loop class="myVideo">
        <source src="video2.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
      </video>
        
    <div class="container">

        <form method="post">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">
      
           <label for="lname">Last Name</label>
           <input type="text" id="lname" name="lastname" placeholder="Your last name..">
          
          <label for="fname">Email Address</label>
          <input type="text" id="fname" name="email" placeholder="Your Email..">

          <label for="In">Book In date</label>
          <input type="date" id="date" name="in">

          <label for="Out">Book out date</label>
          <input type="date" id="date" name="out">
    
          <button type="submit" name="lets_start">Submit</button>
        </form>

    </div>
    
</body>
</html>