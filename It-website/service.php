<?php      

    // session_start();
    include('connection.php');

    if(isset($_POST['book'])){

    $it = $_POST['IT'];  
    $purpose = $_POST['purpose'];   
    $date = $_POST['date'];
    $time = $_POST['time']; 
    $message = $_POST['msg'];

    $result = mysqli_query( $con,"SELECT calendar.Reserved  FROM calendar WHERE calendar.DateOfBooking='$date' AND calendar.TimeOfBooking = '$time' AND itID='$it'");

    if(  mysqli_num_rows($result)!=0){
            echo'<style>
            html {
            background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url("images/icon_logo.jpg");
             background-size: cover ;
            }
             </style>';
            echo'<script>alert("Sorry. Time not available !!")</script>';
            die(header( "refresh:2;url=$_SERVER[HTTP_REFERER]" ));
    }

        //to prevent from mysqli injection  
        // $it = stripcslashes($it);  
        // $purpose = stripcslashes($purpose);
        // $message = stripcslashes($message);
       
        

     

        $sql = $con->prepare("INSERT INTO calendar(DateOfBooking,TimeOfBooking,itID, Reserved,TypeOfMeeting
        , ExtraInformation) VALUES ('$date','$time',$it, 1, '$purpose', '$message')");
      
       
        // insert in database 
        //$rs = mysqli_query($con, $sql);

        if($sql->execute())
        {
          header('Location: payment.html'); 
        }
    }
?>  