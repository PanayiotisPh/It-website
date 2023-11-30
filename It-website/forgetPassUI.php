<?php
  session_start();  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="styleReview.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  </head>
  <body>
    
    <section class="header">
      <nav>
        <div class="nav-links">
          <ul>
            <li><a href="index.php">Home</a></li>
          </ul>
        </div>
      </nav>
   
      <form method="post" action="forgetPass.php">
        <div id="panel" class="panel-container">
          <h3>Please enter the email that you used to Sign Up.<br />
          After you click Send we will email you your password.</h3>
          <br>
          <input type="text" placeholder="Enter Email" name="email" required>
          <br>
          <label style = "color:red;font-family:verdana;font-size:100%;text-align:center;"> 
              <?php if (isset($_SESSION['failEmail'])){ echo $_SESSION['failEmail'];}?>
              <br>
          </label>
          <label style = "color:green;font-family:verdana;font-size:100%;text-align:center;"> 
              <?php if (isset($_SESSION['sucEmail'])){ echo $_SESSION['sucEmail'];}?>
              <br>
          </label>
          <?php if (isset($_SESSION['failEmail'])){ unset($_SESSION['failEmail']);}?>
          <?php if (isset($_SESSION['sucEmail'])){ unset($_SESSION['sucEmail']);}?>

      <button class="btn" id="send">Send</button>
    </div>

    </form>

  </section>  
  </body>
</html>