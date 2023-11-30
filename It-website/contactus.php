<?php
  session_start();  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="styleContactUs.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/aee77bfa01.js" crossorigin="anonymous"></script>
</head>
<body>


<section>
    <div class="hero">

        <nav>
            <div class="nav-links">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="bookaserviceCalendar.html">Book a Service</a></li>
                    <li><a href="review.php">Crew Ratings</a></li>
                </ul>
            </div>
        </nav>

        <form method="post" action="contactusemail.php">  <!-- ADD EMAIL -->
            <div class="row2">
                <div class="input-group">
                <input type="text" id="name" name="name" required>
                <label for="name"><h4><i class="fa-regular fa-user"></i>Your Name</h4></label>
            </div>
            <div class="input-group">
                <input type="text" id="surname" name="surname" required>
                <label for="surname"><h4><i class="fa-regular fa-user"></i>Your Surname</h4></label>
            </div>
            </div>
            
            <div class="input-group">
                <input type="email" id="email" name="email" required>
                <label for="email"><h4><i class="fa-regular fa-envelope"></i>Email</h4></label>
            </div>
            <div class="input-group">
                <textarea type="message" name="text" rows="8" style="resize: none"></textarea>
                <label for="message"><h4><i class="fa-regular fa-comment"></i>Your Message</h4></label>
            </div>
            <label style = "color:red;font-family:verdana;font-size:100%;text-align:center;"> 
              <?php if (isset($_SESSION['failEmailCont'])){ echo $_SESSION['failEmailCont'];}?>
              <br>
            </label>
            <label style = "color:green;font-family:verdana;font-size:100%;text-align:center;"> 
              <?php if (isset($_SESSION['sucEmailCont'])){ echo $_SESSION['sucEmailCont'];}?>
              <br>
            </label>
            <?php if (isset($_SESSION['failEmailCont'])){ unset($_SESSION['failEmailCont']);}?>
            <?php if (isset($_SESSION['sucEmailCont'])){ unset($_SESSION['sucEmailCont']);}?>
            <button type="submit"><h4>Submit <i class="fa-regular fa-paper-plane"></h4></i></button>
            
        </form>
    </div>
</section>
</body>
</html>