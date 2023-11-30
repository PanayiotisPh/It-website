<?php
  include('connection.php');
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
            <li><a href="home.php">Home</a></li>
            <li><a href="bookaserviceCalendar.html">Book a service</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>
        </div>
      </nav>
   
    <form action="rating.php" method="post">
      <div id="panel" class="panel-container">
          <h3
          >How satisfied are you with our<br />
          customer support performance?</h3>
          <div class="ratings-container" >
            <label for=""><h4>Choose an IT to rate:</h4></label>
        <select name="it" class="selectBox" required>
          <option value="1">Giorgos Andreou</option>
          <option value="2">Kostas Fotiou</option>
          <option value="3">Maria Georgiou</option>
        </select>
        
      </div>
        
        <div class="rate" >
          <input type="radio" id="star5" name="rate" value="5" />
          <label for="star5" title="text">5 stars</label>
        <input type="radio" id="star4" name="rate" value="4" />
        <label for="star4" title="text">4 stars</label>
        <input type="radio" id="star3" name="rate" value="3" />
        <label for="star3" title="text">3 stars</label>
        <input type="radio" id="star2" name="rate" value="2" />
        <label for="star2" title="text">2 stars</label>
        <input type="radio" id="star1" name="rate" value="1"/>
        <label for="star1" title="text">1 star</label>
      </div>
      <button class="btn" id="send" name="send">Send review</button>
    </form>
  
    <div class="results">

      <h4>IT ratings from our recent customers: </h4>
      <table class="no-spacing"  >
      <tr>
        <td><span class="material-symbols-outlined">
          account_circle
        </span>
      </td>
      <td>
        <p> Giorgos Andreou: </p>
      </td>
      <td>
        <h4><?php $query = mysqli_query($con, "SELECT ROUND(AVG(review.Rating),1) AS Rating 
                          FROM review 
                          WHERE review.itID = 1
                          ORDER BY review.Rating");
                  $row = mysqli_fetch_row($query);
                  echo $row[0]; 
        ?></h4>
      </td>
    </tr>
    <tr>
      <td><span class="material-symbols-outlined">
        account_circle
      </span>
    </td>
    <td>
      <p> Kostas Fotiou: </p>
      
    </td>
    <td>
    <h4><?php $query = mysqli_query($con, "SELECT ROUND(AVG(review.Rating),1) AS Rating 
                          FROM review 
                          WHERE review.itID = 2
                          ORDER BY review.Rating");
                  $row = mysqli_fetch_row($query);
                  echo $row[0]; 
        ?></h4>
    </td>
  </tr>
  <tr>
    <td><span class="material-symbols-outlined">
      account_circle
    </span>
  </td>
  <td>
    <p> Maria Georgiou: </p>
    
  </td>
  <td>
  <h4><?php $query = mysqli_query($con, "SELECT ROUND(AVG(review.Rating),1) AS Rating 
                          FROM review 
                          WHERE review.itID = 3
                          ORDER BY review.Rating");
                  $row = mysqli_fetch_row($query);
                  echo $row[0]; 
        ?></h4>
  </td>
    
  </tr>
</table>
</div>



  </section>  
  </body>
  <script src="review.js"></script>
</html>